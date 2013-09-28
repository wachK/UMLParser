'''
Created on 08-08-2013

@author: karol
'''

from os import makedirs

class ClassMeta(object):
    def __init__(self, classDef=None, discr=None):
        self.classDef = classDef
        self.discr = discr if discr else []


class EntityGenerator(object):
    def __init__(self, path, namespace, inheritance='SINGLE_TABLE'):
        self._path = path
        self._namespace = namespace
        self._inheritance = inheritance
    
    @property
    def path(self):
        return self._path
    @path.setter
    def path(self, v):
        self._path = v
        
    @property
    def namespace(self):
        return self._namespace
    @namespace.setter
    def namespace(self, v):
        self._namespace = v
        
    @property
    def inheritance(self):
        return self._inheritance
    @inheritance.setter
    def inheritance(self, v):
        self._inheritance = v
    
    def generate(self, classes):
        metas = { n.name : ClassMeta(n) for n in classes }

        for meta in metas.values():
            baseName = meta.classDef.parent
            while(baseName):
                base = metas[baseName]
                if not base.classDef.parent:
                    base.discr.append(meta.classDef.name)
                    break;
                baseName = base.classDef.parent
        
        for meta in metas.values():
            try:
                makedirs(self.path)
            except:
                pass
            fp = open(self.path + '/' + meta.classDef.name + '.php', 'w')
            fp.write(self.generateClass(meta))
            fp.close()


    def generateClass(self, meta):
        out = """<?php

namespace {conf.namespace};

/**
 * @Entity"""
 
        if len(meta.discr):
            out +=  """
 * @InheritanceType("{conf.inheritance}")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({{"""
            out += ', '.join([ '"{n}" = "{n}"'.format(n=n) for n in [meta.classDef.name]+meta.discr ])
            out += '}})'
        
        out += """
 */
class {meta.classDef.name}"""

        if meta.classDef.parent:
            out += ' extends ' + meta.classDef.parent
            
        out += ' {{'

        if not meta.classDef.parent:
            out += """
    /**
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    public function getId() {{
        return $this->id;
    }}
    """
        
        out += ''.join([ """
    /**
     * @Column(name="{attribute.name}", type="{attribute.typeName}"{typeLength})
     */
    private ${attribute.name};

    public function get{capitalized}() {{{{
        return $this->{attribute.name};
    }}}}

    public function set{capitalized}(${attribute.name}) {{{{
        $this->{attribute.name} = ${attribute.name};
    }}}}
    """.format(attribute=n, capitalized=n.name[0].upper()+n.name[1:], typeLength=', length='+n.typeLength if n.typeLength else '') for n in meta.classDef.attributes ])
        
        out += """
}}
"""
        
        return out.format(conf=self, meta=meta)

'''
Created on 08-08-2013

@author: karol
'''

class ClassMeta(object):
    def __init__(self, classDef=None, discr=None):
        self.classDef = classDef
        self.discr = discr if discr else []


class EntityGenerator(object):
    def __init__(self, path, namespace, ormNamespace, inheritance='SINGLE_TABLE'):
        self._path = path
        self._namespace = namespace
        self._ormNamespace = ormNamespace
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
    def ormNamespace(self):
        return self._ormNamespace
    @ormNamespace.setter
    def ormNamespace(self, v):
        self._ormNamespace = v
        
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
            fp = open(self.path + '/' + meta.classDef.name + '.php', 'w')
            fp.write(self.generateClass(meta))
            fp.close()


    def generateClass(self, meta):
        out = """<?php

namespace {conf.namespace};

use {conf.ormNamespace} as ORM;

/**
 * {meta.classDef.name}
 * 
 * @ORM\Entity"""
 
        if len(meta.discr):
            out +=  """
 * @ORM\InheritanceType("{conf.inheritance}")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({{"""
            out += ', '.join([ '"{n}" = "{n}"'.format(n=n) for n in meta.discr ])
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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;"""
        
        out += ''.join([ """
    /**
     * @var {attribute.typeName}
     *
     * @ORM\Column(name="{attribute.name}", type="{attribute.typeName}")
     */
    private ${attribute.name};""".format(attribute=n) for n in meta.classDef.attributes ])
        
        out += """
}}
"""
        
        return out.format(conf=self, meta=meta)

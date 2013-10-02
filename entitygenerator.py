'''
Created on 08-08-2013

@author: karol
'''

from os import makedirs
from umlparser import AttributeDef

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
            meta.classDef.attributes = { n.name : n for n in meta.classDef.attributes}
        
        for meta in metas.values():
            try:
                makedirs(self.path)
            except:
                pass
            fp = open(self.path + '/' + meta.classDef.name + '.php', 'w')
            fp.write(self.generateClass(metas, meta))
            fp.close()

    def _genNamespace(self, metas, meta):
        return "namespace {ns};".format(ns=self.namespace)
    
    def _genDiscrMap(self, metas, meta):
        return ', '.join([ '"{n}" = "{n}"'.format(n=n) for n in [meta.classDef.name]+meta.discr ])

    def _genClassDoc(self, metas, meta):
        return """
/**
 * @Entity{discr}""".format(discr="""
 * @InheritanceType("{inheritance}")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({map})""".format(inheritance=self.inheritance, map=self._genDiscrMap(metas, meta)) if len(meta.discr) else "") + """
 */"""
    
    def _genClassName(self, metas, meta):
        return "class " + meta.classDef.name + " " + (" extends " + meta.classDef.parent if meta.classDef.parent else "")
    
    def _genClassId(self, metas, meta):
        return """/**
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    public function getId() {{
        return $this->id;
    }} """ if not meta.classDef.parent else ""
    
    def _genAttrDoc(self, metas, meta, n):
        if n.assoc is None:
            return """/**
     * @Column(name="{name}", type="{typeName}"{typeLength})
     */""".format(name=n.name, typeName=n.typeName, typeLength=', length='+n.typeLength if n.typeLength else '')
        else:
            mappings = {'11': 'OneToOne', '1*': 'OneToMany', '*1': 'ManyToOne', '**': 'ManyToMany'}
            return """/**
     * @{mapping}(targetEntity="{target}"{mappedBy}{inversedBy})
     */""".format(mapping=mappings[n.assoc], target=n.typeName, mappedBy=", mappedBy=\"{field}\"".format(field=n.mappedBy) if n.mappedBy else "",
                  inversedBy=", inversedBy=\"{field}\"".format(field=n.inversedBy) if n.inversedBy else "")
    
    def _genAttrDec(self, metas, meta, n):
        return "private ${name};".format(name=n.name)
    
    def _genAttrGetter(self, metas, meta, n):
        return """
    public function get{capName}() {{
        return $this->{name};
    }}""".format(capName=n.name[0].upper()+n.name[1:], name=n.name)
    
    def _genAttrSetter(self, metas, meta, n):
        return """
    public function set{capName}(${name}) {{
        $this->{name} = ${name};
    }}""".format(capName = n.name[0].upper()+n.name[1:], name=n.name)
    
    def _genClassAttrs(self, metas, meta):
        return """{id}
        """.format(id=self._genClassId(metas, meta)) + "".join([ """
    {doc}
    {dec}
    {getter}
    {setter}
    """.format(doc=self._genAttrDoc(metas, meta, n), dec=self._genAttrDec(metas, meta, n), getter=self._genAttrGetter(metas, meta, n), setter=self._genAttrSetter(metas, meta, n))
    for n in meta.classDef.attributes.values() ])
    
    def _genClassConstructor(self, metas, meta):
        body = "".join(["$this->{name} = new \Doctrine\Common\Collections\ArrayCollection();".format(name=n.name) for n in meta.classDef.attributes.values() if n.assoc and n.assoc[1] == '*'])
        return """public function __construct() {{
        {body}
    }}
        """.format(body=body) if len(body) else ""
    
    def _genEntity(self, metas, meta):
        return """{doc}
{name} {{
    {attributes}
    {constructor}
}}
        """.format(doc=self._genClassDoc(metas, meta), name=self._genClassName(metas, meta), attributes=self._genClassAttrs(metas, meta), constructor=self._genClassConstructor(metas, meta))

    def generateClass(self, metas, meta):
        template = """<?php

{namespace}
{entity}
        """
        
        return template.format(namespace=self._genNamespace(metas, meta), entity=self._genEntity(metas, meta))
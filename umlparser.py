'''
Created on 08-08-2013

@author: karol
'''

from xml.dom.minidom import parse
from re import search

class AttributeDef(object):
    def __init__(self, access=None, name=None, typeName=None, typeLength=None, assoc=None, mappedBy=None, inversedBy=None):
        self.access = access
        self.name = name
        self.typeName = typeName
        self.typeLength = typeLength
        self.assoc = assoc;
        self.mappedBy = mappedBy
        self.inversedBy = inversedBy
        
    def __str__(self):
        return 'Access: {}\nName: {}\nType: {}\n'.format(self.access, self.name, self.typeName)

class MethodDef(object):
    def __init__(self, access=None, name=None, args=None):
        self.access = access
        self.name = name
        self.args = args if(args) else []
        
    def __str__(self):
        return 'Access: {}\nName: {}\nArgs: {}\n'.format(self.access, self.name, self.args)

class ClassDef(object):
    def __init__(self, name=None, parent=None, attributes=None, methods=None):
        self.name = name
        self.parent = parent
        self.attributes = attributes if(attributes) else []
        self.methods = methods if(methods) else []
        
    def __str__(self):
        return 'Name: {}\nParent: {}\nAttributes:{}\nMethods:{}\n'.format(self.name, self.parent, '\n '.join([str(n) for n in self.attributes]), '\n '.join([str(n) for n in self.methods]))
        

class UMLParser(object):  
    def parse(self, fileName):
        self._dom = parse(fileName)
        
    def classes(self):
        def paramValue(param):
            return param.childNodes[1].childNodes[1].childNodes[0].toxml()
        for node in filter(lambda x: x.getAttribute('class') == 'com.horstmann.violet.ClassNode', self._dom.getElementsByTagName('object')):
            classNode = ClassDef()
            for param in node.getElementsByTagName('void'):
                prop = param.getAttribute('property')
                if(prop == 'name'):
                    name = paramValue(param).split(':')
                    classNode.name = name[0].strip()
                    if len(name) > 1:
                        classNode.parent = name[1].strip()
                elif(prop == 'attributes'):
                    lines = paramValue(param).split('\n')
                    for line in lines:
                        m = search('(?P<access>.)\s*(?P<name>.*?)\s*\:\s*(?P<type>.*?)(&gt;(?P<mappedBy>.*?))?(&lt;(?P<inversedBy>.*?))?$', line)
                        try:
                            typeName = search('([^\s\(]+)', m.group('type')).group(1)
                            try:
                                typeLength = search('\((.*?)\)', m.group('type')).group(1)
                            except:
                                typeLength = None
                            assoc = None
                            if typeName[0] == '[':
                                assoc = typeName[1:3]
                                typeName = typeName[4:]
                            mappedBy = m.group('mappedBy')
                            inversedBy = m.group('inversedBy')
                            classNode.attributes.append(AttributeDef(m.group('access'), m.group('name'), typeName, typeLength, assoc, mappedBy, inversedBy))
                        except:
                            print line
                elif(prop == 'methods'):
                    lines = paramValue(param).split('\n')
                    for line in lines:
                        m = search('(?P<access>.)\s*(?P<name>.*?)\((?P<args>.*?)\)\s*$', line)
                        try:
                            classNode.methods.append(MethodDef(m.group('access'), m.group('name'), [n.strip() for n in m.group('args').split(',')]))
                        except:
                            pass
                       
            if(classNode.name):
                yield classNode
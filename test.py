'''
Created on 08-08-2013

@author: karol
'''
import unittest
from umlparser import UMLParser
from entitygenerator import EntityGenerator

class Test(unittest.TestCase):

    def setUp(self):
        self._parser = UMLParser()
        self._parser.parse('crm.class.violet')
        
        self._generator = EntityGenerator(path='entities', namespace='Test\Entity', ormNamespace='Doctrine\ORM\Mapping')

    def testParser(self):
        for obj in self._parser.classes():
            print obj
            
    def testGenerator(self):
        self._generator.generate(self._parser.classes())


if __name__ == "__main__":
    unittest.main()
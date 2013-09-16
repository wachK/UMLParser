'''
Created on 09-08-2013

@author: karol
'''

import sys
from argparse import ArgumentParser
from umlparser import UMLParser
from entitygenerator import EntityGenerator

if __name__ == '__main__':
    argsp = ArgumentParser()
    argsp.add_argument('-i', '--input', dest='fileName', required=True)
    argsp.add_argument('-d', '--dest', dest='path', required=True)
    argsp.add_argument('-ns', '--namespace', dest='namespace', required=True)
    argsp.add_argument('-it', '--inheritancetype', dest='inheritance', default='SINGLE_TABLE')
    args = vars(argsp.parse_args(sys.argv[1:]))

    parser = UMLParser()
    parser.parse(args['fileName'])
    
    del args['fileName']
    
    gen = EntityGenerator(**args)
    gen.generate(parser.classes())

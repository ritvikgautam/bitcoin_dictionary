#!/bin/sh

wget https://github.com/BitcoinDictionary/bitcoindictionary/archive/master.zip

unzip master.zip

find bitcoindictionary-master/ -name "*.asciidoc" -exec cp {} data/ \;

rm master.zip

rm -r bitcoindictionary-master/
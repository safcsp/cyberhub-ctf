CC=gcc
CFLAGS=-I. -O0 -faggressive-loop-optimizations -Wno-unknown-pragmas -finline-functions -trigraphs -fisolate-erroneous-paths-dereference 

build: what_the_key.c
	$(CC) $(CFLAGS) -D BuiltWithMake -o what_the_key what_the_key.c 
	chmod +x what_the_key

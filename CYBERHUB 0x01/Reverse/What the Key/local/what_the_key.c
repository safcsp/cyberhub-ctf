#include <stdio.h>

#ifndef BuiltWithMake
	#error "Don't compile this directly, use `make build` to compile"
	// Prerequisites: sudo apt-get install gcc make
	#include <stophere>
#else
int main(){
	int key = 3133337;
	int entered = 0;
	// Multiply by 2 and then add 1!! / Shouldn't that be secure and hard enough??/
	key = key*2;
	key++;
	printf("Enter the key: ");
	scanf("%d", &entered);
	if(entered == key){
		printf("The flag is XXXXX\n");
	}else{
		printf("Wrong key!\n");
	}
	return 0;
}
#endif

#include <stdio.h>
int main(){
	setuid(0);
	setgid(0);
	system("id");
	system("date '+%A %W %Y %X'");
	return 0;
}

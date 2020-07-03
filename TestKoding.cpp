#include <iostream>
using namespace std;
main () {
	int s;
	int kolom = 1;
	for (int i=1;i<=15;i++) {
		for (int j=1;j<=15;j++) {
			if (i % 2 == 1) {
				if (kolom % 2 == 1) {
					if (j == 2) {
						cout<<" ";
					} else {
						cout<<"@";
					}
				} else {
					if (j == 14) {
						cout<<" ";
					} else {
						cout<<"@";
					}
				}
				if (j == 15) {
					kolom++;
				}	
			} else {
				if (j == 1 || j == 15) {
					cout<<"@";
				} else {
					cout<<" ";
				}
			}
		}
		cout<<endl;
	}
}

#include <iostream>
#include <stdio.h>
#include <windows.h>
#include <sstream>
using namespace std;

int pos = 0;

FILE* out;
FILE* ok;
FILE* verdict;

float scor = 0;
int TestCount = 0;
int TimeLimit = 0;

void Cleanup();

void Read () {
	while (true) {
			char c1, c2;
			fread(&c1, sizeof(char), 1, out);
			fread(&c2, sizeof(char), 1, ok);
			if (c1 != c2) {
				return;
			}
			
			if (feof(out) && !feof(ok)) {
				return;
			}
			
			if (feof(ok)) { //test corect
				scor += (float) 100 / TestCount;
				return;
			}
	}
}

int main () {
	fscanf(fopen("problema.ini", "r"), "%d", &TestCount);
	verdict = fopen("verdict.boss", "w");
	system ("g++ 100.cpp -o 100.exe -std=c++11");
	system ("g++ cobai.cpp -o cobai.exe -std=c++11");
	
	for (int i = 1; i <= TestCount; i++) {
		stringstream ss;
		ss << "copy teste\\test" << i << ".in " << "test.in";
		system(ss.str().c_str());
		
		system("start /w 100.exe");
		system("start listener.exe");
		system("start /w cobai.exe");
		system("taskkill /f /t /im listener.exe");
		
		out = fopen("test.out", "r");
		ok = fopen("test.ok", "r");
		
		Read();
		fclose (out);
		fclose (ok);
	}
	
	FILE* verdictIN = fopen("verdict.boss", "r");
	int ERRcode = 0;
	fscanf(verdictIN, "%d", &ERRcode);
	
	if (ERRcode < 0)
		fprintf(verdict, "%d", ERRcode);
	else
		fprintf(verdict, "%d", (int) scor);
	
	Cleanup();
	return 0;
}

void Cleanup () {
	cout << "Cleaning up...";
	system("del test.in");
	system("del test.out");
	system("del test.ok");
	system("del 100.exe");
	system("del cobai.cpp");
	system("del cobai.exe");
}
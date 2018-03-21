#include <time.h>
#include <stdio.h>
#include <windows.h>

int main () {
	FILE* verdict = fopen("verdict.boss", "w");
	int TimeLimit;
	int prost;
	FILE* prob = fopen("problema.ini", "r");
	
	fscanf(prob, "%d %d", &prost, &TimeLimit);
	clock_t beg = clock();
	
	while (true) {
		if (((double)(clock() - beg) / CLOCKS_PER_SEC) * 1000 > TimeLimit + 200) {
			system("start /w taskkill /f /im cobai.exe");
			fprintf(verdict, "-1");
			break;
		}
	}
}
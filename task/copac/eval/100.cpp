#include<stdio.h>
#include<vector>
#define MAXN 10000
void dfs(int nod);
FILE*fin,*fout;
int d[MAXN+1];
bool vizitat[MAXN+1];
std::vector<int> neighbors[MAXN+1];
int muchii[MAXN+1][2];
int main()
{
    fin=fopen("test.in","r");
    fout=fopen("test.ok","w");
    int T=1;
    //fscanf(fin,"%d",&T);
    for(int i=1; i<=T; i++)
    {
        int N;
        fscanf(fin,"%d",&N);
        for(int j=1; j<=N-1; j++)
        {
            fscanf(fin,"%d %d",&muchii[j][0],&muchii[j][1]);
            neighbors[muchii[j][0]].push_back(muchii[j][1]);
            neighbors[muchii[j][1]].push_back(muchii[j][0]);
        }
        for(int j=1; j<=N; j++)
        {
            d[j]=0;
        }
        dfs(1);
        bool ok=0;
        for(int j=1; j<=N; j++)
        {
            int downstream=0;
            bool bine=1;
            for(int k=0; k<neighbors[j].size() && bine; k++)
            {
                int vec=neighbors[j][k];
                if(d[vec]<d[j])
                {
                    if(d[vec]>N/2)
                    {
                        bine=0;
                    }
                    downstream+=d[vec];
                }
            }
            if(N-1-downstream>N/2)
            {
                bine=0;
            }
            if(bine)
            {
                ok=1;
                fprintf(fout,"%d\n",j);
            }
        }
        if(!ok)
        {
            fprintf(fout,"Winter is here\n");
        }
        for(int j=1;j<=N;j++)
        {
            neighbors[j].clear();
        }
    }
    fclose(fin);
    fclose(fout);
    return 0;
}
void dfs(int nod)
{
    d[nod]=1;
    for(int i=0; i<neighbors[nod].size(); i++)
    {
        int vec=neighbors[nod][i];
        if(d[vec]==0)
        {
            dfs(vec);
            d[nod]+=d[vec];
        }
    }
}
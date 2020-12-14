#include<stdio.h>
#include<stdlib.h>

int main(){
    int t,n,k,u=0,v=0,time=0,profit=0,min=0,i;
    // checking value of 't','k' (un-initialised variable)
        scanf("%d %d %d",&t,&n,&k);

    int x[n],y[n],h[k],d[k],c[k],p[k],b=0;
    for(int a=0;a<k;a++)
    {
        scanf("%d %d %d %d %d %d",&x[b],&y[b],&h[b],&d[b],&c[b],&p[b]);
        b++;
    }
/*
Let's focus on cutting only one tree. Since we start from (0,0), best would be to cut that tree which lies closest to the origin. 
we find that tree which can be reached and cut in the given time  interval.
*/
    for(i=0;i<k;i++){
        // when we find a tree that can be reached and cut in 't' time, we stop further search.
        if(x[i]+y[i]+d[i]<=t)
            break;
    }

    for(int x_index=0;x_index<x[i];x_index++)
        printf("move right\n");
    for(int y_index=0;y_index<y[i];y_index++)
        printf("move up\n");
    // finally we reach the cell we need to cut 
    printf("cut up\n");


//printf("%d\n",profit);
return 0;
}

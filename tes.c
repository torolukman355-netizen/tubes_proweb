#include <stdio.h>
int main(){
    int i, n;

    printf("Contoh perulangan for\n");
    printf("Berikan sebuah bilangan bulat: ");
    scanf("%d", &n);
    for(i=n; i>0; i--)
        printf("%d ", i);
    printf("\n");
    return 0;
}
#include <stdio.h>
int main(){
    float radio, area;
    printf("inserte el radio del circulo");
    scanf("%f", &radio);
    area = 3.1416 * radio * radio;
    printf("el area del circulo es: %f", area);
    return 0;
}
#include <cs50.h>
#include <stdio.h>

// Prompt user for positive integer
float get_positive_int()
{
    float n;
    do
    {
        n = get_float("Change owed: ");
    }
    while (n < 0);
    return n;
}

int main(void){



    // printf("input: %f\n", n);
    // printf("coins: %d", total);

    // int n = 100 * get_positive_int();
    // int total = 0;
    // bool ended = false;
    // while(n>0 && !ended)
    // {
    //     printf("n: %d\n", n);
    //     printf("total: %d\n\n", total);
    //     if(n >= 25)
    //         n -= 25;
    //     else if (n >= 10)
    //         n -= 10;
    //     else if (n >= 5)
    //         n -= 5;
    //     else if(n >= 1)
    //         n -= 1;
    //     else{
    //         printf("ended\n");
    //         printf("n: %d\n", n);
    //         ended = true;
    //     }
    //     total++;
    // }
    // printf("total: %d", total);

    int coins[] = { 25, 10, 5, 1};
    int i = 0;
    int num = 0;
    int input = 10000 * get_positive_int() / 100;
    while(input > 0 && i<4)
    {
        int coin = coins[i];
        if(input >= coin){
            input -= coin;
            num++;
            printf("%d\n", input);
        }
        else{
            i++;
        }
    }
    printf("%d", num);
    return 0;
}

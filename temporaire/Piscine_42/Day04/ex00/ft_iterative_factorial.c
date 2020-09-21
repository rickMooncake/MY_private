#include <time.h>
#include <stdio.h>

int ft_iterative_factorial(int nb)
{
    int i;
    int result;

    i = 0;
    result = 1;
    if ((nb <= 0) || (nb > 12))
        return (0);
    if (nb == 1)
        return (1);
    while (i <= nb)
    {
        result = i * result;
        i++;
    }
    return (result);
}

int main(void)
{
    time_t debut, fin;
    double duree;

    debut=time(NULL);
    ft_iterative_factorial(12);
    fin=time(NULL);
    duree=difftime(fin, debut);
    printf("%f", duree);
}
int ft_sqrt(int nb)
{
    int i;
    int racine;

    i = 1;
    racine = 1;
    if (nb == 0)
        return (0);
    while (i * i < nb)
        i++;
    if ((nb % i) == 0)
        return (i);
    else
        return (0);
}
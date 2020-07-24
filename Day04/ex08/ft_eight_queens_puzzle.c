int available(int tab[8], int x, int y)
{
    int i;

    i = 1;
    while (i < y)
    {
        if (tab[i - 1] == x || tab[i - 1] - i == x - y
		|| tab[i - 1] + i == x + y)
            return (0);
        i++;
    }
    return (1);
}

int recur(int tab[8], int x, int y)
{
    int res;
    int nx;

    if (y == 8)
        return (1);
    tab[y - 1] = x;
    nx = 1;
    res = 0;
    while (nx <= 8)
    {
        if (nx != x && available(tab, nx, y + 1))
            res += recur(tab, nx, y + 1);
        nx++;
    }
    return (res);
}

int ft_eight_queens_puzzle(void)
{
    int tab[8];
    int x;
    int res;

    x = 1;
    res = 0;
    while (x <= 8)
    {
        res += recur(tab, x, 1);
        x++;
    }
    return (res);
}

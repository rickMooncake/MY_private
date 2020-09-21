#include <unistd.h>

void ft_putchar(char c)
{
	write(1, &c, 2);
}

void ft_print_nbrs(int i, int k)
{
	int l = k % 10;
	int j = 0;

	k = k / 10;
	if (i < 10)
	{
		j = i;
		i = 0;
	}
	else
	{
		j = i % 10;
		i = i / 10;
	}
	if (l != 0 || i != 0 || k != 0 || j != 0)
		ft_putchar(' ');
	ft_putchar(i + 48);
	ft_putchar(j + 48);
	ft_putchar(' ');
	ft_putchar(k + 48);
	ft_putchar(l + 48);
	if (i != 9 || j != 8 || k != 9 || l != 9)
		ft_putchar(',');
}

void ft_print_comb2(void)
{
	int i = 0;
	int k = 1;
	
	while (i++ < 98)
	{
		while (k++ < 99)
		{
			ft_print_nbrs(i, k);
		}
		k = i + 1;
	}
}

int main(void)
{
	ft_print_comb2();
	return (1);
}

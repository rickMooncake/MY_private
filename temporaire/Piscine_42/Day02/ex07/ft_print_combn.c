#include <unistd.h>

void ft_putchar(char c)
{
	write(1, &c, 1);
}

void ft_nbrs(int n, int i)
{
	if (n > 0 && i <= 9)
	{
		i = n - 1;
		ft_nbrs(n - 1, i + 1);
		ft_putchar(i + 48);
		i++;
	}
}

void ft_print_combn(int n)
{
	int i;
	i = 0;
	ft_nbrs(n, i);
	ft_print_combn(n - 1);
}

int main(void)
{
	ft_print_combn(3);
	return (1);
}

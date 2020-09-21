#include <unistd.h>

void ft_putchar(char c)
{
	write(1, &c, 1);
}

void ft_putnbr(int nb)
{
	if (nb < 0)
	{
		ft_putchar('-');
		nb *= -1;
	}
	if (nb > 100)
		ft_putnbr(nb / 10);
	if (nb < 100)
	{
		ft_putchar((nb / 10) + 48);
		ft_putchar((nb % 10) + 48);
	}
	else
		ft_putchar((nb % 10) + 48);
}

int main(void)
{
	ft_putnbr(42);
	ft_putchar('\n');
	ft_putnbr(42000);
	ft_putchar('\n');
	ft_putnbr(2147483647);
	ft_putchar('\n');
	ft_putnbr(-56);
	ft_putchar('\n');
	ft_putnbr(42);
	ft_putchar('\n');
}

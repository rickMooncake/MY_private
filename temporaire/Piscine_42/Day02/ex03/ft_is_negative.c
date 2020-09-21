#include <unistd.h>

void ft_putchar(char c)
{
	write(1, &c, 1);
}

void ft_is_negative(int n)
{
	if (n < 0)
		ft_putchar('N');
	if (n > 0)
		ft_putchar('P');
	ft_putchar('\n');
}

int main(void)
{
	ft_is_negative(-2);
	ft_is_negative(2);
	ft_is_negative(-5);
	ft_is_negative(5);
	ft_is_negative(-1000);
}

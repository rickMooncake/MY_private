#include <unistd.h>

void ft_putchar(char c)
{
	write(1, &c, 1);
}

void ft_print_alphabet(void)
{
	char letter = 'a';

	while (letter != 'z' + 1)
	{
		ft_putchar(letter);
		letter++;
	}
	ft_putchar('\n');
}

int main(void)
{
	ft_print_alphabet();
	return (1);
}

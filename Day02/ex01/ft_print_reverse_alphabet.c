#include <unistd.h>

void ft_putchar(char c)
{
	write(1, &c, 1);
}

void ft_print_reverse_alphabet(void)
{
	char letter = 'z';

	while (letter != 'a' - 1)
	{
		ft_putchar(letter);
		letter--;
	}
	ft_putchar('\n');
}

int main(void)
{
	ft_print_reverse_alphabet();
	return (1);
}

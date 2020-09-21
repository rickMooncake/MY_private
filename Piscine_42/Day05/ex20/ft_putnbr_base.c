#include <unistd.h>

void ft_putchar(char c)
{
	write(1, &c, 1);
}

int ft_strlen(char *str)
{
	int i;

	i = 0;
	while (str[i] != '\0')
		i++;
	return (i);
}

int ft_check_base(char *base)
{
	int i;
	int j;

	if (ft_strlen(base) < 2)
		return (0);
	i = 0;
	while (base[i])
	{
		if (base[i] == '-' || base[i] == '+' || base[i] < 32 || base[i] > 126)
			return (0);
		j = i + 1;
		while (base[j])
		{
			if (base[i] == base[j])
				return (0);
			j++;
		}
		i++;
	}
	return (1);
}

void ft_putnbr_base(int nbr, char *base)
{
	char nbr_c[32];
	int base_divider;
	int i;

	if (!ft_check_base(base))
		return ;
	base_divider = ft_strlen(base);
	if (nbr < 0)
	{
		nbr *= -1;
		ft_putchar('-');
	}
	i = 0;
	while (nbr > 0)
	{
		nbr_c[i] = base[nbr % base_divider];
		nbr /= base_divider;
		i++;
	}
	while (--i >= 0)
		ft_putchar(nbr_c[i]);
}

int main(void)
{
	ft_putnbr_base(42, "poneyvif");
}

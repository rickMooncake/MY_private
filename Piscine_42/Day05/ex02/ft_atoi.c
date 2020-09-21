#include <stdio.h>
#include <stdlib.h>

int ft_atoi(char *str)
{
	int i;
	int res;
	int negative;

	i = 0;
	negative = 1;
	res = 0;
	while (str[i] != '\0' && (str[i] == ' ' || str[i] == '\n'
		|| str[i] == '\t' || str[i] == '\v'
		|| str[i] == '\f' || str[i] == '\r'))
		i++;
	if (str[i] == '-')
		negative = -1;
	if (str[i] == '+' || str[i] == '-')
		i++;
	while (str[i] != '\0' && (str[i] >= 48 && str[i] <= 57))
	{
		res = res * 10 + (str[i] - 48);
		i++;
	}
	return (res * negative);
}

/*
 * 2025-05-16
 * Code Golf: Modulus Summation
 * https://codegolf.stackexchange.com/questions/150563/modulus-summation?noredirect=1&lq=1
 * For this sequence, you take all the positive integers m less than the input n, 
 * and take the sum of n modulo each m. In other words:
 * a_n = \sum_{m=1}^{n-1}{n\bmod m}
 * ∑(x % k) from k=1 to k=x
 */
Console.WriteLine(getModulusSummation(14));
Console.WriteLine(getModulusSummation(9));
Console.WriteLine(getModulusSummation(52));

int getModulusSummation(int num)
{
    int modulusSum = 0;
    for (int i = 1; i < num; i++)
    {
        int remainder = num % i;
        modulusSum += remainder;
    }

    return modulusSum;
}
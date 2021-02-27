/*
 * 1/4/2020
 * 
 * https://projectlovelace.net/problems/almost-pi/
 * 
 * Calculate the approximation of pi using the below formula.
 * input: n terms
 * 4 * ∑((-1^k)/(2k+1)) from k=0 to k=n
 */
using System;

namespace AlmostPi
{
    class Program
    {
        static void Main(string[] args)
        {
            double pi = 0;
            int n = 0;
            bool retryInput = true;

            // Get input.
            do
            {
                try
                {
                    Console.Write("Input: ");
                    n = int.Parse(Console.ReadLine());
                    if (n > 0)
                    {
                        retryInput = false;
                    }
                    else
                    {
                        Console.WriteLine("Incorrect input. Input must be a number greater than 0.");
                        retryInput = true;
                    }
                }
                catch
                {
                    Console.WriteLine("Incorrect input. Input must be a number greater than 0.");
                    retryInput = true;
                }
            } while (retryInput);

            for (int k = 0; k <= n - 1; k++)
            {
                pi += Math.Pow(-1, k) / (2 * k + 1) ;
            }
            pi *= 4;

            Console.WriteLine("Output: " + pi.ToString("R"));
        }
    }
}

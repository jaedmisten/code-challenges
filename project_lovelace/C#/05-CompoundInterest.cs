/*
 * 5/25/2021
 *
 * https://projectlovelace.net/problems/compound-interest/
 *
 * Calculate the total amount of money after a certain amount of years if 
 * interest is compounded yearly.
 *
 * m = amount of money
 * r = interest rate (between 0 and 1)
 * n = number of years
 * M = total amount of money
 * M = m(1 + r)^n
 * 
 */
using System;

namespace CompoundInterest
{
    class Program
    {
        static void Main(string[] args)
        {
            double amount = 0, rate = 0;
            int years = 0;
            bool retryInput = false;

            do
            {
                Console.Write("Input (amount, rate, years): ");
                string inputStr = Console.ReadLine();

                try
                {
                    var inputArr = inputStr.Split(',');
                    amount = double.Parse(inputArr[0]);
                    rate = double.Parse(inputArr[1]);
                    years = int.Parse(inputArr[2]);
                    retryInput = false;
                }
                catch (Exception)
                {
                    Console.WriteLine("Incorrect input. Input must be three numbers separted by commas. e.g. 1000, 0.07, 25");
                    retryInput = true;
                }
            } while (retryInput);

            double newAmount = CompoundInterest(amount, rate, years);
            Console.WriteLine("Output: " + Math.Round(newAmount, 2));
        }

        public static double CompoundInterest(double amount, double rate, int years)
        {
            return amount * Math.Pow(1 + rate, years);
        }
    }
}

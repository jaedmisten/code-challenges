/*
 * 10/10/2020
 * 
 * https://projectlovelace.net/problems/definite-integrals/
 * 
 * Write a program that takes a list of input rectangle heights and a rectangle width 
 * and calculates and outputs the sum of the rectangle areas.
 * 
 */
using System;

namespace DefiniteIntegrals
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Input list of rectangles heights: ");
            var inputTemps = Console.ReadLine();
            inputTemps = inputTemps.Trim(new char[] { '[', ']' });
            inputTemps = inputTemps.Replace(" ", string.Empty);
            var temps = inputTemps.Split(',');

            Console.Write("Input rectangle width: ");
            var width = Console.ReadLine();

            try
            {
                var area = 0f;
                for (int i = 0; i < temps.Length; i++)
                {
                    area += float.Parse(temps[i]) * float.Parse(width);
                }
                Console.WriteLine("Output area: " + area + "\n");
            }
            catch (Exception)
            {
                Console.WriteLine("Error: Please check input.\nList of rectangles heights input needs to be in format of [1, 2, 3].\n");
            }
        }
    }
}

/*
 * 1/18/2020
 * 
 * https://projectlovelace.net/problems/flight-paths/
 * 
 * Write a program that takes a list of input temperatures and calculates and 
 * outputs the mean and standard deviation.
 * 
 */
using System;

namespace TemperatureVariations
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Input temperatures: ");
            var inputTemps = Console.ReadLine();
            inputTemps = inputTemps.Trim(new char[] { '[', ']'});
            inputTemps = inputTemps.Replace(" ", String.Empty);
            var temps = inputTemps.Split(',');

            try
            {
                var mean = getMean(temps);
                var standardDeviation = getStandardDeviation(temps, mean);

                Console.WriteLine("Output mean: " + Math.Round(mean, 3));
                Console.WriteLine("Output standard deviation: " + Math.Round(standardDeviation, 3));
            } catch
            {
                Console.WriteLine("Error: Please check input. Input needs to be in format of [4.4, 4.2, 7.0]");
            }
        }

        public static float getMean(string[] temps)
        {
            
            var sum = 0f;
            for (int i = 0; i < temps.Length; i++)
            {
                sum += float.Parse(temps[i]);
            }
            return sum / temps.Length;
        }

        public static double getStandardDeviation(string[] temps, float mean)
        {
            var squaredDeviationsSum = 0d;
            for (int i = 0; i < temps.Length; i++)
            {
                squaredDeviationsSum += Math.Pow((float.Parse(temps[i]) - mean), 2);
            }
            return Math.Sqrt(squaredDeviationsSum / temps.Length);
        }
    }
}

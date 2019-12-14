/*
 * 12/14/2019
 *
 * https://projectlovelace.net/problems/wind-chill/
 *
 * Write a function that takes input of temperature in celcius and wind speed in kilometers per hour.
 * Then calculate the wind chill index.
 * 
 */
using System;

namespace WindChill
{
    class Program
    {
        static void Main(string[] args)
        {
            float temp = 0, windSpeed =0;
            bool retryTempInput = false, retryWindSpeedInput = false;

            // Get temperature input.
            do
            {
                Console.Write("Input Celsius temperature: ");
                try
                {
                    temp = float.Parse(Console.ReadLine());
                    retryTempInput = false;
                }
                catch
                {
                    Console.WriteLine("\nWrong input type entered. Please enter a number.");
                    retryTempInput = true;
                }
            } while (retryTempInput);

            // Get wind speed input.
            do
            {
                Console.Write("Input wind speed (km/h): ");
                try
                {
                    windSpeed = float.Parse(Console.ReadLine());
                    if (windSpeed >= 0)
                    {
                        retryWindSpeedInput = false;
                    }
                    else
                    {
                        Console.WriteLine("Incorrect input. Wind speed must be greater than or equal to zero.");
                        retryWindSpeedInput = true;
                    }                  
                }
                catch
                {
                    Console.WriteLine("\nWrong input type entered. Please enter a number greater than or equal to zero.");
                    retryWindSpeedInput = true;
                }                
            } while (retryWindSpeedInput);


            Console.WriteLine("Output wind chill index: " + Math.Round(WindChill(temp, windSpeed), 2));
        }

        public static double WindChill(float t_a,float v)
        {
            double windChillIndex = 13.12 + (0.6215f * t_a) - (11.37 * Math.Pow(v, 0.16f)) + (0.3965 * t_a * Math.Pow(v, 0.16));
            return windChillIndex;
        }
    }
}

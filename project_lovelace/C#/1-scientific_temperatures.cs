/*
 * 11/25/2019
 *
 * https://projectlovelace.net/problems/scientific-temperatures/
 *
 * Write a function fahrenheit_to_celsius(F) that takes an input of Fahrenheit temperature 
 * and converts it to Celsius.
 * C = 5/9 (F - 32)
 */
 
using System;

namespace ScientificTemperatures
{
    class Program
    {
        static void Main(string[] args)
        {       
            Boolean retryInput = false;
            do
            {
                Console.Write("Input Fahrenheit temperature: ");
                try
                {
                    float fahrenheitTemp = float.Parse(Console.ReadLine());
                    Console.WriteLine("Output Celsius temperature: " + FahrenheitToCelsius(fahrenheitTemp));
                    retryInput = false;
                }
                catch
                {
                    Console.WriteLine("\nWrong input type entered. Please enter a number.");
                    retryInput = true;
                }
            } while (retryInput);
        }

        public static float FahrenheitToCelsius(float fahrenheitTemp)
        {
            float celsiusTemp = (fahrenheitTemp - 32) * (5f / 9f);
            return celsiusTemp;
        }
    }
}
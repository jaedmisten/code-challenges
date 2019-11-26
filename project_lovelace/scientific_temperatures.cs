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
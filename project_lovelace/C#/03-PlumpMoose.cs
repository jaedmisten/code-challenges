/*
 * 5/25/2021
 * 
 * https://projectlovelace.net/problems/plump-moose/
 * 
 * * Calculate the expected body mass of a moose living at the input latitude using
 * the equation: mass = a * latitude + b
 * a = 2.757
 * b = 16.793
 * 
 */
using System;

namespace PlumpMoose
{
    class Program
    {
        static void Main(string[] args)
        {
            double latitude = 0;
            bool retryInput = false;
            do
            {
                Console.Write("Input latitude: ");
                try
                {
                    latitude = double.Parse(Console.ReadLine());
                    if (latitude < 0 || latitude > 90)
                    {
                        Console.WriteLine("Incorrect input. Latitude must be a number between 0 and 90.");
                        retryInput = true;
                    }
                    else
                    {
                        retryInput = false;
                    }
                }
                catch (Exception)
                {
                    Console.WriteLine("Incorrect input. Latitude must be a number between 0 and 90.");
                    retryInput = true;
                }
            } while (retryInput);

            Console.WriteLine("Output body mass: " + MooseBodyMass(latitude));
        }

        public static double MooseBodyMass(double latitude)
        {
            const double a = 2.757;
            const double b = 16.793;
            double mass = a * latitude + b;
            return mass;
        }
    }
}

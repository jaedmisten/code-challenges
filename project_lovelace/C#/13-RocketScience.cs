/*
 * 2/27/2021
 * 
 * https://projectlovelace.net/problems/rocket-science/
 * 
 * Calculate the mass of fuel needed by a rocket to escape Saturn.
 * 
 * m fuel = M(e^(v/ve) - 1))
 * M: Mass of the rocket with no fuel.
 * e: Euler's number 2.71828
 * v: Velocity the rocket needs to escape the planet.
 * ve: Exhaust velocity of the rocket.
 * 
 */
using System;

namespace RocketScience
{
    class Program
    {
        static void Main(string[] args)
        {
            double escapeVelocity = 0;
            bool retryInput = false;
            do
            {
                Console.Write("Input: ");
                try
                {
                    escapeVelocity = double.Parse(Console.ReadLine());
                    if (escapeVelocity <= 0)
                    {
                        Console.WriteLine("Input must be a number greater than 0.");
                        retryInput = true;
                    }
                    else
                    {
                        retryInput = false;
                    }
                }
                catch (Exception)
                {
                    Console.WriteLine("Input must be a number greater than 0.");
                    retryInput = true;
                }
            } while (retryInput);

            var fuelMass = CalculateFuelMass(escapeVelocity);
            Console.WriteLine("Output: " + Math.Round(fuelMass, 2));
        }

        public static double CalculateFuelMass(double escapeVelocity)
        {
            const double eulersNum = 2.71828;
            var rocketMass = 250000;
            var exhaustVelocity = 2550;

            return rocketMass * (Math.Pow(eulersNum, escapeVelocity/exhaustVelocity) - 1);
        }
    }
}

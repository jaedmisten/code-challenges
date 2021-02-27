/*
 * 11/29/2019
 *
 * https://projectlovelace.net/problems/speed-of-light/
 *
 * Write a function that takes input of distance in meters and
 * calculates the time in speed of light it takes to travel that distance.
 * 
 * Light travels at constant speed c of 299,792,458 meters per second.
 * The time t it takes to travel a distance d is t=d/c.
 * 
 */
using System;

namespace SpeedOfLight
{
    class Program
    {
        static void Main(string[] args)
        {

            bool retryInput = false;
            do
            {
                Console.Write("Input distance: ");
                try
                {
                    float distance = float.Parse(Console.ReadLine());
                    if (distance > 0)
                    {
                        Console.WriteLine("Output time: " + light_time(distance).ToString("N12"));
                        retryInput = false;
                    }
                    else
                    {
                        Console.WriteLine("Input must be greater than 0.");
                        retryInput = true;
                    }                   
                } catch
                {
                    Console.WriteLine("Input must be a number that is greater than 0.");
                    retryInput = true;
                }
            } while (retryInput);
        }

        public static float light_time(float distance)
        {
            const int LightSpeedInMeters = 299792458;
            float time = distance / LightSpeedInMeters; 
            return time;
        }
    }
}
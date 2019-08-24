/* 
 * 8/23/2019
 * 
 * Generate random UUID.
 * 
 * code golf link:  https://codegolf.stackexchange.com/questions/58442/generate-random-uuid?rq=1
 * 
 * Generate 32 random hexadecimal digits in the form 8-4-4-4-12 digits.
 * example: ab13901d-5e93-1c7d-49c7-f1d67ef09198
 * 
 */

using System;

namespace UUID
{
    class Program
    {
        static void Main(string[] args)
        {
            char[] hexDigits = {'0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f'};
            string uuid = "";
            Random random = new Random();
            int randNum;

            for (int i = 1; i <= 8; i++)
            {
                randNum = random.Next(0, hexDigits.Length);
                uuid += hexDigits[randNum];
            }
            uuid += '-';

            for (int i = 1; i <= 3; i++)
            {
                for (int j = 1; j <= 4; j++)
                {
                    randNum = random.Next(0, hexDigits.Length);
                    uuid += hexDigits[randNum];
                }
                uuid += '-';
            }

            for (int i = 1; i <= 12; i++)
            {
                randNum = random.Next(0, hexDigits.Length);
                uuid += hexDigits[randNum];
            }

            Console.WriteLine(uuid);
        }
    }
}

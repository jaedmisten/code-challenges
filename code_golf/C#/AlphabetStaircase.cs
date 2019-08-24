/*
 * 8/24/2019
 * 
 * Alphabet Staircase
 * 
 * https://codegolf.stackexchange.com/questions/147469/alphabet-staircase
 * 
 * Create a program or function that outputs the following with no input.
 * 
 * a
 * bb
 * ccc
 * dddd
 * eeeee
 * ffffff
 * ggggggg
 * ...
 */

using System;

namespace AlphabetStaircase
{
    class Program
    {
        static void Main(string[] args)
        {
            // Using the alphabet as a string.
            string alphabetStr = "abcdefghijklmnopqrstuvwxyz";
            for (int i = 0; i < alphabetStr.Length; i++)
            {
                for (int j = 0; j <= i; j++)
                {
                    Console.Write(alphabetStr[i]);
                }
                Console.WriteLine();
            }
            Console.WriteLine();
            Console.WriteLine();

            
            // Using the alphabet as an array.
            char[] alphabetArr = {'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'};
            for (int i = 0; i < alphabetArr.Length; i++)
            {
                for (int j = 0; j <= i ; j++)
                {
                    Console.Write(alphabetArr[i]);
                }
                Console.WriteLine();
            }
            Console.WriteLine();
            Console.WriteLine();


            // Incrementing characters.
            int counter = 1;
            for (char letter = 'a'; letter <= 'z'; letter++)
            {
                for (int j = 1; j <= counter; j++)
                {
                    Console.Write(letter);
                }
                counter++;
                Console.WriteLine();
            }
            Console.WriteLine();
            Console.WriteLine();
        }
    }
}

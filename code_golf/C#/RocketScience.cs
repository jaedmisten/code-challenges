/* 
 * 8/29/2019
 *
 * This isn't rocket science
 * 
 * code golf link:  https://codegolf.stackexchange.com/questions/91182/this-isnt-rocket-science
 * 
 * Write a program or function that takes in a single-line string. You can assume it only contains
 * printable ASCII. Print or return a string of an ASCII art rocket such as
 * 
 *   |
 *  /_\
 *  |E|
 *  |a|
 *  |r|
 *  |t|
 *  |h|
 *  |_|
 * /___\
 *  VvV
 *
 */

using System;

namespace RocketScience
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Enter a string: ");
            string input = Console.ReadLine();
            Console.WriteLine();

            Console.WriteLine("  |\n /_\\");
            for (int i = 0; i < input.Length; i++)
            {
                Console.WriteLine(" |" + input[i] + "|");
            }
            Console.WriteLine(" | |\n/___\\\n VvV");
        }
    }
}

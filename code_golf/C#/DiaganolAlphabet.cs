/*
 * 1/21/2020 
 * 
 * Diagonal Alphabet
 * 
 * code golf link: https://codegolf.stackexchange.com/questions/125117/diagonal-alphabet?noredirect=1&lq=1
 * 
 * Given no input, your task is to generate the following:
 * 
 * a
 *  b
 *   c
 *    d
 *     e
 *      f
 *       g
 *        h
 *         i
 *          j
 *           k
 *            l
 *             m
 *              n
 *               o
 *                p
 *                 q
 *                  r
 *                   s
 *                    t
 *                     u
 *                      v
 *                       w
 *                        x
 *                         y
 *                          z
 *                          
 */
using System;

namespace DiagonalAlphabet
{
    class Program
    {
        static void Main(string[] args)
        {
            // incrementing characters
            char letter = 'a';
            for (int i = 0; letter <= 'z'; i++, letter++)
            {
                for (int j = 0; j < i; j++)
                {
                    Console.Write(' ');
                }
                Console.WriteLine(letter);
            }
            Console.WriteLine();
            Console.WriteLine();


            // Using the alpahbet as a string.
            string alphabet = "abcdefghijklmnopqrstuvwxyz";
            for (int i = 0; i < alphabet.Length; i++)
            {
                for (int j = 0; j < i; j++)
                {
                    Console.Write(' ');
                }
                Console.WriteLine(alphabet[i]);
            }
            Console.WriteLine();
            Console.WriteLine();


            // Using an array of the alphabet.
            char[] alphabetArray = new char[] {'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'};
            for (int i = 0; i < alphabetArray.Length; i++)
            {
                for (int j = 0; j < i; j++)
                {
                    Console.Write(' ');
                }
                Console.WriteLine(alphabetArray[i]);
            }
        }
    }
}

/*
 * 9/7/2019
 * 
 * Passwordify the string
 * 
 * https://codegolf.stackexchange.com/questions/76486/passwordify-the-string
 * 
 * Take a string as input. This string will only contain uppercase letters, lowercase letters, 
 * digits, and spaces.
 * 
 * You must replace all spaces with underscores and move all numbers to the end of the string in
 * the order that they appear from left to right. Then, for every letter in the string, randomly
 * change it to uppercase or lowercase.
 * 
 */

using System;

namespace PasswordifyString
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] words = {"Hello world", "pa55 w0rd", "14 35", "0971", " ", "1Jessie2 3Edmisten4",
                              "1pass 2word3", "12asdfg34qwert56zx"};

            foreach (string word in words)
            {
                Console.WriteLine(word);
                Console.WriteLine(passwordify(word));
                Console.WriteLine();
            }
        }

        static string passwordify(string word)
        {
            // Replace spaces with underscores.
            word = word.Replace(" ", "_");

            // Create string of digits from input string in the order they appear from left to right.
            string digitStr = "";
            string charStr = "";
            for (int i = 0; i < word.Length; i++)
            {
                if (Char.IsDigit(word[i]))
                {
                    digitStr += word[i];
                }
                else
                {
                    charStr += word[i];
                }
            }

            // Change each letter in input string to random upper or lower case.
            string randCaseStr = "";
            Random rand = new Random();
            for (int i = 0; i < charStr.Length; i++)
            {
                int randBinary = rand.Next(0, 2);
                if (randBinary == 0)
                {
                    randCaseStr += Char.ToUpper(charStr[i]);
                }
                else
                {
                    randCaseStr += Char.ToLower(charStr[i]);
                }
            }

            return randCaseStr + digitStr;
        }
    }
}

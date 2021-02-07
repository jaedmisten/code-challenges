/*
 * 2/7/2021
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

namespace PasswordifyString2
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
            word = word.Replace(" ", "_");

            string digitStr = "";
            string charStr = "";
            Random rand = new Random();
            for (int i = 0; i < word.Length; i++)
            {
                if (Char.IsDigit(word[i]))
                {
                    digitStr += word[i];
                }
                else
                {
                    charStr += (rand.Next(0, 2) == 0) ? Char.ToUpper(word[i]) : Char.ToLower(word[i]);
                }
            }

            return charStr + digitStr;
        }
    }
}
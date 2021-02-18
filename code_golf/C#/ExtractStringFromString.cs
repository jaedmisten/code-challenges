/* 
 * 2/17/2021
 *
 * Extract a string from a given string
 *
 * code golf link:  https://codegolf.stackexchange.com/questions/50379/extract-a-string-from-a-given-string?rq=1
 *
 * You are given a string and two characters.You have to print the string between 
 * these characters from the string.
 * Input will first contain a string (not empty or null). In the next line, there
 * will be two characters separated by a space.
 */
using System;

namespace ExtractStringFromString
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Enter string: ");
            var inputStr = Console.ReadLine();
            if (inputStr.Length > 100)
            {
                Console.WriteLine("Error: Input string greater than 100 characters.");
                return;
            }

            Console.Write("Enter endpoints: ");
            var endpoints = Console.ReadLine();
            if (endpoints.Length != 3 || endpoints[1] != ' ')
            {
                Console.WriteLine("Error: Endpoints in wrong format.");
                return;
            }
            if (endpoints[0] == endpoints[2])
            {
                Console.WriteLine("\"null\"");
                return;
            }
            if ((int)endpoints[0] < 32 || (int)endpoints[0] > 126 || (int)endpoints[2] < 32 || (int)endpoints[2] > 126)
            {
                Console.WriteLine("Error: Incorrect character(s) for endpoints. The endpoints characters can only have characters in the ASCII table range from space to tilde.");
                return;
            }

            Console.WriteLine(ExtractString(inputStr, endpoints));
        }

        public static string ExtractString(string inputStr, string endpoints)
        {
            var endpoint1 = endpoints[0];
            var endpoint2 = endpoints[2];
            var endpoint1Position = 0;
            var endpoint1Counter = 0;
            var endpoint2Position = 0;
            var endpoint2Counter = 0;
            for (int i = 0; i < inputStr.Length; i++)
            {
                if ((int)inputStr[i] < 32 || (int)inputStr[i] > 126 || (int)inputStr[i] < 32 || (int)inputStr[i] > 126)
                {
                    return "Error: Incorrect character(s) for input string. The input string can only have characters in the ASCII table range from space to tilde.";
                }
                if (inputStr[i] == endpoint1)
                {
                    endpoint1Counter++;
                    if (endpoint1Counter > 1)
                    {
                        return "\"null\"";
                    }
                    endpoint1Position = i;
                }
                if (inputStr[i] == endpoint2)
                {
                    endpoint2Counter++;
                    if (endpoint2Counter > 1)
                    {
                        return "\"null\"";
                    }
                    endpoint2Position = i;
                }
            }
            if (endpoint1Counter == 0 || endpoint2Counter == 0)
            {
                return "\"null\"";
            }

            if (endpoint1Position < endpoint2Position)
            {
                return '"' + inputStr.Substring(endpoint1Position + 1, endpoint2Position - endpoint1Position - 1) + '"';
            }
            else
            {
                return '"' + inputStr.Substring(endpoint2Position + 1, endpoint1Position - endpoint2Position - 1) + '"';
            }
        }
    }

}

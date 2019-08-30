/* 
 * 8/15/2019
 * 
 * Java is to JavaScript as car is to carpet.
 * 
 * code golf link:  https://codegolf.stackexchange.com/questions/132272/java-is-to-javascript-as-car-is-to-carpet
 * 
 * Write a program which takes in a string as input. Return car if the string begins with "Java" 
 * and does not include "JavaScript". 
 * Otherwise, return carpet.
 * Input matching should be case insensitive.
 */

using System;

namespace JavaIsToJavascript
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] words = {"java", "javafx", "javabeans", "JavaBeanS", "java-stream", "java-script", "java-8","java.util.scanner",
                "java-avascript", "JAVA-SCRIPTING", "javacarpet", "javascript","javascript-events", "facebook-javascript-sdk",
                "javajavascript", "jquery", "python", "rx-java", "java-api-for-javascript", "not-java", "JAVASCRIPTING"};

            foreach (string word in words)
            {
                Console.WriteLine(word);
                Console.WriteLine(testWords(word));
                Console.WriteLine();
            }


            string testWords(string word)
            {
                word = word.ToLower();
                if (word.Substring(0, 4).Equals("java"))
                {
                    if (word.IndexOf("javascript") == -1)
                    {
                        // String began with "java" and did not include "javascript".
                        return "car";
                    }

                    // String began with "java" and included "javascript".
                    return "carpet";
                }

                // String did not begin with "java".
                return "carpet";
            }
        }
        
    }
}

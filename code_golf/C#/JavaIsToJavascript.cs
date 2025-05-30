/*
 * 2025-05-30
 * 
 * Code Golf: Java is to Javascript as Car is to Carpet
 * https://codegolf.stackexchange.com/questions/132272/java-is-to-javascript-as-car-is-to-carpet
 * 
 * Write a program which takes in a string as input.
 * Return car if the string begins with "Java" and does not include "JavaScript". 
 * Otherwise, return carpet.
 * Input matching should be case insensitive
 */
string[] words =
{
    "java",
    "javafx",
    "JaVaFX",
    "javabeans",
    "java-stream",
    "java-script",
    "java-8",
    "java.util.scanner",
    "java-avascript",
    "JAVA-SCRIPTING",
    "javacarpet",
    "carpet:",
    "javascript",
    "javascript-events",
    "facebook-javascript-sdk",
    "javajavascript",
    "jquery",
    "python",
    "rx-java",
    "java-api-for-javascript",
    "not-java",
    "JAVASCRIPTING",
    "Jessie Edmisten",
};

foreach (string word in words)
{
    Console.WriteLine(word);
    Console.WriteLine(BeginsWithJavaAndDoesNotIncludeJavascript(word));
    Console.WriteLine();
}

string BeginsWithJavaAndDoesNotIncludeJavascript(string s)
{
    return s.ToLower().StartsWith("java") && !s.ToLower().Contains("javascript") ? "car" : "carpet";
}
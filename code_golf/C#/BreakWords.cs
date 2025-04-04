/*
 * 2025-04-03
 * 
 * Break a word into vowels and consonants
 * https://codegolf.stackexchange.com/questions/273368/break-a-word-into-vowels-and-consonants
 * 
 * Given an string n, output two strings, 
 * namely the string consisting of vowels "a", "e", "i", "o", and "u", 
 * and the string consisting of consonants.
 */
using System.Text.RegularExpressions;

String[] strings =
{
    "Environment",
    "PyThOn",
    "nAsA",
    "ReVoLuTiOn",
    "jAvAsCrIpT",
    "WiNe",
    "MiXeD",
    "tEaM",
    "HeArT",
    "cOdInG",
};
foreach (string s in strings)
{
    Console.WriteLine(s);
    string vowels = Regex.Replace(s, "[^aeiou]", "", RegexOptions.IgnoreCase);
    Console.WriteLine(vowels);
    string consonants = Regex.Replace(s, "[aeiou]", "", RegexOptions.IgnoreCase);
    Console.WriteLine(consonants);
    Console.WriteLine();
}
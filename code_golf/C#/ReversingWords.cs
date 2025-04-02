/*
 * 2025-04-02
 * Reversing of Words
 * Code Golf link: https://codegolf.stackexchange.com/questions/121149/reversing-of-words
 * 
 * Given a string that contains words separated by single space, reverse the words in the string.
 */

String[] strings =
{
    "Man bites dog",
    "The quick brown fox jumps over the lazy dog",
    "Hello world  ",
    "  Nothing Changes If Nothing Changes   ",
};
foreach (string s in strings)
{
    Console.WriteLine(s);
    IEnumerable<string> reversedWordsArr = s.Trim().Split(' ').Reverse();
    string reversedWords = String.Join(' ', reversedWordsArr);
    Console.WriteLine(reversedWords);
    Console.WriteLine();
}
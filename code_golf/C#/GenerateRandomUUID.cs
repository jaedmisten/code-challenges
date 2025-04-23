/*
 * 2025-04-22
 * 
 * Code Golf: Generate random UUID
 * https://codegolf.stackexchange.com/questions/58442/generate-random-uuid?rq=1
 * 
 * Generate 32 random hexadecimal digits in the form 8-4-4-4-12 digits.
 * example: ab13901d-5e93-1c7d-49c7-f1d67ef09198
 */
using System.Text;

string hexDigits = "0123456789abcdef";
StringBuilder sb = new StringBuilder();
Random rnd = new Random();

for (int i = 1; i <= 8; i++)
{
    sb.Append(hexDigits[rnd.Next(16)]);
}
sb.Append("-");
for (int i = 1; i <= 3; i++)
{
    for (int j = 1; j <= 4; j++)
    {
        sb.Append(hexDigits[rnd.Next(16)]);
    }
    sb.Append("-");
}
for (int i = 1; i <= 12; i++)
{
    sb.Append(hexDigits[rnd.Next(16)]);
}

Console.WriteLine(sb.ToString());
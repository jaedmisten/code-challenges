/*
 * 2025-06-19
 * Project Lovelace #16 - DNA Transcription
 * https://projectlovelace.net/problems/dna-transcription/
 * 
 * Take input of a string of ATCG characters representing a DNA sequence.
 * Return output of the RNA sequence corresponding to the input DNA sequence.
 * 
 * DNA sequence can be stored on a computer as a string of ATCG characters.
 * The RNA sequence is equal to the DNA sequence with all instances of T replaced with a U (uracil) 
 * and the sequence is reversed.
 */
var dna = GetInput();
string rna = ConvertDnaToRna(dna);
Console.WriteLine($"Output RNA: {rna}");

string GetInput()
{
    string dna = "";
    bool retryInput = false;
    do
    {
        Console.ForegroundColor = ConsoleColor.White;
        Console.Write("Input DNA: ");
        try
        {
            dna = Console.ReadLine()?.Trim().ToUpper();
            if (string.IsNullOrEmpty(dna))
            {
                throw new Exception();
            }
            else
            {
                char[] allowedChars = { '"', 'A', 'C', 'G', 'T' };
                bool validChars = dna.All(allowedChars.Contains);
                if (!validChars)
                {
                    throw new Exception();
                }
                retryInput = false;
            }

        }
        catch (Exception) {
            retryInput = true;
            Console.ForegroundColor = ConsoleColor.Red;
            Console.WriteLine("Input must be a string that only contains the following characters: \", A, C, G, T");
        }

    } while (retryInput);

    return dna;
}

string ConvertDnaToRna(string dna)
{
    string rna = dna.Replace("T", "U");
    var array = rna.ToArray().Reverse();
    return string.Join("", array);
}
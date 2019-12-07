/*
 * 12/7/2019
 *  
 * https://projectlovelace.net/problems/nand-gate/
 *  
 * Write a function that takes input of integers for A and B and calculates the NAND gate.
 * 
 * NAND Gate table:
 * A  B  Q
 * 0  0  1
 * 0  1  1
 * 1  0  1
 * 1  1  1
 */
using System;

namespace NandGate
{
    class Program
    {
        static void Main(string[] args)
        {
            int inputA = 0, inputB = 0;
            bool retryInput = false;

            // Get inputA
            do
            {
                Console.Write("Input A: ");
                try
                {
                    inputA = int.Parse(Console.ReadLine());
                    retryInput = VerifyInput(inputA);
                }
                catch
                {
                    Console.WriteLine("Input must be a 0 or 1.");
                    retryInput = true;
                }              
            } while (retryInput);

            // Get inputB
            do
            {
                Console.Write("Input B: ");
                try
                {
                    inputB = int.Parse(Console.ReadLine());
                    retryInput = VerifyInput(inputB);
                }
                catch
                {
                    Console.WriteLine("Input must be a 0 or 1.");
                    retryInput = true;
                }
            } while (retryInput);

            int outputQ = Nand(inputA, inputB);
            Console.WriteLine("Output NAND(A, B): " + outputQ);
        }

        public static int Nand(int inputA, int inputB)
        {
            return (inputA == 1 && inputB == 1) ? 0 : 1;
        }

        public static bool VerifyInput(int input)
        {
            if (input != 0 && input != 1)
            {
                Console.WriteLine("Input must be a 0 or 1.");
                return true;
            }

            return false;
        }
    }
}

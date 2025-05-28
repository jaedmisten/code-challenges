/*
 * 2025-05-26
 * Project Lovelace: Chaos
 * https://projectlovelace.net/problems/chaos/
 * Take a parameter input of r and calculate the first 51 values of the logistic map.
 * logistic map: xn+1 = r * xn * (1 − xn)
 */
double r = getInput();
List<double> values = createList(r);
printList(values);

double getInput()
{
    double r = 0;
    bool retryInput = false;
    do
    {
        Console.ForegroundColor = ConsoleColor.White;
        Console.Write("Input: ");
        try
        {
            Console.ForegroundColor = ConsoleColor.DarkGray;
            r = double.Parse(Console.ReadLine());
            if (r <= 0 || r > 4)
            {
                Console.ForegroundColor = ConsoleColor.Red;
                Console.WriteLine("Input must be a number greater than 0 and less than 4.");
                retryInput = true;
            }
            else
            {
                retryInput = false;
            }
        }
        catch 
        {
            Console.ForegroundColor = ConsoleColor.Red;
            Console.WriteLine("Input must be a number greater than 0.");
            retryInput = true;
        }
    } while (retryInput);

    return r;
}

List<double> createList(double r)
{
    double x = 0.5;
    List<double> values = new List<double>();

    values.Add(x);
    for (int i = 1; i <= 50; i++)
    {
        x = r * x * (1 - x);
        values.Add(x);
    }

    return values;
}

void printList(List<double> values)
{
    Console.ForegroundColor = ConsoleColor.White;
    string valuesStr = String.Join(", ", values.Select(x => x.ToString("0.000000")));
    Console.WriteLine("[{0}]", valuesStr);
}
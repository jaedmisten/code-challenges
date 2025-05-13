/*
 * 2025/05/11
 * Project Lovelace 14: Habitable exoplanets
 * https://projectlovelace.net/problems/habitable-exoplanets/
 * 
 * Given a star's absolute luminosity and the planet's distance from the star  as inputs, 
 * return "too hot" if the planet is too close to the star, "too cold" if it's too far away 
 * from the star, and "just right" if it's in the circumstellar habitable zone (CHZ).
 *
 * CHZ is between the following  inner radius and outer radius:
 * r1 = Sqrt(L/1.1) r2 = Sqrt(L/0.54) 
 * L = star's luminosity
 */

double luminosity = GetLuminosity();
double distance = GetDistance();

// Calculate inner radius and outer radius of circumstellar habitable zone (CHZ).
double innerRadius = Math.Sqrt(luminosity / 1.1);
double outerRadius = Math.Sqrt(luminosity / 0.54);

PrintMessage(distance, innerRadius, outerRadius);
Console.ForegroundColor = ConsoleColor.White;

double GetLuminosity()
{
    double luminosity = 0;
    bool retryLuminosityInput = false;
    do
    {
        Console.ForegroundColor = ConsoleColor.White;
        Console.Write("Input absolute luminosity: ");
        try
        {
            Console.ForegroundColor = ConsoleColor.DarkGray;
            luminosity = double.Parse(Console.ReadLine());
            if (luminosity <= 0)
            {
                Console.ForegroundColor = ConsoleColor.Red;
                Console.WriteLine("Luminosity input must be a number greater than 0.");
                retryLuminosityInput = true;
            }
            else
            {
                retryLuminosityInput = false;
            }
        }
        catch (Exception e)
        {
            Console.ForegroundColor = ConsoleColor.Red;
            Console.WriteLine("Luminosity input must be a number greater than 0.");
            retryLuminosityInput = true;
        }
    } while (retryLuminosityInput);

    return luminosity;
}

double GetDistance()
{
    double distance = 0;
    bool retryDistanceInput = false;
    do
    {
        Console.ForegroundColor = ConsoleColor.White;
        Console.Write("Input exoplanet distance: ");
        try
        {
            Console.ForegroundColor = ConsoleColor.DarkGray;
            distance = double.Parse(Console.ReadLine());   
            if (distance <= 0)
            {
                Console.ForegroundColor= ConsoleColor.Red;
                Console.WriteLine("Distance input must be a number greater than 0.");
                retryDistanceInput = true;
            }
            else
            {
                retryDistanceInput= false;
            }
        }
        catch (Exception e)
        {
            Console.ForegroundColor = ConsoleColor.Red;
            Console.WriteLine("Distance input must be a number greater than 0.");
            retryDistanceInput = true;
        }
    } while (retryDistanceInput);

    return distance;
}

void PrintMessage(double distance, double innerRadius, double outerRadius)
{
    Console.ForegroundColor = ConsoleColor.White;
    Console.Write("Output habitability: ");

    if (distance < innerRadius)
    {
        Console.ForegroundColor = ConsoleColor.DarkRed;
        Console.WriteLine("\"too hot\"");
    }
    else if (distance >= innerRadius && distance <= outerRadius)
    {
        Console.ForegroundColor = ConsoleColor.DarkBlue;
        Console.WriteLine("\"just right\"");
    }
    else if (distance > outerRadius)
    {
        Console.ForegroundColor = ConsoleColor.DarkCyan;
        Console.WriteLine("\"too cold\"");
    }
    else
    {
        Console.ForegroundColor = ConsoleColor.Red;
        Console.WriteLine("\"Error calculating CHZ\"");
    }
}
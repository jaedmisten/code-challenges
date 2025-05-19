/*
 * 2025-05-18
 * Code Golf: States and Capitals
 * https://codegolf.stackexchange.com/questions/64254/states-and-capitals?rq=1
 *
 * Given a string as input, output the US state whose capital it is if it is a state capital,
 * the capital of the state if it is a state, or Arstotzka if it is neither.
 */
Dictionary<string, string> stateCapitals = new Dictionary<string, string>()
{
    {"Baton Rouge", "Louisiana"},
    {"Indianapolis", "Indiana"},
    {"Columbus", "Ohio"},
    {"Montgomery", "Alabama"},
    {"Helena", "Montana"},
    {"Denver", "Colorado"},
    {"Boise", "Idaho"},
    {"Austin", "Texas"},
    {"Boston", "Massachusetts"},
    {"Albany", "New York"},
    {"Tallahassee", "Florida"},
    {"Santa Fe", "New Mexico"},
    {"Nashville", "Tennessee"},
    {"Trenton", "New Jersey"},
    {"Jefferson", "Missouri"},
    {"Richmond", "Virginia"},
    {"Pierre", "South Dakota"},
    {"Harrisburg", "Pennsylvania"},
    {"Augusta", "Maine"},
    {"Providence", "Rhode Island"},
    {"Dover", "Delaware"},
    {"Concord", "New Hampshire"},
    {"Montpelier", "Vermont"},
    {"Hartford", "Connecticut"},
    {"Topeka", "Kansas"},
    {"Saint Paul", "Minnesota"},
    {"Juneau", "Alaska"},
    {"Lincoln", "Nebraska"},
    {"Raleigh", "North Carolina"},
    {"Madison", "Wisconsin"},
    {"Olympia", "Washington"},
    {"Phoenix", "Arizona"},
    {"Lansing", "Michigan"},
    {"Honolulu", "Hawaii"},
    {"Jackson", "Mississippi"},
    {"Springfield", "Illinois"},
    {"Columbia", "South Carolina"},
    {"Annapolis", "Maryland"},
    {"Cheyenne", "Wyoming"},
    {"Salt Lake City", "Utah"},
    {"Atlanta", "Georgia"},
    {"Bismarck", "North Dakota"},
    {"Frankfort", "Kentucky"},
    {"Salem", "Oregon"},
    {"Little Rock", "Arkansas"},
    {"Des Moines", "Iowa"},
    {"Sacramento", "California"},
    {"Oklahoma City", "Oklahoma"},
    {"Charleston", "West Virginia"},
    {"Carson City", "Nevada"},
};

Console.WriteLine(getCapitalOrState("Austin"));
Console.WriteLine(getCapitalOrState("Alaska"));
Console.WriteLine(getCapitalOrState("The Nineteenth Byte"));
Console.WriteLine(getCapitalOrState("Columbus"));
Console.WriteLine(getCapitalOrState("West Virginia"));
Console.WriteLine(getCapitalOrState("adaf  adfgag iocka"));
Console.WriteLine(getCapitalOrState("Raleigh "));
Console.WriteLine(getCapitalOrState("  North Carolina "));


string getCapitalOrState(string s)
{
    s = s.Trim();
    if (stateCapitals.ContainsKey(s))
    {
        return stateCapitals[s];
    }
    if (stateCapitals.ContainsValue(s))
    {
        return stateCapitals.FirstOrDefault(x => x.Value == s).Key;
    }

    return "Arstotzka";
}
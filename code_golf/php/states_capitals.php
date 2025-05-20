<?php
/*
 * 2025-05-19
 * Code Golf: States and Capitals
 * https://codegolf.stackexchange.com/questions/64254/states-and-capitals?rq=1
 *
 * Given a string as input, output the US state whose capital it is if it is a state capital,
 * the capital of the state if it is a state, or Arstotzka if it is neither.
 */
$stateCapitals = [
    "Baton Rouge" => "Louisiana",
    "Indianapolis" => "Indiana",
    "Columbus" => "Ohio",
    "Montgomery" => "Alabama",
    "Helena" => "Montana",
    "Denver" => "Colorado",
    "Boise" => "Idaho",
    "Austin" => "Texas",
    "Boston" => "Massachusetts",
    "Albany" => "New York",
    "Tallahassee" => "Florida",
    "Santa Fe" => "New Mexico",
    "Nashville" => "Tennessee",
    "Trenton" => "New Jersey",
    "Jefferson" => "Missouri",
    "Richmond" => "Virginia",
    "Pierre" => "South Dakota",
    "Harrisburg" => "Pennsylvania",
    "Augusta" => "Maine",
    "Providence" => "Rhode Island",
    "Dover" => "Delaware",
    "Concord" => "New Hampshire",
    "Montpelier" => "Vermont",
    "Hartford" => "Connecticut",
    "Topeka" => "Kansas",
    "Saint Paul" => "Minnesota",
    "Juneau" => "Alaska",
    "Lincoln" => "Nebraska",
    "Raleigh" => "North Carolina",
    "Madison" => "Wisconsin",
    "Olympia" => "Washington",
    "Phoenix" => "Arizona",
    "Lansing" => "Michigan",
    "Honolulu" => "Hawaii",
    "Jackson" => "Mississippi",
    "Springfield" => "Illinois",
    "Columbia" => "South Carolina",
    "Annapolis" => "Maryland",
    "Cheyenne" => "Wyoming",
    "Salt Lake City" => "Utah",
    "Atlanta" => "Georgia",
    "Bismarck" => "North Dakota",
    "Frankfort" => "Kentucky",
    "Salem" => "Oregon",
    "Little Rock" => "Arkansas",
    "Des Moines" => "Iowa",
    "Sacramento" => "California",
    "Oklahoma City" => "Oklahoma",
    "Charleston" => "West Virginia",
    "Carson City" => "Nevada",
];

echo getCapitalOrState("Austin") . "<br><br>";
echo getCapitalOrState("Alaska") . "<br><br>";
echo getCapitalOrState("The Nineteenth Byte") . "<br><br>";
echo getCapitalOrState("Columbus") . "<br><br>";
echo getCapitalOrState("West Virginia") . "<br><br>";
echo getCapitalOrState("adaf  adfgag iocka") . "<br><br>";
echo getCapitalOrState("Raleigh ") . "<br><br>";
echo getCapitalOrState("  North Carolina ") . "<br><br>";

function getCapitalOrState($s) {
    global $stateCapitals;

    echo "$s<br>";
    $s = trim($s);
    if (isset($stateCapitals[$s])) {
        return $stateCapitals[$s];
    }
    $key = array_search($s, $stateCapitals);
    if ($key !== false) {
        return $key;
    }

    return "Arstotzka";
}

?>
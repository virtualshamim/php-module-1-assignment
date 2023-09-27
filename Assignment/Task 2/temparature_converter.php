<?php
// Declare three temperature values in Celsius
$celsius1 = 25;
$celsius2 = 0;
$celsius3 = -10;

// Function to convert Celsius to Fahrenheit
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

// Display the converted temperatures
echo "Celsius to Fahrenheit Conversion:<br>";
echo "$celsius1 degrees Celsius is " . celsiusToFahrenheit($celsius1) . " degrees Fahrenheit.<br>";
echo "$celsius2 degrees Celsius is " . celsiusToFahrenheit($celsius2) . " degrees Fahrenheit.<br>";
echo "$celsius3 degrees Celsius is " . celsiusToFahrenheit($celsius3) . " degrees Fahrenheit.<br>";
?>
<?php

// Function to validate an integer
function myFunction($num)
{
    try {
        // Check if the input is a valid integer using filter_var
        if (!filter_var($num, FILTER_VALIDATE_INT)) {
            // Throw an exception if the input is not a valid integer
            throw new Exception("Not a valid integer");
        }
    } catch (Exception $e) {
        // Display the error message if an exception is thrown
        echo "Error: " . $e->getMessage();
    } finally {
        // Display a message indicating the validation is complete
        echo "\nValidation Complete";
    }
}

// Test the function with a floating point number
$number = 2.5;
myFunction($number);
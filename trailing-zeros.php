<?php
class TrailingZeros {
    // Method to calculate trailing zeros in a factorial
    public function trailing_zeros($number) {
        $count = 0; // Initialize count of trailing zeros
        // Calculate the number of trailing zeros in number!
        for ($i = 5; $number / $i >= 1; $i *= 5) {
            $count += floor($number / $i);
        }
        return $count; // Return the total count
    }
}

// Create an instance of the TrailingZeros class
$result = new TrailingZeros();
$number = 25; // The number for which to find trailing zeros

// Call the method with the number as an argument
$trailing_zeros = $result->trailing_zeros($number);

// Output the result
echo "Trailing zeros in factorial of {$number} is {$trailing_zeros}";
?>

<?php


// A function that check if a character is a vowel or consonant 
function isVowel($char) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $char = strtolower($char); 
    
    if (in_array($char, $vowels)) {
        return true; 
    } else {
        return false;
    }
}

$char = 'C';

if (isVowel($char)) {
    echo $char. " is a vowel.";
} else {
    echo $char . " is a consonant.";
}


echo "<br> <br>";

// a function that convert a digit into its word counterpart;
function convertDigitToWord($number) {
    $wordMap = array(
        '0' => 'Zero',
        '1' => 'One',
        '2' => 'Two',
        '3' => 'Three',
        '4' => 'Four',
        '5' => 'Five',
        '6' => 'Six',
        '7' => 'Seven',
        '8' => 'Eight',
        '9' => 'Nine'
    );

    if ($number == 0) {
        return $wordMap['0'];
    }

    $digits = str_split($number);
    $word = '';

    foreach ($digits as $digit) {
        $word .= $wordMap[$digit] . ' ';
    }

    return trim($word);
}

$number = 721;
convertDigitToWord($number);
$digitsToWord=convertDigitToWord($number);
echo $digitsToWord; 

echo "<br> <br>";

// function that determine if a given number is divisible by 3.
function isDivisibleByThree($number) {
    return $number % 3 == 0;
}

$number = 15;
if (isDivisibleByThree($number)) {
    echo "$number is divisible by 3.";
} else {
    echo "$number is not divisible by 3.";
}

echo "<br> <br>";


//Create a function that delete the recurring elements inside a sorted list of strings
function removeRecurringElements($sortedList) {
    $result = array();
    $previousElement = null;

    foreach ($sortedList as $element) {
        if ($element !== $previousElement) {
            $result[] = $element;
            $previousElement = $element;
        }
    }

    return $result;
}


echo "<br> <br>";

//Armstrong Number
function deleteRecurringElements($sortedList) {
    $result = array();

    $length = count($sortedList);

    for ($i = 0; $i < $length; $i++) {
        if ($i < $length - 1 && $sortedList[$i] === $sortedList[$i + 1]) {
            continue;
        }

        $result[] = $sortedList[$i];
    }

    return $result;
}

$sortedList = array("apple", "apple", "banana", "banana", "banana", "cherry", "date", "date");

$newList = deleteRecurringElements($sortedList);

foreach ($newList as $element) {
    echo $element . " ";
}

echo "<br> <br>";


//Armstrong Number
function isArmstrongNumber($number) {
    $sum = 0;
    $originalNumber = $number;


    $numberAsString = (string) $number;
    $length = strlen($numberAsString);

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $length);
        $number = (int)($number / 10);
    }

    if ($sum === $originalNumber) {
        return true;
    } else {
        return false;
    }
}

$number1 = 8208;
if (isArmstrongNumber($number1)) {
    echo $number1 . ' is an Armstrong number. <br />';
} else {
    echo $number1 . ' is not an Armstrong number. <br />';
}

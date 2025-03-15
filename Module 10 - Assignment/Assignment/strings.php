<?php
// Problem 1 
$strings = ["Hello", "World", "PHP", "Programming"];
foreach ($strings as $string) {
    $vowelCount = 0;
    $reversedString = strrev($string);
    $lowerString = strtolower($string);
    $strLength = strlen($lowerString);
    for ($i=0; $i <= $strLength-1; $i++) { 
        $chr = $lowerString[$i];
        if($chr == "a"){
            $vowelCount += 1;
        }
        if($chr == "e"){
            $vowelCount += 1;
        }
        if($chr == "i"){
            $vowelCount += 1;
        }
        if($chr == "o"){
            $vowelCount += 1;
        }
        if($chr == "u"){
            $vowelCount += 1;
        }
    }

    echo "Original String: {$string}, Vowel Count: {$vowelCount}, Reversed String: {$reversedString}\n";
}

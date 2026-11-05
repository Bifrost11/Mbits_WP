<?php
// 1. Concatenation
$part1 = "Coding in ";
$part2 = "php programming";
$fullText = $part1 . $part2;
echo "1. Combined Text: " . $fullText . "<br>";

// 2. Case Conversion
$upperText = strtoupper($fullText);
echo "2. Uppercase Text: " . $upperText . "<br>";

// 3. String Length
$length = strlen($upperText);
echo "3. Total Characters: " . $length . "<br>";

// 4. Word Position
$position = strpos($upperText, "PHP");
echo "4. Position of 'PHP': " . $position . "<br>";

// 5. Substring Extraction
// Starts at position 10 and takes 11 characters ("PROGRAMMING")
$extractedWord = substr($upperText, 10, 11);
echo "5. Extracted Word: " . $extractedWord . "<br>";
?>
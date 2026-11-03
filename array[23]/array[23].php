<?php
$student=["Alice","Bob","Charlie","Diana","Eve"];
echo"Original Array:<br>";
print_r($student);
echo"<br><br>";
asort($student);
echo("Array Sorted in Ascending Order:<br>");
print_r($student);
echo"<br><br>";
arsort($student);
echo"Array Sorted in Desending Order:<br>";
print_r($student);
?>

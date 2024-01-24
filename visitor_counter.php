<?php
// File to store the visitor count
$counterFile = 'visitor_count.txt';

// Read the current count from the file
$counter = (file_exists($counterFile)) ? (int)file_get_contents($counterFile) : 0;

// Increment the count for each visit
$counter++;

// Save the updated count back to the file
file_put_contents($counterFile, $counter);

// Output the count
echo 'You are visitor number: ' . $counter;
?>

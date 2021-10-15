<?php
# Initialize Variables
$studentName = "Amir Alatrash";
$studentID = " (21910190)";
date_default_timezone_set('Asia/Jerusalem'); # Set the default timezone to Jerusalem
$current_date = date('m/d/Y'); # Month / Day / Year
$current_time = date('h:i:sa'); # Hour : Minutes : Seconds AM/PM
echo "<h1>" . "Multiplication Table by " . $studentName . $studentID . "</h1>"; // Print the title and student name
echo "Current Date: " . $current_date . ", Current Time: " . $current_time . "."; // Display Current date and time
// We want to use custom stylsheet for the table
echo "<style>";
echo "td:first-child {";
echo "background-color: #00ad73!important;";
echo "color: #fff;";
echo "font-weight: bold;";
echo "width: 5%;";
echo "}";

echo "tr:nth-child(even) {";
echo "background: #f2f2f2;";
echo "}";

echo "</style>";
echo "<table border ='1' width=70% height=60% style='border-collapse: collapse; border-color: #ccc; text-align: center;'>"; //We do not want to loop the table


for ($row = 1;$row <= 9;$row++) { // First Loop, we dont want first row to be zero's
    echo "<tr>"; // Table row element starts here
    $value = $row - 0;
    echo "<td style='background-color: #00ad73; color: #fff; font-weight: bold;'>$value</td>"; //We want to give the first column a background color

    for ($col = 1;$col <= 9;$col++) { // Second Loop, we dont want first columns to be zero's
        echo "<td>" . $row . "x" . $col . "=" . ($row * $col) . "</td>"; // Please print table data and its values
    }

    echo "</tr>"; // Table row element ends here
    
}

echo "</table>";

// echo 'PHP version: ' . phpversion(); // Display php version, fot testing purposes

?>

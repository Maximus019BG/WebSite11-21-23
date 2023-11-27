<?php

$servername = "sql309.infinityfree.com";
$username = "if0_35510034";
$password = "15NZ44uf0qs6uUL";
$database = "if0_35510034_web";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Specify the multiple types you want to search for
$searchTypes = array("SSD", "GPU", "CPU");

// Convert the array to a comma-separated string for the SQL query
$searchTypesString = implode("', '", $searchTypes);

$sql = "SELECT * FROM hardware WHERE type IN ('$searchTypesString')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Concatenate the HTML output
    $output = '';

    $iteration = 0;
    while ($row = $result->fetch_assoc()) {
        // Access data using $row['column_name']

        if ($iteration % 4 == 0) {
            // Open a new slider owl-carousel div every three iterations
            $output .= '<div class="slider owl-carousel">';
        }

        $output .= '<div class="card">' .
            '<div class="img" id="' . $row["id"] . '">' .
            '<img src="' . $row["image_src"] . '" alt="">' . // Assuming there's a column named 'image_src' in your database
            '</div>' .
            '<div class="content">' .
            '<div class="title">' . $row["name"] . '</div>' .
            '<div class="sub-title">' . "Type: " . $row["type"] . '</div>' .
            '</div>' .
            '</div>';

        if ($iteration % 4 == 3 || $iteration == $result->num_rows - 1) {
            // Close the slider owl-carousel div every three iterations or on the last iteration
            $output .= '</div>';
        }

        $iteration++;
    }

    // Close the slider owl-carousel div if there are no results
    if ($result->num_rows == 0) {
        $output .= '</div>';
    }

} else {
    $output = "0 results";
}

$conn->close();
?>

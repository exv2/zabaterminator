<?php
// Get the POST data
$post_data = file_get_contents("php://input");

// Check if data is received
if ($post_data) {
    // Save the data to a text file
    file_put_contents("data.txt", $post_data);

    // Respond with a success message
    echo "Data received and saved successfully.";
} else {
    // Respond with an error message
    echo "No data received.";
}
?>

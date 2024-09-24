<?php
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Create a string to store the data
    $data = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n";

    // Open the text file in append mode
    $file = fopen("form_data.txt", "a");

    // Write the data to the file
    fwrite($file, $data);

    // Close the file
    fclose($file);

    // Display a success message
    echo "Form data saved successfully!";
  }
?>
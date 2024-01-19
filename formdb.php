<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $dateofbirth = $_POST['dateofbirth'];
    $age = $_POST['age'];
    $maritalstatus = $_POST['maritalstatus'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $contactnumber = $_POST['contactnumber'];
    $email = $_POST['email'];

    // SQL query to insert data into the database
    $sql = $conn->prepare("INSERT INTO contact_us (firstname, middlename, lastname, dateofbirth, age, maritalstatus, country, address, contactnumber, email) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $sql->bind_param("ssssssssss", $firstname, $middlename, $lastname, $dateofbirth, $age, $maritalstatus, $country, $address, $contactnumber, $email);

    if ($sql->execute()) {
        // Data inserted successfully
        echo '<script>alert("Data inserted successfully!");</script>';
        echo '<script>window.location = "form.php";</script>';
    } else {
        echo "Error: " . $sql->error;
    }

    $sql->close();
    $conn->close();
}
?>
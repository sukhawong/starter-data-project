<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Include the database connection file
    require_once 'server.php';

    // Get form data and sanitize inputs to avoid SQL injection attacks
    $first_team = mysqli_real_escape_string($conn, $_POST['Team1']);
    $second_team = mysqli_real_escape_string($conn, $_POST['Team2']);
    $sports = mysqli_real_escape_string($conn, $_POST['Sport']);
    $day = mysqli_real_escape_string($conn, $_POST['Date']);
    $start_time = mysqli_real_escape_string($conn, $_POST['Time']);
    $place = mysqli_real_escape_string($conn, $_POST['Place']);

    // Prepare the SQL statement
    $query = "INSERT INTO time_table (Date, Time, Sport, Team1, Team2, Place) VALUES ('$day', '$start_time', '$sports', '$first_team', '$second_team', '$place')";

    // Execute the SQL statement
    if (mysqli_query($conn, $query)) {
        // If the data was inserted successfully, show a success message
        ?>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <script>
            $(document).ready(function(){
                swal({
                    title: "Information added",
                    type: "success"
                }, function() {
                    window.location = "admin.php";
                });
            });
        </script>
        <?php
    } else {
        // If there was an error inserting the data, show an error message
        ?>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <script>
            $(document).ready(function(){
                swal({
                    title: "เกิดข้อผิดพลาด",
                    type: "error"
                }, function() {
                    window.location = "admin.php";
                });
            });
        </script>
        <?php
    }

    // Close the database connection
    mysqli_close($conn);
}

?>
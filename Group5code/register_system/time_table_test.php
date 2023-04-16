<?php
    include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin: 50px;">
    <h1>Competitive table</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Sport</th>
                <th>Team1</th>
                <th>Team2</th>
                <th>Place</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "final_project";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed" . mysqli_connect_error());
            }

            $sql = "SELECT * FROM `time_table` WHERE Sport = 'ฟุตบอล';";
            $result = $conn->query($sql);

            if(!$result) {
                die("Invalid query;" . $conn->connect_error);
            }

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["Date"] . "</td>
                    <td>" . $row["Time"] . "</td>
                    <td>" . $row["Sport"] . "</td>
                    <td>" . $row["Team1"] . "</td>
                    <td>" . $row["Team2"] . "</td>
                    <td>" . $row["Place"] . "</td>
                </tr>";
            }

            $conn->close();

            ?>
        </tbody>
    </table>
</body>
</html>
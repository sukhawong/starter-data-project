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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</head>
<body style="margin: 50px;">    
    <h1 style="color: #48469C;">Schedule</h1>
    <br>
    <h2>
    <div class="dayoption">
        <ul>
        <a href="#">
            <a href="day1.php?logout='1'" style="color: #7C3E3E;">|_____Day 1_____|</a>
        </a>

        <a href="#">
            <a href="day2.php?logout='1'" style="color: #7C3E3E;">|_____Day 2_____|</a>
        </a>

        <a href="#">
            <a href="day3.php?logout='1'" style="color: #7C3E3E;">|_____Day 3_____|</a>
        </a>

        <br><br>

        <a href="#">
            <a href="football.php?logout='1'" style="color: #33406F;">|_____Football_____|</a>
        </a>

        <a href="#">
            <a href="volleyball.php?logout='1'" style="color: #33406F;">|_____Volleyball_____|</a>
        </a>

        <a href="#">
            <a href="pingpong.php?logout='1'" style="color: #33406F;">|_____Pingpong_____|</a>
        </a>

        </ul>

    </div>
    <br>
</h2>
    <table id="mytimetable" class="timetable">
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

            $sql = "SELECT * FROM `time_table`;";
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js%22%3E"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js%22%3E"></script>
    <script>
        $(document).ready(function() {
            $('#mytimetable').DataTable();
        });
    </script>
</body>
</html>
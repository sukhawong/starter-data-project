

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="tablehomeheader">
        <h2>Volleyball</h2>
    </div>

    <br><br>

    <table id="mytimetable" class="timetable">
        <thead>
            <tr>
                <th style="color: white;">Date</th>
                <th style="color: white;">Time</th>
                <th style="color: white;">Sport</th>
                <th style="color: white;">Team1</th>
                <th style="color: white;">Team2</th>
                <th style="color: white;">Place</th>
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

            $sql = "SELECT * FROM `time_table` WHERE Sport = 'วอลเล่บอล';";
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
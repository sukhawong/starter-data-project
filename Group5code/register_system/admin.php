

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
        <h2>Schedule</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="admin">
                <div class="col-md-12">
                    <h3 style="color:white;">Edit Time table <a style="color:red;"href="add.php">ADD</a></h3>
                    <br>
                        <table id="mytimetable" class="timetable">
                            <thead>
                                <tr>
                                    <th style="color: white;">Date</th>
                                    <th style="color: white;">Time</th>
                                    <th style="color: white;">Sport</th>
                                    <th style="color: white;">Team1</th>
                                    <th style="color: white;">Team2</th>
                                    <th style="color: white;">Place</th>
                                    <th style="color: white;">Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php

                            require_once 'server.php';

                            $stmt = $conn->prepare("SELECT * FROM time_table");
                            $stmt->execute();

                            $result = $stmt->get_result();
                            $users = $result->fetch_all(MYSQLI_ASSOC);
                            foreach ($users as $user) {

                            ?>
                                <tr>
                                    <td><?php echo $user['Date'] ?></td>
                                    <td><?php echo $user['Time'] ?></td>
                                    <td><?php echo $user['Sport'] ?></td>
                                    <td><?php echo $user['Team1'] ?></td>
                                    <td><?php echo $user['Team2'] ?></td>
                                    <td><?php echo $user['Place'] ?></td>
                                    <td><a href="delete.php?ID=<?php echo $user['ID']; ?>" class="deletebtn" onclick="return confirm('Are you sure?');">delete</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js%22%3E"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js%22%3E"></script>
    <script>
        $(document).ready(function() {
            $('#mytimetable').DataTable();
        });
    </script>
</body>
</html>
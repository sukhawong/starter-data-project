<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="homeheader">
        <h2>Color War</h2>
    </div>

    <div class="option">
        <ul>
        <a href="#">
            <?php if (isset($_SESSION['username'])) : ?>
            <p><a href="schedule_test.php?logout='1' "target="_blank" rel="noopener noreferrer" >Schedule</a></p>
        <?php endif ?>
        </a>

        <a href="#">
            <?php if (isset($_SESSION['username'])) : ?>
            <p><a href="name_list.php?logout='1'" target="_blank" rel="noopener noreferrer" >Athlete Check</a></p>
        <?php endif ?>
        </a>

        <a href="#">
            <?php if (isset($_SESSION['username'])) : ?>
            <p><a href="medal_table.php?logout='1'" target="_blank" rel="noopener noreferrer" >Medal Table</a></p>
        <?php endif ?>
        </a>

        <a href="#">
            <?php if (isset($_SESSION['username'])) : ?>
            <p><a style="color: red; font-weight: bold;" href="index.php?logout='1'" >Logout</a></p>
        <?php endif ?>
        </a>

        <a href="#">
            <?php if (isset($_SESSION['username'])) : ?>
            <p><a style="color: green; font-weight: bold;" href="admin.php?logout='1'" target="_blank" rel="noopener noreferrer" >Admin</a></p>
        <?php endif ?>
        </a>

        </ul>

    </div>

    <div class="welcome">
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong style="color: #5f9ea0;"><?php echo $_SESSION['username']; ?></strong></p>
        <?php endif ?>
    </div>

    <div class="homecontent">
        <!-- notification message -->
        
        <div class="topic">
            <h3><i class="fa-solid fa-medal"></i>Welcome to our</h3>
            <h1>Color War</h1>
            <p>
            Welcome to the exciting world of "Color War"! This sports website is dedicated to bringing you the latest news, updates, and highlights from the world of color war sports.

We are thrilled to have you here with us, and we look forward to sharing with you the thrill and excitement of this unique sport. Whether you are a seasoned veteran or a newcomer to the world of color war, this website is the perfect place for you to stay up-to-date with all the latest happenings.
            </p>
        </div>
        <div class="topic">
            <div class="card card1">
                <h5>Football<h5>
            </div>
            <div class="card card2">
                <h5>Volleyball<h5>
            </div>
            <div class="card card3">
                <h5>Pingpong<h5>
            </div>
            <!-- <div class="card card4">
                <h5>Kangaroo<h5>
            </div> -->
        </div>

        
    </div>


    
</body>
</html>
<!DOCTYPE html>
<html lang="eng">

<head>
  <meta cahrset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Add Match</title>
  <link rel="stylesheet" href="styleadmin.css">
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-css-only@4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="addmain">
        <div class="row">
            <form action = "add_db.php" method = "post">
                <div class="mb-1">
                    <h3><b>Add Date</b></h3>
                    <label for="Date">dd/mm/yy</label>
                    <div class="col-sm-10">
                        <input type="text" name = "Date" class = "form-control" required value = "">
                    </div>
                </div>
<br>
                <div class="mb-1">
                    <h3><b>Add Time</b></h3>
                    <label for="Time">hh:mm - hh:mm</label>
                    <div class="col-sm-10">
                        <input type="text" name = "Time" class = "form-control" required minlength = "3">
                    </div>
                </div>
<br>
                <div class="mb-1">
                    <h3><b>Add Sport</b></h3>
                    <label for="Sport">Type of sport</label>
                    <div class="col-sm-10">
                        <li><input type="radio" name = "Sport" value = "ฟุตบอล" checked> ฟุตบอล</li>
                        <li><input type="radio" name = "Sport" value = "วอลเล่บอล" > วอลเล่บอล</li>
                        <li><input type="radio" name = "Sport" value = "ปิงปอง" > ปิงปอง</li>
                    </div>
                </div>
<br>
                <div class="mb-1">
                    <h3><b>Add Team</b></h3>
                    <label for="Team1">Team1</label>
                    <div class="col-sm-10">
                        <li><input type="radio" name = "Team1" value = "สีแดง" checked> สีแดง</li>
                        <li><input type="radio" name = "Team1" value = "สีฟ้า" > สีฟ้า</li>
                        <li><input type="radio" name = "Team1" value = "สีเขียว" > สีเขียว</li>
                        <li><input type="radio" name = "Team1" value = "สีม่วง" > สีม่วง</li>
                    </div>
                </div>
<br>
                <div class="mb-1">
                    <h3><b>Add Team</b></h3>
                    <label for="Team2">Team2</label>
                    <div class="col-sm-10">
                        <li><input type="radio" name = "Team2" value = "สีแดง" checked> สีแดง</li>
                        <li><input type="radio" name = "Team2" value = "สีฟ้า" > สีฟ้า</li>
                        <li><input type="radio" name = "Team2" value = "สีเขียว" > สีเขียว</li>
                        <li><input type="radio" name = "Team2" value = "สีม่วง" > สีม่วง</li>
                    </div>
                </div>
<br>
                <div class="mb-1">
                    <h3><b>Add Place</b></h3>
                    <label for="Place">Place</label>
                    <div class="col-sm-10">
                        <li><input type="radio" name = "Place" value = "สนามฟุตบอล" checked> สนามฟุตบอล</li>
                        <li><input type="radio" name = "Place" value = "โรงยิม" > โรงยิม</li>
                        <li><input type="radio" name = "Place" value = "สนามปิงปอง" > สนามปิงปอง</li>
                    </div>
                </div>
<br>
                <div class="button">
                    <div class="bton bton1">
                        <button type = "submit" class = "formbtn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>




</body>

</html>
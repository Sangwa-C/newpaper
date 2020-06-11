<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newspaper</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h1 style="text-align: center; ">Yours Newspaper</h1><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://i.pinimg.com/564x/ab/23/f7/ab23f7826f1af3588eee8248d990b136.jpg" alt="image">

                <a href="news.php">
                    <p>posted news</p>
                </a>

                <a href="login.php">
                    <p>Login</p>
                </a>

                <a href="signup.php">
                    <p>Signup to post news</p>
                </a>

            </div>


            <div class="col-md-6">

                <?php

                include('database.php');
                    $sql_get = "SELECT header, msg, poster FROM news";

                    $result = $yes->query($sql_get);

                    if ($result->num_rows != 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            // echo "<h1 style='text-align: center;'>" . $row["header"]. " <h1>";
                            // echo "<h1 style='text-align: center;'>" . $row["msg"]. " <h1>";
                                    echo "header: " . $row["header"]. "; Message: " . $row["msg"]. "; Poster name " . $row["poster"]. "<br> <br>";
                        }
                    } else {
                        echo "0 results";
                    }

                    $yes->close();

                    // echo"yeeeesssss!!";
                        
                ?>
            </div>
        </div>

    </div>


</body>

</html>
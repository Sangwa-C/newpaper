<?php

 include('database.php');
    $sql_get = "SELECT header, msg, poster FROM news";

    $result = $yes->query($sql_get);

     if ($result->num_rows != 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // echo "<h1 style='text-align: center;'>" . $row["header"]. " <h1>";
            // echo "<h1 style='text-align: center;'>" . $row["msg"]. " <h1>";
                     echo "header: " . $row["header"]. " Message: " . $row["msg"]. " Poster name " . $row["poster"]. "<br>";
        }
    } else {
        echo "0 results";
    }


// ********************************************************************************************


    $sql_getnames = "SELECT * FROM users";

    $result2 = $yes->query($sql_getnames);

    // var_dump($result2);


     if ($result2->num_rows > 0) {
        // output data of each row
        while($row2 = $result2->fetch_assoc()) {
        echo "UserName: " . $row2["fname"]. " Email: " . $row2["email"]. " Pass: " . $row2["pwd1"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    $yes->close();

    // echo"yeeeesssss!!";
        
?>



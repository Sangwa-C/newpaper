<?php

include('database.php');

if (isset($_POST['submit'])) {
    # code...
    $header = $_POST['header'];
    $msg = $_POST['msg'];
    $poster = $_POST['poster'];
    // echo $header;
    // echo $msg;
    // echo $poster;

    # code...
    $sql = "INSERT INTO news (header, msg, poster ) VALUES ('$header', '$msg', '$poster')";

    if ($yes->query($sql) === TRUE) {
        # code...
        // echo "News posted successsfully";
        
    } else {
        # code...
        echo "Error: ". $sql . "<br>" .$yes->error;
    }

    $sql_get = "SELECT header, msg, poster FROM news";

    $result = $yes->query($sql_get);

 if ($result->num_rows != 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "header: " . $row["header"]. " Message: " . $row["msg"]. " Poster name " . $row["poster"]. "<br>";
      }
    } else {
      echo "0 results";
    }

    $yes->close();

    // echo"yeeeesssss!!";
}


// ******************** 2nd if contion  for sinup ***************************


if (isset($_POST['submit2'])) {
    # code...
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $pwd1 = md5($_POST['pwd1']);
    echo $fname;
    echo $email;
    echo $pwd1;

    # code...
    $sql2 = "INSERT INTO users (fname, email, pwd1 ) VALUES ('$fname', '$email', '$pwd1')";

    if ($yes->query($sql2) === TRUE) {
        # code...
        echo "News posted successsfully";
        header('location:post.php');
        
    } else {
        # code...
        echo "Error: ". $sql2 . "<br>" .$yes->error;
        header('location:signup.php');
    }
}

if (isset($_POST['submit3'])) {
    # code...

    $email = $_POST['email'];
    $pwd1 = md5($_POST['pwd1']);

    echo $email;
    echo $pwd1;

    $sql_Post = "SELECT * FROM users WHERE email= '$email' && pwd1 = '$pwd1'" or die ("failed to querry database" .mysql_error());

    $result3 = $yes->query($sql_Post);

    $row3 = mysqli_fetch_assoc($result3);

    if ($row3['email']=== $email && $row3['pwd1']===$pwd1) {
        echo "login successfully welcome " .$row3['email'];
        header('location:post.php');
        # code...
    } else {
        # code...
        echo "failed to login";
        header('location:signup.php');
    }
    $yes->close();  
}

?>
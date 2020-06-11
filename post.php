<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
    <title>post</title>
</head>

<body>
    <form action="conditions.php" method="post"  class="bg-img">

        <div class="container" >
            <label for="header"><b>Header</b></label><br>
            <input type="text" placeholder="Enter Header" name="header" id="header" required><br>

            <label for="msg"><b>Message</b></label><br>
            <input type="text" placeholder="Message" name="msg" id="msg" style="height:150px; width:200px" required><br>

            <label for="poster"><b>Poster</b></label><br>
            <input type="text" placeholder="Poster Name" name="poster" id="poster" required><br><br>

            <button type="submit" value="submit" name="submit">Post</button>

        </div>


    </form>
    
</body>

</html>
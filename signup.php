<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Sign_Up</title>
</head>

<body>
    <div class="bg-img">
        <form action="conditions.php" style="border:1px solid #ccc" method="post">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="fname"><b>First Name</b></label>
                <input type="text" placeholder="Enter Your Name" id="fname" name="fname" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" id="email" name="email" required>

                <label for="pwd1"><b>Password</b></label>
                <input type="text" placeholder="Enter Password" id="pwd1" name="pwd1" required>

                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit2" value="submit2" name="submit2" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>

    </div>

</body>

</html>
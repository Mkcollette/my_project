<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        #text{
            height: 25px;
            border-radius 5px;
            padding: 4px;
            border:solid-thin #aaa;
            width:100%;
        }
        #button{
            padding: 10px;
            width: 100px;
            border:none;
            color:white;
            background-color:gray;
        }
        #box{
            background-image:url('bg1.png');
            margin:auto;
            width: 300px;
            padding: 20px;
            position: center;
        }
    </style>
    <div id="box">
        <form action="post">
            <div style="font-size 20px;margin: 10px;">SIGN UP</div><br>
            <div class="row">
            <div class="col">
            <input id="text" type="text" name="first_name" placeholder=" First Name"><br><br>
            </div>
            <div class="col">
            <input id="text" type="text" name="last_name" placeholder=" Last Name"><br><br>
            </div>
            </div>
            <input type="email" type="email" name="email" placeholder="Enter Email"><br><br>
            <input type="text" type="text" name="user_name" placeholder="Choose UserName"><br><br>
            <input type="password" type="password" name="password" placeholder="Create password"><br><br>
            <input type="password" type="password"  placeholder="Confirm password"><br><br>
            

            <input id="button" type="submit" value="Sign Up"><br><br>
            <p>Already have an account?</p>
            <a href="logIn.php">Log In</a>
        </form>
    </div>
</body>
</html>
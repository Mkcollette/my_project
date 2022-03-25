<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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
            background-image:url('/images/bg1.png');
            margin:auto;
            width: 300px;
            padding: 20px;
            position: center;
        }
    </style>
    <div id="box">
        <form action="post">
            <div style="font-size 20px;margin: 10px;">LOG IN</div><br>
            <input id="text" type="text" name="user_name" placeholder="Enter UserName"><br><br>
            <input id="text" type="password" name="password" placeholder="Enter Password"><br><br>

            <input id="button" type="submit" value="Log In"><br><br>
            <p>New Member? Sign up</p>
            <a href="signUp.php">Sign Up</a>
        </form>
    </div>
</body>
</html>
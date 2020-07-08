<?php 
    // session_destroy();
?>
<html>

<head>
    <meta chatset="utf8">
    <script src="../js/index.js"></script>
    <!-- <Bootstrap part> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- </Bootstrap part> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/index.css"> -->
    <link rel="stylesheet" href="themes/jquery.mCustomScrollbar.css" />
    <script src="themes/jquery.mCustomScrollbar.concat.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <title>Video donation Webapp</title>
</head>

<body>

    <div class="header no-gutters">
        <h2 class="h_style" style="display:inline-block;padding-left:39px;">VDon</h2>
        <div class="login_form" style="display:inline-block;">
            <form class="form-inline" action="../backend/login.php" method="POST" autocomplete="on">
                <img src="images/user.png" alt="User image" style="width:30px;height:30px;margin-left:30px;">
                <input type="email" class="form-control" id="email" placeholder="Enter Username" name="email" autocomplete="off">
                <img src="images/lock.png" alt="User image" style="width:30px;height:30px;margin-left:30px;">
                <input type="password" class="form-control" id="idx_pwd" placeholder="Enter Password" autocomplete = "off" name="pwd">
                <button type="submit" class="btn btn-success signin" name="login_user">Login</button>
                <a href="signup.php" class="btn btn-success signup">Signup</a>
            </form>
        </div>
    </div>
    <div class="h_s">
        <div class="centered">
            <p class= "slogan">Get video donations from fans</p>
        </div>

        <!-- Get video donations from fans -->
    </div>
    <div class="main_page no-gutters" style="margin-top: 0 !important;">
        <div class="col-md-8 dashboard">
            <img src="images/mainpage.png" width="460" height="345" style="width: 100%;height: auto;">
        </div>
    </div>

</body>

</html>
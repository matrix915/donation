<?php
    session_start();
    $user_id = $_SESSION["user_id"];
    $conn = mysqli_connect('localhost','root','','donation_db');
    $get_pro = "select * from users where user_id = '".$user_id."' limit 1";
    $query = mysqli_query($conn,$get_pro);
    $user_info = $query->fetch_assoc();
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
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/withdraw_page.css">
    <title>Video donation Webapp</title>
</head>

<body>
    <div class="row no-gutters">
        <div class="col-md-2 no-gutters">
            <div class="leftside d-flex  buttons-alignment align-items-center">
                <a href="profile_page.php" class="btn1 btn-dark profile">Profile</a>
                <a href="withdraw_page.php" class="btn2 btn-dark withdraw">Withdraw</a>
                <a href="index.php" class="logout_btn">logout</a>
            </div>
        </div>
        <div class="col-md-10 no-gutters">

            <div class="rightside d-flex  align-items-center">
                <div class="headerNav">
                <a href="http://vdon.me/<?php echo $user_info['user_name'];?>"> <img src="images/home.png" alt="Avatar" style="width:30px;height:30px;margin-top:-18px;"></a>
                    <!-- <a href="video_page.php"> <img src="images/home.png" alt="Avatar" style="width:30px;height:30px;margin-top:-18px;"></a> -->
                    <span class="a">$122</span>
                </div>
                <div class="mainNav">

                    <form method="post" action="../backend/profile.php" style="display:inline;" class="profile_form" enctype="multipart/form-data">
                        <div class="form-group">
                            <button type="button" class="btn btn-light withdraw_btn">How much would you like to withdraw?</button>
                        </div>
                        <div class="form-group">
                            <span class="middle_txt">Mininum:$10</span>
                        </div>
                        <div class="form-group">
                            <span class="middle_txt">Maxinum:$122</span>
                        </div>
                        <div class="form-group">
                            <input type="range" id="vol" name="vol" min="0" max="122" oninput="myFunction()">
                        </div>
                        <div class="form-group">
                            <!-- <input type="button" value="$22" style="width:100px;border-radius:5px;height:40px;font-size:30px;font-family:Open Sans;font-weight:bold;"> -->
                            <p id="demo" style="color:white;font-size:20px;">initial Value:100$</p>
                            <p id="demo" style="color:white;font-size:20px;"></p>
                        </div>
                        <span class="middle_txt">Paypal email</span>
                        <div class="form-group">
                            <input type="email" name="paypal_email" class="paypal_email" id="paypal_email" placeholder="Please input paypal email" style="width:400px;height:30px;">
                        </div>
                        <!-- <button type="submit" class="btn btn-dark" name="withdraw_btn">Withdraw</button> -->
                        <input type="submit" class="btn btn-dark"  value="Withdraw" name="withdraw_btn"></input>
                    </form>
                    <h1 style="color:white;" class="footer">Your site url:www.vdon.me/<?php echo $user_info['user_name'];?></h1>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
        var x = document.getElementById("vol").value;
        document.getElementById("demo").innerHTML = "Change Value: " + x;
        }
    </script>
</body>

</html>
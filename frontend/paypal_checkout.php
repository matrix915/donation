<?php
session_start();
$user_id = $_SESSION['user_id'];
$con = mysqli_connect('localhost', 'root', '', 'donation_db');
$query = "select * from users where user_id = '" . $user_id . "' limit 1";
$result = mysqli_query($con, $query);
$user_info = $result->fetch_assoc();
include "vendor/autoload.php";
$money = $_POST['vol'];
print_r($money);
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
    <link rel="stylesheet" href="themes/jquery.mCustomScrollbar.css" />
    <script src="themes/jquery.mCustomScrollbar.concat.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/paypal_checkout.css">

    <title>Video donation Webapp</title>
</head>
<body>
    <div class="left_side">
        <div class="header_div">
            <img src="images/heart.png" alt="Avatar" class="title_img">
            <span class="title_txt">Submission</p>
        </div>
        <img src="images/paypal.png" alt="Avatar" style="   
            width: 105px;
            padding-top: 10px;
            position: absolute;
            top: 194px;
            left: 1027px;" >
        <div class="middle_div">
            <p>You are sending the video to influencer with 10$</p>
            <!-- <img src="images/paypal.png" alt="Hard cording" id="right-top-image" width="460" height="345" alt="Hard cording" style="width: 100%;height: auto;"> -->
            <div class="message_box">

            </div>
        </div>
        <div class="footer_div">
            <button class="button button1" id="value_button" style="
            background-color:#4CAF50;border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 16px 270px;
            cursor: pointer;"  onclick="document.location='donation_page.php'">Back</button>
            <button class="button button1" id="value_button" style="
            background-color:#4CAF50;border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 16px 270px;
            cursor: pointer;"  onclick="document.location='https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=EC-4TJ190991C411673U'">Checkout</button>
        </div>
    </div>
    <div class="right_side">
        <img src="images/right.png" alt="Hard cording" id="right-top-image" width="460" height="345" alt="Hard cording" style="width: 100%;height: auto;">
        <div class="influence_area" style="width:400px;height:100px;margin-top:50px;float:right;">
            <span style="color:white;font-size:20px;"><?php echo $user_info['user_name']; ?></span>
            <div class="influence_part" style="height:135px;width:100%;background:white;">
                <img id="profile_image1" src="../backend/upload_images/<?php echo $user_info['user_image']; ?>" width=74 height=74 style="display:inline-block;border-radius:50%;"/>
                <!-- <input class="profile_textarea" rows="5" id="comment" name="text" value = "<?php echo $user_info['text_area'];?>" style="
                display: inline-block;
                width: 321px;
                height: 77px;"> -->
                <span class="profile_textarea" rows="5" id="comment" name="text" value = "<?php echo $user_info['text_area'];?>" style="
                display: inline-block;
                width: 321px;
                height: 77px;"><?php echo $user_info['text_area'];?></span>
            </div>
        </div>
    </div>
  
</body>
</html>
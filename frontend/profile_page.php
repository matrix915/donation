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
    <link rel="stylesheet" type="text/css" href="css/profile_page.css">
    <title>Video donation Webapp</title>
</head>

<body>
    <div class="row no-gutters">
        <div class="col-md-2 no-gutters">
            <div class="leftside d-flex  buttons-alignment align-items-center">
                <a href="profile_page.php" class="btn1 btn-dark profile">Profile</a>
                <a href="withdraw_page.php" class="btn2 btn-dark withdraw">Withdraw</a>
                <a href="index.php" class = "logout_btn">logout</a>
            </div>
        </div>
        <div class="col-md-10 no-gutters">
  
            <div class="rightside d-flex  align-items-center">
                <div class="headerNav">
                    <a href="http://vdon.me/<?php echo $user_info['user_name'];?>"> <img src="images/home.png" alt="Avatar" style="width:30px;height:30px;margin-top:-18px;"></a>
                    <!-- <a href="video_page.php"> <img src="images/home.png" alt="Avatar" style="width:30px;height:30px;margin-top:-18px;"></a> -->
                 <span class="a">$122</span>
                </div>
                <form method = "post" action="../backend/profile.php" style="display:inline;" class="profile_form"  enctype="multipart/form-data">
                    <img src="../backend/upload_images/<?php echo $user_info['user_image'];?>" alt="Avatar" style="width:130px;margin-top:100px;margin-left: 160px;" onClick="triggerClick()" id="profileDisplay">
                    <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                    <label for="usr" style="color: white;display: block;margin-left: 180px;">Click to edit</label>
                    <textarea class="form-control profile_textarea" rows="5" id="comment" name="textarea" ><?php echo $user_info['text_area']; ?></textarea>
                    <input type="submit" class="btn  float-md-right form_profile_save" value="Save" name="update_btn"></input>
                </form>
                <form  action="../backend/profile.php" class="change_pwd" method="post"  enctype="multipart/form-data">
                    <img src="images/lock.png" alt="User image" style="width:30px;height:30px;margin-left:0px;display:inline-block">
                    <label for="pwd"></label>
                    <input type="password" class="form-control pwd" placeholder="Enter password" id="profile_pwd" name="profile_pwd" style="display:inline-block;" value="<?php echo $user_info['user_pass']; ?>">
                    <label for="pwd"></label>
                    <input type="password" class="form-control confirm_pwd" placeholder="Enter new password" style="display:inline-block;" id="confirm_pwd" name="confirm_pwd" >
                    <div>

                        <input type="submit" class="btn  float-md-right form_pwd_change"  value="change password" name="change_pass"></input>
                    </div>
                </form>
                <h1 style="color:white;" class="footer">Your site url:www.vdon.me/<?php echo $user_info['user_name'];?></h1>
            </div>
        </div>
    </div>
    <script>
        function triggerClick(e) {
        document.querySelector('#profileImage').click();
        }
        function displayImage(e) {
        if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
            document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
        }
    </script>
</body>

</html>
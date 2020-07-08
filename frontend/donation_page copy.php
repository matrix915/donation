<?php
session_start();
$user_id = $_SESSION['user_id'];
$con = mysqli_connect('localhost', 'root', '', 'donation_db');
$query = "select * from users where user_id = '" . $user_id . "' limit 1";
$result = mysqli_query($con, $query);
$user_info = $result->fetch_assoc();

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
    <link rel="stylesheet" type="text/css" href="css/donation_page.css">

    <title>Video donation Webapp</title>
</head>
<body>
    <!-- <form action="paypal_checkout.php" method="post" name="form1" enctype="multipart/form-data"> -->
    
    <div class="left_side">
        <div class="header_div">
            <img src="images/heart.png" alt="Avatar" class="title_img">
            <span class="title_txt">Creating video donation</p>
        </div>
        <div class="middle_div">
            <div class="middle_left">
                <div class="radio_area">
                    <ul>
                        <li>
                            <input class = "radio" type='radio' value='5' name='radio' id='radio1' />
                            <label class= "radio_label" for='radio1'>$5</label>
                        </li>
                        <li>
                            <input class = "radio" type='radio' value='10' name='radio' id='radio2' />
                            <label  class= "radio_label" for='radio2'>$10</label>
                        </li>
                        <li>
                            <input class="radio" type='radio' value='15' name='radio' id='radio3' />
                            <label  class= "radio_label" for='radio3'>$15</label>
                        </li>
                    </ul>
                </div>
                <div class = "text_area">
                    <p class="p_txt" style="color:white;font-size:30px;">or make a custom amount</p>
                    
                </div>
                <div class="range_area">
                    <input class= "range" type="range" id="vol" name="vol" min="0" max="122" oninput="myFunction()">
                </div>
            </div>
            <div class="middle_right">
                <!-- <img src="../backend/upload_images/laravel.png" alt="Avatar" style="
                    width: 322px;
                    height: 236px;
                    margin-top: 36px;
                    margin-left: 160px;
                "
                onClick="triggerClick()" id="profileDisplay"> -->
                <form action = "donation_page.php" method = "post" name = "form2" enctype="multipart/form-data">
                    <!-- <input type="file" name="file" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;"> -->
                    <input type="file" name="file" onChange="displayImage(this)" id="profileImage" class="form-control" >
                        <!-- <label for="usr" style="   
                        color: white;
                        display: block;
                        margin-left: 260px;
                        font-size: 20px;
                        margin-top: 10px;">
                        Click to edit</label> -->
                        <br/>
                        <br/>
                        <input type="submit" name="video_register" value = "Click to edit">
                    <form>
                    <?php
                        if ($_POST['video_register']){
                            $fileName = $_FILES['file']['name'];
                            $fileTmpName = $_FILES['file']['tmp_name'];
                            $fileSize = $_FILES['file']['size'];
                            $fileError = $_FILES['file']['error'];
                            $fileType = $_FILES['file']['type'];
                            $fileExt = explode('.',$fileName);
                            $fileActualExt = strtolower(end($fileExt));
                            $allowed = array('mp4','mov','avi','flv','wmv');
                            if(in_array($fileActualExt, $allowed) && $fileSize < 1000000){
                                move_uploaded_file($_FILES['file']["tmp_name"],"upload/" . $_FILES['file']['name']);
                                echo "<video width = '400' height='400' controls>
                                    <source src = 'upload/ " . $_FILES['file']['name'] ."' type='video/mp4'>
                                    </video>
                                ";
                            }else{
                                echo "You cannot upload files of this type!";
                            }
                        }
                    ?>
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
            cursor: pointer;">50$</button>
        </div>
    </div>
    <div class="right_side">
        <img src="images/right.png" alt="Hard cording" id="right-top-image" width="460" height="345" alt="Hard cording" style="width: 100%;height: auto;">
        <div class="influence_area" style="width:400px;height:100px;margin-top:50px;float:right;">
            <span style="color:white;font-size:20px;"><?php echo $user_info['user_name']; ?></span>
            <div class="influence_part" style="height:135px;width:100%;background:white;">
                <img id="profile_image1" src="../backend/upload_images/<?php echo $user_info['user_image']; ?>" width=74 height=74 style="display:inline-block;border-radius:50%;"/>
                <input class="profile_textarea" rows="5" id="comment" name="text" value = "<?php echo $user_info['text_area'];?>" style="
                display: inline-block;
                width: 321px;
                height: 77px;">
                <!-- <a href="paypal_checkout.php" class="btn video_submit">Submit</a> -->
                <!-- <a href="paypal_checkout.php" class="btn video_submit">Submit</a> -->
                <a href="" class="btn video_submit">Submit</a>
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
        function myFunction() {
            var x = document.getElementById("vol").value;
            document.getElementById("value_button").innerHTML = x + "$";
        }
    </script>
</body>
</html>
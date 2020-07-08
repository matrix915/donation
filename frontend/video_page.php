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
    <link rel="stylesheet" type="text/css" href="css/video_page.css">

    <title>Video donation Webapp</title>
</head>

<body>
    <div class="row main no-gutters">
        <div class="col-md-8 no-gutters">
            <div class="leftside">
                <div class="leftside_header">
                    <img src="images/heart.png" alt="Avatar" class="title_img">
                    <p class="title_txt">Video donations from fans</h1>
                </div>
                <div class="card-deck card_area" style="margin-left: 33px;height:500px;width:1050px;">
                <!-- <div class="card-deck card_area" style="margin-left: 33px;"> -->
                    <div class="row row_area">

                        <div class="card">
                            <div class="card-header">
                            <small class="text-muted">@name</small>
                            </div>
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            <div class="card-footer">
                                <small class="text-muted">$15</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                            <small class="text-muted">@name</small>
                            </div>
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            <div class="card-footer">
                                <small class="text-muted">$15</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                            <small class="text-muted">@name</small>
                            </div>
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            <div class="card-footer">
                                <small class="text-muted">$15</small>
                            </div>
                        </div>
                    </div>
                    <div class="row top-buffer row_area">

                        <div class="card">
                            <div class="card-header">
                            <small class="text-muted">@name</small>
                            </div>
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            <div class="card-footer">
                                <small class="text-muted">$15</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                            <small class="text-muted">@name</small>
                            </div>
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            <div class="card-footer">
                                <small class="text-muted">$15</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                            <small class="text-muted">@name</small>
                            </div>
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            <div class="card-footer">
                                <small class="text-muted">$15</small>
                            </div>
                        </div>
                    </div>
                    <div class="row top-buffer row_area">

                        <div class="card">
                            <div class="card-header">
                            <small class="text-muted">@name</small>
                            </div>
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            <div class="card-footer">
                                <small class="text-muted">$15</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                            <small class="text-muted">@name</small>
                            </div>
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            <div class="card-footer">
                                <small class="text-muted">$15</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                            <small class="text-muted">@name</small>
                            </div>
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            <div class="card-footer">
                                <small class="text-muted">$15</small>
                            </div>
                        </div>
                    </div>
                 </div>

            </div>
        </div>
        <div class="col-md-4 no-gutters">
            <div class="rightside">
                <img  class= "top-right" src="images/right.png"  width="460" height="345" alt="Hard cording" style="width: 100%;height: auto;">
                <div class="influence_area" style="width:100%;height:100px;margin-top:50px;float:right;">
                <span style="color:white;font-size:20px;"><?php echo $user_info['user_name']; ?></span>
                <div class="influence_part" style="height:135px;width:100%;background:white;">
                    <img id="profile_image1" src="../backend/upload_images/<?php echo $user_info['user_image']; ?>" width=74 height=74 style="display:inline-block;border-radius:50%;" />
                    <!-- <input class="profile_textarea" rows="5" id="comment" name="text" value="<?php echo $user_info['text_area']; ?>" style="
                        display: inline-block;
                        width: 321px;
                        height: 77px;"> -->
                    <span class="profile_textarea" rows="5" id="comment" name="text" value="<?php echo $user_info['text_area']; ?>" style="
                        display: inline-block;
                        width: 321px;
                        height: 77px;"><?php echo $user_info['text_area']; ?></span>
                    <!-- <a href="paypal_checkout.php" class="btn video_submit">Submit</a> -->
                </div>
                <a href="donation_page.php" class="btn video_submit">Video Submission</a>
            </div>
        </div>
    </div>
</body>

</html>
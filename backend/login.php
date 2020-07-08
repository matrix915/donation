<?php
    include 'include/dbconnect.php';
    session_start();
    if(isset($_POST['login_user'])){
        $user_email = mysqli_real_escape_string($con,$_POST['email']);
        $user_pass = mysqli_real_escape_string($con,$_POST['pwd']);
        $user_pass = md5($user_pass);
        $get_user = "select * from users where user_email='$user_email' AND user_pass='$user_pass'";
        $run_user = mysqli_query($con,$get_user);
        $user_info = $run_user->fetch_assoc();
        $count = mysqli_num_rows($run_user);
        if($count==1){
            $_SESSION['user_email']=$user_email;
            $_SESSION['user_id']=$user_info['user_id'];
            echo "<script>alert('You are Logged in donation home page. Navigating to Profile Page');
            window.open('../frontend/profile_page.php','_self');
            </script>";
        }
        else {
            echo "<script>alert('Email or Password is Wrong');window.open('../frontend/signup.php','_self');</script>";
        }
    }

?>
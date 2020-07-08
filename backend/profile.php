<?php
    include 'include/dbconnect.php';
    session_start();
    $user_id = $_SESSION["user_id"];
    if(isset($_POST['update_btn'])){
        $get_pro = "select * from users where user_id = '".$user_id."' limit 1";
        $query = mysqli_query($con,$get_pro);
        $user_info = $query->fetch_assoc();
        if(!empty($_FILES['profileImage']['name'])){
          $upload_image = $_FILES['profileImage']['name'];
          $temp_upload_image = $_FILES['profileImage']['tmp_name'];
          move_uploaded_file($temp_upload_image,"upload_images/$upload_image");
          $update_query = "UPDATE users SET user_image='".$upload_image."', text_area = '".$_POST['textarea']."' WHERE user_id='".$user_id."'";
        }else{
          $update_query = "UPDATE users SET text_area = '".$_POST['textarea']."' WHERE user_id='".$user_id."'";
        }
        if (mysqli_query($con, $update_query)) {
            echo "Record updated successfully";
            echo "<script>
            window.open('../frontend/profile_page.php','_self');
            </script>";

          } else {
            echo "Error updating record: " . mysqli_error($con);
          }
          
          mysqli_close($con);
    }
    if(isset($_POST['change_pass'])){
        $get_pro = "select * from users where user_id = '".$user_id."' limit 1";
        $query = mysqli_query($con,$get_pro);
        $user_info = $query->fetch_assoc();
        $new_password = md5($_POST['confirm_pwd']);
        $update_query = "UPDATE users SET user_pass='". $new_password."' WHERE user_id='".$user_id."'";
        if (mysqli_query($con, $update_query)) {
            echo "Record updated successfully";
            echo "<script>
            window.open('../frontend/withdraw_page.php','_self');
            </script>";
            
          } else {
            echo "Error updating record: " . mysqli_error($con);
          }
          
          mysqli_close($con);
    }
    if(isset($_POST['withdraw_btn'])){
        $get_pro = "select * from users where user_id = '".$user_id."' limit 1";
        $query = mysqli_query($con,$get_pro);
        $user_info = $query->fetch_assoc();
        $update_query = "UPDATE users SET paypal='". $_POST['paypal_email']."' , withdraw = '".$_POST['vol']."' WHERE user_id='".$user_id."'";
        if (mysqli_query($con, $update_query)) {
            $_SESSION['user_id'] = $user_info['user_id'];
            echo "Record updated successfully";
            header('location: ../frontend/video_page.php');
          } else {
            echo "Error updating record: " . mysqli_error($con);
          }
          
          mysqli_close($con);
    }


?>
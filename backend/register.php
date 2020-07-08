<?php
    include 'include/dbconnect.php';
    session_start();
    $username = "";
    $email    = "";
    $user_pass = "";
    $errors = array(); 
    if(isset($_POST['register_user'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $user_pass = mysqli_real_escape_string($con,$_POST['pwd']);
        if(empty($username)){ array_push($errors,'Username is required');}
        if(empty($email)){ array_push($errors,'Email is required');}
        if(empty($user_pass)){ array_push($errors,'User Password is required');}
        if(empty($_POST['con_pwd'])){ array_push($errors,'Confirm Password is required');}
        if($_POST['pwd'] != $_POST['con_pwd']){ array_push($errors,'Confirm Password was not matched');}
        $user_check_query = "SELECT * FROM users WHERE user_name='$username' OR user_email='$email' LIMIT 1";
        $result = mysqli_query($con, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user) { 
            if ($user['user_name'] === $username) {
              array_push($errors, "Username already exists");
            }
        
            if ($user['user_email'] === $email) {
              array_push($errors, "email already exists");
            }
        }
        if (count($errors) == 0) {
            $password = md5($user_pass);//encrypt the password before saving in the database
            $upload_image = $_FILES['profileImage']['name'];
            $temp_upload_image = $_FILES['profileImage']['tmp_name'];
            move_uploaded_file($temp_upload_image,"upload_images/$upload_image");
            $query = "insert into users (user_name,user_email,user_pass,user_image) values ('$username','$email','$password','$upload_image')";
            
            $run = mysqli_query($con, $query);
            
            if($run){
                $userId = $con->insert_id;
                $_SESSION['user_name'] = $username;
                $_SESSION['user_email'] = $email;
                $_SESSION['success'] = "You are now logged in";
                $_SESSION['user_id'] = $userId;
                header('location: ../frontend/profile_page.php');
            }
        }else if($errors){
            echo "<script>
            alert('Please input the data correctly.Check the image, password, confirm password');
            window.open('../frontend/signup.php','_self');
            </script>";
        }
    }


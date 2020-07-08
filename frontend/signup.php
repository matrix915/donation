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
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <title>Video donation Webapp</title>
</head>

<body>
    <div class="header" style="display:inline-block;">
        <h2 class="h_style" style="display:inline-block;">VDon</h2>
        <div class="login_form" style="display:inline-block;">
            <form class="form-inline" action="../backend/login.php" method="post" auto-complete="off">
                <img src="images/user.png" alt="User image" style="width:30px;height:30px;margin-left:30px;">
                <input type="email" class="form-control" id="usr1" placeholder="Enter User's email" name="email" required>
                <img src="images/lock.png" alt="User image" style="width:30px;height:30px;margin-left:30px;">
                <input type="password" class="form-control" id="pwd1" placeholder="Enter Password" name="pwd" auto-complete="off" required>
                &nbsp;&nbsp;
                <button type="submit" class="btn btn-success signin" formmethod="post" name="login_user">Login</button>
            </form>
        </div>
    </div>
    <div class="main" style="display:inline-block;">
        <div class="container">

            <div class="mx-auto" style="width: 274px;">
                <form action="../backend/register.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <img src="images/img_avatar.png" alt="Avatar" style="width:105px;padding-top:10px;" onClick="triggerClick()" id="profileDisplay">
                    <div class="form-group">
                        <input type="file" id="profileImage" name="profileImage" title="Click to upload image" onChange="displayImage(this)" style="display: none;" required>
                        <label for="usr" style="color:white;display:block;">Click to upload image</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="usr" placeholder="Enter Username" name="username" required>
                        <label style="color:white;" for="usr">Username</label>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" auto-complete="off" required>
                        <label style="color:white;" for="pwd">Password</label>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="con_pwd" placeholder="Enter confirm password" name="con_pwd" auto-complete="off" required>
                        <label style="color:white;" for="con_pwd" >Confirm Password</label>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" auto-complete="off" required>
                        <label style="color:white;" for="email">Email</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light register" formmethod="post" name="register_user">Signup</button>
                    </div>
                </form>

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
                reader.onload = function(e) {
                    document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }

    </script>
</body>

</html>
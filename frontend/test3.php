<!DOCTYPE html>

<head>
    <title></title>
</head>

<body>

    <form action="test3.php" method="post" enctype="multipart/form-data">
        <label for="file"><span>Filename:</span></label>
        <input type="file" name="file" id="file" />
        <br />
        <input type="text" name="paypal" id = "paypal" placeholder="please input money" />
        <input type="text" name="custormer" id = "custormer" placeholder="please input name"/>
        <input type="submit" name="submit" value="Submit" />
    </form>

</body>

</html>
<?php

$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
// print_r($_FILES["file"]);exit;
if ((($_FILES["file"]["type"] == "video/mp4")
        || ($_FILES["file"]["type"] == "audio/mp3")
        || ($_FILES["file"]["type"] == "audio/wma")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/png")
        || ($_FILES["file"]["type"] == "image/jpeg"))

    // && ($_FILES["file"]["size"] < 20000)
    // && in_array($extension, $allowedExts)
) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    } else {
        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
        echo "Type: " . $_FILES["file"]["type"] . "<br />";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

        if (file_exists("upload/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " already exists. ";
        } else {
            move_uploaded_file(
                $_FILES["file"]["tmp_name"],
                "upload/" . $_FILES["file"]["name"]
            );
            echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
        }
    }
} else {
    echo "Invalid file";
}
?>
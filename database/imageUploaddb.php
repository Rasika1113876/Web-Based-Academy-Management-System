<?php

require_once '../include/db_connect.php';
$obj = new DataBase;

if (isset($_FILES["cust_file"]["type"])) {
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["cust_file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["cust_file"]["type"] == "image/png") || ($_FILES["cust_file"]["type"] == "image/jpg") || ($_FILES["cust_file"]["type"] == "image/jpeg")
) && ($_FILES["cust_file"]["size"] < 500000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["cust_file"]["error"] > 0) {
echo "Return Code: " . $_FILES["cust_file"]["error"] . "<br/><br/>";
} else {
if (file_exists("upload/" . $_FILES["cust_file"]["name"])) {//upload/b2.png
echo $_FILES["cust_file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
} else {
$sourcePath = $_FILES['cust_file']['tmp_name']; // Storing source path of the file in a variable

 $cusid = filter_input(INPUT_POST, 'profUserID');
$targetPath = "upload/" .$_FILES["cust_file"]["name"];//. '.' . $file_extension; //$_FILES['cust_file']['name']; // Target path where file is to be stored
//$targetPath = $_FILES["cust_file"]["name"];
move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file

//$quary = "INSERT INTO `images`( `file_name`) VALUES ('".$_FILES["cust_file"]["name"]."')";
$quary = "UPDATE `registered_trainee` SET `image_path`='".$_FILES["cust_file"]["name"]."' WHERE `id`=".$cusid;
echo $obj->runQuery($quary) . '<br/>';


echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
echo "<br/><b>File Name:</b> " . $_FILES["cust_file"]["name"] . "<br>";
echo "<b>Type:</b> " . $_FILES["cust_file"]["type"] . "<br>";
echo "<b>Size:</b> " . ($_FILES["cust_file"]["size"] / 1024) . " kB<br>";
echo "<b>Temp file:</b> " . $_FILES["cust_file"]["tmp_name"] . "<br>";
}
}
} else {
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}

///////////////////////////////view image///////////////////////////////

////////////////// images load to site products page///////////////////////////
//    if (filter_input(INPUT_POST, 'products') === 'select_image') {
//        $p_image = filter_input(INPUT_POST, 'key1');
//        $que = "SELECT `product_id`, "
//                . " `product_image` FROM `product`"; // WHERE `product_type`=" . $p_image;
//
//
//
//        $obj->runQuerySelect($que);
//    }
  //////////////////////////////////////////////////////////////////////////////  
   
 //////////////////////////image modal/////////////////////////////////////  
   
 if ($_POST['userProfile'] == 'select_images') {
         $selectbyID = $_POST['key1'];
//echo ($key1);
//$query = "SELECT `fullname`, `nic`, `dob`, `address1` FROM `registered_trainee` WHERE `id`='125'";
        $query = "SELECT `id`, `image_path` FROM `registered_trainee` WHERE `id`='$selectbyID'";

//echo ($query);
        $obj->runQuerySelect($query);
    }

        
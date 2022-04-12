<?php
echo php_ini_loaded_file();
$file_uploads = "On";
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//Connect to DataBase
$db = mysqli_connect('localhost','root','','homepagedb');


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
// Check file size(<~500mb)
if ($_FILES["fileToUpload"]["size"] > 500000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your post was not uploaded.";
// if everything is ok, try to upload file
} else {
	$filename = $_FILES["fileToUpload"]["name"];
    $caption = mysqli_real_escape_string($db, $_POST['caption']);
	$query = "INSERT INTO posts (image, caption) 
  			  VALUES('$filename', '$caption')";
  if (mysqli_query($db, $query)) {
    echo "The post ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
   	echo '<a href="http://127.0.0.1:8000/homepage.php">Click here to return to homepage</a>';
  } else {
    echo "Sorry, there was an error uploading your post.";
  }
}
?>
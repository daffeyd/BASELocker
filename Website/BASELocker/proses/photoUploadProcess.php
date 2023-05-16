<?php

session_start(); 
include "../koneksi.php";
  $target_dir = "../images/reportImages/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 50000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  
  if (isset($_POST['LocKampus']) && isset($_POST['Ruang']) && isset($_POST['Locker']) && isset($_POST['LockerNum']) ) {

    function validate($data){
         $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
  
    $loc = validate($_POST['LocKampus']);
    $ruang = validate($_POST['Ruang']);
    $locker = validate($_POST['Locker']);
    $lockernum = validate($_POST['LockerNum']);
  
    if (empty($loc)) {
      header("Location: ../pages/reportPage.php?error=loc / Yoo you have to get me a location");
        exit();
    }else if(empty($ruang)){
          header("Location: ../pages/reportPage.php?error=Yoo you have to give me a room baby");
        exit();
    }else if(empty($locker)){
      header("Location: ../pages/reportPage.php?error=Yoo you have to give me a locker baby");
    exit();
    }else if(empty($lockernum)){
      header("Location: ../pages/reportPage.php?error=Yoo you have to give me a lockernum baby");
    exit();
    }else{
      $sql = "INSERT INTO `reporttable`(`LocKampus`, `Ruang`, `Locker`, `LockerNum`) VALUES ('$loc','$ruang','$locker','$lockernum')";
      $result = mysqli_query($db, $sql);
      header("Location: ../pages/reportPage.php?success=Yoo you reported baby");
    }
    
  } else{
    header("Location: ../pages/reportPage.php");
    exit();
  }

?>
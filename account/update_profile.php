<?php
include_once 'auth.php';

$msg = '';
$err=0;



 /*Got the details from the form*/
$user_id = $auth_user['id'];
$name = clean('name');
$phone = clean('phone');
$bio = clean('bio');

$update = $con->query("UPDATE users set name = '$name', phone = '$phone', bio = '$bio' WHERE id = '$user_id'  ");

/** check if there is an image */
if ($_FILES['avatar']['name'] && $err==0) {
    $image = $_FILES['avatar']['name'];
    $filename = $auth_user['title'].basename($image);

    $target = "../avatars/".basename($filename);

    $upload = move_uploaded_file($_FILES['avatar']['tmp_name'], $target);
    

    if ($upload) {
        $sql = $con->query("UPDATE users set avatar = '$filename' WHERE id = '$user_id' ");
        $msg = 'profile updated';
       
    } 
    else {
    $msg = 'Image could not be uploaded';
    $err=1;
    }
}
if($err==0){
    $msg = 'profile updated';
    header("location:profile.php?msg=".$msg);
}
else{
    header("location:profile.php?msg=".$msg);
    echo $msg;
    $err=1;
}


?>
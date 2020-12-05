<?php
include_once 'auth.php';

$msg = '';
$doit = 1;

$user_id = $auth_user['id'];
$title = clean('title');
$category = clean('categories');
$content = clean('content');

$image = $_FILES['image']['name'];
$filename = $title.basename($image);
$target = "../post_images/".basename($filename);

$upload = move_uploaded_file($_FILES['image']['tmp_name'], $target);

if ($upload == true && $doit==1) {
    $sql = $con->query("INSERT into posts (user_id, title, categories, content, image) VALUES ('$user_id', '$title', '$category', '$content', '$filename' ) ");
    if($sql!= true){
        echo 'error'.$con->error;
        $doit=0;
    }
    else{
        $msg = 'post uploaded';
        header('location:add_post.php?msg='.$msg);
        
    }
   
}
else{
    header('location:add_post.php?msg='.$msg);
    $doit = 0;

}

?>
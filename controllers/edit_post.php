<?php
    require_once('../models/post.php');
    $id = $_POST['id'];
    $discription=$_POST['description'];
    $image=$_FILES['img']['name'];
    echo "<pre>";
    print_r($_FILES['img']);
    echo "</pre>";
    move_uploaded_file($_FILES['img']['tmp_name'],"../images/".$image);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($id) and !empty($discription) and !empty($image)){
            updatePost($id,$discription,$image);
        }
        header("location:../index.php");
    }

?>
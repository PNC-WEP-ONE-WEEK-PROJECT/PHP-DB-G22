<?php
require_once '../models/post.php';
if(isset($_POST))
{
    $text = $_POST['description'];
    $image = $_FILES['img']['name'];
    echo '<pre>';
    print_r($_FILES['img']);
    echo '</pre>';
    $statment = '../images/'.$image;
    move_uploaded_file($_FILES['img']['tmp_name'],$statment);
    addToPostList($text,1,$image);
    header('location:../index.php');
}
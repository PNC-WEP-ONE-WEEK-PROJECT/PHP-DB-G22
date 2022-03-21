<?php
require_once "../models/comment.php";
$mycomment = $_POST['text'];
$post_id = $_POST['id'];
echo $mycomment;
echo $post_id;
if(!empty($mycomment))
{
    commentOnPost($mycomment,1,$post_id);   
}
header('location:../index.php');
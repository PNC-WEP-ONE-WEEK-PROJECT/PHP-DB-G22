<?php 
require_once '../models/like.php';
$number1 = 1;
$user_id = 1;
$post_id = $_POST['post_id'];
likePost($number1, $user_id, $post_id);
header('location:../index.php');


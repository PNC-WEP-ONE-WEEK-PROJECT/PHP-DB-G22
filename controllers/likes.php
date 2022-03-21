<?php 
require_once '../models/like.php';
$number1 = 1;
$user_id = 1;
$post_id = $_POST['post_id'];
$likePosts = getlikeAll($post_id);
print_r($likePosts);
$checkUser = True;
foreach ($likePosts as $likePost)
{
    if ($likePost['user_id'] == $user_id)
    {
        $checkUser = False;
    }
}
if ( $checkUser)
{
    likePost($number1, $user_id, $post_id);
    header('location:../index.php');
}else {
    header('location:../index.php');
}




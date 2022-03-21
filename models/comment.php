<?php
require_once 'database.php';

// Create a new post
// @param  string -content : content of the post
// @param  number - $user_id : description of the post
// @param  string - $image : image of the post
// @return boolean 
//======================== Add comment on Post=======================
function commentOnPost($content, $user_id, $post_id)
{
global $database;
$comments = $database -> prepare("INSERT INTO comments (content, user_id, post_id ) VALUES (:content, :user_id, :post_id)");
$comments -> execute ([
    ':content' => $content,
    ':user_id' => $user_id,
    ':post_id' => $post_id
    ]);
} 

//===================================Select comment from Databases========================
function getAllComment($post_id){
    global $database;
    $statment = $database->prepare("SELECT * FROM comments where post_id=:post_id");
    $statment ->execute([
        ':post_id' => $post_id,
    ]);
    return $statment->fetchAll();
}
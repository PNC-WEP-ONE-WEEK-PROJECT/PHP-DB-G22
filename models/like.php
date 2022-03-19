<?php 
require_once 'database.php';
// DISPLAY LIKE =====================================
function likePost($like_number, $user_id, $post_id)
{
    global $database;
    $likes = $database -> prepare("INSERT INTO likes (like_number, user_id, post_id) VALUES (:like_number, :user_id, :post_id)");
    $likes -> execute ([
        ':like_number' => $like_number,
        ':user_id' => $user_id,
        ':post_id' => $post_id,
    ]);
}
function getLikePost($post_id)
{
    global $database;
    $likes = $database -> prepare("SELECT count(like_number) AS 'number_Of_like' FROM likes WHERE post_id =:post_id ");
    $likes -> execute ([
        ':post_id' => $post_id
    ]);
    return $likes -> fetchAll();
}
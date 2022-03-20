<?php
require_once 'database.php';
// DISPLAY COMMENT =======================
function commentOnPost($comment_id, $content, $user_id, $post_id)
{
global $database;
$comments = $database -> prepare("INSERT INTO comments (comment_id, content, user_id, post_id ) VALUES (:comment_id, :content, :user_id, post_id)");
$comments -> execute ([
    ':comment_id' => $comment_id,
    ':content' => $content,
    ':user_id' => $user_id,
    ':post_id' => $post_id
    ]);
} 
<?php
require_once 'database.php';
// DISPLAY COMMENT =======================
global $database;
$comment = $database -> prepare("INSERT INTO comments (comment_id, content, user_id, post_id ) VALUES (:comment_id, :content, :user_id, post_id)");
{
    
}
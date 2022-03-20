<?php require_once '../models/database.php' ?>
<?php
if (isset($_POST['postComment'])){
    $content = $_POST['content'];
    $username = $_POST['user_id'];
    $postid = $_POST['post_id'];
    if($comment != ""){
        $statment = "INSERT INTO comments (content, user_id, post_id) VALUES ('$content', '$username', '$postid')";
        
    }
}
?>
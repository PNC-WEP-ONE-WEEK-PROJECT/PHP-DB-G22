<?php
// link to database========================================
require_once 'database.php';


// Create a new post
// @param  string - $description : description of the post
// @param  string - $user_id : description of the post
// @param  string - $image : description of the post
// @return boolean 
// ADD POST TO DATABASE=========================================
function addToPostList ($description,$user_id,$image)
{
    global $database;
    if($description != null && $image == null){
        $conts=$database->prepare("INSERT INTO posts (description,user_id,image) VALUES (:description,:user_id,:image)");
        $conts->execute([
            ':description' => $description,
            ':user_id' => $user_id,
            ':image' => $image,
        ]);
    }
}


// SELECT ALL POST FROM DATABASE==========================
function getAllPost()
{
    global $database;
    $conts=$database->prepare("SELECT*FROM posts ORDER BY post_id DESC");
    $conts->execute();
    return $conts->fetchAll();
}

// SELECT  POST FROM DATABASE BY ID=======================
function getPostById($id)
{
    global $database;
    $cord = $database->prepare("SELECT * FROM posts where post_id = :id");
    $cord->execute([
        ':id' => $id,
    ]);
    $cord-> fetchAll();
}

// REMOVE POST FROM DATABASE BY USING ID=======================
function deletePost($id)
{
    global $database;
    $deleteCord = $database->prepare("DELETE FROM posts where post_id = :id");
    $deleteCord->execute([
        ':id' => $id,
    ]);
}


// UPDATE POST ON DATABASE ================================
function updatePost($post_id,$description,$image)
{
    global $database;
    $statment = $database->prepare("UPDATE posts SET description = :description, image=:image WHERE post_id = :post_id");
    $statment ->execute([
        ':description' => $description,
        ':image' => $image,
        ':post_id' => $post_id,
    ]);
    return $statment-> fetch();
}
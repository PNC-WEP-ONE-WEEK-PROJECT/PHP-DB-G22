<?php
// link to database========================================
require_once 'database.php';

// ADD TO DATABASE=========================================
function addToPostList ($description,$user_id,$image)
{
    global $database;
    $conts=$database->prepare("INSERT INTO posts (description,user_id,image) VALUES (:description,:user_id,:image)");
    $conts->execute([
        ':description' => $description,
        ':user_id' => $user_id,
        ':image' => $image,
    ]);
}

// SELECT ALL DATA FROM DATABASE==========================
function getAllData()
{
    global $database;
    $conts=$database->prepare("SELECT*FROM posts ORDER BY post_id DESC");
    $conts->execute();
    $conts->fetchAll();
}

// SELECT A DATA FROM DATABASE BY ID=======================
function getById($id)
{
    global $database;
    $cord = $database->prepare("SELECT * FROM posts where post_id = :id");
    $cord->execute([
        ':id' => $id,
    ]);
    $cord-> fetchAll();
}

// REMOVE DATA FROM DATABASE BY USING INDEX================
function deletePost($id)
{
    global $database;
    $deleteCord = $database->prepare("DELETE FROM posts where id = :id");
    $deleteCord->execute([
        ':id' => $id,
    ]);
}


// UPDATE DATA ON DATABASE ================================
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
<?php
require_once('../models/post.php');

$id = $_POST['id'];
if (isset($id) and $_SERVER['REQUEST_METHOD'] == 'POST') {

    // 1 - get the description and the image file
    $discription = $_POST['description'];
    $image = $_FILES['img']['name'];

    if (!empty($id) and (!empty($discription) or !empty($image))) {
        // 2 - Move the file to the image /folder  
        move_uploaded_file($_FILES['img']['tmp_name'], "../images/" . $image);

        // 3 Update the database
        updatePost($id, $discription, $image);
    }

    // 4 Display the main view
    header("location:../index.php");
}
?>
<pre>
<pre>
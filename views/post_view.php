<div class="nav">
        <h3>Facebook</h3>
        <ul>
            <li><a href="add_post.php">+Add post</a></li>
        </ul>
</div>
<?php
require_once '../templates/header.php';
require_once '../models/post.php';
$conts = getAllPost();
foreach($conts as $cont):
    
?>

<div class="card">
    <div class="head ">
        <div class="user">
            <img src="./images/sophy.jpg" alt=""> 
            <strong> User name</strong>
        </div>
        <i class="fa fa-edit" style="font-size : 26px;"></i>
    </div>
    <div class="body">
        <div class="description">
            <p><?= $cont['description']?></p>
        </div>
        <img src="../images/<?= $cont['image']?>" alt="">
        <div class="option">
            <div class="like">
                <i class="fa fa-thumbs-o-up" style="font-size : 26px"></i>
            </div>
            <div class="comment">
                <i class="fa fa-commenting-o" style="font-size : 26px"></i>
            </div>
            <div class="trash">
                <i class="fa fa-trash-o" style="font-size : 26px; color:red"></i>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<style>
    
    .card{
    
        margin: auto;
        width: 80vh;
        background: #ffffffc7;
        border-radius: 20px;
        padding: 20px;
        margin-top: 20px;
        
    }
  
    .head{
        display: flex;
        justify-content: space-between;
    }
    .head img{
        width: 12vh;
        height: 12vh;
        border-radius: 40px;
        padding: 10px;
    }
    .head strong {
        margin-top: 20px;
    }
    .body img {
        margin-left: 10%;
        width: 80%;
      
    }
    .option{
        margin-top:10px;
        display: flex;
        justify-content: space-between;
    }
</style>

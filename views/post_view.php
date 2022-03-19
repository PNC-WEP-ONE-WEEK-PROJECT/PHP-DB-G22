
<div class="post_contain">
<?php
require_once '../models/post.php';
$conts = getAllPost();
foreach($conts as $cont):
?>
    <div class="card">
        <div class="head ">
            <div class="user">
                <img src="../images/pf.jpg" alt=""> 
                <strong>Sophy Lida</strong>
            </div>
            <a href="views/edit_post.php?id=<?=$cont['post_id']?>"><i class="fa fa-edit" style="font-size : 26px;"></i></a>     
        </div>
        <div class="body">
            
            <div class="description">
                <p><?= $cont['description']?></p>
            </div>
            <img src="../images/<?= $cont['image']?>" alt="">
            <div class="number">
                <p>2K</p>
                <p>880 Comments</p>
            </div>
            <div class="option">
                <div class="like">
                    <i class="fa fa-thumbs-o-up" ></i>
                    <p>Like</p>
                </div>
                <div class="comment">
                    <i class="fa fa-comment-o" ></i>
                    <p>Comment</p>
                </div>
            </div>
            <div class="add_comment">
                <img src="../images/pf.jpg" alt=""> 
                <input type="text" name="text" class="put_comment" placeholder="comment" >
            </div>
            <div class="trash">
                <a href="../controllers/delete_post.php?id=<?=$cont['post_id']?> ">
                    <i class="fa fa-trash-o" style="font-size : 26px; color:red"></i>
                </a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>


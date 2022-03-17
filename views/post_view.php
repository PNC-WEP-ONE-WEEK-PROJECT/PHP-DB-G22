
<?php
require_once './models/post.php';
$conts = getAllPost();
foreach($conts as $cont):
?>
<div class="card">
    <div class="head ">
        <div class="user">
            <img src="../images/pic.jpg" alt=""> 
            <strong>Sophy Lida</strong>
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
                <a href="../controllers/delete_post.php?id=<?=$cont['post_id']?> ">
                    <i class="fa fa-trash-o" style="font-size : 26px; color:red"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>


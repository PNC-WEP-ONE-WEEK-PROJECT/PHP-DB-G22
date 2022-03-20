
<div class="post_contain">
<?php
require_once 'models/post.php';
require_once 'models/like.php';
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

                <?php
                $likes = getLikePost($cont['post_id']);
                foreach ($likes as $like):
                ?>
                <p><?= $like['number_Of_like']?></p>
                <?php 
                endforeach
                ?>
                <p>0 Comments</p>
            </div>
            <div class="option">

                <div class="like">
                    <form action="../controllers/likes.php" method="POST">
                        <input type="hidden" name="post_id" value="<?php echo $cont['post_id'] ?>" >
                        <button type="submit" class="btn"><i class="fa fa-thumbs-o-up box" ></i>Like</button>
                    </form>
                </div>
                <div class="comment">
                    <form  action ="" method="POST">
                        <i class='far fa-comment-alt' style='font-size:24px'></i>
                        <input type="hidden" name="id" value="<?php echo $user_id ?>" >
                        <button type="submit" class="btn"><i class="fa fa-comment-o box" ></i>Comment</button>
                    </form>
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


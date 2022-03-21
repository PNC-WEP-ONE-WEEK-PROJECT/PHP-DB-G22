
<div class="post_contain">
<?php
require_once 'models/post.php';
require_once 'models/like.php';
// _____________________________________________display post__________________________________________
$conts = getAllPost();
foreach($conts as $cont):
?>
    <!-- __________________profile and icon edit HTML___________________________________ --> 
    <div class="card">
        <div class="head ">
            <div class="user">
                <img src="../images/pf.jpg" alt=""> 
                <strong>Sophy Lida</strong>
            </div>
            <a href="views/edit_post.php?id=<?=$cont['post_id']?>"><i class="fa fa-edit" style="font-size : 26px;"></i></a>     
        </div>
    <!-- _____________________________________like post _________________________________ -->
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
                    require_once "models/comment.php";
                    $commentList = getAllComment($cont['post_id']);
                    endforeach
                ?>
                <p><?=count($commentList);?> Comments</p>
            </div>
            <div class="option">
                <div class="like">
                    <form action="../controllers/likes.php" method="POST">
                        <input type="hidden" name="post_id" value="<?php echo $cont['post_id'] ?>" >
                        <button type="submit" class="btn"><i class="fa fa-thumbs-o-up box" ></i>Like</button>
                    </form>
                </div>
            <!-- _____________________________________comment BTN____________________________ -->
                <div class="comment">
                    <form  action ="" method="POST">
                        <i class='far fa-comment-alt' style='font-size:24px'></i>
                        <input type="hidden" name="id" value="<?php echo $user_id ?>" >
                        <button type="submit" class="btn" name="postComment"><i class="fa fa-comment-o box" ></i>Comment</button>
                    </form>
                </div>
            </div>
        <!-- __________________________________input comment HTML_____________________________ -->
            <div class="add_comment" style="width: 90%">
                <form action = "../controllers/add_comment.php" class="w-100 d-flex " method="post">
                    <div class="d-flex w-100">
                        <img src = "../images/pf.jpg" alt=""> 
                        <input type="hidden" name="id" value="<?php echo $cont['post_id'] ?>" >
                        <input type="text" name="text" class="put_comment form-control w-100" placeholder="comment" >
                    </div>
                    <div class="">
                        <input type="submit" value="send" class="btn btn-primary m-3">
                    </div>
                </form>
            </div>
        <!-- ________________________________Display comment_____________________________ -->
            <select style="width: 80%;margin-left:10%;border:none;padding:10px;">
                <?php
                    require_once "models/comment.php";
                    $commentList = getAllComment($cont['post_id']);
                    foreach($commentList as $comment){
                        echo $comment['content'];
                   
                ?>
                <option value = "Lida crazy"><?=$comment['content'];?></option>
               <?php
                    }
               ?>
            </select>
    <!-- _________________________________________________________________________ -->
            <div class="trash">
                <a href="../controllers/delete_post.php?id=<?=$cont['post_id']?> ">
                    <i class="fa fa-trash-o" style="font-size : 26px; color:red"></i>
                </a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>


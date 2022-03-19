
<div class="post_contain">
<?php
require_once './models/post.php';
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
            <div class="option">
                <div class="like">
                    <form action="../controller/likes.php"  method="POST">
                        <input type="hidden" name="user_id" value="<?php echo $id ?>" >
                        <button type="submit"> <i class="fa fa-thumbs-o-up"> </i>Like</button>
                        
                    </form>
                </div>
                <div class="comment">
                    <i class="fa fa-commenting-o" ></i> 
                    <p>comment</p>
                </div>
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


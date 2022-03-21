<?php
require_once '../templates/header.php';
require_once 'nav.php'
?>
<div class="container">
    <div class="head ">
        <div class="user">
            <img src="../images/pf.jpg" alt=""> 
            <strong>Sophy Lida</strong>
        </div>
    </div>
_______________________________________________________________________________________________
    <?php
    require_once '../models/post.php';
    $id=$_GET['id'];
    $listPost=getPostById($id);
    foreach($listPost as $list){
    
    ?>
     <div class="title mt-0">
        <h2>Edit post</h2>     
    </div>
    <!-- Your code here -->
    <form action="../controllers/edit_post.php" method="post" enctype="multipart/form-data" class="p-5 mt-1">         
            <input type="hidden" name="id" value="<?php echo $id ?>" >
            <div class="form-group mt-7">
                <input type="file" class="form-control" name="img" value="../image/<?=$list['image']?>" />
            </div>
            <div class="form-group mt-4">
            <textarea name="description" class="form-control"><?=$list['description']?></textarea>
            </div>
            <div class="form-group mt-4 d-grid">
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </div>
            <div class="form-group mt-4 d-grid">
                <button type="submit" class="btn btn-danger btn-block">cancel</button>
            </div>
    </form>
</div>
<?php
}
require_once '../templates/footer.php';
?>


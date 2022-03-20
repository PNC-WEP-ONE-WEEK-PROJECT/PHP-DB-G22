<?php
require_once '../templates/header.php';
?>
<div class="container">
<?php
  require_once '../models/post.php';
  $id=$_GET['id'];
  $listPost=getPostById($id);
  foreach($listPost as $list){
 
?>
    <!-- Your code here -->
    <form action="../controllers/edit_post.php" method="post" enctype="multipart/form-data" class="p-5 mt-5">
            <div class="title mt-4">
                <h2>Facebook</h2>     
            </div>
            <input type="hidden" name="id" value="<?php echo $user_id ?>" >
            <div class="form-group mt-4">
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


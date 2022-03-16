<?php
require_once '../templates/header.php';
?>
<div class="container">
    <!-- Your code here -->
    <form action="../controllers/Add_post.php" method = 'POST'  enctype="multipart/form-data">
        <div class="nav">
            <h1>Facebook</h1>     
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="img" >
        </div>
        <div class="form-group">
           <textarea name="description" class="form-control" placeholder="Description......" ></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Post</button>
        </div>
    </form>
</div>
<?php
require_once '../templates/footer.php';
?>
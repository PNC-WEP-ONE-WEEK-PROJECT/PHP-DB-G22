<?php
    require_once('../templates/header.php');
?>
<div class="container">
    <!-- Your code here -->
    <form action="../controllers/add_post.php" method = 'POST'  enctype="multipart/form-data" class="p-5 mt-5">
        <div class="title mt-4">
            <h2>Facebook</h2>     
        </div>
        <div class="form-group mt-4">
            <input type="file" class="form-control" name="img" >
        </div>
        <div class="form-group mt-4">
           <textarea name="description" class="form-control" placeholder="text" ></textarea>
        </div>
        <div class="form-group mt-4 d-grid">
            <button type="submit" class="btn btn-success btn-block">Post</button>
        </div>
        <div class="form-group mt-4 d-grid">    
            <button type="submit" class="btn btn-danger btn-block">cancel</button>
        </div>
    </form>
</div>

<?php
    require_once('../templates/footer.php');
?>
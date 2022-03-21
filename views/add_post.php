<?php
    require_once('../templates/header.php');
    require_once 'nav.php';
?>
<div class="container">
    <div class="head ">
        <div class="user">
            <img src="../images/pf.jpg" alt=""> 
            <strong>Sophy Lida</strong>
        </div>
    </div>
_______________________________________________________________________________________________
    <!-- Your code here -->
    <div class="title mt-0">
        <h2>Add your post</h2>     
    </div>
    <form action="../controllers/add_post.php" method = 'POST'  enctype="multipart/form-data" class="p-5 mt-1">
        <div class="form-group mt-7 ">
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
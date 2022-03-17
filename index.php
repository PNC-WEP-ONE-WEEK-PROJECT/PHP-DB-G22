<?php
/**
 * Your code here
 */
require_once 'templates/header.php';
// require_once 'views/post_view.php';
require_once 'templates/footer.php';

?>
<div class="nav">
        <h3>Facebook</h3>
        <ul>
            <li><a href="#">signin</a></li>
            <li><a href="">signout</a></li>
        </ul>
</div>
<div class="sign_up">
    <form action="views/post_view.php" enctype="multipart/form-data" class="p-5 mt-5">
        <div class="log mt-4">
            <h4>signin</h4>     
        </div>
        <div class="form-group mt-4">
            <input type="email" name="email" placeholder="Phone or Email...." class="form-control">
        </div>
        <div class="form-group mt-4">
           <input type="password" name="password" placeholder="Password....." class="form-control">
        </div>
        <div class="form-group mt-5 d-grid">
            <button type="submit" class="btn btn-primary btn-block">Go</button>
        </div>
    </form>
</div>
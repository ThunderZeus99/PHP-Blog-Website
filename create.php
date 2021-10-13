<?php include("inc/header.php");?>
    <div class="container mt-5">
        <form  method="POST" action="logic.php">
            <label for="blog title" class="text-light border-left-0 customText">Blog Title</label>
            <input type="text" placeholder = "Blog Title" name="title" class="form-control my-3 bg-secondary text-light border-0" required>
            <label for="content" class="text-light customText">Content</label>
            <textarea cols="20" rows="5" name="content" class="form-control my-3  bg-secondary text-light border-0" required></textarea>
            <input type="submit" value="Add Post" class="btn btn-outline-warning">
        </form>
    </div>
<?php include("inc/footer.php") ?>
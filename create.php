<?php
    include "logic.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  <!--  bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- my css -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body class="bg-dark">
    <div class="container mt-5">
        <form  method="POST">
            <label for="blog title" class="text-light border-left-0 customText">Blog Title</label>
            <input type="text" placeholder = "Blog Title" class="form-control my-3 bg-secondary text-light border-0">
            <label for="content" class="text-light customText">Content</label>
            <textarea cols="20" rows="5" class="form-control my-3  bg-secondary text-light border-0"></textarea>
            <button class="btn btn-outline-warning">Add Post</button>
        </form>
    </div>
     <!-- bootstrap js -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script> 
</body>
</html>
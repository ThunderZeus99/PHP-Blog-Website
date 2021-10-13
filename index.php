<?php include("inc/header.php");?>
    <div class="contianer mt-5">
        <?php 
            if(isset($_SESSION['message']) && $_SESSION['message']!=''){
        ?>
        <div class="alert alert-<?php echo $_SESSION['alert']; ?> col-md-4 m-auto my-2" role="alert">
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php
            }
        ?>
        <div class="text-center">
            <a href="create.php" class= "btn btn-outline-light"> + create a new post </a>
        </div>
    </div>

<?php include("inc/footer.php") ?>
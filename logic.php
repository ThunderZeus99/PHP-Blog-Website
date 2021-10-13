<?php session_start();
   require("config.php");
    $_SESSION['message']=array();
    $_SESSION['alert']='success';
    if(!empty($_POST)){
       
        $title=mysqli_escape_string($conn,$_POST['title']);
        $content=mysqli_escape_string($conn,$_POST['content']);
      
        $query=" INSERT INTO blogs (`blog_title`,`blog_content`) VALUES ('$title','$content')";
  
        if(!mysqli_query($conn,$query)){
            $_SESSION['message']='Something Went Wrong';
            $_SESSION['alert']='danger';
        }else{
            $_SESSION['message']='Blog Inserted';
            
        }
        header("location:index.php");
    }

?>

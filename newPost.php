<!doctype html>
<html lang="de">
<head>
<meta charset="utf-8"/>
<?php include ("serverConnect.php"); ?>
<?php include ("importStyles.php"); ?>    
<title>My Blog</title>
   
</head>
    <?php include ("navBar.php"); ?>
  
<body  charset=utf-8>       
<?php
 $title =utf8_decode($_POST["titelID"]);
 $imageID =$_POST["imageID"];
 $postID =utf8_decode($_POST["postID"]); 
 $sql = "INSERT INTO `postIT` (`Title`, `Date`, `Image`, `Post`) VALUES ('$title','". date("Y-m-d")."','$imageID','$postID')";
if ($conn->query($sql) === TRUE) {
     echo "<div class='alert alert-success' role='alert'>";
     echo "This is a success alert—check it out!";
     echo "</div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    $conn->close();
    header( "refresh:1;url=index.php" )
   
?>
</body>
  
<?php include ("footer.php"); ?>
</html>
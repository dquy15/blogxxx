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
    <form action="newPost.php" accept-charset="utf-8" method="post" style='width: 75%;  margin-left:auto; margin-right:auto; margin-top: 20px; margin-bottom: 20px;'>
          <div class="form-group">
          <label for="titleInput">Image URL</label>
          <input type="text" class="form-control" id="imageID" name="imageID" placeholder="Titel">
          </div>
          <div class="form-group">
          <label for="titleInput">Titel</label>
          <input type="text" class="form-control" id="titelID"  name="titelID" placeholder="Titel">
          </div>
         <div class="form-group" accept-charset="ISO-8859-1">
         <label for="exampleFormControlTextarea1">Beitrag</label>
         <textarea class="form-control" id="postID" name="postID" rows="20"></textarea>
         </div>
         <button class="btn btn btn-secondary my-2 my-sm-0">Post</button>
    </form>
</body>
    
<?php include ("footer.php"); ?>
</html>

<html>
 <body>
  <form method="POST" ENCTYPE="multipart/form-data">
   <input type="file" name="file"/><br/>
   <input type="submit" value="Upload file"/>
  </form>
 </body>
</html>

<?php
define("MAX_SIZE_FILE", 1048576);
define("PATH_FILE", "/files/folder_1/");

try{
    
    if(!is_uploaded_file($_FILES['file']['tmp_name']))
        throw new Exception ("Error sending", 101);
    
    if ($_FILES['file']['size'] >= MAX_SIZE_FILE)
        throw new Exception ("Error: Too big file", 102);
    
    //move to save
    
    move_uploaded_file($_FILES['file']['tmp_name'],
                PATH_FILE.$_FILES['file']['name']);
    
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>

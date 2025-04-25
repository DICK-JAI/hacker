<?php
 echo"<pre>";
 print_r($_POST);
 echo"</pre>";
 echo"<hr>";
 echo"<pre>";
 print_r($_FILES);
 echo "</pre>";
 echo"<hr>";
 echo"<pre>";
 echo($_FILES['upload']['error']);
 echo "</pre>";

if($_POST){
    // echo 111;
    $name = $_FILES['upload']['name'];
    $tmp_name = $_FILES['upload']['tmp_name'];

    $ext = substr(strrchr($name,'.'),1);
    $file_name = rand(11111,99999).".".$ext;

    $dir = "upload";
    if(!file_exists($dir)){
        mkdir($dir,0777, true);

    }

    $path = $dir."/".$file_name;
    if(! move_uploaded_file($tmp_name,$path)){
        echo "save error";

    }

    echo"save ok";
    



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name"> <br>
        <input type="file" name="upload"> <br>
        <input type="submit" value="send" name="submit"> <br>
    </form>
</body>
</html>
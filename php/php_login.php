<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>from</h1>
    <form method="post">
        USER-ID:<input type="text" name="id">
        Password:<input type="password" name="passwd">
        <input type="submit" value="OK" name="submit">

    </form>
    <?php
    //$_POST
    //var_dump($_POST);

    /*echo "<pre>";
    print_r($_POST);
    echo "< /pre>"; */

    if(isset($_POST['submit'])){
      $user = isset($_POST['id']) ? $_POST['id'] : null ;
      $psw = isset($_POST['passwd']) ? $_POST['passwd'] : null ;
      function login($user,$psw){
        if($user == "root" || $psw == "root"){
           echo"OK";
        }else{
            echo "ERRO";
        }
        login($user,$psw);

      }
    }
    
    ?>
</body>
</html>
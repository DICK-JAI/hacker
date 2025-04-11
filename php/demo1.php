<!DOCTYPE html>
<html lang="en">
<body>
    <h1>demo php</h1>
    <?php
    echo "hello word!";
    // echo = System.out.print
    /*
    $abx = "abx";  value name need add $
     */
    $x = 5;
    $s = "demo";
    $d = 10.5;
    $txt = "你好";
    echo $txt;
    echo "<br>";
    echo $s.$x;
    echo ++ $x;
    echo $d ++;
    echo -- $x;
    echo $d --;

    // var_dump();
    $x1 = 5;
    $y1 = "5";
    var_dump( $x1 == $y1);

    $x2 = 5;
    if($x2 > 3){
        echo "x > 3";
    }
    if($x2 < 3){
        echo "x < 3";
    }

    if($d < 5){
        echo "d < 5";
    }else{
        echo "d > 5 or = 5";
    }

    // if else test , <60 D, 60-69 C, 70-79 B, >80 A
    $studyA = 80;
if($studyA >= 0 and $studyA <= 100){
    if($studyA < 60){
        echo "D";
    }else if( $studyA < 70){
        echo "C";
    }else if( $studyA < 80){
        echo "B";
    }else{
        echo "A";
    }
}else{
    echo "erro!!";
}




    ?>
</body>
</html>
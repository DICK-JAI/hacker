<?php

//1
$conn = mysql_connect("127.0.0.1","root","Cg54499696");

mysql_set_charset('utf8');
//2
mysql_select_db("xuesheng");
//3
$sql = "select * from emp,bumen where emp.b_id=bumen.b_id";'';
$result = mysql_query($sql);
mysql_fetch_assoc($result);
print_r(mysql_fetch_array($result));

$list = array();
while( $row = mysql_fetch_array($result)){
    $list[] = $row;
}
echo "<pre>";
print_r($list);
echo "</pre>";

//4
mysql_close($conn);

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>crew data</title>
</head>
<body>

<table>
    <tr>
        <td>員工編號</td>
        <td>姓名</td>
        <td>年齡</td>
        <td>性別</td>
        <td>地址</td>
        <td>部門</td>
    </tr>
    <?php foreach($list as $v){ ?>
    <tr>
        <td><?php echo $v['u_id']; ?></td>
        <td><?php echo $v['name']; ?></td>
        <td><?php echo $v['age']; ?></td>
        <td><?php echo $v['sex']==0?"女":"男"; ?></td>
        <td><?php echo $v['address']; ?></td>
        <td><?php echo $v['b_name']; ?></td>
    </tr>
    <?php } ?>

</table>
    
</body>
</html>
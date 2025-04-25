<?php
// 1. 连接数据库
$conn = new mysqli("127.0.0.1", "root", "Cg54499696", "xuesheng");

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 设置字符集
$conn->set_charset("utf8");

// 2. 查询数据
$sql = "SELECT * FROM emp, bumen WHERE emp.b_id = bumen.b_id";
$result = $conn->query($sql);

// 检查是否有结果
$list = array();
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $list[] = $row;
    }
}

// 3. 输出数据
echo "<pre>";
print_r($list);
echo "</pre>";

// 4. 关闭连接
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>crew data</title>
</head>
<body>
    <table>
        <tr>
            <td>员工编号</td>
            <td>姓名</td>
            <td>年龄</td>
            <td>性别</td>
            <td>地址</td>
            <td>部门</td>
        </tr>
        <?php foreach ($list as $v) { ?>
        <tr>
            <td><?php echo $v['u_id']; ?></td>
            <td><?php echo $v['name']; ?></td>
            <td><?php echo $v['age']; ?></td>
            <td><?php echo $v['sex'] == 0 ? "女" : "男"; ?></td>
            <td><?php echo $v['address']; ?></td>
            <td><?php echo $v['b_name']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
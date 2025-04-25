<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
try {
    // 1. 连接数据库
    $dsn = "mysql:host=127.0.0.1;dbname=xuesheng;charset=utf8";
    $username = "root";
    $password = "Cg54499696";

    // 创建 PDO 实例
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 2. 查询数据
    $sql = "SELECT * FROM emp, bumen WHERE emp.b_id = bumen.b_id";
    $stmt = $pdo->query($sql);

    // 获取结果
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 3. 输出数据
    echo "<pre>";
    print_r($list);
    echo "</pre>";
} catch (PDOException $e) {
    die("连接失败: " . $e->getMessage());
}
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
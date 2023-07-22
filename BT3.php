<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bảng khóa học</title>
</head>
<body>
    <h2>Tên khóa học</h2>
    <table border="1">
        <tr>
            <th>Khóa học</th>
        </tr>
        <?php foreach ($arrs as $course): ?>
            <tr>
                <td><?php echo $course; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
</head>
<body>
<h1>Danh sách sinh viên</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Mã SV</th>
        <th>Email</th>
    </tr>

    <?php foreach ($products as $row): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['fullname'] ?></td>
        <td><?= $row['student_code'] ?></td>
        <td><?= $row['email'] ?></td>
    </tr>
    <?php endforeach; ?>

</table>
</body>
</html>
 

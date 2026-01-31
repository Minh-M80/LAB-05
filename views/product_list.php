<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
<h2>Danh sách sinh viên</h2>

<a href="?page=product-add" class="btn btn-primary mb-3">Thêm sinh viên</a>

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Họ tên</th>
    <th>MSSV</th>
    <th>Email</th>
    <th>Hành động</th>
</tr>

<?php foreach ($products as $p): ?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= $p['fullname'] ?></td>
    <td><?= $p['student_code'] ?></td>
    <td><?= $p['email'] ?></td>
    <td>
        <a href="?page=product-detail&id=<?= $p['id'] ?>">Xem</a> |
        <a href="?page=product-edit&id=<?= $p['id'] ?>">Sửa</a> |
        <a href="?page=product-delete&id=<?= $p['id'] ?>"
           onclick="return confirm('Xóa sinh viên này?')">Xóa</a>
    </td>
</tr>
<?php endforeach ?>
</table>
</div>

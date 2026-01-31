<form method="POST"
      action="?page=product-update&id=<?= $product['id'] ?>"
      class="container mt-4">

<input name="fullname" value="<?= $product['fullname'] ?>" class="form-control mb-2">
<input name="student_code" value="<?= $product['student_code'] ?>" class="form-control mb-2">
<input name="email" value="<?= $product['email'] ?>" class="form-control mb-2">

<button class="btn btn-warning">Cập nhật</button>
</form>
 

<!-- updateProcess.php -->
<?php $conn = mysqli_connect('localhost', 'root', '', 'phpProject')?>
<?php
    $sql = "UPDATE notice SET name = '{$_POST['name']}', title = '{$_POST['title']}' WHERE id = {$_POST['id']}";
    $result = mysqli_query($conn, $sql);
?>

<script>
    alert('수정 성공');
    location.href = 'index.php';
</script>
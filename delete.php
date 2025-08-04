<!-- delete.php -->
<?php $conn = mysqli_connect('localhost', 'root', '', 'phpProject')?>
<?php
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "DELETE FROM notice WHERE id = $id";
    $result = mysqli_query($conn, $sql);
?>

<script>
    alert('삭제 성공')
    location.href = 'index.php'
</script>
<?php $conn = mysqli_connect('localhost', 'root', '', 'phpProject')?>
<?php
    $sql = "INSERT INTO notice (name, title) VALUES ('{$_POST['name']}', '{$_POST['title']}')";
    mysqli_query($conn, $sql);
?>

<script>
    alert('게시글이 작성되었습니다.')
    location.href = 'index.php'
</script>
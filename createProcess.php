<?php $conn = mysqli_connect('localhost', 'root', '', 'notice')?>
<?php
    $sql = "INSERT INTO notice (name, title) VALUE('{$_POST['name']}', '{$_POST['title']}')";
    mysqli_query($conn, $sql);
?>

<script>
    alert('컬럼이 생성되었습니다.')
    location.href = 'main.php'
</script>
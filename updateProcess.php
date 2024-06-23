<?php $conn = mysqli_connect('localhost', 'root', '', 'notice')?>
<?php
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);

    $sql = "UPDATE notice SET name = '$name', title = '$title' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
?>

<script>
    alert('업데이트 성공');
    location.href = 'main.php';
</script>
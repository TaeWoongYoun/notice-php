<?php $conn = mysqli_connect('localhost', 'root', '', 'notice')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Title</th>
            <th>Date</th>
        </tr>
        <?php
            $id = isset($_GET['id']) ? $_GET['id'] : null;

            if ($id) {
                $sql = "SELECT * FROM notice WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
            }
        ?>

        <tr>
            <form action="updateProcess.php" method="post">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <td><?= $row['id']?></td>
                <td><input type="text" name="name" value="<?= $row['name'] ?>"></td>
                <td><input type="text" name="title" value="<?= $row['title'] ?>"></td>
                <td><p>자동완성</p></td>
                <td><input type="submit" value="submit"></td>
            </form>
        </tr>
    </table>
    <script src="index.js"></script>
</body>
</html>
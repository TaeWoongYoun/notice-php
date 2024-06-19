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
            $sql = "SELECT * FROM notice";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['date']}</td>
                    <td><a href='update.php?id={$row['id']}'><button>UPDATE</butoon></a></td>
                </tr>";
            }
        ?>
        <tr>
            <td colspan='5'><a href='create.php'><button>CREATE</button></a></td>
        </tr>
    </table>
    <script src="index.js"></script>
</body>
</html>
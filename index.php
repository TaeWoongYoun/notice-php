<!-- index.php -->
<?php $conn = mysqli_connect('localhost', 'root', '', 'phpProject')?>

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
            <th>Update</th>
            <th>Delete</th>  <!-- 새로운 컬럼 추가 -->
        </tr>
        <?php
            $sql = "SELECT * FROM notice";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['title']}</td>";
                echo "<td>{$row['date']}</td>";
                echo "<td><a href='update.php?id={$row['id']}'><button>UPDATE</button></a></td>";
                echo "<form action='delete.php' method='post'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                        <td><input type='submit' value='DELETE'></td>
                    </form>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td colspan='6'><a href='create.php'><button>CREATE</button></a></td>  <!-- colspan 값 변경 -->
        </tr>
    </table>
</body>
</html>
    
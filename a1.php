<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>
        MySQL DATA
    </h1>
    <a href="select.php">create</a>
    <?php
        $conn = mysqli_connect('localhost',"root","sk2590","musinsa");
        $sql = "SELECT * FROM 반팔티셔츠";
        $result = mysqli_query($conn, $sql);
        echo "<br/>MySQL LOAD RESULT <br/>";
        while($row = mysqli_fetch_array($result)) {
            echo "순위 : ".$row["반팔티셔츠"]."/ 이름 : ".$row["브랜드"]." / 상품명 :".$row['상품명']." / 가격(할인가): ".$row['가격(할인가)']."<br/>";
        }
        mysqli_close($conn);
    ?>
</body>
</html>
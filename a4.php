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
        $conn = mysqli_connect('localhost',"root","sk7332590","musinsa");
        $sql = "SELECT * FROM 맨투맨스웨트셔츠";
        $result = mysqli_query($conn, $sql);
        echo "<br/>MySQL LOAD RESULT <br/>";
        while($row = mysqli_fetch_array($result)) {
            echo "순위 : ".$row["맨투맨/스웨트셔츠"]."/ 이름 : ".$row["브랜드"]." / 상품명 :".$row['상품명']." / 가격(할인가): ".$row['가격(할인가)']."<br/>";
        }
        mysqli_close($conn);
    ?>
</body>
</html>
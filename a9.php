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
        $sql = "SELECT * FROM 기타상의";
        $result = mysqli_query($conn, $sql);
        echo "<br/>MySQL LOAD RESULT <br/>";
        while($row = mysqli_fetch_array($result)) {
            echo "순위 : ".$row["기타상의"]."/ 이름 : ".$row["브랜드"]." / 상품명 :".$row['상품명']." / 가격(할인가): ".$row['가격(할인가)']."<br/>";
            $price = $row['가격(할인가)'];
			$name = $row['상품명'];
			$brand = $row["브랜드"];
			echo "<tr>";
			echo "<td> $price </td>";
			echo "<td> $name </td>";
			echo "<td> $brand </td>";
			echo "</tr>";}

        mysqli_close($conn);
    ?>
</body>
</html>
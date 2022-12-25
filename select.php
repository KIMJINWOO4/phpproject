<?php
        $conn = mysqli_connect($mysql_host,"root","sk2590","musinsa");
        $sql = "SELECT * FROM 니트/스웨터";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result))
        {   echo <'h1'>.$row['니트/스웨터'].$row['브랜드'].$row['상품명'].$row['가격(할인가)'].'</h1>';}

?>

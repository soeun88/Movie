<?php
    echo "<h3> Mysql_connect 함수 사용 </h3>";
    $conn = mysqli_connect("localhost", "root", "1234", "db_test");

    if($conn){
        echo "DB connect 성공입니다. <br><br>";
        var_dump($conn);
    }
    mysqli_close($conn);

?>

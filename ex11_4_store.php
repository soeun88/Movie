<?php
    echo "<script>document.location.replace('ex11_4_print.php')</script>";
    $connect = mysqli_connect("localhost", "root", "1234", "db_test");
                
    $pwd = md5($_POST['passwd']);
    $pwd_conf = $_POST['passwd_confirm'];

    $sql = "insert into ex11_4 values";
    $sql = $sql."('', '{$_POST['id']}', '{$_POST['name']}',";
    $sql = $sql."'{$pwd}', '{$pwd_conf}',";
    $sql = $sql."'{$_POST['gender']}',";
    $sql = $sql."'{$_POST['address']}')";

    $result = mysqli_query($connect, $sql);

    if(!$result){
        echo("레코드 삽입 실패!");
        exit;
    }
    else{
        echo("레코드 삽입 성공!");
    }
    mysqli_close($connect);
?>
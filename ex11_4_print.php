<?php
    $connect = mysqli_connect("localhost", "root", "1234", "db_test");

    $sql = "select * from ex11_4";
    $result = mysqli_query($connect, $sql);

    $fields = mysqli_num_fields($result);
?>

<table width=800 border=1 cellpadding=10>
    <tr>
        <td bgcolor=lightblue align=center>Num</td>
        <td bgcolor=lightblue align=center>아이디</td>
        <td bgcolor=lightblue align=center>이름</td>
        <td bgcolor=lightblue align=center>비밀번호</td>
        <td bgcolor=lightblue align=center>비밀번호 확인</td>
        <td bgcolor=lightblue align=center>성별</td>
        <td bgcolor=lightblue align=center>주소</td>
    </tr>
    <?php
        while($row=mysqli_fetch_row($result)){
            echo("<tr>");
            for($i=0; $i < $fields; $i++){
                echo("<td> $row[$i] </td>");
            }
            echo("</tr>");
        }
        mysqli_close($connect);
    ?>
</table>

<html>
    <body>
        <?php
            $connect = mysqli_connect("localhost", "root", "1234", "db_test");
            $sql = "select * from mem;";
            $result = mysqli_query($connect, $sql);
            $fields = mysqli_num_fields($result);
        ?>

        <h3> mysqli_fetch_row() 함수 예제 </h3>

        <table width = 800 border = 1 cellpadding = 10>
            <tr>
                <td bgcolor = lightblue align = center>번호</td>
                <td bgcolor = lightblue align = center>아이디</td>
                <td bgcolor = lightblue align = center>이름</td>
                <td bgcolor = lightblue align = center>성별</td>
                <td bgcolor = lightblue align = center>우편번호</td>
                <td bgcolor = lightblue align = center>주소</td>
                <td bgcolor = lightblue align = center>전화번호</td>
                <td bgcolor = lightblue align = center>나이</td>
            </tr>

            <?php
                while($row = mysqli_fetch_row($result)){
                    echo ("<tr>");
                    for($i = 0; $i < $fields; $i++){
                        echo("<td> $row[$i] </td>");
                    }
                    echo("</tr>");
                }
                mysqli_close($connect);
            ?>
        </table>
    </body>
</html>
<?php
        $kor = 80;
        $eng = 70;
        $math = 90;

        $name = "홍길동";

        $sum = $kor + $eng + $math;
        $avg = $sum/3;

        echo "<table width = 500 border = 1 bordercolor = gray>";

        echo "<tr><td colspan = 2 align = center bgcolor = yellow>".$name."의 점수</td></tr>";

        echo "<tr align = center><td>국어</td><td>".$kor."</td></tr>";

        echo "<tr align = center><td>영어</td><td>".$eng."</td></tr>";

        echo "<tr align = center><td>수학</td><td>".$math."</td></tr>";

        echo "<tr align = center bgcolor = skyblue><td>총점</td><td>".$sum."</td></tr>";

        echo "<tr align = center bgcolor = skyblue><td>평균</td><td>".$avg."</td></tr>";

        echo "</table>";

?>
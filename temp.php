<?php   
    echo "--------------------------------------<br>";
    echo "&nbsp;&nbsp;온도설정<br>";
    echo "--------------------------------------<br>";
    echo "
      <table border = '1'>
        <tr>
            <td width = '120' align = center>섭씨</td>
            <td width = '120' align = center>화씨</td>
        </tr>
    ";
    
    for($f = -15; $f <= 35; $f += 5){
        $c = round(($f *9/5) + 32);
        echo "<tr> <td  align = center> $f </td> <td align = center> $c </td></tr>";
    }
    echo "</table>";



?>
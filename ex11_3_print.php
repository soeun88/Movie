<?php 
    echo '아이디 : '.$_POST['id'].'<br>';
    echo '이름 : '.$_POST['name'].'<br>';
    echo '비밀번호 : '.$_POST['passwd'].'<br>';
    echo '비밀번호 확인 : '.md5($_POST['passwd_confirm']).'<br>';
    echo '성별 : '.$_POST['gender'].'<br>';
    echo '주소 : '.$_POST['address'].'<br>';
    echo '제목(hidden 타입에서 전달) : '.$_POST['title'].'<br>';
?>
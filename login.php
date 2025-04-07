<?php
session_start();

// 데이터베이스 연결 정보
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie2";

// 로그인 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_username = $_POST["login_username"];
    $login_password = $_POST["login_password"];

    // 데이터베이스 연결
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 연결 확인
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // 입력된 정보와 일치하는 회원 정보 조회
    $sql = "SELECT * FROM 회원 WHERE 회원아이디 = '$login_username' AND 비밀번호 = '$login_password'";
    $result = $conn->query($sql);

    // 일치하는 회원이 있는지 확인
    if ($result->num_rows > 0) {
        // 로그인 성공
        $_SESSION["username"] = $login_username;
        header("Location: welcome.php");  // 로그인 성공 시 이동할 페이지
        exit();
    } else {
        // 로그인 실패
        echo "Invalid username or password.";
    }

    // 데이터베이스 연결 종료
    $conn->close();
}
?>

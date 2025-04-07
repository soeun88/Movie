<?php
// 데이터베이스 연결 정보
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie2";

// 회원가입 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $signup_username = $_POST["signup_username"];
    $signup_password = $_POST["signup_password"];
    $signup_name = $_POST["signup_name"];
    $signup_phone = $_POST["signup_phone"];

    // 데이터베이스 연결
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 연결 확인
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL 쿼리 작성 및 실행
    $sql = "INSERT INTO 회원 (회원ID, 비밀번호, 이름, 전화번호) VALUES ('$signup_username', '$signup_password', '$signup_name', '$signup_phone')";

    if ($conn->query($sql) === TRUE) {
        echo "회원가입이 완료되었습니다.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // 데이터베이스 연결 종료
    $conn->close();
}
?>

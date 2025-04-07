<?php
// 데이터베이스 연결 정보
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie2";

// 예매 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movie_id = $_POST["movie_id"];
    $seat = $_POST["seat"];
    $member_id = $_POST["member_id"];

    // 데이터베이스 연결
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 연결 확인
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
// 랜덤한 티켓코드 생성 (예: 8자리 랜덤 문자열)
$ticket_code = bin2hex(random_bytes(4));

// 현재 일자를 예매일자로 사용
$reservation_date = date("Y-m-d H:i:s");

// 티켓 정보를 데이터베이스에 저장
$ticket_sql = "INSERT INTO 티켓 (티켓코드, 좌석, 영화번호) VALUES ('$ticket_code', '$seat', '$movie_id')";
if ($conn->query($ticket_sql) === TRUE) {
    // 티켓이 성공적으로 저장되면 예매 정보를 저장
    $reservation_sql = "INSERT INTO 예매 (회원ID, 티켓코드, 예매영화, 예매일자) VALUES ('$member_id', '$ticket_code', '$movie_id', '$reservation_date')";

    if ($conn->query($reservation_sql) === TRUE) {
        echo "예매가 완료되었습니다. <br>";
        echo "티켓 정보: <br>";
        echo "티켓 코드: " . $ticket_code . "<br>";
        echo "좌석: " . $seat . "<br>";
        echo "영화번호: " . $movie_id . "<br>";
        echo "예매일자: " . $reservation_date . "<br>";
    } else {
        echo "Error: " . $reservation_sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $ticket_sql . "<br>" . $conn->error;
}

// 데이터베이스 연결 종료
$conn->close();
}
?>
<?php
// 데이터베이스 연결 정보
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie2";

// 데이터베이스 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL 쿼리 작성 및 실행
$sql = "SELECT * FROM 영화";
$result = $conn->query($sql);

// 영화 목록 출력
if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "영화번호: " . $row["영화번호"] . "<br>";
        echo "영화제목: " . $row["영화제목"] . "<br>";
        echo "상영시간: " . $row["상영시간"] . "<br>";
        echo "상영관: " . $row["상영관"] . "<br>";
        echo "<br>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "영화 정보가 없습니다.";
}

// 데이터베이스 연결 종료
$conn->close();
?>
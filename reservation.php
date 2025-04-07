<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Reservation</title>
</head>
<body>
    <h2>Movie Reservation</h2>
    <?php include 'get_movies.php'; ?>
    <form action="reserve.php" method="post">
        <label for="movie_id">Select a movie (영화 선택):</label>
        <input type="text" id="movie_id" name="movie_id" required><br>

        <label for="seat">Select a seat (좌석 선택):</label>
        <input type="text" id="seat" name="seat" required><br>

        <label for="member_id">Enter your member ID (회원 ID 입력):</label>
        <input type="text" id="member_id" name="member_id" required><br>

        <input type="submit" value="Reserve">
    </form>
</body>
</html>
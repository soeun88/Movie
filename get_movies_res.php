<?php
// Your database connection code here

// SQL query to fetch movies
$sql = "SELECT * FROM 영화";
$result = $conn->query($sql);

// Display movie options
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["영화번호"] . "'>" . $row["영화번호"] . ": " . $row["영화제목"] . "</option>";
    }
} else {
    echo "<option value=''>No movies available</option>";
}

// Close the database connection
$conn->close();
?>
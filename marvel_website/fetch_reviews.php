<?php
$conn=mysqli_connect('127.0.0.1:3308','root','','marble_db');



// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the table
$sql = "SELECT `s.no.`, `name`, `review`, `message` FROM `review_table`";

// Execute the query
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class='container review-block'>";
        echo "<div class='row'>";
        echo "<div class='col-md-6'>";
        echo "<div class='review-box'>";
        echo "<div class='review-content'>";
        echo "<p class='review-text'> " . $row["review"] . "</h4>";
        echo "<p class='review-author'> " . $row["name"] . "</p>";
        // echo "<p>Review: " . $row["review"] . "</p>";
        // echo "<p>Message: " . $row["message"] . "</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "";
}

// Close the database connection
$conn->close();
?>

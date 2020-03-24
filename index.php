<?php
include 'dbh.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="<script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    //jQuery code here
    //jQuery code here
    </script>
</head>

<body>
    <div id="comments">
        <?php

    $sql = "SELECT * FROM comments LIMIT 2";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo "<p style=\"font-weight: 600;\">";
            echo $row['author'];
            echo "</p>";
            echo "<p>";
            echo "<br>";
            echo $row['message'];
            echo "</p>";
        }

    } else {
        echo "There are no comments.";
    }
    ?>
    </div>


    <button>Show More Comments</button>

</body>

</html>
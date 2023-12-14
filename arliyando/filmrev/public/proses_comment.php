<?php
if (isset($_POST['submit_review'])) {
    $conn = mysqli_connect("127.0.0.1", "root", "", "db_film");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_POST['Username'];
    $ulasanText = $_POST['Ulasan_Text'];

    $sql = "INSERT INTO ulasan (Username, Ulasan_Text) VALUES ('$username', '$ulasanText')";

    if (mysqli_query($conn, $sql)) {
        header("Location: about.php"); // Redirect back to about.php after submitting the form
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

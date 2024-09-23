<?php
$host = 'localhost'; // Your database host
$db = 'hotel'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $room_type = $_POST['room_type'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $guests = $_POST['guests'];

    // Simple insert query
    $sql = "INSERT INTO bookings (name, email, room_type, check_in, check_out, guests) 
            VALUES ('$name', '$email', '$room_type', '$check_in', '$check_out', '$guests')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to confirmation page
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>

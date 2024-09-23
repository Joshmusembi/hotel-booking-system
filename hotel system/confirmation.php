<?php
// Include database connection
require 'db.php';

// Fetch the last booking
$result = mysqli_query($conn, "SELECT * FROM bookings ORDER BY created_at DESC LIMIT 1");
$booking = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="confirmation.css">
    <title>Booking Confirmation</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
            <a href="booking.php" class="book-now">Book Now</a>
        </nav>
    </header>

    <main>
        <section class="confirmation">
            <h1>Booking Confirmation</h1>
            <p>Thank you for your booking, <strong><?php echo htmlspecialchars($booking['name']); ?></strong>!</p>
            <p>Room Type: <strong><?php echo htmlspecialchars($booking['room_type']); ?></strong></p>
            <p>Check-in: <strong><?php echo htmlspecialchars($booking['check_in']); ?></strong></p>
            <p>Check-out: <strong><?php echo htmlspecialchars($booking['check_out']); ?></strong></p>
            <p>Number of Guests: <strong><?php echo htmlspecialchars($booking['guests']); ?></strong></p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Hotel Booking System. All rights reserved.</p>
    </footer>
</body>
</html>

<?php
// Close the connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hotel.css">
    <title>Hotel Booking</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <div class="search-container">
                <input type="text" placeholder="Search...">
                <button type="submit"><img src="search-icon.png" alt="Search" /></button>
            </div>
            <a href="booking.php" class="book-now">Book Now</a>
        </nav>
    </header>
    
    <main>
        <h1>Welcome to Our Hotel Booking System</h1>
        <p>Your perfect stay awaits!</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Hotel Booking System. All rights reserved.</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking.css">
    <title>Book Your Stay</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
            <div class="search-container">
                <input type="text" placeholder="Search...">
                <button type="submit"><img src="search-icon.png" alt="Search" /></button>
            </div>
            <a href="booking.php" class="book-now">Book Now</a>
        </nav>
    </header>

    <main>
        <section class="booking-intro">
            <h1>Book Your Stay</h1>
            <p>Fill in the form below to reserve your room and enjoy a memorable stay with us.</p>
        </section>

        <section class="booking-form">
            <form action="confirmation.php" method="post">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="room-type">Room Type:</label>
                <select id="room-type" name="room_type" required>
                    <option value="deluxe">Deluxe Room</option>
                    <option value="superior">Superior Room</option>
                    <option value="standard">Standard Room</option>
                    <option value="family">Family Room</option>
                    <option value="premium">Premium Suite</option>
                    <option value="executive">Executive Room</option>
                </select>

                <label for="check-in">Check-in Date:</label>
                <input type="date" id="check-in" name="check_in" required>

                <label for="check-out">Check-out Date:</label>
                <input type="date" id="check-out" name="check_out" required>

                <label for="guests">Number of Guests:</label>
                <input type="number" id="guests" name="guests" min="1" max="10" required>

                <input type="submit" value="Confirm Booking" class="cta-button">
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Hotel Booking System. All rights reserved.</p>
    </footer>
</body>
</html>

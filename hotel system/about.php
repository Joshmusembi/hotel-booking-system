<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    <title>About Us</title>
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
        <section class="hero">
            <h1>About Us</h1>
            <p>Your comfort is our priority</p>
        </section>

        <section class="about-section">
            <h2>Welcome to Our Hotel</h2>
            <img src="download (5).jpeg" alt="Hotel Lobby" class="about-image"> <!-- Add your image -->
            <p>Our hotel offers a blend of luxury and comfort, providing an unforgettable experience for every guest. With state-of-the-art amenities and exceptional service, we ensure that your stay with us will be memorable.</p>

            <h2>Our History</h2>
            <img src="download (6).jpeg" alt="History" class="about-image">
            <p>Founded in [Year], our hotel has been a cornerstone of hospitality in [Location]. Over the years, we have welcomed guests from all over the world, offering a unique blend of local culture and modern amenities.</p>

            <h2>Our Values</h2>
            <ul>
                <li>Guest Satisfaction: Your happiness is our priority.</li>
                <li>Integrity: We operate with honesty and transparency.</li>
                <li>Community: We strive to give back to our local community.</li>
                <li>Sustainability: We are committed to environmentally friendly practices.</li>
            </ul>

            <h2>Join Us</h2>
            <p>We invite you to experience our hospitality. Whether you are traveling for business or leisure, our team is dedicated to making your stay exceptional.</p>
            <a href="booking.php" class="cta-button">Book Your Stay Now</a>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Hotel Booking System. All rights reserved.</p>
    </footer>
</body>
</html>

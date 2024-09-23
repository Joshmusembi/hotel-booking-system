<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>News</title>
</head>
<body>
 ]    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
            <a href="booking.php" class="book-now">Book Now</a>
        </nav>
    </header>

    <main>
        <section class="news">
            <h1>Latest News</h1>
            <article>
                <h2>New Year Special Offers!</h2>
                <p>Enjoy a 20% discount on all room bookings for the month of January. Book now to secure your stay!</p>
            </article>
            <article>
                <h2>Renovation Announcement</h2>
                <p>We are excited to announce that our hotel will be undergoing renovations to enhance your stay. Thank you for your patience during this time!</p>
            </article>
            <article>
                <h2>COVID-19 Safety Measures</h2>
                <p>Your safety is our priority. We are implementing enhanced cleaning protocols and social distancing measures for a safe stay.</p>
            </article>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Hotel Booking System. All rights reserved.</p>
    </footer>
</body>
</html>

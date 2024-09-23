<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Hotel Management</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<header>
<header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <a href="booking.php" class="book-now">Book Now</a>
        </nav>
    </header>

<section class="hero">
    <h1>We'd Love to Hear From You!</h1>
</section>

<section class="contact">
    <h2>Contact Information</h2>
    <p><strong>Address:</strong> 123 Hotel Lane, City, Country</p>
    <p><strong>Phone:</strong> <a href="tel:+1234567890">+1 (234) 567-890</a></p>
    <p><strong>Email:</strong> <a href="mailto:info@hotel.com">info@hotel.com</a></p>
    <div class="social-media">
        <a href="#">Facebook</a>
        <a href="#">Instagram</a>
        <a href="#">Twitter</a>
    </div>
</section>

<section class="contact-form">
    <h2>Send Us a Message</h2>
    <form action="/submit-form" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="tel" name="phone" placeholder="Your Phone (optional)">
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</section>

<section class="map">
    <h2>Find Us Here</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<footer>
    <p>&copy; 2024 Hotel Management. All rights reserved.</p>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms of Service</a>
</footer>

</body>
</html>

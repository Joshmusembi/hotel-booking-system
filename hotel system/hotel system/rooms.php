<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="room.css">
    <title>Our Rooms</title>
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
            <div class="search-container">
                <input type="text" placeholder="Search...">
                <button type="submit"><img src="search-icon.png" alt="Search" /></button>
            </div>
            <a href="booking.php" class="book-now">Book Now</a>
        </nav>
    </header>

    <main>
    <section class="hero">
            <h1>Our Rooms</h1>
            <p>Comfort and luxury await you</p>
        </section>

        <section class="intro">
            <h2>Experience Our Prestigious Rooms</h2>
            <p>At our hotel, we take pride in offering a selection of prestigious rooms designed to provide the ultimate in comfort and luxury. Each room is thoughtfully decorated with exquisite furnishings, modern amenities, and stunning views, ensuring that your stay is both relaxing and memorable. Whether you're traveling for business or pleasure, our accommodations are tailored to meet your every need.</p>
        </section>
        <section class="hero">
            <h1>Our Rooms</h1>
            <p>Comfort and luxury await you</p>
        </section>

        <section class="rooms-section">
            <div class="room">
                <img src="download (3).jpeg" alt="Deluxe Room" class="room-image">
                <h2>Deluxe Room</h2>
                <p>A spacious room with luxurious amenities, perfect for relaxation.</p>
                <p><strong>Price: $200/night</strong></p>
                <a href="booking.php" class="cta-button">Book Now</a>
            </div>

            <div class="room">
                <img src="download (4).jpeg" alt="Superior Room" class="room-image">
                <h2>Superior Room</h2>
                <p>Experience comfort with modern decor and a stunning view.</p>
                <p><strong>Price: $150/night</strong></p>
                <a href="booking.php" class="cta-button">Book Now</a>
            </div>

            <div class="room">
                <img src="download (1).jpeg" alt="Standard Room" class="room-image">
                <h2>Standard Room</h2>
                <p>A cozy room equipped with essential amenities for a comfortable stay.</p>
                <p><strong>Price: $100/night</strong></p>
                <a href="booking.php" class="cta-button">Book Now</a>
            </div>

            <div class="room">
                <img src="download (2).jpeg" alt="Family Room" class="room-image">
                <h2>Family Room</h2>
                <p>Perfect for families, this room offers space and comfort for everyone.</p>
                <p><strong>Price: $250/night</strong></p>
                <a href="booking.php" class="cta-button">Book Now</a>
            </div>

            <div class="room">
                <img src="images (2).jpeg" alt="Premium Suite" class="room-image">
                <h2>Premium Suite</h2>
                <p>Luxury living with a separate lounge area and exquisite decor.</p>
                <p><strong>Price: $350/night</strong></p>
                <a href="booking.php" class="cta-button">Book Now</a>
            </div>

            <div class="room">
                <img src="images (1).jpeg" alt="Executive Room" class="room-image">
                <h2>Executive Room</h2>
                <p>Ideal for business travelers, equipped with a workspace and amenities.</p>
                <p><strong>Price: $180/night</strong></p>
                <a href="booking.php" class="cta-button">Book Now</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Hotel Booking System. All rights reserved.</p>
    </footer>
</body>
</html>

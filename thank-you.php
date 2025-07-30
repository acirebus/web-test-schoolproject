<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Mystia's Izakaya</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar">
            <a href="home.html" class="logo"><img src="https://cdn.builder.io/api/v1/image/assets/e64a5e03458d49e8a674c2d1b43e24e2/df2fa2306b9437d03b536dfa9e1a1d053a4ffe4186f1b20745fe0815e4521b34?apiKey=e64a5e03458d49e8a674c2d1b43e24e2&" alt="Logo"></a>
            <ul class="nav-links">
                <li><a href="home.html" class="nav-link">Home</a></li>
                <li><a href="othergames.html" class="nav-link">Other Games</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
            </ul>
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- Thank You Section -->
    <section class="ty">
        <div class="ty-content">
            <h1>Thank You!</h1>
            <p>Your message has been successfully sent. We will get back to you soon!</p><br>
            <img src="masak.gif" alt="Thank You" style="width:100%; border-radius:8px;">
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <h2>Explore</h2>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="othergames.html">Other Games</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </footer>

    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('show');
        }
    </script>
</body>
</html>

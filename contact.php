<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost"; 
    $username = "root";
    $password = ""; 
    $dbname = "thing";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Ambil data dari form
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Query untuk menyimpan data
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman terima kasih
        header("Location: thank-you.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystia's Izakaya</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <!-- Header / Navigation -->
    <header>
        <nav class="navbar">
            <a href="home.html" class="logo"><img src="https://cdn.builder.io/api/v1/image/assets/e64a5e03458d49e8a674c2d1b43e24e2/df2fa2306b9437d03b536dfa9e1a1d053a4ffe4186f1b20745fe0815e4521b34?apiKey=e64a5e03458d49e8a674c2d1b43e24e2&" alt="Logo" /></a>
            <ul class="nav-links">
                <li><a href="home.html" class="nav-link">Home</a></li>
                <li><a href="othergames.html" class="nav-link">Other Games</a></li>
                <li><a href="about.html" class="nav-link ">About Us</a></li>
                <li><a href="contact.php" class="nav-link active">Contact</a></li>
            </ul>
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>
    
<!-- Contact Us Section -->
<section class="contact">
    <div class="contact-content">
        <h1>Contact Us</h1>
        <p>Let us know if you need anything!</p>
        <form action="#" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name">
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email">
            
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Your Message"></textarea>
            
            <button type="submit">Submit</button>
        </form>
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

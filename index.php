<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paulo Jimenez | IT Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Paulo Ronquillo Jimenez</h1>
            <p class="tagline">BSIT Student Assumption College of Davao</p>
            <p class="location">Agdao, Davao City</p>
        </header>

        <main>
            <section class="card">
                <h2>About Me</h2>
                <p>I am a 2nd-year IT student specializing in frontend development and graphic design. Aside from coding, I am an active basketball player and a community sports organizer.</p>
            </section>

            <section class="card">
                <h2>Projects & Achievements</h2>
                <ul>
                    <li><strong>Elite Hoops Cup 2026:</strong> Tournament Organizer & Graphic Designer.</li>
                    <li><strong>Platform Audit & Proposal:</strong> Technical research project completed in April 2026.</li>
                    <li><strong>Web Portfolio:</strong> Developed using HTML, CSS, and PHP with MySQL integration.</li>
                </ul>
            </section>

            <section class="card">
                <h2>Contact Me</h2>
                <form action="submit.php" method="POST" class="contact-form">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <textarea name="message" placeholder="Write your message here..." required></textarea>
                    <button type="submit" class="btn-primary">Send Message</button>
                </form>
            </section>
        </main>

        <footer>
            <p>&copy; 2026 Paulo Jimenez. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
<?php include 'header.php'; ?>

<main>
    <h2>Contact Us</h2>
    <p>Have questions? Feel free to reach out to us!</p>

    <form action="process_contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
        
        <button type="submit">Send Message</button>
    </form>
</main>

<?php include 'footer.php'; ?>

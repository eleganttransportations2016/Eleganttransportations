<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Transportations - Green Theme</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #7cb06d;
            color: #333;
        }
        header {
            background-color: #1e7f42;
            color: #FFFFFF;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-align: center;
            text-decoration: none;
            float: left;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        section {
            padding: 20px;
            margin: 20px;
        }
        footer {
            background-color: #1e7f42;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            max-width: 600px;
            margin: 0 auto;
        }
        input[type="text"], input[type="email"], input[type="date"], select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #1e7f42;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #155e33;
        }
        .success-message {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin-top: 20px;
            text-align: center;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<header>
    <div style="display: flex; align-items: center; justify-content: center;">
        <!-- Logo on the left of the text -->
        <img src="logo_image.jpg" alt="Elegant Transportations Logo" style="width: 80px; height: auto; margin-right: 10px;">
        
        <!-- Title and tagline -->
        <div>
            <h1>Elegant Transportations</h1>
            <p>MILLIONS OF MILE - MILLIONS OF SMILE</p>
        </div>
    </div>
</header>



    <nav>
        <a href="#about">About</a>
        <a href="#booking">Booking</a>
        <a href="#services">Services</a>
        <a href="#drivers">Our Drivers</a>
        <a href="#staff">Our Staff</a>
        <a href="#clients">Our Major Clients</a>
        <a href="#testimonials">Testimonials</a>
        <a href="#faq">FAQ</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- About Section -->
    <!-- About Section -->
    <section id="about">
        <h2>About Us</h2>
        <p>Elegant Transportations was established 7 years ago by name as a traditional staff transport company
        providing reliable, safe and sound transport services in Chennai. Since its establishment in 2016. We
        had started this business with a one own vehicle and we have grown considerably to 14 vehicles over a
        period of seven years and intend on growing from strength to strength in order to service our wide client
        base.</p>
    </section>

    <!-- Booking Section -->
    <section id="booking">
        <h2>Book Your Stay</h2>
        <div class="form-container">
            <form id="bookingForm" method="POST" action="start.php" onsubmit="submitForm(event)">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" required>

                <label for="destination">Destination</label>
                <input type="text" id="destination" name="destination" required>

                <label for="checkin">Check-In Date</label>
                <input type="date" id="checkin" name="checkin" required>

                <label for="checkout">Check-Out Date</label>
                <input type="date" id="checkout" name="checkout" required>

                <label for="transport">Preferred Transport</label>
                <select id="transport" name="transport" required>
                    <option value="car">Car</option>
                    <option value="bus">Bus</option>
                </select>

                <label for="message">Special Requests</label>
                <textarea id="message" name="message" rows="4" placeholder="Any special requests or details"></textarea>

                <button type="submit">Submit Booking</button>
            </form>
            <div id="successMessage" class="success-message" style="display:none;">Successfully Submitted!</div>
        </div>
    </section>

   
    <!-- Services Section -->
    <section id="services">
        <h2>Our Services</h2>
        <p>We offer a comprehensive range of transport-related services to ensure that every aspect of your journey is covered:</p>
        <ul>
            <li><strong>Staff Transportation:</strong> Reliable and safe transportation services for employees to and from work.</li>
            <li><strong>Goods Transfer Transportation:</strong> Efficient and secure transport for goods and products across various industries.</li>
        </ul>
    </section>

    <!-- Our Drivers Section -->
    <section id="drivers">
        <h2>Our Drivers</h2>
        <p>At Elegant Transportations, we take pride in our professional and reliable drivers. All our drivers undergo an intensive screening process based on the following criteria:</p>
        <ul>
            <li><strong>Valid Driver's License:</strong> All drivers must hold a valid driver’s license.</li>
            <li><strong>Badge/Heavy License:</strong> Drivers must also possess a badge or heavy vehicle license as required.</li>
        </ul>
    </section>

    <!-- Our Staff Section -->
    <section id="staff">
        <h2>Our Staff</h2>
        <p>Our team is dedicated to providing excellent service. We have appointed an Operations Manager to ensure smooth business operations. Our staff members meet the following criteria:</p>
        <ul>
            <li><strong>Valid ID Document:</strong> All staff must provide a valid identification document.</li>
            <li><strong>Minimum Education Qualification:</strong> Staff must have at least SSLC as their minimum educational qualification.</li>
            <li><strong>Proven Previous Experience:</strong> Staff must have a proven track record with references from previous employers.</li>
        </ul>
    </section>

    <!-- Our Major Clients Section -->
    <section id="clients">
        <h2>Our Major Clients</h2>
        <p>Elegant Transportations has been trusted by several major companies in the production and medical industries. Some of our valued clients include:</p>
        <ul>
            <li>Vivimed</li>
            <li>Strides</li>
            <li>Arcolob</li>
            <li>Takata</li>
            <li>PAR (Pharmaceutical)</li>
            <li>Axxelent</li>
            <li>Boldrocchi Vehicles</li>
        </ul>
        <p>We provide all latest model vehicles and shuttle services based on company requirements, ensuring all vehicles meet government safety and document norms, including insurance and tax papers.</p>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials">
        <h2>What Our Clients Say</h2>
        <blockquote>
            <p>"Elegant Booking made our vacation stress-free. everything was arranged perfectly. I highly recommend their services!"</p>
            <footer>- Johnson</footer>
        </blockquote>
        <blockquote>
            <p>"A seamless booking experience! The team was incredibly helpful and made sure everything went smoothly. Thank you, Elegant Transportations!"</p>
            <footer>- Ravi</footer>
        </blockquote>
    </section>

    <!-- FAQ Section -->
    <section id="faq">
        <h2>Frequently Asked Questions</h2>
        <h3>How can I make a booking?</h3>
        <p>You can make a booking by filling out the booking form on our website. Once submitted, our team will process your request and confirm your booking.</p>

        <h3>What payment methods do you accept?</h3>
        <p>We accept all major credit cards, debit cards, and online payment methods such as PayPal.</p>

        <h3>Can I cancel or modify my booking?</h3>
        <p>Yes, you can modify or cancel your booking up to 48 hours before your scheduled check-in time. Please refer to our cancellation policy for more details.</p>

        <h3>Is it safe to book through your website?</h3>
        <p>Yes, our website is SSL-secured, and we follow strict data protection protocols to ensure your personal and payment information remains safe.</p>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions, concerns, or require assistance, feel free to reach out to us:</p>
        <ul>
            <li><strong>Email:</strong> eleganttransportations2018@gmail.com</li>
            <li><strong>Phone:</strong> 9791313136 , 9600053631</li>
            <li><strong>Address:</strong> No.27/6, Annai Therasa Street Extn., Anandapuram, East Tambaram, Chennai-600059</li>
        </ul>
    </section>



    <footer>
        <p>&copy; 2016 Elegant Transportations. All rights reserved.</p>
    </footer>

    <script>
        function submitForm(event) {
            event.preventDefault(); // Prevent form from submitting the traditional way
            document.getElementById("successMessage").style.display = "block"; // Show success message
            document.getElementById("bookingForm").submit(); // Submit the form programmatically
        }
    </script>

</body>
</html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $destination = $_POST['destination'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $transport = $_POST['transport'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;
        $mail->Username = 'eleganttransportations2016@gmail.com'; 
        $mail->Password = 'xmjdwtiukpzabafs'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port = 587; 

        // Recipients
        $mail->setFrom('your_email@gmail.com', 'Elegant Transportations');
        $mail->addAddress($email, $name); // Send confirmation to user
        $mail->addAddress('eleganttransportations2016@gmail.com', 'Support Team'); // Send to support team

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Booking Request from ' . $name;
        $mail->Body = "
            <h2>Booking Details</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone Number:</strong> $phone</p>
            <p><strong>Destination:</strong> $destination</p>
            <p><strong>Check-In Date:</strong> $checkin</p>
            <p><strong>Check-Out Date:</strong> $checkout</p>
            <p><strong>Preferred Transport:</strong> $transport</p>
            <p><strong>Special Requests:</strong><br>$message</p>
        ";

        // Send email
        if ($mail->send()) {
            echo 'Please check your email for a confirmation after submitting your booking.';
        }
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
?>

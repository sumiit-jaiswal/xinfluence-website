<?php
include 'forms.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us-Xinfluence</title>
    <link rel="icon" href="/images/xinfluence logo png.png" type="image/icon type">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo">
                    <a href="/index.php"><img src="/images/xinfluence logo png.png" alt="Xinfluence: X-factor for your marketing"></a>
                </div>
                <ul>
                    <li><a href="/index.php">Home</a></li>

                    <li>
                        <a href="/php/contact.php">Contact ▾</a>
                        <ul class="dropdown">

                            <li><a href="mailto:contact@xinfluence.in" target="_main " class="contact-dropdown-color">Email :
                                    contact@xinfluence.in</a></li>

                            <li><a href="https://api.whatsapp.com/send/?phone=919599305469&text&type=phone_number&app_absent=0" target="_main " class="contact-dropdown-color">Whatsapp :
                                    +91-9599305469</a></li>

                            <li><a href="https://www.instagram.com/xinfluence.in" target="_main" class="contact-dropdown-color">Instagram: @Xinfluence.in</a></li>

                        </ul>
                    </li>

                    <li><a href="/html/rate-list.html">Pricing</a></li>
                    <li><a href="/html/services.html">Services</a></li>
                    <li><a href="/php/contact.php?showText=true">Surprise!!!</a></li>

                </ul>
            </div>
            <div class="toggle-button">
                <span></span>
                <span></span>
                <span></span>
            </div>
            </div>
        </nav>
        <nav>
            <div class="side-menu">
                <div class="logo">
                    <a href="/index.php"><img src="/images/xinfluence logo png.png" alt="Xinfluence: X-factor for your marketing">
                        <h4 class="slogan">X-factor for your marketing</h4>
                    </a>
                </div>
                <ul>
                    <li><a href="/index.php">Home<a></li>
                    <li><a href="/php/contact.php">Contact</a></li>
                    <li><a href="/html/rate-list.html">Pricing</a></li>
                    <li><a href="/html/services.html">Services</a></li>
                    <li><a href="/php/contact.php?showText=true">Surprise!!!</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section id="contactintro">
        <div class="container">
            <?php
            if ($insert == true) {
                echo "<div class='submitmsg'>Thank you. We will contact you within 24 hours.</div>";
            }
            ?>
            <h1 class="hidden-text animate__animated animate__fadeInDown" id="surprisetext">Surprise Chahiye! Aa Jao Dikha Denge!!</h1>
            <h1 class="not-hidden-text animate__animated animate__fadeInDown" id="text">Boost your Brand's reach now!!</h1>
            <p class="animate__animated animate__fadeInUp">Connect with us to take your marketing to the next level. Fill out the form below or use the contact information provided to know about our pricing and further details according to your need.</p>
        </div>
    </section>
    <section id="contact-boxes">
        <div class="container">

            <h1 class="not-hidden-text animate__animated animate__fadeInDown" id="text">Contact us Now!! For any question or query</h1>
            <div class="contact-box animate__animated animate__fadeInLeft">
                <a href="https://api.whatsapp.com/send/?phone=919599305469&text&type=phone_number&app_absent=0" target="_main"><img src="/images/whatsapp-icon.svg"></a>
                <h3><a href="https://api.whatsapp.com/send/?phone=919599305469&text&type=phone_number&app_absent=0" target="_main ">Whatsapp Us</a></h3>
                <p>+91-9599305469</p>
            </div>
            <div class="contact-box animate__animated animate__fadeInRight">
                <a href="mailto:contact@xinfluence.in" target="_main"><img src="/images/email-icon.svg"></a>
                <h3>Email Us</h3>
                <p><a href="mailto:contact@xinfluence.in">contact@xinfluence.in</a></p>
            </div>
        </div>
        <h2>To know about Services We provide</h2>
        <a href="/html/services.html" class="btn-primary">Services</a>
    </section>
    <section id="contact">
        <div class="container">
            <h2><a href="#contact-boxes">Contact Us</a></h2>
            <p>Ready to take your marketing to the next level? Let's talk! Fill out the form below or send us an email
                at
                <a href="mailto:contact@xinfluence.in"> contact@Xinfluence.in</a>
            </p>
            <form action="" method="POST">
                <label for="name">Name</label>
                <input type="text" class="query-form" id="1Name" name="Name" required>

                <label for="email">Email</label>
                <input type="email" class="query-form" id="2Email" name="Email" required>

                <label for="message">Message</label>
                <textarea id="3Message" class="query-form" name="Message" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="footer-container">

            <div class="footer-column">
                <h3 class="hover-3"><a href="/php/contact.php">Contact</a></h3>
                <p><a href="mailto:contact@xinfluence.in">Email: contact@Xinfluence.in</a></p>
                <p>Phone: +91-9599305469</p>
            </div>
            <div class="footer-column">
                <h3 class="hover-3"><a href="/html/about us.html">About Us</a></h3>
                <p><a class="xblue">X</a>influence: Empowering brands with impactful influencer marketing. Seamlessly
                    connect with influential creators, spark conversations, and drive brand growth. Authentic
                    storytelling, data-driven strategies, and unmatched expertise for extraordinary results. Welcome to
                    <a class="xblue">X</a>influence, where influence becomes power.
                </p>
            </div>
            <div class="footer-column">
                <h3 class="hover-3">Follow Us</h3>
                <ul class="social-media">
                    <li><a href="https://www.instagram.com/xinfluence.in" target="_main"><img src="/images/instagram-icon.svg"></a></li>
                    <li><a href="https://twitter.com/Xinfluencedotin" target="_main"><img src="/images/twitter-icon.svg"></a></li>
                    <!-- <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li> -->
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Xinfluence. All rights reserved.</p>
            <p><a href="/html/privacy policy.html">Privacy Policy</a>
                <!-- | <a href="#">Terms of Service</a> -->
            </p>
        </div>
    </footer>
    <script src="/js/script.js"></script>

</body>

</html>
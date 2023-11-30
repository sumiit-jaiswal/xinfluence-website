<?php
include 'php/forms.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Xinfluence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/xinfluence logo png.png" type="image/icon type">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/intro.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/ourwork.css">
    <link rel="stylesheet" href="/css/home-page-services.css">
    <link rel="stylesheet" href="/css/influencer.css">
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
                    <li ><a href="/html/influencer.html">Influencer Program</a></li>
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
                    <li><a href="/php/contact.php">Contact</a></li>
                    <li><a href="/html/rate-list.html">Pricing</a></li>
                    <li><a href="/html/services.html">Services</a></li>
                    <li ><a href="/html/influencer.html">Influencer Program</a></li>

                    <li><a href="/php/contact.php?showText=true">Surprise!!!</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section id="intro">
        <div class="container">
            <?php
            if ($insert == true) {
                echo "<div class='submitmsg'>Thank you. We will contact you within 24 hours.</div>";
            }
            ?>

            <h1>Welcome to <a class="xblue">X</a>influence</h1>
            <p>At <a class="xblue">X</a>influence, we help brands of all sizes connect with the right influencers to
                build successful campaigns and reach their target audience.</p>
            <a href="/contact" class="btn-primary">Get Started</a>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h1>Services <a class="xblue">X</a> Benefits</h1>

            <div class="servicescontainer">

                <div class="item">
                    <a href="/html/services.html" class="servicesheading">Instagram and YouTube influencer marketing</a>
                    <p>Level up your brand with elite influencers on Instagram and YouTube for ultimate reach and engagement.</p><a href="/html/services.html"> <img src="/images/services-instagram-youtube-marketing.png" alt="instagram and youtube marketing"></a>
                </div>

                <div class="item">
                    <a href="/html/services.html" class="servicesheading">Low prices: starting at just Rs. 4999/month</a>
                    <p>Rely completely on us for your brand's influencer marketing with our monthly plans starting from Rs.4999</p><a href="/html/services.html"><img src="/images/services-budget-friendly.png" alt="Budget Friendly Plans"></a>
                    <a href="/html/rate-list.html" class="btn-primary">Plans & Pricing</a>
                </div>

                <div class="item">
                    <a href="/html/services.html" class="servicesheading">Analysis and Report</a>
                    <p>Supercharge your brand with data-driven insights for maximum impact and ROI.</p><a href="/html/services.html"> <img src="/images/services-analysis-report.png" alt="Analysis and Report"></a>
                   
                </div>

                <div class="item">
                    <a href="/html/services.html" class="servicesheading">Best Creative Content</a>
                    <p>Ignite your brand with captivating influencer content that engages through storytelling and stunning visuals.</p><a href="/html/services.html"><img src="/images/services-creative-content-making.png" alt="Best Creative Content"></a>
                    
                </div>

                <div class="item">
                    <a href="/html/services.html" class="servicesheading">Meme Marketing: GO Viral through humour</a>
                    <p>Amplify your brand with meme marketing that captivates and engages your audience.</p><a href="/html/services.html"><img src="/images/services-meme-marketing.png" alt="Meme Marketing"></a>
                    
                </div>

                <div class="item">
                    <a href="/html/services.html" class="servicesheading">Transparency and Efficiency</a>
                    <p>Maximize your influencer marketing investment with our transparent reporting and expense breakdowns.</p><a href="/html/services.html"><img src="/images/services-transparency-efficient.png" alt="Transparency and Effectiveness"></a>
                    
                </div>
            </div>
            <div class="services-footer">
                <div class="services-footer-1">
                    <h2>Get your Free Trial Now!</h2>
                    <a href="https://docs.google.com/forms/d/1rEjaYnsU0yXLlB1ldBLOhXjLMPQKeVrlc341tTxgf9g/" target="_main" class="btn-primary">Free Trial</a>
                </div>
                <div class="services-footer-2">
                    <a href="https://api.whatsapp.com/send/?phone=919599305469&text&type=phone_number&app_absent=0" target="_main"><img src="/images/whatsapp-icon.svg"></a>
                    <p>+91-9599305469</p>
                </div>
            </div>
        </div>
    </section>

    <div class="influencer-section">
        <img src="/images/influencers.png" alt="Influencer">
        <div>
            <h2>Join <a class="xblue">X</a>influence as an Influencer!</h2>
            <p>Connect with our influencer marketing company and unlock amazing opportunities.</p>
            <a href="https://docs.google.com/forms/d/1bO9csyqvDF-KdBzkYcFkiQ9bwtkKx7F3b0Ez36pPBw0" target="_main" class="google-form-link">Join Now</a>
            <a href="/html/influencer.html" class="influencer-page-link">Learn more about our Influencer Program</a>
        </div>
    </div>

    <!-- <section id="our-work">
        <div class="container">
            <h2>Our Work</h2>
            <p>Check out some of our successful influencer marketing campaigns:</p>

            <div class="work-container">
                <div class="work-item">
                    <img src="/images/services image1.png" alt="Work 1">
                    <h3>Campaign Title 1</h3>
                    <p>Description of the campaign and its success.</p>
                </div>
            </div>
        </div>
    </section> -->
    <section id="contact-boxes">
        <div class="container">

            <h1 class="not-hidden-text animate__animated animate__fadeInDown" id="text">Contact Us now to take your brand to next level.</h1>
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
    </section>

    <section id="contact">
        <div class="container">
            <h2><a href="/php/contact.php">Contact Us</a></h2>
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
                <h3 class="hover-3"><a href="/about us">About Us</a></h3>
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
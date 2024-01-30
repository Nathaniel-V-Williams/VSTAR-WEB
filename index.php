
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COMPANY</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
       
    </style>
</head>
<body>
        <header>
            <nav>
                <div class="logo">
                    <img src="images/images.png" alt="Logo">
                    <h1> VStar Record Int'L Organization </h1>
                </div>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <h1 style="margin-top: 200px; font-size:50px;">Vstar Record Int'L Organization</h1>
            <p>The Vstar Record Organization is Dedicated to Showcasing Youth's Hidden Talent.</p>
            <p>Join us in inspiring the world!</p>
            <a href="#Contact" class="cta-button">Get in Touch</a>
        </header>
            <h2 style="text-align: center;">Our Services</h2>
            <div class="flex">
                <section id="services">
                    <div class="service">
                        <div class="service-image">
                            <img src="images/Nathalyn.png" alt="Service 1">
                        </div>
                        <h3>Education Program</h3>
                        <p>The Vstar Record Organization is Dedicated to Showcasing Youth's Hidden Talent.</p>
                    </div>

                    <div class="service">
                        <div class="service-image">
                            <img src="images/Nathalyn.png" alt="Service 2">
                        </div>
                        <h3>Music Production</h3>
                        <p>The Vstar Record Organization is Dedicated to Showcasing Youth's Hidden Talent.</p>
                    </div>

                    <div class="service">
                        <div class="service-image">
                            <img src="images/Nathalyn.png" alt="Service 3">
                        </div>
                            <h3>Sports Development</h3>
                            <p>The Vstar Record Organization is Dedicated to Showcasing Youth's Hidden Talent.</p>
                            </div>
                </section>
            </div>
        </main>

        ?php

        <section id="team">
            <h2>Our Team</h2>
            <p>Meet our team of experts</p>

            <div class="flex">
                <div class="team-member">
                    <div class="img">
                        <img src="images/ceo.png" alt="Team Member 1">
                    </div>
                    <p>Nathaniel V. Williams</p>
                    <p>CEO</p>
                </div>

                <div class="team-member">
                    <div class="img">
                        <img src="images/mandela.png" alt="Team Member 2">
                    </div>
                    <p>Mandela B. Brown</p>
                    <p>President</p>
                </div>

                <div class="team-member">
                    <div class="img">
                        <img src="images/sam.png" alt="Team Member 3">
                    </div>
                    <p>Sam L. Boyah II</p>
                    <p>Vice President</p>
                </div>

                <div class="team-member">
                    <div class="img">
                        <img src="images/abraham.png" alt="Team Member 4">
                    </div>
                    <p>Abraham K. Somboi</p>
                    <p>General Secretary</p>
                </div>

                <div class="team-member">
                    <div class="img">
                        <img src="images/prince.png" alt="Team Member 5">
                    </div>
                    <p>Prince S. Bedford</p>
                    <p>Public Relation Officer</p>
                </div>
            </div>
        </section>

        <section id="about">
            <h2>About Us</h2>
            <p>Our Organization is Dedicated to Showcasing Youth's Hidden Talent<br>
                 <br>through innovative and effective Organizational strategies.<br> 
                 <br>Our team of experts understands the importance of providing an avenue for young people in our today's society.</p>
            <img src="images/Nathalyn.png" alt="About Image">
        </section>

        <section id="contact">
            <h2>Get in Touch</h2>
            <p>Get in touch with us today! Our team is here to answer any questions<br>
                 <br>you may have and help you in finding a solution to your needs.<br> 
                 <br>Simply fill out the form below with your name, email, and message,<br> 
                 <br>and we'll be in touch shortly. We're excited to hear from you and help you achieve your goals.</p>
    
                 <form action="insertContact.php" method="post">
                <input placeholder="Your Name" type="text" id="Name" name="Name" required>

                <input placeholder="vstarrecord@gmail.com" type="Email" id="Email" name="email" required>

                <textarea placeholder="Dont exceed 255 words" id="Message" name="Message" required></textarea>

                <button type="submit" class="cta-button">Submit</button>
                <button type="reset" class="cta-button">Cancel</button>
            </form>
        </section>

        <footer>
            <p>&copy; 2023 Vstar Record Int'L Organization. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>

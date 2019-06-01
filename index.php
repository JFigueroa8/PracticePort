<?php
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];

    $mailTo = "thegame10182@yahoo.com";
    $headers = "From: " .$mailFrom;
    $txt = "You have received an e-mail from " .$name.".\n\n".$subject;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Julmar Figueroa</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="menu-toggle">
            <div class="bar half start"></div>
            <div class="bar"></div>
            <div class="bar half end"></div>
        </div>
        <nav class="top-nav">
            <ul class="nav-list">
                <li>
                    <a href="index.html" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li>
                    <a href="#services" class="nav-link">Services</a>
                </li>
                <li>
                    <a href="#portfolio" class="nav-link">Portfolio</a>
                </li>
                <li>
                    <a href="#experience" class="nav-link">Experience</a>
                </li>
                <li>
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="landing-text">
            <h1>Julmar Figueroa</h1>
            <h6>Web Developer | Gamer | Dog Lover</h6>
            <!-- <div class="middle">
                <div class="mouse"></div>
            </div> -->
            <div class="box">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <section class="about" id="about">
        <div class="container">
            <div class="profile-img" data-aos="fade-right" data-aos-delay="300">
                <img src="images/meB&W.jpg" alt="Picture of Julmar">
            </div>
            <div class="about-details" data-aos="fade-left" data-aos-delay="600">
                <div class="about-heading">
                    <h1>About</h1>
                    <h6>Myself</h6>
                </div>
                <p>
                    I am a self-taught developer looking to grow my skills every day by building fully functional responsive websites using HTML, CSS, JavaScript and jQuery. If I'm not on my computer, you can catch me with my dogs, at the basketball court or playing games with my friends.
                </p>
                <div class="social-media">
                    <ul class="nav-list icons">
                        <li>
                            <a target="_blank" href="https://github.com/JFigueroa8" class="icon-link">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.linkedin.com/in/julmarfigueroa/" class="icon-link">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="services" id="services">
        <div class="container">
            <div class="section-heading">
                <h1>Services</h1>
                <h6>What I can do for you</h6>
            </div>
            <div class="my-skills">
                <div class="skill" data-aos="fade-in" data-aos-delay="300">
                    <div class="icon-container">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h1>Web Design</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <div class="skill" data-aos="fade-in" data-aos-delay="600">
                    <div class="icon-container">
                        <i class="fas fa-code"></i>
                    </div>
                    <h1>Web Development</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <div class="skill" data-aos="fade-in" data-aos-delay="900">
                    <div class="icon-container">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h1>Product Strategy</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
            </div>
        </div>
    </section> -->

    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-heading">
                <h1>Portfolio</h1>
                <h6>View some of my recent work</h6>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-img has-margin-right" data-aos="fade-right" data-aos-delay="300">
                    <a href="http://omnifood.julmarfigueroa.com/" target="_blank">
                        <img class="omni-img" src="images/Omnifood.png" alt="Photo of Omnifood project">
                    </a>
                    <!-- <img src="images/Omnifood.png" alt="Photo of Omnifood project"> -->
                </div>
                <div class="portfolio-description" data-aos="fade-left" data-aos-delay="500">
                    <h6>Web Development</h6>
                    <h1>Omnifood</h1>
                    <p>Created while completing Udemy course by Jonas Schmedtmann. Implemented animations and responsive design</p><br>
                    <!-- <p>HTML | CSS | JAVASCRIPT | JQUERY</p> -->
                    <a href="http://omnifood.julmarfigueroa.com/" class="cta project" target="_blank">Project</a>
                    <p class="divider">/</p>
                    <a href="https://github.com/JFigueroa8/Omnifood" class="cta github" target="_blank">Github</a>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-description has-margin-right" data-aos="fade-right" data-aos-delay="700">
                    <h6>Web Development</h6>
                    <h1>MovieInfo</h1>
                    <p>Integrated search functionality, movie posters and movie names using OBDB API. Added ability to also view more movie details such as ratings and genres by visiting IMDB</p><br>
                    <!-- <p>HTML | CSS | JAVASCRIPT | JQUERY</p> -->
                    <a href="http://movieinfo.julmarfigueroa.com/" class="cta project" target="_blank">Project</a>
                    <p class="divider">/</p>
                    <a href="https://github.com/JFigueroa8/MovieInfo" class="cta github" target="_blank">Github</a>
                </div>
                <div class="portfolio-img" data-aos="fade-left" data-aos-delay="900">
                    <a href="http://movieinfo.julmarfigueroa.com/" target="_blank">
                        <img class="movie-img" src="images/MovieInfo.jpg" alt="Photo of MovieInfo project">
                    </a>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-img has-margin-right" data-aos="fade-right" data-aos-delay="1100">
                    <a href="http://pixelart.julmarfigueroa.com/" target="_blank">
                        <img class="pixel-img" src="images/PixelArtMaker.png" alt="Photo of PixelArtMaker project">
                    </a>
                </div>
                <div class="portfolio-description" data-aos="fade-left" data-aos-delay="1300">
                    <h6>Web Development</h6>
                    <h1>Pixel Art Maker</h1>
                    <p>Allows the user to enter a height and width in order to customize the size of their grid. Added the abiliity to pick any color from multiple color palettes</p><br>
                    <!-- <p>HTML | CSS | JAVASCRIPT</p> -->
                    <a href="http://pixelart.julmarfigueroa.com/" class="cta project" target="_blank">Project</a>
                    <p class="divider">/</p>
                    <a href="https://github.com/JFigueroa8/PixelArtMaker" class="cta github" target="_blank">Github</a>
                </div>
            </div>
        </div>
    </section>

    <section class="experience" id="experience">
            <div class="container">
                <div class="section-heading">
                    <h1>Work Experience</h1>
                    <h6>Past and current jobs</h6>
                </div>
                <div class="timeline" data-aos="fade-down" data-aos-delay="300">
                    <ul>
                        <li class="date" data-date="2018 - Present">
                            <h1>Software Engineer - Pro-Change Behavior Systems</h1>
                            <p>Helped develop a Selenium (Nightwatch.js) testing framework to automate Front-end component testing. Verified the integrity and visual appearance of thousands of components, reducing testing time from several manual hours to minutes.</p>
                        </li>
                        <li class="date" data-date="2012 - 2016">
                            <h1>Senior iOS Chat Advisor | Apple</h1>
                            <p>Would actively listen while using problem-solving skills to isolate and resolve simple to complicated technical issues in a timely manner.</p>
                        </li>
                        <li class="date" data-date="2015 - 2015">
                            <h1>iOS Team Manager Backfill | Apple</h1>
                            <p>Held one-to-one meetings and check-ins with Advisors to discuss metric reports, coaching opportunities and mentoring.</p>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section class="contact" id="contact">
            <div class="container">
                <div class="section-heading">
                    <h1>Contact</h1>
                    <h6>Let's work together</h6>
                </div>
                <form method="post" action="index.php" data-aos="fade-up" data-aos-delay="300">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name..." required>
                    <label for="name">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email..." required>
                    <label for="subject">Subject:</label>
                    <textarea name="subject" id="subject" cols="10" rows="10"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
    </section>
    <footer class="copyright">
        <div class="up" id="up">
            <i class="fas fa-chevron-up"></i>
        </div>
        <p>&copy; 2019 Julmar Figueroa</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
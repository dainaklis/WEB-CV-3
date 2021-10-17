
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <link rel="stylesheet" href="styles/style.css">

    <!-- IDEDAM GOOGLE FONTS STYLES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">


    <title>Portfolio WebSite 3</title>

</head>



<body>

    <header class="header">
        <section class="hero">

            <nav>
                <!-- <img class="logo" src="https://picsum.photos/id/180/50" alt="DainiusLogo"> -->
                <i  class="fas fa-desktop logo"></i>
                <ul id="nav-list">
                    <li><a href="#about-me">About Me</a> </li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contacts">Contact</a></li>
                </ul>

                <button class="hamburger" id="hamburger">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>

            <div class="hero-area">
                <div class="hero-text">
                    <h1>Dainius Karpavičius</h1>
                    <p>Junior Developer</p>
                    <div class="button"><a href="#about-me">About Me</a></div>
                </div>

                <div class="socials">

                    <!-- NETURIU -->
                    <!-- <div class="social">
                        <i class="fab fa-twitter"></i>
                    </div> -->
                    <div class="social">
                        <a href="https://www.linkedin.com/in/dainius-karpavičius-816a67179/" target="_blank" rel="">
                            <i class="fab fa-linkedin socialLink"></i>
                        </a>
                    </div>
                    <div class="social">
                        <a href="https://github.com/dainaklis" target="_blank" rel="">
                            <i class="fab fa-github socialGit"></i>
                        </a>
                    </div>
                </div>

                <div class="scroll-btn">
                    <div class="scroll-bar"><span><a href="#about-me"><i class="fas fa-arrow-down"></i></a></span></div>
                </div>
            </div>
        </section>

    </header>

    <main class="main">
        <section class="sub-section" id="about-me">
            <div class="information">
                <h2>About Me</h2>
                <p><strong>Hello.</strong> My name is Dainius Karpavičius. I am Junior PHP Developer.</p> 
                <p><strong>Self-taught</strong> programming focused on building apps, games and websites. Programming background achieved in Vilnius CODING school.</p>
                <p><strong>Energetic</strong>, highly motivated, communicative, receptive on new things.</p>
                <p><strong>Ready</strong> to join a team of developers, learn and contribute.</p>

                <h2>Education</h2>
                <div class="education-name">
                    <p><strong>Vilnius CODING School</strong> </p>
                    <p>2020 Feb</p>
                </div>
                <p>Programming course for beginners.</p>
                <p>
                    <ul class="education-ul">
                        <li>During the course student achieved theoretical knowledge and practical programming skills.</li>
                        <li>Programming languages: C#, Java, HTML, CSS, JavaScript, MySQL</li>
                    </ul>
                </p>
                <div class="education-name">
                    <p><strong>Vilnius Kolegija</strong></p>
                    <p>2010 - 2014 </p>
                </div>
                <p>Bachelor of Business	</p>

                <h2>Hobbies</h2>
                <p>Travelling, Sports (Walking, Bicycle), watching movies, play games.</p>
            </div>

            <div class="headshot-container">
                <img class="headshot" src="images/men.jpg" alt="DK">
            </div>
        </section>

        <section class="sec-project" id="projects">
            <h2>Projects</h2>
            <div class="project-container">
                <div class="project-card">
                    <img class="project-image" src="images/project1.jpg" alt="">
                    <h3>I learned Unity myself</h3>
                    <p class="subtext">Deepen C # knowledge with small projects. Unity games on Android and PC.</p>
                    <hr/>
                    <p class="subtext"><a class="project-link" target="_blank" href="https://github.com/dainaklis">View here</a></p>
                </div>
                <div class="project-card">
                    <img class="project-image" src="images/nproject2.jpg" alt="">
                    <h3>First WEB „Pokalbis Gydo“</h3>
                    <p class="subtext">Created the first web page with PHP and posted online.</p>
                    <hr/>
                    <p class="subtext"><a class="project-link" target="_blank" href="https://pokalbisgydo.lt/">View here</a></p>
                </div>

                <div class="project-card">
                    <img class="project-image" src="images/project4.jpg" alt="">
                    <h3>HTML and CSS</h3>
                    <p class="subtext">I create various a website with HTML and CSS.</p>
                    <hr/>
                    <p class="subtext"><a class="project-link" target="_blank" href="https://github.com/dainaklis">View here</a></p>
                </div>

                <div class="project-card">
                    <img class="project-image" src="images/project3.jpg" alt="">
                    <h3>PySpark</h3>
                    <p class="subtext">I analyzed large amounts of data with the PySpark program.</p>
                    <hr/>
                    <p class="subtext"><a class="project-link" target="_blank" href="https://github.com/dainaklis">View here</a></p>
                </div>

            </div>
        </section>
    </main>

    <footer class="footer" id="contacts">

        <h2>Contact me</h2>
        <p>8-687-23-733</p>
        <p><a href="https://accounts.google.com" target="_blank" >dainaklis@gmail.com</a></p>

        <button type="button" class="btn btn-primary"><a href="download.php?path=cv/Dainius_Karpavičius.pdf" target="_blank"><i class="fa fa-download"></i>Download CV</a></button>   
        
        <hr>

        <p class="copyright">© 2020 - 2021  Dainius Karpavičius</p>


    </footer>
    

    <script src="scripts/app.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>


</html>



  


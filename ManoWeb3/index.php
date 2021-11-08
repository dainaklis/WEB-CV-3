
<?php include "header.php" ?>

<!--------------------------LIKO VISAS MAIN BODY ------------------------------------------->
    <header class="header">
        <section class="hero">

            <nav>
                <!-- <img class="logo" src="https://picsum.photos/id/180/50" alt="DainiusLogo"> -->
                <i  class="fas fa-desktop logo"></i>
                <!-- <i class="material-icons logo">desktop_windows</i> -->
                <ul id="nav-list">
                    <li><a href="#about-me">About Me</a> </li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contacts">Contact</a></li>
                </ul>

                <button class="hamburger" id="hamburger">
                    <!-- <i class="fas fa-bars"></i> -->
                    <!-- <i class="material-icons menu" id="disable" onclick="disableMenu()" >menu</i> -->
                    <i class="fas fa-bars menu" id="disable" onclick="disableMenu()" ></i>
                    <!-- <i class="material-icons close" id="enable" onclick="enableMenu()">clear</i> -->
                    <i class="fas fa-times close" id="enable" onclick="enableMenu()"></i>
                    
                    <!-- <i class="fas fa-times"></i> -->
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
                            <!-- <i class="material-icons linkIcon">arrow_downward</i> -->
                            
                        </a>
                    </div>
                    <div class="social">
                        <a href="https://github.com/dainaklis" target="_blank" rel="">
                            <i class="fab fa-github socialGit"></i>
                            <!-- <i class="material-icons gitIcon">arrow_downward</i> -->
                        </a>
                    </div>
                </div>
                
                <div class="scroll-btn">
                    <div class="scroll-bar">
                        <span>
                            <a href="#about-me">
                            <i class="fas fa-arrow-down"></i>
                            <!-- <i class="material-icons rodykle">arrow_downward</i> -->
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </section>

    </header>

    <main class="main">
        <section class="sub-section" id="about-me">
            <div class="information">
                <h2>About Me</h2>
                <p><strong>Hello.</strong> My name is Dainius Karpavičius. I am Junior Developer.</p> 
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
                <img class="headshot" src="images/myfoto.jpg" alt="DK">
            </div>
        </section>

        <section class="sec-project" id="projects">
            <h2>Projects</h2>
            <div class="project-container">

                <div class="project-card">
                    <img class="project-image" src="images/project4.jpg" alt="">
                    <h3>HTML and CSS</h3>
                    <p class="subtext">I have created various websites with HTML, CSS. You can see them here.</p>
                    <hr/>
                    <p class="subtext"><a class="project-link" target="_self" href="projectslist.php">View here</a></p>
                </div>

                <div class="project-card">
                    <img class="project-image" src="images/nproject2.jpg" alt="">
                    <h3>First WEB „Pokalbis Gydo“</h3>
                    <p class="subtext">Created the first web page with HTML, CSS and posted online.</p>
                    <hr/>
                    <p class="subtext"><a class="project-link" target="_blank" href="https://pokalbisgydo.lt/">View here</a></p>
                </div>

                <div class="project-card">
                    <img class="project-image" src="images/project1.jpg" alt="">
                    <h3>I learned Unity myself</h3>
                    <p class="subtext">Deepen C # knowledge with small projects. Unity games on Android and PC.</p>
                    <hr/>
                    <p class="subtext"><a class="project-link" target="_blank" href="https://github.com/dainaklis/2D-Shooter-Zombie">View here</a></p>
                </div>

                <div class="project-card">
                    <img class="project-image" src="images/project3.jpg" alt="">
                    <h3>PySpark</h3>
                    <p class="subtext">I analyzed large amounts of data with the PySpark program.</p>
                    <hr/>
                    <p class="subtext"><a class="project-link" target="_blank" href="https://github.com/dainaklis/PySpark">View here</a></p>
                </div>

            </div>
        </section>
    </main>

<?php include "footer.php" ?>   



  


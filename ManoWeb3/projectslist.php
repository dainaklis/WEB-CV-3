
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/projectslist.css">

    <!-- IDEDAM GOOGLE FONTS STYLES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">


    <title>Projects List</title>
</head>
<body>
    
    <div class="container">
        <div class="logo">
            <a href="index.php"><i class="fas fa-backward"></i></a>
            <a href="index.php"><i class="fas fa-home"></i></a>

        </div>

        <h1>My work exemple</h1>

        <div class="flexcontainer">
            
            <!-- ------------------ROW E SHOP------------------ -->
            <div class="row">
                <!-- <a href="otherProjects/Eparduotuve2/index.php" target="_blank"> -->
                <a href="#">
                    <div class="row-list">
                        <img src="images/eShop.jpg" alt="">
                        <p>E Shop Example</p>
                    </div>

                    <div class="row-list-back">
                        
                        <div class="back-inside">
                            <a href="otherProjects/Eparduotuve2/index.php" target="_blank" rel="noopener noreferrer">E-Shop 1</a>
                        </div>

                        <div class="back-inside">
                            <a href="otherProjects/Eparduotuve/index.php" target="_blank" rel="noopener noreferrer">E-Shop 2</a>
                        </div>
                        
                    </div>
                </a>
            </div>
            <!-- ------------------ROW CARD------------------ -->
            <div class="row">
                <!-- <a href="otherProjects/ProfilioCard/card2.php" target="_blank"> -->
                <a href="#">
                    <!-- ---------ADD open-btn class , that open POP UP-------- -->
                    <div class="row-list open-btn">
                        <img src="images/profilecard.jpg" alt="">
                        <p>Profile Card</p>
                    </div>
                </a>
            </div>
            <!------- PASPAUDUS CARD ATIDARO ------>
            <div class="projects-box">
                <span class="close_btn">&times;</span>
                <div class="boxInside">
                    <img src="images/dainiusCard.JPG" alt="">
                    <a href="otherProjects/ProfilioCard/card2.php" target="_blank">Profile Card 1</a>
                </div>
                <div class="boxInside">
                    <img src="images/bozCard.JPG" alt="">
                    <a href="otherProjects/ProfilioCard/card3.php" target="_blank">Profile Card 2</a>
                </div>
                <div class="boxInside">
                    <img src="images/card4.JPG" alt="">
                    <a href="otherProjects/ProfilioCard/card4.php" target="_blank">Profile Card 3</a>
                </div>

                <div class="boxInside">
                    <img src="images/Card5.JPG" alt="">
                    <a href="otherProjects/ProfilioCard/card5.php" target="_blank">Profile Card 4</a>
                </div>
                
            </div>
            <!----------------------------------->
            <!-- ------------------ROW CV------------------ -->
            <div class="row">
                <!-- <a href="otherProjects/ManoWeb2/index.php" target="_blank"> -->
                <a href="#">
                    <!-- <div class="row-list">
                        <img src="images/cv.jpg" alt="">
                        <p>CV Example</p>
                    </div> -->

                    <!-- ---------ADD open-btn class , that open POP UP-------- -->
                    <div class="row-list open-btn-CV">
                        <img src="images/cv.jpg" alt="">
                        <p>CV Example</p>
                    </div>
                </a>
            </div>

            <!------- PASPAUDUS CARD ATIDARO ------>
            <div class="projects-box-CV">
                <span class="close_btn_CV">&times;</span>
                <div class="boxInside">
                    <img src="images/CvFoto1.JPG" alt="">
                    <a href="otherProjects/OnlineCv/index.php" target="_blank">CV Example 1</a>
                </div>

                <div class="boxInside">
                    <img src="images/CvFoto2.JPG" alt="">
                    <a href="otherProjects/ManoWeb2/index.php" target="_blank">CV Example 2</a>
                </div>        
            </div>
            
            <!-- ------------------ROW ------------------ -->
            <div class="row">
                <a href="gallery.php" target="_blank">
                    <div class="row-list">
                        <img src="images/gallery.jpg" alt="">
                        <p>Gallery Example</p>
                    </div>
                </a>
            </div>

            <!-- ------------------ROW ------------------ -->
            <div class="row">
                <a href="https://pokalbisgydo.lt/" target="_blank">
                    <div class="row-list">
                        <img src="images/pokalbisGydo.JPG" alt="">
                        <p>First WEB „Pokalbis Gydo“</p>
                    </div>
                </a>
             </div>
            <!-- ------------------ROW ------------------ -->

            <!-- ------------------ROW ------------------ -->
            <div class="row">
                <a href="otherProjects/GrozioPaslaugos/index.php" target="_blank">
                    <div class="row-list">
                        <img src="images/hairsalon.jpg" alt="">
                        <p>Beauty Services Web</p>
                    </div>
                </a>
            </div>
            <!-- ------------------ROW ------------------ -->
            <div class="row">
                <a href="projects.php" target="_self">
                    <div class="row-list">
                        <img src="images/service.jpg" alt="">
                        <p>Our Service Example</p>
                    </div>
                </a>
            </div>
            <!-- ------------------ROW ------------------ -->
            <div class="row">
                    <a href="contact.php" target="_self">
                        <div class="row-list">
                            <img src="images/contact2.jpg" alt="">
                            <p>Contact Form Example</p>
                        </div>
                    </a>
            </div>

            
        </div>


    </div>

    


    <script src="https://kit.fontawesome.com/bc9bcc9514.js" crossorigin="anonymous"></script>

    <script src="scripts/projectslist.js"></script>
</body>
</html>
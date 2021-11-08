<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <title>Halloween E-Shop</title>
</head>
<body>
    
    <!-------------------------------  header ------------------------------------>

    <header class="header">

        <a href="#" target="_blank" class="logo">
            <i class="fas fa-ghost"></i> logo
        </a>

        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#products">products</a>
            <a href="#about">about</a>
            <a href="#arrivals">arrivals</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>

        <form action="" class="search-form">
            <input type="search" placeholder="search here..." id="input-box">
            <label for="input-box" class="fas fa-search"></label>
        </form>
    </header>

    <!------------------------------------------------------------------------------>

    <!--------------------------HOME----------------------------------------------->

    <section class="home" id="#home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" style="background: url(images/home-slider-1.jpg);">
                    <div class="content">
                        <h3>happy holloween</h3>
                        <p>special discount</p>
                        <div class="button">
                            <a href="#" class="btn"> shop now </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box" style="background: url(images/home-slider-2.jpg);">
                    <div class="content">
                        <h3>up to 30% off</h3>
                        <p>on all costumes</p>
                        <div class="button">
                            <a href="#" class="btn"> shop now </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box" style="background: url(images/home-slider-3.jpg);">
                    <div class="content">
                        <h3>limited offers</h3>
                        <p>don't miss it</p>
                        <div class="button">
                            <a href="#" class="btn"> shop now </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!------------------------------------------------------------------------------>

    <!-------------------------PRODUCTS---------------------------------------->

    <section class="products" id="products">
        <h1 class="heading"> our <span>products</span></h1>
        <div class="swiper products-slider">
            <div class="swiper-wrapper">
                <!-- 1 -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/product-1.jpg" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>latest products</h3>
                        <div class="price">79.99 Eur <span>95.55 Eur</span></div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/product-2.jpg" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>latest products</h3>
                        <div class="price">79.99 Eur <span>95.55 Eur</span></div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/product-3.jpg" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>latest products</h3>
                        <div class="price">79.99 Eur <span>95.55 Eur</span></div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/product-4.jpg" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>latest products</h3>
                        <div class="price">79.99 Eur <span>95.55 Eur</span></div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="images/product-5.jpg" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>latest products</h3>
                        <div class="price">79.99 Eur <span>95.55 Eur</span></div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!------------------------------------------------------------------------------>

    <!------------------------------ABOUT------------------------------------------->
    <section class="about" id="about">
        <!-- <div class="content"> -->
        <div class="content" data-aos="fade-right">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat voluptate ipsam dignissimos voluptas, culpa itaque maiores quisquam explicabo magnam, atque labore soluta nesciunt accusamus ipsa ipsum beatae! Doloremque, fuga inventore.</p>
            <a href="#about" class="btn">read more</a>
        </div>
    </section>

    <!-----------------------------ARRIVALS----------------------------------------->
    <section class="arrivals" id="arrivals">
        <h1 class="heading"> new <span>arrivals</span></h1>

        <div class="box-container">
            <!-- 1 -->
            <div class="box">
            <!-- <div class="box" data-aos="fade-right"> -->
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/arrival-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>latest products</h3>
                    <div class="price">79.99 Eur <span>95.55 Eur</span></div>
                </div>
            </div>
            <!-- 2 -->
            <div class="box">
            <!-- <div class="box" data-aos="fade-down"> -->
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/arrival-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>latest products</h3>
                    <div class="price">79.99 Eur <span>95.55 Eur</span></div>
                </div>
            </div>  
            <!-- 3 -->
            <div class="box">
            <!-- <div class="box" data-aos="fade-left"> -->
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/arrival-3.gif" alt="">
                </div>
                <div class="content">
                    <h3>latest products</h3>
                    <div class="price">79.99 Eur <span>95.55 Eur</span></div>
                </div>
            </div>
            <!-- 4 -->
            <div class="box">
            <!-- <div class="box" data-aos="fade-right"> -->
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/arrival-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>latest products</h3>
                    <div class="price">79.99 Eur <span>95.55 Eur</span></div>
                </div>
            </div>
            <!-- 5 -->
            <div class="box">
            <!-- <div class="box" data-aos="fade-down"> -->
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/arrival-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>latest products</h3>
                    <div class="price">79.99 Eur <span>95.55 Eur</span></div>
                </div>
            </div>
            <!-- 6 -->
            <div class="box">
            <!-- <div class="box" data-aos="fade-left"> -->
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
                <div class="image">
                    <img src="images/arrival-6.gif" alt="">
                </div>
                <div class="content">
                    <h3>latest products</h3>
                    <div class="price">79.99 Eur <span>95.55 Eur</span></div>
                </div>
            </div>

        </div>
    </section>
    <!------------------------------------------------------------------------------>
    <!-------------------------------CONTACT--------------------------------------->
    <section class="contact" id="contact">

        <h1 class="heading"><span>contact</span></h1>

        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14961.218141096278!2d25.26657872600864!3d54.69634462193714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd93fbfcbb09a9%3A0x9c733a6c85235f80!2sPanorama!5e0!3m2!1sen!2slt!4v1635905932470!5m2!1sen!2slt" allowfullscreen="" loading="lazy"></iframe>

            <form action="">
                <h3>tell us something</h3>
                <input type="text" placeholder="Your Name" class="box">
                <input type="email" placeholder="Your Email" class="box">
                <input type="number" placeholder="Your Number" class="box">
                <textarea placeholder="Your Message" cols="30" rows="10" class="box"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>
        </div>

    </section>
    <!------------------------------------------------------------------------------>

    <!--------------------------------------BLOGS------------------------------------>

    <section class="blogs" id="blogs">
        <h1 class="heading">our <span>blogs</span></h1>

        <div class="box-container">

            <div class="box">
            <!-- <div class="box" data-aos="fade-right"> -->
                <div class="image">
                    <img src="images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Believe in the Magic of Halloween.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nam fuga, exercitationem repellendus iure ullam quas deserunt voluptatem corporis delectus quod autem nisi repudiandae aliquam maxime pariatur ipsa amet voluptatum.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="box">
            <!-- <div class="box" data-aos="fade-down"> -->
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Believe in the Magic of Halloween.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nam fuga, exercitationem repellendus iure ullam quas deserunt voluptatem corporis delectus quod autem nisi repudiandae aliquam maxime pariatur ipsa amet voluptatum.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="box">
            <!-- <div class="box" data-aos="fade-left"> -->
                <div class="image">
                    <img src="images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Believe in the Magic of Halloween.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nam fuga, exercitationem repellendus iure ullam quas deserunt voluptatem corporis delectus quod autem nisi repudiandae aliquam maxime pariatur ipsa amet voluptatum.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------------------------------------>

    <!-----------------------------FOOTER----------------------------------------->
    <section class="footer" id="footer">

        <div class="box-container">
            
            <div class="box">
            <!-- <div class="box" data-aos="fade-right"> -->
                <h3>our branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
            </div>
            
            <div class="box">
            <!-- <div class="box" data-aos="fade-down"> -->
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> products </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>
    
            <!-- <div class="box" data-aos="fade-up"> -->
            <div class="box">
                <h3>contact us</h3>
                <a href="#"> <i class="fas fa-phone"></i> +370-687-23733 </a>
                <a href="#"> <i class="fas fa-phone"></i> +370-222-33303 </a>
                <a href="#"> <i class="fas fa-envelope"></i> dainaklis@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Vilnius</a>
            </div>
    
            <!-- <div class="box" data-aos="fade-left"> -->
            <div class="box">
                <h3>contact us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <!-- <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a> -->
            </div>
    
        </div>
    
        <div class="credit"> created by <span>Dainius Karpavičius</span> | all rights reserved </div>
    
    </section>
    <!------------------------------------------------------------------------------>

    <!------------------------------------------------------------------------------>

    <!------------------------------------------------------------------------------>







    
    
    
    
    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="scripts/index.js"></script> 
    
    <script src="https://kit.fontawesome.com/bc9bcc9514.js" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
        delay:400,
        duration:800
        });
    </script>
    
</body>
</html>
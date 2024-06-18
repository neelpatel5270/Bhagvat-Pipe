<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhagvat Pipe</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <!-- <div class="banner">Get free delivery on orders over Rs.1500...<i class="fas fa-truck-pickup fa-lg fa-fw"></i> -->
        <!-- </div> -->
        <nav class="nav" style="padding: 40px;">
            <i class="uil uil-bars navOpenBtn"></i>
            <div class="line" style="gap: 10px;display:flex">
                <a href="#" class="logo"><img height="60px" src="images/bhagvatlogo.png" alt=""></a>
                <h2 class="mainhead" style="padding-top: 18px;">Bhagvat Pipe</h2>
                <br>
            </div>
            <style>
                @media only screen and (max-width: 700px) {
                    .logo {

                        padding-left: 85px;
                    }

                    .mainhead {
                        /* padding-right: 20px; */
                    }

                    .mh {
                        text-align: center;
                        padding-right: 45px;
                    }
                }

                @media only screen and (max-width: 1024px) {
                    .logo {
                        padding-right: 10px;
                        padding-top: 10px;
                    }

                    .mainhead {
                        padding-right: 100px;
                        padding-bottom: 6px;
                    }
                }
            </style>
            <ul class="nav-links">
                <i class="uil uil-times navCloseBtn"></i>
                <li><a style="color:yellow;" href="#">Home</a></li>
                <li><a href="./gallary.php">Gallary</a></li>
                <li><a href="#prod">Products</a></li>
                <li><a href="./aboutus.php">About Us</a></li>
                <li><a href="./quality.php">Quality Policy</a></li>
                <li><a href="./headervision.php">Vision</a></li>
                <li><a href="./headermission.php">Mission</a></li>
                <li><a href="./contactfinal.php">Contact Us</a></li>
            </ul>
            <i hidden class="uil uil-search search-icon" id="searchIcon"></i>
            <div hidden class="search-box">
                <i hidden class="uil uil-search search-icon"></i>
                <input hidden type="text" placeholder="Search here..." />
            </div>
        </nav>
        <style>
            .nav {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                padding: 15px 200px;
                background: #4a98f7;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            .nav,
            .nav .nav-links {
                display: flex;
                align-items: center;
            }

            .nav {
                justify-content: space-between;
            }

            a {
                color: #fff;
                text-decoration: none;
            }

            .nav .logo {
                font-size: 22px;
                font-weight: 500;
            }

            .nav .nav-links {
                column-gap: 20px;
                list-style: none;
            }

            .nav .nav-links a {
                transition: all 0.2s linear;
            }

            .nav.openSearch .nav-links a {
                opacity: 0;
                pointer-events: none;
            }

            .nav .search-icon {
                color: #fff;
                font-size: 20px;
                cursor: pointer;
            }

            .nav .search-box {
                position: absolute;
                right: 250px;
                height: 45px;
                max-width: 555px;
                width: 100%;
                opacity: 0;
                pointer-events: none;
                transition: all 0.2s linear;
            }

            .nav.openSearch .search-box {
                opacity: 1;
                pointer-events: auto;
            }

            .search-box .search-icon {
                position: absolute;
                left: 15px;
                top: 50%;
                left: 15px;
                color: #4a98f7;
                transform: translateY(-50%);
            }

            .search-box input {
                height: 100%;
                width: 100%;
                border: none;
                outline: none;
                border-radius: 6px;
                background-color: #fff;
                padding: 0 15px 0 45px;
            }

            .nav .navOpenBtn,
            .nav .navCloseBtn {
                display: none;
            }

            /* responsive */
            @media screen and (max-width: 1160px) {
                .nav {
                    padding: 15px 100px;
                }

                .nav .search-box {
                    right: 150px;
                }
            }

            @media screen and (max-width: 950px) {
                .nav {
                    padding: 15px 50px;
                }

                .nav .search-box {
                    right: 100px;
                    max-width: 400px;
                }
            }

            @media screen and (max-width: 768px) {

                .nav .navOpenBtn,
                .nav .navCloseBtn {
                    display: block;
                }

                .nav {
                    padding: 15px 20px;
                }

                .nav .nav-links {
                    position: fixed;
                    top: 0;
                    left: -100%;
                    height: 100%;
                    max-width: 280px;
                    width: 100%;
                    padding-top: 100px;
                    row-gap: 30px;
                    flex-direction: column;
                    background-color: #11101d;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                    transition: all 0.4s ease;
                    z-index: 100;
                }

                .nav.openNav .nav-links {
                    left: 0;
                }

                .nav .navOpenBtn {
                    color: #fff;
                    font-size: 20px;
                    cursor: pointer;
                }

                .nav .navCloseBtn {
                    position: absolute;
                    top: 20px;
                    right: 20px;
                    color: #fff;
                    font-size: 20px;
                    cursor: pointer;
                }

                .nav .search-box {
                    top: calc(100% + 10px);
                    max-width: calc(100% - 20px);
                    right: 50%;
                    transform: translateX(50%);
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                }
            }
        </style>
        <script>
            const nav = document.querySelector(".nav"),
                searchIcon = document.querySelector("#searchIcon"),
                navOpenBtn = document.querySelector(".navOpenBtn"),
                navCloseBtn = document.querySelector(".navCloseBtn");
            searchIcon.addEventListener("click", () => {
                nav.classList.toggle("openSearch");
                nav.classList.remove("openNav");
                if (nav.classList.contains("openSearch")) {
                    return searchIcon.classList.replace("uil-search", "uil-times");
                }
                searchIcon.classList.replace("uil-times", "uil-search");
            });
            navOpenBtn.addEventListener("click", () => {
                nav.classList.add("openNav");
                nav.classList.remove("openSearch");
                searchIcon.classList.replace("uil-times", "uil-search");
            });
            navCloseBtn.addEventListener("click", () => {
                nav.classList.remove("openNav");
            });
        </script>
    </header>
    <section id="starting" class="hero" style="width:100%">
        <h1 style="padding-left: 75px;" class="mh">Bhagvat Pipe</h1>
        <div style="padding-left: 30px;" class="btn-group" align="center">
            <a href="images/bhagvat_PVC.pdf" download="bhagvat_PVC.pdf"><button class="btn-filled-dark"><span class="material-symbols-outlined">
                        Download
                    </span>Broucher <i class="fa-solid fa-file-arrow-down fa-bounce" aria-hidden="true"></i> </button></a>
            <a href="./contactfinal.php"><button class="btn-outline-dark btn-hover-color">
                    <span class="material-symbols-outlined"></span>

                    <i class="fa fa-phone fa-shake" aria-hidden="true"></i> Contact Us</button></a>
        </div>
    </section>
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"> <!-- Adjusted viewBox dimensions -->
        <path fill="#e7c437" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,154.7C384,149,480,107,576,101.3C672,96,768,128,864,149.3C960,171,1056,181,1152,165.3C1248,149,1344,107,1392,85.3L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    <section>
        <div class="e-card playing">
            <div class="image"></div>
            <div class="wavee"></div>
            <div class="wavee"></div>
            <div class="wavee"></div>
            <div class="infotop">
                <br>
                Welcome To Bhagvat 🤝
                <br>
                <div class="name">Welcome to Bhagvat Pipe, the leading provider of high-quality CPVC and UPVC pipes. Our
                    range of pipes is perfect for all types of construction projects, whether residential, commercial or
                    industrial.
                    <br>
                    <br>
                    Our commitment to quality and customer service is second to none, and we are always here
                    to help you find the right product to meet your specific needs. From start to finish, we are
                    dedicated to making your project a success, and we can't wait to work with you.
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="igcontainer">
            <div class="igslider" align="center">
                <img id="ipip" class="active" src="images/bpvc/6.jpg">
                <img id="ipip" src="images/bpvc/1.jpg">
                <img id="ipip" src="images/bpvc/2.jpg">
                <img id="ipip" src="images/bpvc/3.jpg">
                <img id="ipip" src="images/bpvc/4.jpg">
                <img id="ipip" src="images/bpvc/5.jpg">
                <img id="ipip" src="images/bpvc/6.jpg">
                <img id="ipip" src="images/bpvc/3.jpg">
                <img id="ipip" src="images/bpvc/2.jpg">
            </div>
            <br>
            <div class="sliderss-nav">
                <ul>
                    <li class="arrow">
                        <button id="left" class="previous">
                            <span>
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </span>
                        </button>
                    </li>
                    <br>
                    <!-- <b>Product's</b>  -->
                    <br>
                    <li class="arrow">
                        <button id="left" class="next">
                            <span>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <style>
            /* Container */
            .igcontainer {
                max-width: 800px;
                margin: 0 auto;

            }

            /* Button */
            .left {
                position: relative;
                display: inline-block;
                cursor: pointer;
                outline: none;
                border: 0;

                vertical-align: middle;
                text-decoration: none;
                background: transparent;
                padding: 20px 5px;
                color: var(--arrow);
                font-size: 2rem;

            }

            button span {
                position: relative;
                display: inline-block;
                transform: translateX(0);
                transition: transform 0.3s ease;
            }

            /* Button Hover */
            .previous:hover span {
                transform: translateX(-10px) scale(1.2);
            }

            .next:hover span {
                transform: translateX(10px) scale(1.2);
            }

            /* Slider Navigation */
            .sliderss-nav ul {
                list-style: none;
                margin: 0;
                gap: 50px;
                padding: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
                padding-left: 40px;
            }

            @media screen and (max-width: 768px) {
                .sliderss-nav ul {
                    padding-left: 20px;
                    gap: 60px;
                }
            }

            .sliderss-nav li {
                display: flex;
                flex: 2;
                text-align: center;
            }

            /* Image */
            #ipip {
                max-width: 100%;
                max-height: 100%;
                display: none;
                border-radius: 15px;
                box-shadow: 10px 10px 20px 0 rgba(94, 47, 59, 0.2);
            }

            #ipip.active {
                display: block;
                animation: fadeImg 0.8s;
            }

            /* Slider Navigation Arrow */
            .sliderss-nav .arrow {
                flex: 0 0 15%;
            }

            .sliderss-nav a {
                flex-basis: 100%;
                display: flex;
                align-items: center;
            }

            .sliderss-nav span {
                display: block;
                width: 100%;
            }

            /* Keyframes */
            @keyframes fadeImg {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }
        </style>
        <script>
            const items = document.querySelectorAll('.igslider img');
            const itemCount = items.length;
            let count = 0;
            let intervalId;

            function showNextItem() {
                items[count].classList.remove('active');

                if (count < itemCount - 1) {
                    count++;
                } else {
                    count = 0;
                }

                items[count].classList.add('active');
                console.log(count);
            }

            function startSlideShow() {
                intervalId = setInterval(showNextItem, 3000); // Change slide every 3 seconds
            }

            function stopSlideShow() {
                clearInterval(intervalId);
            }

            function keyPress(e) {
                e = e || window.event;

                if (e.keyCode == '37') {
                    showPreviousItem();
                } else if (e.keyCode == '39') {
                    showNextItem();
                }
            }

            document.addEventListener('keydown', keyPress);
            startSlideShow(); // Start the slideshow initially
        </script>
    </section>
    <section>
        <div class="threed">
            <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

            <span id="prod" class="render" align="center">Product's</span>
        </div>
        <!-- <h2>Shop At Bhagvat</h2> -->
        <br>
        <br>
        <ul class="shop-pets">
            <li class="card-large card-light" id="sup-dog">
                <div class="card-image"><img src="images/pip2.png">
                </div>
                <ul>
                    Hot Water UPVC Pipes
                    <li><a href="#">Temperature resistant</a></li>
                    <li><a href="#">High flow capacity</a></li>
                    <li><a href="#">Longevity &amp; Smooth interior surface</a></li>
                    <li><a href="#">Low thermal conductivity</a></li>
                    <li><a href="#">Chemical resistance</a></li>

                    <!-- <button class="btn-outline-light">Shop All<span class="material-symbols-outlined">
                            arrow_forward
                        </span></button> -->

                </ul>


            </li>

            <li class="card-large card-dark" id="sup-cat">
                <div class="card-image"><img id="hot" src="images/hot.png">
                </div>
                <ul>Cold Water CPVC Pipes
                    <li><a href="#">Versatile &amp; Durable</a></li>
                    <li><a href="#">Lightweight</a></li>
                    <li><a href="#">Easy to install &amp; Cost-effective</a></li>
                    <!-- <button class="btn-outline-dark">Shop All<span class="material-symbols-outlined">
                            arrow_forward
                        </span></button> -->
                </ul>

            </li>

            <li class="card-large card-dark" id="sup-bird">
                <div class="card-image"><img id="saman" src="images/saman.png">
                </div>
                <ul>Pvc Material's
                    <li><a href="#">Recyclability <i class="fa fa-recycle" aria-hidden="true"></i></a></li>
                    <li><a href="#">Strong</a></li>
                    <li><a href="#">Furniture</a></li>
                    <!-- <button class="btn-outline-dark">Shop All<span class="material-symbols-outlined">

                        </span></button> -->
                </ul>

            </li>
            <li class="card-large card-light" id="sup-fish">
                <div class="card-image"><img src="images/plumber.png">
                </div>
                <ul>
                    Plumber's Facility
                    <li><a href="#">Recyclability <i class="fa fa-recycle" aria-hidden="true"></i></a></li>
                    <li><a href="#">Available all</a></li>
                    <li><a href="#">Rocks &amp; Decorations</a></li>
                    <!-- <button class="btn-outline-light">Shop All<span class="material-symbols-outlined">
                            arrow_forward
                        </span></button> -->
                </ul>

            </li>
        </ul>
    </section>
    <br>
    <div class="c" align="center" id="knowmore">
        <div class="descard" align="center">
            <div class="card-overlay">
                <h2 class="chead">
                    "भागवत पाइप: पानी की कहानी, हमारी ज़िम्मेदारी"🤍</h2>
            </div>
            <div class="descard-inner">भागवत पाइप की हर बूंद अनमोल है, पानी बचाओ हर पल! जल ही जीवन है, इस
                बात को याद
                रखना हमारे लिए बहुत ज़रूरी है। पानी की कमी आज एक गंभीर समस्या बन चुकी है, इसलिए जल संरक्षण हर किसी की
                ज़िम्मेदारी है।
                <br>
                <br>
                1.जीवन में पानी और प्लंबिंग में भागवत बहोत ही जरूरी है।
                <br>
                ~
                <br>
                2.आज पानी बचाएँ, कल पछताएँ न पाएँ।
                <br>
                ~
                <br>
                3.हर बूंद अनमोल है, व्यर्थ न गवाएं।
                <br>
                ~
                <br>
                4.जल है जीवन का आधार, इसका करें सदैव उपयोग सावधानी से।
                <br>
                ~
                <br>
                5.पानी बचाना हमारा धर्म, निभाएँ सब मिलकर कर्म<br>~<br>~Bhagvatpvc
                <br>
                <br>
            </div>
        </div>
    </div>

    <style>
        .chead {
            padding: 10px;
        }

        .descard {
            --bg: #e8e8e8;
            --contrast: #e2e0e0;
            --grey: #93a1a1;
            position: relative;
            padding: 9px;
            width: 80%;
            background-color: var(--bg);
            border-radius: 35px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        }

        .descard-overlay {
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: repeating-conic-gradient(var(--bg) 0.0000001%, var(--grey) 0.000104%) 60% 60%/600% 600%;
            filter: opacity(10%) contrast(105%);
        }

        .descard-inner {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            padding-top: 15px;
            align-items: center;
            overflow: hidden;
            width: 100%;
            height: 20%;
            background-color: var(--contrast);
            border-radius: 30px;
            /* Content style */
            font-size: 20px;
            font-weight: 200;
            color: #6e6e6e;
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        @media only screen and (max-width: 767px) {
            .descard {
                width: 90% !important;
            }

            .descard-inner {
                overflow-y: scroll;
                scroll-behavior: smooth;
                height: auto;
                color: #0a0a0a;
                width: 100%;
            }

            .piping {
                display: block;
            }



            /* .moblogo {
                display: block;
                bottom: -2em;
                padding-right: 40px;
                height: 100%;
                width: 100%;
            } */

            section.hero {
                background: none;
                background-color: #e7c437;
                align-items: center;
                overflow-y: scroll;

            }

            section.hero h1 {
                font-size: var(--hero-text);
                font-weight: 600;
                line-height: 1.2;
                padding-left: 15px;
                width: 100%;
                color: var(--text-01);
            }
        }
    </style>

    <!-- image slider section  -->

    </div>
    <section id="services">
        <h2>"Quality CPVC & UPVC Pipes for Success" <img width="30px" height="30px" style="background-color: #f9f9f9;" src="images/award.gif" alt="">
        </h2>

        <ul class="services">
            <!-- <li class="card-large card-dark card-wide" id="serv-groom">
                <div class="card-image"><img src="/images/plumber.png">
                </div>
                <ul>
                    Dog Grooming<span class="subtitle">Tail-wagging transformations are our specialty.</span>
                    <li><a href="#">Coat Care</a><span>$80</span></li>
                    <li><a href="#">Nail Care</a><span>$16</span></li>
                    <li><a href="#">Doggie Deluxe Spa Day</a><span>$160</span></li>
                    <button class="btn-filled-dark"><span class="material-symbols-outlined">
                            calendar_month
                        </span>Book Now</button>

                </ul>


            </li> -->
            <li class="card-large card-dark card-wide" id="serv-board">
                <div class="card-imagedo"><img src="images/undraw_going_up_re_86kg.svg">
                </div>
                <ul>
                    <p><i class="fa fa-check-circle" aria-hidden="true"></i> Know Our Product </p>

                    <span class="subtitle">Our
                        CPVC and UPVC pipes are the perfect solution for any
                        plumbing
                        or drainage system. Contact us today to get started on your project.
                        They are durable, easy to install, and resistant to corrosion. At CPVC and UPVC Pipe, we pride
                        ourselves on offering high-quality pipes that meet industry standards.</span>
                    <span class="subtitle">Our commitment to quality and customer satisfaction means you can trust us to
                        provide reliable pipes that meet your specific needs. From their ease of installation to their
                        long-lasting performance, CPVC and UPVC pipes are the smart choice for any project. Contact us
                        today to learn more about our range of top-quality pipes and how they can elevate your plumbing
                        solutions."

                        ~Bhagvatpvc</span>
                    <li><a href="#">pvc</a><span>5mm</span></li>
                    <li><a href="#">pvc Term Boarding</a><span>10mm</span></li>
                    <button class="btn-filled-dark"><span class="material-symbols-outlined">
                            For More : Our Quality Policy
                    </button>
                </ul>

            </li>
        </ul>
    </section>
    <section id="services">
        <h2>Our Services</h2>

        <ul class="services">
            <li class="card-large card-dark card-wide" id="serv-groom">
                <div class="card-image"><img src="images/3d-fluency-piping.png">
                </div>
                <ul>
                    CPVC<span class="subtitle">CPVC pipes for cold water available at different sizes.</span>
                    <li><a href="#">5mm</a><span>₹</span></li>
                    <li><a href="#">10mm</a><span>₹</span></li>
                    <li><a href="#">12mm</a><span>₹</span></li>
                    <button class="btn-filled-dark"><span class="material-symbols-outlined">

                        </span>Contact For Price & Installation</button>

                </ul>


            </li>
            <li class="card-large card-dark card-wide" id="serv-board">
                <div class="card-image"><img src="images/3dhot.png">
                </div>
                <ul>
                    UPVC<span class="subtitle">Hot Water UPVC robust pipe Available at different sizes </span>
                    <li><a href="#">5mm</a><span>₹</span></li>
                    <li><a href="#">10mm</a><span>₹</span></li>
                    <button class="btn-filled-dark"><span class="material-symbols-outlined">

                        </span>Contact For Price & Installation</button>
                </ul>

            </li>
        </ul>
    </section>


    <section id="locate">

        <div>
            <h2>Location &amp; Hours</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7382.0006273073195!2d72.62075722253975!3d22.31582789514116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f06a6b5ea46af%3A0x4dec950277e0854d!2sKhambhat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1708715486779!5m2!1sen!2sin" width="80%" height="450" style="border:0;border-radius:15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br>
            <p>Our knowledgeable and friendly staff is always ready to assist you in making the best choices for your
                furry,
                feathered, or finned friends.</p>
            <div class="btn-group">
                <a href="#starting"><button class="btn-filled-dark"><span class="material-symbols-outlined">
                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                        </span>Back to Top</button></a>
                <a href="contactfinal.php"><button class="btn-outline-dark btn-hover-color"><span class="material-symbols-outlined">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                        </span> Contact Us</button></a>
            </div>
        </div>
    </section>


    <?php
    include 'footer.html';
    ?>


</body>

</html>
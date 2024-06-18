<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhagvat Pipe - Quality</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <style>
        body {
            background-color: #f0f0f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            color: #6c5ce7;
            text-align: center;
            font-weight: bold;
            font-size: 2.5rem;
            margin-bottom: 40px;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .text-center {
            text-align: center;
        }

        .navbar {
            background-color: #6c5ce7;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa !important;
        }

        .section-title {
            color: #6c5ce7;
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 20px;
            animation: fadeInUp 1s ease-out;
        }

        .photo-container {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            animation: slideInLeft 1s ease-out;
        }

        .photo-container img {
            max-width: 300px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: slideInRight 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>
    <header>
        <!-- <div class="banner">Get free delivery on orders over Rs.1500...<i class="fas fa-truck-pickup fa-lg fa-fw"></i> -->
        </div>
        <nav class="nav">
            <i class="uil uil-bars navOpenBtn"></i>
            <a href="#" class="logo">Bhagvat Pipe</a>
            <ul class="nav-links">
                <i class="uil uil-times navCloseBtn"></i>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./gallary.php">Gallary</a></li>
                <li><a href="#prod">Products</a></li>
                <li><a href="./aboutus.php">About Us</a></li>
                <li><a style="color:yellow;" href="./quality.php">Quality Policy</a></li>
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
            body {
                font-family: Trebuchet MS, sans-serif;
                font-weight: 500;
            }

            :root {
                --text-01: #45413e;
                --light-01: #f9f9f9;
                --light-02: #ffffff;
                --brand-01: #0c4ad5;
                --brand-02: #e7c437;
                --card-hover: 0px 4px 24px rgba(0, 0, 0, 0.15);
                --card-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
                --hover-timing: all 0.2s ease;
                --nav-card-size: 240px;

                -webkit-font-smoothing: antialiased;
                font-smoothing: antialiased;
                scroll-behavior: smooth;
            }



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

                .logo {
                    padding-right: 120px;
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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="animated fadeInUp">Quality Policy</h1>
                <p>We at Bhagvat pipe aim to meet our customer requirements through continual improvement of our quality
                    management system. We shall maintain industrial as well as organizational excellence through
                    visionary leadership and innovative efforts. Innovation product with optimum quality shall be the
                    focused area for Bhagvat forever.</p>
                <p class="section-title">Growing market:</p>
                <p>The global CPVC pipe market is expected to grow at a significant rate in the coming years, driven by
                    factors such as increasing urbanization, rising demand for hot and cold water distribution systems,
                    and growing investments in infrastructure development.</p>
                <div class="photo-container">
                    <img src="images/bpvc/1.jpg" alt="CPVC pipe used in plumbing">
                    <img src="images/bpvc/2.jpg" alt="Recycled CPVC pipes">
                    <img src="images/bpvc/3.jpg" alt="Flame-retardant CPVC pipes">
                    <img src="images/bpvc/4.jpg" alt="CPVC pipes used in chemical processing">
                    <img src="images/bpvc/5.jpg" alt="LEED certified building">
                    <img src="images/bpvc/6.jpg" alt="CPVC pipe standards">
                </div>
                <p class="section-title">Sustainability:</p>
                <p>CPVC pipes are becoming increasingly popular as a sustainable alternative to traditional materials
                    such as metal and concrete. They are lightweight, recyclable, and have a long lifespan, which can
                    help to reduce greenhouse gas emissions and conserve resources.</p>
                <p class="section-title">Innovation:</p>
                <p>Manufacturers are constantly innovating new technologies to improve the performance and functionality
                    of CPVC pipes. Some of the latest trends include the development of flame-retardant pipes,
                    UV-resistant pipes, and pipes with improved chemical resistance.</p>
                <p class="section-title">Increased adoption in new applications:</p>
                <p>CPVC pipes are being used in an increasing number of applications beyond traditional plumbing, such
                    as in the automotive, chemical processing, and food and beverage industries. This is due to their
                    unique properties, such as their high strength, durability, and resistance to corrosion.</p>
                <p class="section-title">Focus on green building:</p>
                <p>As the focus on green building practices continues to grow, CPVC pipes are becoming increasingly
                    popular due to their sustainability benefits. They are often used in LEED-certified buildings and
                    other environmentally friendly construction projects.</p>
                <p class="section-title">Regulations and standards:</p>
                <p>The development of new regulations and standards for CPVC pipes is helping to ensure the quality and
                    safety of these products. This is giving specifiers and end users greater confidence in choosing
                    CPVC pipes for their projects.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <?php
    include 'footer.html';
    ?>

    <!-- Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
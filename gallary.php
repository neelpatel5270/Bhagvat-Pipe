<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhagvat pipe | Gallary</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
    <header></header>
    <nav class="nav">
        <i class="uil uil-bars navOpenBtn"></i>
        <a href="#" class="logo">Bhagvat Pipe</a>
        <ul class="nav-links">
            <i class="uil uil-times navCloseBtn"></i>
            <li><a href="./index.php">Home</a></li>
            <li><a style="color:yellow;" href="./headervision.php" href="#">Gallary</a></li>
            <li><a href="./index.php#prod">Products</a></li>
            <li><a href="./aboutus.php">About Us</a></li>
            <li><a href="./quality.php">Quality Policy</a></li>
            <li><a>Vision</a></li>
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
            width: auto;
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

            .logo {
                padding-right: 125px;
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

    <div style="display: flex; align-items: center; justify-content: center;padding:4%;" class="heading">
        <img style="height: 100px;" src="images/bhagvatlogo.png" alt="">
        <h1 style="margin-left: 10px;font-family:cursive;">Bhagvat pipe Image Gallery</h1>
    </div>
    <style>
        @keyframes rotate360 {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .heading img {
            animation: rotate360 10s linear infinite;
            font-family: sans-serif
        }
    </style>
    <hr>
    <main class="main">
        <div class="container">
            <div class="card">
                <div class="card-image">
                    <a href="images/bpvc/1.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                        <img src="images/bpvc/1.jpg" alt="Image Gallery">
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href=images/bpvc/2.jpg data-fancybox="gallery" data-caption="Caption Images 1">
                        <img src=images/bpvc/2.jpg alt="Image Gallery">
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href=images/bpvc/3.jpg data-fancybox="gallery" data-caption="Caption Images 1">
                        <img src=images/bpvc/3.jpg alt="Image Gallery">
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href=images/bpvc/4.jpg data-fancybox="gallery" data-caption="Caption Images 1">
                        <img src=images/bpvc/4.jpg alt="Image Gallery">
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href=images/bpvc/5.jpg data-fancybox="gallery" data-caption="Caption Images 1">
                        <img src=images/bpvc/5.jpg alt="Image Gallery">
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href=images/bpvc/6.jpg data-fancybox="gallery" data-caption="Caption Images 1">
                        <img src=images/bpvc/6.jpg alt="Image Gallery">
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href=images/bpvc/7.jpg data-fancybox="gallery" data-caption="Caption Images 1">
                        <img src=images/bpvc/7.jpg alt="Image Gallery">
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href=images/bpvc/8.jpg data-fancybox="gallery" data-caption="Caption Images 1">
                        <img src=images/bpvc/8.jpg alt="Image Gallery">
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href=images/bpvc/9.jpg data-fancybox="gallery" data-caption="Caption Images 1">
                        <img src=images/bpvc/9.jpg alt="Image Gallery">
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href=images/bpvc/10.jpg data-fancybox="gallery" data-caption="Caption Images 1">
                        <img src=images/bpvc/10.jpg alt="Image Gallery">
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href=images/bpvc/11.jpg data-fancybox="gallery" data-caption="Caption Images 1">
                        <img src=images/bpvc/11.jpg alt="Image Gallery">
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href=images/bpvc/12.jpg data-fancybox="gallery" data-caption="Caption Images 1">
                        <img src=images/bpvc/12.jpg alt="Image Gallery">
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
<style>
    *,
    *::before,
    *::after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style: none;
        list-style-type: none;
        text-decoration: none;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
    }

    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1rem;
        font-weight: normal;
        line-height: 1.5;
        color: #252a32;
        background: #ffffff;
    }

    .container {
        max-width: 80rem;
        width: 100%;
        padding: 4rem 2rem;
        margin: 0 auto;
    }

    .main .container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 1rem;
        justify-content: center;
        align-items: center;
    }

    .main .card {
        color: #252a32;
        border-radius: 25px;
        background: #ffffff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);
    }

    .main .card-image {
        position: relative;
        display: block;
        width: 100%;
        padding-top: 70%;
        background: #ffffff;
    }

    .main .card-image img {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 15px;
    }

    @media only screen and (max-width: 600px) {
        .main .container {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 1rem;
        }
    }
</style>
<script>
    // Fancybox Configuration
    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close"
        ],
        loop: false,
        protect: true
    });
</script>

</html>
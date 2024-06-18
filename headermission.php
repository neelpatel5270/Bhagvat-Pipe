<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mission</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
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

    body {
      font-family: Trebuchet MS, sans-serif;
      font-weight: 500;
      transition: var(--hover-timing);
      background: var(--light-01);
    }

    .container {
      /* margin-top: 50px; */
    }

    h1 {
      color: #6c5ce7;
      text-align: center;
      font-weight: bold;
      font-size: 2.5rem;
      margin-bottom: 40px;
    }

    .mission-card {
      background-color: #fff;
      color: #444;
      padding: 30px;
      margin-bottom: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .mission-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .mission-card p {
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .mission-card ol {
      margin-top: 10px;
      padding-left: 20px;
    }

    .mission-card li {
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .navbar {
      background-color: #625aa1;
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
  </style>
</head>

<body>
  <header>
    </div>
    <nav class="nav">
      <i class="uil uil-bars navOpenBtn"></i>
      <a href="#" class="logo">Bhagvat Pipe</a>
      <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./gallary.php">Gallary</a></li>
        <li><a href="./index.php#prod">Products</a></li>
        <li><a href="./aboutus.php">About Us</a></li>
        <li><a href="./quality.php">Quality Policy</a></li>
        <li><a href="./headervision.php">Vision</a></li>
        <li><a style="color:yellow;" href="./headermission.php">Mission</a></li>
        <li><a href="./contactfinal.php">Contact Us</a></li>
      </ul>
      <i hidden class="uil uil-search search-icon" id="searchIcon"></i>
      <div hidden class="search-box">
        <i hidden class="uil uil-search search-icon"></i>
        <input hidden type="text" placeholder="Search here..." />
      </div>
    </nav>
    <style>
      .banner {
        background: var(--brand-01);
        color: var(--light-01);
        font-size: 14px;
        font-weight: 500;
        line-height: 1.2;
        padding: 8px 24px;
        display: flex;
        align-items: center;
        justify-content: center;
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

        .logo {
          padding-right: 123px;
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
  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Mission</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="mission-card">
          <p>∆ To manufacture high-quality, durable, and reliable CPVC and UPVC pipes and fittings that meet or exceed
            industry standards.</p>
        </div>
        <div class="mission-card">
          <p>∆ To provide customers with excellent customer service and support.</p>
        </div>
        <div class="mission-card">
          <p>∆ To be a leader in the CPVC and UPVC pipe industry in terms of innovation, sustainability, and safety.</p>
        </div>
        <div class="mission-card">
          <p>∆ To create a safe and healthy work environment for employees.</p>
        </div>
        <div class="mission-card">
          <p>∆ To contribute to the economic development of the community.</p>
        </div>
        <div class="mission-card">
          <p>∆ To help plumbers achieve providing innovative, best-in-class products with expertise and excellence.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Image Section for Logo -->
  <section class="logo-section text-center py-4">
    <!-- <img src="/images/logo.png" alt="Bhagvat Pipe Logo" style="width: 200px; height: auto;"> -->
  </section>
  <?php
  include 'footer.html';
  ?>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
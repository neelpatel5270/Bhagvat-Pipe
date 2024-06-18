<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vision</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
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
      background-color: #f0f0f0;
      font-family: Trebuchet MS, sans-serif;
      font-weight: 500;
    }

    .container {
      margin-top: 50px;
    }

    h1 {
      color: #4a98f7;
      text-align: center;
      font-weight: bold;
      font-size: 2.5rem;
      margin-bottom: 40px;
    }

    .vision-card {
      background-color: #fff;
      color: #444;
      padding: 30px;
      margin-bottom: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .vision-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .vision-card p {
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .vision-card ol {
      margin-top: 10px;
      padding-left: 20px;
    }

    .vision-card li {
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .navbar {
      background-color: #4a98f7;
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
    <!-- <div class="banner">Get free delivery on orders over Rs.1500...<i class="fas fa-truck-pickup fa-lg fa-fw"></i> -->
    </div>
    <nav class="nav">
      <i class="uil uil-bars navOpenBtn"></i>
      <a href="#" class="logo">Bhagvat Pipe</a>
      <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="#">Home</a></li>
        <li><a href="./gallary.php">Gallary</a></li>
        <li><a href="#prod">Products</a></li>
        <li><a href="./aboutus.php">About Us</a></li>
        <li><a href="./quality.php">Quality Policy</a></li>
        <li><a style="color:yellow;" href="./headervision.php">Vision</a></li>
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

  </header>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 style="color: #6C5CE7;">Vision</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="vision-card">
          <p>"To be the India's most trusted provider of sustainable and innovative CPVC and UPVC pipe solutions,
            ensuring responsible and efficient water management for generations to come." (Focuses on impact,
            leadership, and sustainability)</p>
        </div>
        <div class="vision-card">
          <p>"To become the recognized leader in high-performance CPVC and UPVC pipes, known for exceptional quality,
            unwavering customer service, and a commitment to employee well-being." (Focuses on leadership, values, and
            internal culture)</p>
        </div>
        <div class="vision-card">
          <p>"To revolutionize the plumbing industry with cutting-edge CPVC and UPVC technology, enabling efficient,
            affordable, and accessible water systems for all." (Focuses on impact, innovation, and accessibility)</p>
        </div>
        <div class="vision-card">
          <p>To maximize the product placement & expand the range of CPVC and UPVC product. The focus is to become no.1
            in pure & excellent quality for CPVC and UPVC pipes & fittings in India.</p>
          <ol>
            <li>To fittings all Home, office, factory & all construction in India</li>
            <li>To inspire moments at optimism and happiness.</li>
            <li>To create value and make a difference.</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Image Section for Logo -->
  <section class="logo-section text-center py-4">
    <!-- <img src="/images/bhagvatlogo.png" alt="Bhagvat Pipe Logo" style="width: 200px; height: auto;"> -->
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<style>
    .header-main {
      position: sticky;
      top: 0;
      z-index: 1000; /* Ensure it stays above other content */
    }
  </style>
  <header>
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-12 right_info">
            <p><i class="fa fa-map-marker"></i> 10 Praed Street / Abc road Xyz</p>
          </div>
          <div class="col-md-7 col-sm-12 left_info">
            <ul>
              <li><i class="fa fa-mobile-alt"></i><a href="#">+123456789 0987</a></li>
              <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">Testexample@gmail.com</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="header-main">
      <div class="container">
        <nav id='cssmenu'>
          <div class="logo">
            <a href="https://codepen.io/anupkumar92/"><img src="https://i.ibb.co/QDy827D/ak-logo.png"></a>
          </div>
          <div id="head-mobile"></div>
          <div class="button"></div>
          <ul>
            <li class='active'><a href='#'>Home</a></li>
            <li><a href='#'>Services</a>
              <ul>
                <li><a href='#'>Services 1</a></li>
                <li><a href='#'>Services 2</a>
                  <ul>
                    <li><a href='#'>Services 21</a></li>
                  </ul>
                </li>

                <li><a href='#'>Services 3</a></li>
                <li><a href='#'>Services 4</a></li>
              </ul>
            </li>
            <li><a href='#'>Reviews</a></li>
            <li><a href='#'>Special Offers</a></li>
            <li><a href='#'>Contact</a></li>
            <li><a href='#'>Book Online</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <?php include('footer.php') ?>
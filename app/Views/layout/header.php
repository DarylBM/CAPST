<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ridex - Rent your favourite car</title>
  

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="css/home.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

    <div class="overlay" data-overlay></div>

<a href="/home" class="logo">
  <img src="images/IMAHE.jpg" alt="Earl Garahe Car Trading Logo">
</a>



      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="/home" class="navbar-link" data-nav-link>Home</a>
          </li>
          <li>
            <a href="/rent" class="navbar-link" data-nav-link>Rent</a>
          </li>
          <li>
            <a href="/car" class="navbar-link" data-nav-link>Shop</a>
          </li>
          <li>
            <a href="#getstart" class="navbar-link" data-nav-link>Get Started</a>
          </li>

        </ul>
      </nav>
      <div class="header-actions">
        <div class="header-contact">
          <a href="tel:88002345678" class="contact-link">8 800 234 56 78</a>

          <span class="contact-time">Mon - Sat: 9:00 am - 8:00 pm</span>
        </div>

        <a href="#featured-car" class="btn" aria-labelledby="aria-label-txt">
          <ion-icon name="car-outline"></ion-icon>

          <span id="aria-label-txt">Explore cars</span>
        </a>

        <div class="dropdown">
        <a href="#" class="profile-icon" aria-label="Profile" id="profileButton">
  <ion-icon name="person-outline"></ion-icon>
</a>
  <div class="dropdown-content" id="dropdownContent">
    <a href="/prof">Profile</a>
    <a href="/logout">Logout</a>
  </div>
</div>

      </div>

    </div>
  </header>


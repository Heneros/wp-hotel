<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <title>Hotel Booking Freebie</title>
    <?php wp_head(); ?>
</head> 
<body> 

<div class="wrapper">
    <div class="container">
        <section class="nav__top">
            <p class="questions">
                <b  class="one"> Questions? Need Help?</b>   Call us on
                <a href="tel:+123-456-1500">(+123) 456 1500</a> 
            </p>
            <p class="gift__card">
                <img src="img/gift.svg" alt="gift">
                    BTP Gift Card
            </p> 
            <p>    
                <img src="img/star.svg" alt="star">
                Loyalty Program
            </p>
        </section>
    <div class="container">
        <section id="up" class="navbar">
            <a class="logo navbar__element" href="#!">
            BEST
             <span>TOUR</span>  
              PLAN
            </a>
            <div class="form-search navbar__element">
                <form method="POST">
                    <input type="search" placeholder="Search Location" name="search" class="search__navbar">
                    <span class="search">
                        <img src="img/search.svg" alt="">
                    </span>
                </form>
            </div>
            <div class="user__information navbar__element">
                <a href="#!" class="card"  >
                    <img src="img/card.svg"alt="card">
                    <p class="num__card">2</p>
                </a>
                <a  href="#!" class="profile">
                    <img src="img/profile.jpg" class="profile__picture" alt="profile picture">
                   <span class="user">Yagami</span> 
                </a>
                   <div class="dropdown">
                    <button class="dropbtn">
                        <img src="img/sign-down.svg" alt="">
                    </button>
                    <div class="dropdown-content">
                    <a href="#!">Registration</a>
                    <a href="#!">Log out</a>
                    <a href="#!">Information</a>
                    </div>
                  </div>
            </div>
        </section>
    </div>
    </div>    
    </div>

    <div class="navbar__bottom">
        <div class="wrapper">
        <div class="container">
            <button class="menu__btn">
                <div class="menu__btn-line"></div>
                <div class="menu__btn-line"></div>
                <div class="menu__btn-line"></div>
              </button>
        <!-- <ul class="menu-mobile__list" id="menu__nav">
            <li 
             class="menu-mobile__item"
            ><a class="menu-mobile__link" href="#hotels">Hotels</a></li>
            <li 
             class="menu-mobile__item"
            ><a href="#reviews">Reviews</a></li>
            <li 
             class="menu-mobile__item"
            ><a class="menu-mobile__link" href="#subscribe-us">Subscribe Us</a></li>
            <li 
             class="menu-mobile__item"
            ><a class="menu-mobile__link" href="#activities">Activities</a></li>
            <li 
             class="menu-mobile__item"
            ><a class="menu-mobile__link" href="#contact-us">Contact Us</a></li>
        </ul> -->
        <?php
        
        wp_nav_menu([
            'theme_location' => 'menu-header',
            'container'      => 'ul',
            'container_id'   => 'menu__nav',
            'menu_class'     => 'menu-mobile__list'
        ]);
        ?>
    </div>
    </div>
</div>
    </div>
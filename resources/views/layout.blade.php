<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;600;700&family=Old+Standard+TT:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./js/header.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <div class="header__menu">
                <img src="./assets/header/header_open_icon.png" alt="menuOpen" id="openMenu" class="active">
                <img src="./assets/header/header_close_icon.png" alt="menuClose" id="closeMenu">
            </div>
            <div class="header__content">
                <a href="index">
                    <div class="header__content-logo">
                        <p class="header__content-logo logo__letter">H</p>
                        <div class="header__content-name logo__name">
                            <p>HOTEL</p>
                            <p>MIRANDA</p>
                        </div>
                    </div>                    
                </a>
                <div class="header__content-menu">
                    <ul>
                        <li><a href="./aboutUs.php">About us</a></li>
                        <li><a href="./rooms.php">Rooms</a></li>
                        <li><a href="./offers.php">Offers</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="header__content-options">
                    <img src="./assets/header/header_user_icon.png" alt="userIcon">
                    <img src="./assets/header/header_search_icon.png" alt="searchIcon">
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="footer__main">
            <div class="footer__logo">
                <span class="logo__letter">
                    H
                </span>
                <div class="logo__name">
                    <P class="logo__name-main">HOTEL</P>
                    <p>MIRANDA</p>
                </div>
            </div>
            <p class="footer__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Velit veniam sapiente aperiam itaque consequatur iste laboriosam dicta esse fugiat
                vitae laborum, vero excepturi quod iure voluptatem. Blanditiis eveniet itaque odit?
            </p>
            <div class="footer__links">
                <a href="#">
                    <img src="./assets/footer/footer_facebook_icon.png" alt="facebookIcon">
                </a>
                <a href="#">
                    <img src="./assets/footer/footer_twitter_icon.png" alt="twitterIcon">
                </a>
                <a href="#">
                    <img src="./assets/footer/footer_behance_icon.png" alt="behanceIcon">
                </a>
                <a href="#">
                    <img src="./assets/footer/footer_linkedin_icon.png" alt="linkedinIcon">
                </a>
                <a href="#">
                    <img src="./assets/footer/footer_youtube_icon.png" alt="youtubeIcon">
                </a>
            </div>
            <div class="footer__services">
                <h4 class="services__title">
                    Services.
                </h4>
                <div class="services__containter">
                    <ul class="services__list">
                        <li>Resturant & Bar</li>
                        <li>Swimming Pool</li>
                        <li>Wellness & Spa</li>
                        <li>Restaurant</li>
                        <li>Conference Room</li>
                        <li>Coctail Party House</li>
                    </ul>
                    <ul class="services__list">
                        <li>Gaming Zone</li>
                        <li>Marriage Party</li>
                        <li>Part Planning</li>
                        <li>Tour Consultancy</li>
                    </ul>                    
                </div>
            </div>
            <div class="footer__contact">
                <h4 class="contact__title">
                    Contact Us.
                </h4>
                <div class="contact-footer">
                    <img src="./assets/footer/footer_number_icon.png" alt="numberIcon">
                    <div>
                        <h4>Phone Number</h4>
                        <p>+987 876 765 76 577</p>                        
                    </div>
                </div>
                <div class="contact-footer">
                    <img src="./assets/footer/footer_mail_icon.png" alt="mailIcon">
                    <div>
                        <h4>Phone Number</h4>
                        <p>+987 876 765 76 577</p>                        
                    </div>
                </div>
                <div class="contact-footer">
                    <img src="./assets/footer/footer_location_icon.png" alt="locationIcon">
                    <div>
                        <h4>Phone Number</h4>
                        <p>+987 876 765 76 577</p>                        
                    </div>
                </div>
            </div>            
        </div>
        <div class="footer__copyrigth">
            <p>
                Copyright By Oscar Alcivar - 2023
            </p>
            <p>
                Terms of use    |    Privacy Environmental Policy
            </p>
        </div>
    </footer>
</body>
</html>
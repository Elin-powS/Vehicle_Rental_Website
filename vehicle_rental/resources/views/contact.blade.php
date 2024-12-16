<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vehicle Rental Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b47c604ef5.js"></script>
    @vite('resources/css/app.css', 'vendor/courier/build')

</head>

<body>
    <header class="fixed-top">
        <a href="{{route('home')}}" class="logo"><Img src="/image/logo.png" alt="Image Loading"></a>
        <a href="{{route('home')}}" class="titleTxt" style="color: aliceblue;">Vehicle Rental Website</a>

        <div class="bx bx_menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('vehicle')}}">Vehicle</a></li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{route('About')}}">About</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            @Auth
            <li><a href="{{route('reservation_info')}}">Reservation</a></li>
            @endauth
        </ul>

        <div class="header-btn">
            @Auth
            <a href="{{route('logout')}}" class="nav-link" style="color: aliceblue;">Log Out</a>
            @else
            <a href="{{route('signin')}}" class="Sign-In">Sign In</a>
            <a href="{{route('signup')}}" class="Sign-Up">Sign Up</a>
        </div>
        @endauth
        </div>
    </header>
    <!-- <section class="home" id="home">

        <div class="text leftHome">
            <p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14609.335828342626!2d90.4183073!3d23.73546765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85c366afdaf%3A0x63cbcd8b4dfb9d3c!2sMotijheel%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1680023353034!5m2!1sen!2sbd" width="650" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>



        <div class="rightHome">
            <h1> A Easy Solution for Renting Vehicle</h1>
        </div>

    </section> -->


    <section class="contact-page-section">
        <div class="container">
            <div class="sec-title">
                <div class="title">Contact Us</div>
                <h2><span style="color: teal;">Let's Get in Touch.</span></h2>
            </div>
            <div class="inner-container">
                <div class="row clearfix">

                    <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                        <div class="inner-column">

                            <!--Contact Form-->
                            <div class="text leftHome">
                                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.1650780737796!2d90.4222365!3d23.7057983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9b02954d83d%3A0xfcb7c0cb46de2cbd!2s40%20Sharafat%20Gonj%20Ln%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1688406312601!5m2!1sen!2sbd" width="700" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                            </div>
                            <!--End Contact Form-->

                        </div>
                    </div>

                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <h2>Contact Info</h2>
                            <ul class="list-info">
                                <li><i class="fas fa-globe"></i>40 shorafatgonj Lane, Dhaka 1204.</li>
                                <li><i class="far fa-envelope"></i>VehicleRent@gmail.com</li>
                                <li><i class="fas fa-phone"></i>1-234-567-890 <br> 1-234-567-890</li>
                            </ul>
                            <ul class="social-icon-four">
                                <li class="follow">Follow on: </li>
                                <li><a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com"><i class="fab fa-instagram instagram-icon"></i></a></li>
                                <li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.whatsapp.com"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-main">
        <div class="footer-main-flex">
            <div class="footer-sitemap">
                <ul>
                    <li><a href="http://127.0.0.1:8000">Home</a></li>
                    <li><a href="#">Search</a></li>
                    <li><a href="">Property</a></li>
                    <li><a href="#">Booking</a></li>
                    <li><a href="#">Host Registration</a></li>
                    <li><a href="#">DashBoard</a></li>

                </ul>
                <ul>
                    <li><a href="http://127.0.0.1:8000/about">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="£">FAQ</a></li>
                    <li><a href="#">Privace Policy</a></li>
                    <li><a href="#">Blog</a></li>

                </ul>
                <ul>
                    <li>
                        <p>GET IN TOUCH</a>
                    </li>
                    <li>
                        <p>TLF 12 34 56 78</a>
                    </li>
                    <li>
                        <p>sopnil493@gmail.com</a>
                    </li>
                    <li>
                        <p>40 shorafatgonj lane gandaria Dhaka-1204</a>
                    </li>

                </ul>

            </div>
        </div>

        <div class="footer-link">
            <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram instagram-icon"></i></a>
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https://www.whatsapp.com"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
        </div>


        </div>

        <div class="footer-copyright">
            <p>Copyright @2023 Vehicle Rental. All Rights Reserved. </p>
        </div>
    </footer>
    <!-- End Footer -->

</body>

</html>
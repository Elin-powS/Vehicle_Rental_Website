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

    <section class="home2" style="margin-top: 7%;">
        <div class="card cardhome" style="width: 18rem;">
            <img class="card-img-top" src="/image/bike.png" alt="Image Loading..">
            <div class="card-body">
                <h5 class="card-title">Bike</h5>
                <p class="card-text">Bike.</p>
                <a href="{{route('vehicle')}}" class="btn btn-primary" style="color: aliceblue;">Reservation</a>
            </div>
        </div>

        <div class="card cardhome" style="width: 18rem;">
            <img class="card-img-top" src="/image/service1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Car</h5>
                <p class="card-text">Car.</p>
                <a href="{{route('vehicle')}}" class="btn btn-primary" style="color: aliceblue;">Reservation</a>
            </div>
        </div>

        <div class="card cardhome" style="width: 18rem">
            <img class="card-img-top" src="/image/bus.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Bus</h5>
                <p class="card-text">More than 24 seater Bus.</p>
                <a href="{{route('vehicle')}}" class="btn btn-primary" style="color: aliceblue;">Reservation</a>
            </div>
        </div>
        
      

    </section>

    <section class="home2" >

    <div class="card cardhome" style="width: 18rem;">
            <img class="card-img-top" src="/image/vr_eats.jpg" alt="Image Loading.." >
            <div class="card-body">
                <h5 class="card-title">VR Eats</h5>
                <p class="card-text">This service Right Now Not available.</p>
                <a href="{{route('services')}}" class="btn btn-primary" style="color: aliceblue;">Reservation</a>
            </div>
        </div>


        <div class="card cardhome" style="width: 18rem;">
            <img class="card-img-top" src="/image/courier.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Parcel Courier.</h5>
                <p class="card-text">This service Right Now Not available.</p>
                <a href="{{route('services')}}" class="btn btn-primary" style="color: aliceblue;">Reservation</a>
            </div>
        </div>

        <div class="card cardhome" style="width: 18rem;">
            <img class="card-img-top" src="/image/cng.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Auto CNG.</h5>
                <p class="card-text">This service Right Now Not available.</p>
                <a href="{{route('services')}}" class="btn btn-primary" style="color: aliceblue;">Reservation</a>
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
            <a href="https://www.facebook.com"><i class="fab fa-facebook" ></i></a>
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
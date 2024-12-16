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

    <h1 class="qhead" style="margin-top: 5%;">Reservations Details.</h1>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>place from</th>
                    <th>place to</th>
                    <th>pick_up Date</th>
                    <th>pick_up Time</th>
                    <th>Return Date</th>
                    <th>Return Time</th>
                    <th>Contact Number</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($info_reservations as $info_reservation)
                    <tr>
                    <td>{{$info_reservation->id}}</td>
                    <td>{{$info_reservation->Username}}</td>
                    <td>{{$info_reservation->from_place}}</td>
                    <td>{{$info_reservation->to_place}}</td>
                    <td>{{$info_reservation->pick_up_date}}</td>
                    <td>{{$info_reservation->pick_up_time}}</td>
                    <td>{{$info_reservation->return_date}}</td>
                    <td>{{$info_reservation->return_time}}</td>
                    <td>{{$info_reservation->contact_number}}</td>
                    <td>Status</td>
                </tr> 
                @endforeach
            </tbody>

        </table>
    </div>



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
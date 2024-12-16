<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://kit.fontawesome.com/b47c604ef5.js"></script>
    @vite('resources/css/app.css', 'vendor/courier/build')

    </head>
    </head>
  <body  style="height:800px">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>

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


    <div class ="container1"  style="margin:160px">
    
    <div class="mt-5">
        @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        </div>
        @endif

        @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif

    </div>
      <form action="{{route('reservation_post')}}" method="post" class="ms-auto me-auto mt-3" style="width:500px">
      @csrf
      <div class="mb-3" >
        <Img class="mx-auto d-block" src="/image/logo.png" alt="Image Loading" width = "120px" height = "120px" >
  </div>
    

  <div class="mb-3" style="margin-left: 15%;">
        <h1 class="mx-auto" style="color: teal;">Vehicle Rental Website</h1>
  </div>

  <div class="mb-3">
    <label class="form-label">Address From</label>
    <input type="address" class="form-control" name="Address_from">
  </div>

  <div class="mb-3">
    <label class="form-label">Address To</label>
    <input type="address" class="form-control" name="Address_to">
  </div>

  <div class="mb-3">
    <label class="form-label">Contact Number</label>
    <input type="Phone Number" class="form-control" name="Contact_Number">
  </div>
  <div class="mb-3">
    <label class="form-label">Pick up Date</label>
    <input type="date" class="form-control" name="PUD">
  </div>
  <div class="mb-3">
    <label class="form-label">Pick up Time</label>
    <input type="time" class="form-control" name="PUT">
  </div>

  <div class="mb-3">
    <label class="form-label">Return Date</label>
    <input type="date" class="form-control" name="RD">
  </div>

  <div class="mb-3">
    <label class="form-label">Return Time</label>
    <input type="time" class="form-control" name="RT">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Reservation</button>
</form>
</div>
    



     <!-- Footer -->
     <footer class="footer-main" >
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
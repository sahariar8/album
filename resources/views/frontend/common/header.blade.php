<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/style.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{asset('/')}}frontend/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="{{asset('/')}}frontend/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      ul>li>a{
        text-decoration: none;
      }
    </style>
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-house"></i> Home</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Album</a></li>
                            <li><a href="cart.html"><i class="fa-solid fa-address-book"></i> Contact</a></li>
                            <li><a href="{{route('register')}}"><i class="fa fa-user-edit"></i> Register</a></li>
                            <li><a href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1">
                   <ul class="list-unstyled">
                    <li style="margin-top: 9px;"><a href="{{route('dashboard')}}"><i class="fa-solid fa-user-secret"></i> Admin</a></li>
                   </ul>
                </div>
            </div>
        </div>
    </div>
     <!-- End header area -->
    
    
    
    
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<meta name = "keywords" content = "" />
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <script src="https://kit.fontawesome.com/9ddc0bba90.js" crossorigin="anonymous"></script>
    
<!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color:#E5E5E5;">

<div  class="container">
    <div class="row">

    <div class="col ">
    <h1 class="parceldata  mt-4">Parcel<span style="color:#66B145">Data</span></h1>
    </div>
    <div class="col mt-3 justify-content-end align-items-end d-flex">

    <a href="/login " class="btn">Log In</a>
       <a href="/signup"  class="btn ml-3">Sign Up</a>
    </div>
    </div>
</div>
<div class="container container-sm mt-4 mb-5">
    <div class="row">
        <div class="col-lg-3  ">
            <div class="table1">
               <center> <img src="{{asset('images/person.jpg')}}" alt="" class="image-fluid rounded-circle mt-4 image-center" width="70px" 
height= "70px"></center>
<div class="mt-5 text-center">
            <a href="" class="text1 ">Overview</a>
            </div>
            <div class="mt-4 text-center">
            <a href="" class="text1 ">Workload</a>
            </div>
            <div class="mt-4 text-center">
            <a href="" class="text1 ">Drivers</a>
            </div>
            <div class="mt-4 text-center">
            <a href="" class="text1 ">Payments</a>
            </div>
            <div class="mt-4 text-center">
            <a href="" class="text1 ">Search</a>
            </div>
            <div class=" text-center marginchat">
            <a href="" class="text1 "> <img src="{{asset('images/chat.png')}}" alt="">Chat</a>
            </div>
            
            </div>
        
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col ">
                    <a href="" class="btn tablebutton">Today</a>
                </div>
                <div class="col mr-4">
                <input type="text" placeholder="Search" class="form-control log3">                </div>
                <div class="col mr-3">
                <input type="date" placeholder="Delivered" class="form-control log3">                </div>
                <div class="col mr-3">
                <input type="date" placeholder="Delivered" class="form-control log3">                </div>
            </div>
         <div class="row mt-5">
             <div class="col">
                 <div class="dashoard mb-4"></div>
                 <div class="dashoard mb-4"></div>
                 

                 
             </div>
             <div class="col">
             <div class="dashoard mb-4"></div>
             <div class="dashoard mb-4"></div>
             
             </div>
             <div class="col-lg-3 mr-5 ">
                 <div class="member"></div>
             </div>

         </div>
         
        </div>
        
    </div>
</div>

</body>
</html>

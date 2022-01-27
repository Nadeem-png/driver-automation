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
<body style="background-color:;">
<div class="" style="background-image: url({{asset('images/map.png')}});" heignt="720px">
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

<div class="container mt-5">
    <div class="row">
        <div class="col py-5 px-4 ">
  <h1 class="automation">Driver<span style="color:#66B145"> Automation</span> </h1>
  <h3 class="tracking">Real Time Tracking</h3>
  <div class="row mt-4 display ">
      <div class="col">
<p class="   "><i class="fas fa-clipboard-list fa-1x p-2 bg-success text-white rounded-circle"></i> <i class="fas fa-ellipsis-h text-success ml-2 fa-1x"></i><i class="fas fa-ellipsis-h text-success fa-1x"></i>

</p>
      </div>
      <div class="col ">
      <p class="   "><i class="fas fa-box fa-1x p-2 bg-success mr-4 text-white rounded-circle"></i><i class="fas fa-ellipsis-h text-success ml-2 fa-1x"></i><i class="fas fa-ellipsis-h text-success fa-1x"></i>

</p>
      
      </div>
      <div class="col ">
      <p class="   "><i class="fas fa-shuttle-van fa-1x p-2 bg-success mr-4 text-white rounded-circle"></i><i class="fas fa-ellipsis-h text-success ml-1 fa-1x"></i><i class="fas fa-ellipsis-h text-success fa-1x"></i>

</p>
       
      </div>
      <div class="col">
      <p class="   "><i class="fas fa-home fa-1x p-2 mr-4  icon rounded-circle"></i></p>
      
      </div>
  </div>
        </div>
        <div class="col">
            <div class="driverupload">
                
        <form action="" class="container">
        <h1 class=" upload mt-5 ml-3 mb-4">Driver Upload</h1>
    
      <input type="text" class="form-control log3 mb-4" id="email" placeholder="Driver ID" name="email">
      <div class="row mb-4">
            <div class="col">
            <input type="date" placeholder="Date" class="form-control log3"></div>
            <div class="col"><input type="text" placeholder="Tour ID" class="form-control log3"></div>
            
            </div>
            <div class="row mb-4">
            <div class="col">
            <input type="date" placeholder="Delivered" class="form-control log3"></div>
            <div class="col"><input type="number" placeholder="Undelivered" class="form-control log3"></div>
            
            </div>
            <input type="text" placeholder="Notes" class="form-control mb-4 log3">
            <div class="row mb-4">
            <div class="col-2">
            <label for="file"><i class="fa fa-plus  lable1 " style=""></i></label>
            <input type="file" name="file" id="file" class="inputfile" />

        
        </div>
            
            <div class="col"><button  class="form-control btn-4 w-100 btn btn-success">Submit</button></div>
            
            </div>

            </div>

        </div>
    </div>
</div>
</div>

<div class="container-fluid deliveryby">
    <div class="container mt-5 ">
    <h1 class="deliver py-4  ">Deliver<span style="color:#66B145"> Everything</span></h1>
    <p class="service mt-n4">Recently Service</p>
</div>
<div class="container-fluid mt-5 ">
    <div class="row">
        <div class="col-lg col-sm-6 col-md-6 frame"><img src="{{asset('images/frame/Frame4.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-lg  col-sm-6 col-md-6 frame"><img src="{{asset('images/frame/Frame1.jpg')}}" alt="" class="image-fluid"></div> 
        <div class="col-lg col-sm-6 col-md-6 frame"><img src="{{asset('images/frame/Frame3.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-lg col-sm-6 col-md-6 frame"><img src="{{asset('images/frame/Frame5.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-lg col-sm-6 col-md-6 frame"><img src="{{asset('images/frame/Frame7.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-lg col-sm-6 col-md-6 frame"><img src="{{asset('images/frame/Frame8.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-lg col-sm-6 col-md-6 frame"><img src="{{asset('images/frame/Frame6.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-lg col-sm-6 col-md-6 frame"><img src="{{asset('images/frame/Frame10.png')}}" alt="" class="image-fluid"></div>
        <div class="col-lg col-sm-6 col-md-6 frame"><img src="{{asset('images/frame/Frame9.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-lg col-sm-6 col-md-6 frame"><img src="{{asset('images/frame/Frame2.jpg')}}" alt="" class="image-fluid"></div>

    </div>
    </div>
<div class="container">
    <p class="future mt-3 mb-4">Ftutre delivery way of moving <span class="text-success">all kind<br> parcels</span> from Point A to Point B.</p>
</div>
</div>
</body>
</html>

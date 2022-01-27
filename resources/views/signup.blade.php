<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<meta name = "keywords" content = "" />
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">

    
<!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color:">
<div   style="background-image: url({{asset('images/isolated.png')}});" heignt="826px">
<div class="container" >
<h1 class="parceldata py-3">Parcel<span style="color:#66B145">Data</span></h1>
<h1 class=" mt-4 driver mb-5 ">Driver<span class="text-dark"> Sign Up</span></h1>
    
    
        <div class=" form ">
        <form action="" class=" container  mt-5">
            <div class="row mb-4">
            <div class="col-md-12 col-sm-12 mb-4 col-lg-6">
            <input type="text" placeholder="Full Name..." class="form-control inputsize"></div>
            <div class="col-md-12 col-sm-12  col-lg-6"><input type="email" placeholder="Email..." class="form-control mb-4 inputsize"></div>
            <input type="address" placeholder="address" class="form-control address " >
            </div>
            
            <div class="row mb-4">
            <div class="col-md-12 col-sm-12 mb-4 col-lg-6">

            <select name="" id="" class="form-control inputsize">
                <option value="">Postal Code</option>
                <option value="">33344</option>
                <option value="">33345</option>
                <option value="">33347</option>

            </select>
</div>
            <div class="col-md-12 col-sm-12  col-lg-6"><input type="number" placeholder="Phone Number" class="form-control inputsize"></div>
            </div>

        
            <div class="row mb-4">
            <div class="col-md-12 col-sm-12 mb-4 col-lg-6">
            <input type="email" placeholder="Contact Email" class="form-control inputsize"></div>
            <div class="col-md-12 col-sm-12  col-lg-6"><input type="number" placeholder="Driver ID" class="form-control inputsize"></div>
            
            </div>
            
            <div class="row mb-4">
            <div class="col-md-12 col-sm-12 mb-4 col-lg-6">
            <input type="password" placeholder="Password" class="form-control inputsize"></div>
            <div class="col-md-12 col-sm-12  col-lg-6"><input type="text" placeholder="Depot location" class="form-control  inputsize"></div>
            
            </div>
            <div class="row mb-4">
            <div class="col-md-12 col-sm-12 mb-4 col-lg-6">
            <input type="password" placeholder="confirm Password" class="form-control inputsize"></div>
            <div class="col-md-12 col-sm-12  col-lg-6"><input type="file" title="Proof of Address" class="form-control  inputsize"></div>
            
            </div>
            <div class="row mb-4">
            <div class="col-md-12 col-sm-12 mb-4 col-lg-6">
            <input type="file" placeholder="confirm Password" class="form-control inputsize "></div>
            <div class="col-md-12 col-sm-12 mb-4 col-lg-6"><input type="file"  class="form-control inputsize "></div>
            
            </div>
          <button class="btn align-items-end d-flex   text-center signbtn">Sign Up</button>
          <label class="form-check-label  term">
        <input class="      term" type="checkbox" name="remember">Agree to Terms and Conditions
      </label>
        

        
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
        <div class="col-md-6 col-sm-6  col-lg frame"><img src="{{asset('images/frame/Frame4.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-md-6 col-sm-6  col-lg frame"><img src="{{asset('images/frame/Frame1.jpg')}}" alt="" class="image-fluid"></div> 
        <div class="col-md-6 col-sm-6  col-lg frame"><img src="{{asset('images/frame/Frame3.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-md-6 col-sm-6  col-lg frame"><img src="{{asset('images/frame/Frame5.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-md-6 col-sm-6  col-lg frame"><img src="{{asset('images/frame/Frame7.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-md-6 col-sm-6  col-lg frame"><img src="{{asset('images/frame/Frame8.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-md-6 col-sm-6  col-lg frame"><img src="{{asset('images/frame/Frame6.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-md-6 col-sm-6  col-lg frame"><img src="{{asset('images/frame/Frame10.png')}}" alt="" class="image-fluid"></div>
        <div class="col-md-6 col-sm-6  col-lg frame"><img src="{{asset('images/frame/Frame9.jpg')}}" alt="" class="image-fluid"></div>
        <div class="col-md-6 col-sm-6  col-lg frame"><img src="{{asset('images/frame/Frame2.jpg')}}" alt="" class="image-fluid"></div>

    </div>
    </div>
<div class="container">
    <p class="future mt-3">Ftutre delivery way of moving <span class="text-success">all kind<br> parcels</span> from Point A to Point B.</p>
</div>
</div>

</body>
</html>

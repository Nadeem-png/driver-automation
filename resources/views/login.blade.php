<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<meta name = "keywords" content = "" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">

    
<!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: ;" >
<div style="background-image: url({{asset('images/map.png')}});" heignt=" 790px">
<div class="container container-sm">
<h1 class="parceldata mt-4">Parcel<span style="color:#66B145">Data</span></h1>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="log1">
        <div class="col">
       
        <form action="" class="container">
        <h1 class="logindata mt-4">Log<span style="color:black"> In</span></h1>
    <div class="form-group">
      <label for="email " class="username">username or email</label>
      <input type="email" class="form-control log2" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd" class="username">Password:</label>
      <input type="password" class="form-control log2" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label check">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me?
      </label>
      <a href="" class=" forgot ">forgot password?</a>
    </div>
    <button type="submit" class="btn btn1 mt-4  w-100">Submit</button>
    <p class="text-center mt-5 account ">Don’t have an account? <a href="" class="text-success">signup</a> </p>
  </form>
</div>
        </div>
      
        
        
        <div class="col ml-5">
            <div class="vector">
                <img src="{{asset('images/large.png')}}" alt="" class="image-fluid">
            </div>
        </div>

    </div>
</div>
</div>
</body>
</html>

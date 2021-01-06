<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <link rel="icon" href="{{'img/logo.png'}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Goldman:wght@700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <div data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
                 <img src="{{'img/logo.png'}}" alt="">

</div>
        </div>
        <div class="inner-main-nav">
            <ul>
              
                <li><a href="{{asset('/')}}">Home</a></li>
                <li><a href="{{asset('aboutus')}}">About us</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Clients</a></li>
                <ul class="sous-menu">
                  <li><a href="page11.html">menu11</a></li>
                  <li><a href="page12.html">menu12</a></li>
                  </ul>
                <li><a href="#">Achats</a></li>
                <li><a href="#">Contact</a></li>
                
               
            </ul>
        </div>
    </header>
    
@yield('content')
   
    
   
<footer class=" text-center" > <p class="pz"> &copy; BAKKOU ADNANE 2020  </p></footer>

<script src="{{asset('js/main.js')}}"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</body>

</html>
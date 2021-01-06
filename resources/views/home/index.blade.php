@extends('layouts.app')
@section('content')


<div class="clock">
   <div class="clock-face">
     <div class="hand hour-hand"></div>
     <div class="hand min-hand"></div>
     <div class="hand second-hand"></div>
   </div>
 </div>


<style>
 
 
 .clock {
   width: 30rem;
   height: 30rem;
   border:20px solid black;
   border-radius:50%;
   margin:50px auto;
   position: relative;
   padding:2rem;
   box-shadow:
     0 0 0 4px rgba(0,0,0,0.1),
     inset 0 0 0 3px #fefefe,
     inset 0 0 10px black,
     0 0 10px ;
 }
 .clock-face {
   position: relative;
   width: 100%;
   height: 100%;
   transform: translateY(-3px);
 }
 .hand {
   width:50%;
   height:6px;
   background:orangered;
   position: absolute;
   top:50%;
   transform-origin: 100%;
   transform: rotate(90deg);
   transition: all 0.05s;
   transition-timing-function: cubic-bezier(0.1, 2.7, 0.58, 1);
 }
</style>
<script>

 const secondDiv = document.querySelector('.second-hand');
 const minDiv = document.querySelector('.min-hand');
 const hourDiv = document.querySelector('.hour-hand');
 
 
 function setDate(){
     
     const now = new Date();
     const seconds = now.getSeconds();
     const secDeg = ((seconds/60)* 360 + 90);
     secondDiv.style.transform = `rotate(${secDeg}deg)`;
     
     
     const mins = now.getMinutes();
     const minDeg = ((mins/60) * 360) + ((seconds/60)*6) + 90;
     minDiv.style.transform = `rotate(${minDeg}deg)`;
     
     
     const hour = now.getHours();
     const hourDeg = ((hour/12)*360) + ((mins/60)*30) + 90;
     hourDiv.style.transform = `rotate(${hourDeg}deg)`;
     
     
 }
 
setInterval(setDate,1000);
 
 
 
 
 
</script>
<section id="section">
  <div class="container">
     <h1 class="h1-section1">ELECTRO & SHOPPING </h1>
     <p class="p-section1 bg-warning">Vente en ligne Au Maroc des composants électroniques,informatiques et domotique, ... </p>
     
     <a href="#" class="btn btn-primary btn-dark active center" id="btn" role="button" aria-pressed="true">Acheter maintenant</a>
  </div>
</section>

@foreach ($products as $product)
    <section id="sec3">
      <div class="container">
        <div class="row align-items-center py-3">
        
            <div class="col-md-6"> 
               <div data-aos="zoom-in-down">
              <p class="pp text-center">
                  {{$product->description}}             
              </p>
            </div>
         </div>

            
            <div class="col-md-6">
               <div data-aos="zoom-in-down">  
                 <img class="img img-fluid" src="{{asset("storage/uploads/$product->image")}}"  width="140%" alt="">
               </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">
              <button  class="btn btn-dark form-control">Go To product</button>
            </div>
        </div>
      </div>
    </section>
@endforeach

<hr>
<section id="ACTU">
  <div class="container">
  <div class="row">
     <div class="col-lg-4 col-md-6 mb-3">
           <div class="post">
            <div data-aos="flip-up">

              <div class="post-img">
                 <img src="{{'img/logo.png'}}" alt="">
              </div>
              <div class="post-body">
                 <h3 class="post-title">AVIS DE CLIENTS  </h3>
                 <p class="post-description">Vous trouverez en attaché les comptes académiques des</p>
                 <button id="btnn" class="btn btn-danger center">Lire la suite ... </button> 
              </div>
           </div>
        </div>
     </div>
     <div class="col-lg-4 col-md-6 mb-3">
           <div class="post">
            <div data-aos="flip-up">

              <div class="post-img">
                 <img src="{{'img/logo.png'}}" alt="">
              </div>
              <div class="post-body">
                 <h3 class="post-title">NOS PRODUITS </h3>
                 <p class="post-description">Vous trouverez en attaché les comptes académiques des</p>
                 <button id="btnn" class="btn btn-danger center">Lire la suite ... </button> 
              </div>
           </div>
        </div>
     </div>
     <div class="col-lg-4 col-md-6 mb-3">
           <div class="post">
            <div data-aos="flip-up">

              <div class="post-img">
                 <img src="{{'img/logo.png'}}" alt="">
              </div>
              <div class="post-body">

                 <h3 class="post-title">MOT DU DIRECTEUR </h3>
                 <p class="post-description">Vous trouverez en attaché les comptes académiques des</p>
                 <button id="btnn" class="btn btn-danger center">Lire la suite ... </button> 
              </div>
           </div>
        </div>
  </div></div>
</section>
<section id="map">
  <div class="container">
  <div class="row">
     <div class="col-lg-8  mb-3">
        <!--map-->
        <div style="width: 100%;position: relative;">
           <iframe width="100%" height="440"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.4972841581744!2d-8.490208084958228!3d33.22727328083845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda91e0339fcc31f%3A0x23f6217cbd299c33!2sFacult%C3%A9%20des%20Lettres%20et%20des%20Sciences%20Humaines!5e0!3m2!1sfr!2sma!4v1597191016519!5m2!1sfr!2sma"
              frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           </iframe>
           <div
              style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
              <small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a
                 href="http://www.googlemapsgenerator.com/ja/">googlemapsgen (ja)</a> & <a
                 href="https://www.buyinstagramfollowersreviews.net/">boosting instagram account</a></small>
           </div>
           <style>
              #gmap_canvas img {
              max-width: none !important;
              background: none !important
              }
           </style>
        </div>
        <br />
     </div>
     <!--map-->
     <div class="row">
        <div class="col-lg-12  mb-3">
           <form>
              <div class="form-group">
                 <label for="exampleInputEmail1">Email address</label>
                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SteMaroc@gmail.com">
              </div>
              <div class="form-group">
                 <label for="exampleInputPassword1">Message</label>
                 <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="votre message"> Votre Message . . . </textarea>
              </div>
              <button type="submit" class="btn btn-primary">Envoyer</button>
           </form>
        </div>
     </div>
  </div>
</section>
@endsection
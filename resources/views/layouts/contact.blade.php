@extends('layouts.app')
@section('content')


  <script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = () => {
      items.classList.add("active");
      menuBtn.classList.add("hide");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = () => {
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      searchBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = () => {
      form.classList.add("active");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
  </script>




  <!--map-->
  <div style="width: 100%;position: relative;"><iframe width="100%" height="440"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.4972841581744!2d-8.490208084958228!3d33.22727328083845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda91e0339fcc31f%3A0x23f6217cbd299c33!2sFacult%C3%A9%20des%20Lettres%20et%20des%20Sciences%20Humaines!5e0!3m2!1sfr!2sma!4v1597191016519!5m2!1sfr!2sma"
      frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </iframe>
    <div
      style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
      <small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a
          href="http://www.googlemapsgenerator.com/ja/">googlemapsgen (ja)</a> & <a
          href="https://www.buyinstagramfollowersreviews.net/">boosting instagram account</a></small></div>
    <style>
      #gmap_canvas img {
        max-width: none !important;
        background: none !important
      }
    </style>
  </div><br />
  <!--map-->

  <footer class="p-1">
    <div class="row">
      <div class="col-md-4">
        <h2>About us </h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit ratione dolor quam vero possimus, vitae libero
          id ipsa qui adipisci itaque velit voluptatum quod culpa deserunt nulla asperiores corrupti. Recusandae!</p>
        <div class="social">
         
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"> <i class="fab fa-twitter"> </i></a>
          <a href="#"> <i class="fab fa-youtube"> </i></a>
          
        </div>
      </div>

      <div class="col-md-4">
        <h2>About us </h2>
        <div class="info">
          <div class="place">
            <span class="fas fa-map-marker-alt "></span>
            Avenue des Facultés, El Jadida 24000
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            0522880088
          </div>
          <div class="email">
            <span class="fa fa-envlope"></span>
            estsb@ucd.ma

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <h2>
          contact us
        </h2>
        <div class="">
          <form action="#" class="contact-us">
            <label>Email*</label>
            <input type="email" required>
            <label>Message*</label>
            <textarea rows="2" cols="30" required></textarea>
            <button type="submit ">Send</button>
          </form>
        </div>
      </div>
    </div>



  </footer>
@endsection
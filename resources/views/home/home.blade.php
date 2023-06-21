@extends('home-master')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="public/images/t2.jpg" alt="First slide">
        <a href="{{ url('lunch') }}"><div class="centered-2">Lunch</div></a>
        <a href="{{ url('dinner') }}"><div class="centered-3">Dinner</div></a>
        <a href="{{ url('booking') }}"><div class="centered-4">Booking</div></a>
               
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/images/k4.jpg" alt="Second slide">
       <a href="{{ url('lunch') }}"><div class="centered-2">Lunch</div></a>
        <a href="{{ url('dinner') }}"><div class="centered-3">Dinner</div></a>
        <a href="{{ url('booking') }}"><div class="centered-4">Booking</div></a>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/images/t2.jpg" alt="Third slide">
       <a href="{{ url('lunch') }}"><div class="centered-2">Lunch</div></a>
        <a href="{{ url('dinner') }}"><div class="centered-3">Dinner</div></a>
        <a href="{{ url('booking') }}"><div class="centered-4">Booking</div></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--  -->
  <div class="container-fluid home-title">
    <div class="container">
     <h2>Welcome to the Factory Kamppi restaurant world</h2>
     <p>In the morning, you can apply for energy at Factory's breakfast. The day offers a tasty lunch buffet and a salad bar with a selection of fresh salad dishes. In the evenings, the atmospheric à la carte restaurant offers a taste of good food and drink lovers.</p>
     <h3>Welcome to enjoy!</h3>
   </div>
  </div>

<!--  -->
<div class="container-fluid k1-section">
  <div class="container">
  <div class="row">
    <div class="col-md-4 col-sm-12 col-lg-4">
      <div class="k1-image">
        <img class="img-fluid"src="public/images/k1.jpg">
      </div>
      <div class="k1-heading">
        <h2>Christmas hours</h2>
        <p>Dear customers, Our Christmas time is as follows: We are closed: </p>
        <a href="">Read more…</a>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 col-lg-4">
      <div class="k2-image">
        <img class="img-fluid"src="public/images/k2.jpg">
      </div>
      <div class="k2-heading">
        <h2>We support Finnish basketball</h2>
        <p>Restaurant Factory supports the Espoo Basket Women's Representative Team during the 18/19 season. </p>
        <a href="">Read more…</a>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 col-lg-4">
      <div class="k3-image">
        <img class="img-fluid"src="public/images/k3.jpg">
      </div>
      <div class="k3-heading">
        <h2>Factory Kamppi Luxurious Christmas Lunch. La 15.12.18</h2>
        <p>We warmly welcome our customers to our Christmas lunch at Factory Kamppi, the Kamppi car house.A traditional Christmas lunch is offered on Wednesday 12.12.18 at the normal lunch rate.  </p>
      </div>
    </div>
  </div>
</div>
</div>

<!--  -->
<div class="container-fluid form-section">
 
    <h2>Order a Lunch List for Your Email!</h2>
    
 
  <div class="email-section">
    <label class="label">Email*</label>
    <input type="email" name="emailaddress">
  </div>
  <div class="email-btn">
       <button type="button" class="btn btn-info">Subscribe</button>

 </div>
</div>

<!--  -->
<div class="container-fluid aaa">
  <div class="container">
  <div class="row">
    <div class="col-lg-4 col-sm-12 col-md-4">
     
      <p>
        "Great place to enjoy lunch since the food is really good and it has a trendy atmosphere. There's a small terrace so that you can eat or have a drink in the sun."
      </p>
    
    </div>
    <div class="col-lg-4 col-sm-12 col-md-4">
     
      <p>
        "A modern, pleasant space with a glowing space. That offers excellent food. I recommend you visit.
      </p>
     
    </div>
    <div class="col-lg-4 col-sm-12 col-md-4">
    
      <p>
        "The service was good and knowledgeable from beginning to end and made our dining experience better!"
      </p>
     </div>
    </div>
  </div>
</div>
<!--  -->
<div class="container-fluid bbb">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-12 col-md-6">
        <div class="img-1">
          <img class="img-fluid"src="public/images/k4.jpg">
        </div>
      </div>
      <div class="col-lg-3 col-sm-12 col-md-3">
        <div class="img-2">
          <img class="img-fluid"src="public/images/k5.jpg">
        </div>
      </div>
      <div class="col-lg-3 col-sm-12 col-md-3">
        <div class="img-3">
          <img class="img-fluid"src="public/images/k6.jpg">
        </div>
      </div>
    </div>
  </div>
</div>

<!--  -->
<div class="container-fluid food-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-12 col-md-3">
        <div class="food-image">
          <img class="img-fluid"src="public/images/k7.jpg">
        </div>
      </div>
      <div class="col-lg-3 col-sm-12 col-md-3">
        <div class="food-image">
          <img class="img-fluid"src="public/images/k8.jpg">
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 col-md-6">
        <h2>From love to food</h2>
        <p>Our delicious lunch, evening and á la carte menus offer a wide range of tastes. For lunch, you can choose from a choice of four hot meals, or a full salad plate from our rich salad buffet. Our à la carte menu, Chef's Menu, offers delicious starters, main and desserts, with or without wine.</p>
      </div>
    </div>
    <div class="row  image">
      <div class="col-lg-3 col-sm-12 col-md-3">
        <div class="food-image">
          <img class="img-fluid"src="public/images/k9.jpg">
        </div>
      </div>
      <div class="col-lg-3 col-sm-12 col-md-3">
        <div class="food-image">
          <img class="img-fluid"src="public/images/k10.jpg">
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 col-md-6">
        <h2>In the heart of Helsinki</h2>
        <p>In our modern, newly refurbished dining rooms, you dine in an unhurried atmosphere, whether for business lunch or dinner. We can also easily organize company and private events through us. Factory Kamppi is conveniently located in the vicinity of the Kamppi bus and metro terminal in the Helsinki Auto House.</p>
      </div>
    </div>
  </div>
</div>

@endsection
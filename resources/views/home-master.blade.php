<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Tinau</title>
  
  <!-- jquery js -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <!-- font awesome css -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  
  
  <!-- global css -->
  <link rel="stylesheet" type="text/css" href="public/css/style.css">

  <!-- pagelevel css -->

  <style type="text/css">
    html {
      overflow-x: hidden;
    }
      </style><style type="text/css">
      html {
        overflow-x: hidden;
    }
</style>
<link rel="stylesheet" type="text/css" href="public/css/home.css">
<link rel="stylesheet" type="text/css" href="public/css/header.css">
<link rel="stylesheet" type="text/css" href="public/css/footer.css">
<link rel="stylesheet" type="text/css" href="public/css/booking.css">
<link rel="stylesheet" type="text/css" href="public/css/contact.css">  
<link rel="stylesheet" type="text/css" href="public/css/setmenus.css">  
<link rel="stylesheet" type="text/css" href="public/css/lunch.css">  
<link rel="stylesheet" type="text/css" href="public/css/lunch1.css">    
<link rel="stylesheet" type="text/css" href="public/css/dinner.css">
<link rel="stylesheet" type="text/css" href="css/soup-detail.css">    
<link rel="stylesheet" type="text/css" href="public/css/salad-detail.css">    
<link rel="stylesheet" type="text/css" href="public/css/childrenmenu-detail.css">    
<link rel="stylesheet" type="text/css" href="public/css/vegdishes-detail.css">
<link rel="stylesheet" type="text/css" href="public/css/chickendishes-detail.css">
<link rel="stylesheet" type="text/css" href="public/css/lambdishes.css">
<link rel="stylesheet" type="text/css" href="public/css/tanduridishes-detail.css">
<link rel="stylesheet" type="text/css" href="public/css/seafood-detail.css">
<link rel="stylesheet" type="text/css" href="public/css/porkdishes-detail.css">
<link rel="stylesheet" type="text/css" href="public/css/desserts-detail.css">  
<link rel="stylesheet" type="text/css" href="public/css/breakfast.css">





</head>
<body>
  @include('partial.header')

  @yield('content')
  @include('partial.footer')

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script type="text/javascript" src="public/js/js.js"></script>

</body>
</html>

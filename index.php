<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/losangeles.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="images/chicago.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="images/newyork.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
<h2 class=text-center>About Us</h2>
  </div>
<div class="container-fluid">
  <div class="row">
      
  <div class="col-lg-6 col-md-6 col-12">
        <img src="images/cc1.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2>Himanshu Solankey</h2>
       <p class="py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Excepturi quaerat repudiandae iste illo. Error vel laborum maiores possimus distinctio quis impedit non aliquid! 
        Dolores, similique, at, doloribus cum tempora iste hic minus blanditiis maxime qui rem natus inventore eaque modi officiis. 
        Esse labore dolores aspernatur quas velit deserunt illum eius?</p>
        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dolor corrupti, 
          a veniam amet iusto odit culpa laboriosam perspiciatis nam inventore? Animi consequatur recusandae neque nam perspiciatis 
          temporibus odit sunt magni id. Tenetur corporis voluptatem, laboriosam deleniti voluptates odio, assumenda reprehenderit, 
          reiciendis veritatis nulla soluta incidunt vel beatae dolores illo eos eum facere perferendis consectetur natus totam dolorem? 
          Magni sit maiores dolore? Eveniet recusandae facere quam molestias autem, praesentium impedit. Unde aliquid earum laboriosam consequuntur? 
          Vitae omnis quod praesentium voluptatibus necessitatibus, quibusdam in ipsum dolor impedit quas officiis! 
          Dolorum quod dolor officiis omnis, suscipit nihil accusantium quis dolores sapiente numquam? Soluta similique 
          id vero saepe autem tempora labore, quam, voluptas suscipit modi consequatur, fugiat corporis veniam dolor. 
          Commodi placeat vitae ab. Est perspiciatis ipsum minus sunt, modi eveniet adipisci nemo, reprehenderit fuga porro omnis? Ut at 
          officia doloribus! Voluptate ab alias nemo delectus! Odit earum adipisci nobis aspernatur nihil minus quibusdam nesciunt dolor quas ea 
          ullam alias perspiciatis quasi fugit natus sequi, aliquid fuga esse mollitia voluptatum magnam consectetur? Quam delectus omnis ipsum 
          ipsam fugit ab nemo labore laudantium possimus numquam molestias ducimus sit reprehenderit, 
          sequi unde minus veritatis voluptate accusamus culpa itaque autem totam harum iste. Dolorem, consectetur aut.</p>
      <a href="about.php" class="btn btn-success">Click For More</a>  
        </div>
  </div>
</section>




<section class="my-5">
  <div class="py-5">
<h2 class=text-center>Our Services</h2>
  </div>
<div class="container-fluid">
  <div class="row">


      <div class="col-lg-4 col-md-4 col-12">

      <div class="card" >
  <img class="card-img-top" src="images/cc1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Himanshu </h4>
    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, maxime?.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
  </div>
 
  <div class="col-lg-4 col-md-4 col-12">

<div class="card" >
<img class="card-img-top" src="images/cc1.jpg" alt="Card image">
<div class="card-body">
<h4 class="card-title">Himanshu</h4>
<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, dolore!.</p>
<a href="#" class="btn btn-primary">See Profile</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">

      <div class="card" >
  <img class="card-img-top" src="images/cc1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Himanshu</h4>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, nesciunt!.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
  </div>

</section>


<section class="my-5"> 
<div class="py-5">
  <h2 class="text-center">Our Gallery</h2>
</div>

<div class='container-fluid'>
<div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" alt="" class='img-fluid pb-4'>
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" alt="" class='img-fluid pb-4'>
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" alt="" class='img-fluid pb-4'>
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" alt="" class='img-fluid pb-4'>
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" alt="" class='img-fluid pb-4'>
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" alt="" class='img-fluid pb-4'>
  </div>
</div>
</div>
</section>

<section class="my-5"> 
<div class="py-5">
  <h2 class="text-center">Contact US</h2>
</div>

<div class="w-50 m-auto">
  
<form action="userinfo.php" method="post">
  <div class="form-group">
    <label> Username</label>
    <input type="text" name="user" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
    <label> Email</label>
    <input type="text" name="email" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
    <label> Mobile</label>
    <input type="text" name="mobile" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
    <label> Comments</label>
    <textarea name="comment" id="" class="form-control"></textarea>
  </div>
  <div>
  <input type="submit" class="btn btn-success" value="Submit" "> 
  </div>

</div>

</form>
</section>

<footer>
  <p class="p-4 bg-dark text-white text-center">@HIMANSHU_SOLANKEY</p>
</footer>

</body>
</html>
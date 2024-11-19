<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confeitaria tudo nosso</title>

    <!-- STYLE CSS LINK -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- STYLE CSS LINK -->

    <!-- BOOTSTRAP CDN LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP CDN LINK -->



    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- FONT AWESOME CDN -->



    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <!-- GOOGLE FONTS LINK -->
</head>
<body>
    


<!-- Navbar Start -->
<nav class="navbar navbar-expand-sm" id="navbar">
  <a href="#" class="navbar-brand" id="logo"><img src="./images/logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
    <span><i class="fa-solid fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="mynavbar">
    <ul class="navbar-nav me-auto">
      <li class="nav-item">
        <a href="#home" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="#menu" class="nav-link">Menu</a>
      </li>
      <li class="nav-item">
        <a href="#order" class="nav-link">faça seu pedido</a>
      </li>
      <li class="nav-item">
        <a href="#review" class="nav-link">Reviews</a>
      </li>
      <li class="nav-item">
        <a href="#contact" class="nav-link">Entre em contato</a>
      </li>
      <li class="nav-item">
        <a href="./login.php" class="nav-link">Login</a>
      </li>
    </ul>

    <!-- <form class="d-flex">
      <input type="text" class="form-control me-2" placeholder="Search" required>
      <button type="button" id="btn">Search</button>
    </form> -->

  </div>
</nav>
<!-- Navbar End -->


  
    

<!-- Home Section Start -->
<section class="home" id="home">
  <div class="home-content">
    <h3>Venha comer meu docinho <br> Na melhor <span>Confeitaria</span> & <span>Doceria</span></h3>
    <p>Transformamos momentos especiais em doces lembranças. Nossos bolos de aniversário são feitos com ingredientes selecionados, muito carinho e criatividade para tornar sua celebração inesquecível.</p>
    <a href="#menu" id="home-btn">Nosso menu</a>
  </div>
  <div class="img">
    <img src="./images/image 46.png" alt="">
  </div>
</section>
<!-- Home Section End -->



<!-- Top Section Start -->
<div class="top-section">
  <h5>O que nós servimos</h5>
  <h3>Seu bolo perfeito <br> Entrega grátis</h3>
  <div class="row">

    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/img1.png" alt="">
        <div class="card-body">
        <h1>Fácil de pedir</h1>
        <p>você só precisa de alguns passos para <br> fazer sua encomenda</p>
      </div>
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/img2.png" alt="">
        <div class="card-body">
        <h1>Entrega rápida </h1>
        <p>Entrega sempre na hora <br> e com cuidado </p>
      </div>
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/img3.png" alt="">
        <div class="card-body">
        <h1>Melhor qualidade</h1>
        <p>Não só entrega rapida mas qualidade também é nosso <br> numero um</p>
      </div>
      </div>
    </div>

  </div>
</div>
<!-- Top Section End -->




<!-- Our Menu Start -->
<section class="menu" id="menu">
  <h3>Menu</h3>
  <h2>Deliciosos doces são aqui <i class="fa-solid fa-arrow-down"></i></h2>


  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/Mangalorean_Chicken.png" alt="">
        <div class="card-body">
          <h3>M Chicken</h3>
          <h6>Lorem ipsum dolor sit amet.</h6>
          <div class="rating">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>

          <p>$20 <i class="fa-solid fa-credit-card"></i></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/Garlic_Fried.png" alt="">
        <div class="card-body">
          <h3>Garlic Fried</h3>
          <h6>Lorem ipsum dolor sit amet.</h6>
          <div class="rating">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>

          <p>$30 <i class="fa-solid fa-credit-card"></i></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/Grilled_beef_steak.png" alt="">
        <div class="card-body">
          <h3>G Beef Steak</h3>
          <h6>Lorem ipsum dolor sit amet.</h6>
          <div class="rating">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>

          <p>$120 <i class="fa-solid fa-credit-card"></i></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/Pineapple_Fried_Rice.png" alt="">
        <div class="card-body">
          <h3>Fried Rice</h3>
          <h6>Lorem ipsum dolor sit amet.</h6>
          <div class="rating">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>

          <p>$200 <i class="fa-solid fa-credit-card"></i></p>
        </div>
      </div>
    </div>


  </div>



  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/Grilled_pork_ribs.png" alt="">
        <div class="card-body">
          <h3>Pork Ribs</h3>
          <h6>Lorem ipsum dolor sit amet.</h6>
          <div class="rating">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>

          <p>$300 <i class="fa-solid fa-credit-card"></i></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/crispy_fried.png" alt="">
        <div class="card-body">
          <h3>Crispy Fried</h3>
          <h6>Lorem ipsum dolor sit amet.</h6>
          <div class="rating">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>

          <p>$10 <i class="fa-solid fa-credit-card"></i></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/sushi__japanese.png" alt="">
        <div class="card-body">
          <h3>Sushi Japanes</h3>
          <h6>Lorem ipsum dolor sit amet.</h6>
          <div class="rating">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>

          <p>$150 <i class="fa-solid fa-credit-card"></i></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/Lyulya_kebab.png" alt="">
        <div class="card-body">
          <h3>Lyulya Kebab</h3>
          <h6>Lorem ipsum dolor sit amet.</h6>
          <div class="rating">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>

          <p>$250 <i class="fa-solid fa-credit-card"></i></p>
        </div>
      </div>
    </div>


  </div>
</section>
<!-- Our Menu End -->





<div class="container">
  <div class="line" style="width: 100%; height: 2px; background-color: #e53937;"></div>
</div>






<!-- Our Menu Start -->
<section class="menu" id="menu">
  <h3>Our Menu</h3>


  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/burger.png" alt="">
        <div class="card-body">
          <h3>Burger</h3>
          <h6>Lorem ipsum dolor sit amet.</h6>
          <div class="rating">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>

          <p>$60 <i class="fa-solid fa-credit-card"></i></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/fasr food.png" alt="">
        <div class="card-body">
          <h3>Fast Food</h3>
          <h6>Lorem ipsum dolor sit amet.</h6>
          <div class="rating">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>

          <p>$50 <i class="fa-solid fa-credit-card"></i></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/rice.png" alt="">
        <div class="card-body">
          <h3>Rice Dishe</h3>
          <h6>Lorem ipsum dolor sit amet.</h6>
          <div class="rating">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>

          <p>$120 <i class="fa-solid fa-credit-card"></i></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/pizza.png" alt="">
        <div class="card-body">
          <h3>Pizza</h3>
          <h6>Lorem ipsum dolor sit amet.</h6>
          <div class="rating">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>

          <p>$30 <i class="fa-solid fa-credit-card"></i></p>
        </div>
      </div>
    </div>


  </div>




  </div>
</section>
<!-- Our Menu End -->





<!-- Ordre Section Start -->
<section class="order" id="order">
  <div class="heading">Peça seu <span>Bolo</span></div>

  <div class="row">
    <div class="col-md-5 py-3 py-md-0">
      <div class="card">
        <img src="./images/img1.png" alt="">
      </div>
    </div>
    <div class="col-md-7 py-3 py-md-0">
      <form action="#">

        <div class="mb-3 mt-3">
          <input type="text" class="form-control" id="name" placeholder="teu nome, porra" required>
        </div>

        <div class="mb-3 mt-3">
          <input type="email" class="form-control" id="email" placeholder="email" required>
        </div>

        <div class="mb-3 mt-3">
          <input type="number" class="form-control" id="number" placeholder="numero de telefone" required>
        </div>


         <textarea  class="form-control" id="comment" rows="5" name="text" placeholder="o buraco onde tu mora" required></textarea>

         <button type="submit" class="order-btn">Pida agr vá</button>
        

      </form>
    </div>

  </div>
</section>
<!-- Ordre Section End -->





<!-- Review Section Start -->
<section class="review" id="review">
  <div class="row">

    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/review-img.png" alt="">
      </div>
    </div>

    <div class="col-md-8 py-3 py-md-0" style="padding: 100px;">
      <h3>O que dizem sobre nós</h3>
      <h2>O que nossos clientes <br>falam sobre nós</h2>
      <p>muito ruim! tive intoxicação  alimentar e fique 2 meses no hospital</p>
      <h5><img src="./images/image.png" alt="" width="60px"><a href="#">Tigas bota fofo</a></h5>
      <h5><img src="./images/image2.png" alt="" width="60px"><a href="#">Joaquim moedas</a></h5>
      <div class="rating">
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
      </div>
    </div>

  </div>
</section>
<!-- Review Section End -->





<!-- Contact Section Start -->
<section class="contact" id="contact">
  <div class="heading">
    Manda um zap <span>BB</span>
  </div>
  <div class="row">
    <div class="col-md-5 py-3 py-md-0">
      <h3>Chama no pv, gatinha</h3>
      <p>eu não vou responder mas tenta a sorte, vai que</p>
      <i class="fa-solid fa-phone"><span>(75)991410864</span></i><br><br>
      <i class="fa-solid fa-envelope"><span>info@mail.com</span></i><br><br>
      <i class="fa-solid fa-location-dot"><span>Lapa puta q pariu</span></i>
    </div>

    <div class="col-md-7 py-3 py-md-0">
      <form action="#">
        <div class="mb-3 mt-3">
          <input type="text" class="form-control" id="name" placeholder="teu vulgo" required>
        </div>

        <div class="mb-3 mt-3">
          <input type="email" class="form-control" id="email" placeholder="email" required>
        </div>

        <div class="mb-3 mt-3">
          <input type="number" class="form-control" id="number" placeholder="se for mulher, teu zap" required>
        </div>


         <textarea  class="form-control" id="comment" rows="5" name="text" placeholder="são gonçalo  ? KKKKKKKK" required></textarea>

         <button type="submit" class="order-btn">Order Now</button>
      </form>
    </div>
  </div>

</section>
<!-- Contact Section End -->




<!-- Footer Start -->
<footer id="footer">
  <div class="f-content">
    <div class="f-logo"><img src="./images/logo.png" alt=""></div>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure illo, facilis fugit quisquam nihil ipsa.</p>
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-facebook-f"></i>
    <i class="fa-brands fa-youtube"></i>
    <i class="fa-brands fa-twitter"></i>
  </div>
  <br>
  <div class="c-content">
    &copy; Copyright SA Coding. All Rights Reserved <br>
    <span>Designed By <a href="#">SA Coding</a></span>
  </div>
</footer>
<!-- Footer End -->


















    <!-- BOOTSTRAP CDN LINK -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP CDN LINK -->


</body>
</html>
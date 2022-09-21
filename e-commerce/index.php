<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Ucup Ganteng">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Produk</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
   <!-- Navbar start -->
 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php">&nbsp;&nbsp;UcupStore</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php">Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

<!-- IMAGE -->
<div class="container-fluid" style="margin: 0;padding: 0;">
	<div class="image" style="margin-top: -21px">
		<img src="image/bg.jpg" style="width: 100%;  height: 650px;">
	</div>
</div>
<br>
<br>

<!-- PRODUK TERBARU -->
<div class="container">


		<h4 class="text-center" style="font-family: arial; padding-top: 10px; padding-bottom: 10px; font-style: italic; line-height: 29px; border-top: 2px solid #121212; border-bottom: 2px solid #121212;">UcupStore adalah salah satu pelopor pertama dalam bisnis penjualan modern di Indonesia. Didirikan pada tahun 1978,  saat ini dikelola di bawah Ucup Group. Produk kami aman, menarik, dan terjangkau oleh semua orang.</h4>

<!-- Displaying Products -->
	<h2 style=" width: 100%; border-bottom: 4px solid #121212; margin-top: 80px;"><b>Produk Kami</b></h2>
    <div class="container">
<!-- Displaying Products 1-->
    <div class="row">
    <div class="col-xs-4">
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="image/slebew.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Setelan Jas Thomas Slebew</h5>
        <p class="card-text">Setelan Full Jas Ala-Ala Mas Slebew Peaky Blinders</p>
        <a href="produk.php" class="btn btn-primary">Shop Now >></a>
    </div>
</div>
</div>
</div>
</div>


 <!-- Displaying Products End -->

 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
  </div>
</body>
<br>
<!-- FOOTER -->
<?php 
	include 'footer.php';
 ?>
</html>
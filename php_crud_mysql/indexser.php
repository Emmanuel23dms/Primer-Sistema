
<?php include("include/header.php") ?>

<header>
         <a href="index.php">Main page</a>
</header>
<h1 class="head-form">pedidos</h2>
<div class="container-form">
  <form action="save.php" method="POST" class="form-main">
    <div>
      <p>producto</p>
      <input type="text" class="form-input" name="producto" autofocus>
    </div>
    <div>
      <p>cantidad</p>
      <input type="number" class="form-input" name="cantidad">
    </div>
    <div>
     <p>precio</p>
     <input type="text" class="form-input">
    </div>
    <div>
      <input type="submit" class="form-input" name="save" value="envio">
    </div>
  </form>
</div>
<div class="grid-gallery">
       <img src="img/limonxd.jpg" alt="">
       <img src="img/elquenoesnmandarinaxd.jpg" alt="">
       <img src="img/naranjaxd.jpg" alt="">
       <img src="img/71SQS4mSKrL._AC_SL1500_.jpg" alt="">
       <img src="img/manzanaverdexd.jpg" alt="">
       <img src="img/fresaxd.jpg" alt="">
       <img src="img/zanahoria.jpg" alt="">
       <img src="img/apio.jpg" alt="">
       <img src="img/lechuga.jpg" alt="">
       <img src="img/jitomate.jpg" alt="">
       <img src="img/pimiento.jpg" alt="">
</div>
    
<?php include("include/footer.php") ?>    
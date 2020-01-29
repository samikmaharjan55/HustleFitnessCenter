<?php
 include('component/header.php');
 include('component/nav.php');
?>


<div class="carousel slide" id="slider" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#slider" data-slide-to="0" class="active"></li>
<li data-target="#slider" data-slide-to="1"></li>
<li data-target="#slider" data-slide-to="2"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="item active">
<img src="img/h1.jpg" alt="gym">
</div>
<div class="item">
<img src="img/h2.jpg" alt="gym">
</div>
<div class="item">
<img src="img/h3.jpg" alt="gym">
</div>
</div>

<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" area-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#slider" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" area-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
<br/><br/>
<div class="row">
  <div class="container">
<div class="homepage">
    <div class="col-md-4 col">
<a href="img/gym1.jpg"><img src="img/gym1.jpg" alt="gym"></a><br/>

     <a href="https://en.wikipedia.org/wiki/Gym"><div class="homepage">GYM  </div>
     </a>
   </div>


  <div class="col-md-4 col">
    <a href="img/boxing1.jpg"><img src="img/boxing1.jpg" alt="gym"></a><br/>

    <a href="https://en.wikipedia.org/wiki/Boxing">  <div class="homepage">BOXING</div></a>

</div>

<div class="col-md-4 col">
<a href="img/zumba1.jpg"><img src="img/zumba1.jpg" alt="gym"></a><br/>

  <a href="https://en.wikipedia.org/wiki/Zumba"><div class="homepage">ZUMBA</div></a>

</div>
  </div>
</div>
</div>


  <?php
  include('component/footer.php');
   ?>

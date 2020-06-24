
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css'>



<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="content_photo owl-carousel owl-theme">
        <div class="item"><a class="thumbnail" href="../images/room-2.jpg" title="Test caption 1"><img src="../images/room-2.jpg"/></a></div>
       <div class="item"><a class="thumbnail" href="../images/room-2.jpg" title="Test caption 1"><img src="../images/room-2.jpg"/></a></div>
        <div class="item"><a class="thumbnail" href="../images/room-2.jpg" title="Test caption 1"><img src="../images/room-2.jpg"/></a></div>
        <div class="item"><a class="thumbnail" href="../images/room-2.jpg" title="Test caption 1"><img src="../images/room-2.jpg"/></a></div>
        <div class="item"><a class="thumbnail" href="../images/room-2.jpg" title="Test caption 1"><img src="../images/room-2.jpg"/></a></div>
        <div class="item"><a class="thumbnail" href="../images/room-2.jpg" title="Test caption 1"><img src="../images/room-2.jpg"/></a></div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js'>
  
</script>

<script type="text/javascript">$(document).ready(function(){
  $(".content_photo").owlCarousel({
    autoPlay: true,
    items : 4,
    center:true,
    margin: 20,
    loop: true,
    dots: true,
    nav: false,
   
    animateOut: 'fadeOut'
  });

});

// This will create a single gallery from all elements that have class "gallery-item"
$('.thumbnail').magnificPopup({

  type: 'image',
  gallery:{
    enabled: true
  },
}); 

</script>
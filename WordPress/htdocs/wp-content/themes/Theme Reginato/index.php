<?php get_header(); ?>

<img class="mySlides index0">
<img class="mySlides index1">
<img class="mySlides index2">

<div class="content" id="homecontent">  
    <img src="<?php echo get_template_directory_uri() . '/images/Logo_FundoBranco.png'?>" class="logo">
</div>


<?php get_footer(); ?>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.opacity = 0;
      //x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.opacity = 1;
    //x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 6000); // Change image every 2 seconds
}


$( document ).ready(function() {

$('.menu-list').css("top",$('#navheader').css("height"));
$('#menu-filter').css("margin-top",$('#navheader').css("height"));

});

$( window ).resize(function() {

$('.menu-list').css("top",$('#navheader').css("height"));
$('#menu-filter').css("margin-top",$('#navheader').css("height"));

});

</script> 
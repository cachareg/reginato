<?php /* Template Name: Lancamentos */ ?>

<?php get_header(); ?>

<div class="topimage3" id="topimage">
<div class="leftimage3" id="leftimage"></div>

</div>

<div class="content" id="content">  
	<p class="pagetittle">Lançamentos</p>
</div>

<div class="bottonimage3" id="bottonimage"></div>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
$(function(){
$('#example_tree').find('SPAN').click(function(e){
    $(this).parent().children('UL').toggle();
});
});


$( document ).ready(function() {

$('#navheader').css("height",$('#menu').css("height"));
$('#topimage').css("height",$('#navheader').css("height"))
$('#bottonimage').css("height",$('#footer').css("height"));
$('#content').css("margin-top",$('#navheader').css("height"));
$('.menu-list').css("top",$('#navheader').css("height"));
$('#menu-filter').css("margin-top",$('#navheader').css("height"));

});

$( window ).resize(function() {

$('#navheader').css("height",$('#menu').css("height"));
$('#topimage').css("height",$('#navheader').css("height"))
$('#bottonimage').css("height",$('#footer').css("height"));
$('#content').css("margin-top",$('#navheader').css("height"));
$('.menu-list').css("top",$('#navheader').css("height"));
$('#menu-filter').css("margin-top",$('#navheader').css("height"));

});



</script>


<?php get_footer(); ?>
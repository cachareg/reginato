<?php /* Template Name: Login */ ?>

<?php get_header(); ?>

<div class="topimage" id="topimage">
<div class="leftimage" id="leftimage"></div>

</div>

<div class="content" id="content">  
	<p class="pagetittle">Faça login para ter acesso ao conteúdo do site</p>
	<?php echo do_shortcode('[wpmem_form login]');?>
</div>

<div class="bottonimage" id="bottonimage"></div>


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

$('#wpmem_login').css("height",$(window).height());


});

$( window ).resize(function() {

$('#navheader').css("height",$('#menu').css("height"));
$('#topimage').css("height",$('#navheader').css("height"))
$('#bottonimage').css("height",$('#footer').css("height"));
$('#content').css("margin-top",$('#navheader').css("height"));
$('.menu-list').css("top",$('#navheader').css("height"));
$('#menu-filter').css("margin-top",$('#navheader').css("height"));

$('#wpmem_login').css("height",$(window).height());

});
</script>


<?php get_footer(); ?>
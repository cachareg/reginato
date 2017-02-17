<?php /* Template Name: Login */ ?>

<?php get_header(); ?>

<div class="topimage" id="topimage">

</div>

<div class="content" id="content">  
	<p class="pagetittle">Login</p>
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

$('#topimage').css("height",$('#menu').css("height"))
$('#bottonimage').css("height",$('#footer').css("height"));
$('#content').css("margin-top",$('#menu').css("height"));

});

$( window ).resize(function() {

$('#topimage').css("height",$('#menu').css("height"))
$('#bottonimage').css("height",$('#footer').css("height"));
$('#content').css("margin-top",$('#menu').css("height"));

});
</script>


<?php get_footer(); ?>
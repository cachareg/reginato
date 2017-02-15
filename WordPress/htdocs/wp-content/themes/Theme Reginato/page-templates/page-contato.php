<?php /* Template Name: Contato */ ?>

<?php get_header(); ?>

<div class="topimage2" id="topimage">

</div>

<div class="content" id="content">  
	<p class="pagetittle">Contato</p>

	<?php echo do_shortcode('[contact-form-7 id="54" title="Contact form 1"]');?>

	<div style="height:30px;"></div>	
</div>

<style>
.wpcf7{
font-family: 'Dosis Medium';
font-size: 15px;
}
.wpcf7 input[type="submit"] {
padding: 12px 20px;
border-top: solid 1px #d2d2d2;
border-left: solid 1px #c3c3c3;
border-right: solid 1px #c3c3c3;
border-bottom: solid 1px #9f9f9f;
background-color: #bb934d;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 5px;
font-size: 15px;
color: white;
-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.125), inset 0 1px 0 rgba(255, 255, 255, 0.5);
-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.125), inset 0 1px 0 rgba(255, 255, 255, 0.5);
box-shadow: 0 1px 1px rgba(0,0,0,0.125), inset 0 1px 0 rgba(255, 255, 255, 0.5);
width: auto;
text-decoration: none;
cursor: pointer;
-webkit-appearance: button;
}

</style>


<div class="bottonimage2" id="bottonimage"></div>



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
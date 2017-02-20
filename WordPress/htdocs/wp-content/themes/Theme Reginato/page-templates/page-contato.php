<?php /* Template Name: Contato */ ?>

<?php get_header(); ?>

<div class="topimage2" id="topimage"></div>
<div class="leftimage2" id="leftimage"></div>


<div class="content" id="content">  
	<p class="pagetittle">Contato</p>

	<?php echo do_shortcode('[contact-form-7 id="54" title="Contact form 1"]');?>

	<div style="height:30px;"></div>	
</div>

<style>
.wpcf7{
font-family: 'Arial';
font-size: 12px;
}
.wpcf7-form{
	padding: 2%;
}
.wpcf7 input[type="submit"] {
font-weight: normal;
font-family: 'Arial';
background-color: #382b20;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
font-size: 14px;
color: white;
text-decoration: none;
cursor: pointer;
right: 0;
display: inline-block;
position: relative;
width: 80px;
height: 40px;
text-align: center;
box-shadow: none;
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
<?php /* Template Name: Produtos */ ?>

<?php get_header(); ?>


  <div class="topimage" id="topimage"></div>


<div class="content" id="content">  
	<p class="pagetittle">Produtos</p>


<section id="noticias" class="noticias row">
    
<div class="container row">

<div class="extra-noticias col-md-4 col-xs-12 col-sm-5">        
<UL id="example_tree">

<p class="filtros">SELEÇÃO ATUAL</p>

<p class="filtros">FILTRE SEUS RESULTADOS</p>

    <LI><img class="arrow-bottom" src="<?php echo get_template_directory_uri() . '/images/arrow-top.png'?>"><span class="sidebar"><input type="checkbox" name="cat1" id="cat1" value="" class="css-checkbox"><label for="cat1" class="css-label">Tipo1</label></span>
    <UL>
            <LI><span class="sidebar"><input type="checkbox" name="sub1" id="sub1" value="" class="css-checkbox cat1 "><label for="sub1" class="css-label">Subtipo</label></span></LI>
            <LI><span class="sidebar"><input type="checkbox" name="sub2" id="sub2" value="" class="css-checkbox cat1 "><label for="sub2" class="css-label">Subtipo</label></span></LI>
            <LI><span class="sidebar"><input type="checkbox" name="sub3" id="sub3" value="" class="css-checkbox cat1 "><label for="sub3" class="css-label">Subtipo</label></span></LI>
        </UL> 
    </LI>
    <LI><img class="arrow-bottom" src="<?php echo get_template_directory_uri() . '/images/arrow-top.png'?>"><span class="sidebar"><input type="checkbox" name="cat2" id="cat2" value="" class="css-checkbox"><label for="cat2" class="css-label">Tipo1</label></span>
    <UL>
            <LI><span class="sidebar"><input type="checkbox" name="sub4" id="sub4" value="" class="css-checkbox cat2"><label for="sub4" class="css-label">Subtipo</label></span></LI>
            <LI><span class="sidebar"><input type="checkbox" name="sub5" id="sub5" value="" class="css-checkbox cat2"><label for="sub5" class="css-label">Subtipo</label></span></LI>
            <LI><span class="sidebar"><input type="checkbox" name="sub6" id="sub6" value="" class="css-checkbox cat2"><label for="sub6" class="css-label">Subtipo</label></span></LI>
        </UL> 
    </LI>
    <LI><img class="arrow-bottom" src="<?php echo get_template_directory_uri() . '/images/arrow-top.png'?>"><span class="sidebar"><input type="checkbox" name="cat3" id="cat3" value="" class="css-checkbox"><label for="cat3" class="css-label">Tipo1</label></span>
    <UL>
            <LI><span class="sidebar"><input type="checkbox" name="sub7" id="sub7" value="" class="css-checkbox cat3"><label for="sub7" class="css-label">Subtipo</label></span></LI>
            <LI><span class="sidebar"><input type="checkbox" name="sub8" id="sub8" value="" class="css-checkbox cat3"><label for="sub8" class="css-label">Subtipo</label></span></LI>
            <LI><span class="sidebar"><input type="checkbox" name="sub9" id="sub9" value="" class="css-checkbox cat3"><label for="sub9" class="css-label">Subtipo</label></span></LI>
        </UL> 
    </LI>
</UL>


</div>
                <div class="col-md-8 col-xs-12 col-sm-7">
                    <div class="row">
                        <img class="arrow arrow-left" src="<?php echo get_template_directory_uri() . '/images/arrow-left.png'?>">
                        <img class="arrow arrow-right" src="<?php echo get_template_directory_uri() . '/images/arrow-right.png'?>">
                        <div class="slider-noticias hidden-xs" data-slick='{"slidesToShow": 3, "rows":3, "slidesToScroll": 3}'>
                            <?php
                            $i = 0;
                            while($i < 10){
                            	$i++;
                                $url = "https://images.etna.com.br/produtos/44/296644/296644_ampliada.jpg";
                                echo "<div class='col-sm-4 col-md-4'>";
                                echo "<div class='noticia-body' style='background-image: url(".$url."'><div class='noticia-hover'><p class='noticia-text'>Descrição</p>";
                                echo '<a data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a></div></div></div>';
                            }

                            ?>
                        </div>
                        <div class="slider-noticias hidden-sm hidden-md hidden-lg" data-slick='{"slidesToShow": 1, "rows":1, "slidesToScroll": 1}'>
                            <?php
                            $i = 0;
                            while($i < 10){
                                $i++;
                                $url = "https://images.etna.com.br/produtos/44/296644/296644_ampliada.jpg";
                                echo "<div class='col-xs-5'>";
                                echo "<div class='noticia-body' style='background-image: url(".$url."'><div class='noticia-hover'><p class='noticia-text'>Descrição</p>";
                                echo '<a data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a></div></div></div>';
                            }

                            ?>
                        </div>
                    </div>
                </div>
        </div>
    </section>
</div>

<div class="bottonimage" id="bottonimage"></div>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
$(function(){
$('#example_tree').find('img').click(function(e){
    $(this).parent().children('UL').toggle();

    if($(this).attr("src") == "<?php echo get_template_directory_uri() . '/images/arrow-right.png'?>"){
    // code to be executed if condition is true
    $(this).attr("src","<?php echo get_template_directory_uri() . '/images/arrow-top.png'?>");
} 
else {
    // code to be executed if condition is false
    $(this).attr("src","<?php echo get_template_directory_uri() . '/images/arrow-right.png'?>");
}    
});
});

$(function(){

    $('#cat1').click(function(e){

        if($('#cat1').prop("checked")==true){
        $(".cat1").prop("checked", true);
        }else{
            $(".cat1").prop("checked", false);
        }
    });
    $('#cat2').click(function(e){

        if($('#cat2').prop("checked")==true){
        $(".cat2").prop("checked", true);
        }else{
            $(".cat2").prop("checked", false);
        }
    });
    $('#cat3').click(function(e){

        if($('#cat3').prop("checked")==true){
        $(".cat3").prop("checked", true);
        }else{
            $(".cat3").prop("checked", false);
        }
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
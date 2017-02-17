<?php /* Template Name: Produtos */ ?>

<?php get_header(); ?>


  <div class="topimage" id="topimage"></div>

  <div class="leftimage" id="leftimage"></div>


<div class="menu-filter col-md-4 col-sm-5 col-lg-3" id="menu-filter">        

<UL id="example_tree">

<p class="filtros">SELEÇÃO ATUAL</p>

<p class="filtros">FILTRE SEUS RESULTADOS</p>

    <LI><img class="arrow-bottom" src="<?php echo get_template_directory_uri() . '/images/arrow-top.png'?>"><span class="sidebar"><input type="checkbox" name="cat1" id="cat1" value="" class="css-checkbox"><label for="cat1" class="css-label">Lorem</label></span>
    <UL id="ulid">
            <LI><span class="sidebar"><input type="checkbox" name="sub1" id="sub1" value="" class="css-checkbox cat1 "><label for="sub1" class="css-label">dolor</label></span></LI>
            <LI><span class="sidebar"><input type="checkbox" name="sub2" id="sub2" value="" class="css-checkbox cat1 "><label for="sub2" class="css-label">consectetur</label></span></LI>
            <LI><span class="sidebar"><input type="checkbox" name="sub3" id="sub3" value="" class="css-checkbox cat1 "><label for="sub3" class="css-label">adipiscing</label></span></LI>
        </UL> 
    </LI>
    <LI><img class="arrow-bottom" src="<?php echo get_template_directory_uri() . '/images/arrow-top.png'?>"><span class="sidebar"><input type="checkbox" name="cat2" id="cat2" value="" class="css-checkbox"><label for="cat2" class="css-label">efficitur</label></span>
    <UL>
            <LI><span class="sidebar"><input type="checkbox" name="sub4" id="sub4" value="" class="css-checkbox cat2"><label for="sub4" class="css-label">pulvinar</label></span></LI>
            <LI><span class="sidebar"><input type="checkbox" name="sub5" id="sub5" value="" class="css-checkbox cat2"><label for="sub5" class="css-label">elementum</label></span></LI>
            <LI><span class="sidebar"><input type="checkbox" name="sub6" id="sub6" value="" class="css-checkbox cat2"><label for="sub6" class="css-label">Aliquam</label></span></LI>
        </UL> 
    </LI>
    <LI><img class="arrow-bottom" src="<?php echo get_template_directory_uri() . '/images/arrow-top.png'?>"><span class="sidebar"><input type="checkbox" name="cat3" id="cat3" value="" class="css-checkbox"><label for="cat3" class="css-label">justo</label></span>
    <UL>
            <LI><span class="sidebar"><input type="checkbox" name="sub7" id="sub7" value="" class="css-checkbox cat3"><label for="sub7" class="css-label">Suspendisse</label></span></LI>
            <LI><span class="sidebar"><input type="checkbox" name="sub8" id="sub8" value="" class="css-checkbox cat3"><label for="sub8" class="css-label">ligula</label></span></LI>
            <LI><span class="sidebar"><input type="checkbox" name="sub9" id="sub9" value="" class="css-checkbox cat3"><label for="sub9" class="css-label">interdum</label></span></LI>
        </UL> 
    </LI>
</UL>


</div>


<div class="content" id="content">  
	<p class="pagetittle">Produtos</p>

    <div class="button_filtrar" id="filtro">FILTROS</div>

    <section id="noticias" class="noticias row col-md-8 col-sm-7 col-lg-9 col-xs-12">
        <div class="container hidden-xs">
                    <div class="row vertical-align" id="sliderrow">
                        <div  class="col-md-1 col-sm-1 col-lg-1 col-xs-2" style="padding:0;">
                        <img class="arrow arrow-left" src="<?php echo get_template_directory_uri() . '/images/arrow-left.png'?>">
                        </div>
                        <div class="slider-noticias hidden-xs col-md-10 col-sm-10 col-lg-10" id="slider-noticias" data-slick='{"slidesToShow": 3, "rows":3, "slidesToScroll": 3}'>


                            <div class='col-sm-4 col-md-4'>
                            <div class='noticia-body' style='background-image: url("https://images.etna.com.br/produtos/44/296644/296644_ampliada.jpg"'>
                            <div class='noticia-hover'><p class='noticia-text'>Lorem ipsum dolor sit amet</p>
                            <a data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                            </div>
                            </div>
                            </div>

                            <div class='col-sm-4 col-md-4'>
                            <div class='noticia-body' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Indaia_banqueta-300x300.jpg"'>
                            <div class='noticia-hover'><p class='noticia-text'>consectetur adipiscing elit, sed do eiusmod</p>
                            <a data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                            </div>
                            </div>
                            </div>

                            <div class='col-sm-4 col-md-4'>
                            <div class='noticia-body' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Tulipa_base_de_mesa-300x300.jpg"'>
                            <div class='noticia-hover'><p class='noticia-text'>tempor incididunt ut labore et</p>
                            <a data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                            </div>
                            </div>
                            </div>

                            <div class='col-sm-4 col-md-4'>
                            <div class='noticia-body' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Atlanta_Deck_Chair-300x300.jpg"'>
                            <div class='noticia-hover'><p class='noticia-text'>dolore magna aliqua. Ut enim</p>
                            <a data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                            </div>
                            </div>
                            </div>

                            <div class='col-sm-4 col-md-4'>
                            <div class='noticia-body' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/06/Cairo_Espreguicadeira-300x300.jpg"'>
                            <div class='noticia-hover'><p class='noticia-text'>minim veniam, quis nostrud exercitation</p>
                            <a data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                            </div>
                            </div>
                            </div>

                            <div class='col-sm-4 col-md-4'>
                            <div class='noticia-body' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/06/Cairo_Espreguicadeira-300x300.jpg"'>
                            <div class='noticia-hover'><p class='noticia-text'>unde omnis iste natus error sit</p>
                            <a data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                            </div>
                            </div>
                            </div>

                            <div class='col-sm-4 col-md-4'>
                            <div class='noticia-body' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Memphis_espreguicadeira-300x300.jpg"'>
                            <div class='noticia-hover'><p class='noticia-text'>how all this mistaken idea</p>
                            <a data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                            </div>
                            </div>
                            </div>

                            <div class='col-sm-4 col-md-4'>
                            <div class='noticia-body' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Brasil_mesa_de_centro-300x300.jpg"'>
                            <div class='noticia-hover'><p class='noticia-text'>odio dignissimos ducimus qui blanditiis</p>
                            <a data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                            </div>
                            </div>
                            </div>

                            <div class='col-sm-4 col-md-4'>
                            <div class='noticia-body' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/06/Siena_mesa_jantar-300x300.jpg"'>
                            <div class='noticia-hover'><p class='noticia-text'>debitis aut rerum necessitatibus</p>
                            <a data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                            </div>
                            </div>
                            </div>

                            <div class='col-sm-4 col-md-4'>
                            <div class='noticia-body' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Brasil_poltrona-300x300.jpg"'>
                            <div class='noticia-hover'><p class='noticia-text'>rerum hic tenetur a sapiente</p>
                            <a data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                            </div>
                            </div>
                            </div>
                           

                        </div>
                        <div  class="col-md-1 col-sm-1 col-lg-1 col-xs-2" style="padding:0;">
                        <img class="arrow arrow-right" src="<?php echo get_template_directory_uri() . '/images/arrow-right.png'?>">
                        </div>
                    </div>
        </div>

        <div class="hidden-md hidden-lg hidden-sm">

            <div class="slider-noticias hidden-sm hidden-md hidden-lg col-xs-12" data-slick='{"slidesToShow": 1, "rows":6, "slidesToScroll": 1}'>
                            

                                <div class="container low-border">
                                <div class="row">
                                    <div class='noticia-body col-xs-7' style='background-image: url("https://images.etna.com.br/produtos/44/296644/296644_ampliada.jpg");'></div>
                                        <div class="col-xs-5">
                                            <p class='noticia-text'>Lorem ipsum dolor sit amet</p>
                                            <a class="noticia-mobile-adicionar" data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                                        </div>
                                </div>
                                </div>

                                <div class="container low-border">
                                <div class="row">
                                    <div class='noticia-body col-xs-7' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Indaia_banqueta-300x300.jpg")'></div>
                                        <div class="col-xs-5">
                                            <p class='noticia-text'>consectetur adipiscing elit, sed do eiusmod</p>
                                            <a class="noticia-mobile-adicionar" data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                                        </div>
                                </div>
                                </div>

                                <div class="container low-border">
                                <div class="row">
                                    <div class='noticia-body col-xs-7' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Tulipa_base_de_mesa-300x300.jpg")'></div>
                                        <div class="col-xs-5">
                                            <p class='noticia-text'>tempor incididunt ut labore et</p>
                                            <a class="noticia-mobile-adicionar" data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                                        </div>
                                </div>
                                </div>

                                <div class="container low-border">
                                <div class="row">
                                    <div class='noticia-body col-xs-7' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Atlanta_Deck_Chair-300x300.jpg")'></div>
                                        <div class="col-xs-5">
                                            <p class='noticia-text'>dolore magna aliqua. Ut enim</p>
                                            <a class="noticia-mobile-adicionar" data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                                        </div>
                                </div>
                                </div>

                                <div class="container low-border">
                                <div class="row">
                                    <div class='noticia-body col-xs-7' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/06/Cairo_Espreguicadeira-300x300.jpg")'></div>
                                        <div class="col-xs-5">
                                            <p class='noticia-text'>minim veniam, quis nostrud exercitation</p>
                                            <a class="noticia-mobile-adicionar" data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                                        </div>
                                </div>
                                </div>

                                <div class="container low-border">
                                <div class="row">
                                    <div class='noticia-body col-xs-7' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Memphis_espreguicadeira-300x300.jpg")'></div>
                                        <div class="col-xs-5">
                                            <p class='noticia-text'>unde omnis iste natus error sit</p>
                                            <a class="noticia-mobile-adicionar" data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                                        </div>
                                </div>
                                </div>

                                <div class="container low-border">
                                <div class="row">
                                    <div class='noticia-body col-xs-7' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Brasil_mesa_de_centro-300x300.jpg")'></div>
                                        <div class="col-xs-5">
                                            <p class='noticia-text'>how all this mistaken idea</p>
                                            <a class="noticia-mobile-adicionar" data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                                        </div>
                                </div>
                                </div>

                                <div class="container low-border">
                                <div class="row">
                                    <div class='noticia-body col-xs-7' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/06/Siena_mesa_jantar-300x300.jpg")'></div>
                                        <div class="col-xs-5">
                                            <p class='noticia-text'>odio dignissimos ducimus qui blanditiis</p>
                                            <a class="noticia-mobile-adicionar" data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                                        </div>
                                </div>
                                </div>

                                <div class="container low-border">
                                <div class="row">
                                    <div class='noticia-body col-xs-7' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Mesa_marina_caf%C3%A9_com_furo-300x300.jpg")'></div>
                                        <div class="col-xs-5">
                                            <p class='noticia-text'>debitis aut rerum necessitatibus </p>
                                            <a class="noticia-mobile-adicionar" data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                                        </div>
                                </div>
                                </div>

                                <div class="container low-border">
                                <div class="row">
                                    <div class='noticia-body col-xs-7' style='background-image: url("http://greenhousemoveis.com.br/wp-content/uploads/2016/05/Brasil_poltrona-300x300.jpg")'></div>
                                        <div class="col-xs-5">
                                            <p class='noticia-text'>rerum hic tenetur a sapiente</p>
                                            <a class="noticia-mobile-adicionar" data-toggle="modal" data-target=".noticiaModal'.$i.'">ADICIONAR</a>
                                        </div>
                                </div>
                                </div>

            </div>

    <div class="row" style="position:relative; height:auto;">
    <img class="arrow arrow-left col-xs-2 col-sm-1 col-md-1 col-lg-1" src="<?php echo get_template_directory_uri() . '/images/arrow-left.png'?>" id="arrow-left">
    <div class="col-xs-8 col-sm-11 col-md-11 col-lg-11"></div>
    <img class="arrow arrow-right col-xs-2 col-sm-1 col-md-1 col-lg-1" src="<?php echo get_template_directory_uri() . '/images/arrow-right.png'?>" id="arrow-right">
    </div>

        </div>
    </section>

    

</div>




<div class="bottonimage" id="bottonimage"></div>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript">


$("#arrow-left").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
$("#arrow-right").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});



$(function(){
$('#example_tree').find('img').click(function(e){



    $(this).parent().children('UL').toggle("Fold", "", 500);

    if($(this).attr("src") == "<?php echo get_template_directory_uri() . '/images/arrow-right-filter.png'?>"){
    // code to be executed if condition is true
    $(this).attr("src","<?php echo get_template_directory_uri() . '/images/arrow-top.png'?>");
} 
else {
    // code to be executed if condition is false
    $(this).attr("src","<?php echo get_template_directory_uri() . '/images/arrow-right-filter.png'?>");
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
   
    $('#example_tree').find('img').trigger( "click" );
    $('#filtro').on('click touchstart', function(e){
        $('html').toggleClass('menu-filter-active');
        e.preventDefault();
    });

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
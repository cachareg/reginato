$ = jQuery;
$(document).ready(function(){
    jQuery(window).load(function() {
        jQuery(".loader").fadeOut(1500);
    });
	jQuery(".um-register").removeClass("uimob500");
	if($("#loginform #user_login").length){
		$("#loginform #user_login").attr("placeholder", "NOME");
	}
	if($("#loginform #user_pass").length){
		$("#loginform #user_pass").attr("placeholder", "SENHA");
	}
	if($("#telefone-2261").length){
		$("#telefone-2261").mask("(99) 999999999");
	}
	if($("#cpf-2261").length){
		$("#cpf-2261").mask("999.999.999-99");
	}
	if($("#nascimento-2261").length){
		$("#nascimento-2261").mask("99/99/9999");
	}
    $('nav').onePageNav({
        easing: 'linear',
    });
    $('.destaque .overlay').height(window.innerHeight);
    $('.destaque .slide-destaque').height(window.innerHeight);
    $('.destaque .slider-destaque').css("margin-top", (-1)*$('.destaque .overlay').height());
    $('.destaque .destaque-mobile').height(window.innerHeight);
    $('.destaque .destaque-mobile').css("margin-top", (-1)*$('.destaque .overlay').height());
    $('.slider-destaque').on('init', function(slick){
        zoomInterval = setInterval(function(){
            $('.destaque .slick-active img').width($('.destaque .slick-active img').width() + 1);
        }, 80);
    });

    $('.slider-destaque').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        fade: true,
        arrows: false,
    });
    $('.slider-tema').slick({
        prevArrow: '.evento .arrow-left',
        nextArrow: '.evento .arrow-right',
        dots: true,
        variableHeight: true,
        responsive:[
            {
                breakpoint: 991,
                settings: {
                    adaptiveHeight: true,
                }
            },
        ]

    });
    $('.slider-palestrantes').slick({
        prevArrow: '.palestrantes .arrow-left',
        nextArrow: '.palestrantes .arrow-right',
    });
    $('.slider-noticias').slick({
        prevArrow: '.noticias .arrow-left',
        nextArrow: '.noticias .arrow-right',
        dots: true,
    });
    $('.slider-noticias-mobile').slick({
        prevArrow: '.noticias .arrow-left',
        nextArrow: '.noticias .arrow-right',
        dots: true,
        adaptiveHeight: true,
    });
    $('.slider-destaque').on('afterChange', function(slick, currentSlide){
        $('.destaque .slick-slide img').css("width", "100%");
        zoomInterval = setInterval(function(){
            $('.destaque .slick-active img').width($('.destaque .slick-active img').width() + 1);
        }, 80);
    });
    $('.slider-destaque').on('beforeChange', function(slick, currentSlide, nextSlide){
        clearInterval(zoomInterval);
    });
    function initialize() {
        var myLatlng = new google.maps.LatLng(-20.278850351644486, -40.30158624476746);
        var mapOptions = {
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            navigationControl: false,
            mapTypeControl: false,
            scaleControl: false,
            disableDoubleClickZoom: true,
            zoom: 16,
            scrollable: false,
        }
        var map = new google.maps.Map(document.getElementById('google-maps'), mapOptions);
        var map2 = new google.maps.Map(document.getElementById('google-maps2'), mapOptions);

        //=====Initialise Default Marker
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'marker'
            //=====You can even customize the icons here
        });
        var marker2 = new google.maps.Marker({
            position: myLatlng,
            map: map2,
            title: 'marker'
            //=====You can even customize the icons here
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    /*$(window).scroll(function() {
        $(".logo img").css("opacity", 1 - (1.65*$(window).scrollTop() / ($(".logo").height())));
        $(".logo span").css("opacity", 1 -(1.65*$(window).scrollTop() / ($(".logo").height())));
        $(".logo img").css("margin-top", $(window).scrollTop()/1.2);
    });*/
    $('.menu-list').click('li', function() {
        $('.menu-list').collapse('hide');
    });
	
	$(".page-painel .main-pane").height(($(window).innerHeight()-$(".pessoas").height() - $("ul.nav-tabs").height())*0.75);


    $(".btn-etapa2").click(function(){
        $(".etapa1").fadeOut();
        $(".etapa2").fadeIn();
    });
    $(".btn-etapa1").click(function(){
        $(".etapa2").fadeOut();
        $(".etapa1").fadeIn();
    });

    $('.btnNext').click(function(){
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
        $("html, body").animate({
            scrollTop: 0
        }, 600);
    });

    $('.btnPrev').click(function(){
        $('.nav-tabs > .active').prev('li').find('a').trigger('click');
        $("html, body").animate({
            scrollTop: 0
        }, 600);
    });

    $(".item-grade-out").hide();
    $(".visita").parent().show();

    $(".seletores li.tab-palestras").click(function(){
        $(".palestra").parent().fadeIn();
        $(".visita").parent().fadeOut();
        $(".minicurso").parent().fadeOut();
        $(this).addClass("active");
        $(".seletores li.tab-minicursos").removeClass("active");
        $(".seletores li.tab-visitas").removeClass("active");
    });
    $(".seletores li.tab-minicursos").click(function(){
        $(".minicurso").parent().fadeIn();
        $(".visita").parent().fadeOut();
        $(".palestra").parent().fadeOut();
        $(this).addClass("active");
        $(".seletores li.tab-palestras").removeClass("active");
        $(".seletores li.tab-visitas").removeClass("active");
    });
    $(".seletores li.tab-visitas").click(function(){
        $(".visita").parent().fadeIn();
        $(".palestra").parent().fadeOut();
        $(".minicurso").parent().fadeOut();
        $(this).addClass("active");
        $(".seletores li.tab-palestras").removeClass("active");
        $(".seletores li.tab-minicursos").removeClass("active");
    });

    var maxHeight = 0;
    $(".tab-pane").each(function(){
        var active = $(this).hasClass("active");
        $(this).addClass("active");
        var left_value = 0;
        var n_coluna = 0;
        var minicursos_ocupados = [];
        var visitas_ocupadas = [];
        var palestras_ocupadas = [];
        $(this).find(".item-grade").each(function(){
            n_coluna++;
            var tipo = $(this).find("input[name=tipo]").val();
            var inicio1 = parseInt($(this).find("input[name=inicio]").val().replace(":", ""));
            var fim1 = parseInt($(this).find("input[name=fim]").val().replace(":", ""));
            var hora_inicio = String(inicio1).slice(0,2) + ":" + String(inicio1).slice(2);
            var hora_fim = String(fim1).slice(0,2) + ":" + String(fim1).slice(2);
            if(inicio1.toString().length == 3){
                hora_inicio = String(inicio1).slice(0,1) + ":" + String(inicio1).slice(1);
            }
            if(fim1.toString().length == 3){
                hora_fim = String(fim1).slice(0,1) + ":" + String(fim1).slice(1);
            }
            var a = hora_inicio.split(':');
            var inicio_minutos = (+a[0]) * 60 + (+a[1]);
            var b = hora_fim.split(':');
            var fim_minutos = (+b[0]) * 60 + (+b[1]);
            var intervalo = (fim_minutos - inicio_minutos)/20;
            var altura = String(intervalo*60);
            var top = ((inicio_minutos-(6*60))/20)*60;
            $(this).css("height", (altura-10) + "px");
            $(this).parent().css("top", (top+5) + "px");

            left_value = 0;
            var colisao = true;
            while(colisao){
                colisao = false;
                if(tipo == "minicurso") {
                    minicursos_ocupados.forEach(function (value) {
                        var outro_inicio = value[0];
                        var outro_fim = value[1];
                        var outro_left = value[2];

                        if (left_value == outro_left && ((inicio_minutos >= outro_inicio && inicio_minutos < outro_fim) || (fim_minutos >= outro_fim && fim_minutos < outro_fim))) {
                            colisao = true;
                        }
                    });
                }
                else if(tipo == "visita") {
                    visitas_ocupadas.forEach(function (value) {
                        var outro_inicio = value[0];
                        var outro_fim = value[1];
                        var outro_left = value[2];

                        if (left_value == outro_left && ((inicio_minutos >= outro_inicio && inicio_minutos < outro_fim) || (fim_minutos >= outro_fim && fim_minutos < outro_fim))) {
                            colisao = true;
                        }
                    });
                }
                else if(tipo == "palestra") {
                    palestras_ocupadas.forEach(function (value) {
                        var outro_inicio = value[0];
                        var outro_fim = value[1];
                        var outro_left = value[2];

                        if (left_value == outro_left && ((inicio_minutos >= outro_inicio && inicio_minutos < outro_fim) || (fim_minutos >= outro_fim && fim_minutos < outro_fim))) {
                            colisao = true;
                        }
                    });
                }
                if(colisao){
                    left_value += 16.5;
                }
            }


            $(this).parent().css("left", left_value + "%");
            var espaco = [inicio_minutos, fim_minutos, left_value];
            if(tipo == "palestra"){
                palestras_ocupadas.push(espaco);
            } else if (tipo == "visita"){
                visitas_ocupadas.push(espaco);
            } else if (tipo == "minicurso"){
                minicursos_ocupados.push(espaco);
            }
        });
        if(!active){
            $(this).removeClass("active");
        }
    });


    var selected_items = [];

    var minicursos = 0;
    var visitas = 0;

    $('.item-grade').click(function(){
        var titulo = $(this).find(".item-grade-title").html();
        var inicio1 = parseInt($(this).find("input[name=inicio]").val().replace(":", ""));
        var fim1 = parseInt($(this).find("input[name=fim]").val().replace(":", ""));
        var tipo = $(this).find("input[name=tipo]").val();
        if(tipo == "palestra"){
            var tipo_palestra = $(this).find("input[name=tipo_palestra]").val();
        }
        var id = jQuery(this).attr('class').split(' ')[1];
        var dia_click = $(this).attr('class').split(' ')[3];
        if($(this).hasClass("selected-input")){
            $(".quadro-" + id).remove();
            $(this).find("input").prop("checked", false);
            $(this).removeClass("selected-input");
            var index = selected_items.indexOf(id);
            if(index > -1){
                selected_items.splice(index, 1);
            }
            $(".item-grade").removeClass("disabled-input");
        }
        else if(!$(this).hasClass("disabled-input")){
            if($(this).hasClass("sold-out")){
                return false;
            }
            $(this).find("input").prop("checked", true);
            $(this).addClass("selected-input");
            selected_items.push(id);

            var hora_inicio = String(inicio1).slice(0,2) + ":" + String(inicio1).slice(2);
            var hora_fim = String(fim1).slice(0,2) + ":" + String(fim1).slice(2);
            if(inicio1.toString().length == 3){
                hora_inicio = String(inicio1).slice(0,1) + ":" + String(inicio1).slice(1);
            }
            if(fim1.toString().length == 3){
                hora_fim = String(fim1).slice(0,1) + ":" + String(fim1).slice(1);
            }
            var a = hora_inicio.split(':'); // split it at the colons
            var inicio_minutos = (+a[0]) * 60 + (+a[1]);
            var b = hora_fim.split(':'); // split it at the colons
            var fim_minutos = (+b[0]) * 60 + (+b[1]);
            var intervalo = (fim_minutos - inicio_minutos)/20;
            var altura = String(intervalo*30);
            var top = ((inicio_minutos-(6*60))/20)*30;

            var quadro_grade = "<div class='quadro-grade quadro-"+ id +"' style='height: "+altura+"px; top: "+top+"px'><div class='quadro-grade-texto quadro-"+ tipo +"'>" + titulo + "<br>" + hora_inicio + " às " + hora_fim + "</div></div>";
            var coluna = $(".grade-final .col-dia-" + dia_click);
            coluna.append(quadro_grade);

        }
        if(!$(this).hasClass("disabled-input")){
            selected_items.forEach(function(value){

                var dia = $("." + value).attr('class').split(' ')[3];
                var inicio3 = parseInt($("." + value).find("input[name=inicio]").val().replace(":", ""));
                var fim3 = parseInt($("." + value).find("input[name=fim]").val().replace(":", ""));
                console.log(inicio3);
                console.log(fim3);
                if($("." + value).hasClass("visita")){
                    visitas++;
                    $(this).find("input").prop("checked", false);
                    $(this).find("input").prop("disabled", true);
                    $(".visita").not("." + value).addClass("disabled-input");
                }
                if($("." + value).hasClass("minicurso")){
                    minicursos++;
                    $(this).find("input").prop("checked", false);
                    $(this).find("input").prop("disabled", true);
                    $(".minicurso").not("." + value).addClass("disabled-input");
                }
                $('#' + dia + ' .item-grade').not("." + value).each(function(){
                    var inicio2 = parseInt($(this).find("input[name=inicio]").val().replace(":", ""));
                    var fim2 = parseInt($(this).find("input[name=fim]").val().replace(":", ""));
                    if($(this).hasClass("3095")){

                        console.log(inicio2);
                        console.log(fim2);
                    }
                    if((inicio2 >= inicio3 && inicio2 < fim3) ||
                        (fim2 > inicio3 && fim2 <= fim3) ||
                        (inicio3 >= inicio2 && inicio3 < fim2) ||
                        (inicio3 >= inicio2 && inicio3 < fim2)) {
                        $(this).find("input").prop("checked", false);
                        $(this).find("input").prop("disabled", true);
                        $(this).addClass("disabled-input");
                    }
                });
            });

        }

    });

    if($(".opcoes-input").length){
        $(".opcao-input").each(function(){
            var opcao_id = $(this).val();
            $("." + opcao_id).click();
        });
    }




});

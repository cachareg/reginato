<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Catalog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<?php global $current_user;
      get_currentuserinfo();?>

<div>
<nav class="menu" id="menu">
    <div class="navbar-header" id="navheader">
        <span class="menu-anchor"></span>
    </div>

    <div class="side-navbar-header">
    </div>

        <ul class="menu-list" id="main-menu">
            <li><a href="/">Home</a></li>

            <?php
                if(is_user_logged_in()){
                    ?>
                        <li><a href="/produtos">Produtos</a></li>
                    <?php
                }else{
                    ?>
                        <li><a href="/login">Produtos</a></li>
                    <?php
                }
            ?>

            <?php
                if(is_user_logged_in()){
                    ?>
                        <li><a href="/lancamentos">Lançamentos</a></li>
                    <?php
                }else{
                    ?>
                        <li><a href="/login">Lançamentos</a></li>
                    <?php
                }
            ?>

            <li><a href="/contato">Contato</a></li>

            <?php
     if(!is_user_logged_in()){
        echo "<a href='/login' class='inscreva'>Login</a>";
     }else{
        ?>
        <div class='bemvindo'>Bem Vindo, <?php echo $current_user->user_login ?> &nbsp </div>
        <a href="<?php echo wp_logout_url(); ?>" class="inscreva">Logout</a>
        <?php
     }

     ?>
 </ul>
     
</nav>
</div>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    
<script type="text/javascript">
    
    $(document).ready(function(){
    $('.menu-anchor').on('click touchstart', function(e){
        $('html').toggleClass('menu-active');
        e.preventDefault();
    });
})

</script>
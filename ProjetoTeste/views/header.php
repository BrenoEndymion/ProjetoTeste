<html>
    <head>
        <meta charset="UTF-8">
        <title>Titulo</title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/css.css">
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script> 
        <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script> 
    </head>
    <body>
        <div id="header">
            Header
            <br />
            <a href="<?php echo URL; ?>index">Index</a>
            <?php if(Session::get('LogIn') == true ){ ?>
            <a href="<?php echo URL; ?>dashboard/logout">LogOut</a>  
            <?php }else{ ?>
            <form action="#!" method="POST">
                <input type="text" name="nome" placeholder="Digite o Nome" id="nome" required />
                <input type="submit" value="Enviar" id="enviar">
            <!--- <a href="<?php echo URL; ?>login">Login</a> -->
            </form>
            <?php } ?>
        </div>

        <div id="content">
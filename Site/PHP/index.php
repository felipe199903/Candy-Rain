<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compilado/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compilado/style-form.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compilado/style-produtos.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compilado/style-footer.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compilado/style-about.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<style>
      body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
      .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
      .fa-anchor,.fa-birthday-cake {font-size:200px} 



    /* JOAO EDIT OBS: as imgs tirei só a "/" antes do nome da pasta, aquilo tava bugando... */
    li.nav-item { /* manter text do nav alinhados ao meio da linha */
        line-height: 85px;
    }

    div#home { /* diminuir margem do banner com o topo(GAMBIARRA) */
        margin-top: -77px;
    }


</style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
<body>
    <main class="site">
		<?php
			require_once("nav.php")
		?>
        <?php 
            require_once("carousel.php")
        ?>
        <?php
			require_once("about.php")
		?>
        <?php 
            require_once("candy.php")
        ?>
        <?php 
            require_once("footer.php")
        ?>
    </main>
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="node_modules/bootstrap/js/dist/scroll.js"></script>
</body>
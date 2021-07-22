<header class="header">
    <div class="container">
        <div class="btn-menu">
            <label for="btn-menu">☰</label>
        </div>
        <a class="logo" href=<?php echo  fromroot($file, "index.php"); ?>>
            <img src=<?php echo fromroot($file, "img/logo/logoudablanco2.png"); ?> alt="">
        </a>
        <nav class="menu">
            <a href=<?php echo fromroot($file, "dashboard/"); ?>>Inicio</a>
            <a href=<?php echo fromroot($file, "dashboard/Perfil.php"); ?>>Mi Perfil</a>
            <a href=<?php echo fromroot($file, "database/logout.php"); ?>>Desconectarse</a>
        </nav>
    </div>
</header>
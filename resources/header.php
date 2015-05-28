<div class="container">
    <img class="img-responsive" src="img/header.jpg"/>
</div>

<?php
@session_start();
    $home          =   "link";
    $menu          =   "link";
    $reserveren    =   "link";
    $historie      =   "link";
    $nieuws        =   "link";
    $contact       =   "link";



    $menuLinks=basename($_SERVER['PHP_SELF'],".php");

    switch ($menuLinks) {
        case 'index':
            $home               = "linkActiveHome";
            break;
        case 'menu':
            $menu               = "linkActive";
            break;
        case 'reserveren':
            $reserveren         = "linkActive";
            break;
        case 'historie':
            $historie           = "linkActive";
            break;
        case 'nieuws':
            $nieuws             = "linkActive";
            break;
        case 'contact':
            $contact            = "linkActive";
    }

?>
<div class="container">
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand <?php echo $home; ?>" href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/index.php'?> >Startpagina</a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
        <!-- Nav left -->

        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a class="<?php echo $menu ?> "           href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/menu.php'?>>Menu</a></li>
            <li><a class="<?php echo $reserveren ?> "     href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/reserveren.php'?>>Reserveren</a></li>
            <li><a class="<?php echo $historie ?> "       href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/historie.php'?>>Historie</a></li>
            <li><a class="<?php echo $nieuws ?> "         href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/nieuws.php'?>>Nieuws</a></li>
            <li><a class="<?php echo $contact ?> "        href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/contact.php'?>>Contact</a></li>
        </ul>
    </div><!--/.nav-collapse -->
</div>
</nav>
</div>
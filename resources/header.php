<div class="container">
    <img class="img-responsive" src="img/header.jpg"/>
</div>

<script>

    $(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
    });

</script>

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
        case 'kaart':
            $nieuws             = "linkActive";
            break;
        case 'lunch':
            $nieuws             = "linkActive";
            break;
        case 'diner':
            $nieuws             = "linkActive";
            break;
        case 'dessert':
            $nieuws             = "linkActive";
            break;
        case 'contact':
            $contact            = "linkActive";
    }

?>
<div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand <?php echo $home; ?>" href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/index.php'?> >Home</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="<?php echo $reserveren ?> "     href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/reserveren.php'?>>Reserveren</a></li>
                    <li><a class="<?php echo $historie ?> "       href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/historie.php'?>>Historie</a></li>
                    <li><a class="<?php echo $nieuws ?> "         href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/nieuws.php'?>>Nieuws</a></li>
                    <li><a class="<?php echo $contact ?> "        href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/contact.php'?>>Contact</a></li>
                    <li class="dropdown">
                        <a class="<?php echo $menu ?>" href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/kaart.php'?> id="dropdownmenu">Onze kaart <b class="caret"></b></a>
                        <ul id="dropdownmenus" class="dropdown-menu">
                            <li><a class="<?php echo $lunch ?> " id="dropdownmenu" href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/lunch.php'?>>Lunch</a></li>
                            <li><a class="<?php echo $diner ?> " id="dropdownmenu" href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/diner.php'?>>Diner</a></li>
                            <li><a class="<?php echo $desert ?> " id="dropdownmenu" href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/dessert.php'?>>Dessert</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
</div>
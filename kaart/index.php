<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
    <title>
        Kaart | Café Restaurant Het Witte Paard
    </title>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<?php include '../resources/head.php'; ?>

<body>
<?php include '../resources/header.php'; ?>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/index.php'?>>Home</a></li>
                <li class="active">Kaart</li>
        </ol>
    </div>
</div>
<div class="content container ">
    <div class="container-fluid" style="padding-left: 0;">
        <div class="col-md-4">
            <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/kaart/lunch.php'?> class="thumbnail" style="background-color: #FFDCAA; color: black; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
                <img alt="Lunch Kaart" src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/img/lunch.jpg'?>>
                <h2 style="color: black;">Lunch</h2>
            </a>
        </div>
        <div class="col-md-4">
            <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/kaart/diner.php'?> class="thumbnail" style="background-color: #FFDCAA; color: black; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
                <img alt="Diner Kaart" src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/img/diner.jpg'?>>
                <h2 style="color: black;">Diner</h2>
            </a>
        </div>
        <div class="col-md-4">
            <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/kaart/dessert.php'?> class="thumbnail" style="background-color: #FFDCAA; color: black; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
                <img alt="Dessert Kaart" src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/img/dessert.jpg'?>>
                <h2 style="color: black;">Dessert</h2>
            </a>
        </div>
    </div>
</div>



<div class="container">
<?php include '../resources/footer.php'; ?>
</div>
</body>


</html>
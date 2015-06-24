<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
    <title>
        Dessert | Café Restaurant Het Witte Paard
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
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/kaart/index.php'?>>Kaart</a></li>
                <li class="active">Dessert</li>
        </ol>
    </div>
</div>
<div class="content container " style="background-color: #FFDCAA;  box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
            <?php

                $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/menu/?kaart=1');
                $data = json_decode($data,1);
                $test = $data[0];

                echo '<pre>';var_dump($data);echo '</pre>';
                echo $data[$test]["Categorie"];

               
                ?>
    <div class="container-fluid" style="padding-left: 0;">
         <div class="menuOverzicht">
            <div class="col-xs-12 col-md-6">
                
            </div>

            <div class="col-xs-12 col-md-6">
                
            </div>
        </div>
    </div>
</div>



<div class="container">
<?php include '../resources/footer.php'; ?>
</div>
</body>


</html>
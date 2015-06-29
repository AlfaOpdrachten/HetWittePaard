<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
    <title>
        Lunch | Café Restaurant Het Witte Paard
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
            <li class="active">Lunch</li>
        </ol>
    </div>
</div>
<div class="content container " style="background-color: #FFDCAA;  box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
    <div class="container-fluid" style="padding-left: 0;">
                <?php

                $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/menu/?kaart=1');
                $data = json_decode($data,1);

                // echo '<pre>';var_dump($data);echo '</pre>';
                // echo $data[$test]["Categorie"];

               
                ?>
       <div class="menuOverzicht">
            <div class="col-md-6">
            <?php
            // Soupen
                    echo '<div class="col-xs-8 col-md-8">
                                <h2>'. $data[1]["Categorie"].'<h2>
                            </div>
                            ';
                    for($i = 1; $i <= $data[0]; $i++){
                        if ($data[$i]['Categorie'] == 'Soepen & Brood'){
                       echo '
                            <div class="col-xs-8 col-md-8">
                                <h3>'. $data[$i]["Naam"].'<h3>
                            </div>
                            
                            <div class="col-xs-4 col-md-4 prijs">
                                 <p>€'. $data[$i]["Prijs"] .'</p>
                             </div>
                             <div class="col-xs-12 col-md-12">
                                 <p style="font-style: italic; text-shadow: 0px 1px rgb(51, 51, 51);">'. $data[$i]["Beschrijving"].'<p>
                            </div>
                             ';
                         }
                     }
            
            // Tosti's
                    echo '<div class="col-xs-8 col-md-8">
                                <h2>Tosti\'s<h2>
                            </div>
                            ';
                         for($i = 1; $i <= $data[0]; $i++){
                            if ($data[$i]['Categorie'] == 'Tosti\'s'){
                            echo '
                            <div class="col-xs-8 col-md-8">
                                <h3>'. $data[$i]["Naam"].'<h3>
                            </div>
                            
                            <div class="col-xs-4 col-md-4 prijs">
                                 <p>€'. $data[$i]["Prijs"] .'</p>
                             </div>
                             <div class="col-xs-12 col-md-12">
                                 <p style="font-style: italic; text-shadow: 0px 1px rgb(51, 51, 51);">'. $data[$i]["Beschrijving"].'<p>
                            </div>
                             ';
                         }
                    } 
            
            // Belegde broodjes
                    echo '<div class="col-xs-8 col-md-8">
                                <h2>Voorgerechten<h2>
                            </div>
                            ';
                    for($i = 1; $i <= $data[0]; $i++){
                        if ($data[$i]['Categorie'] == 'Belegde broodjes(italiaanse bol / stokbroodje / waldcorn)'){
                       echo '
                            <div class="col-xs-8 col-md-8">
                                <h3>'. $data[$i]["Naam"].'<h3>
                            </div>
                            
                            <div class="col-xs-4 col-md-4 prijs">
                                 <p>€'. $data[$i]["Prijs"] .'</p>
                             </div>
                             <div class="col-xs-12 col-md-12">
                                 <p style="font-style: italic; text-shadow: 0px 1px rgb(51, 51, 51);">'. $data[$i]["Beschrijving"].'<p>
                            </div>
                             ';
                         }
                     }
                

                ?>
            </div>
            <div class="col-md-6">
                <?php
                // uitsmijters
                    echo '<div class="col-xs-8 col-md-8">
                                <h2>Uitsmijters<h2>
                            </div>
                            ';
                    for($i = 1; $i <= $data[0]; $i++){
                        if ($data[$i]['Categorie'] == 'uitsmijters'){
                       echo '
                            <div class="col-xs-8 col-md-8">
                                <h3>'. $data[$i]["Naam"].'<h3>
                            </div>
                            
                            <div class="col-xs-4 col-md-4 prijs">
                                 <p>€'. $data[$i]["Prijs"] .'</p>
                             </div>
                             <div class="col-xs-12 col-md-12">
                                 <p style="font-style: italic; text-shadow: 0px 1px rgb(51, 51, 51);">'. $data[$i]["Beschrijving"].'<p>
                            </div>
                             ';
                         }
                     }
                // Warme lunch
                    echo '<div class="col-xs-8 col-md-8">
                                <h2>Warme Lunch<h2>
                            </div>
                            ';
                    for($i = 1; $i <= $data[0]; $i++){
                        if ($data[$i]['Categorie'] == 'Warme lunch'){
                       echo '
                            <div class="col-xs-8 col-md-8">
                                <h3>'. $data[$i]["Naam"].'<h3>
                            </div>
                            
                            <div class="col-xs-4 col-md-4 prijs">
                                 <p>€'. $data[$i]["Prijs"] .'</p>
                             </div>
                             <div class="col-xs-12 col-md-12">
                                 <p style="font-style: italic; text-shadow: 0px 1px rgb(51, 51, 51);">'. $data[$i]["Beschrijving"].'<p>
                            </div>
                             ';
                         }
                     }
                // Salades
                    echo '<div class="col-xs-8 col-md-8">
                                <h2>Salades<h2>
                            </div>
                            ';
                    for($i = 1; $i <= $data[0]; $i++){
                        if ($data[$i]['Categorie'] == 'Salades'){
                       echo '
                            <div class="col-xs-8 col-md-8">
                                <h3>'. $data[$i]["Naam"].'<h3>
                            </div>
                            
                            <div class="col-xs-4 col-md-4 prijs">
                                 <p>€'. $data[$i]["Prijs"] .'</p>
                             </div>
                             <div class="col-xs-12 col-md-12">
                                 <p style="font-style: italic; text-shadow: 0px 1px rgb(51, 51, 51);">'. $data[$i]["Beschrijving"].'<p>
                            </div>
                             ';
                         }
                     }
                ?>
            </div>
            </div>
        </div>
    </div>
</div>



<div class="container footer">
<?php include '../resources/footer.php'; ?>
</div>
</body>


</html>
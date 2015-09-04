<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
    <title>
        Dessert | Restaurant Het Witte Paard
    </title>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<?php include '../resources/head.php'; ?>

<body>
<?php include '../resources/header2.php'; ?>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/index.php'?>>Home</a></li>
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/kaart/index.php'?>>Kaart</a></li>
                <li class="active">Dessert</li>
        </ol>
    </div>
</div>
<div class="content container " style="background-color: #FFDCAA;  box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
            <?php

                $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/menu/?kaart=3');
                $data = json_decode($data,1);
                $test = $data[0];

                // echo '<pre>';var_dump($data);echo '</pre>';
                // echo $data[$test]["Categorie"];

               
                ?>
    <div class="container-fluid" style="padding-left: 0;">
         <div class="menuOverzicht">
            <div class="col-xs-12 col-md-6">
                <?php
                    // Soupen
                        echo '<div class="col-xs-8 col-md-8">
                                    <h2>'. $data[1]["Categorie"].'<h2>
                                </div>
                                ';
                        for($i = 1; $i <= $data[0]; $i++){
                            if ($data[$i]['Categorie'] == 'Ijs'){
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

            <div class="col-xs-12 col-md-6">
                <?php
                    // Soupen
                        echo '<div class="col-xs-8 col-md-8">
                                    <h2>Drinken<h2>
                                </div>
                                ';
                        for($i = 1; $i <= $data[0]; $i++){
                            if ($data[$i]['Categorie'] == 'Drinken'){
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



<div class="container footer">
<?php include '../resources/footer.php'; ?>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66973506-2', 'auto');
  ga('send', 'pageview');

</script>
</body>


</html>
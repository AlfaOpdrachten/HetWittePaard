<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
    <title>
        Café Restaurant Het Witte Paard
    </title>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<?php include 'resources/head.php'; ?>

<body>
<?php include 'resources/header.php'; ?>

<div class="container">
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
            <li class="active">Home</li>
        </ol>
    </div>
</div>
<div class="content container index">
    <div class="col-xs-12 col-md-8" style="padding-left:0px;">
        <div class="col-md-12" style="border: 1px solid black; box-shadow: 0px 0px 5px 0px black; background-color: bisque;">
            <h1>Over ons</h1>
            <p style="font-size: 15px;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam cum omnis rerum! Accusamus, ad, dicta ea ipsum iusto laudantium minus modi molestiae neque, pariatur quas recusandae suscipit tenetur ullam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloremque doloribus explicabo labore quasi ullam, ut! A, alias at atque est excepturi, fugiat harum possimus quibusdam ratione saepe tempore totam.</p>
        </div>
        <div class="col-xs-6 col-md-6" style="margin-top: 10px; padding: 0px;">
            <a href="/HetWittePaard/kaart/index.php" style="padding-bottom: 20px;">
                <div class="thumbnail" style="background-color: bisque; border: 1px solid black; box-shadow: 0px 0px 5px 0px black;">
                    <img src="img/menu1.jpg" alt="Menu">
                    <div class="caption">
                        <p><a class="btn btn-link" style="color: black; font-size: 35px;" href="/HetWittePaard/kaart/index.php" role="button">Bekijk menu</a></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-md-6" style="margin-top: 10px; padding: 0px; ">
            <a href="/HetWittePaard/reserveren.php">
                <div class="thumbnail" style="background-color: bisque; border: 1px solid black; box-shadow: 0px 0px 5px 0px black;">
                    <img src="img/reserveren.jpg" alt="Reserveren">
                    <div class="caption">
                        <p><a class="btn btn-link" style="color: black; font-size: 35px;" href="/HetWittePaard/reserveren.php" role="button">Reserveren</a></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xs-12 col-md-4" style="border: 1px solid black; margin-bottom: 50px; box-shadow: 0px 0px 5px 0px black;">
        
        <div class="col-md-12">
            <h2 style="font-size: 30px; text-align: center;">Nieuws</h2>
        </div>

        <?php

                $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.NIEUWS%');
                $data = json_decode($data,1);
                $test = $data[0];
                $testmax = 2;
                // echo '<pre>';var_dump($test);echo '</pre>';
                if(isset($data[2])){
                    for($i = 0; $i <= $testmax; $i++){
                    echo '<div class="col-md-12" style="margin-top: 10px;">
                        <div class="col-md-7">
                            <p style="font-size: 20px;">'.$data[$i+1]["Location"].'</p>
                        </div>
                        <div class="col-md-5">
                            <p style="font-size: 20px; text-align: right;">11-06-2015</p>
                        </div>
                        <br>
                        <br>
                        <p class="expanded">'. $data[$i+1]["Text"]. '</p>
                        <p class="collapsed"></p>
                        <hr style="border-color:#000000; box-shadow: 0px 0px 1px 0px black;">
                    </div>';
                    }
                }
                ?>
        
    </div>
</div>



<div class="container footer">
    <?php include 'resources/footer.php'; ?>
</div>

</body>


</html>
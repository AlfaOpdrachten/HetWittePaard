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
        <div class="col-md-12" style="border: 1px solid black; box-shadow: 0px 0px 10px 0px black; background-color: #FFDCAA;">
            <h1>Een korte introductie</h1>
            <p style="font-size: 15px;"> Restaurant Het Witte Paard bevindt zich in het prachtige Westerkwartier gebied,
                met vele fietsroutes,
                kleine watertjes en een groot meer.<br><br>
                U kunt bij ons genieten op de twee terrassen zowel aan de voor- zijkant, als ook het grote terras aan
                de achterkant, waar tevens een groot afgebakend en veilige speelweide is voor de kinderen.<br><br>
                Ook kunt u achter het pand gebruik maken van de ruime parkeerplaats.<br><br>
                Hopelijk staat u niets meer in de weg om eens langs te komen of te reserveren,
                wij zullen u graag hartelijk verwelkomen.</p>
                <?php

                $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.MENU.1');
                $data = json_decode($data,1);
                // var_dump($data);
                echo $data[1]["Text"];
                ?>
        </div>
        <div class="col-xs-6 col-md-6" style="margin-top: 10px; padding-right: 15px;padding-left:0px;">
            <a href="/kaart/index.php" style="padding-bottom: 20px;">
                <div class="thumbnail" style="background-color: #FFDCAA; border: 1px solid black; box-shadow: 0px 0px 10px 0px black;">
                    <?php

                    $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.MENU.2');
                    $data = json_decode($data,1);
                    // var_dump($data);
                    echo $data[1]["Text"];
                    ?>
                    <!-- <img src="img/menu1.jpg" alt="Menu">
                    <div class="caption">
                        <p><a class="btn btn-link" style="color: black; font-size: 35px;" href="/kaart/index.php" role="button">Bekijk menu</a></p>
                    </div> -->
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-md-6" style="margin-top: 10px; padding-left: 15px; padding-right: 0px; ">
            <a href="/reserveren.php">
                <div class="thumbnail" style="background-color: #FFDCAA; border: 1px solid black; box-shadow: 0px 0px 10px 0px black;">
                    <img src="img/reserveren.png" alt="Reserveren">
                    <div class="caption">
                        <p><a class="btn btn-link" style="color: black; font-size: 35px;" href="/reserveren.php" role="button">Reserveren</a></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xs-12 col-md-4" style="border: 1px solid black; margin-bottom: 50px; box-shadow: 0px 0px 10px 0px black; background-color: #FFDCAA;">
        
        <div class="col-md-12">
            <h2 style="font-size: 30px; text-align: center;">Nieuws</h2>
        </div>

        <?php

                $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/nieuws/');
                $data = json_decode($data,1);
                $testmax = 3;
                // echo '<pre>';var_dump($data);echo '</pre>';
                if(isset($data[0])){
                    for ($i=0; $i < $testmax; $i++) { 
                        echo '<div class="col-md-12" style="margin-top: 10px;">
                            <div class="col-md-12">
                                <p style="font-size: 20px;">'.$data[$i+1]["Title"].'</p>
                            </div>
                            <br>
                            <br>
                            <p class="expanded">'. $data[$i+1]["Text"]. '</p>
                            <p class="collapsed"></p>
                            <hr style="border-color:#000000; box-shadow: 0px 0px 10px 0px black;">
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
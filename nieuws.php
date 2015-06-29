<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
    <title>
        Nieuws | Café Restaurant Het Witte Paard
    </title>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<?php include 'resources/head.php'; ?>

<body>

<?php include 'resources/header.php'; ?>
<div class="container">
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/index.php'?>>Home</a></li>
                <li class="active">Nieuws</li>
        </ol>
    </div>
</div>
<div class="content container ">
    <div class="container-fluid" style="padding-left: 0;">
        <div class="row">
            <div class="col-md-8" style="padding-bottom: 5px;">
                <?php

                $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/nieuws/');
                $data = json_decode($data,1);
                $test = $data[0];

                //echo '<pre>';var_dump($data);echo '</pre>';
                for($i = 0; $i < $test; $i++){
                    echo '<div class="col-md-12" style="border: 1px solid black; margin-top: 10px; box-shadow: 0px 0px 10px 0px black; background-color: #FFDCAA;">
                    <div class="col-md-7">
                        <br>
                        <font size="6">'.$data[$i+1]["Title"].'</font>
                        <br>
                        <br>
                        <p class="expanded">'. $data[$i+1]["Text"]. '</p>
                        <p class="collapsed"></p>
                        <br>
                        <br>
                    </div>
                </div>';
                }
                
                ?>
            </div>
            <div class="col-md-4" style="border: 1px solid black; margin-bottom: 50px; margin-top: 10px; box-shadow: 0px 0px 10px 0px black; background-color: #FFDCAA;">
                <br>
                <div class="fb-page" data-href="https://www.facebook.com/HetWittePaardOostwold" data-width="350" data-height="500" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/HetWittePaardOostwold"><a href="https://www.facebook.com/HetWittePaardOostwold">CafÃ© Restaurant Het Witte Paard</a></blockquote></div></div>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="container footer">
    <?php include 'resources/footer.php'; ?>
</div>
</body>


</html>
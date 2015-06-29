<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        Contact | Café Restaurant Het Witte Paard
    </title>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<!-- De scripts -->
<?php include 'resources/head.php'; ?>

<body>
<?php include 'resources/header.php'; ?>
<?php

$test= "";
if(isset($_POST['submit']))
{
    $bericht = $_POST['naam'];
    $to = "martin.vinke.mv@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['naam'];

    $subject = "Vraag van het contactformulier";
    $subject2 = "Kopie van uw vraag bij het Witte Paard";
    $message = $name . " schreef het volgende:" . "\n\n" . $bericht;
    $message2 = "Hier is een kopie van uw vraag " . $name . "\n\n" . $bericht;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $test = "<h3 style='color:dodgerblue'>Mail verstuurd. Bedankt " . $name . ", we zullen zo spoedig mogelijk contact met u opnemen.</h3>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}

?>
<div class="container">
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
            <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/index.php'?>>Home</a></li>
            <li class="active">Contact</li>
        </ol>
    </div>
</div>

    <div class="content container ">
    	<div class="container-fluid">
  			<div class="row contact">
                
                <div class="col-xs-12 col-md-6">
                    <img src="img/restaurant.jpg" class="img-responsive" ALT="restaurant" WIDTH="500" HEIGHT="350" style=" box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
                </div>
                <div class="col-xs-12 col-md-6" id="informatie" style="margin-bottom: 100px;">
                    <div class="col-xs-12 col-sm-6 col-md-12" style="background-color: #FFDCAA; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
                        <h1>Adres gegevens</h1>
                        <div class="col-xs-12 col-sm-12 col-md-6" >
                            Hoofdstraat 217<br>
                            9828 PB Oostwold<br>
                            T: 050 - 5515 282<br>
                            Onze e-mail adres is: <br>
                           <a  href="mailto:info@caferestauranthetwittepaard.nl">info@caferestauranthetwittepaard.nl</a><br><br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-12" style="padding-bottom: 15px; background-color: #FFDCAA; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px; border-top: hidden;">
                        <h2 style="">Openingstijden</h2>

                        <div class="col-xs-12 col-sm-12 col-md-6">
                            Maandag: Gesloten<br>
                            Dinsdag: Gesloten<br>
                            Woensdag: 12:00 uur<br>
                            Donderdag: 12:00 uur<br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            Vrijdag: 12:00 uur<br>
                            Zaterdag: 12:00 uur<br>
                            Zondag: 15:00 uur<br>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12" style="background-color: #FFDCAA; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
                    <div class="col-md-12">
                        <?php if($test){echo $test;} ?>
                        <h2>Heeft u een vraag, stel hem!</h2>
                    </div>
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="naam">Naam:</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" style="display: block; width: 640px" id="naam" name="naam" placeholder="Naam">
                                <span class="text-danger">*</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">E-mail adres:</label>
                            <div class="col-sm-10">          
                                <input required type="email" class="form-control" id="email" style="display: block; width: 640px" name="email" placeholder="voorbeeld@mail.nl">
                                <span class="text-danger">*</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="bericht">Uw bericht:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" rows="5" style="display: block; width: 640px" id="bericht" name="bericht" placeholder="Typ hier uw bericht."></textarea>
                                <span class="text-danger">*</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" name="submit" id="submit" value="Verstuur bericht" class="btn btn-default">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<div class="container footer">
    <?php include 'resources/footer.php'; ?>
</div>

</body>


</html>
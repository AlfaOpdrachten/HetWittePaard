<!DOCTYPE html>
<html lang="nl">

<head>
    <title>
        Reserveren | Café Restaurant Het Witte Paard
    </title>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dat bent u bij het goede adres!">
</head>
<?php include 'resources/head.php'; ?>

<script>
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.ketCode
        if(charCode > 31 && (charCode < 45 || charCode > 57))
            return false;
        return true;
    }

    $(function(){
        $("#datepicker").datepicker();
        $.datepicker.formatDate("dd-mm-yy", new Date(1,1,2008));
    });

</script>

<?php
    $dezedag=date("l");
    $zondag="<option>15:00</option>
            <option>15:30</option>
            <option>16:00</option>
            <option>16:30</option>
            <option>17:00</option>
            <option>17:30</option>
            <option>18:00</option>
            <option>18:30</option>
            <option>19:00</option>
            <option>19:30</option>
            <option>20:00</option>
            <option>20:30</option>";

    $week="<option>12:00</option>
            <option>12:30</option>
            <option>13:00</option>
            <option>13:30</option>
            <option>14:00</option>
            <option>14:30</option>
            <option>15:00</option>
            <option>15:30</option>
            <option>16:00</option>
            <option>16:30</option>
            <option>17:00</option>
            <option>17:30</option>
            <option>18:00</option>
            <option>18:30</option>
            <option>19:00</option>
            <option>19:30</option>
            <option>20:00</option>
            <option>20:30</option>";



if(isset($_POST['submit']))
{

    $errors= [];
    $voornaam=$_POST['voornaam'];
    $achternaam=$_POST['achternaam'];
    $telnr=$_POST['tel'];

    //ga verder met het afhandelen

    if(is_numeric($voornaam))
    {
        $errors[] ="Dit lijkt geen echte naam te zijn...";
    }
    if(is_numeric($achternaam))
    {
        $errors[] ="Dit lijkt geen echte naam te zijn...";
    }

    $num_length = strlen((string)$telnr);
    if($num_length < 10 || $num_length > 11) {
        echo 'Dit gaat goed.';
    } else {
        $errors[] ="Dit lijkt geen echt telefoonnummer te zijn...";
    }

    if(count($errors) > 0){
        foreach($errors as $e){
            echo $e . "<br />";
        }
    }
    var_dump($errors);
}
?>

<body>
<?php include 'resources/header.php'; ?>
<div class="container">
    <div class="row" style="padding-left: 15px; padding-right: 15px; margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/index.php'?>>Home</a></li>
                <li class="active">Reserveren</li>
        </ol>
    </div>
</div>
<div class="content container ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="col-xs-12"><?php
                    if($dezedag=="Monday")
                    {
                        echo "<h3 style='color:red;'>Let op! Houd er rekening mee dat we vandaag en morgen nog gesloten zijn.</h3>";
                    }else if($dezedag=="Tuesday")
                    {
                        echo "<h3 style='color:red;'>Let op! Houd er rekening mee dat we vandaag nog gesloten zijn.</h3>";
                    }?></div>
                <form method="post" action="#" role="form">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="voornaam">Uw voornaam *</label>
                            <input type="text" class="form-control" id="voornaam" required style=" box-shadow: 0px 0px 5px 0px burlywood;">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="achternaam">Uw achternaam *</label>
                            <input type="text" class="form-control" id="achternaam" required style=" box-shadow: 0px 0px 5px 0px burlywood;">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-md-12">
                        <div class="form-group">
                            <label for="email">Uw E-Mail *</label>
                            <input type="email" class="form-control" id="email" required style=" box-shadow: 0px 0px 5px 0px burlywood;">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-md-12">
                        <div class="form-group">
                            <label for="tel">Uw telefoonnummer *</label>
                            <input type="tel" onkeypress="return isNumberKey(event)" class="form-control" id="tel" required style=" box-shadow: 0px 0px 5px 0px burlywood;">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="pers">Aantal personen *</label>
                            <input type="text" class="form-control" onkeypress="return isNumberKey(event)" id="pers" required style=" box-shadow: 0px 0px 5px 0px burlywood;">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="tijd">Voorkeurstijd *</label>
                            <select  class="form-control" id="tijd" required style=" box-shadow: 0px 0px 5px 0px burlywood;">
                                <?php if($dezedag=="Sunday")
                                {
                                    echo $zondag;
                                } else
                                {
                                    echo $week;
                                }?>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-md-12">
                        <div class="form-group">
                            <label for="datepicker">Datum *</label>
                            <input type="text" class="form-control"  id="datepicker" required style=" box-shadow: 0px 0px 5px 0px burlywood;">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-md-12">
                        <div class="form-group">
                            <label for="comment">Extra informatie</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 col-md-12">
                        <p>Vergeet niet de verplichte velden met een (*) in te vullen</p>
                    </div>

                    <div class="col-md-12">
                        <input type="submit" name="submit" value="submit" class="btn btn-default"><br><br>
                    </div>

                </form>
            </div>
            <div class="col-md-5" id="informatie">
                <div class="col-xs-12 col-sm-6 col-md-12" style="background-color: rgba(255, 255, 255, 0.6); box-shadow: 0px 0px 5px 0px gray;">
                    <h1>Adress gegevens</h1>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        Hoofdstraat 217<br>
                        9828 PB Oostwold<br>
                        T: 050 - 5515 282<br>
                        M:<a href="mailto:reserveren@caferestauranthetwittepaard.nl">reserveren@caferestauranthetwittepaard.nl</a><br><br>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12" style="background-color: rgba(255, 255, 255, 0.6); padding-bottom: 20px; box-shadow: 0px 0px 5px 0px gray;">
                    <h2>Openingstijden</h2>

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
        </div>
    </div>
</div>



<div class="container footer">
    <?php include 'resources/footer.php'; ?>
</div>

</body>


</html>
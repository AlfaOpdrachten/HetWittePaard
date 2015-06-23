<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        Café Restaurant Het Witte Paard | Contact
    </title>
</head>
<!-- De scripts -->
<?php include 'resources/head.php'; ?>

<body>
<?php include 'resources/header.php'; ?>
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
  			<div class="row">
                <div class="col-md-6">
                    <img src="img/restaurant.jpg" ALT="restaurant" WIDTH="500" HEIGHT="350">
                </div>
                <div class="col-md-5" id="informatie" style="margin-bottom: 100px;">
                    <div class="col-xs-12 col-sm-6 col-md-12" style="background-color: rgba(255, 255, 255, 0.6); box-shadow: 0px 0px 5px 0px gray;">
                        <h1>Adres gegevens</h1>
                        <div class="col-xs-12 col-sm-12 col-md-6" >
                            Hoofdstraat 217<br>
                            9828 PB Oostwold<br>
                            T: 050 - 5515 282<br>
                            M: <a href="mailto:reserveren@caferestauranthetwittepaard.nl">reserveren@caferestauranthetwittepaard.nl</a><br><br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-12" style="padding-bottom: 10px; background-color: rgba(255, 255, 255, 0.6); box-shadow: 0px 0px 5px 0px gray;">
                        <h1 style="">Openingstijden</h1>

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
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h2>Heeft u een vraag stel hem?</h2>
                    </div>
                    <form class="form-horizontal" role="form" action="formulierverzenden.php" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="naam">Naam:</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="naam" name="naam" placeholder="Naam">
                            <span class="text-danger">*</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">E-mail adres:</label>
                        <div class="col-sm-10">          
                            <input required type="email" class="form-control" id="email" name="email" placeholder="voorbeeld@mail.nl">
                            <span class="text-danger">*</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="bericht">Uw bericht:</label>
                        <div class="col-sm-10">
                            <textarea required class="form-control" rows="5" id="bericht" name="bericht" placeholder="Typ hier uw bericht."></textarea>
                            <span class="text-danger">*</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Verstuur bericht</button>
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
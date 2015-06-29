<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
    <title>
        Over Ons | Café Restaurant Het Witte Paard
    </title>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<?php include 'resources/head.php'; ?>

<body>
<?php include 'resources/header.php'; ?>

<div class="container">
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/index.php'?>>Home</a></li>
                <li class="active">Over Ons</li>
                       </ol>
    </div>
</div>
<div class="content container" style="margin-bottom: 5px; padding-bottom:10px;">
        <div class="border" style="border:1px solid black;box-shadow: 0px 0px 10px 0px black; overflow: hidden;background-color: #FFDCAA;">
            <div class="col-md-12" style="margin: 0px; padding: 0 !important; margin: 0 !important; background-color: #FFDCAA;">
                <div class="col-md-6" style="float:left; padding: 10px 50px">
                    <div class="col-md-12" style="padding: 0px;">
                        <h1>Parkeren</h1>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vulputate pulvinar turpis. consectetur adipiscing elit. Mauris vulputate pulvinar turpis. Suspendisse vel sem risus. 
                    </div>
                    <div class="col-md-12" style="padding: 0px;">
                        <h2>Speeltuin</h2>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vulputate pulvinar turpis. Suspendisse vel sem risus. consectetur adipiscing elit. Mauris vulputate pulvinar turpis. Suspendisse vel sem risus. consectetur adipiscing elit. Mauris vulputate pulvinar turpis. Suspendisse vel sem risus. 
                    </div>
                </div> 
                <div class="col-md-6 hidden-xs" style="float:right">
                    <div class="text-overons" style="padding: 10px 50px">  
                        <div id="myCarousel" class="carousel slide" data-interval="5000" >
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('.carousel').carousel();
                                });
                            </script>
                                <div class="carousel-inner" style="width: 400px; height 300px; float:right;">
                                    <div class="item active">
                                        <img src="img/lunch.jpg" width="400px" height="300px" class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <img src="img/locatie.jpg" width="400px" height="300px" class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <img src="img/menu1.jpg" width="400px" height="300px" class="img-responsive"/>
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </div>          


    </div>
        <div class="col-md-12" style="margin: 0px; background-color: #FFDCAA; padding: 0 !important;margin-bottom: 5px;">

            <div class="text-geschiedenis" style="padding: 10px 50px">
                <h1>Geschiedenis</h1>
                    <img src="img/locatie.jpg" width="255px" height="191px" class="img-responsive" style="float:right;" />            
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mollis dui vulputate diam cursus congue. Proin ligula arcu, consectetur ac auctor eget, fringilla sed nisi. Pellentesque id rutrum lectus. Mauris sollicitudin ligula id ipsum ultricies, ac tempor justo dapibus. Donec nulla dolor, tempus vitae aliquam auctor, aliquam et metus. Curabitur eleifend ultrices consequat. Mauris blandit, eros sit amet lacinia porta, purus orci dapibus odio, cursus tempus libero orci vel magna. Sed odio nulla, dictum vitae risus et, vestibulum porta mauris. Suspendisse in nisl elementum, lobortis turpis nec, vulputate lectus. Proin nec dolor nec dolor rhoncus eleifend eu a nibh. Proin et diam euismod, laoreet dolor congue, imperdiet nibh. Fusce euismod vulputate libero, sed dictum nisl lobortis vel. Fusce pulvinar vulputate auctor. Cras eleifend tellus non suscipit dapibus. Aliquam erat volutpat. Duis id volutpat felis.
                                
                </p>
            </div>
            
        </div>
    </div>
</div>



<div class="container footer">
    <?php include 'resources/footer.php'; ?>
</div>

</body>


</html>
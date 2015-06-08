<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<?php include '../resources/head.php'; ?>

<body>
<?php include '../resources/header.php'; ?>

<div class="content container ">
    <div class="container-fluid" style="padding-left: 0;">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/index.php'?>>Home</a></li>
                <li class="active">Kaart</li>
            </ol>
        </div>
        <div class="col-md-4">
            <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/kaart/lunch.php'?> class="thumbnail">
                <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/img/lunch.jpg'?> alt="...">
                <h2>Lunch</h2>
            </a>
        </div>
        <div class="col-md-4">
            <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/kaart/diner.php'?> class="thumbnail">
                <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/img/diner.jpg'?> alt="...">
                <h2>Diner</h2>
            </a>
        </div>
        <div class="col-md-4">
            <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/kaart/dessert.php'?> class="thumbnail">
                <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/img/dessert.jpg'?> alt="...">
                <h2>Dessert</h2>
            </a>
        </div>
    </div>
</div>




<?php include '../resources/footer.php'; ?>

</body>


</html>
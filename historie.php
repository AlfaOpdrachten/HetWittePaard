<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<?php include 'resources/head.php'; ?>

<body>
<?php include 'resources/header.php'; ?>

<div class="container">
    <div class="row" style="padding-left: 15px; padding-right: 15px; margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/index.php'?>>Home</a></li>
                <li class="active">Geschiedenis</li>
        </ol>
    </div>
</div>
<div class="content container" style="margin-bottom: 5px;">

    <div class="col-md-14" style="border: 1px solid black; margin: 0px; box-shadow: 0px 0px 5px 0px black; background-color: rgba(255, 255, 255, 0.6);   padding: 0 !important; margin: 0 !important;">           
        <div class="text-geschiedenis" style="padding: 10px 50px">            
            <p>
            <h1>Geschiedenis</h1>
            <div id="myCarousel" class="carousel slide" data-interval="5000">
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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mollis dui vulputate diam cursus congue. Proin ligula arcu, consectetur ac auctor eget, fringilla sed nisi. Pellentesque id rutrum lectus. Mauris sollicitudin ligula id ipsum ultricies, ac tempor justo dapibus. Donec nulla dolor, tempus vitae aliquam auctor, aliquam et metus. Curabitur eleifend ultrices consequat. Mauris blandit, eros sit amet lacinia porta, purus orci dapibus odio, cursus tempus libero orci vel magna. Sed odio nulla, dictum vitae risus et, vestibulum porta mauris. Suspendisse in nisl elementum, lobortis turpis nec, vulputate lectus. Proin nec dolor nec dolor rhoncus eleifend eu a nibh. Proin et diam euismod, laoreet dolor congue, imperdiet nibh. Fusce euismod vulputate libero, sed dictum nisl lobortis vel. Fusce pulvinar vulputate auctor. Cras eleifend tellus non suscipit dapibus. Aliquam erat volutpat. Duis id volutpat felis.
                Etiam dolor augue, venenatis suscipit facilisis at, fringilla ut diam. Proin eget sem augue. Proin eget eros in neque convallis luctus in at massa. Etiam aliquet feugiat turpis, ullamcorper rhoncus quam viverra sit amet. Aenean luctus pharetra risus, quis sodales justo gravida eu. Nam nec dolor mi. Morbi at risus leo.
                Duis mauris ex, volutpat vel elit nec, malesuada laoreet ligula. Suspendisse fringilla consequat purus ac faucibus. Suspendisse potenti. Duis dapibus viverra tortor eu aliquam. Vivamus in eros et metus convallis condimentum. Praesent tristique fringilla ultrices. Nam congue metus a vestibulum posuere. Suspendisse et eleifend nunc. Mauris pharetra, urna eu hendrerit ornare, risus arcu mattis neque, egestas vehicula ligula risus nec felis. Donec tincidunt est nec lectus hendrerit, sit amet semper magna egestas. Fusce sagittis viverra leo, et lacinia nunc. Nulla facilisi. Suspendisse tempor mauris lacus, non luctus sapien dictum id. Nulla pretium massa commodo congue ultrices.
                Fusce pharetra ornare sem, at euismod ipsum fringilla vulputate. Quisque imperdiet quam at ligula bibendum placerat. Mauris consectetur placerat imperdiet. Suspendisse bibendum bibendum tellus, in varius est venenatis et. Maecenas eu purus vehicula quam bibendum sagittis et nec turpis. Aenean vehicula augue in cursus pellentesque. Quisque sagittis, erat sit amet varius dapibus, ipsum nisi pulvinar enim, in mollis massa tortor sit amet turpis. Maecenas molestie dolor felis, in porttitor risus finibus in. Maecenas congue aliquam arcu. Sed feugiat suscipit orci a placerat. Duis pulvinar quam quis lorem mollis, sed finibus odio volutpat.
                .
            </p>
        </div>
        
    </div>
</div>





    <?php include 'resources/footer.php'; ?>

</body>


</html>
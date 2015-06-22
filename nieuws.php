<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
    <title>
        Café Restaurant Het Witte Paard | Nieuws
    </title>
</head>
<?php include 'resources/head.php'; ?>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    $(document).ready(function() {
        $(".collapsed").hide();

        $(".expanded, .collapsed").click(function() {
            $(this).parent().children(".expanded, .collapsed").toggle();
        });
    });

</script>
<?php include 'resources/header.php'; ?>
<div class="container">
    <div class="row" style="padding-left: 15px; padding-right: 15px; margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/index.php'?>>Home</a></li>
                <li class="active">Nieuws</li>
        </ol>
    </div>
</div>
<div class="content container ">
    <div class="container-fluid" style="padding-left: 0;">
        <div class="row">
            <div class="col-md-8">
                <?php

                $allnews = 3;
                $titles = array("Nieuws1", "Nieuws2", "Nieuws3");
                $text1 = array("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam cum omnis rerum! Accusamus, ad, dicta ea ipsum iusto laudantium minus modi molestiae neque, pariatur quas recusandae suscipit tenetur ullam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloremque doloribus explicabo labore quasi ullam, ut! A, alias at atque est excepturi, fugiat harum possimus quibusdam ratione saepe tempore totam.", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam cum omnis rerum! Accusamus, ad, dicta ea ipsum iusto laudantium minus modi molestiae neque, pariatur quas recusandae suscipit tenetur ullam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloremque doloribus explicabo labore quasi ullam, ut! A, alias at atque est excepturi, fugiat harum possimus quibusdam ratione saepe tempore totam.", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam cum omnis rerum! Accusamus, ad, dicta ea ipsum iusto laudantium minus modi molestiae neque, pariatur quas recusandae suscipit tenetur ullam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloremque doloribus explicabo labore quasi ullam, ut! A, alias at atque est excepturi, fugiat harum possimus quibusdam ratione saepe tempore totam.");
                $text2 = array("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam cum omnis rerum! Accusamus, ad, dicta ea ipsum iusto laudantium minus modi molestiae neque, pariatur quas recusandae suscipit tenetur ullam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloremque doloribus explicabo labore quasi ullam, ut! A, alias at atque est excepturi, fugiat harum possimus quibusdam ratione saepe tempore totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam cum omnis rerum! Accusamus, ad, dicta ea ipsum iusto laudantium minus modi molestiae neque, pariatur quas recusandae suscipit tenetur ullam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloremque doloribus explicabo labore quasi ullam, ut! A, alias at atque est excepturi, fugiat harum possimus quibusdam ratione saepe tempore totam.", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam cum omnis rerum! Accusamus, ad, dicta ea ipsum iusto laudantium minus modi molestiae neque, pariatur quas recusandae suscipit tenetur ullam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloremque doloribus explicabo labore quasi ullam, ut! A, alias at atque est excepturi, fugiat harum possimus quibusdam ratione saepe tempore totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam cum omnis rerum! Accusamus, ad, dicta ea ipsum iusto laudantium minus modi molestiae neque, pariatur quas recusandae suscipit tenetur ullam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloremque doloribus explicabo labore quasi ullam, ut! A, alias at atque est excepturi, fugiat harum possimus quibusdam ratione saepe tempore totam.", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam cum omnis rerum! Accusamus, ad, dicta ea ipsum iusto laudantium minus modi molestiae neque, pariatur quas recusandae suscipit tenetur ullam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloremque doloribus explicabo labore quasi ullam, ut! A, alias at atque est excepturi, fugiat harum possimus quibusdam ratione saepe tempore totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam cum omnis rerum! Accusamus, ad, dicta ea ipsum iusto laudantium minus modi molestiae neque, pariatur quas recusandae suscipit tenetur ullam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloremque doloribus explicabo labore quasi ullam, ut! A, alias at atque est excepturi, fugiat harum possimus quibusdam ratione saepe tempore totam.");
                $images = array("img/menu1.jpg", "img/reserveren.jpg", "img/lunch.jpg");
                $date = array("22-06-2015", "21-06-2015", "20-06-2015");

                for($i=0; $i<$allnews; $i++)
                {
                    echo '<div class="col-md-12" style="border: 1px solid black; margin-top: 10px; box-shadow: 0px 0px 5px 0px black; background-color: bisque;">
                    <div class="col-md-7">
                        <br>
                        <font size="6">'.$titles[$i].'</font>
                        <br>
                        <br>
                        <p class="expanded">'.$text1[$i].'</p>
                        <p class="collapsed">'.$text2[$i].'</p>
                        <a href="javascript:void(0)" class="expanded">Meer lezen</a>
                        <a href="javascript:void(0)" class="collapsed">Minder lezen</a>
                        <br>
                        <br>
                    </div>
                    <div class="col-md-5">
                        <h3 style="text-align: right">'.$date[$i].'</h3>
                        <div class="thumbnail" style="background-color: bisque; border: 1px solid black; box-shadow: 0px 0px 5px 0px black;">
                            <img src="'.$images[$i].'" alt="Menu">
                        </div>
                    </div>
                </div>';
                }

                ?>
            </div>
            <div class="col-md-4" style="border: 1px solid black; margin-bottom: 50px; margin-top: 10px; box-shadow: 0px 0px 5px 0px black;">
                <br>
                <div class="fb-page" data-href="https://www.facebook.com/HetWittePaardOostwold" data-width="350" data-height="500" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/HetWittePaardOostwold"><a href="https://www.facebook.com/HetWittePaardOostwold">CafÃ© Restaurant Het Witte Paard</a></blockquote></div></div>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
<br>
<br>
<div class="container">
=======

<div class="container" style="padding-top: 10px;">
>>>>>>> b89cd1527fb1090878fb08c2c926736a972d4c97
<?php include 'resources/footer.php'; ?>
</div>
</body>


</html>
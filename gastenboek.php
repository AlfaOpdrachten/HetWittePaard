<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
	<title>
		Gastenboek | Café Restaurant Het Witte Paard
	</title>
	<meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<?php include 'resources/head.php'; ?>

<body>
<?php include 'resources/header.php';
$filepath = realpath (dirname(__FILE__));

require_once($filepath.'/database.php');





    if(isset($_POST['submit']))
    {
        $test=0;
        $errors=array();
        $naam=$_POST['naam'];
        $recensie=$_POST['recensie'];
        $cijfer=$_POST['cijfer'];
        if(is_numeric($naam))
        {
            $errors= 'Ingevoerde naam is een getal.';
        }
        if($errors)
        {
            echo $errors;
        }
        if(!$errors)
        {

            //Hier moet vervolgens de query komen te staan.
            try
            {
                echo $cijfer;
                echo $naam;
                echo $recensie;
                DB::insert("akkoord,rating,recentie,naam","recenties",[
                    'akkoord'=>     $test,
                    'rating' =>     $cijfer,
                    'recentie' =>   $recensie,
                    'naam' =>       $naam
                ]);
            }catch(Exception $e)
            {
                echo 'Message: ' .$e->getMessage();

            }
        }
    }


?>
<div class="container">
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/index.php'?>>Home</a></li>
                <li class="active">Gastenboek</li>
        </ol>
    </div>
</div>

	<div class="content container ">
    	<div class="container-fluid" style="padding-left: 0;">
    		<div class="col-md-12" style=" box-shadow: 0px 0px 10px 0px gray; border: solid black 1px; background-color: #FFDCAA; border-bottom: hidden;">
    			<h1>Gastenboek</h1>
    		</div>
    		<div class="col-md-12" style=" box-shadow: 0px 0px 10px 0px gray; border: solid black 1px; background-color: #FFDCAA;">
    			<form action="#" method="POST" >
        			<div class="panel-body form-horizontal">
	                    <div class="form-group">
	                        <label for="naam" class="col-sm-2 control-label">Naam:</label>
	                        <div class="col-sm-4">
	                            <input type="text" class="form-control" style="" required id="naam" name="naam">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="recensie" class="col-sm-2 control-label">Recentie:</label>
	                        <div class="col-sm-9">
	                            <textarea class="form-control" style="" id="recensie" required name="recensie" cols="10" rows="5"></textarea>
	                        </div>
	                    </div> 
	                    <div class="form-group">
	                        <label for="cijfer" class="col-sm-2 control-label">Cijfer:</label>
	                        <div class="col-sm-4">
	                            <input type="number" min="1" max="10" style="" required class="form-control" id="cijfer" name="cijfer">
	                        </div>
	                    </div> 
	                    <div class="form-group">
	                        <div class="col-sm-4 col-md-offset-3">
	                            <input type="submit" name="submit" value="Submit">
	                        </div>
	                    </div> 
	                    
               	 	</div>
    			</form>
    		</div>


            <div class='col-md-12 recenties'>


               <?php

               $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/recenties/');
               $data = json_decode($data,1);
               $test = $data[0];


               for($i = 0; $i < $test; $i++){
                   echo "
        			<div class='col-md-6'>
        				<div class='col-md-12 recentiesItem' style='box-shadow: 0px 0px 10px 0px gray; background-color: #FFDCAA; 1px solid black;'>
	        				<div class='col-md-2'><p>Naam:</p></div><div class='col-md-10'><p>lorem ipsum</p></div>
	        				<div class='col-md-12'><p>recentie</p></div>
	        				<div class='col-md-12'>
	        				<p>".$data[$i+1]['Recentie']."</p>
	        				</div>
	        				<div class='col-md-2'><p>rating:</p></div><div class='col-md-10'><p>8</p></div>
	        			</div>
        			</div>";}
                ?>
   		</div>
   		</div>
    </div>
    
<div class="container footer">
    <?php include 'resources/footer.php'; ?>
</div>

</body>
</html>
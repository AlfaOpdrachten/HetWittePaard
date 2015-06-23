<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
	<title>
		Gastenboek | Café Restaurant Het Witte Paard
	</title>
</head>
<?php include 'resources/head.php'; ?>

<body>
<?php include 'resources/header.php'; ?>

<?php
$errors=array();
$naam=$_POST['naam'];
$recensie=$_POST['recensie'];
$cijfer=$_POST['cijfer'];
    if(isset($_POST['submit']))
    {
        if(is_numeric($naam))
        {
            $errors= 'Ingevoerde naam is een getal.';
        }
        if($errors)
        {
            echo $errors;
        }
    }

    if(!$errors)
    {

        //Hier moet vervolgens de query komen te staan.
    }
?>
<div class="container">
    <div class="row" style="padding-left: 15px; padding-right: 15px; margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/HetWittePaard/index.php'?>>Home</a></li>
                <li class="active">Gastenboek</li>
        </ol>
    </div>
</div>

	<div class="content container ">
    	<div class="container-fluid" style="padding-left: 0;">
    		<div class="col-md-12">
    			<h1>Gastenboek</h1>
    		</div>
    		<div class="col-md-12">
    			<form action="#" method="POST" >
        			<div class="panel-body form-horizontal">
	                    <div class="form-group">
	                        <label for="naam" class="col-sm-2 control-label">Naam:</label>
	                        <div class="col-sm-4">
	                            <input type="text" class="form-control" required id="naam" name="naam">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="recensie" class="col-sm-2 control-label">Recentie:</label>
	                        <div class="col-sm-9">
	                            <textarea class="form-control" id="recensie" required name="recensie" cols="10" rows="5"></textarea>
	                        </div>
	                    </div> 
	                    <div class="form-group">
	                        <label for="cijfer" class="col-sm-2 control-label">Cijfer:</label>
	                        <div class="col-sm-4">
	                            <input type="number" min="1" max="10" required class="form-control" id="cijfer" name="cijfer">
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





               <?php

               $data = file_get_contents('http://snshoeksema.nl/CMS/text/?location=HWP%');
               $data = json_decode($data,1);
               $test = $data[0];


               for($i = 0; $i < $test; $i++){
               	echo "
               <div class='col-md-12 recenties'>
        			<div class='col-md-6'>
        				<div class='col-md-12 recentiesItem'>
	        				<div class='col-md-2'><p>Naam:</p></div><div class='col-md-10'><p>lorem ipsum</p></div>
	        				<div class='col-md-12'><p>recentie</p></div>
	        				<div class='col-md-12'>
	        				<p>".$data[$i+1]['Text']."</p>
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
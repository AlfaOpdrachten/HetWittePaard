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
                <li class="active">Gastenboek</li>
        </ol>
    </div>
</div>

	<div class="content container ">
    	<div class="container-fluid" style="padding-left: 0;">
        	<div class="row">
        		<div class="col-md-12">
        			<h1>Gastenboek</h1>
        		</div>
        		<div class="col-md-12">
        			<form action="#" method="POST" >
        			<div class="panel-body form-horizontal">
	                    <div class="form-group">
	                        <label for="concept" class="col-sm-2 control-label">Naam:</label>
	                        <div class="col-sm-4">
	                            <input type="text" class="form-control" id="concept" name="concept">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="description" class="col-sm-2 control-label">Recentie:</label>
	                        <div class="col-sm-9">
	                            <textarea class="form-control" id="description" name="description" cols="10" rows="5"></textarea>
	                        </div>
	                    </div> 
	                    <div class="form-group">
	                        <label for="description" class="col-sm-2 control-label">Cijfer:</label>
	                        <div class="col-sm-4">
	                            <input type="number" class="form-control" id="description" name="description">
	                        </div>
	                    </div> 
	                    <div class="form-group">
	                        <div class="col-sm-4 col-md-offset-3">
	                            <input type="submit" value="Submit">
	                        </div>
	                    </div> 
	                    
               	 		</div>
        			</form>
        		</div>
        		<div class="col-md-12 recenties">
        			<div class="col-md-6">
        				<div class="col-md-12 recentiesItem">
	        				<div class="col-md-2"><p>Naam:</p></div><div class="col-md-10"><p>lorem ipsum</p></div>
	        				<div class="col-md-12"><p>recentie</p></div>
	        				<div class="col-md-12">
	        				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem delectus nihil ullam suscipit provident dicta architecto id, eos, iste, minima ipsam, mollitia. Delectus temporibus hic dolores cupiditate maxime? Corporis, molestiae!</p>
	        				</div>
	        				<div class="col-md-2"><p>rating:</p></div><div class="col-md-10"><p>8</p></div>
	        			</div>
        			</div>
        			<div class="col-md-6">
        				<div class="col-md-12 recentiesItem">
	        				<div class="col-md-2"><p>Naam:</p></div><div class="col-md-10"><p>lorem ipsum</p></div>
	        				<div class="col-md-12"><p>recentie</p></div>
	        				<div class="col-md-12">
	        				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem delectus nihil ullam suscipit provident dicta architecto id, eos, iste, minima ipsam, mollitia. Delectus temporibus hic dolores cupiditate maxime? Corporis, molestiae!</p>
	        				</div>
	        				<div class="col-md-2"><p>rating:</p></div><div class="col-md-10"><p>8</p></div>
	        			</div>
        			</div>
        			<div class="col-md-6">
        				<div class="col-md-12 recentiesItem">
	        				<div class="col-md-2"><p>Naam:</p></div><div class="col-md-10"><p>lorem ipsum</p></div>
	        				<div class="col-md-12"><p>recentie</p></div>
	        				<div class="col-md-12">
	        				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem delectus nihil ullam suscipit provident dicta architecto id, eos, iste, minima ipsam, mollitia. Delectus temporibus hic dolores cupiditate maxime? Corporis, molestiae!</p>
	        				</div>
	        				<div class="col-md-2"><p>rating:</p></div><div class="col-md-10"><p>8</p></div>
	        			</div>
        			</div>
        			<div class="col-md-6">
        				<div class="col-md-12 recentiesItem">
	        				<div class="col-md-2"><p>Naam:</p></div><div class="col-md-10"><p>lorem ipsum</p></div>
	        				<div class="col-md-12"><p>recentie</p></div>
	        				<div class="col-md-12">
	        				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem delectus nihil ullam suscipit provident dicta architecto id, eos, iste, minima ipsam, mollitia. Delectus temporibus hic dolores cupiditate maxime? Corporis, molestiae!</p>
	        				</div>
	        				<div class="col-md-2"><p>rating:</p></div><div class="col-md-10"><p>8</p></div>
	        			</div>
        			</div>
        		
        		</div>
        	</div>
        </div>
    </div>
</body>

<?php include 'resources/footer.php'; ?>

</html>
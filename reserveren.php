<!DOCTYPE html>
<html lang="nl">


<?php include 'resources/head.php'; ?>

<body>
<?php include 'resources/header.php'; ?>

    <div class="content container ">
    	<div class="container-fluid">
  			<div class="row">
	  				<div class="col-md-7">
						<form role="form">
							<div class="form-group">
								<label for="naam">Uw naam: *</label>
								<input type="text" class="form-control" id="naam" required>
							</div>

							<div class="form-group">
								<label for="tel">Uw telefoonnummer: *</label>
								<input type="tel" onkeypress="return isNumberKey(event)" class="form-control" id="tel" required>
							</div>

							<div class="form-group">
								<label for="pers">Hoeveel personen? *</label>
								<input type="text" class="form-control" id="pers" required>
							</div>

							<div class="form-group">
								<label for="email">Uw E-Mail: *</label>
								<input type="email" class="form-control" id="email" required>
							</div>

							<div class="form-group">
								<label for="tijd">Voorkeurstijd? *</label>
								<input type="text" class="form-control" id="tijd" required>
							</div>

							<div class="form-group">
								<label for="datum">Datum *</label>
								<input type="date" class="form-control" id="datum" required>
							</div>

							<div class="form-group">
								<label for="comment">Extra informatie</label>
								<textarea class="form-control" rows="5" id="comment"></textarea>
							</div>

							<p>Vergeet niet de verplichte velden met een (*) in te vullen</p> <br>

							<button type="submit" class="btn btn-default">Verstuur reservering</button><br><br>
						</form>
     				</div>
					<div class="col-md-5" id="informatie">
						<p>
							<strong>Café Restaurant Het Witte Paard</strong><br>
							Hoofdstraat 217<br>
							9828 PB Oostwold<br>
							T: 050 - 5515 282<br>
							M: <a href="mailto:reserveren@caferestauranthetwittepaard.nl">reserveren@caferestauranthetwittepaard.nl</a><br><br>
						</p>
						<p><strong>Openingstijden</strong></p>
						 <p style="float: left;">
							 Maandag:&nbsp<br>
							Dinsdag:&nbsp<br>
							Woensdag:&nbsp<br>
							Donderdag:&nbsp<br>
							Vrijdag:&nbsp<br>
							Zaterdag:&nbsp<br>
							Zondag:&nbsp<br></p>
						<p style="float: left;">
							Gesloten<br>
							Gesloten<br>
							12:00<br>
							12:00<br>
							12:00<br>
							12:00<br>
							15:00<br></p>
     				</div>
   			 </div>
		</div>
    </div>

    
    

<?php include 'resources/footer.php'; ?>

</body>


</html>
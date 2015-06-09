<!DOCTYPE html>
<html lang="nl">

<script>
	function isNumberKey(evt){
		var charCode = (evt.which) ? evt.which : event.ketCode
		if (charCode > 31 && (charCode < 45 || charCode > 57))
			return false;
		return true;
	}
</script>


<?php include 'resources/head.php'; ?>

<body>
<?php include 'resources/header.php'; ?>

    <div class="content container ">
    	<div class="container-fluid">
  			<div class="row">
	  				<div class="col-md-7">
						<form method="post" action="<?php echo htmlspecialchars($_server["PHP_SELF"]);?>" role="form">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<label for="naam">Uw voornaam: *</label>
									<input type="text" class="form-control" id="naam" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<label for="naam">Uw achternaam: *</label>
									<input type="text" class="form-control" id="naam" required>
								</div>
							</div>
							<div class="col-xs-12 col-md-12 col-md-12">
								<div class="form-group">
									<label for="email">Uw E-Mail: *</label>
									<input type="email" class="form-control" id="email" required>
								</div>
							</div>
							<div class="col-xs-12 col-md-12 col-md-12">
								<div class="form-group">
									<label for="tel">Uw telefoonnummer: *</label>
									<input type="tel" onkeypress="return isNumberKey(event)" class="form-control" id="tel" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<label for="pers">Hoeveel personen? *</label>
									<input type="text" class="form-control" id="pers" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<label for="tijd">Voorkeurstijd? *</label>
									<input type="text" class="form-control" id="tijd" required>
								</div>
							</div>
							<div class="col-xs-12 col-md-12 col-md-12">
								<div class="form-group">
									<label for="datum">Datum *</label>
									<input type="date" class="form-control" id="datum" required>
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
								<button type="submit" class="btn btn-default">Verstuur reservering</button><br><br>
							</div>

						</form>
     				</div>
					<div class="col-md-5" id="informatie">
							<div class="col-xs-12 col-sm-6 col-md-12">
								<h1>Adress gegevens</h1>
									<div class="col-xs-12 col-sm-12 col-md-6">
										Hoofdstraat 217<br>
										9828 PB Oostwold<br>
										T: 050 - 5515 282<br>
										M: <a href="mailto:reserveren@caferestauranthetwittepaard.nl">reserveren@caferestauranthetwittepaard.nl</a><br><br>
									</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-12">
								<h1>Openingstijden</h1>
							
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

    
    

<?php include 'resources/footer.php'; ?>

</body>


</html>
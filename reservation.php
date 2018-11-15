<?php include_once 'header.php' ?>
<div class="container-fluid" id="reservation">
	<div class="row">
		<form class="center-block">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
					<input type="text" class="form-control" name="nom" id="Nom" placeholder="Nom" required>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" id="e-mail" placeholder="E-mail" required>
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" id="phone" name="phone" id="telephone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="Téléphone" required>
				</div>
				<select id="type">
					<option selected value="" disabled hidden>Type de réservation</option>
					<option value="repas">Repas</option>
					<option>Evénement privé</option>
					<option>Evénement professionnel</option>	
				</select>
				<div class="form-group">
					<textarea id="special" class="form-control" placeholder="Demande spéciale"></textarea>
				</div>
			</div><!-- end column -->
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

        			<input type="date" id="input-date" class="form-control" required>

					<select id="personne">
						<option selected value="" disabled hidden>Nombre de personnes</option>
						<option value="1">1 personne</option>
						<option value="2">2 personnes</option>
						<option value="3">3 personnes</option>
						<option value="4">4 personnes</option>
						<option value="5">5 personnes</option>
						<option value="6">6 personnes</option>
						<option value="7">7 personnes</option>
						<option value="8">8 personnes</option>
					</select>
					<select id="heure">
						<option selected value="" disabled hidden>Heures</option>
						<option value="12h">12h</option>
						<option value="12h15">12h15</option>
						<option value="12h30">12h30</option>
						<option value="12h45">12h45</option>
						<option value="13h">13h</option>
						<option value="13h15">13h15</option>
						<option value="13h30">13h30</option>
						<option value="13h45">13h45</option>
						<option value="14h">14h</option>
						<option value="19h">19h</option>
						<option value="19h15">19h15</option>
						<option value="19h30">19h30</option>
						<option value="19h45">19h45</option>
						<option value="20h">20h</option>
						<option value="20h15">20h15</option>
						<option value="20h30">20h30</option>
						<option value="20h45">20h45</option>
						<option value="21h">21h</option>
						<option value="21h15">21h15</option>
						<option value="21h30">21h30</option>
						<option value="21h45">21h45</option>
						<option value="22h">22h</option>
					</select>

					<input type="checkbox" aria-label="s'abonner aux news letter" id="newsletter">
					<label>s'abonner aux news letter</label><br \>

					<input type="submit" name="submit" id="submit" class="btn btn-default">
			</div>
		</form>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Παραστάσεις</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Προσθήκη νέας παράστασης
			</div>
			
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form" method="post" action="/performance/save/<?=$this->uri->segment(3, NULL);?>">

							<div class="form-group">
								<label>Θέατρο</label>
								<select class="form-control" name="theater">
									<option>επιλέξτε θέατρο</option>
<?foreach($theaters as $theater){?>
									<option value="<?=$theater['record_id']?>"><?=$theater['name']?></option>
<?}?>
								</select>
							</div>
							
							<div class="form-group">
								<label>Θίασος</label>
								<select class="form-control" name="troupe">
									<option>επιλέξτε θίασο</option>
<?foreach($troupes as $troupe){?>
									<option value="<?=$troupe['record_id']?>"><?=$troupe['name']?></option>
<?}?>
								</select>
							</div>

							<button type="submit" class="btn btn-default">αποθήκευση</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Θίασοι</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Προσθήκη νέου θιάσου
			</div>
			
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form" method="post" action="/troupe/save/<?=$troupe['troupe_id']?>">

							<div class="form-group">
								<label>Όνομα θιάσου</label>
								<input class="form-control" name="troupe_name" value="<?=$troupe['troupe_name']?>">
							</div>

							<button type="submit" class="btn btn-default">αποθήκευση</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

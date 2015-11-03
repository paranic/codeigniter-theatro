<div class="row">
	<div class="col-xs-12">
		<h1 class="page-header">Θίασοι</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">

			<div class="panel-heading">
				Προσθήκη νέου θιάσου
			</div>

			<div class="panel-body">
				<div class="row">
					<div class="col-xs-6">
						<form role="form" method="post" action="/troupe/save/<?=$this->uri->segment(3, NULL);?>">
							<input type="hidden" name="record_id" value="<?=$this->uri->segment(3, NULL);?>" />
							<div class="form-group">
								<label>Όνομα θιάσου</label>
								<input class="form-control" name="name" value="<?=set_value('name', $troupe->name);?>">
							</div>

							<button type="submit" class="btn btn-default">αποθήκευση</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

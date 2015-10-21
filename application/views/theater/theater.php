<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Θέατρα</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Προσθήκη νέου Θεάτρου
			</div>
			
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form" method="post" action="/theater/save/<?=$this->uri->segment(3, NULL);?>">
							<input type="hidden" name="record_id" value="<?=$this->uri->segment(3, NULL);?>" />
							<div class="form-group">
								<label>Όνομα Θεάτρου</label>
								<input class="form-control" name="name" value="<?=set_value('name', $theater['name']);?>">
							</div>
							<button type="submit" class="btn btn-default">αποθήκευση</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

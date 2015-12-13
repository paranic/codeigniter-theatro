<div class="row">
	<div class="col-xs-12">
		<h1 class="page-header">Θίασοι</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">

			<div class="panel-heading">
				Θίασοι
				<div class="pull-right">
					<a href="/troupe/add" class="btn btn-outline btn-primary btn-xs">προσθήκη νέου</a>
				</div>
			</div>

			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th class="col-xs-1">#</th>
								<th class="col-xs-9">Όνομα θιάσου</th>
								<th class="col-xs-2">ενέργεια</th>
							</tr>
						</thead>
						<tbody>
<?php foreach($troupes as $troupe){?>
							<tr>
								<td><?=$troupe->record_id?>
								<td><?=$troupe->name?>
								<td>
									<a href="/troupe/edit/<?=$troupe->record_id?>"  class="btn btn-outline btn-primary btn-xs">επεξεργασία</a>
								</td>
							</tr>
<?php }?>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>
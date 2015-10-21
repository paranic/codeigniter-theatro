<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Θίασοι</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Θίασοι
				<div class="pull-right">
					<a href="/troupe/add" class="btn btn-outline btn-primary btn-xs">προσθήκη νέου</a>
				</div>
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th class="col-md-2">#</th>
								<th class="col-md-8">Όνομα θιάσου</th>
								<th class="col-md-2">ενέργεια</th>
							</tr>
						</thead>
						<tbody>
<?foreach($troupes as $troupe){?>
							<tr>
								<td><?=$troupe['record_id']?>
								<td><?=$troupe['name']?>
								<td>
									<a href="/troupe/edit/<?=$troupe['record_id']?>"  class="btn btn-outline btn-primary btn-xs">edit</a>
									<a href="#" class="btn btn-outline btn-primary btn-xs">delete</a>
								</td>
							</tr>
<?}?>
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-6 -->
</div>
<!-- /.row -->

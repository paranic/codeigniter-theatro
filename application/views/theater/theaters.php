<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Θέατρα</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Θέατρα
				<div class="pull-right">
					<a href="/theater/add" class="btn btn-outline btn-primary btn-xs">προσθήκη νέου</a>
				</div>
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th class="col-md-2">#</th>
								<th class="col-md-8">Όνομα Θεάτρου</th>
								<th class="col-md-2">ενέργεια</th>
							</tr>
						</thead>
						<tbody>
<?foreach($theaters as $theater){?>
							<tr>
								<td><?=$theater->record_id?>
								<td><?=$theater->name?>
								<td>
									<a href="/theater/edit/<?=$theater->record_id?>"  class="btn btn-outline btn-primary btn-xs">edit</a>
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
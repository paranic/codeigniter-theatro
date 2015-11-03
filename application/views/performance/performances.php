<div class="row">
	<div class="col-xs-12">
		<h1 class="page-header">Παραστάσεις</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Παραστάσεις
				<div class="pull-right">
					<a href="/performance/add" class="btn btn-outline btn-primary btn-xs">προσθήκη νέας</a>
				</div>
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th class="col-xs-1">#</th>
								<th class="col-xs-3">Θέατρο</th>
								<th class="col-xs-3">Παράσταση</th>
								<th class="col-xs-2">Ημερομηνία</th>
								<th class="col-xs-1">Πωλήσεις</th>
								<th class="col-xs-4">ενέργεια</th>
							</tr>
						</thead>
						<tbody>
<?foreach($performances as $performance){?>
							<tr>
								<td><?=$performance->record_id?></td>
								<td><?=$performance->theater()->name?></td>
								<td><?=$performance->troupe()->name?></td>
								<td><?=$performance->datetime?></td>
								<td>0</td>
								<td>
									<a href="/performance/edit/<?=$performance->record_id?>" class="btn btn-outline btn-primary btn-xs">επεξεργασία</a>
									<a href="/sales/edit/<?=$performance->record_id?>" class="btn btn-outline btn-primary btn-xs">πωλήσεις</a>
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

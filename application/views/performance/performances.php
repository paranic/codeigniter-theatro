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
<?php foreach($performances as $performance){?>
							<tr>
								<td><?=$performance->record_id?></td>
								<td><?=$performance->theater()->name?></td>
								<td><?=$performance->troupe()->name?></td>
								<td><?=$performance->datetime?></td>
								<td><?=$performance->total_sales_count()?></td>
								<td>
									<a href="/performance/edit/<?=$performance->record_id?>" class="btn btn-outline btn-primary btn-xs">επεξεργασία</a>
									<a href="/sales/edit/<?=$performance->record_id?>" class="btn btn-outline btn-primary btn-xs">πωλήσεις</a>
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
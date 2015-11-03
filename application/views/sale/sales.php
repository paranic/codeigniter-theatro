<div class="row">
	<div class="col-xs-12">
		<h1 class="page-header">Πωλήσεις</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Πωλήσεις Εισιτήριων <?=$performance->theater()->name?> -> <?=$performance->troupe()->name?> -> <?=$performance->datetime?>
			</div>

			<div class="panel-body">
				<div class="row">
					<div class="col-xs-6">
						<form role="form" method="post" action="/sales/save/<?=$this->uri->segment(3, NULL);?>">
<?foreach($sales as $key => $sale){?>
							<div class="form-group">
								<label><?=$sale->ticket()->name?></label>
								<input type="hidden" name="sales[<?=$key?>]['record_id']" value="1<?=$sale->record_id?>">
								<input type="hidden" name="sales[<?=$key?>]['insert_at']" value="1<?=$sale->insert_at?>">
								<input type="hidden" name="sales[<?=$key?>]['performance_record_id']" value="1<?=$performance->record_id?>">
								<input type="hidden" name="sales[<?=$key?>]['ticket_record_id']" value="1<?=$sale->ticket()->record_id?>">
								<input class="form-control" name="sales[<?=$key?>]['sales']" value="1<?=$sale->sales?>">
							</div>
<?}?>
							<button type="submit" class="btn btn-default">αποθήκευση</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
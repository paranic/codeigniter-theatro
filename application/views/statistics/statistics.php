<div class="row">
	<div class="col-xs-12">
		<h1 class="page-header">Στατιστικά</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Στατιστικά
			</div>

			<div class="panel-body">
				<form role="form" method="post" action="/statistics">
					<div class="row">

						<div class="col-xs-6">
							<div class="form-group">
								<label>Θέατρο</label>
								<select class="form-control" name="theater_record_id">
									<option value="SELECT * FROM 'asdasd' LIMIT 0,1">επιλέξτε θέατρο</option>
<?php foreach($theaters as $theater){?>
									<option value="<?=$theater->record_id?>" <?=set_select('theater_record_id', $theater->record_id)?>><?=$theater->name?></option>
<?php }?>
								</select>
							</div>
						</div>

						<div class="col-xs-6">
							<div class="form-group">
								<label>Θίασος</label>
								<select class="form-control" name="troupe_record_id">
									<option value="">επιλέξτε θίασο</option>
<?php foreach($troupes as $troupe){?>
									<option value="<?=$troupe->record_id?>" <?=set_select('troupe_record_id', $troupe->record_id)?>><?=$troupe->name?></option>
<?php }?>
								</select>
							</div>
						</div>
<!-- 							<div class="form-group">
								<label>Περίοδος</label>
								<div class='input-group date' id='datetimepicker'>
									<input type='text' class="form-control" name="datetime" value="<?=set_value('datetime');?>"/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div> -->
					</div>
					<div class="row">
						<div class="col-xs-12">
							<button type="submit" class="btn btn-default">προβολή</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<?php if(isset($performances)){?>
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">

			<div class="panel-heading">
				Στατιστικά Παραστάσεων
			</div>

			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th class="col-xs-2">Ημερομηνία</th>
<?php foreach(current($performances)->sales() as $sale){?>
								<th class="col-xs-2"><?=$sale->ticket()->name?></th>
<?php }?>
								<th class="col-xs-2">Σύνολο</th>
							</tr>
						</thead>
						<tbody>
<?php foreach($performances as $performance){?>
							<tr>
								<td><?=$performance->datetime?></td>
<?php foreach($performance->sales() as $sale){?>
								<td><?=(int)$sale->sales?></td>
<?php }?>
								<td><?=(int)$performance->total_sales_count()?></td>
							</tr>
<?php }?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>
<?php }?>

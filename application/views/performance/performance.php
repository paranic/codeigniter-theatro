<div class="row">
	<div class="col-xs-12">
		<h1 class="page-header">Παραστάσεις</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Προσθήκη νέας παράστασης
			</div>

			<div class="panel-body">
				<div class="row">
					<div class="col-xs-6">
						<form role="form" method="post" action="/performance/save/<?=$this->uri->segment(3, NULL);?>">

							<div class="form-group">
								<label>Θέατρο</label>
								<select class="form-control" name="theater_record_id">
									<option>επιλέξτε θέατρο</option>
<?php foreach($theaters as $theater){?>
									<option value="<?=$theater->record_id?>" <?=set_select('theater_record_id', $theater->record_id, ($theater->record_id==$performance->theater_record_id))?>><?=$theater->name?></option>
<?php }?>
								</select>
							</div>

							<div class="form-group">
								<label>Θίασος</label>
								<select class="form-control" name="troupe_record_id">
									<option value="" <?=set_select('troupe_record_id', $performance->troupe_record_id)?>>επιλέξτε θίασο</option>
<?php foreach($troupes as $troupe){?>
									<option value="<?=$troupe->record_id?>" <?=set_select('troupe_record_id', $troupe->record_id, ($troupe->record_id==$performance->troupe_record_id))?>><?=$troupe->name?></option>
<?php }?>
								</select>
							</div>

							<div class="form-group">
								<label>Ημερομηνία</label>
								<div class='input-group date' id='datetimepicker'>
									<input type='text' class="form-control" name="datetime" value="<?=set_value('datetime', $performance->datetime);?>"/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>

							<button type="submit" class="btn btn-default">αποθήκευση</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
window.onload = function ()
{
	$('#datetimepicker').datetimepicker({
		format: 'YYYY-MM-DD HH:mm:ss'
	});
};
</script>

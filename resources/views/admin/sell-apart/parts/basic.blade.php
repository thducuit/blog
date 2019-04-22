<div class="box-body">
	<div class="form-group">
	  <label for="bedroom">Phòng ngủ</label>
	  <input type="number" class="form-control" id="bedroom" name="bedroom" placeholder="" value="{{ $apartment->bedroom }}" />
	</div>

	<div class="form-group">
	  <label for="bathroom">Phòng tắm</label>
	  <input type="number" class="form-control" id="bathroom" name="bathroom" placeholder="" value="{{ $apartment->bathroom }}" />
	</div>

	<div class="form-group">
		<label for="rent_time">Thời gian bắt đầu cho thuê</label>

		<div class="input-group date">
		  <div class="input-group-addon">
		    <i class="fa fa-calendar"></i>
		  </div>
		  <input type="text" class="form-control pull-right" id="datepicker" name="rent_time" value="{{ $apartment->rent_time }}" />
		</div>
		<!-- /.input group -->
	</div>

</div>
<!-- /.box-body -->
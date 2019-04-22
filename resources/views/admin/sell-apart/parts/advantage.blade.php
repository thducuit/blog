<div class="box-body">
	<div class="form-group">
	  <label for="feature">Đặc điểm nổi bật</label>
	  <textarea class="form-control" id="feature" name="feature">{{ $apartment->feature }}</textarea>
	</div>

	<div class="form-group">
	  <label for="des_feature">Tình hình nội thất</label>
	  <textarea class="form-control" id="des_feature" name="des_feature">{{ $apartment->des_feature }}</textarea>
	</div>

	<div class="form-group">
	  <label for="des_pos">Mô tả vị trí</label>
	  <textarea class="form-control" id="des_pos" name="des_pos">{{ $apartment->des_pos }}</textarea>
	</div>

	<div class="form-group">
	  <label for="people">Cộng đồng dân cư</label>
	  <textarea class="form-control" id="people" name="people">{{ $apartment->people }}</textarea>
	</div>

	<div class="form-group">
	  <label for="edu">Về giáo dục</label>
	  <textarea class="form-control" id="edu" name="edu">{{ $apartment->edu }}</textarea>
	</div>

</div>
<!-- /.box-body -->
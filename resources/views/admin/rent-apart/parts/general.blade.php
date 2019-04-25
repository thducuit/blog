<div class="box-body">

	<input type="hidden" name="id" value="{{ $apartment->id }}" />

	<div class="form-group">
	  <label for="title">Tiêu đề</label>
	  <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{ $apartment->title }}" />
	</div>

	<div class="form-group">
	  <label for="room">Số phòng</label>
	  <input type="number" class="form-control" id="room" name="room" placeholder="" value="{{ $apartment->room }}" />
	</div>

	<div class="form-group">
	  <label for="acreage">Diện tích</label>
	  <input type="text" class="form-control" id="acreage" name="acreage" placeholder="" value="{{ $apartment->acreage }}" />
	  <p class="help-block">m2</p>
	</div>

	<div class="form-group">
	  <label for="price">Giá thuê</label>
	  <input type="text" class="form-control" id="price" name="price" placeholder="" value="{{ $apartment->price }}" />
	  <p class="help-block">/tháng</p>
	</div>

	<div class="form-group">
	  <label for="description">Mô tả</label>
	  <textarea class="form-control" id="description" placeholder="">{{ $apartment->description }}</textarea>
	</div>

	<div class="form-group">
	  <label for="direction">Hướng</label>
	  <select class="form-control" id="direction">
	    <option></option>
	  </select>
	</div>

	<div class="form-group">
	  <label for="street">Tên đường</label>
	  <input type="text" class="form-control" id="street" placeholder="" value="{{ $apartment->street }}" />
	</div>

	<div class="form-group">
	  <label for="district">Quận</label>
	  	<select class="form-control" id="district" name="district">
	  		<option value="0">Chọn Quận</option>
	    	@foreach($districts as $district)
	        <option value="{{$district->id}}" {{ $apartment->district == $district->id ? 'selected':'' }}>{{$district->name}}</option>
	      @endforeach
	  </select>
	</div>

	<div class="form-group">
	  <label for="ward">Huyện</label>
	  <select class="form-control" id="ward">
	    <option></option>
	  </select>
	</div>

	<div class="form-group">
	  <label for="lat">lat</label>
	  <input type="text" class="form-control" id="lat" placeholder="" value="{{ $apartment->lat }}" />
	</div>

	<div class="form-group">
	  <label for="lng">lng</label>
	  <input type="text" class="form-control" id="lng" placeholder="" value="{{ $apartment->lng }}" />
	</div>
</div>
<!-- /.box-body -->
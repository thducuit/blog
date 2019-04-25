<form role="form" method="POST" action="{{ route('upsert-ward') }}">
  {{ csrf_field() }}
  
  <div class="col-xs-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Thông tin chung</h3>
      </div>
      <div class="box-content">
          <div class="box-body">

            <input type="hidden" name="id" value="{{ $ward->id }}" />

            <div class="form-group">
              <label for="name">Tên</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{ $ward->name }}" />
            </div>

            <select class="form-control" id="district" name="district_id">
              <option value="0">Chọn Quận</option>
              @foreach($districts as $district)
                <option value="{{$district->id}}" {{ $ward->district_id == $district->id ? 'selected':'' }}>{{$district->name}}</option>
              @endforeach
            </select>

          </div>
          <!-- /.box-body -->
      </div>  
      <div class="box-footer">
          <button type="submit" class="btn btn-primary">{{ $ward->id ? 'Cập nhật' : 'Tạo mới' }}</button>
      </div>
    </div>
  </div>

</form>
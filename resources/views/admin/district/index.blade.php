
@extends('admin.layout')

@section('content-header', 'Quận')

@section('content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách Quận</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <a href="{{ route('district') }}" class="btn btn-primary">Thêm mới</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Tên</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
              @foreach ($list as $di)
              <tr>
                <td>{{ $di->name }}</td>
                <td>
                  <a href="{{ route('edit-district', ['id' => $di->id]) }}" class="btn btn-info btn-xs">sửa</a>
                  <a href="#" class="btn btn-danger btn-xs btn-remove" data-remove="{{ $di->id }}" >xóa</a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Tên</th>
              <th></th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->

    @include('admin.district.form')
  </div>
  <!-- /.row -->
</section>
@endsection

@section('page-js-script')
  @include('admin.vendor.dropzonejs')
  <script type="text/javascript">
    jQuery(function() {
      //Date picker
        jQuery('.btn-remove').click(function(e) {
          e.preventDefault();
          var _token = $('input[name="_token"]').val();
          var id = $(this).data('remove');
          var r = confirm("Bạn có muốn tiếp tục xóa!");
          if(r) {
            $.ajax({url: "{{ route('delete-district') }}", type: 'post', data: {id: id, _token: _token}, success: function(result){
                location.reload();
            }});
          }
        });
    })
  </script>
@endsection
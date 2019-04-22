
@extends('admin.layout')

@section('content-header', 'Quản lý cho thuê')

@section('content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách căn hộ</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <a href="{{ route('rent-apart') }}" class="btn btn-primary">Thêm mới</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Mã</th>
              <th>Tên căn hộ</th>
              <th>Dự án</th>
              <th>Hình ảnh</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
              @foreach ($list as $apart)
              <tr>
                <td>{{ $apart->code }}</td>
                <td>{{ $apart->title }}</td>
                <td>-</td>
                <td><img src="{{ $apart->photo }}" width="120" /></td>
                <td>
                  <a href="{{ route('edit-rent-apart', ['id' => $apart->id]) }}" class="btn btn-info btn-xs">sửa</a>
                  <a href="#" class="btn btn-danger btn-xs" data-remove="{{ $apart->id }}" >xóa</a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Mã</th>
              <th>Tên căn hộ</th>
              <th>Dự án</th>
              <th>Tháp</th>
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

    @include('admin.rent-apart.form')
  </div>
  <!-- /.row -->
</section>
@endsection

@section('page-js-script')
  @include('admin.vendor.dropzonejs')
@endsection
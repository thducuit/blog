<form role="form" method="POST" action="{{ route('upsert-rent-apart') }}">
  {{ csrf_field() }}
  
  <div class="col-xs-8">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Thông tin chung</h3>
      </div>
      <div class="box-content">
          @include('admin.rent-apart.parts.general', ['apartment' => $apartment])
      </div>  
      <div class="box-footer">
          <button type="submit" class="btn btn-primary">{{ $apartment->id ? 'Cập nhật' : 'Tạo mới' }}</button>
      </div>
    </div>
  </div>

  <div class="col-xs-4">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Nội thất</h3>
      </div>
      <div class="box-content">
          
      </div>  
    </div>
  </div>

  <div class="col-xs-8">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Thư viện ảnh</h3>
      </div>
      <div class="box-content">
          <div class="dropzone" id="my-dropzone" name="myDropzone"></div>
          <ul id="gallery">
            @php
            $gallery = json_decode($apartment->gallery, true);
            @endphp

            @if($gallery and count($gallery))
              @foreach($gallery as $photo)
              <li><img src="{{ $photo['src'] }}" /> <input value="{{ $photo['des'] }}" /><a onclick="remove(this)">x</a></li>
              @endforeach
            @endif
          </ul>
          <input type="hidden" name="gallery" class="gallery" />
      </div>  
    </div>
  </div>
</form>
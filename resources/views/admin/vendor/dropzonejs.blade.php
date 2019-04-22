
<link rel="stylesheet" href="{{ URL::asset('admin/assets/libs/dropzone/dropzone.css') }}">
<script src="{{ URL::asset('admin/assets/libs/dropzone/dropzone.js') }}"></script>
<script type="text/javascript">
    function append(fileName) {
      var html = "<li>" + "<img src='/uploads/photos/" + fileName + "'/>" + "<input />" + "<a onclick='remove(this)'>x</a>" + "</li>";
      $('#gallery').append(html);
    }

    function remove(object) {
      object.parentElement.remove();
    }

    Dropzone.options.myDropzone= {
       url: '{{ route('upload-photo') }}',
       headers: {
           'X-CSRF-TOKEN': '{!! csrf_token() !!}'
       },
       autoProcessQueue: true,
       uploadMultiple: true,
       parallelUploads: 5,
       maxFiles: 10,
       maxFilesize: 5,
       acceptedFiles: ".jpeg,.jpg,.png,.gif",
       dictFileTooBig: 'Image is bigger than 5MB',
       addRemoveLinks: true,
       success: function(file) {
          append(file.name);
       },
       removedfile: function(file) {
         var name = file.name;    
         name =name.replace(/\s+/g, '-').toLowerCase();    /*only spaces*/
          $.ajax({
              type: 'POST',
              url: '{{ route('remove-upload-photo') }}',
              headers: {
                   'X-CSRF-TOKEN': '{!! csrf_token() !!}'
               },
              data: "id="+name,
              dataType: 'html',
              success: function(data) {
                  $("#msg").html(data);
              }
          });
          var _ref;
          if (file.previewElement) {
            if ((_ref = file.previewElement) != null) {
              _ref.parentNode.removeChild(file.previewElement);
            }
          }
          return this._updateMaxFilesReachedClass();
      },
      previewsContainer: null,
      hiddenInputContainer: "body",
   }

   $("button[type='submit']").click(function (e) {
      e.preventDefault();
      var photos = [];
      $('#gallery li').each(function(index, item) {
        var src = $(this).find('img').attr('src');
        var des = $(this).find('input').val();
        photos.push({
          'src': src,
          'des': des
        });
      });
      $('.gallery').val(JSON.stringify(photos));
      $('form').submit();
   });
   
</script>
<style>
    .dropzone {
        border: 2px dashed #0087F7;
        border-radius: 5px;
        background: white;
    }
</style>

@extends("Admin.layouts.app")
@section('content')
  <div class="col-12 mt-5 justify-content-center font-iran-sans">
    @include('includes.errors')
    <div class="card">
      <div class="card-header border-bottom-0 d-flex justify-content-between">
        <p class="card-title font-weight-bolder">ویرایش اسلایدر شماره {{ $slider->id }}</p>
        <a href="{{route("admin.slider.index")}}" class="btn btn-outline-warning ">بازگشت</a>
      </div>
      <div class="card-body">
        <form action="{{route("admin.slider.update", $slider)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method("PATCH")
          <div class="row">

            <div class="col-12 form-group">
              <label class="font-weight-bold">عنوان :</label><span class="text-danger">&starf;</span>
              <input type="text" name="title" class="form-control" value="{{ old('title') ?: $slider->title }}" required>
            </div>
            
            <div class="col-12 form-group">
              <label class="font-weight-bold">لینک :</label><span class="text-danger">&starf;</span>
              <input type="text" name="link" class="form-control" value="{{ old('link') ?: $slider->link }}" required>
            </div>

            <div class="col-12 form-group">
              <label class="font-weight-bold">انتخاب عکس:</label>
              <input type="file" class="form-control" name="image">
            </div>

            <div class="col-12 form-group">
              <label class="font-weight-bold">انتخاب وضعیت :</label><span class="text-danger">&starf;</span>
              <select name="status" class="form-control" required>
                <option value="1" {{ old('status') == "1" ? 'selected' : ($slider->status == 1 ? 'selected' : null) }}>فعال</option>
                <option value="0" {{ old('status') == "0" ? 'selected' : ($slider->status == 0 ? 'selected' : null) }}>غیر فعال</option>
              </select>
            </div>
            
            <div class="col-12 form-group">
              <label class="font-weight-bold">متن خلاصه :</label><span class="text-danger">&starf;</span>
              <textarea name="summary" class="form-control" rows="3" required>{{ old("summary") ?: $slider->summary }}</textarea>
            </div>

          </div>
          <button class="btn btn-warning">ویرایش</button>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    $('#published_at').MdPersianDateTimePicker({
      targetDateSelector: '#published_date',        
      targetTextSelector: '#published_at',
      englishNumber: false,        
      toDate:true,
      enableTimePicker: false,        
      dateFormat: 'yyyy-MM-dd',
      textFormat: 'yyyy-MM-dd',        
      groupId: 'rangeSelector1',
    });
  </script> 
@endsection
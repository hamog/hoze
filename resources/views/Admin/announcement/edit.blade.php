@extends("Admin.layouts.app")
@section('content')
  <div class="col-12 mt-5 justify-content-center font-iran-sans">
    @include('includes.errors')
    <div class="card">
      <div class="card-header border-bottom-0 d-flex justify-content-between">
        <p class="card-title font-weight-bolder">ویرایش اطلاعیه شماره {{ $announcement->id }}</p>
        <a href="{{route("admin.announcement.index")}}" class="btn btn-outline-warning ">بازگشت</a>
      </div>
      <div class="card-body">
        <form action="{{route("admin.announcement.update", $announcement)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method("PATCH")
          <div class="row">
            <div class="col-3">
              <div class="form-group">
                <label class="font-weight-bold">عنوان :</label><span class="text-danger">&starf;</span>
                <input type="text" name="title" class="form-control" value="{{ old('title') ?: $announcement->title }}" required>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label class="font-weight-bold">انتخاب وضعیت :</label><span class="text-danger">&starf;</span>
                <select name="status" class="form-control" required>
                  <option value="1" @selected($announcement->status)>فعال</option>
                  <option value="0" @selected(!$announcement->status)>غیر فعال</option>
                </select>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label class="font-weight-bold">تاریخ انتشار :</label><span class="text-danger">&starf;</span>
                <input class="form-control fc-datepicker" id="published_at" type="text" value="{{ old('published_date') ?: $announcement->published_at }}"/>
                <input name="published_date" id="published_date" type="hidden" value="{{ old('published_date') ?: $announcement->published_at }}"/>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label class="font-weight-bold">انتخاب عکس:</label>
                <input type="file" class="form-control" name="image">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label class="font-weight-bold">اسلاگ:</label><span class="text-danger">&starf;</span>
                <input type="text" class="form-control" name="slug" value="{{ old('slug') ?: $announcement->slug }}" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">متن کوتاه :</label><span class="text-danger">&starf;</span>
                <textarea name="summary" class="form-control" rows="3" required>{{ old("summary") ?: $announcement->summary }}</textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">متن :</label><span class="text-danger">&starf;</span>
                <textarea name="body" class="form-control" rows="10" required>{!! old("body") ?: $announcement->body !!}</textarea>
              </div>
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
@extends("Admin.layouts.app")
@section('content')
  <div class="col-12 mt-5 justify-content-center font-iran-sans">
    @include('includes.errors')
    <div class="card">
      <div class="card-header border-bottom-0 d-flex justify-content-between">
        <p class="card-title font-weight-bolder">ویرایش خبر شماره {{ $news->id }}</p>
        <a href="{{route("admin.news.index")}}" class="btn btn-outline-warning ">بازگشت</a>
      </div>
      <div class="card-body">
        <form action="{{route("admin.news.update", $news)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method("PUT")
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">تیتر :</label><span class="text-danger">&starf;</span>
                <input type="text" name="title" class="form-control" value="{{ old('title') ?: $news->title }}" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">رو تیتر :</label><span class="text-danger">&starf;</span>
                <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') ?: $news->subtitle }}" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">منبع خبر :</label><span class="text-danger">&starf;</span>
                <input type="text" name="resource_url" class="form-control" value="{{ old('resource_url') ?: $news->resource_url }}" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">انتخاب دسته بندی :</label><span class="text-danger">&starf;</span>
                <select name="category_id" class="form-control" required>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected($category->id == $news->category_id)>{{ $category->name }}</option>  
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">انتخاب وضعیت :</label><span class="text-danger">&starf;</span>
                <select name="status" class="form-control" required>
                  <option value="1" @selected($news->status)>فعال</option>
                  <option value="0" @selected(!$news->status)>غیر فعال</option>
                  {{-- <option value="1" {{ old('status') == "1" ? 'selected' : ($news->status == 1 ? 'selected' : null) }}>فعال</option>
                  <option value="0" {{ old('status') == "0" ? 'selected' : ($news->status == 0 ? 'selected' : null) }}>غیر فعال</option> --}}
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">خبر ویژه :</label><span class="text-danger">&starf;</span>
                <select name="featured" class="form-control" required>
                  <option value="1" @selected($news->featured)>فعال</option>
                  <option value="0" @selected(!$news->featured)>غیر فعال</option>
                  {{-- <option value="1" {{ old('featured') == "1" ? 'selected' : ($news->featured == 1 ? 'selected' : null) }}>باشد</option>
                  <option value="0" {{ old('featured') == "0" ? 'selected' : ($news->featured == 0 ? 'selected' : null) }}>نباشد</option> --}}
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">تاریخ انتشار :</label><span class="text-danger">&starf;</span>
                <input class="form-control fc-datepicker" id="published_at" type="text" value="{{ old('published_date') ?: $news->published_at }}"/>
                <input name="published_date" id="published_date" type="hidden" value="{{ old('published_date') ?: $news->published_at }}"/>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">انتخاب عکس:</label>
                <input type="file" class="form-control" name="image">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">اسلاگ:</label><span class="text-danger">&starf;</span>
                <input type="text" class="form-control" name="slug" value="{{ old('slug') ?: $news->slug }}" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">انتخاب برچسب :</label><span class="text-danger">&starf;</span>
                <select class="form-control tags-selecet2" name="tag[]" multiple="multiple" required>
                  @foreach ($tags as $tag)
                    <option value="{{ $tag->name }}" {{ $news->checkSelectingTags($tag->id) }}>{{ $tag->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">متن کوتاه :</label><span class="text-danger">&starf;</span>
                <textarea name="summary" class="form-control" rows="3" required>{{ old("summary") ?: $news->summary }}</textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">متن :</label><span class="text-danger">&starf;</span>
                <textarea name="body" class="form-control" rows="10" required>{!! old("body") ?: $news->body !!}</textarea>
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
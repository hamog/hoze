@extends("Admin.layouts.app")
@section('content')
  <div class="col-12 mt-5 justify-content-center font-iran-sans">
    @include('includes.errors')
    <div class="card">
      <div class="card-header border-bottom-0 d-flex justify-content-between">
        <p class="card-title font-weight-bolder">ویرایش مقاله شماره {{ $article->id }}</p>
        <a href="{{route("admin.article.index")}}" class="btn btn-outline-warning ">بازگشت</a>
      </div>
      <div class="card-body">
        <form action="{{route("admin.article.update", $article)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method("PUT")
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">تیتر :</label><span class="text-danger">&starf;</span>
                <input type="text" name="title" class="form-control" value="{{ old('title') ?: $article->title }}" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">منبع :</label><span class="text-danger">&starf;</span>
                <input type="text" name="resource" class="form-control" value="{{ old('resource') ?: $article->resource }}" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">انتخاب دسته بندی :</label><span class="text-danger">&starf;</span>
                <select name="category_id" class="form-control" required>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected($category->id == $article->category_id)>{{ $category->name }}</option>  
                  @endforeach
                </select>
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
                <input type="text" class="form-control" name="slug" value="{{ old('slug') ?: $article->slug }}" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">انتخاب وضعیت :</label><span class="text-danger">&starf;</span>
                <select name="status" class="form-control" required>
                  <option value="1" @selected($article->status)>فعال</option>
                  <option value="0" @selected(!$article->status)>غیر فعال</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">متن کوتاه :</label><span class="text-danger">&starf;</span>
                <textarea name="summary" class="form-control" rows="3" required>{{ old("summary") ?: $article->summary }}</textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">متن :</label><span class="text-danger">&starf;</span>
                <textarea name="body" class="form-control" rows="10" required>{{ old("title") ?: $article->body }}</textarea>
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
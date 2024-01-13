@extends("Admin.layouts.app")
@section('content')
  <div class="col-12 mt-5 justify-content-center">
    @include('includes.errors')
    <div class="card">
      <div class="card-header border-bottom-0 d-flex justify-content-between">
        <p class="card-title font-weight-bolder">ثبت مقاله جدید</p>
        <a href="{{route("admin.article.index")}}" class="btn btn-outline-warning ">بازگشت</a>
      </div>
      <div class="card-body">
        <form action="{{route("admin.article.store")}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">تیتر :</label><span class="text-danger">&starf;</span>
                <input type="text" name="title" class="form-control" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">منبع :</label><span class="text-danger">&starf;</span>
                <input type="text" name="resource" class="form-control" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">دسته بندی :</label><span class="text-danger">&starf;</span>
                <select name="category_id" class="form-control" required>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">انتخاب عکس:</label><span class="text-danger">&starf;</span>
                <input type="file" class="form-control" name="image" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">اسلاگ:</label><span class="text-danger">&starf;</span>
                <input type="text" class="form-control" name="slug" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">وضعیت :</label><span class="text-danger">&starf;</span>
                <select name="status" class="form-control" required>
                  <option value="none">انتخاب</option>
                  <option value="1">فعال</option>
                  <option value="0">غیر فعال</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">متن کوتاه :</label><span class="text-danger">&starf;</span>
                <textarea name="summary" class="form-control" rows="3" required></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">متن :</label><span class="text-danger">&starf;</span>
                <textarea name="body" class="summernote" rows="10" required></textarea>
              </div>
            </div>
          </div>
          <button class="btn btn-info">ثبت</button>
        </form>
      </div>
    </div>
  </div>
@endsection

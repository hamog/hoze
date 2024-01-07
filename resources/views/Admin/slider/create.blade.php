@extends("Admin.layouts.app")
@section('content')
  <div class="col-12 mt-5 justify-content-center">
    @include('includes.errors')
    <div class="card">
      <div class="card-header border-bottom-0 d-flex justify-content-between">
        <p class="card-title font-weight-bolder">ثبت اسلایدر جدید</p>
        <a href="{{route("admin.slider.index")}}" class="btn btn-outline-warning ">بازگشت</a>
      </div>
      <div class="card-body">
        <form action="{{route("admin.slider.store")}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            
            <div class="col-12 form-group">
              <label class="font-weight-bold">عنوان :</label><span class="text-danger">&starf;</span>
              <input type="text" name="title" class="form-control" required>
            </div>

            <div class="col-12 form-group">
              <label class="font-weight-bold">لینک :</label><span class="text-danger">&starf;</span>
              <input type="text" name="link" class="form-control" required>
            </div>

            <div class="col-12 form-group">
              <label class="font-weight-bold">انتخاب عکس:</label><span class="text-danger">&starf;</span>
              <input type="file" class="form-control" name="image" required>
            </div>

            <div class="col-12 form-group">
              <label class="font-weight-bold">انتخاب وضعیت :</label><span class="text-danger">&starf;</span>
              <select name="status" class="form-control" required>
                <option value="1">فعال</option>
                <option value="0">غیر فعال</option>
              </select>
            </div>

            <div class="col-12 form-group">
              <label class="font-weight-bold">متن خلاصه :</label><span class="text-danger">&starf;</span>
              <textarea name="summary" class="form-control" rows="3" required></textarea>
            </div>
            
          </div>
          <button class="btn btn-info">ثبت</button>
        </form>
      </div>
    </div>
  </div>
@endsection
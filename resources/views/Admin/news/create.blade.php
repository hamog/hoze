@extends("Admin.layouts.app")
@section('content')
  <div class="col-12 mt-5 justify-content-center">
    @include('includes.errors')
    <div class="card">
      <div class="card-header border-bottom-0 d-flex justify-content-between">
        <p class="card-title font-weight-bolder">ثبت خبر جدید</p>
        <a href="{{route("admin.news.index")}}" class="btn btn-outline-warning ">بازگشت</a>
      </div>
      <div class="card-body">
        <form action="{{route("admin.news.store")}}" method="POST" enctype="multipart/form-data">
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
                <label class="font-weight-bold">رو تیتر :</label><span class="text-danger">&starf;</span>
                <input type="text" name="subtitle" class="form-control" required>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">منبع خبر :</label><span class="text-danger">&starf;</span>
                <input type="text" name="resource_url" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="row">
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
                <label class="font-weight-bold">انتخاب وضعیت :</label><span class="text-danger">&starf;</span>
                <select name="status" class="form-control" required>
                  <option value="1">فعال</option>
                  <option value="0">غیر فعال</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="font-weight-bold">خبر ویژه :</label><span class="text-danger">&starf;</span>
                <select name="featured" class="form-control" required>
                  <option value="0">نباشد</option>
                  <option value="1">باشد</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="published_at_show" class="control-label">تاریخ انتشار</label> <span class="text-danger">&starf;</span>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="feather feather-calendar"></i>
                    </div>
                  </div>
                  <input class="form-control fc-datepicker" id="published_at_show" placeholder="تاریخ پرداخت" type="text" autocomplete="off" value="{{ verta(old('published_at', today()->format('Y-m-d')))->format('Y-m-d') }}">
                  <input name="published_at" id="published_at" type="hidden" value="{{ old('published_at', today()->format('Y-m-d')) }}">
                </div>
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
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">انتخاب برچسب :</label>
                <select class="form-control select2-tags" name="tag[]" multiple="multiple">
                  @foreach ($tags as $tag)
                    <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">متن کوتاه :</label><span class="text-danger">&starf;</span>
                <textarea name="summary" class="form-control" rows="3" required></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">متن خبر :</label><span class="text-danger">&starf;</span>
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

@section('scripts')
  <script>
    $('#published_at').MdPersianDateTimePicker({
      targetDateSelector: '#published_at',
      targetTextSelector: '#published_at_show',
      englishNumber: false,
      toDate:true,
      enableTimePicker: false,
      dateFormat: 'yyyy-MM-dd',
      textFormat: 'yyyy-MM-dd',
      groupId: 'rangeSelector1',
    });
  </script>
@endsection

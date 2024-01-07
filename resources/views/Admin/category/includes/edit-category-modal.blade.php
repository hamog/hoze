@foreach ($categories as $category)
  <div class="modal fade" id="editCategoryModal-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="min-width: 100vw; position: relative; bottom: 15vh">
      <div class="modal-content">
        <div class="modal-header">
          <p class="card-title font-weight-bolder">ویرایش دسته بندی ({{ $category->name }})</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route("admin.category.update", $category)}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label class="font-weight-bold">عنوان :</label><span class="text-danger">&starf;</span>
                  <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label class="font-weight-bold">نوع دسته بندی :</label><span class="text-danger">&starf;</span>
                  <select name="type" class="form-control" required>
                    <option value="news" @selected($category->type == "news")>خبر</option>
                    <option value="article" @selected($category->type == "article")>مقاله</option>
                  </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label class="font-weight-bold">اسلاگ :</label><span class="text-danger">&starf;</span>
                  <input type="text" name="slug" class="form-control" value="{{ $category->slug }}" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label class="font-weight-bold">انتخاب وضعیت :</label><span class="text-danger">&starf;</span>
                  <select name="status" class="form-control" required>
                    <option value="1" @selected($category->status)>فعال</option>
                    <option value="0" @selected(!$category->status)>غیر فعال</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col d-flex justify-content-center">
                <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">بستن</button>
                <button type="submit" class="btn btn-primary mr-2">ثبت</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
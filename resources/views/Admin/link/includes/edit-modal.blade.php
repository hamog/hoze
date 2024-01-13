@foreach($links as $link)
  <div class="modal fade mt-5" id="edit-link-{{ $link->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document" style="min-width: 100vw; position: relative; bottom: 18vh">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title font-weight-bolder">ویرایش پیوند شماره {{$link->id}}</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route("admin.link.update", $link)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label class="font-weight-bold">تیتر :</label><span class="text-danger">&starf;</span>
                  <input type="text" name="title" class="form-control" value="{{ old('title') ?: $link->title }}" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="font-weight-bold">رو تیتر :</label><span class="text-danger">&starf;</span>
                  <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') ?: $link->subtitle }}" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="font-weight-bold">لینک :</label><span class="text-danger">&starf;</span>
                  <input type="text" name="link" class="form-control" value="{{ old('link') ?: $link->link }}" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="description" class="font-weight-bold">توضیحات</label>
                  <textarea class="form-control" name="description" id="description"
                            rows="3">{!! old('description', $link->description) !!}</textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="font-weight-bold">انتخاب عکس:</label>
                  <input type="file" class="form-control" name="image">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="font-weight-bold">انتخاب وضعیت :</label><span class="text-danger">&starf;</span>
                  <select name="status" class="form-control" required>
                    <option value="1" @selected($link->status)>فعال</option>
                    <option value="0" @selected(!$link->status)>غیر فعال</option>
                  </select>
                </div>
              </div>
            </div>
            <button class="btn btn-warning">ویرایش</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endforeach

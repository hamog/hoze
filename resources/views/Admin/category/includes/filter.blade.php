<div class="card">
  <div class="card-header border-0">
    <p class="card-title" style="font-weight: bolder;">جستجو پیشرفته</p>
    <a href="{{route("admin.category.index")}}" class="action-btns1 mr-5">
      <i class="feather feather-refresh-cw text-warning"></i>
    </a>
  </div>
  <div class="card-body">
    <div class="row">
      <form action="{{ route("admin.category.index") }}" class="col-12">
        <div class="row">
          <div class="col-12 col-xl-4 col-lg-4 form-group">
            <label class="font-weight-bold">عنوان دسته بندی :</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="col-12 col-xl-4 col-lg-4 form-group">
            <label class="font-weight-bold">نوع دسته بندی :</label>
            <select name="type" class="form-control">
              <option value="all" @selected(request("type") == "all")>همه</option>
              <option value="news" @selected(request("type") == "news")>خبر</option>
              <option value="article" @selected(request("type") == "article")>مقاله</option>
            </select>
          </div>
          <div class="col-12 col-xl-4 col-lg-4 form-group mb-5">
            <label class="font-weight-bold">وضعیت :</label>
            <select name="status" class="form-control">
              <option value="all">همه</option>
              <option value="1" @selected(request("status") == "1")>فعال</option>
              <option value="0" @selected(request("status") == "0")>غیر فعال</option>
            </select>
          </div>
          <button class="col-12 btn btn-info align-self-center">جستجو</button>
        </div>
      </form>
    </div>
  </div>
</div>
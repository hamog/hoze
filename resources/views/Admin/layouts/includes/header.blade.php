<div class="app-header header">
  <div class="container-fluid">
    <div class="d-flex">
      <a class="header-brand" href="index.html">
        <img src="{{asset('../../assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
        <img src="{{asset('../../assets/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
        <img src="{{asset('../../assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Dayonelogo">
        <img src="{{asset('../../assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
      </a>
      <div class="app-sidebar__toggle" data-toggle="sidebar">
        <a class="open-toggle" href="#">
          <i class="feather feather-menu"></i>
        </a>
        <a class="close-toggle" href="#">
          <i class="feather feather-x"></i>
        </a>
      </div>
      <div class="mt-0">
        <form class="form-inline">
          <div class="search-element">
            <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
            <button class="btn btn-primary-color" >
              <i class="feather feather-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade mt-5" id="changePassswordForm" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document" style="min-width: 75vw; position: relative; bottom: 8vh;">
    <div class="modal-content w-50">
      <div class="modal-header">
        <p class="modal-title font-weight-bolder">تغییر کلمه عبور</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route("admin.profile.changePassword", auth()->user()->id) }}" method="POST">
          @csrf
          @method("PUT")
          <div class="row">
            <div class="col-12 form-group">
              <label class="font-weight-bold">کلمه عبور فعلی :</label><span class="text-danger">&starf;</span>
              <input type="password" name="old_password" class="form-control">
            </div>
            <div class="col-12 form-group">
              <label class="font-weight-bold">کلمه عبور جدید :</label><span class="text-danger">&starf;</span>
              <input type="password" name="password" class="form-control">
            </div>
            <div class="col-12 form-group">
              <label class="font-weight-bold">تکرار کلمه عبور :</label><span class="text-danger">&starf;</span>
              <input type="password" name="password_confirmation" class="form-control">
            </div>
            <div class="col align-self-center mt-3">
              <button class="btn btn-warning">ویرایش</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

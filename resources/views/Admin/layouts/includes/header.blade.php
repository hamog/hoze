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
      <div class="d-flex order-lg-2 my-auto mr-auto">
        <a class="nav-link my-auto icon p-0 nav-link-lg d-md-none navsearch" href="#" data-toggle="search">
          <i class="feather feather-search search-icon header-icon"></i>
        </a>
        <div class="dropdown header-fullscreen">
          <a class="nav-link icon full-screen-link">
            <i class="feather feather-maximize fullscreen-button fullscreen header-icons"></i>
            <i class="feather feather-minimize fullscreen-button exit-fullscreen header-icons"></i>
          </a>
        </div>
        <div class="dropdown profile-dropdown">
          <a href="#" class="nav-link pr-1 pl-0 leading-none" data-toggle="dropdown">
            <span>
              <img src="{{asset('../../assets/images/users/16.jpg')}}" alt="img" class="avatar avatar-md bradius">
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow animated">
            <a class="dropdown-item d-flex" href="{{route("admin.profile.edit", auth()->user()->id)}}">
              <i class="feather feather-user ml-3 fs-16 my-auto"></i>
              <div class="mt-1">پروفایل</div>
            </a>
            <a class="dropdown-item d-flex" href="#">
              <i class="feather feather-mail ml-3 fs-16 my-auto"></i>
              <div class="mt-1">Messages</div>
            </a>
            <button type="button" class="dropdown-item d-flex" data-toggle="modal" data-target="#changePassswordForm">
              <i class="feather feather-edit-2 ml-3 fs-16 my-auto"></i>
              <div class="mt-1">تغییر کلمه عبور</div>
            </button>
            <a class="dropdown-item d-flex" href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="feather feather-power ml-3 fs-16 my-auto"></i>
              <div class="mt-1">خروج</div>
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </div>
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

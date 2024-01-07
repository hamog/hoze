@extends("Admin.layouts.app")
@section('content')
  <div class="col-12 mt-5">
    @include("includes.errors")
    @if (session("update_user")) 
      <div class="alert alert-success d-flex justify-content-between" role="alert">
        <p>{{ session("update_user") }}</p>
        <button class="close text-dark align-self-start" data-dismiss="alert" aria-hidden="true">×</button>
      </div>
    @endif
    <div class="card">
      <div class="card-header border-0 justify-content-between ">
        <span class="card-title ml-2" style="font-weight: bolder;">کاربر شماره {{ $user->id }}</span>
      </div>
      <div class="card-body">
        <form action="{{ route("admin.profile.update", $user) }}" method="POST">
          @csrf
          @method("PATCH")
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="form-label font-weight-bold">نام کامل :</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label font-weight-bold">شماره همراه :</label>
                <input type="text" name="phone_number" class="form-control" value="{{ $user->phone_number }}">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label font-weight-bold">ایمیل :</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
              </div>
            </div>
          </div>
          <button class="btn btn-warning">بروزرسانی</button>
        </form>
      </div>
    </div>
  </div>
@endsection
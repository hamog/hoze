@extends("Admin.layouts.app")
@section('title') اطلاعیه شماره {{ $announcement->id }} @endsection
@section('content')
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-header border-0 justify-content-between ">
        <p class="card-title" style="font-weight: bolder;">اطلاعیه شماره {{ $announcement->id }}</p>
        <div class="d-flex">
          <a href="{{route("admin.announcement.edit", $announcement)}}" class="btn btn-info ml-2">
            <i class="fe fe-edit text-white"></i>
          </a>
          <button onclick="confirmDelete('delete-{{ $announcement->id }}')" class="btn btn-danger ml-2">
            <i class="fe fe-trash-2 text-white"></i>
          </button>
          <form action="{{ route('admin.announcement.destroy', $announcement) }}" method="POST" id="delete-{{ $announcement->id }}" style="display: none">
            @csrf
            @method('DELETE')
          </form>
          <a href="{{route("admin.announcement.index")}}" class="btn btn-warning ">
            <i class="fe fe-log-out text-white"></i>
          </a>
        </div>
      </div>
      <div class="card-body">
        <div class="row d-flex justify-content-between">
          <div class="d-flex flex-column justify-content-between">
            <div class="d-flex align-items-center">
              <span class="fs-20 font-weight-bolder">عنوان :</span>
              <span class="fs-18 mr-2">{{ $announcement->title }}</span>
            </div>
            <div class=" d-flex align-items-center ">
              <span class="fs-20 font-weight-bolder">نام منتشر کننده :</span>
              <span class="fs-18 mr-2">{{ $announcement->user->name }}</span>
            </div>
            <div class=" d-flex align-items-center ">
              <span class="fs-20 font-weight-bolder">اسلاگ :</span>
              <span class="fs-18 mr-2">{{ $announcement->slug }}</span>
            </div>
            <div class=" d-flex align-items-center ">
              <span class="fs-20 font-weight-bolder">وضعیت :</span>
              @if($announcement->status == 1)
                <span class="fs-18 mr-2 text-success">فعال</span>
              @else
                <span class="fs-18 mr-2 text-danger ">غیر فعال</span>
              @endif
            </div>
          </div>
          <div style="height: 300px; width: 40%;">
            <figure class="h-100 w-100">
              <img class="h-100 w-100 rounded" src="{{ $announcement->getImage() }}">
            </figure>
          </div>
        </div>
        <div class="rounded my-5" style="width: 100%; height:2px; background-color: darkgrey;"></div>
        <div class="row mt-3">
          <div class="col px-0">
            <span class="fs-20 font-weight-bolder">متن کوتاه :</span>
            <p class="fs-18 mt-2 mr-1">{{ $announcement->summary }}</p>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col px-0">
            <span class="fs-20 font-weight-bolder">متن :</span>
            <p class="fs-18 mt-2 mr-1">{{ $announcement->body }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@extends("Admin.layouts.app")
@section('title') اسلایدر شماره {{ $slider->id }} @endsection
@section('content')
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-header border-0 justify-content-between ">
        <p class="card-title" style="font-weight: bolder;">اسلایدر شماره {{ $slider->id }}</p>
        <div class="d-flex">
          <a href="{{route("admin.slider.edit", $slider)}}" class="btn btn-info ml-2">
            <i class="fe fe-edit text-white"></i>
          </a>
          <button onclick="confirmDelete('delete-slider-{{ $slider->id }}')" class="btn btn-danger ml-2">
            <i class="fe fe-trash-2 text-white"></i>
          </button>
          <form action="{{ route('admin.slider.destroy', $slider) }}" method="POST" id="delete-slider-{{ $slider->id }}" style="display: none">
            @csrf
            @method('DELETE')
          </form>
          <a href="{{route("admin.slider.index")}}" class="btn btn-warning">
            <i class="fe fe-log-out text-white"></i>
          </a>
        </div>
      </div>
        <div class="card-body">
          <div class="row d-flex justify-content-between">
            <div class="col-12" style="height: 400px">
              <figure class="h-100 w-100">
                <img class="h-100 w-100 rounded" src="{{ $slider->getImage() }}">
              </figure>
            </div>
            <div class="col-12 d-flex align-items-center">
              <span class="fs-20 font-weight-bolder">تیتر :</span>
              <span class="fs-18 mr-2">{{ $slider->title }}</span>
            </div>
            <div class="col-12 d-flex align-items-center">
              <span class="fs-20 font-weight-bolder">لینک :</span>
              <a href="{{ $slider->link }}" class="fs-18 mr-2">{{ $slider->link }}</a>
            </div>
            <div class="col-12 d-flex align-items-center ">
              <span class="fs-20 font-weight-bolder">وضعیت :</span>
              @if($slider->status)
                <span class="fs-18 mr-2 text-success">فعال</span>
              @else
                <span class="fs-18 mr-2 text-danger ">غیر فعال</span>
              @endif
            </div>
            <div class="col-12">
              <span class="fs-20 font-weight-bolder">متن کوتاه :</span>
              <p class="fs-18 mr-2">{{ $slider->summary }}</p>
            </div>
          </div> 
        </div>
    </div>
  </div>
@endsection

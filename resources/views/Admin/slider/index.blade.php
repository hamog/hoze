@extends('Admin.layouts.app')
@section("title") لیست تمام اسلایدر ها @endsection
@section('content')
  <div class="col-12 mt-5">
    <div class="col-xl-12 col-md-12 col-lg-12">
      @if (session("create_slider"))
        <div class="alert alert-success" role="alert"> {{ session("create_slider") }} </div>
      @endif
      @include('Admin.slider.includes.filter')
      <div class="card">
        <div class="card-header border-0 justify-content-between ">
          <div class="d-flex">
            <p class="card-title ml-2" style="font-weight: bolder;">لیست اسلایدر</p>
            <span class="fs-15">({{ $slidersCount }})</span>
          </div>
          <a class="btn btn-teal align-self-center" href="{{route("admin.slider.create")}}">
            <span>ثبت اسلایدر جدید</span>
            <i class="fe fe-plus"></i>
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="hr-table-wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
              <div class="row">
                <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                  <thead>
                    <tr>
                      <th class="text-center border-top">ردیف</th>
                      <th class="text-center border-top">تصویر</th>
                      <th class="text-center border-top">شناسه</th>
                      <th class="text-center border-top">عنوان</th>
                      <th class="text-center border-top">تاریخ ثبت</th>
                      <th class="text-center border-top">وضعیت</th>
                      <th class="text-center border-top">عملیات</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $counter = 1; @endphp
                    @forelse ($sliders as $slider)
                      @include('Admin.slider.includes.table')
                      @php $counter++; @endphp
                      @empty <div class="alert alert-danger">هیچ داده ای یافت نشد</div>                          
                    @endforelse
                  </tbody>
                </table>
                {{ $sliders->onEachSide(1)->links("vendor.pagination.bootstrap-4") }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
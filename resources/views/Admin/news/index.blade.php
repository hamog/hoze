@extends('Admin.layouts.app')
@section("title") لیست تمام خبرها @endsection
@section('content')
  <div class="col-12 mt-5">
    <div class="col-xl-12 col-md-12 col-lg-12">
      @include('Admin.news.includes.filter')
      <div class="card">
        <div class="card-header border-0 justify-content-between ">
          <div class="d-flex">
            <p class="card-title ml-2" style="font-weight: bolder;">لیست خبر ها</p>
            <span class="fs-15">({{ $newsCount }})</span>
          </div>
          <a class="btn btn-teal align-self-center" href="{{route("admin.news.create")}}">
            <span>ثبت خبر جدید</span>
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
                      <th class="text-center border-top">ناشر</th>
                      <th class="text-center border-top">دسته بندی</th>
                      <th class="text-center border-top">شناسه</th>
                      <th class="text-center border-top">ویژه</th>
                      <th class="text-center border-top">تیتر</th>
                      <th class="text-center border-top">منبع خبر</th>
                      <th class="text-center border-top">تاریخ انتشار</th>
                      <th class="text-center border-top">وضعیت</th>
                      <th class="text-center border-top">عملیات</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $counter = 1; @endphp
                    @forelse ($allNews as $news)
                      @include('Admin.news.includes.table')
                      @php $counter++; @endphp
                      @empty
                        <div class="alert alert-danger">هیچ داده ای یافت نشد</div>                          
                    @endforelse
                  </tbody>
                </table>
                  {{ $allNews->onEachSide(1)->links("vendor.pagination.bootstrap-4") }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
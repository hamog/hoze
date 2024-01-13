@extends('Admin.layouts.app')
@section("title") لیست تمام پیوند ها @endsection
@section('content')
  <div class="col-12 mt-5">
    <div class="col-xl-12 col-md-12 col-lg-12">
      @include('Admin.link.includes.filter')
      <div class="card">
        <div class="card-header border-0 justify-content-between ">
          <div class="d-flex">
            <p class="card-title font-weight-bolder ml-2">لیست پیوند</p>
            <span class="fs-15">({{ $linksCount }})</span>
          </div>
          <button class="btn btn-teal align-self-center" data-toggle="modal" data-target="#create-link">
            <span>ثبت پیوند جدید</span>
            <i class="fe fe-plus"></i>
          </button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="hr-table-wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
              <div class="row">
                <table class="table table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                  <thead>
                    <tr>
                      <th class="text-center border-top">ردیف</th>
                      <th class="text-center border-top">تصویر</th>
                      <th class="text-center border-top">شناسه</th>
                      <th class="text-center border-top">عنوان</th>
                      <th class="text-center border-top">توضیحات</th>
                      <th class="text-center border-top">تاریخ ثبت</th>
                      <th class="text-center border-top">وضعیت</th>
                      <th class="text-center border-top">عملیات</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $counter = 1; @endphp
                    @forelse ($links as $link)
                      @include('Admin.link.includes.table')
                      @php $counter++; @endphp
                      @empty <div class="alert alert-danger">هیچ داده ای یافت نشد</div>
                    @endforelse
                  </tbody>
                </table>
                {{ $links->onEachSide(1)->links("vendor.pagination.bootstrap-4") }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('Admin.link.includes.create-modal')
  @include('Admin.link.includes.edit-modal')
  @include('Admin.link.includes.show-modal')
@endsection

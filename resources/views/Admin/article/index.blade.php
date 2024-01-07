@extends('Admin.layouts.app')
@section("title") لیست تمام مقاله ها @endsection
@section('content')
  <div class="col-12 mt-5">
    <div class="col-xl-12 col-md-12 col-lg-12">
      @include('Admin.article.includes.filter')
      <div class="card">
        <div class="card-header border-0 justify-content-between ">
          <div class="d-flex">
            <p class="card-title font-weight-bolder ml-2">لیست مقاله ها</p>
            <span class="fs-15">({{ $articlesCount }})</span>
          </div>
          <a class="btn btn-teal align-self-center" href="{{route("admin.article.create")}}">
            <span>ثبت مقاله جدید</span><i class="fe fe-plus"></i>
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
                      <th class="text-center border-top">تیتر</th>
                      <th class="text-center border-top">تاریخ انتشار</th>
                      <th class="text-center border-top">وضعیت</th>
                      <th class="text-center border-top">عملیات</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $counter = 1; @endphp
                    @forelse ($articles as $article)
                      @include('Admin.article.includes.table')
                      @php $counter++; @endphp
                      @empty
                        <div class="alert alert-danger">هیچ داده ای یافت نشد</div>                          
                    @endforelse
                  </tbody>
                </table>
                {{ $articles->onEachSide(1)->links("vendor.pagination.bootstrap-4") }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
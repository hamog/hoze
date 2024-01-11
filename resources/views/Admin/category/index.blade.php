@extends('Admin.layouts.app')
@section('content')
  <div class="col-12 mt-5">
    <div class="col-xl-12 col-md-12 col-lg-12">
      @include('Admin.category.includes.filter')
      <div class="card">
        <div class="card-header border-0 justify-content-between">
          <div class="d-flex">
            <p class="card-title ml-2" style="font-weight: bolder;">لیست دسته بندی ها</p>
            <span class="fs-15">({{ $categoriesCount }})</span>
          </div>
          <button class="btn btn-teal" data-toggle="modal" data-target="#createCategoryModal">
            <span>ثبت دسته بندی جدید</span>
            <i class="fe fe-plus"></i>
          </button>
        </div>
        <div class="card-body">

          @include('includes.errors')

          <div class="table-responsive">
            <div id="hr-table-wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
              <div class="row">
                <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                  <thead>
                    <tr>
                      <th class="text-center border-top">ردیف</th>
                      <th class="text-center border-top">عنوان</th>
                      <th class="text-center border-top">شناسه</th>
                      <th class="text-center border-top">اسلاگ</th>
                      <th class="text-center border-top">نوع دسته بندی</th>
                      <th class="text-center border-top">تاریخ ثبت</th>
                      <th class="text-center border-top">وضعیت</th>
                      <th class="text-center border-top">عملیات</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $counter = 1; @endphp
                    @foreach ($categories as $category)
                      @include('Admin.category.includes.table')
                      @php $counter++; @endphp
                    @endforeach
                  </tbody>
                </table>
                {{ $categories->onEachSide(1)->links("vendor.pagination.bootstrap-4") }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('Admin.category.includes.create-category-modal')
  @include('Admin.category.includes.edit-category-modal')
@endsection

@extends('Admin.layouts.app')
@section('content')
  <div class="col-12 mt-5 justify-content-center">
    @include('includes.errors')
    <div class="card">
      <div class="card-header border-bottom-0 d-flex justify-content-between">
        <button type="button" class="btn btn-teal" data-toggle="modal" data-target="#create-menu">ثبت آیتم جدید</button>
        <a href="{{route("admin.menus.groups")}}" class="btn btn-outline-warning ">بازگشت</a>
      </div>
      <div class="card-body">
        <form action="{{route('admin.menus.sort')}}" method="POST">
          @csrf
          @method('PATCH')
          <div class="table-responsive">
            <div id="hr-table-wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
              <div class="row">
                <table class="table table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                  <thead>
                    <tr>
                      <th class="text-center border-top">انتخاب</th>
                      <th class="text-center border-top">الویت</th>
                      <th class="text-center border-top">عنوان</th>
                      <th class="text-center border-top">شناسه</th>
                      <th class="text-center border-top">وضعیت</th>
                      <th class="text-center border-top">عملیات</th>
                    </tr>
                  </thead>
                  <tbody id="items">
                    @foreach ($menuItems as $menuItem)
                      <tr>
                        <input type="hidden" value="{{ $menuItem->id }}" name="menus[]">
                        <td class="text-center"><i class="fe fe-move glyphicon-move text-dark"></i></td>
                        <td class="text-center">{{ $menuItem->order }}</td>
                        <td class="text-center">{{ $menuItem->title }}</td>
                        <td class="text-center">{{ $menuItem->id }}</td>
                        <td class="text-center">
                          @if ($menuItem->status)
                            <span class="badge badge-success">فعال</span>
                          @else
                            <span class="badge badge-danger">غیر فعال</span>
                          @endif
                        </td>
                        <td class="text-center">
                          <div class="d-flex justify-content-center">
                            <button type="button" class="action-btns1 bg-transparent ml-1" data-toggle="modal" data-target="#edit-menu-{{ $menuItem->id }}">
                              <i class="feather feather-edit-2 text-warning"></i>
                            </button>
                            <button type="button" class="action-btns1 bg-transparent mr-1" onclick="confirmDeleteMenu('delete-menu-{{ $menuItem->id }}')">
                              <i class="feather feather-trash-2 text-danger"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button class="btn btn-secondary mt-5" type="submit">ذخیره مرتب سازی</button>
        </form>
      </div>
    </div>
  </div>
  @foreach ($menuItems as $menuItem)
    <form action="{{ route('admin.menus.destroy', $menuItem) }}" method="post" id="delete-menu-{{ $menuItem->id }}" style="display: none">
      @csrf
      @method('DELETE')
    </form>
  @endforeach

  @include('Admin.menu.includes.create-menu-item-modal')
  @include('Admin.menu.includes.edit-menu-item-modal')
  @include('Admin.menu.includes.scripts')
  
@endsection
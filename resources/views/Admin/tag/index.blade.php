@extends('Admin.layouts.app')
@section("title") لیست تمام تگ ها @endsection
@section('content')
  <div class="col-12 mt-5">
    <div class="col-xl-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header border-0 justify-content-between ">
          <p class="card-title font-weight-bolder">لیست برچسب ها</p>
          <button class="btn btn-teal" data-toggle="modal" data-target="#create-tag">
            <span>ثبت برچسب جدید</span>
            <i class="fe fe-plus"></i>
          </button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="hr-table-wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
              <div class="row">
                <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                  <thead>
                    <tr>
                      <th class="text-center border-top">ردیف</th>
                      <th class="text-center border-top">عنوان</th>
                      <th class="text-center border-top">شناسه</th>
                      <th class="text-center border-top">تاریخ ساخت</th>
                      <th class="text-center border-top">عملیات</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $counter = 1; @endphp
                    @foreach ($tags as $tag)
                      <tr>
                        <td class="text-center">{{ $counter }}</td>
                        <td class="text-center">{{ $tag->name }}</td>
                        <td class="text-center">{{ $tag->id }}</td>
                        <td class="text-center">{{ $tag->shamsiCreatedAt() }}</td>
                        <td class="text-center">
                          <div class="d-flex justify-content-center">
                            <button class="action-btns1 bg-transparent" data-toggle="modal" data-target="#edit-tag-{{$tag->id}}">
                              <i class="feather feather-edit-2 text-warning"></i>
                            </button>
                            <button onclick="confirmDelete('delete-tag-{{ $tag->id }}')" class="action-btns1 bg-transparent">
                              <i class="feather feather-trash-2 text-danger"></i>
                            </button>
                            <form action="{{ route('admin.tag.destroy', $tag) }}" method="POST" id="delete-tag-{{ $tag->id }}" style="display: none">
                              @csrf
                              @method('DELETE')
                            </form>
                          </div>
                        </td>
                      </tr>
                      @php $counter++; @endphp
                    @endforeach
                  </tbody>
                </table>
                {{ $tags->onEachSide(1)->links("vendor.pagination.bootstrap-4") }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="create-tag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="min-width: 75vw;">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title font-weight-bolder">ثبت برچسب جدید</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route("admin.tag.store")}}" method="POST">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label class="font-weight-bold">عنوان :</label><span class="text-danger">&starf;</span>
                  <input type="text" name="name" class="form-control">
                </div>
              </div>
            </div>
            <button class="btn btn-info">ثبت</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  @foreach ($tags as $tag)
    <div class="modal fade" id="edit-tag-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="min-width: 75vw;">
        <div class="modal-content">
          <div class="modal-header">
            <p class="modal-title font-weight-bolder">ویرایش برچسب {{ $tag->id }}</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route("admin.tag.update", $tag)}}" method="POST">
              @csrf
              @method("PATCH")
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label class="font-weight-bold">عنوان :</label><span class="text-danger">&starf;</span>
                    <input type="text" name="name" class="form-control" value="{{ $tag->name }}">
                  </div>
                </div>
              </div>
              <button class="btn btn-warning">ویرایش</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endforeach

@endsection
@extends('Admin.layouts.app')
@section('content')
  <div class="col-12 mt-5 jusify-content-center">
    <div class="row">
      <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card">
          <a href="{{ route('admin.news.index') }}">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                  <div class="mt-0 text-right"> 
                    <span class="font-weight-semibold">تعداد اخبار</span>
                    <h3 class="mb-0 mt-1 text-success">{{$newsCount}}</h3>
                  </div>
                </div>
                <div class="col-5">
                  <div class="icon1 bg-success-transparent my-auto  float-left"> 
                    <i class="fe fe-file-text"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card">
          <a href="{{ route('admin.announcement.index') }}">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                  <div class="mt-0 text-right"> <span class="font-weight-semibold">تعداد اطلاعیه ها</span>
                    <h3 class="mb-0 mt-1 text-primary">{{$announcementsCount}}</h3>
                  </div>
                </div>
                <div class="col-5">
                  <div class="icon1 bg-primary-transparent my-auto  float-left">      
                    <i class="fe fe-file-text"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card">
          <a href="{{ route('admin.article.index') }}">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                  <div class="mt-0 text-right"> <span class="font-weight-semibold">تعداد مقاله ها</span>
                  <h3 class="mb-0 mt-1 text-secondary">{{$articlesCount}}</h3> </div>
                </div>
                <div class="col-5">
                  <div class="icon1 bg-secondary-transparent my-auto  float-left">
                    <i class="fe fe-file-text"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card">
          <a href="{{ route('admin.link.index') }}">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                  <div class="mt-0 text-right"> <span class="font-weight-semibold">تعداد پیوند ها</span>
                  <h3 class="mb-0 mt-1 text-danger">{{$linksCount}}</h3> </div>
                </div>
                <div class="col-5">
                  <div class="icon1 bg-danger-transparent my-auto  float-left"> 
                    <i class="fe fe-file-text"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-8">
        <div class="card">
          <div class="card-header border-0 justify-content-between ">
            <div class="d-flex">
              <p class="card-title font-weight-bolder ml-2">دسته بندی ها</p>
            </div>
            <div>
              <a href="{{route("admin.category.index")}}" class="btn btn-outline-primary">مشاهده همه</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div id="hr-table-wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                  <table class="table table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                    <thead>
                      <tr>
                        <th class="text-center border-top">شناسه</th>
                        <th class="text-center border-top">عنوان</th>
                        <th class="text-center border-top">نوع</th>
                        <th class="text-center border-top">وضعیت</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $category)
                        <tr>
                          <td class="text-center"> {{ $category->id }} </td>
                          <td class="text-center"> {{ $category->name }} </td>
                          <td class="text-center"> {{ $category->getType() }} </td>
                          <td class="text-center"> 
                            @if ($category->status == '0')
                              <span class="text-danger">غیر فعال</span>
                            @else
                              <span class="text-success">فعال</span>
                            @endif
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4">
        <div class="card">
          <div class="card-header border-0 justify-content-between ">
            <div class="d-flex">
              <p class="card-title font-weight-bolder ml-2">برچسب ها</p>
            </div>
            <div>
              <a href="{{route("admin.tag.index")}}" class="btn btn-outline-primary">مشاهده همه</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div id="hr-table-wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                  <table class="table table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                    <thead>
                      <tr>
                        <th class="text-center border-top">شناسه</th>
                        <th class="text-center border-top">عنوان</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($tags as $tag)
                        <tr>
                          <td class="text-center"> {{ $tag->id }} </td>
                          <td class="text-center"> {{ $tag->name }} </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header border-0 justify-content-between ">
            <div class="d-flex">
              <p class="card-title font-weight-bolder ml-2">آخرین اخبار ثبت شده</p>
            </div>
            <div>
              <a href="{{route("admin.news.index")}}" class="btn btn-outline-primary">مشاهده همه</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div id="hr-table-wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                  <table class="table table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                    <thead>
                      <tr>
                        <th class="text-center border-top">شناسه</th> 
                        <th class="text-center border-top">ناشر</th>
                        <th class="text-center border-top">دسته بندی</th>
                        <th class="text-center border-top">ویژه</th>
                        <th class="text-center border-top">تیتر</th>
                        <th class="text-center border-top">تاریخ انتشار</th>
                        <th class="text-center border-top">وضعیت</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($limitedNews as $news)
                        <tr>
                          <td class="text-center">{{ $news->id }}</td>
                          <td class="text-center">{{ $news->user->name }}</td>
                          <td class="text-center">{{ $news->category->name }}</td>
                          <td class="text-center">
                            @if ($news->featured == 1)
                              <span class="text-success font-weight-bold">هست</span>
                            @else
                              <span class="text-danger font-weight-bold">نیست</span>
                            @endif
                          </td>
                          <td class="text-center">{{ Str::limit($news->title, 20) }}</td>
                          <td class="text-center">
                            @if ($news->published_at != null)
                              <span>{{ $news->shamsiDate($news->published_at) }}</span>
                            @else
                              <span class="badge badge-danger">منتشر نشده</span>
                            @endif
                          </td>
                          <td class="text-center">
                            @if ($news->status == 1)
                              <span class="badge badge-success">فعال</span>
                            @else
                              <span class="badge badge-danger">غیرفعال</span>
                            @endif
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
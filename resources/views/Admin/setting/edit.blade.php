@extends('Admin.layouts.app')
@section("title") تنظیمات @endsection
@section('content')


  <div class="col-12 mt-5">
    <div class="col-xl-12 col-md-12 col-lg-12">
      @include('includes.errors')
      <div class="card">
        <div class="card-header border-0 d-flex justify-content-between">
          <p class="card-title ml-2" style="font-weight: bolder;">ویرایش تنظیمات - {{$group}}</p>

          <div class="float-left">
            <a href="{{route('admin.settings.index')}}" class="btn btn-outline-warning ">بازگشت</a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-setting">
              ثبت کلید تنظیمات جدید
            </button>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="create-setting" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
               aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">ثبت کلید تنظیمات جدید</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.settings.store') }}" method="post" class="form.save">
                      @csrf

                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                              <label for="name" class="control-label">نام کلید (به انگلیسی) <span class="text-danger">&starf;</span></label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="نام کلید (به انگلیسی) را اینجا وارد کنید" value="{{ old('name') }}" required>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                              <label for="label" class="control-label">لیبل (به فارسی) <span class="text-danger">&starf;</span></label>
                              <input type="text" class="form-control" name="label" id="label" placeholder="لیبل (به فارسی) را اینجا وارد کنید" value="{{ old('label') }}" required>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                              <label for="type" class="control-label">نوع تنظیمات</label>
                              <span class="text-danger">&starf;</span>
                              <select class="form-control" name="type" id="type" required>
                                  <option class="text-muted">-- نوع تنظیمات مورد نظر را انتخاب کنید --</option>
                                  <option value="text" @selected(old('type') == 'text')>متن کوتاه</option>
                                  <option value="textarea" @selected(old('type') == 'textarea')>متن بلند</option>
                                  <option value="image" @selected(old('type') == 'image')>تصویر</option>
                              </select>
                          </div>
                        </div>
                      </div>

                      <div class="text-center">
                        <input type="hidden" name="group" value="{{ $groupName }}">
                          <button class="btn btn-primary" type="submit">ثبت  و ذخیره</button>
                      </div>

                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger">بستن</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route("admin.settings.update") }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method("PATCH")
						<div class="row">
							@foreach ($settingTypes as $type => $settings)
								@if ($type == 'text' OR $type == "number" OR $type == "email")
									@foreach ($settings as $setting)
										<div class="col-6">
											<div class="form-group">
												<label class="form-label" for="{{ $setting->name }}">{{ $setting->label }}</label>
												<input
													id="{{ $setting->name }}"
													type="{{ $type }}"
													name="{{ $setting->name }}"
													class="form-control"
													value="{{ $setting->value }}"
													@if ($type == "number") min="0" @endif
												/>
											</div>
										</div>
									@endforeach
								@endif
								@if ($type == 'image')
									@foreach ($settings as $setting)
										<div class="col-6">
											<div class="form-group">
												<label class="form-label" for="{{ $setting->name }}">{{ $setting->label }}</label>
												<input
													id="{{ $setting->name }}"
													value="{{ $setting->value }}"
													type="file"
													name="{{ $setting->name }}"
													class="form-control"
												/>
											</div>
										</div>
										<div class="col-6">
											<button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('delete-image-{{ $setting->id }}')">
												<i class="fa fa-times"></i>
											</button>
											<br>
											<figure class="figure">
												<img
													src="{{ $setting->value }}"
													class="img-thumbnail"
													width="50" height="50"
													alt="{{ $setting->label }}"
												/>
											</figure>
										</div>
									@endforeach
								@endif
								@if ($type == "textarea")
									@foreach ($settings as $setting)
										<div class="col-12">
											<div class="form-group">
												<label class="form-label" for="{{ $setting->name }}">{{ $setting->label }}</label>
												<textarea class="form-control" name="{{ $setting->name }}" id="{{ $setting->name }}">{!! $setting->value !!}</textarea>
											</div>
										</div>
									@endforeach
								@endif
							@endforeach
						</div>
						<button class="btn btn-warning" type="submit">بروزرسانی</button>
					</form>
					@foreach ($settingTypes as $type => $settings)
						@if ($type == "image")
							@foreach ($settings as $setting)
								<form action="{{ route('admin.settings.destroy.file', $setting) }}" id="delete-image-{{$setting->id}}" method="POST" style="display: none;">
									@csrf
									@method("DELETE")
								</form>
							@endforeach
						@endif
					@endforeach
        </div>
      </div>
    </div>
  </div>
@endsection

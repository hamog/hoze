@extends('Admin.layouts.app')
@section('content')
  <div class="col-12 d-flex mt-5">
		<div class="card">
			<div class="card-body">
				<div class="row">
          @foreach ($menuGroups as $menuGroup)
            <div class="col-md-12 col-xl-3 col-lg-6">
              <div class="card {{ $menuGroup->name == 'header' ? 'bg-success' : 'bg-danger' }}">
                <div class="card-body text-center text-white">
                  <i class="fe fe-info fs-50"></i>
                  <h3 class="font-weight-bold mt-4">{{ $menuGroup->name }}</h3>
                  <p class="mt-3 mb-5">منو های {{ $menuGroup->label }}</p>
                  <a class="btn btn-white mx-1 btn-pill" href="{{ route('admin.menus.index', ['menuGroupId' => $menuGroup->id]) }}">مشاهده</a>
                </div>
              </div>
            </div>
          @endforeach
				</div>
			</div>
		</div>
  </div>
@endsection

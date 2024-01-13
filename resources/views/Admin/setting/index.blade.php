@extends('Admin.layouts.app')
@section('content')
  <div class="col-12 d-flex mt-5">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 col-xl-4 col-lg-6">
						<div class="card bg-success">
							<div class="card-body text-center text-white">
								<i class="fe fe-info fs-50"></i>
								<h3 class="font-weight-bold mt-4">تنظیمات عمومی</h3>
								<p class="mt-3 mb-5">تنظمیت سایت مانند لوگو و تلفن و ... در این بخش قرار می گیرد.</p>
								<a class="btn btn-white mx-1 btn-pill" href="{{ route('admin.settings.edit', ['general']) }}">ویرایش</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-4 col-lg-6">
						<div class="card bg-danger">
							<div class="card-body text-center text-white">
								<i class="fe fe-info fs-50"></i>
								<h3 class="font-weight-bold mt-4"> شبکه های اجتماعی</h3>
								<p class="mt-3 mb-5">تنظمیت سایت مانند لوگو و تلفن و ... در این بخش قرار می گیرد.</p>
								<a class="btn btn-white mx-1 btn-pill" href="{{ route('admin.settings.edit', ['social']) }}">ویرایش</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  </div>
@endsection

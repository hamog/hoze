@if ($type == "link")

	<a href='{{ route("admin.{$title}.create") }}' class="btn btn-teal align-self-center">
		<span>ثبت {{$label}} جدید</span>
		<i class="fe fe-plus"></i>
	</a>

@elseif ($type == "btn")

	<button class="btn btn-teal" data-toggle="modal" data-target="#create-{{$title}}">
		<span>ثبت {{$label}} جدید</span>
		<i class="fe fe-plus"></i>
	</button> 
	
@endif
<tr>
  <td class="text-center">{{ $counter }}</td>
  <td class="text-center">
    <img width="50" height="40" src="{{ $slider->getImage() }}"/>
  </td>
  <td class="text-center">{{ $slider->id }}</td>
  <td class="text-center">{{ Str::limit($slider->title, 20) }}</td>
  <td class="text-center">{{ $slider->shamsiCreatedAt() }}</td>
  <td class="text-center">
    @if ($slider->status == 1)
      <span class="badge badge-success">فعال</span>
    @else
      <span class="badge badge-danger">غیرفعال</span>
    @endif
  </td>
  <td class="text-center">
    <div class="d-flex justify-content-center">
      <a href="{{route("admin.slider.show", $slider)}}" class="action-btns1">
        <i class="feather feather-eye text-primary"></i>
      </a>
      <a href="{{route("admin.slider.edit", $slider)}}" class="action-btns1">
        <i class="feather feather-edit-2 text-warning"></i>
      </a>
      <button onclick="confirmDelete('delete-{{ $slider->id }}')" class="action-btns1 bg-transparent ">
        <i class="feather feather-trash-2 text-danger"></i>
      </button>
      <form action="{{ route('admin.slider.destroy', $slider) }}" method="POST" id="delete-{{ $slider->id }}" style="display: none">
        @csrf
        @method('DELETE')
      </form>
    </div>
  </td>
</tr>
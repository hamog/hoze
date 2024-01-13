<tr>
  <td class="text-center">{{ $counter }}</td>
  <td class="text-center">
     <img width="50" height="40" src="{{ $link->getImage() }}"/>
  </td>
  <td class="text-center">{{ $link->id }}</td>
  <td class="text-center">{{ Str::limit($link->title, 20) }}</td>
  <td class="text-center">{{ $link->shamsiCreatedAt() }}</td>
  <td class="text-center">
    @if ($link->status == 1)
      <span class="badge badge-success">فعال</span>
    @else
      <span class="badge badge-danger">غیرفعال</span>
    @endif
  </td>
  <td class="text-center">
    <div class="d-flex justify-content-center">
      <button class="action-btns1 bg-transparent" data-toggle="modal" data-target="#show-link-{{$link->id}}">
        <i class="feather feather-eye text-primary"></i>
      </button>
      <button class="action-btns1 bg-transparent" data-toggle="modal" data-target="#edit-link-{{$link->id}}">
        <i class="feather feather-edit-2 text-warning"></i>
      </button>
      <button onclick="confirmDelete('delete-link-{{ $link->id }}')" class="action-btns1 bg-transparent ">
        <i class="feather feather-trash-2 text-danger"></i>
      </button>
      <form action="{{ route('admin.link.destroy', $link) }}" method="POST" id="delete-link-{{ $link->id }}" style="display: none">
        @csrf
        @method('DELETE')
      </form>
    </div>
  </td>
</tr>

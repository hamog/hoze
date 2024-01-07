<tr>
  <td class="text-center">{{ $counter }}</td>
  <td class="text-center">
     <img width="50" height="40" src="{{ $announcement->getImage() }}" style="border-radius: 50%"/>
  </td>
  <td class="text-center">{{ $announcement->user->name }}</td>
  <td class="text-center">{{ $announcement->id }}</td>
  <td class="text-center">{{ $announcement->limitedTitle() }}</td>
  <td class="text-center">
    @if ($announcement->published_at != null)
      <span>{{ $announcement->shamsiPublishedAt() }}</span>
    @else
      <span class="badge badge-danger">منتشر نشده</span>
    @endif
  </td>
  <td class="text-center">
    @if ($announcement->status == 1)
      <span class="badge badge-success">فعال</span>
    @else
      <span class="badge badge-danger">غیرفعال</span>
    @endif
  </td>
  <td class="text-center">
    <div class="d-flex justify-content-center">
      <a href="{{route("admin.announcement.show", $announcement)}}" class="action-btns1">
        <i class="feather feather-eye text-primary"></i>
      </a>
      <a href="{{route("admin.announcement.edit", $announcement)}}" class="action-btns1">
        <i class="feather feather-edit-2 text-warning"></i>
      </a>
      <button onclick="confirmDelete('delete-{{ $announcement->id }}')" class="action-btns1 bg-transparent ">
        <i class="feather feather-trash-2 text-danger"></i>
      </button>
      <form action="{{ route('admin.announcement.destroy', $announcement) }}" method="POST" id="delete-{{ $announcement->id }}" style="display: none">
        @csrf
        @method('DELETE')
      </form>
    </div>
  </td>
</tr>

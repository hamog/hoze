<tr>
  <td class="text-center">{{ $counter }}</td>
  <td class="text-center">
    {{-- <img width="50" height="40" src="{{ $news->getImage() }}"/> --}}
  </td>
  <td class="text-center">{{ $news->user->name }}</td>
  <td class="text-center">{{ $news->category->name }}</td>
  <td class="text-center">{{ $news->id }}</td>
  <td class="text-center">
    @if ($news->featured == 1)
      <span class="text-success font-weight-bold">هست</span>
    @else
      <span class="text-danger font-weight-bold">نیست</span>
    @endif
  </td>
  <td class="text-center">{{ \Illuminate\Support\Str::limit($news->title, 20) }}</td>
  <td class="text-center">{{ \Illuminate\Support\Str::limit($news->resource_url, 30) }}</td>
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
  <td class="text-center">
    <div class="d-flex justify-content-center">
      <a href="{{route("admin.news.show", $news)}}" class="action-btns1">
        <i class="feather feather-eye text-primary"></i>
      </a>
      <a href="{{route("admin.news.edit", $news)}}" class="action-btns1">
        <i class="feather feather-edit-2 text-warning"></i>
      </a>
      <button onclick="confirmDelete('delete-{{ $news->id }}')" class="action-btns1 bg-transparent ">
        <i class="feather feather-trash-2 text-danger"></i>
      </button>
      <form action="{{ route('admin.news.destroy', $news) }}" method="POST" id="delete-{{ $news->id }}" style="display: none">
        @csrf
        @method('DELETE')
      </form>
    </div>
  </td>
</tr>
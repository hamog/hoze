<tr>
  <td class="text-center">{{ $counter }}</td>
  <td class="text-center">
    {{-- <img width="50" height="40" src="{{ $article->getImage() }}"/> --}}
  </td>
  <td class="text-center">{{ $article->user->name }}</td>
  <td class="text-center">{{ $article->category->name }}</td>
  <td class="text-center">{{ $article->id }}</td>
  <td class="text-center">{{ Str::limit($article->title, 20) }}</td>
  <td class="text-center">{{ $article->shamsiCreatedAt() }}</td>
  <td class="text-center">
    @if ($article->status == 1)
      <span class="badge badge-success">فعال</span>
    @else
      <span class="badge badge-danger">غیرفعال</span>
    @endif
  </td>
  <td class="text-center">
    <div class="d-flex justify-content-center">
      <a href="{{route("admin.article.show", $article)}}" class="action-btns1">
        <i class="feather feather-eye text-primary"></i>
      </a>
      <a href="{{route("admin.article.edit", $article)}}" class="action-btns1">
        <i class="feather feather-edit-2 text-warning"></i>
      </a>
      <button onclick="confirmDelete('delete-{{ $article->id }}')" class="action-btns1 bg-transparent ">
        <i class="feather feather-trash-2 text-danger"></i>
      </button>
      <form action="{{ route('admin.article.destroy', $article) }}" method="POST" id="delete-{{ $article->id }}" style="display: none">
        @csrf
        @method('DELETE')
      </form>
    </div>
  </td>
</tr>
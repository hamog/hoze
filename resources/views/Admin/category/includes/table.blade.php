<tr>
  <td class="text-center">{{ $counter }}</td>
  <td class="text-center">{{ $category->name }}</td>
  <td class="text-center">{{ $category->id }}</td>
  <td class="text-center">{{ $category->slug }}</td>
  <td class="text-center">{{ $category->getType() }}</td>
  <td class="text-center">{{ $category->createdAt() }}</td>
  <td class="text-center">
    @if ($category->status == 1)
      <span class="badge badge-success">فعال</span>
    @else
      <span class="badge badge-danger">غیر فعال</span>
    @endif
  </td>
  <td class="text-center">
    <div class="d-flex justify-content-center">
      <button class="action-btns1 bg-transparent" data-toggle="modal" data-target="#edit-category-{{$category->id}}">
        <i class="feather feather-edit text-warning"></i>
      </button>
      <button onclick="confirmDelete('delete-{{ $category->id }}')" class="action-btns1 bg-transparent ">
        <i class="feather feather-trash-2 text-danger"></i>
      </button>
      <form action="{{ route('admin.category.destroy', $category) }}" method="POST" id="delete-{{ $category->id }}" style="display: none">
        @csrf
        @method('DELETE')
      </form>
    </div>
  </td>
</tr>
@section('scripts')
  <script>
    function confirmDelete(formId) {
      swal({
        title: 'آیا مطمئن هستید؟',
        text: 'بعد از حذف این آیتم دیگر قابل بازیابی نخواهد بود!',
        icon: 'warning',
        buttons: ["انصراف", "حذف کن"],
        dangerMode: true
      })
      .then((willDelete) => {
        if (willDelete) {
          document.getElementById(formId).submit();
          swal('آیتم با موفقیت حذف شد.', {
            icon: 'success',
          });
        }
      });
    }
  </script>
@endsection
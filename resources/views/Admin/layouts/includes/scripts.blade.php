<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>   --}}
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{asset('assets/plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>
<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/plugins/p-scrollbar/p-scrollbar.js')}}"></script>
<script src="{{asset('assets/plugins/p-scrollbar/p-scroll1.js')}}"></script>
<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>
<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{asset('assets/Sortable-master/Sortable.js')}}"></script>
<script src="{{asset('assets/js/index1.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/PersianDateTimePicker-bs4/src/jquery.md.bootstrap.datetimepicker.js')}}"></script>
<script src="{{asset('dist/select2.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

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

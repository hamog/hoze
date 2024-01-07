@if ($errors->any())
  <div class="col-12 alert alert-danger d-flex justify-content-between mt-5" role="alert">
    <div>
      @foreach ($errors->all() as $error)
      <p>{{$error}}</p>
      @endforeach
    </div>
    <button class="close text-dark align-self-start" data-dismiss="alert" aria-hidden="true">×</button>
  </div>
@endif
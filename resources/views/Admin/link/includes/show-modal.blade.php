@foreach ($links as $link)
  <div class="modal fade" id="show-link-{{$link->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document" style="min-width: 75vw;">
      <div class="modal-content w-50">
        <div class="modal-header">
          <p class="modal-title font-weight-bolder">پیوند شماره {{ $link->id }}</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row mb-1">
            <div class="col-12" style="height: 250px">
              <figure class="h-100 w-100">
                <img class="h-100 w-100 rounded" src="{{ Storage::url($link->image) }}">
              </figure>
            </div>
          </div>
          <div class="row mt-1">
            <div class="col-12 d-flex align-items-center mt-1">
              <span class="fs-20 ml-1 font-weight-bolder">تیتر :</span>
              <span class="fs-18 mr-1">{{ $link->title }}</span>
            </div>
            <div class="col-12 d-flex align-items-center mt-1">
              <span class="fs-20 ml-1 font-weight-bolder">روتیتر :</span>
              <span class="fs-18 mr-1">{{ $link->subtitle }}</span>
            </div>
            <div class="col-12 d-flex align-items-center mt-1">
              <span class="fs-20 ml-1 font-weight-bolder">لینک :</span>
              <a href="{{ $link->link }}" class="fs-18 mr-1">{{ $link->link }}</a>
            </div>
            <div class="col-12 d-flex align-items-center mt-1">
              <span class="fs-20 ml-1 font-weight-bolder">وضعیت :</span>
              @if($link->status)
                <span class="fs-18 mr-1 text-success">فعال</span>
              @else
                <span class="fs-18 mr-1 text-danger ">غیر فعال</span>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
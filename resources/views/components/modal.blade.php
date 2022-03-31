<!-- Modal -->
<div id="{{$id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{$judul_modal}}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <form action="{{$action}}" method="{{$method}}" enctype="multipart/form-data">
            @csrf
              {{$slot}}
          </form>
      </div>
    </div>

  </div>
</div>
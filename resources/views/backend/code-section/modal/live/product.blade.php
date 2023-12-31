<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card-body text-center">
                  <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                   <h4 class="h4 mb-0 mt-3">Warning</h4>
                   <input type="hidden" id="deleteing_id">
                   <p class="card-text">Are you sure you want to delete!</p>
                   </div>
                     <div class="row">
                       <div class="card-body text-center">
                         <a data-dismiss="modal" aria-hidden="true" class="btn btn-white me-2">cancel</a>
                      <a href="{{route('se.delete',$sr->id)}}" class="btn btn-danger">delete</a>
                 </div>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function () {
        $('#deletemodal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var deleteId = button.data('delete-id');
            $('#deleteing_id').val(deleteId);
        });
    });
</script>
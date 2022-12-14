<!-- Pop In Modal -->
<div class="modal fade" id="modal-popin-attach_category{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">

<form action="{{ route('organisation.attach_category', $id) }}" method="POST">
@csrf
@method('PATCH')
   <div class="modal-dialog modal-dialog-popin" role="document">
   <div class="modal-content">
       <div class="block block-rounded shadow-none mb-0">
       <div class="block-header block-header-default">
           <h3 class="block-title">Attach 1 category</h3>
           <div class="block-options">
           <button type="button" class="btn  -block-option" data-bs-dismiss="modal" aria-label="Close">
               <i class="fa fa-times"></i>
           </button>
           </div>
       </div>
       <div class="block-content fs-sm">
       <div class="block-content">
             <div class="row">
               <div class="col-lg-12">
                   <div class="mb-4">
                     <label class="form-label" for="example-select">Category name</label>
                     <select class="form-select" id="example-select" name="category_id">
                       @foreach($categories as $cat)
                           <option value="{{$cat->id}}">
                               {{$cat->name}}
                           </option>
                       @endforeach
                     </select>
                   </div>
               </div>
             </div>
           </div>

       </div>
       <div class="block-content block-content-full block-content-sm text-end border-top">
           <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
             Close
           </button>
           <input type="submit" class="btn btn-alt-primary" value="Add this category" >
       </div>
       </div>
   </div>
   </div>
</form>

</div>
<!-- END Pop In Modal →

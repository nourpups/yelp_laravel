<!-- Pop In Modal -->
<div class="modal fade" id="modal-popin-store" tabindex="-1" role="dialog" aria-labelledby="modal-popin"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-popin" role="document">
    <div class="modal-content">
      <div class="block block-rounded shadow-none mb-0">
        <div class="block-header block-header-default">
          <div class="block-options">
            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
              <i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <!-- Floating Labels -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Add Organisation</h3>
          </div>
          <div class="block-content">
            <form action="{{ route('organisation.store')}}" enctype="multipart/form-data" method="POST">
              @csrf
              <div class="row">
                <div class="col-lg-8 col-xl-12">
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" name="legal_name"
                      placeholder="Legal Name" >
                    <label class="form-label">Legal Name</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" name="description"
                      placeholder="Description">
                    <label class="form-label">Description</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" name="source"
                      placeholder="Source" >
                    <label class="form-label">Source</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" name="inn"
                      placeholder="Inn" >
                    <label class="form-label">Inn</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" name="location"
                      placeholder="Location">
                    <label class="form-label">Location</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" name="head_person_name"
                      placeholder="Head Person Name">
                    <label class="form-label">Head Person Name</label>
                  </div>
                  <!-- <div class="form-floating mb-4">
                    <input type="file" class="form-control" name="logo"
                      placeholder="Logo image" >
                    <label class="form-label">Logo Image</label>
                  </div> -->
                </div>
                <div class="form-floating">
                  <button type="submit" class="btn btn-alt-primary">
                    Done
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- END Floating Labels -->
        <div class="block-content block-content-full block-content-sm text-end border-top">
          <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Pop In Modal -->

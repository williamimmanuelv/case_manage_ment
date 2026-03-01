<?php include 'header.php'; ?>


<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Roll Creation</h5>
        <div>
          <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#creationModal">
            <i class="ti ti-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-nowrap datatable table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Roll Name</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Admin</td>
                <td>Enable</td>
                <td>
                  <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editModal">
                    <i class="ti ti-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-danger">
                    <i class="ti ti-trash"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- end card-body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>
<!-- end row -->


<!-- Creation Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="creationModalLabel">Roll Creation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Roll Name</label>
            <input type="text" class="form-control" placeholder="Roll Name" autocomplete="off">
          </div>
          <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select" id="example-select">
              <option>Enable</option>
              <option>Disable</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Save File</button>
      </div>
    </div>
  </div>
</div>

<!-- edit Modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="editModalLabel">Edit Roll Creation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Roll Name</label>
            <input type="text" class="form-control" placeholder="Roll Name" autocomplete="off">
          </div>
          <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select" id="example-select">
              <option>Enable</option>
              <option>Disable</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Save File</button>
      </div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>


<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Member Creation</h5>
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
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Role</th>
                <th>Password</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Test Name</td>
                <td>demo@gmail.com</td>
                <td>9876543210</td>
                <td>Admin</td>
                <td>pass123</td>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="creationModalLabel">Member Creation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Name" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Email" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Phone Number</label>
            <input type="number" class="form-control" placeholder="Phone Number" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Role</label>
            <select class="form-select" id="example-select">
              <option>Admin</option>
              <option>Staff</option>
              <option>Advocate</option>
            </select>
              </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="password" autocomplete="off">
            </select>
              </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Status</label>
            <select class="form-select" id="example-select">
              <option>Enable</option>
              <option>Disable</option>
            </select>
            </select>
              </div>
            </div>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="editModalLabel">Edit Member Creation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form>
          <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Name" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Email" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Phone Number</label>
            <input type="number" class="form-control" placeholder="Phone Number" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Role</label>
            <select class="form-select" id="example-select">
              <option>Admin</option>
              <option>Staff</option>
              <option>Advocate</option>
            </select>
              </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="password" autocomplete="off">
            </select>
              </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Status</label>
            <select class="form-select" id="example-select">
              <option>Enable</option>
              <option>Disable</option>
            </select>
            </select>
              </div>
            </div>
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
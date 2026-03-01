<?php include 'header.php'; ?>


<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Staff Report</h5>
      </div>
      <div class="card-body">
        <ul class="nav nav-tabs nav-solid-primary ">
          <li class="nav-item"><a class="nav-link active" href="#solid-tab1" data-bs-toggle="tab">Staff</a></li>
          <li class="nav-item"><a class="nav-link" href="#solid-tab2" data-bs-toggle="tab">Advocate</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane show active" id="solid-tab1">
            <div class="table-responsive">
              <table class="table table-nowrap datatable table-bordered" id="table1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Full Name</th>
                    <th>E-Mail</th>
                    <th>Phone Number</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Test Name</td>
                    <td>demo.gmail.com</td>
                    <td>9876543210</td>
                    <td><button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="ti ti-edit"></i>
                      </button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane" id="solid-tab2">
            <div class="table-responsive">
              <table class="table table-nowrap datatable table-bordered" id="table2">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Full Name</th>
                    <th>E-Mail</th>
                    <th>Phone Number</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Test Name</td>
                    <td>demo.gmail.com</td>
                    <td>9876543210</td>
                    <td><button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="ti ti-edit"></i>
                      </button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- end card-body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>
<!-- end row -->



<!-- edit Modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="editModalLabel">Edit Status</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="text-center text-danger">
            <p>* Are You Sure Hold the Status</p>
          </div>
          <div class="mb-3 d-flex align-items-center justify-content-center">
            <button class="btn btn-lg btn-success me-2">
              Live
            </button>
            <button class="btn btn-lg btn-danger me-2">
              Close
            </button>
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
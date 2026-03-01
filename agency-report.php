<?php include 'header.php'; ?>


<style>
  .choices__inner {
    scrollbar-width: none !important;
  }

  .card {
    box-shadow: none;
  }

  .custom-offcanvas {
    max-width: 900px;
    width: 100% !important;
    transition: transform 0.6s ease-in-out;
  }


  /* tab pagination  */
  .dataTables_length {
    padding-top: 0px !important;
    margin-bottom: 0px;
  }

  .dataTables_paginate {
    margin-top: 0% !important;
    padding-top: 0px !important;
  }

  /* search sec */

  .dataTables_filter {
    margin-bottom: 0px !important;
  }

  .dataTables_wrapper div {
    /* margin-bottom: 4px !important; */
  }
</style>



<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
  <div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Agency Report</a></li>
        <li class="breadcrumb-item active">
          Financial Year
        </li>
      </ol>
    </nav>
  </div>

</div> -->


<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Agency Report</h5>
        <div>

          <a href="agency-creation.php" class="btn btn-primary btn-sm">
            <i class="ti ti-plus me-1"></i> Add
          </a>


        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-nowrap datatable table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Agency Photo</th>
                <th>Agency Name</th>
                <th>Case Type</th>
                <th>Sub Case Type</th>
                <th>Agency Email ID</th>
                <th>Vendor Code</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>
                  <div class="d-flex align-items-center justify-content-center">
                    <span class="avatar avatar-rounded">
                      <img src="assets/img/profiles/avatar-01.jpg" alt="img">
                    </span>
                  </div>
                </td>
                <td>Salman</td>
                <td>Sarfaesi Case</td>
                <td>Sec 14</td>
                <td>demo@gmail.com</td>
                <td>Ven0001</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- end row -->


<!-- Creation Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="creationModalLabel">Country Creation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Country Name</label>
            <input type="text" class="form-control" placeholder="Country" autocomplete="off">
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
        <h5 class="modal-title" id="editModalLabel">Edit Country Creation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Country Name</label>
            <input type="text" class="form-control" placeholder="Country" autocomplete="off">
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
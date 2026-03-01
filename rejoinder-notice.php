<?php include 'header.php'; ?>


<style>
  .nav-tabs {
    border-bottom: 0px !important;
  }

  .choices__inner {
    scrollbar-width: none !important;
  }

  .card {
    box-shadow: none;
  }

  .custom-offcanvas {
    max-width: 600px;
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
        <li class="breadcrumb-item"><a href="javascript:void(0);">Rejoinder Notice</a></li>
        <li class="breadcrumb-item active">
          Financial Year
        </li>
      </ol>
    </nav>
  </div>

</div> -->

<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Rejoinder Notice</h5>
        <div>
          <a class="btn btn-primary btn-sm" href="rejoinder-notice-creation.php">
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
                <th>Notice Type</th>
                <th>Loan No</th>
                <th>Customer Name</th>

                <th>Reply Description</th>
                <th>Speed Post Date</th>
                <th>Speed Post Number</th>
                <th>Description</th>
                <th>Attachment</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Conciliation Notice</td>
                <td>LNAB5A57</td>
                <td>Ramesh Kumar</td>

                <td>Reply Description 1</td>
                <td>2026-02-10</td>
                <td>SP457896321IN</td>
                <td>Borrower submitted objection regarding outstanding amount.</td>

                <td>
                  <a href="#" class="btn btn-sm btn-outline-primary">
                    <i class="ti ti-paperclip"></i>
                  </a>
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
        <h5 class="modal-title" id="creationModalLabel">Rejoinder Notice Creation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">

        <div class="row">
          <div class="col-md-4">
            <div class="mb-3">
              <label class="form-label">Legal Type</label>
              <input type="text" class="form-control" value="Notice">
            </div>
          </div>
          <div class="col-md-4 mb-3 sub-case">
            <label class="form-label">Loan No</label>
            <select class="form-select" id="case-type">
              <option value="">Select Loan No</option>
              <option value="LNAB5A57">LNAB5A57</option>
              <option value="LNAB5A58">LNAB5A58</option>
            </select>
          </div>
          <div class="col-md-4 my-auto">
            <button class="btn btn-sm btn-primary me-2">
              <i class="ti ti-search"></i> Search
            </button>
          </div>
        </div>

        <hr>

        <div class="row ">
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Customer Name</label>
              <input type="text" class="form-control" value="Customer Name">
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Reply Description</label>
              <select class="form-select" id="case-type">
                <option value="">Select Reply Description</option>
                <option value="Reply Description 1">Reply Description 1</option>
                <option value="Reply Description 2">Reply Description 2</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Speed Post Date</label>
              <input class="form-control" type="date">
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Speed Post Number</label>
              <input class="form-control" type="text" placeholder="Speed Post No">
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Description</label>
              <textarea name="" class="form-control" placeholder="Description" id=""></textarea>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Attachment</label>
              <input class="form-control" type="file" multiple="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary"><i class="ti ti-device-floppy me-1"></i> Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>




<?php include 'footer.php'; ?>
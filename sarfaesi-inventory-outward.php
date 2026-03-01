<?php include 'header.php'; ?>



<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Sarfaesi Inventory Outward Report</h5>
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
                <th>Age</th>
                <th>Type</th>
                <th>Loan Number</th>
                <th>Customer Name</th>
                <th>Remarks</th>
                <th>Whom To</th>
                <th>Deliver Date</th>
                <th>Advocate Name</th>
                <th>Vendor Code</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>10 Days</td>
                <td>Notice</td>
                <td>LN-560101</td>
                <td>Ramesh Kumar</td>
                <td>First legal notice issued</td>
                <td>Customer</td>
                <td>05-03-2025</td>
                <td>Adv. Suresh</td>
                <td>VND-2001</td>
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
        <h5 class="modal-title" id="creationModalLabel">Sarfaesi Inventory Outward Creation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">

        <div class="row g-4">
          <div class="col-md-4 ">
            <label class="form-label">Loan No</label>
            <select class="form-select">
              <option value="">Select Loan No</option>
              <option value="LNAB5A57">LNAB5A57</option>
              <option value="LNAB5A58">LNAB5A58</option>
            </select>
          </div>
          <div class="col-md-4 mt-5">
            <button class="btn btn-sm btn-primary me-2">
              <i class="ti ti-search"></i> Search
            </button>
          </div>
        </div>

        <hr>

        <div class="row g-4 ">
          <div class="col-md-6">
            <label for="input-label" class="form-label">Customer ID</label>
            <input type="text" class="form-control" value="Customer Id">
          </div>
          <div class="col-md-6">
            <label for="input-label" class="form-label">Customer Name</label>
            <input type="text" class="form-control" value="Customer Name">
          </div>
          <div class="col-md-6">
            <label for="input-label" class="form-label">Advocate Name</label>
            <input type="text" class="form-control" value="Advocate Name">
          </div>
          <div class="col-md-6">
            <label for="input-label" class="form-label">Vendor Code</label>
            <input type="text" class="form-control" value="Vendor Code">
          </div>
          <div class="col-md-6">
            <label for="input-label" class="form-label">Particulars</label>
            <input type="text" class="form-control" value="Particulars">
          </div>
          <div class="col-md-6">
            <label for="input-label" class="form-label">Handover Date</label>
            <input type="date" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="input-label" class="form-label">Whom to</label>
            <input type="text" class="form-control" value="Enter Delivered to">
          </div>
          <div class="col-md-6">
            <label for="input-label" class="form-label">Attachment</label>
            <input type="file" class="form-control">
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Create</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>




<?php include 'footer.php'; ?>
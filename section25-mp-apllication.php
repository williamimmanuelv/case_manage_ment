<?php include 'header.php'; ?>



<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">MP Application</h5>
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
                <th>Create Date</th>
                <th>Loan Number</th>
                <th>Customer Id</th>
                <th>Application Number</th>
                <th>Filing Date</th>
                <th>Nature Of Application</th>
                <th>Stage Of Application</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>07-01-2026</td>
                <td>LN45455C</td>
                <td>CUST39F3C7</td>
                <td>APP/CRL/0456/2024</td>
                <td>07-01-2026</td>
                <td>Bail Application</td>
                <td>Pending for Hearing</td>
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
        <h5 class="modal-title" id="creationModalLabel">MP Application Creation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">

        <div class="row g-4">
          <div class="col-md-4">
              <label class="form-label">Legal Type</label>
              <input type="text" class="form-control" value="Case">
          </div>
          <div class="col-md-4">
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

        <div class="row g-4 mt-2">
          <div class="col-md-6">
              <label for="input-label" class="form-label">Customer ID</label>
              <input type="text" class="form-control" value="Customer Id">
          </div>
          <div class="col-md-6">
              <label for="input-label" class="form-label">Customer Name</label>
              <input type="text" class="form-control" value="Customer Name">
          </div>
          <div class="col-md-6">
              <label for="input-label" class="form-label">Case Number</label>
              <input type="text" class="form-control" value="Case No">
          </div>
          <div class="col-md-6">
              <label for="input-label" class="form-label">Court Name</label>
              <input type="text" class="form-control"  value="Court Name">
          </div>
        </div>

        <hr>

        <div class="row g-4">
          <div class="col-md-6">
              <label for="input-label" class="form-label">Application Number</label>
              <input type="text" class="form-control" value="Application Number">
          </div>
          <div class="col-md-6">
              <label for="input-label" class="form-label">Filing Date</label>
              <input type="date" class="form-control">
          </div>
          <div class="col-md-6">
              <label for="input-label" class="form-label">Nature Of Application</label>
              <input type="text" class="form-control" value="Nature Of Application">
          </div>
          <div class="col-md-6">
              <label for="input-label" class="form-label">Stage Of Application</label>
              <input type="text" class="form-control"  value="Stage Of Application">
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
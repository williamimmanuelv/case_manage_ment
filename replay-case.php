<?php include 'header.php'; ?>



<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Reply Notice</h5>
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
                <th>Case Type</th>
                <th>SubCase Type</th>
                <th>Loan Number</th>
                <th>Customer Name</th>
                <th>Description</th>
                <th>Attachment</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>By Case</td>
                <td>Section 138 of NI Act</td>
                <td>Loa001</td>
                <td>Prakash Nair</td>
                <td>The reply has been duly submitted and acknowledged</td>
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
        <h5 class="modal-title" id="creationModalLabel">Reply Notice</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">

        <div class="row">
          <div class="col-md-4">
            <div class="mb-3">
              <label class="form-label">Legal Type</label>
              <select class="form-select" id="example-select">
              <option value="">Select</option>
              <option value="normal-notice">Normal Notice</option>
              <option value="conciliation-notice">Conciliation Notice</option>
              <option value="lok-adalat-notice">Lok Adalat Notice</option>
              <option value="mediation-notice">Mediation Notice</option>
            </select>
            </div>
          </div>
          <div class="col-md-4 mb-3 sub-case" >
            <label class="form-label">Loan No</label>
            <select class="form-select" id="case-type">
                <option value="">Select Loan No</option>
                <option value="LNAB5A57">LNAB5A57</option>
                <option value="LNAB5A58">LNAB5A58</option>
              </select>
          </div>
          <div class="text-end">
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
              <label for="input-label" class="form-label">Description</label>
              <textarea name="" class="form-control" placeholder="Description" id=""></textarea>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Attachment</label>
              <input class="form-control" type="file" id="formFileMultiple" multiple="">
            </div>
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
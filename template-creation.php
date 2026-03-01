<?php include 'header.php'; ?>



<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Template Creation</h5>
        <div class="text-end">
          <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#creationModal">
            <i class="ti ti-plus"></i>
          </button>
        </div>
      </div>

      <div class="card-body">

        

        <!-- Report List -->
        <div class="table-responsive ">
          <table class="table table-nowrap datatable table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Date</th>
                <th>Document Type</th>
                <th>Template Type</th>
                <th>Template Name</th>

                <th>Attachment</th>
                <th>Filename</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>22-10-2025</td>
                <td>Claim Petition</td>
                <td>Temp 1</td>
                <td>Yes</td>

                <td>Yes</td>
                <td><a href="#">Template.pdf</a></td>
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

<!-- Upload Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="creationModalLabel">Template Upload</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Attachment Type</label>
                <select class="form-select" id="example-select">
                  <option>Manual</option>
                  <option>Automatic</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Document Type</label>
                <select class="form-select" id="example-select">
                  <option>Claim Petition</option>
                  <option>Proof Notice</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Template Name</label>
                <input type="text" class="form-control" placeholder="Template Name" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Template Type</label>
                <select class="form-select" id="example-select">
                  <option>Temp 1</option>
                  <option>Temp 2</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Attachment</label>
                <select class="form-select" id="example-select">
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Upload Notice</label>
                <input type="file" class="form-control">
              </div>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success"><i class="ti ti-upload me-1"></i> Upload</button>
      </div>
    </div>
  </div>
</div>




<?php include 'footer.php'; ?>
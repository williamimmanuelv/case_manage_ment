<?php include 'header.php'; ?>


<div class="card border-0 rounded-0">

  <div class="card-header d-flex align-items-center justify-content-between gap-2 flex-wrap">
    <h5 class="card-title">Pending Allocation</h5>
  </div>
  <div class="card-body">
    <div class="row mb-4">
      <div class="col-lg-4 d-flex justify-content-center">
        <div class="red me-2"></div> Priority High
      </div>
      <div class="col-lg-4 d-flex justify-content-center">
        <div class="yellow me-2"></div> Priority Medium
      </div>
      <div class="col-lg-4 d-flex justify-content-center">
        <div class="green me-2"></div> Priority Low
      </div>
    </div>
    <!-- Report List -->
    <div class="table-responsive">
      <table class="table table-nowrap datatable table-bordered">
        <thead class="table-light">
          <tr>
            <th>S.No</th>
            <th>Priority</th>
            <th>Date</th>
            <th>Allocation ID</th>
            <th>Title</th>
            <th>Legal Type</th>
            <th>Case</th>
            <th>Sub Case</th>
            <th>Advocate Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>
              <div class="red"></div>
            </td>
            <td>28-10-2025</td>
            <td>
              <a href="pending-Allocation-view.php" class="btn btn-primary btn-sm">
                TID002
              </a>
            </td>
            <td>Legal Notice</td>
            <td>Case</td>
            <td>Civil Case</td>
            <td>Summary Suit</td>
            <td>Salman</td>
            <td>
              <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                Open
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /Contact List -->
  </div>
</div>

<!-- Close Case -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="editModalLabel">
          Close Case Allocation
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row g-3">
            <div class="col-md-12">
              <label class="form-label">Close Reason :</label>
              <textarea class="form-control" id="txt_message" rows="4" placeholder="Reason for Close..."></textarea>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-success">
          Save
        </button>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>


<div class="card border-0 rounded-0">

  <div class="card-header d-flex align-items-center justify-content-between gap-2 flex-wrap">
    <h5 class="card-title">Waiting for Approval</h5>
  </div>
  <div class="card-body">
    <!-- Report List -->
    <div class="table-responsive">
      <table class="table table-nowrap datatable table-bordered">
        <thead class="table-light">
          <tr>
            <th>S.No</th>
            <th>Type</th>
            <th>ID</th>
            <th>Legal Type</th>
            <th>Title</th>
            <th>No. of Case</th>
            <th>Cost/Notice</th>
            <th>Priority</th>
            <th>No. of Days</th>
            <th>Allocation Date</th>
            <th>Closing Date</th>
            <th>Fee Type</th>

            <th>Notice Type</th>
            <th>Mode</th>
            <th>Process Type</th>

            <th>Case Type</th>
            <th>Sub Case</th>
            <th>Product</th>
            <th>Advocate</th>
            <th>Act</th>
            <th>Act Sub Type</th>

            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Advocate</td>
            <td>AL-001</td>
            <td><span class="badge bg-success">Notice</span></td>
            <td>Recovery Notice Batch</td>
            <td>25</td>
            <td>₹ 500</td>
            <td><span class="badge bg-danger">High</span></td>
            <td>15</td>
            <td>05-02-2026</td>
            <td>20-02-2026</td>
            <td>Standard</td>

            <td>Normal Notice</td>
            <td>E-mail, SMS</td>
            <td>Only Notice</td>

            <td>Civil Case</td>
            <td>Civil Suit</td>
            <td>Car</td>
            <td>Salman</td>
            <td>Act 2002</td>
            <td>Act 2002/3</td>

            <td><span class="badge bg-warning">In Progress</span></td>

            <td>
              <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editModal">
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
    <!-- /Contact List -->
  </div>
</div>

<!-- Close Case -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="editModalLabel">
          Waiting for Approval
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row g-3">
            <div class="col-md-12">
              <label class="form-label">Status</label>
              <select class="form-select">
                <option value="Approve">Approve</option>
                <option value="Rejected">Rejected</option>
              </select>
            </div>
            <div class="col-md-12">
              <label class="form-label">Remarks </label>
              <textarea class="form-control" id="txt_message" rows="3" placeholder="Remarks..."></textarea>
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
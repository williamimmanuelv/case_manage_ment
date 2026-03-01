<?php include 'header.php'; ?>


<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Sarfaesi Notice To Case Convert</h5>
      </div>
      <div class="card-body">
        <div class="row g-4 align-items-center">
          <div class="col-md-6 col-lg-4">
            <label for="cnr" class="form-label">Notice Type</label>
            <select class="form-select">
              <option value="Pre Sarfaesi">Pre Sarfaesi</option>
              <option value="Sec 13(2)">Sec 13(2)</option>
              <option value="Sec 13(3)">Sec 13(3)</option>
              <option value="Sec 13(3A)">Sec 13(3A)</option>
              <option value="Sec 13(14)">Sec 13(4)</option>
            </select>
          </div>
          <div class="col-md-6 col-lg-4">
            <label for="cnr" class="form-label">Allocation No</label>
            <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
              <option value="">Select Allocation No</option>
              <option value="Allot001">Allot001</option>
              <option value="Allot002">Allot002</option>
              <option value="Allot003">Allot003</option>
            </select>
          </div>

          <div class="col-md-6 col-lg-4">
            <label class="form-label">Customer ID</label>
            <input type="text" class="form-control" placeholder="Customer ID">
          </div>

          <div class="col-md-6 col-lg-4">
            <label class="form-label">Loan Number</label>
            <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
              <option value="">Select Loan No</option>
              <option value="Loan001">Loan001</option>
              <option value="Loan002">Loan002</option>
              <option value="Loan003">Loan003</option>
            </select>
          </div>

          <div class="col-md-6 mt-5 col-lg-4">
            <button class="btn btn-sm btn-primary me-2">
              <i class="ti ti-search"></i> Search
            </button>
          </div>


        </div>
        <hr>
        <div class="table-responsive">
          <table class="table table-nowrap datatable table-bordered">
            <thead>
              <tr>
                <th><input type="checkbox" id="chk_all"></th>
                <th>S.No</th>
                <th>Notice Id</th>
                <th>Allot Number</th>
                <th>Case Type</th>
                <th>Sub Case Type</th>
                <th>Loan Number 1</th>
                <th>Customer Id</th>
                <th>Customer Name</th>
                <th>Product</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <input type="checkbox">
                </td>
                <td>1</td>
                <td>NTC-1001</td>
                <td>ALL-2025-001</td>
                <td>By Case</td>
                <td>Sarfaesi Case</td>
                <td>LN-908761</td>
                <td>CUST-001</td>
                <td>Ramesh Kumar</td>
                <td>Home Loan</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row align-items-center mt-3">

          <div class="col-md-6 col-lg-4">
            <label for="input-label" class="form-label">Remarks</label>
            <textarea name="" class="form-control" id=""></textarea>
          </div>
          <div class="col-md-6 mt-4 col-lg-4">
            <button class="btn btn-sm btn-primary me-2">
              Convert Case
            </button>
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


<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-center text-white">
        <h5 class="modal-title" id="editModalLabel">Bulk Upload</h5>
        <div class="text-dark ms-auto">Download Sample <a href="#" class="btn btn-primary"> <i class="ti ti-download"
              style="font-size: 18px;"></i> </a></div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-12">
              <label class="form-label">Batch Name</label>
              <select class="form-select">
                <option>Batch</option>
                <option>Batch 1</option>
                <option>Batch 2</option>
                <option>Batch 3</option>
              </select>
            </div>
            <div class="col-md-12">
              <label class="form-label">Upload File</label>
              <input type="file" class="form-control">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>

<script>
  document.querySelectorAll(".dropdown-check-list").forEach(function (list) {
    var anchor = list.querySelector(".anchor");
    anchor.addEventListener("click", function () {
      list.classList.toggle("visible");
    });
  });
</script>


<?php include 'footer.php'; ?>
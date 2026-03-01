<?php include 'header.php'; ?>

<style>
  /* Hide columns beyond the 5th by default */
  /* .extra-column {
      display: none;
    } */
</style>

<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Hearing Overall Report</h5>
      </div>
      <div class="card-body">
        <div class="tab-content">
          <!-- Single -->
          <div id="otpTab" class="tab-pane active">
            <div class="row align-items-center mb-3 g-3">

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
                <label class="form-label">Loan Number</label>
                <input type="text" class="form-control" placeholder="Loan No" />
              </div>

              <div class="col-md-6 col-lg-4 mt-3">
                <div class=" mt-3">
                  <button class="btn btn-sm btn-primary me-2">
                    <i class="ti ti-search"></i> Search
                  </button>

                </div>
              </div>

            </div>

            <hr>

            <div class="table-responsive">
              <table class="table table-nowrap datatable table-bordered">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Case Type</th>
                    <th>Case Sub Type</th>
                    <th>Loan No</th>
                    <th>Customer Name</th>
                    <th>Product</th>
                    <th>Case No</th>
                    <th>Court Name</th>
                    <th>Last Hearing Date</th>
                    <th>Last Hearing Status</th>
                    <th>Next Hearing Date</th>
                    <th>Next Hearing Status</th>
                    <th>Remarks</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>EP Cases</td>
                    <td>Arbitration Award-EP</td>
                    <td>LNAB5A57</td>
                    <td>Ramesh Kumar</td>
                    <td>Car Loan</td>
                    <td>CC/458/2026</td>
                    <td>Egmore Court</td>
                    <td>05-02-2026</td>
                    <td>Arguments</td>
                    <td>28-02-2026</td>
                    <td>For Evidence</td>
                    <td>Opposite party requested adjournment</td>
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
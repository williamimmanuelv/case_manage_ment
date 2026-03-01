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
        <h5 class="card-title">Notice Report</h5>
      </div>
      <div class="card-body">
        <div class="row align-items-center ">

          <div class="col-md-6 col-lg-4">
            <div class="mb-0">
              <label class="form-label">Select Filter</label>
              <div id="list1" class="dropdown-check-list" tabindex="100">
                <span class="anchor form-control">Select Filter</span>
                <ul class="items">
                  <li><input type="checkbox" class="form-check-input me-2" /> Loan Number</li>
                  <li><input type="checkbox" class="form-check-input me-2" /> AAN Number</li>
                  <li><input type="checkbox" class="form-check-input me-2" /> Zone</li>
                  <li><input type="checkbox" class="form-check-input me-2" /> Product</li>
                  <li><input type="checkbox" class="form-check-input me-2" /> Customer Name</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-4 col-lg-4">
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
                <th>S.No</th>
                <th>Age</th>
                <th>Case Created Date</th>
                <th>Batch No</th>
                <th>Loan No</th>
                <th>Bank</th>
                <th>Court</th>
                <th>Products</th>
                <th>Section</th>
                <th>Total</th>
                <th>Customer Name</th>
                <th>Case No</th>
                <th>Amount Finaced</th>
                <th>SOA Date</th>
                <th>FC Amount</th>
                <th>Agreement Date</th>
                <th>Allocation Date</th>
                <th>EMI Start Date</th>
                <th>EMI End Date</th>
                <th>EMI Amount</th>
                <th>RIO</th>
                <th>No of Instalments</th>
                <th>EMI Overdue</th>
                <th>Branch</th>
                <th>Agreement Clause</th>
                <th>Make</th>
                <th>Registration No</th>
                <th>Engine No</th>
                <th>Chasis No</th>
                <th>Outstanding Amount</th>
                <th>CBC</th>
                <th>UPP</th>
                <th>Queries</th>
                <th>Queries Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>20 days</td>
                <td>22-10-2025</td>
                <td>00984</td>
                <td>000/898</td>
                <td>Axis</td>
                <td>Court 1</td>
                <td>Car Loan</td>
                <td>Section 128</td>
                <td>Total</td>
                <td>Customer 1</td>
                <td> 001</td>
                <td>10000</td>
                <td>22-10-2025</td>
                <td>10000</td>
                <td>22-10-2025</td>
                <td>22-10-2025</td>
                <td>22-10-2025</td>
                <td>22-10-2025</td>
                <td>10000</td>
                <td>Post</td>
                <td>24 Months</td>
                <td>10000</td>
                <td>Chennai</td>
                <td>Aggrement</td>
                <td>Honda</td>
                <td>TN 01 AA 0001</td>
                <td>Eng0001</td>
                <td>Cha0001</td>
                <td>10000</td>
                <td>CBS 1</td>
                <td>UPP 1</td>
                <td>Queries 1</td>
                <td>22-10-2025</td>
                <td>Convert Case</td>
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
<?php include 'header.php'; ?>

<style>
  .btn-edit {
    border: 1px solid rgb(204, 167, 92);
    color: rgb(204, 167, 92);
    background-color: white;
  }

  .btn-edit:hover {
    border: 1px solid rgb(204, 167, 92) !important;
    color: rgb(204, 167, 92);
    background-color: white;
  }

  .btn-cancel:hover {
    background-color: white;
    color: red;
  }
</style>

<div class="card border-0 rounded-0">

  <div class="row">
    <div class="col-xl-12">
      <div class="">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title">Arbitration Award Notice Report</h5>
          <div>
            <a href="arbitration-award-notice-creation.php" class="btn btn-primary btn-sm">
              <i class="ti ti-plus me-1"></i> Add
            </a>
          </div>
        </div>
        <div class="card-body">

          <ul class="nav nav-tabs nav-justified nav-bordered nav-bordered-success mb-3" id="caseTabs" role="tablist">

            <li class="nav-item" role="tab">
              <a class="nav-link active d-flex align-items-center"
                data-bs-toggle="tab" href="#pending">
                <i class="ti ti-sort-descending-2 me-2"></i> Notice Report (2)
              </a>
            </li>

            <li class="nav-item" role="tab">
              <a class="nav-link d-flex align-items-center"
                data-bs-toggle="tab" href="#Draft">
                <i class="ti ti-folder-exclamation me-2"></i> Draft (3)
              </a>
            </li>

            <!-- <li class="nav-item" role="tab">
              <a class="nav-link d-flex align-items-center"
                data-bs-toggle="tab" href="#Success">
                <i class="ti ti-folder-exclamation me-2"></i> Success (5)
              </a>
            </li> -->

            <li class="nav-item" role="tab">
              <a class="nav-link d-flex align-items-center"
                data-bs-toggle="tab" href="#Close">
                <i class="ti ti-folder-exclamation me-2"></i> Close (5)
              </a>
            </li>

          </ul>


          <div class="tab-content mt-3">

            <div class="tab-pane fade show active" id="pending">
              <div class="table-responsive">
                <table class="table table-nowrap datatable table-bordered">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Date</th>
                      <th>Age</th>
                      <th>Allocation No</th>
                      <th>Case Type</th>
                      <th>Sub Case Type</th>
                      <th>Customer ID</th>
                      <th>Loan No</th>
                      <th>Product</th>
                      <th>Customer Name</th>
                      <th>FC Amount</th>
                      <th>Award Amount</th>
                      <th>Award Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>17-02-2026</td>
                      <td>1 Day</td>
                      <td>AID1001</td>
                      <td>EP Cases</td>
                      <td>Arbitration Award</td>
                      <td> CUS 1001</td>
                      <td> 1234/56</td>
                      <td> Car Loan</td>
                      <td> Ram</td>
                      <td> 10000</td>
                      <td> 20000</td>
                      <td>17-02-2026</td>

                      <td>
                        <button class="btn btn-sm btn-edit">
                          <i class="ti ti-edit"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tab-pane fade " id="Draft">
              <div class="table-responsive">
                <table class="table table-nowrap datatable table-bordered">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Date</th>
                      <th>Age</th>
                      <th>Allocation No</th>
                      <th>Case Type</th>
                      <th>Sub Case Type</th>
                      <th>Customer ID</th>
                      <th>Loan No</th>
                      <th>Product</th>
                      <th>Customer Name</th>
                      <th>FC Amount</th>


                      <th>Award Amount</th>
                      <th>Award Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>17-02-2026</td>
                      <td>1 Day</td>
                      <td>AID1001</td>
                      <td>EP Cases</td>
                      <td>Arbitration Award</td>
                      <td> CUS 1001</td>
                      <td> </td>
                      <td> Car Loan</td>
                      <td> Ram</td>
                      <td> 10000</td>
                      <td> 20000</td>
                      <td>17-02-2026</td>

                      <td>
                        <button class="btn btn-sm btn-edit">
                          <i class="ti ti-edit"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tab-pane fade" id="Success">
              <div class="table-responsive">
                <table class="table table-nowrap datatable table-bordered">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Allocation No</th>
                      <th>Case Type</th>
                      <th>Sub Case Type</th>

                      <th>Act</th>
                      <th>Zone</th>
                      <th>State</th>
                      <th>District</th>
                      <th>Branch</th>

                      <th>Total Loan Amount</th>
                      <th>Principal Outstanding</th>
                      <th>EMI Overdue</th>
                      <th>FC Amount</th>

                      <th>Arbitrator</th>
                      <th>Award Amount</th>
                      <th>Award Date</th>

                      <th>Status</th>
                      <th>Last Updated</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Allot001</td>
                      <td>Civil Case</td>
                      <td>Civil Suit</td>

                      <td>Arbitration Act</td>
                      <td>South</td>
                      <td>Tamil Nadu</td>
                      <td>Chennai</td>
                      <td>T Nagar</td>

                      <td>₹ 6,00,000</td>
                      <td>₹ 4,20,000</td>
                      <td>₹ 75,000</td>
                      <td>₹ 5,50,000</td>

                      <td>R. Kumar</td>
                      <td>₹ 5,80,000</td>
                      <td>2026-01-22</td>

                      <td>
                        <span class="badge bg-success">Success</span>
                      </td>
                      <td>02-Feb-2026</td>

                      <td>
                        <button class="btn btn-sm btn-primary">
                          <i class="ti ti-eye"></i>
                        </button>
                        <button class="btn btn-sm btn-success">
                          <i class="ti ti-edit"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tab-pane fade" id="Close">
              <div class="table-responsive">
                <table class="table table-nowrap datatable table-bordered">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Date</th>
                      <th>Age</th>
                      <th>Allocation No</th>
                      <th>Case Type</th>
                      <th>Sub Case Type</th>
                      <th>Customer ID</th>
                      <th>Loan No</th>
                      <th>Product</th>
                      <th>Customer Name</th>
                      <th>FC Amount</th>
                      <th>Award Amount</th>
                      <th>Award Date</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>10-02-2026</td>
                      <td>100 Days</td>
                      <td>AID1001</td>
                      <td>EP Cases</td>
                      <td>Arbitration Award</td>
                      <td> CUS 1001</td>
                      <td> 1234/56</td>
                      <td> Car Loan</td>
                      <td> Ram</td>
                      <td> 10000</td>
                      <td> 20000</td>
                      <td>17-02-2026</td>
                      <td>Above 90 days</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>



<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>

<!-- 
<div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
  <div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Litigation - By Case</a></li>
        <li class="breadcrumb-item active">
          Arbitration Section 21 Notice Report
        </li>
      </ol>
    </nav>
  </div>

</div> -->
<div class="card border-0 rounded-0">

  <div class="row">
    <div class="col-xl-12">
      <div class="">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title">Arbitration Section 21 Notice Report</h5>
          <div>
            <a href="arbitration-notice-creation.php" class="btn btn-primary btn-sm">
              <i class="ti ti-plus me-2"></i> Add
            </a>
          </div>
        </div>
        <div class="card-body">

          <ul class="nav nav-tabs nav-justified nav-bordered nav-bordered-success mb-3">

            <li class="nav-item">
              <a class=" nav-link active" data-bs-toggle="tab" aria-expanded="false" href="#pending">
                Notice (2)
              </a>
            </li>

            <li class="nav-item" role="tab">
              <a class=" nav-link" data-bs-toggle="tab" aria-expanded="false" href="#Draft">
                Draft (3)
              </a>
            </li>


            <li class="nav-item" role="tab">
              <a class="nav-link" data-bs-toggle="tab" aria-expanded="false" href="#Close">
                Close (5)
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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>17-02-2026</td>
                      <td>32 Days</td>
                      <td>AL-00231</td>
                      <td>By Case</td>
                      <td>Sec 21 of Arbitration Act</td>
                      <td>CUS1025</td>
                      <td>LNAB5A57</td>
                      <td>Car Loan</td>
                      <td>Ramesh Kumar</td>
                      <td>
                        <button class="btn btn-sm btn-primary "
                          style="color: #cda85d !important; background-color: transparent;" data-bs-toggle="offcanvas"
                          data-bs-target="#editProduct">
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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>17-02-2026</td>
                      <td>32 Days</td>
                      <td>AL-00231</td>
                      <td>By Case</td>
                      <td>Sec 21 of Arbitration Act</td>
                      <td>CUS1025</td>
                      <td></td>
                      <td>Car Loan</td>
                      <td>Ramesh Kumar</td>
                      <td>
                        <button class="btn btn-sm btn-primary "
                          style="color: #cda85d !important; background-color: transparent;" data-bs-toggle="offcanvas"
                          data-bs-target="#editProduct">
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
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>10-12-2025</td>
                      <td>100 Days</td>
                      <td>AL-00231</td>
                      <td>By Case</td>
                      <td>Sec 21 of Arbitration Act</td>
                      <td>CUS1025</td>
                      <td>LNAB5A57</td>
                      <td>Car Loan</td>
                      <td>Ramesh Kumar</td>
                      <td>Above 90 Days</td>
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
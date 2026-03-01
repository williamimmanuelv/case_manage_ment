<?php include 'header.php'; ?>

<style>
  .nav-tabs {
    border-bottom: 0px !important;
  }

  .nav-tabs .nav-link {
    color: #022b50;
    font-weight: 500;
    border-radius: 5px;
  }

  .nav-tabs .nav-link.active {
    background-color: #022b50 !important;
    color: #fff !important;
  }

  .nav-tabs .nav-link:hover {
    background-color: #022b50;
    color: #fff;
  }
</style>

<div class="card border-0 rounded-0">

  <div class="row">
    <div class="col-xl-12">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title">Sarfaesi Case Details</h5>
          <!-- <div>
            <a href="sarfaesi-case-creation.php" class="btn btn-primary"> <i class="ti ti-plus"></i> </a>
          </div> -->
        </div>
        <div class="card-body">

          <ul class="nav nav-tabs mb-3" id="caseTabs" role="tablist">

            <!-- <li class="nav-item" role="tab">
              <a class="nav-link d-flex align-items-center"
                href="section138-case-creation.php">
                <i class="ti ti-plus me-2"></i> New
              </a>
            </li> -->

            <li class="nav-item" role="tab">
              <a class="nav-link active d-flex align-items-center"
                data-bs-toggle="tab" href="#pending">
                <i class="ti ti-sort-descending-2 me-2"></i> Pending (2)
              </a>
            </li>

            <li class="nav-item" role="tab">
              <a class="nav-link d-flex align-items-center"
                data-bs-toggle="tab" href="#old">
                <i class="ti ti-folder-exclamation me-2"></i> Live (3)
              </a>
            </li>

            <li class="nav-item" role="tab">
              <a class="nav-link d-flex align-items-center"
                data-bs-toggle="tab" href="#Contest">
                <i class="ti ti-folder-exclamation me-2"></i> Contest (3)
              </a>
            </li>

            <li class="nav-item" role="tab">
              <a class="nav-link d-flex align-items-center"
                data-bs-toggle="tab" href="#overall">
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
                      <th>Case Type</th>
                      <th>Sub Case Type</th>
                      <th>Allocation No</th>
                      <th>Loan Number</th>
                      <th>Customer Name</th>
                      <th>Product</th>
                      <th>Filing Date</th>
                      <th>SR Number</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>17-02-2026</td>
                      <td>0 days</td>
                      <td>By Case</td>
                      <td>Section 14</td>
                      <td>Allo001</td>
                      <td>LNAB5A57</td>
                      <td>Sandeep Rao</td>
                      <td>Business Loan</td>
                      <td></td>
                      <td></td>
                      <td>
                        <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#creationModal">
                          <i class="ti ti-plus"></i>
                        </a>
                        <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal">
                          <i class="ti ti-edit"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tab-pane fade " id="old">
              <div class="table-responsive">
                <table class="table table-nowrap datatable table-bordered">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Case ID</th>
                      <th>Case Type</th>
                      <th>Sub Case Type</th>
                      <th>Date</th>
                      <th>Age</th>
                      <th>Case Number</th>
                      <th>Loan Number</th>
                      <th>Customer Name</th>
                      <th>Product</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>CA001</td>
                      <td>By Case</td>
                      <td>Section 14</td>
                      <td>28-10-2025</td>
                      <td>30 Days before</td>
                      <td>
                            <a href="sarfaesi-case-list.php" class="btn btn-sm btn-primary me-2">
                              LNAB5A57
                            </a>
                      </td>
                      <td>001</td>
                      <td>Ram</td>
                      <td>Car Loan</td>
                      <!--<td>-->
                      <!--  <a href="sarfaesi-case-list.php" class="btn btn-sm btn-primary me-2">-->
                      <!--    <i class="ti ti-eye"></i>-->
                      <!--  </a>-->
                      <!--</td>-->
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tab-pane fade " id="Contest">
              <div class="table-responsive">
                <table class="table table-nowrap datatable table-bordered">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Date</th>
                      <th>Age</th>
                      <th>Case Type</th>
                      <th>Sub Case Type</th>
                      <th>Allocation No</th>
                      <th>Loan Number</th>
                      <th>Customer ID</th>
                      <th>Customer Name</th>
                      <th>Product</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>17-02-2026</td>
                      <td>0 Days</td>
                      <td>By Case</td>
                      <td>Section 14</td>
                      <td>Allo001</td>
                      <td>LNAB5A57</td>
                      <td>CUST03300B</td>
                      <td>Prakash Nair</td>
                      <td>Business Loan</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tab-pane fade" id="overall">
              <div class="table-responsive">
                <table class="table table-nowrap datatable table-bordered">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Age</th>
                      <th>Case Type</th>
                      <th>Sub Case Type</th>
                      <th>Allocation No</th>
                      <th>Loan Number</th>
                      <th>Customer ID</th>
                      <th>Customer Name</th>
                      <th>Product</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>0 Days</td>
                      <td>By Case</td>
                      <td>Section 14</td>
                      <td>Allo001</td>
                      <td>LNAB5A57</td>
                      <td>CUST03300B</td>
                      <td>Prakash Nair</td>
                      <td>Business Loan</td>
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

<script>
 document.querySelectorAll(".dropdown-check-list").forEach(function (list) {
  var anchor = list.querySelector(".anchor");
  anchor.addEventListener("click", function () {
    list.classList.toggle("visible");
  });
});
</script>

<?php include 'footer.php'; ?>
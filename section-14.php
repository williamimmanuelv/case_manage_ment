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
      <div class="">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title">Section 14</h5>
        </div>
        <div class="card-body">

          <ul class="nav nav-tabs mb-3" id="caseTabs" role="tablist">

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
                data-bs-toggle="tab" href="#overall">
                <i class="ti ti-folder-exclamation me-2"></i> Overall (5)
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
                      <th>Sub ID</th>
                      <th>Age</th>
                      <th>Case Type</th>
                      <th>Sub Case Type</th>
                      <th>Allotmet No</th>
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
                      <td>NID1002</td>
                      <td>0 days</td>
                      <td>Sarfaesi Case</td>
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
                      <th>Sub ID</th>
                      <th>Age</th>
                      <th>Case Type</th>
                      <th>Sub Case Type</th>
                      <th>Allotmet No</th>
                      <th>Loan Number</th>
                      <th>Customer ID</th>
                      <th>Customer Name</th>
                      <th>Product</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>CID1001</td>
                      <td>0 Days</td>
                      <td>Sarfaesi Case</td>
                      <td>Section 14</td>
                      <td>Allo001</td>
                      <td>LNAB5A57</td>
                      <td>CUST03300B</td>
                      <td>Prakash Nair</td>
                      <td>Business Loan</td>
                      <td>
                        <a href="sarfaesi-case-list.php" class="btn btn-sm btn-primary me-2">
                          <i class="ti ti-eye"></i>
                        </a>
                      </td>
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
                      <th>Sub ID</th>
                      <th>Age</th>
                      <th>Case Type</th>
                      <th>Sub Case Type</th>
                      <th>Allotmet No</th>
                      <th>Loan Number</th>
                      <th>Customer ID</th>
                      <th>Customer Name</th>
                      <th>Product</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>NID1001</td>
                      <td>0 Days</td>
                      <td>Sarfaesi Case</td>
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

</div>

<!--  Case Status Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="creationModalLabel">Case Status</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">

            <div class="col-md-12">
              <div class="mb-3">
                <label for="example-select" class="form-label">Case Filing Date</label>
                <input type="date" class="form-control" />
              </div>
            </div>

            <div class="col-md-12">
              <div class="mb-3">
                <label for="caseNo" class="form-label">SR No</label>
                <input type="text" class="form-control" id="sr-no" placeholder="SR No" />
              </div>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Update Case</button>
      </div>
    </div>
  </div>
</div>

<!-- Update Modal -->

<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="updateModalLabel">Updat Case Status</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">

            <div class="col-md-12">
              <div class="mb-3">
                <label for="caseNo" class="form-label">CNR No</label>
                <input type="text" class="form-control" id="cnr-no" placeholder="CNR No" />
              </div>
            </div>

            <div class="col-md-12">
              <div class="mb-3">
                <label for="caseNo" class="form-label">Court Name</label>
                <select class="form-select" id="court_type">
                  <option value="">Select Court Name</option>
                  <option value="DC">District Courts</option>
                  <option value="HC">High Courts</option>
                  <option value="SC">Supreme Court</option>
                  <option value="CC">eJagriti Consumer Court</option>

                </select>
              </div>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Update Case</button>
      </div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>
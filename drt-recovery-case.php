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

  .offcanvas {
    width: 400px !important;
  }
</style>

<div class="card border-0 rounded-0">

  <div class="row">
    <div class="col-xl-12">
      <div class="">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title">DRT Recovery Case Details</h5>
        </div>
        <div class="card-body">

          <ul class="nav nav-tabs nav-justified nav-bordered nav-bordered-success mb-3" id="caseTabs" role="tablist">

            <!-- <li class="nav-item" role="tab">
              <a class="nav-link d-flex align-items-center"
                href="drt-recovery-case-creation.php">
                <i class="ti ti-plus me-2"></i> New
              </a>
            </li> -->

            <li class="nav-item" role="tab">
              <a class="nav-link active d-flex align-items-center"
                data-bs-toggle="tab" href="#pending">
                <i class="ti ti-sort-descending-2 me-2"></i> Pending (1)
              </a>
            </li>

            <li class="nav-item" role="tab">
              <a class="nav-link d-flex align-items-center"
                data-bs-toggle="tab" href="#old">
                <i class="ti ti-folder-exclamation me-2"></i> Live (1)
              </a>
            </li>

            <li class="nav-item" role="tab">
              <a class="nav-link d-flex align-items-center"
                data-bs-toggle="tab" href="#Contest">
                <i class="ti ti-folder-exclamation me-2"></i> Contest (1)
              </a>
            </li>

            <li class="nav-item" role="tab">
              <a class="nav-link d-flex align-items-center"
                data-bs-toggle="tab" href="#overall">
                <i class="ti ti-folder-exclamation me-2"></i> Close (0)
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
                      <th>Filing Date</th>
                      <th>SR Number</th>
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
                      <td>DRT Recovery</td>
                      <td> CUS 1001</td>
                      <td> 1234/56</td>
                      <td> Car Loan</td>
                      <td> Ram</td>
                      <td> 10000</td>
                      <td> 20000</td>
                      <td>17-02-2026</td>
                      <td></td>
                      <td></td>

                      <td>
                        <a href="#" class="btn btn-success btn-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add">
                          <i class="ti ti-plus"></i>
                        </a>
                        <a href="#" class="btn btn-edit btn-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit">
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
                      <td>DRT Recovery</td>
                      <td> CUS 1001</td>
                      <td>
                        <a href="drt-recovery-case-list.php" class="badge badge-outline-info me-2">
                          LN1234/7
                        </a>
                      </td>
                      <td> Car Loan</td>
                      <td> Ram</td>
                      <td> 10000</td>
                      <td> 20000</td>
                      <td>17-02-2026</td>
                      <td><a class="btn btn-sm btn-edit me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_live_edit"><span class="ti ti-edit"> </span></a></td>

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
                      <th>Sub ID</th>
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
                      <td>CID1001</td>
                      <td>0 Days</td>
                      <td>EP Cases</td>
                      <td>DRT Recovery</td>
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
                      <th>Sub ID</th>
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
                    <!-- <tr>
                      <td>1</td>
                      <td>NID1001</td>
                      <td>0 Days</td>
                      <td>Litigation Cases-EP</td>
                      <td>Arbitration Award-EP</td>
                      <td>Allo001</td>
                      <td>LNAB5A57</td>
                      <td>CUST03300B</td>
                      <td>Prakash Nair</td>
                      <td>Business Loan</td>
                    </tr> -->
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
                <label for="example-select" class="form-label">Filing Date</label>
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
        <h5 class="modal-title" id="updateModalLabel">Update Case Status</h5>
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


<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_live_edit">
  <div class="offcanvas-header border-bottom">
    <h5 class="mb-0">Update Case Status</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
    </button>
  </div>
  <div class="offcanvas-body">
    <form>
      <div class="row">
        <div class="col-md-12">
          <div class="mb-3">
            <label for="caseNo" class="form-label">Case Status</label>
            <select class="form-select" id="court_type">
              <option value="">Select Case Status</option>
              <option value="Contest">Contest</option>
              <option value="Close">Close</option>
            </select>
          </div>
        </div>

        <div class="col-md-12">
          <div class="mb-3">
            <label for="caseNo" class="form-label">Remarks</label>
            <input type="text" class="form-control" placeholder="Enter Remarks" />
          </div>
        </div>
      </div>

    </form>
    <div class="d-flex gap-2 justify-content-end">
      <button type="button" class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-sm btn-primary">Update Case</button>
    </div>
  </div>
</div>

<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
  <div class="offcanvas-header border-bottom">
    <h5 class="mb-0">Case Status</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
    </button>
  </div>
  <div class="offcanvas-body">
    <form>
      <div class="row">

        <div class="col-md-12">
          <div class="mb-3">
            <label for="example-select" class="form-label">Filing Date</label>
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
    <div class="d-flex gap-2 justify-content-end">
      <button type="button" class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-sm btn-primary">Update Case</button>
    </div>
  </div>
</div>

<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
  <div class="offcanvas-header border-bottom">
    <h5 class="mb-0">Update Case Status</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
    </button>
  </div>
  <div class="offcanvas-body">
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
    <div class="d-flex gap-2 justify-content-end">
      <button type="button" class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-sm btn-primary">Update Case</button>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
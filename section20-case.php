<?php include 'header.php'; ?>

<style>
  .nav-tabs {
    border-bottom: 0px !important;
  }

  .choices__inner {
    scrollbar-width: none !important;
  }

  .card {
    box-shadow: none;
  }

  /* tab pagination  */
  .dataTables_length {
    padding-top: 0px !important;
    margin-bottom: 0px;
  }

  .dataTables_paginate {
    margin-top: 0% !important;
    padding-top: 0px !important;
  }

  /* search sec */

  .dataTables_filter {
    margin-bottom: 0px !important;
  }

  .dataTables_wrapper div {
    /* margin-bottom: 4px !important; */
  }

  .scrollBarThin {
    scrollbar-width: thin !important;
  }

  .btn-secondary {
    background: transparent !important;
    color: #cda85d !important;
  }
</style>

<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
  <div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Litigation - Agaist Case</a></li>
        <li class="breadcrumb-item active">
          Sec 20 of DRT Case Details
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
          <h5 class="card-title">Sec 20 of DRT Case Details</h5>
          <!--<div>-->
          <!--  <a href="section20-case-creation.php" class="btn btn-primary btn-sm">-->
          <!--    <i class="ti ti-plus"></i>-->
          <!--  </a>-->
          <!--</div>-->
        </div>
        <div class="card-body">

          <!-- <ul class="nav nav-tabs mb-3" id="caseTabs" role="tablist">


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


          </ul> -->



          <ul class="nav nav-tabs nav-justified nav-bordered nav-bordered-success mb-3">

            <li class="nav-item">
              <a class=" nav-link active" data-bs-toggle="tab" aria-expanded="false" href="#pending">
                Pending (2)
              </a>
            </li>

            <li class="nav-item" role="tab">
              <a class=" nav-link" data-bs-toggle="tab" aria-expanded="false" href="#old">
                Live (3)
              </a>
            </li>


            <li class="nav-item" role="tab">
              <a class="nav-link" data-bs-toggle="tab" aria-expanded="false" href="#Contest">
                Contest (1)
              </a>
            </li>


            <li class="nav-item" role="tab">
              <a class="nav-link" data-bs-toggle="tab" aria-expanded="false" href="#overall">
                Close (5)
              </a>
            </li>


          </ul>


          <div class="tab-content mt-3">

            <div class="tab-pane fade show active" id="pending">
              <div class="table-responsive scrollBarThin">
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
                      <td>Against Case</td>
                      <td>Sec 20 of DRT ( Appeal)</td>
                      <td>Allo001</td>
                      <td>LNAB5A57</td>
                      <td>Sandeep Rao</td>
                      <td>Business Loan</td>
                      <td></td>
                      <td></td>
                      <td>
                        <a href="#" style=" color: green; background-color: transparent;" class="btn btn-success btn-sm"
                          data-bs-toggle="offcanvas" data-bs-target="#createSection">
                          <i class="ti ti-plus"></i>
                        </a>
                        <!-- <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal">
                          <i class="ti ti-edit"></i>
                        </a> -->

                        <a href="#" class="btn btn-sm btn-primary me-2"
                          style="color: #cda85d !important; background-color: transparent;" data-bs-toggle="offcanvas"
                          data-bs-target="#editSection">
                          <i class="ti ti-edit"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tab-pane fade " id="old">
              <div class="table-responsive scrollBarThin">
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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>17-02-2026</td>
                      <td>0 Days</td>
                      <td>Against Case</td>
                      <td>Sec 20 of DRT ( Appeal)</td>
                      <td>Allo001</td>
                      <td>
                        <a href="section20-case-list.php" class="badge badge-outline-info me-2">
                          LNAB5A57
                        </a>
                      </td>
                      <td>CUST03300B</td>
                      <td>Prakash Nair</td>
                      <td>Business Loan</td>
                      <td> <a href="#" class="btn btn-sm btn-primary me-2" style="color: #cda85d !important; background-color: transparent;" data-bs-toggle="offcanvas" data-bs-target="#editlive">
                          <i class="ti ti-edit"></i>
                        </a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tab-pane fade " id="Contest">
              <div class="table-responsive scrollBarThin">
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
                      <td>Against Case</td>
                      <td>Sec 20 of DRT ( Appeal)</td>
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
              <div class="table-responsive scrollBarThin">
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
                      <td>Against Case</td>
                      <td>Sec 20 of DRT ( Appeal)</td>
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
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-sm btn-primary">Update Case</button>
      </div>
    </div>
  </div>
</div>


<!-- create offcanvas -->

<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="createSection" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="offcanvas-header border-bottom">
    <h5 class="fw-semibold">case Status</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
    </button>
  </div>
  <div class="offcanvas-body" style="padding: 20px 30px 20px 30px;">

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

    <div class="d-flex gap-2 align-items-center justify-content-end">

      <button type="button" class="btn btn-sm text-dark btn-outline-danger cancelBtn"
        data-bs-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-sm btn-primary">Update Case</button>
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
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-sm btn-primary">Update Case</button>
      </div>
    </div>
  </div>
</div>


<!-- update offcanvas -->

<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="editSection" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="offcanvas-header border-bottom">
    <h5 class="fw-semibold">Edit Account</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
    </button>
  </div>
  <div class="offcanvas-body" style="padding: 20px 30px 20px 30px;">


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

    <div class="d-flex gap-2 align-items-center justify-content-end">

      <button type="button" class="btn btn-sm text-dark btn-outline-danger cancelBtn"
        data-bs-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-sm btn-primary">Update Case</button>
    </div>

  </div>

</div>

<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="editlive" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="offcanvas-header border-bottom">
    <h5 class="fw-semibold">Update Case Status</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
    </button>
  </div>
  <div class="offcanvas-body" style="padding: 20px 30px 20px 30px;">
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
    <div class="d-flex gap-2 align-items-center justify-content-end">
      <button type="button" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-sm btn-primary">Update Case</button>
    </div>
  </div>

</div>
<?php include 'footer.php'; ?>
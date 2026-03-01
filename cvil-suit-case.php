<?php include 'header.php'; ?>

<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
  <div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Litigation - By Case</a></li>
        <li class="breadcrumb-item active">
          Civil Suit Case Details
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
          <h5 class="card-title">Civil Suit Case Details</h5>
        </div>
        <div class="card-body">

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
                Contest (3)
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
                      <td>0 days</td>
                      <td>Litigation By Case</td>
                      <td>Civil Suit</td>
                      <td>Allo001</td>
                      <td>LNAB5A57</td>
                      <td>Sandeep Rao</td>
                      <td>Business Loan</td>
                      <td></td>
                      <td></td>
                      <td>

                        <button class="btn btn-sm btn-success "
                          style="color: green !important; background-color: transparent;" data-bs-toggle="offcanvas"
                          data-bs-target="#creationModal">
                          <i class="ti ti-plus"></i>
                        </button>

                        <button class="btn btn-sm btn-primary "
                          style="color: #cda85d !important; background-color: transparent;" data-bs-toggle="offcanvas"
                          data-bs-target="#updateModal">
                          <i class="ti ti-edit"></i>
                        </button>
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
                      <td>0 Days</td>
                      <td>Litigation By Case</td>
                      <td>Civil Suit</td>
                      <td>Allo001</td>
                      <td>
                        <a href="cvil-suit-case-list.php" class="badge badge-outline-info me-2">
                          LNAB5A57
                        </a>
                      </td>
                      <td>CUST03300B</td>
                      <td>Prakash Nair</td>
                      <td>Business Loan</td>
                      <td>

                        <button class="btn btn-sm btn-primary "
                          style="color: #cda85d !important; background-color: transparent;" data-bs-toggle="offcanvas"
                          data-bs-target="#contestModal">
                          <i class="ti ti-edit"></i>
                        </button>

                      </td>
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
                      <td>Litigation By Case</td>
                      <td>Civil Suit</td>
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
                      <td>Litigation By Case</td>
                      <td>Civil Suit</td>
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

<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="creationModal" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="offcanvas-header border-bottom">
    <h5 class="fw-semibold">Case Status</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
    </button>
  </div>
  <div class="offcanvas-body">
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
    <div class="d-flex gap-2 align-items-center justify-content-end">
      <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
      <a href="javascript:void(0);" class="btn btn-primary btn-sm">Save</a>
    </div>
  </div>
</div>



<!-- Update Modal -->
<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="updateModal" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="offcanvas-header border-bottom">
    <h5 class="fw-semibold">Case Status</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
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
    <div class="d-flex gap-2 align-items-center justify-content-end">
      <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
      <a href="javascript:void(0);" class="btn btn-primary btn-sm">Save</a>
    </div>
  </div>
</div>


<!-- Contest Modal -->

<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="contestModal" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="offcanvas-header border-bottom">
    <h5 class="fw-semibold">Update Case Status</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
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
    <div class="d-flex gap-2 align-items-center justify-content-end">
      <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
      <a href="javascript:void(0);" class="btn btn-primary btn-sm">Save</a>
    </div>
  </div>
</div>





<?php include 'footer.php'; ?>
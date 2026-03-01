<?php include 'header.php'; ?>

<!-- accordion -->


<style>
  .choices__inner {
    scrollbar-width: none !important;
  }

  .card {
    box-shadow: none;
  }

  .custom-offcanvas {
    max-width: 900px;
    width: 100% !important;
    transition: transform 0.6s ease-in-out;
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
</style>


<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
  <div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Employee Report</a></li>
        <li class="breadcrumb-item active">
          Financial Year
        </li>
      </ol>
    </nav>
  </div>

</div> -->


<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Employee Report</h5>

        <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#addProduct">
          <i class="ti ti-plus me-1"></i> Add
        </button>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-nowrap datatable table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Employee Image</th>
                <th>Employee Name</th>
                <th>Employee ID</th>
                <th>Employee Email ID</th>
                <th>Employee Phone No</th>
                <th>Create Date</th>
                <!-- <th>Edit</th> -->
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>
                  <div class="d-flex align-items-center justify-content-center">
                    <span class="avatar ">
                      <img src="assets/img/profiles/avatar-01.jpg" alt="img">
                    </span>
                  </div>
                </td>
                <td>Salman</td>
                <td>Emp001</td>
                <td>demo@gmail.com</td>
                <td>9876543210</td>
                <td>05-01-2026</td>
                <td>

                  <button class="btn btn-sm btn-primary me-2" style="color: #cda85d !important; background-color: transparent;" data-bs-toggle="offcanvas" data-bs-target="#editEmployee">
                    <i class="ti ti-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-danger" style="color: red; background-color: transparent;">
                    <i class="ti ti-trash"></i>
                  </button>

                  <!-- <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#creationOffcanvas">
                    <i class="ti ti-plus"></i>
                  </button> -->


                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- end row -->





<!-- done create offcanvas -->


<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="addProduct" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="offcanvas-header border-bottom">
    <h5 class="fw-semibold">Create Employee</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
    </button>
  </div>
  <div class="offcanvas-body" style="padding: 20px 30px 20px 30px;">
    <form>
      <div class="row">
        <div class="col-xl-12 ">

          <form action="#">

            <div class="d-flex flex-column flex-lg-row justify-content-between">

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class=" col-form-label">Employee Photo <span style="color:red;">*</span></label>
                </div>

                <div class="col-lg-8 w-100">
                  <input type="file" class="form-control">
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Employee Name <span style="color:red;">*</span></label>
                </div>
                <div class="col-lg-8 w-100">
                  <input type="text" class="form-control" placeholder="Name">
                </div>
              </div>


              <div class="row  d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Position</label>
                </div>
                <div class="col-lg-8 w-100">
                  <input type="text" class="form-control" placeholder="Position">
                </div>
              </div>


            </div>


            <div class="d-flex flex-column flex-lg-row justify-content-between">

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Employee ID <span style="color:red;">*</span></label>
                </div>
                <div class="col-lg-8 w-100">
                  <input type="text" class="form-control" placeholder="Employee ID">
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4  mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Email ID <span style="color:red;">*</span></label>
                </div>
                <div class="col-lg-8 w-100">
                  <input type="email" class="form-control" placeholder="Email ID">
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4  mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Phone No <span style="color:red;">*</span></label>
                </div>
                <div class="col-lg-8 w-100">
                  <input type="number" class="form-control" placeholder="Phone No">
                </div>
              </div>


            </div>


            <div class="d-flex flex-column flex-lg-row justify-content-between">

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Case Allocation Zone</label>
                </div>
                <div class="col-lg-8 w-100">
                  <select class="form-control" multiple data-choices data-choices-removeItem>
                    <option selected>North</option>
                    <option>All</option>
                    <option>East</option>
                    <option>West</option>
                    <option>South</option>
                    <option>None</option>
                  </select>
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Case Allocation State</label>
                </div>
                <div class="col-lg-8 w-100">
                  <select class="form-control" multiple data-choices data-choices-removeItem>
                    <option selected>Tamil Nadu</option>
                    <option>All</option>
                    <option>Kerala</option>
                    <option>Karnataka</option>
                    <option>Gujarat</option>
                    <option>None</option>
                  </select>
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Case Allocation District</label>
                </div>
                <div class="col-lg-8 w-100">
                  <select class="form-control" multiple data-choices data-choices-removeItem>
                    <option selected>Chennai</option>
                    <option>All</option>
                    <option>All</option>
                    <option>Madurai</option>
                    <option>None</option>
                  </select>
                </div>
              </div>

            </div>

            <div class="d-flex flex-column flex-lg-row justify-content-between">


              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Report Zone</label>
                </div>
                <div class="ccol-lg-8 w-100">
                  <select class="form-control" multiple data-choices data-choices-removeItem>
                    <option selected>North</option>
                    <option>All</option>
                    <option>East</option>
                    <option>West</option>
                    <option>South</option>
                    <option>None</option>
                  </select>
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Report State</label>
                </div>
                <div class="col-lg-8 w-100">
                  <select class="form-control" multiple data-choices data-choices-removeItem>
                    <option selected>Tamil Nadu</option>
                    <option>All</option>
                    <option>Kerala</option>
                    <option>Karnataka</option>
                    <option>Gujarat</option>
                    <option>None</option>
                  </select>
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Report District</label>
                </div>
                <div class="col-lg-8 w-100">
                  <select class="form-control" multiple data-choices data-choices-removeItem>
                    <option selected>Tamil Nadu</option>
                    <option>All</option>
                    <option>Kerala</option>
                    <option>Karnataka</option>
                    <option>Gujarat</option>
                    <option>None</option>
                  </select>
                </div>
              </div>


            </div>

            <div class="d-flex flex-column flex-lg-row justify-content-between">

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Case Type <span style="color:red;">*</span></label>
                </div>
                <div class="ccol-lg-8 w-100">
                  <select class="form-select" id="caseType_create" multiple data-choices data-choices-removeItem>
                    <option value="">Select</option>
                    <option selected value="Case">Litigation By Case</option>
                    <option value="Arbitration Case">Litigation Against Case</option>
                    <option value="Sarfaesi Case">Litigation Case EP</option>
                  </select>
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Sub Case Type <span style="color:red;">*</span></label>
                </div>
                <div class="ccol-lg-8 w-100">

                  <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                    <option value="All" selected>All</option>
                    <option value="Writ Petition u/s 226">Writ Petition u/s 226</option>
                    <option value="Sec 19 of DRT">Sec 19 of DRT</option>
                    <option value="Lok adalt-Order">Lok adalt-Order</option>
                  </select>

                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
              
              </div>



            </div>

            <div class="d-flex flex-column justify-content-around  row mb-3">
              <div class="col-lg-4">
                <label class="col-form-label">Remarks</label>
              </div>
              <div class="col-lg-12">
                <textarea class="form-control" placeholder="Remarks"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12 text-end">
                <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
                <a href="#" class="btn btn-sm btn-primary me-2">Create</a>
              </div>
            </div>

          </form>
        </div>
      </div>
    </form>
  </div>
</div>


<!-- offcanvas edit -->


<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="editEmployee" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="offcanvas-header border-bottom">
    <h5 class="fw-semibold">Edit Employee</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
    </button>
  </div>
  <div class="offcanvas-body" style="padding: 20px 30px 20px 30px;">

    <form>
      <div class="row">
        <div class="col-xl-12 ">

          <form action="#">

            <div class="d-flex flex-column flex-lg-row justify-content-between">

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class=" col-form-label">Employee Photo <span style="color:red;">*</span></label>
                </div>

                <div class="col-lg-8 w-100">
                  <input type="file" class="form-control">
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Employee Name <span style="color:red;">*</span></label>
                </div>
                <div class="col-lg-8 w-100">
                  <input type="text" class="form-control" placeholder="Name">
                </div>
              </div>


              <div class="row  d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Position</label>
                </div>
                <div class="col-lg-8 w-100">
                  <input type="text" class="form-control" placeholder="Position">
                </div>
              </div>


            </div>


            <div class="d-flex flex-column flex-lg-row justify-content-between">

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Employee ID <span style="color:red;">*</span></label>
                </div>
                <div class="col-lg-8 w-100">
                  <input type="text" class="form-control" placeholder="Employee ID">
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4  mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Email ID <span style="color:red;">*</span></label>
                </div>
                <div class="col-lg-8 w-100">
                  <input type="email" class="form-control" placeholder="Email ID">
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4  mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Phone No <span style="color:red;">*</span></label>
                </div>
                <div class="col-lg-8 w-100">
                  <input type="number" class="form-control" placeholder="Phone No">
                </div>
              </div>


            </div>


            <div class="d-flex flex-column flex-lg-row justify-content-between">

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Case Allocation Zone</label>
                </div>
                <div class="col-lg-8 w-100">
                  <select class="form-control" multiple data-choices data-choices-removeItem>
                    <option selected>North</option>
                    <option>All</option>
                    <option>East</option>
                    <option>West</option>
                    <option>South</option>
                    <option>None</option>
                  </select>
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Case Allocation State</label>
                </div>
                <div class="col-lg-8 w-100">
                  <select class="form-control" multiple data-choices data-choices-removeItem>
                    <option selected>Tamil Nadu</option>
                    <option>All</option>
                    <option>Kerala</option>
                    <option>Karnataka</option>
                    <option>Gujarat</option>
                    <option>None</option>
                  </select>
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Case Allocation District</label>
                </div>
                <div class="col-lg-8 w-100">
                  <select class="form-control" multiple data-choices data-choices-removeItem>
                    <option selected>Chennai</option>
                    <option>All</option>
                    <option>All</option>
                    <option>Madurai</option>
                    <option>None</option>
                  </select>
                </div>
              </div>

            </div>

            <div class="d-flex flex-column flex-lg-row justify-content-between">


              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Report Zone</label>
                </div>
                <div class="ccol-lg-8 w-100">
                  <select class="form-control" multiple data-choices data-choices-removeItem>
                    <option selected>North</option>
                    <option>All</option>
                    <option>East</option>
                    <option>West</option>
                    <option>South</option>
                    <option>None</option>
                  </select>
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Report State</label>
                </div>
                <div class="col-lg-8 w-100">
                  <select class="form-control" multiple data-choices data-choices-removeItem>
                    <option selected>Tamil Nadu</option>
                    <option>All</option>
                    <option>Kerala</option>
                    <option>Karnataka</option>
                    <option>Gujarat</option>
                    <option>None</option>
                  </select>
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Report District</label>
                </div>
                <div class="col-lg-8 w-100">
                  <select class="form-control" multiple data-choices data-choices-removeItem>
                    <option selected>Tamil Nadu</option>
                    <option>All</option>
                    <option>Kerala</option>
                    <option>Karnataka</option>
                    <option>Gujarat</option>
                    <option>None</option>
                  </select>
                </div>
              </div>


            </div>

            <div class="d-flex flex-column flex-lg-row justify-content-between">

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Case Type <span style="color:red;">*</span></label>
                </div>
                <div class="ccol-lg-8 w-100">
                  <select class="form-select" id="caseType_create" multiple data-choices data-choices-removeItem>
                    <option value="">Select</option>
                    <option selected value="Case">Litigation By Case</option>
                    <option value="Arbitration Case">Litigation Against Case</option>
                    <option value="Sarfaesi Case">Litigation Case EP</option>
                  </select>
                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Sub Case Type <span style="color:red;">*</span></label>
                </div>
                <div class="ccol-lg-8 w-100">

                  <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                    <option value="All" selected>All</option>
                    <option value="Writ Petition u/s 226">Writ Petition u/s 226</option>
                    <option value="Sec 19 of DRT">Sec 19 of DRT</option>
                    <option value="Lok adalt-Order">Lok adalt-Order</option>
                  </select>

                </div>
              </div>

              <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                <div class="col-lg-4 w-auto">
                  <label class="col-form-label">Employee Status</label>
                </div>
                <div class="ccol-lg-8 w-100">

                  <select class="form-select" id="example-select">
                    <option>Enable</option>
                    <option>Disable</option>
                  </select>
                </div>
              </div>



            </div>

            <div class="d-flex flex-column justify-content-around  row mb-3">
              <div class="col-lg-4">
                <label class="col-form-label">Remarks</label>
              </div>
              <div class="col-lg-12">
                <textarea class="form-control" placeholder="Remarks"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12 text-end">
                <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
                <a href="#" class="btn btn-sm btn-primary me-2">Create</a>
              </div>
            </div>

          </form>
        </div>
      </div>
    </form>
  </div>
</div>




<!-- edit accordian -->



<?php include 'footer.php'; ?>
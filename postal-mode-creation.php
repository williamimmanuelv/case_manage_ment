<?php include 'header.php'; ?>

<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
  <div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Master</a></li>
        <li class="breadcrumb-item active">
          Postal Mode Creation
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
        <h5 class="card-title">Postal Mode Report</h5>
        <div>
          <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#addProduct">
            <i class="ti ti-plus me-1"></i> Add
          </button>
        </div>
      </div>
      <div class="card-body">


        <ul class="nav nav-tabs nav-bordered mb-4">
          <li class="nav-item">
            <a href="#v-pills-home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
              <span class="d-md-inline-block">All</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#v-pills-profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link ">
              <span class="d-md-inline-block">Enable</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#v-pills-messages" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
              <span class="d-md-inline-block">Disable</span>
            </a>
          </li>
        </ul>

        <div class="tab-content ps-2" id="v-pills-tabContent">
          <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="table-responsive">
              <table class="table table-nowrap datatable table-bordered">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Postal Mode</th>
                    <th>Status</th>
                    <th>Create Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>SMS</td>
                    <td>Enable</td>
                    <td>18-12-2025</td>
                    <td>
                      <div class="d-flex gap-2 justify-content-center">
                        <button class="btn btn-sm btn-primary "
                          style="color: #cda85d !important; background-color: transparent;" data-bs-toggle="offcanvas"
                          data-bs-target="#editProduct">
                          <i class="ti ti-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" style="color: red; background-color: transparent;">
                          <i class="ti ti-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

            <div class="table-responsive">
              <table class="table table-nowrap datatable table-bordered">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Postal Mode</th>
                    <th>Status</th>
                    <th>Create Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>SMS</td>
                    <td>Enable</td>
                    <td>18-12-2025</td>
                    <td>
                      <div class="d-flex gap-2 justify-content-center">
                        <button class="btn btn-sm btn-primary "
                          style="color: #cda85d !important; background-color: transparent;" data-bs-toggle="offcanvas"
                          data-bs-target="#editProduct">
                          <i class="ti ti-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" style="color: red; background-color: transparent;">
                          <i class="ti ti-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>


          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

            <div class="table-responsive">
              <table class="table table-nowrap datatable table-bordered">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Postal Mode</th>
                    <th>Status</th>
                    <th>Create Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>SMS</td>
                    <td>Disable</td>
                    <td>18-12-2025</td>
                    <td>
                      <div class="d-flex gap-2 justify-content-center">
                        <button class="btn btn-sm btn-primary "
                          style="color: #cda85d !important; background-color: transparent;" data-bs-toggle="offcanvas"
                          data-bs-target="#editProduct">
                          <i class="ti ti-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" style="color: red; background-color: transparent;">
                          <i class="ti ti-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>



        </div>

        <!-- end card-body -->
      </div>
      <!-- end card -->
    </div>
  </div>


  <!-- end card-body -->
</div>



<!-- end row -->



<!-- Edit Product -->
<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="editProduct" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="offcanvas-header border-bottom">
    <h5 class="fw-semibold">Edit Postal Mode</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
    </button>
  </div>
  <div class="offcanvas-body">
    <form>


      <div class="mb-3">
        <label class="form-label">Postal Mode</label>
        <input type="text" class="form-control" placeholder="Postal Mode" autocomplete="off">
      </div>

      <div class="mb-3">
        <label class="form-label">Status</label>
        <select class="form-select" id="example-select">
          <option>Enable</option>
          <option>Disable</option>
        </select>
      </div>
    </form>
    <div class="d-flex gap-2 align-items-center justify-content-end">
      <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
      <a href="javascript:void(0);" class="btn btn-primary btn-sm">Save</a>
    </div>
  </div>
</div>
<!-- /Edit Product -->
<!-- Add Product -->
<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="addProduct" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="offcanvas-header border-bottom">
    <h5 class="fw-semibold">Add Postal Mode </h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
    </button>
  </div>
  <div class="offcanvas-body">
    <form>


      <div class="mb-3">
        <label class="form-label">Postal Mode</label>
        <input type="text" class="form-control" placeholder="Postal Mode" autocomplete="off">
      </div>


    </form>
    <div class="d-flex gap-2 align-items-center justify-content-end">
      <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
      <a href="javascript:void(0);" class="btn btn-primary btn-sm">Save</a>
    </div>
  </div>
</div>
<!-- /Add Product -->
<!-- Creation Modal -->


<script>
  document.addEventListener("DOMContentLoaded", function () {

    function setupModal(caseTypeId, subcaseClass) {

      const caseTypeSelect = document.getElementById(caseTypeId);
      const subcaseBoxes = document.querySelectorAll("." + subcaseClass);
      const defaultBox = document.querySelector(`.${subcaseClass}[data-type="default"]`);

      function show(type) {
        subcaseBoxes.forEach(b => b.classList.add("d-none"));

        if (!type) {
          defaultBox.classList.remove("d-none");
          return;
        }

        const match = document.querySelector(`.${subcaseClass}[data-type="${type}"]`);
        if (match) match.classList.remove("d-none");
        else defaultBox.classList.remove("d-none");
      }

      caseTypeSelect.addEventListener("change", () => show(caseTypeSelect.value));

      show(caseTypeSelect.value);
    }

    setupModal("caseType_create", "subcase-create");
    setupModal("caseType_edit", "subcase-edit");

  });
</script>


<?php include 'footer.php'; ?>
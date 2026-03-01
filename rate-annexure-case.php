<?php include 'header.php'; ?>
<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
  <div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Master</a></li>
        <li class="breadcrumb-item active">
          Rate Annexure Case
        </li>
      </ol>
    </nav>
  </div>

</div>
 -->


<!-- start row -->
<div class="row">



  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Rate Annexure Case</h5>
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
                    <th>Case Type</th>
                    <th>SubCase Type</th>
                    <th>Initial Amount</th>
                    <th>Final Amount</th>
                    <th>Amount</th>
                    <th>Created Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>By Case</td>
                    <td>Section 138</td>
                    <td>₹ 500</td>
                    <td>₹ 2,500</td>
                    <td>₹ 1,500</td>
                    <td>22-02-2026</td>
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
                    <th>Case Type</th>
                    <th>SubCase Type</th>
                    <th>Initial Amount</th>
                    <th>Final Amount</th>
                    <th>Amount</th>
                    <th>Created Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>By Case</td>
                    <td>Section 138</td>
                    <td>₹ 500</td>
                    <td>₹ 2,500</td>
                    <td>₹ 1,500</td>
                    <td>22-02-2026</td>
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
                    <th>Case Type</th>
                    <th>SubCase Type</th>
                    <th>Initial Amount</th>
                    <th>Final Amount</th>
                    <th>Amount</th>
                    <th>Created Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>By Case</td>
                    <td>Section 138</td>
                    <td>₹ 500</td>
                    <td>₹ 2,500</td>
                    <td>₹ 1,500</td>
                    <td>22-02-2026</td>
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

      </div>
    </div>
  </div>


</div>

<!-- end row -->


<!-- Edit Product -->
<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="editProduct" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="offcanvas-header border-bottom">
    <h5 class="fw-semibold">Edit Rate Annexure Case</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
    </button>
  </div>
  <div class="offcanvas-body">
    <form>
      <div class="row g-4">
        <div class="col-md-6">
          <label class="form-label">Case Type</label>
          <select class="form-select" id="caseType_edit">
            <option value="">Select</option>
            <option value="Case">Litigation By Case</option>
            <option value="Arbitration Case">Litigation Against Case</option>
            <option value="Sarfaesi Case">Litigation Case EP</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Sub Case Type</label>

          <select class="form-select subcase-edit" data-type="default">
            <option value="">Select</option>
          </select>

          <select class="form-select subcase-edit d-none" data-type="Case">
            <option value="">Select</option>
            <option value="Section 138">Section 138</option>
            <option value="Section 25">Section 25</option>
            <option value="Arbitration Section 21">Arbitration Section 21</option>
            <option value="Arbitration Section 9">Arbitration Section 9</option>
            <option value="Civil Suit">Civil Suit</option>
            <option value="Summary Suit">Summary Suit</option>
            <option value="Sarfaesi Case">Sarfaesi Case</option>
            <option value="Sec 19 of DRT">Sec 19 of DRT</option>
            <option value="Writ Petition u/s 226">Writ Petition u/s 226</option>
            <option value="Sarfasei Act">Sarfasei Act</option>
            <option value="Criminal Case-200CrPc">Criminal Case-200CrPc</option>
            <option value="Cr-Return Of Property">Cr-Return Of Property</option>
            <option value="Cr- Bail/Anticipartory bail">Cr- Bail/Anticipartory bail</option>
            <option value="Cr-Se 156(3) Order">Cr-Se 156(3) Order</option>
          </select>

          <select class="form-select subcase-edit d-none" data-type="Arbitration Case">
            <option value="">Select</option>
            <option value="Civil case u/s O 7 R1">Civil case u/s O 7 R1</option>
            <option value="Sec 11 of Arbitration Act">Sec 11 of Arbitration Act</option>
            <option value="Sec 34 of Arbitration Act">Sec 34 of Arbitration Act</option>
            <option value="Insolvency Petition">Insolvency Petition</option>
            <option value="Sec 35 of Consumer Act">Sec 35 of Consumer Act</option>
            <option value="Sec 41 of Appeal to Consumer Court">Sec 41 of Appeal to Consumer Court</option>
            <option value="Sec 17 of DRT (SA)">Sec 17 of DRT (SA)</option>
            <option value="Sec 20 of DRT ( Appeal)">Sec 20 of DRT ( Appeal)</option>
            <option value="Writ Petition-Respondent">Writ Petition-Respondent</option>
          </select>

          <select class="form-select subcase-edit d-none" data-type="Sarfaesi Case">
            <option value="">Select</option>
            <option value="Arbitration Award-EP">Arbitration Award-EP</option>
            <option value="Civil Suit- Decree">Civil Suit- Decree</option>
            <option value="Lok adalt-Order">Lok adalt-Order</option>
            <option value="DRT-Recovery">DRT-Recovery</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Initial Amount</label>
          <input type="text" class="form-control" placeholder="Amount" autocomplete="off">
        </div>
        <div class="col-md-6">
          <label class="form-label">Final Amount</label>
          <input type="text" class="form-control" placeholder="Amount" autocomplete="off">
        </div>
        <div class="col-md-6">
          <label class="form-label">Amount</label>
          <input type="text" class="form-control" placeholder="Amount" autocomplete="off">
        </div>
        <div class="col-md-6">
          <label class="form-label">Status</label>
          <select class="form-select" id="example-select">
            <option>Enable</option>
            <option>Disable</option>
          </select>
        </div>
      </div>
    </form>
    <div class="d-flex gap-2 align-items-center justify-content-end mt-4">
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
    <h5 class="fw-semibold">Add Rate Annexure Case</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
    </button>
  </div>
  <div class="offcanvas-body">
    <form>
      <div class="row g-4">
        <div class="col-md-6">
          <label class="form-label">Case Type</label>
          <select class="form-select" id="caseType_create">
            <option value="">Select</option>
            <option value="Case">Litigation By Case</option>
            <option value="Arbitration Case">Litigation Against Case</option>
            <option value="Sarfaesi Case">Litigation Case EP</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Sub Case Type</label>

          <select class="form-select subcase-create" data-type="default">
            <option value="">Select</option>
          </select>

          <select class="form-select subcase-create d-none" data-type="Case">
            <option value="">Select</option>
            <option value="Section 138">Section 138</option>
            <option value="Section 25">Section 25</option>
            <option value="Arbitration Section 21">Arbitration Section 21</option>
            <option value="Arbitration Section 9">Arbitration Section 9</option>
            <option value="Civil Suit">Civil Suit</option>
            <option value="Summary Suit">Summary Suit</option>
            <option value="Sarfaesi Case">Sarfaesi Case</option>
            <option value="Sec 19 of DRT">Sec 19 of DRT</option>
            <option value="Writ Petition u/s 226">Writ Petition u/s 226</option>
            <option value="Sarfasei Act">Sarfasei Act</option>
            <option value="Criminal Case-200CrPc">Criminal Case-200CrPc</option>
            <option value="Cr-Return Of Property">Cr-Return Of Property</option>
            <option value="Cr- Bail/Anticipartory bail">Cr- Bail/Anticipartory bail</option>
            <option value="Cr-Se 156(3) Order">Cr-Se 156(3) Order</option>
          </select>

          <select class="form-select subcase-create d-none" data-type="Arbitration Case">
            <option value="">Select</option>
            <option value="Civil case u/s O 7 R1">Civil case u/s O 7 R1</option>
            <option value="Sec 11 of Arbitration Act">Sec 11 of Arbitration Act</option>
            <option value="Sec 34 of Arbitration Act">Sec 34 of Arbitration Act</option>
            <option value="Insolvency Petition">Insolvency Petition</option>
            <option value="Sec 35 of Consumer Act">Sec 35 of Consumer Act</option>
            <option value="Sec 41 of Appeal to Consumer Court">Sec 41 of Appeal to Consumer Court</option>
            <option value="Sec 17 of DRT (SA)">Sec 17 of DRT (SA)</option>
            <option value="Sec 20 of DRT ( Appeal)">Sec 20 of DRT ( Appeal)</option>
            <option value="Writ Petition-Respondent">Writ Petition-Respondent</option>
          </select>

          <select class="form-select subcase-create d-none" data-type="Sarfaesi Case">
            <option value="">Select</option>
            <option value="Arbitration Award-EP">Arbitration Award-EP</option>
            <option value="Civil Suit- Decree">Civil Suit- Decree</option>
            <option value="Lok adalt-Order">Lok adalt-Order</option>
            <option value="DRT-Recovery">DRT-Recovery</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Initial Amount</label>
          <input type="text" class="form-control" placeholder="Amount" autocomplete="off">
        </div>
        <div class="col-md-6">
          <label class="form-label">Final Amount</label>
          <input type="text" class="form-control" placeholder="Amount" autocomplete="off">
        </div>
        <div class="col-md-12">
          <label class="form-label">Amount</label>
          <input type="text" class="form-control" placeholder="Amount" autocomplete="off">
        </div>

      </div>

    </form>
    <div class="d-flex gap-2 align-items-center justify-content-end mt-4">
      <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
      <a href="javascript:void(0);" class="btn btn-primary btn-sm">Save</a>
    </div>

  </div>
</div>
<!-- /Add Product -->


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
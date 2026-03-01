<?php include 'header.php'; ?>



<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">I.A.Application</h5>
        <div>
          <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add">
            <i class="ti ti-plus me-1 me-2"></i>Add
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-nowrap datatable table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Create Date</th>
                <th>Loan Number</th>
                <th>Customer Id</th>
                <th>Application Number</th>
                <th>Filing Date</th>
                <th>Nature Of Application</th>
                <th>Stage Of Application</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>07-01-2026</td>
                <td>LN45455C</td>
                <td>CUST39F3C7</td>
                <td>APP/CRL/0456/2024</td>
                <td>07-01-2026</td>
                <td>Bail Application</td>
                <td>Pending for Hearing</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- end card-body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>
<!-- end row -->

<!-- Creation Offcanvas -->

<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
  <div class="offcanvas-header border-bottom">
    <h5 class="mb-0">I.A. Application Creation</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
    </button>
  </div>
  <div class="offcanvas-body">
    <div class="row g-2">

      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Case Type</label>
          <select class="form-select" id="caseType_create">
            <option value="">Select</option>
            <option value="Case">Litigation By Case</option>
            <option value="Arbitration Case">Litigation Against Case</option>
            <option value="Sarfaesi Case">Litigation Case EP</option>
          </select>
        </div>
      </div>


      <div class="col-md-4">
        <div class="mb-3">
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
      </div>

      <div class="col-md-4">
        <div class="d-flex gap-2 align-items-center">
          <div class="form-group">
            <label class="form-label">Loan No</label>
            <select class="form-select">
              <option value="">Select Loan No</option>
              <option value="LNAB5A57">LNAB5A57</option>
              <option value="LNAB5A58">LNAB5A58</option>
            </select>
          </div>
          <div class="d-flex align-items-end mt-4"> 
             <button class="btn btn-sm btn-primary me-2">
            <i class="ti ti-search"></i>
          </button>
          </div>
         
        </div>
      </div>

    </div>
    <hr>

    <div class="row g-4 mt-2">
      <div class="col-md-6">
        <label for="input-label" class="form-label">Customer ID</label>
        <input type="text" class="form-control" value="Customer Id">
      </div>
      <div class="col-md-6">
        <label for="input-label" class="form-label">Customer Name</label>
        <input type="text" class="form-control" value="Customer Name">
      </div>
      <div class="col-md-6">
        <label for="input-label" class="form-label">Case Number</label>
        <input type="text" class="form-control" value="Case No">
      </div>
      <div class="col-md-6">
        <label for="input-label" class="form-label">Court Name</label>
        <input type="text" class="form-control" value="Court Name">
      </div>
    </div>

    <hr>

    <div class="row g-4">
      <div class="col-md-6">
        <label for="input-label" class="form-label">Application Number</label>
        <input type="text" class="form-control" value="Application Number">
      </div>
      <div class="col-md-6">
        <label for="input-label" class="form-label">Filing Date</label>
        <input type="date" class="form-control">
      </div>
      <div class="col-md-6">
        <label for="input-label" class="form-label">Nature Of Application</label>
        <input type="text" class="form-control" value="Nature Of Application">
      </div>
      <div class="col-md-6">
        <label for="input-label" class="form-label">Stage Of Application</label>
        <input type="text" class="form-control" value="Stage Of Application">
      </div>
    </div>

    <div class="d-flex gap-2 mt-3 justify-content-end">
      <button type="button" class="btn btn-sm btn-primary"><i class="ti ti-device-floppy me-1"></i> Create</button>
      <button type="button" class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
    </div>
  </div>
</div>

<!-- <script>
  document.addEventListener("DOMContentLoaded", function() {

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
</script> -->

<script>
  document.addEventListener("DOMContentLoaded", function() {

    function setupModal(caseTypeId, subcaseClass) {

      const caseTypeSelect = document.getElementById(caseTypeId);
      if (!caseTypeSelect) return;

      const subcaseBoxes = document.querySelectorAll("." + subcaseClass);

      function showSubcase(type) {
        subcaseBoxes.forEach(box => {
          if (box.dataset.type === type) {
            box.classList.remove("d-none");
          } else {
            box.classList.add("d-none");
          }
        });

        if (!type) {
          const defaultBox = document.querySelector(
            `.${subcaseClass}[data-type="default"]`
          );
          if (defaultBox) defaultBox.classList.remove("d-none");
        }
      }

      caseTypeSelect.addEventListener("change", function() {
        showSubcase(this.value);
      });

      showSubcase(caseTypeSelect.value);
    }

    setupModal("caseType_create", "subcase-create");
    setupModal("caseType_edit", "subcase-edit");

  });
</script>
<?php include 'footer.php'; ?>
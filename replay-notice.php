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

  .custom-offcanvas {
    max-width: 600px;
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
</style>



<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
  <div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Reply Notice</a></li>
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
        <h5 class="card-title">Reply Notice</h5>
        <div>
          <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#addReplyNotice">
            <i class="ti ti-plus me-1"></i> Add
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-nowrap datatable table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Notice Type</th>
                <th>Loan Number</th>
                <th>Customer Name</th>
                <th>Description</th>
                <th>Attachment</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Conciliation Notice</td>
                <td>Loa001</td>
                <td>Prakash Nair</td>
                <td>The reply has been duly submitted and acknowledged</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-primary">
                    <i class="ti ti-paperclip"></i>
                  </a>
                </td>
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

<!-- Creation Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="creationModalLabel">Reply Notice</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">

        <div class="row">
          <div class="col-md-4">
            <div class="mb-3">
              <label class="form-label">Legal Type</label>
              <select class="form-select" id="example-select">
                <option value="">Select</option>
                <option value="normal-notice">Normal Notice</option>
                <option value="conciliation-notice">Conciliation Notice</option>
                <option value="lok-adalat-notice">Lok Adalat Notice</option>
                <option value="mediation-notice">Mediation Notice</option>
              </select>
            </div>
          </div>
          <div class="col-md-4 mb-3 sub-case">
            <label class="form-label">Loan No</label>
            <select class="form-select" id="case-type">
              <option value="">Select Loan No</option>
              <option value="LNAB5A57">LNAB5A57</option>
              <option value="LNAB5A58">LNAB5A58</option>
            </select>
          </div>
          <div class="col-md-4 my-auto">
            <button class="btn btn-sm btn-primary me-2">
              <i class="ti ti-search"></i> Search
            </button>
          </div>
        </div>

        <hr>

        <div class="row ">
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Customer Name</label>
              <input type="text" class="form-control" value="Customer Name">
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Description</label>
              <textarea name="" class="form-control" placeholder="Description" id=""></textarea>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Attachment</label>
              <input class="form-control" type="file" id="formFileMultiple" multiple="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Create</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>




<!-- done create offcanvas -->


<div class="offcanvas  offcanvas-end " tabindex="-1" id="addReplyNotice" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="offcanvas-header border-bottom">
    <h5 class="fw-semibold">Add Reply Notice</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="ti ti-x"></i>
    </button>
  </div>
  <div class="offcanvas-body" style="padding: 20px 30px 20px 30px;">

    <div>

      <div class="row">


        <div class="col-md-6 col-lg-4 mt-3">
          <label class="form-label">Legal Type</label>
          <select class="form-select" id="legalType">
            <option value="">Select Legal Type</option>
            <option value="Notice">Notice</option>
            <option value="Case">Case</option>
          </select>
        </div>

        <!-- NOTICE TYPE -->
        <div class="col-md-6 col-lg-4 mt-3" id="noticeTypeWrapper">
          <label class="form-label">Notice Type</label>
          <select class="form-select">
            <option value="">Select</option>
            <option>Conciliation Notice</option>
            <option>Lok-Adalat Notice</option>
            <option>Mediation Notice</option>
            <option>Normal Notice</option>
          </select>
        </div>


        <!-- CASE TYPE -->
        <div class="col-md-6 col-lg-4 mt-3" id="caseTypeWrapper">
          <label class="form-label">Case Type</label>
          <select class="form-select">
            <option value="">Select</option>
            <option value="Case">Litigation By Case</option>
            <option value="Arbitration Case">Litigation Against Case</option>
            <option value="Sarfaesi Case">Litigation Case EP</option>
          </select>
        </div>

        <!-- Sub Case -->
        <div class="col-md-6 col-lg-4 mt-3" id="subCaseWrapper">
          <div>
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


        <div class="col-md-6 col-lg-4 mt-3">
          <label for="input-label" class="form-label">Loan No</label>
          <select class="form-select">
            <option>Select Loan Number</option>
            <option value="1234/7">1234/7</option>
            <option value="1234/8">1234/8</option>
            <option value="1234/9">1234/9</option>
          </select>
        </div>


        <div class="col-md-6 col-lg-4 mt-4">
          <div class=" mt-3">
            <button class="btn btn-sm btn-primary me-2">
              <i class="ti ti-search"></i> Search
            </button>
          </div>
        </div>
      </div>

      <hr>

      <div class="row ">
        <div class="col-md-6 col-lg-4">
          <div class="mb-3">
            <label for="input-label" class="form-label">Customer Name</label>
            <input type="text" class="form-control" value="Customer Name">
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="mb-3">
            <label for="input-label" class="form-label">Description</label>
            <textarea name="" class="form-control" placeholder="Description" id=""></textarea>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="mb-3">
            <label for="input-label" class="form-label">Reply Notice Date</label>
            <input type="date" class="form-control">
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Attachment</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple="">
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-12 text-end">
          <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
          <a href="#" class="btn btn-sm btn-primary me-2">Create</a>
        </div>
      </div>

    </div>
  </div>

</div>


<script>
  document.addEventListener("DOMContentLoaded", function () {

    const legalType = document.getElementById("legalType");

    const noticeType = document.getElementById("noticeTypeWrapper");
    const caseType = document.getElementById("caseTypeWrapper");
    const subCase = document.getElementById("subCaseWrapper");

    const caseTypeSelect = caseType.querySelector("select");
    const subcaseSelects = subCase.querySelectorAll(".subcase-create");

    function toggleFields() {
      const val = legalType.value;

      if (val === "Notice") {

        // show only notice
        noticeType.style.display = "";
        caseType.style.display = "none";
        subCase.style.display = "none";

      } else if (val === "Case") {

        // show case + subcase
        noticeType.style.display = "none";
        caseType.style.display = "";
        subCase.style.display = "";

        updateSubCase();

      } else {
        // hide all
        noticeType.style.display = "none";
        caseType.style.display = "none";
        subCase.style.display = "none";
      }
    }

    function updateSubCase() {
      const val = caseTypeSelect.value;

      subcaseSelects.forEach(sel => sel.classList.add("d-none"));

      const target = subCase.querySelector(`.subcase-create[data-type="${val}"]`);

      if (target) {
        target.classList.remove("d-none");
      } else {
        subCase.querySelector('.subcase-create[data-type="default"]').classList.remove("d-none");
      }
    }

    legalType.addEventListener("change", toggleFields);
    caseTypeSelect.addEventListener("change", updateSubCase);

    toggleFields();
  });
</script>
<?php include 'footer.php'; ?>
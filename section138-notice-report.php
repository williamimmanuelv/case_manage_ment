<?php include 'header.php'; ?>


<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
  <div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Litigation - By Case</a></li>
        <li class="breadcrumb-item active">
          Sec 138 of NI Act Notice Report
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
        <h5 class="card-title">Sec 138 of NI Act Notice Report</h5>
        <div>
          <a href="section138-notice-creation.php" class="btn btn-primary btn-sm">
            <i class="ti ti-plus me-2"></i> Add
          </a>
        </div>
      </div>
      <div class="card-body">

        <ul class="nav nav-tabs nav-justified nav-bordered nav-bordered-success mb-3">
          <li class="nav-item">
            <a data-bs-toggle="tab" href="#pending" aria-expanded="false" class="nav-link active">
              <span class="d-md-inline-block">Notice (2)</span>
            </a>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="tab" href="#Draft" aria-expanded="true" class="nav-link ">
              <span class="d-md-inline-block">Draft (3)</span>
            </a>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="tab" href="#Close" aria-expanded="false" class="nav-link">
              <span class="d-md-inline-block">Close (5)</span>
            </a>
          </li>
        </ul>

        <!-- <ul class="nav nav-tabs mb-3" id="caseTabs" role="tablist">

          <li class="nav-item" role="tab">
            <a class="nav-link active d-flex align-items-center" data-bs-toggle="tab" href="#pending">
              <i class="ti ti-sort-descending-2 me-2"></i> Notice (2)
            </a>
          </li>

          <li class="nav-item" role="tab">
            <a class="nav-link d-flex align-items-center" data-bs-toggle="tab" href="#Draft">
              <i class="ti ti-folder-exclamation me-2"></i> Draft (3)
            </a>
          </li>


          <li class="nav-item" role="tab">
            <a class="nav-link d-flex align-items-center" data-bs-toggle="tab" href="#Close">
              <i class="ti ti-folder-exclamation me-2"></i> Close (5)
            </a>
          </li>


        </ul> -->



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
                    <th>Cheque Amount</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>17-02-2026</td>
                    <td>32 Days</td>
                    <td>AL-00231</td>
                    <td>By Case</td>
                    <td>Sec 138 of NI Act</td>
                    <td>CUS1025</td>
                    <td>LNAB5A57</td>
                    <td>Car Loan</td>
                    <td>Ramesh Kumar</td>
                    <td>₹ 1,25,000</td>
                    <td>
                      <button class="btn btn-sm btn-primary "
                        style="color: #cda85d !important; background-color: transparent;" data-bs-toggle="offcanvas"
                        data-bs-target="#editProduct">
                        <i class="ti ti-edit"></i>
                      </button>

                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="tab-pane fade " id="Draft">
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
                    <th>Cheque Amount</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>17-02-2026</td>
                    <td>32 Days</td>
                    <td>AL-00231</td>
                    <td>By Case</td>
                    <td>Sec 138 of NI Act</td>
                    <td>CUS1025</td>
                    <td></td>
                    <td>Car Loan</td>
                    <td>Ramesh Kumar</td>
                    <td>₹ 1,25,000</td>
                    <td>
                      <button class="btn btn-sm btn-primary "
                        style="color: #cda85d !important; background-color: transparent;" data-bs-toggle="offcanvas"
                        data-bs-target="#editProduct">
                        <i class="ti ti-edit"></i>
                      </button>

                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="tab-pane fade" id="Close">
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
                    <th>Cheque Amount</th>
                    <th>Reason</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>10-12-2025</td>
                    <td>100 Days</td>
                    <td>AL-00231</td>
                    <td>By Case</td>
                    <td>Sec 138 of NI Act</td>
                    <td>CUS1025</td>
                    <td>LNAB5A57</td>
                    <td>Car Loan</td>
                    <td>Ramesh Kumar</td>
                    <td>₹ 1,25,000</td>
                    <td>Above 90 Days</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>


      </div>
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>
<!-- end row -->

<!-- Upload Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="creationModalLabel">Notice Upload</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label for="cnr" class="form-label">Allocation No</label>
                <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                  <option value="">Select Allocation No</option>
                  <option value="Allot001">Allot001</option>
                  <option value="Allot002">Allot002</option>
                  <option value="Allot003">Allot003</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label">Case Type</label>
                <select class="form-select" id="caseType_edit">
                  <option value="">Select</option>
                  <option value="CivilCase">By Case</option>
                  <option value="CriminalCase">Criminal Case</option>
                  <option value="ArbitrationCase">By Case</option>
                  <option value="SarfaesiCase">Sarfaesi Case</option>
                  <option value="DRTCase">DRT Case</option>
                  <option value="NACLTCase">NACLT Case</option>
                  <option value="ConsumerCase">Consumer Case</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">

              <!-- Sub Case -->
              <div class="mb-3">
                <label class="form-label">Sub Case Type</label>

                <select class="form-select subcase-edit" data-type="default">
                  <option value="">Select</option>
                </select>

                <select class="form-select subcase-edit d-none" data-type="CivilCase">
                  <option value="">Select</option>
                  <option value="civil-suit">Civil Suit</option>
                  <option value="summary-suit">Summary Suit</option>
                  <option value="against-case">Against Case</option>
                  <option value="ep">EP</option>
                  <option value="insolvency-petition">Insolvency Petition</option>
                </select>

                <select class="form-select subcase-edit d-none" data-type="CriminalCase">
                  <option value="">Select</option>
                  <option value="section-138">Sec 138 of NI Act</option>
                  <option value="section-25">Section 25</option>
                  <option value="section-406">Section 406,420</option>
                  <option value="return-of-property">Return Of Property</option>
                  <option value="bail">Bail</option>
                  <option value="anticipatory-bail">Anticipatory Bail</option>
                  <option value="sec-156">Sec 156 (3)</option>
                  <option value="quash-petition">Quash Petition</option>
                </select>

                <select class="form-select subcase-edit d-none" data-type="ArbitrationCase">
                  <option value="">Select</option>
                  <option value="Section21">Section 21</option>
                  <option value="Section11">Section 11</option>
                  <option value="Section17">Sec 138 of NI Act</option>
                  <option value="Section34">Section 34</option>
                  <option value="EP">EP</option>
                </select>

                <select class="form-select subcase-edit d-none" data-type="SarfaesiCase">
                  <option value="">Select</option>
                  <option value="Section13-2">Section 13 (2)</option>
                  <option value="Section13-4">Section 13 (4)</option>
                  <option value="Section14">Section 14</option>
                </select>

                <select class="form-select subcase-edit d-none" data-type="DRTCase">
                  <option value="">Select</option>
                  <option value="Section18">Section 18</option>
                  <option value="Section19">Section 19</option>
                  <option value="Writ">Writ</option>
                </select>

                <select class="form-select subcase-edit d-none" data-type="NACLTCase">
                  <option value="">Select</option>
                </select>

                <select class="form-select subcase-edit d-none" data-type="ConsumerCase">
                  <option value="">Select</option>
                  <option value="DistrictCase">District Case</option>
                  <option value="StateCase">State Case</option>
                  <option value="EP">EP</option>
                  <option value="NationalCase">National Case</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">

              <div class="mb-3">
                <label class="form-label">Upload Notice</label>
                <input type="file" class="form-control">
              </div>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success"><i class="ti ti-upload me-1"></i> Upload</button>
      </div>
    </div>
  </div>
</div>

<!-- Download Modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="editModalLabel">Notice Download</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label for="cnr" class="form-label">Allocation No</label>
                <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                  <option value="">Select Allocation No</option>
                  <option value="Allot001">Allot001</option>
                  <option value="Allot002">Allot002</option>
                  <option value="Allot003">Allot003</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label">Case Type</label>
                <select class="form-select" id="caseType_download">
                  <option value="">Select</option>
                  <option value="CivilCase">By Case</option>
                  <option value="CriminalCase">Criminal Case</option>
                  <option value="ArbitrationCase">By Case</option>
                  <option value="SarfaesiCase">Sarfaesi Case</option>
                  <option value="DRTCase">DRT Case</option>
                  <option value="NACLTCase">NACLT Case</option>
                  <option value="ConsumerCase">Consumer Case</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">

              <!-- Sub Case -->
              <div class="mb-3">
                <label class="form-label">Sub Case Type</label>

                <select class="form-select subcase-download" data-type="default">
                  <option value="">Select</option>
                </select>

                <select class="form-select subcase-download d-none" data-type="CivilCase">
                  <option value="">Select</option>
                  <option value="civil-suit">Civil Suit</option>
                  <option value="summary-suit">Summary Suit</option>
                  <option value="against-case">Against Case</option>
                  <option value="ep">EP</option>
                  <option value="insolvency-petition">Insolvency Petition</option>
                </select>

                <select class="form-select subcase-download d-none" data-type="CriminalCase">
                  <option value="">Select</option>
                  <option value="section-138">Sec 138 of NI Act</option>
                  <option value="section-25">Section 25</option>
                  <option value="section-406">Section 406,420</option>
                  <option value="return-of-property">Return Of Property</option>
                  <option value="bail">Bail</option>
                  <option value="anticipatory-bail">Anticipatory Bail</option>
                  <option value="sec-156">Sec 156 (3)</option>
                  <option value="quash-petition">Quash Petition</option>
                </select>

                <select class="form-select subcase-download d-none" data-type="ArbitrationCase">
                  <option value="">Select</option>
                  <option value="Section21">Section 21</option>
                  <option value="Section11">Section 11</option>
                  <option value="Section17">Sec 138 of NI Act</option>
                  <option value="Section34">Section 34</option>
                  <option value="EP">EP</option>
                </select>

                <select class="form-select subcase-download d-none" data-type="SarfaesiCase">
                  <option value="">Select</option>
                  <option value="Section13-2">Section 13 (2)</option>
                  <option value="Section13-4">Section 13 (4)</option>
                  <option value="Section14">Section 14</option>
                </select>

                <select class="form-select subcase-download d-none" data-type="DRTCase">
                  <option value="">Select</option>
                  <option value="Section18">Section 18</option>
                  <option value="Section19">Section 19</option>
                  <option value="Writ">Writ</option>
                </select>

                <select class="form-select subcase-download d-none" data-type="NACLTCase">
                  <option value="">Select</option>
                </select>

                <select class="form-select subcase-download d-none" data-type="ConsumerCase">
                  <option value="">Select</option>
                  <option value="DistrictCase">District Case</option>
                  <option value="StateCase">State Case</option>
                  <option value="EP">EP</option>
                  <option value="NationalCase">National Case</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 mt-3">

              <div class="mb-3 d-flex align-items-center justify-content-center">
                <p class="mb-0">Download Notice</p>
                <button class="btn btn-primary btn-sm ms-3">
                  <i class="ti ti-download"></i>
                </button>
              </div>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <!-- <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Save File</button> -->
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    const triggerTabList = [].slice.call(document.querySelectorAll('#concTabs a')); // FIXED

    function getActiveTabIndex() {
      return triggerTabList.findIndex(tab => tab.classList.contains('active'));
    }

    document.querySelectorAll('.next-tab').forEach(btn => {
      btn.addEventListener('click', () => {
        let activeIndex = getActiveTabIndex();
        if (activeIndex < triggerTabList.length - 1) {
          new bootstrap.Tab(triggerTabList[activeIndex + 1]).show();
        }
      });
    });

    document.querySelectorAll('.prev-tab').forEach(btn => {
      btn.addEventListener('click', () => {
        let activeIndex = getActiveTabIndex();
        if (activeIndex > 0) {
          new bootstrap.Tab(triggerTabList[activeIndex - 1]).show();
        }
      });
    });

  });
</script>

<script>
  document.querySelectorAll(".dropdown-check-list").forEach(function (list) {
    var anchor = list.querySelector(".anchor");
    anchor.addEventListener("click", function () {
      list.classList.toggle("visible");
    });
  });
</script>

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
    setupModal("caseType_download", "subcase-download");

  });
</script>

<script>
  const otpRadio = document.getElementById("rad1");
  const unameRadio = document.getElementById("rad2");
  const otpTab = document.getElementById("otpTab");
  const unameTab = document.getElementById("unameTab");

  function updateTabs() {
    if (otpRadio.checked) {
      otpTab.classList.add("active");
      unameTab.classList.remove("active");
    } else if (unameRadio.checked) {
      unameTab.classList.add("active");
      otpTab.classList.remove("active");
    }
  }

  // Listen for radio button changes
  otpRadio.addEventListener("change", updateTabs);
  unameRadio.addEventListener("change", updateTabs);

  // Initialize correct tab on load
  updateTabs();
</script>


<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>



<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center ">
        <h5 class="card-title">Digital Creation</h5>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-md-3 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Loan No</label>
              <select class="form-select">
                <option value="">Select Loan Number</option>
                <option>34567890</option>
                <option>86585788</option>
                <option>85658578</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Case No</label>
              <select class="form-select">
                <option value="">Select Case Number</option>
                <option>34567890</option>
                <option>86585788</option>
                <option>85658578</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Template Name</label>
              <select class="form-select">
                <option value="">Select Template Name</option>
                <option>Template Name 1</option>
                <option>Template Name 2</option>
                <option>Template Name 3</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Digital Type</label>
              <select class="form-select" multiple data-choices data-choices-removeItem>
                <option selected value="">Select</option>
                <option value="Whatsapp">Whatsapp</option>
                <option value="SMS">SMS</option>
                <option value="E-Mail">E-Mail</option>
              </select>
            </div>
          </div>

          <div class="col-md-3 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Sender Type</label>
              <select class="form-select">
                <option value="">Select</option>
                <option value="demo@gmail.com">demo@gmail.com</option>
                <option value="9876543210">9876543210</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-lg-4 my-auto">
            <button class="btn btn-sm btn-primary me-2">
              <i class="ti ti-search"></i> Search
            </button>
          </div>
        </div>

        <!-- Report List -->
        <div class="table-responsive">
          <table class="table table-nowrap table-bordered datatable">
            <thead class="table-light">
              <tr>
                <th>S.No</th>
                <th>Send Via</th>
                <th>Receiver Type</th>
                <th>Name Of The Customer</th>
                <th>Type Of Doc</th>
                <th>Send To</th>
                <th>Attempt</th>
                <th>Date Of Dispatch</th>
                <th>Status</th>
                <th>Delivery Date</th>
                <th>Documents</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Whatsapp</td>
                <td>Customer</td>
                <td>Customer 1</td>
                <td>Claim Petition</td>
                <td>Customer</td>
                <td>Attempt 1</td>
                <td>15-11-2025</td>
                <td>Delivered</td>
                <td>15-11-2025</td>
                <td>
                  <button class="btn btn-primary btn-sm">
                    <i class="ti ti-download"></i>
                  </button>
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
                <label class="form-label">Case Type</label>
                <select class="form-select" id="caseType_edit">
                  <option value="">Select</option>
                  <option value="CivilCase">Civil Case</option>
                  <option value="CriminalCase">Criminal Case</option>
                  <option value="ArbitrationCase">Arbitration Case</option>
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
                  <option value="section-138">Section 138</option>
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
                  <option value="Section17">Section 17</option>
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
                <label class="form-label">Case Type</label>
                <select class="form-select" id="caseType_download">
                  <option value="">Select</option>
                  <option value="CivilCase">Civil Case</option>
                  <option value="CriminalCase">Criminal Case</option>
                  <option value="ArbitrationCase">Arbitration Case</option>
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
                  <option value="section-138">Section 138</option>
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
                  <option value="Section17">Section 17</option>
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
  document.querySelectorAll(".dropdown-check-list").forEach(function(list) {
    var anchor = list.querySelector(".anchor");
    anchor.addEventListener("click", function() {
      list.classList.toggle("visible");
    });
  });
</script>

<script>
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
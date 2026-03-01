<?php include 'header.php'; ?>



<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Mediation Notice</h5>
        <div>
          <a href="mediation-notice-creation.php" class="btn btn-primary btn-sm">
            <i class="ti ti-plus"></i>
          </a>
        </div>
      </div>
      <div class="card-body">
        <div class="row align-items-center ">

          <div class="col-md-6 col-lg-4">
            <div class="mb-0">
              <label class="form-label">Select Filter</label>
              <div id="list1" class="dropdown-check-list" tabindex="100">
                <span class="anchor form-control">Select Filter</span>
                <ul class="items">
                  <li><input type="checkbox" class="form-check-input me-2" /> Loan Number</li>
                  <li><input type="checkbox" class="form-check-input me-2" /> AAN Number</li>
                  <li><input type="checkbox" class="form-check-input me-2" /> Zone</li>
                  <li><input type="checkbox" class="form-check-input me-2" /> Product</li>
                  <li><input type="checkbox" class="form-check-input me-2" /> Customer Name</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-4 col-lg-4">
            <button class="btn btn-sm btn-primary me-2">
              <i class="ti ti-search"></i> Search
            </button>
          </div>


        </div>
        <hr>
        <div class="table-responsive mt-3">
          <table class="table table-nowrap datatable table-bordered">
            <thead>
              <tr>
                <th>Reference Number</th>
                <th>Name</th>
                <th>Venue</th>
                <th>Time</th>
                <th>Date</th>
                <th>Product</th>
                <th>Outstanding Amount</th>
                <th>Zone</th>
                <th>State</th>
                <th>District</th>

                <th>Customer Name</th>
                <th>Father Name</th>
                <th>Address 1</th>
                <th>Address 2</th>
                <th>Address 3</th>
                <th>Customer Mobile No</th>
                <th>Customer Email</th>

                <th>Co Applicant Name</th>
                <th>Co Applicant Address</th>
                <th>Co Applicant Mobile No</th>
                <th>Co Applicant Email</th>

                <th>Guarantor Name</th>
                <th>Guarantor Address</th>
                <th>Guarantor Mobile No</th>
                <th>Guarantor Email</th>

                <th>Co-Guarantor Name</th>
                <th>Co-Guarantor Address</th>
                <th>Co-Guarantor Mobile No</th>
                <th>Co-Guarantor Email</th>

                <th>Loan No</th>
                <th>Applicant Status</th>
                <th>AAN No</th>
                <th>Amount Financed</th>
                <th>Disbursal Date</th>
                <th>EMI Amount</th>
                <th>No of EMI</th>
                <th>Rate of Interest</th>
                <th>Register Number</th>
                <th>Engine Number</th>
                <th>Chassis Number</th>
                <th>Notice Balance</th>
                <th>Balance As On Date</th>
                <th>Vehicle Model</th>
                <th>Date 1</th>
                <th>Date 2</th>
                <th>Date 3</th>
                <th>Date 4</th>
                <th>RL Number</th>

                <th>Data 1</th>
                <th>Data 2</th>
                <th>Data 3</th>
                <th>Data 4</th>
                <th>Data 5</th>
                <th>Data 6</th>
                <th>Data 7</th>
                <th>Data 8</th>
                <th>Data 9</th>
                <th>Data 10</th>
              </tr>

            </thead>
            <tbody>
              <tr>
                <td>REF10231</td>
                <td>Arun Kumar</td>
                <td>Chennai Office Hall</td>
                <td>10:00 AM</td>
                <td>2025-01-25</td>
                <td>Car, Two Wheeler</td>
                <td> ₹85,000 </td>
                <td>North</td>
                <td>Tamil Nadu</td>
                <td>Chennai</td>

                <td>Ravi Prakash</td>
                <td>Mohan</td>
                <td>12, First Street</td>
                <td>Anna Nagar</td>
                <td>Chennai – 40</td>
                <td>9876543210</td>
                <td>ravi@testmail.com</td>

                <td>Sathish Kumar</td>
                <td>Coimbatore</td>
                <td>9876512340</td>
                <td>coapp@testmail.com</td>

                <td>Manoj Kumar</td>
                <td>Salem</td>
                <td>9876509876</td>
                <td>guarantor@mail.com</td>

                <td>Karthick</td>
                <td>Madurai</td>
                <td>9876598765</td>
                <td>coguar@mail.com</td>

                <td>LN556677</td>
                <td>Active</td>
                <td>AAN12345</td>
                <td> ₹4,50,000 </td>
                <td>2025-01-01</td>
                <td> ₹12,500 </td>
                <td>36</td>
                <td>9.5%</td>
                <td>TN01AB1234</td>
                <td>ENG554433</td>
                <td>CHS998877</td>
                <td> ₹55,000 </td>
                <td>2025-01-20</td>
                <td>Swift VDI</td>
                <td>2025-02-01</td>
                <td>2025-03-01</td>
                <td>2025-04-01</td>
                <td>2025-05-01</td>
                <td>RL997755</td>

                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
                <td>Data 7</td>
                <td>Data 8</td>
                <td>Data 9</td>
                <td>Data 10</td>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="creationModalLabel">Notice Upload</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-6 ">
              <div class="mb-3">
                <label for="cnr" class="form-label">Allocation No</label>
                <input type="text" class="form-control" value="Allo001" />
              </div>
            </div>

            <div class="col-md-6">
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
            <div class="col-md-6">

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
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Mediation Notice Name</label>
                <input type="text" class="form-control" placeholder="Mediation Notice Name">
              </div>
            </div>

            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Mediation Notice Vendor</label>
                <input type="text" class="form-control" placeholder="Mediation Notice Vendor">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Mediation Notice Date</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="editModalLabel">Notice Download</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-6 ">
              <div class="mb-3">
                <label for="cnr" class="form-label">Allocation No</label>
                <input type="text" class="form-control" value="Allo001" />
              </div>
            </div>
            <div class="col-md-6">
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
            <div class="col-md-6">

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
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Mediation Notice Name</label>
                <input type="text" class="form-control" placeholder="Mediation Notice Name">
              </div>
            </div>

            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Mediation Notice Vendor</label>
                <input type="text" class="form-control" placeholder="Mediation Notice Vendor">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Mediation Notice Date</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="col-md-6 mt-4">

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
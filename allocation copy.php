<?php include 'header.php'; ?>


<div class="row">
  <div class="col-md-8 mx-auto">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">New Allotment</h5>
      </div>
      <div class="card-body">
        <form action="#">
          <div class="row align-items-center">
            <!-- ID -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">ID</label>
            </div>
            <div class="col-lg-8 mb-3">
              <input type="text" class="form-control" placeholder="ID">
            </div>

            <!-- Legal Type -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Legal Type <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <select class="form-select">
                <option>Select</option>
                <option value="Case">Case</option>
                <option value="Sarfaesi Case">Sarfaesi Case</option>
                <option value="Notice">Notice</option>
              </select>
            </div>

            <!-- Type -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Type <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <select class="form-select">
                <option>Select</option>
                <option value="Agent">Agent</option>
                <option value="Advocate">Advocate</option>
              </select>
            </div>

            <!-- Title -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Title</label>
            </div>
            <div class="col-lg-8 mb-3">
              <input type="text" class="form-control" placeholder="Title">
            </div>

            <!-- Number of Case -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Number Of Case <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <input type="text" class="form-control" placeholder="Number Of Case">
            </div>

            <!-- Fee -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Fee <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <div class="mt-1">
                <div class="form-check form-check-inline">
                  <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                  <label class="form-check-label" for="customRadio2">Standard</label>
                </div>
                <div class="form-check mb-1 form-check-inline">
                  <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                  <label class="form-check-label" for="customRadio1">Optional</label>
                </div>
              </div>
            </div>

            <!-- Cost Per Notice  -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Cost Per Notice <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <input type="text" class="form-control" placeholder="Cost Per Notice ">
            </div>

            <!-- Notice Type -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Notice Type <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <select class="form-select">
                <option>Select</option>
                <option value="1">Normal Notice</option>
                <option value="2">Concilliation Notice</option>
                <option value="3">Lok Adalt Notice</option>
                <option value="4">Mediation Notice</option>
              </select>
            </div>

            <!-- Mode Of Notice -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Mode Of Notice</label>
            </div>
            <div class="col-lg-8 mb-3">
              <select class="form-control" multiple data-choices data-choices-removeItem>
                <option selected>Select</option>
                <option value="E-mail">E-mail</option>
                <option value="SMS">SMS</option>
                <option value="Whatsapp">Whatsapp</option>
                <option value="Speed Post">Speed Post</option>
              </select>
            </div>

            <!-- Notice Process Type -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Notice Process Type <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <select class="form-select">
                <option>Select</option>
                <option value="Only Notice">Only Notice</option>
                <option value="Convert to Case">Convert to Case</option>
              </select>
            </div>

            <!-- Case Type -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Case Type <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <select class="form-select" id="caseType_create">
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

            <!-- Sub Case Type -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Sub Case Type <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <select class="form-select subcase-create" data-type="default">
                <option value="">Select</option>
              </select>

              <select class="form-select subcase-create d-none" data-type="CivilCase">
                <option value="">Select</option>
                <option value="civil-suit">Civil Suit</option>
                <option value="summary-suit">Summary Suit</option>
                <option value="against-case">Against Case</option>
                <option value="ep">EP</option>
                <option value="insolvency-petition">Insolvency Petition</option>
              </select>

              <select class="form-select subcase-create d-none" data-type="CriminalCase">
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

              <select class="form-select subcase-create d-none" data-type="ArbitrationCase">
                <option value="">Select</option>
                <option value="Section21">Section 21</option>
                <option value="Section11">Section 11</option>
                <option value="Section17">Section 17</option>
                <option value="Section34">Section 34</option>
                <option value="EP">EP</option>
              </select>

              <select class="form-select subcase-create d-none" data-type="SarfaesiCase">
                <option value="">Select</option>
                <option value="Section13-2">Section 13 (2)</option>
                <option value="Section13-4">Section 13 (4)</option>
                <option value="Section14">Section 14</option>
              </select>

              <select class="form-select subcase-create d-none" data-type="DRTCase">
                <option value="">Select</option>
                <option value="Section18">Section 18</option>
                <option value="Section19">Section 19</option>
                <option value="Writ">Writ</option>
              </select>

              <select class="form-select subcase-create d-none" data-type="NACLTCase">
                <option value="">Select</option>
              </select>

              <select class="form-select subcase-create d-none" data-type="ConsumerCase">
                <option value="">Select</option>
                <option value="DistrictCase">District Case</option>
                <option value="StateCase">State Case</option>
                <option value="EP">EP</option>
                <option value="NationalCase">National Case</option>
              </select>
            </div>

            <!-- Product -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Product <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <select class="form-select">
                <option>Select</option>
                <option value="1">Car</option>
                <option value="2">Personal Loan</option>
              </select>
            </div>

            <!-- Advocate Name -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Advocate Name <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <select class="form-select">
                <option>Select</option>
                <option value="1">Advocate-one</option>
                <option value="2">Advocate-two</option>
                <option value="3">Advocate-three</option>
                <option value="4">Advocate-four</option>
              </select>
            </div>

            <!-- Act -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Act <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <select class="form-select">
                <option>Select</option>
                <option value="1">Act-one</option>
                <option value="2">Act-two</option>
                <option value="3">Act-three</option>
                <option value="4">Act-four</option>
              </select>
            </div>

            <!-- Act Sub Type -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Act Sub Type <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <select class="form-select">
                <option>Select</option>
                <option value="1">Act Sub Type One</option>
                <option value="2">Act Sub Type Two</option>
                <option value="3">Act Sub Type Three</option>
              </select>
            </div>

            <!-- Priority -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Priority</label>
            </div>
            <div class="col-lg-8 mb-3">
              <select class="form-select">
                <option>Select</option>
                <option value="1">High</option>
                <option value="2">Medium</option>
                <option value="3">Low</option>
              </select>
            </div>

            <!-- Number Of Days  -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Number Of Days <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <input class="form-control" type="text" placeholder="Number Of Days">
            </div>

            <!-- Allocation Date -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Allocation Date</label>
            </div>
            <div class="col-lg-8 mb-3">
              <input class="form-control" type="date">
            </div>

            <!-- Closing Date -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Closing Date</label>
            </div>
            <div class="col-lg-8 mb-3">
              <input class="form-control" type="date">
            </div>

            <!-- Description -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Description <span style="color:red;">*</span></label>
            </div>
            <div class="col-lg-8 mb-3">
              <textarea rows="4" class="form-control" placeholder="Enter Description"></textarea>
            </div>

            <!-- Attachment -->
            <div class="col-lg-4 mb-3">
              <label class="col-form-label">Attachment</label>
            </div>
            <div class="col-lg-8 mb-3">
              <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
          </div>

          <!-- Buttons -->
          <div class="text-end">
            <a href="#" class="btn btn-primary">Create</a>
            <a href="#" class="btn btn-cancle">Cancel</a>
          </div>
        </form>


      </div> <!-- end card-body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>

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

  });
</script>

<?php include 'footer.php'; ?>
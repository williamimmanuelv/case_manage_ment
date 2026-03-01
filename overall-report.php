<?php include 'header.php'; ?>

<style>
  .filter-field {
    display: none;
  }

  .dropdown-check-list {
    position: relative;
  }

  .dropdown-check-list .items {
    display: none;
    position: absolute;
    background: #fff;
    border: 1px solid #ddd;
    width: 100%;
    z-index: 999;
    max-height: 220px;
    overflow-y: auto;
    padding: 10px;
  }

  .dropdown-check-list.visible .items {
    display: block;
  }

  .dropdown-check-list .items li {
    list-style: none;
    padding: 6px 4px;
  }

  /* accordian for search */

  .toggle-icon::before {
    content: "+";
    font-size: 16px;
    transition: 0.2s ease;
  }

  button[aria-expanded="true"] .toggle-icon::before {
    content: "-";
  }
</style>


<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
  <div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-2 p-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Report</a></li>
        <li class="breadcrumb-item active">
          Overall Report
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
        <h5 class="card-title">Overall Report</h5>
        <div class="d-flex gap-2 ">


          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse"
            data-bs-target="#postalBulkAccordion" aria-expanded="false" aria-controls="postalBulkAccordion">

            <i class="ti ti-filter me-2"></i> Filter

            <!-- <span class="toggle-icon"></span> -->
          </button>
        </div>
      </div>
      <div class="collapse" id="postalBulkAccordion">

        <div class="container" style="padding: 20px 20px 0px 20px;">
          <div class="row align-items-center">

            <!-- Loan No -->
            <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
              <div class="col-lg-4 w-auto">
                <label class="form-label">Loan No</label>
                <textarea class="form-control" rows="2" placeholder="Loan No"></textarea>
                <span class="mt-2">Maximum 1500 Data Can Be Searched</span>
              </div>
            </div>

            <!-- Product Name -->
            <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
              <div class="col-lg-4 w-auto">
                <label class="form-label">Product</label>
                <select class="form-select">
                  <option value="">Select</option>
                  <option value="Car">Car</option>
                  <option value="Bike">Bike</option>
                </select>
              </div>
            </div>


            <!-- case type -->
            <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
              <div class="col-lg-4 w-auto">
                <label for="cnr" class="form-label">Case Type</label>
                <select class="form-select" id="caseType_create">
                  <option value="">Select</option>
                  <option value="Case">Litigation By Case</option>
                  <option value="Arbitration Case">Litigation Against Case</option>
                  <option value="Sarfaesi Case">Litigation Case EP</option>
                </select>
              </div>
            </div>



            <!-- case sub type -->
            <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
              <div class="col-lg-4 w-auto">

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



            <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
              <div class="mb-2">
                <label class="form-label">Select Filter</label>
                <div id="list1" class="dropdown-check-list" tabindex="100">
                  <span class="anchor form-control">Select Filter</span>
                  <ul class="items">
                    <li><input type="checkbox" class="form-check-input me-2" data-target="filter-allocation"> Allocation
                      No</li>
                    <li><input type="checkbox" class="form-check-input me-2" data-target="filter-loan"> Loan Number</li>
                    <li><input type="checkbox" class="form-check-input me-2" data-target="filter-product"> Product Name
                    </li>
                    <li><input type="checkbox" class="form-check-input me-2" data-target="filter-casetype"> Case Type
                    </li>
                    <li><input type="checkbox" class="form-check-input me-2" data-target="filter-subcase"> Sub Case Type
                    </li>
                    <li><input type="checkbox" class="form-check-input me-2" data-target="filter-court"> Court name</li>
                    <li><input type="checkbox" class="form-check-input me-2" data-target="filter-start"> Start Date</li>
                    <li><input type="checkbox" class="form-check-input me-2" data-target="filter-end"> End Date</li>
                    <li><input type="checkbox" class="form-check-input me-2" data-target="filter-caseno"> Case No</li>
                    <li><input type="checkbox" class="form-check-input me-2" data-target="filter-status"> Case status
                    </li>

                  </ul>
                </div>
              </div>
            </div>

            <!-- Allocation No -->
            <div class="col-md-6 col-lg-4  filter-field" id="filter-allocation">
              <div class="mb-2">
                <label class="form-label">Allocation No</label>
                <select class="form-select">
                  <option value="">Select Allocation No</option>
                  <option>AID1001</option>
                  <option>AID1002</option>
                  <option>AID1003</option>
                  <option>AID1004</option>
                  <option>AID1005</option>
                </select>
              </div>
            </div>

            <!-- Loan No -->
            <div class="col-md-6 col-lg-4 filter-field" id="filter-loan">
              <div class="mb-2">
                <label class="form-label">Loan No</label>
                <textarea class="form-control" rows="2" placeholder="Loan No"></textarea>
                <span class="mt-2">Maximum 1500 Data Can Be Searched</span>
              </div>
            </div>

            <!-- Product Name -->
            <div class="col-md-6 col-lg-4  filter-field" id="filter-product">
              <div class="mb-2">
                <label class="form-label">Product Name</label>
                <select class="form-select">
                  <option value="">Select</option>
                  <option value="Car">Car</option>
                  <option value="Bike">Bike</option>
                </select>
              </div>
            </div>


            <div class="col-md-6 col-lg-4  filter-field" id="filter-casetype">
              <label for="cnr" class="form-label">Case Type</label>
              <select class="form-select" id="caseType_create">
                <option value="">Select</option>
                <option value="Case">Litigation By Case</option>
                <option value="Arbitration Case">Litigation Against Case</option>
                <option value="Sarfaesi Case">Litigation Case EP</option>
              </select>
            </div>

            <div class="col-md-6 col-lg-4  filter-field" id="filter-subcase">
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

            <!-- Court name -->
            <div class="col-md-6 col-lg-4  filter-field" id="filter-court">
              <div class="mb-2">
                <label class="form-label">Court name</label>
                <select class="form-select">
                  <option value="">Select</option>
                  <option value="District Court">District Court</option>
                  <option value="Supreme Court">Supreme Court</option>
                  <option value="High Court">High Court</option>
                  <option value="eJagriti Consumer Court">eJagriti Consumer Court</option>
                </select>
              </div>
            </div>

            <!-- Start date -->
            <div class="col-md-6 col-lg-4  filter-field" id="filter-start">
              <div class="mb-2">
                <label class="form-label">Start Date</label>
                <input type="date" class="form-control">
              </div>
            </div>

            <!-- End date -->
            <div class="col-md-6 col-lg-4  filter-field" id="filter-end">
              <div class="mb-2">
                <label class="form-label">End Date</label>
                <input type="date" class="form-control">
              </div>
            </div>

            <!-- Case no -->
            <div class="col-md-6 col-lg-4  filter-field" id="filter-caseno">
              <div class="mb-2">
                <label class="form-label">Case No</label>
                <input type="text" class="form-control" placeholder="Case no">
              </div>
            </div>

            <!-- Case status -->
            <div class="col-md-6 col-lg-4 filter-field" id="filter-status">
              <div class="mb-2">
                <label class="form-label">Case status</label>
                <input type="text" class="form-control" placeholder="Case status">
              </div>
            </div>

            <div class="col-md-12 col-lg-12 d-flex justify-content-end">
              <button class="btn btn-sm btn-primary me-2">
                <i class="ti ti-search me-2"></i> Search
              </button>
            </div>


          </div>
        </div>
      </div>

      <div class="card-body">

        <div class="table-responsive">
          <table class="table table-nowrap datatable table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Age</th>
                <th>Country</th>
                <th>State</th>
                <th>Zone</th>
                <th>District</th>
                <th>Branch</th>
                <th>Allocation</th>
                <th>Legal type</th>
                <th>Case type</th>
                <th>Sub case type</th>
                <th>Act</th>
                <th>Sub act</th>
                <th>Customer ID</th>
                <th>Sender type</th>
                <th>Customer name</th>
                <th>Loan number</th>
                <th>Product</th>
                <th>FC amount</th>
                <th>Sender address</th>
                <th>Date of dispatch</th>
                <th>Speed post no</th>
                <th>Date of dispatch</th>
                <th>Postal case status</th>
                <th>Court name</th>
                <th>Last hearing date</th>
                <th>Last hearing status</th>
                <th>Next hearing date</th>
                <th>Next hearing status</th>
                <th>Attachment name</th>
                <th>Attachment</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>35</td>
                <td>India</td>
                <td>Tamil Nadu</td>
                <td>South</td>
                <td>Chennai</td>
                <td>Egmore</td>
                <td>Allot001</td>
                <td>Notice</td>
                <td>Litigation By Case</td>
                <td>Section 138</td>
                <td>NI Act</td>
                <td>138 Negotiable Instrument</td>
                <td>CUST1001</td>
                <td>Applicant</td>
                <td>Ramesh Kumar</td>
                <td>LNAB5A57</td>
                <td>Car Loan</td>
                <td>125000</td>
                <td>12, Anna Nagar, Chennai</td>
                <td>10-02-2026</td>
                <td>SP123456789IN</td>
                <td>11-02-2026</td>
                <td>Delivered</td>
                <td>Chennai District Court</td>
                <td>20-02-2026</td>
                <td>Hearing Completed</td>
                <td>25-03-2026</td>
                <td>Pending</td>
                <td>Notice_Copy.pdf</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-secondary">
                    <i class="ti ti-download"></i>
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


<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-center text-white">
        <h5 class="modal-title" id="editModalLabel">Bulk Upload</h5>
        <div class="text-dark ms-auto">Download Sample <a href="#" class="btn btn-primary"> <i class="ti ti-download"
              style="font-size: 18px;"></i> </a></div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-12">
              <label class="form-label">Batch Name</label>
              <select class="form-select">
                <option>Batch</option>
                <option>Batch 1</option>
                <option>Batch 2</option>
                <option>Batch 3</option>
              </select>
            </div>
            <div class="col-md-12">
              <label class="form-label">Upload File</label>
              <input type="file" class="form-control">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save Changes</button>
      </div>
    </div>
  </div>
</div>



<script>
  // dropdown open/close
  document.querySelectorAll(".dropdown-check-list").forEach(function(list) {
    var anchor = list.querySelector(".anchor");
    anchor.addEventListener("click", function() {
      list.classList.toggle("visible");
    });
  });


  // show hide fields
  document.querySelectorAll('.dropdown-check-list input[type="checkbox"]').forEach(function(checkbox) {

    checkbox.addEventListener("change", function() {

      let targetId = this.getAttribute("data-target");
      let field = document.getElementById(targetId);

      if (!field) return;

      if (this.checked) {
        field.style.display = "block";
      } else {
        field.style.display = "none";
      }

    });

  });


  // close when clicking outside
  document.addEventListener("click", function(e) {
    document.querySelectorAll(".dropdown-check-list").forEach(function(list) {
      if (!list.contains(e.target)) {
        list.classList.remove("visible");
      }
    });
  });
</script>


<?php include 'footer.php'; ?>
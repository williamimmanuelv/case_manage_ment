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


    /* button */
    .menu {
        position: relative;
        display: flex;
        justify-content: center;
        border-radius: 5px;
        box-shadow: 0 10px 25px 0 rgba(#000, 0.075);
        padding: 2px;
    }

    .link {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 50px;
        height: 30px;
        border-radius: 5px;
        position: relative;
        z-index: 1;
        overflow: hidden;
        transform-origin: center left;
        transition: width 0.2s ease-in;
        text-decoration: none;
        color: inherit;


        &:before {
            position: absolute;
            z-index: -1;
            content: "";
            display: block;
            border-radius: 5px;
            width: 100%;
            height: 100%;
            top: 0;
            transform: translateX(100%);
            transition: transform 0.2s ease-in;
            transform-origin: center right;

            color: black !important;
        }

        &:hover,
        &:focus {
            outline: 0;
            width: 100px;
            border: none;
            color: black !important;

            &:before,
            .link-title {
                transform: translateX(0);
                opacity: 1;
            }
        }
    }

    .link-icon {
        display: block;
        flex-shrink: 0;
        left: 16px;
        position: absolute;
        color: black !important;


    }

    .link-title {
        transform: translateX(100%);
        transition: transform 0.2s ease-in;
        transform-origin: center right;
        display: block;
        text-align: center;
        text-indent: 25px;
        width: 100%;
        color: black !important;

    }
</style>

<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
    <div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2 p-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Report</a></li>
                <li class="breadcrumb-item active">
                    Case Reopen Report
                </li>
            </ol>
        </nav>
    </div>

</div> -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Case Reopen Report </h5>
                <div class="menu">

                    <a href="#" class="link">
                        <span class="link-icon">
                            <i class="ti ti-file-excel me-2"></i>
                        </span>
                        <span class="link-title">Excel</span>
                    </a>
                    <a href="#" class="link" data-bs-toggle="collapse" data-bs-target="#postalBulkAccordion"
                        aria-expanded="false" aria-controls="postalBulkAccordion">
                        <span class="link-icon">
                            <i class="ti ti-filter me-2"></i>
                        </span>
                        <span class="link-title">Filter</span>
                    </a>
                </div>
            </div>

            <div class="collapse" id="postalBulkAccordion">

                <div class="container" style="padding: 20px 20px 0px 20px;">
                    <div class="row align-items-center ">


                        <!-- <div class="row d-flex flex-column justify-content-around col-12 col-lg-4 mb-3">
                            <div class="col-lg-4 w-auto">
                                <label class="col-form-label">Legal Type</label>
                            </div>
                            <div class="ccol-lg-8 w-100">

                                <select class="form-select" id="example-select">
                                    <option>Case</option>
                                    <option>Notice</option>
                                </select>
                            </div>
                        </div> -->

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
                                        <li><input type="checkbox" class="form-check-input me-2"
                                                data-target="filter-allocation"> Allocation No</li>
                                        <!-- <li><input type="checkbox" class="form-check-input me-2"
                                                data-target="filter-loan"> Loan Number</li>
                                        <li><input type="checkbox" class="form-check-input me-2"
                                                data-target="filter-product"> Product Name</li>
                                        <li><input type="checkbox" class="form-check-input me-2"
                                                data-target="filter-casetype"> Case Type</li>
                                        <li><input type="checkbox" class="form-check-input me-2"
                                                data-target="filter-subcase"> Sub Case Type</li> -->
                                        <li><input type="checkbox" class="form-check-input me-2"
                                                data-target="filter-court"> Court name</li>
                                        <li><input type="checkbox" class="form-check-input me-2"
                                                data-target="filter-start"> Start Date</li>
                                        <li><input type="checkbox" class="form-check-input me-2"
                                                data-target="filter-end"> End Date</li>
                                        <li><input type="checkbox" class="form-check-input me-2"
                                                data-target="filter-caseno"> Case No</li>
                                        <li><input type="checkbox" class="form-check-input me-2"
                                                data-target="filter-status"> Case status</li>

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
                        <div class="col-md-6 col-lg-4  filter-field" id="filter-loan">
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
                                <option value="Sec 41 of Appeal to Consumer Court">Sec 41 of Appeal to Consumer
                                    Court</option>
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
                                <select class="form-select">
                                    <option value="">Select Case status</option>
                                    <option>Case Hold</option>
                                    <option>All Case</option>
                                    <option>Case Close</option>
                                </select>
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
                <div class="tab-content">
                    <!-- Single -->
                    <div id="otpTab" class="tab-pane active">

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
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>17-02-2026</td>
                                        <td>32 Days</td>
                                        <td>AL-00231</td>
                                        <td>By Case</td>
                                        <td>Cr-Se 156(3) Order</td>
                                        <td>CUS1025</td>
                                        <td>LNAB5A57</td>
                                        <td>Car Loan</td>
                                        <td>Ramesh Kumar</td>
                                        <td>Closed</td>

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
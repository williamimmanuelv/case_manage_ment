<?php include 'header.php'; ?>
<style>
    .nav-tabs .nav-link:hover {
        color: #022b50;
    }

    .btn-secondary {
        background-color: #022b50;
        color: #fff;
        border-color: unset;
    }

    .btn-success {
        background-color: #022b50;
        color: #fff;
        border-color: unset;
    }

    #caseTabs a.nav-link.disabled-like {
        pointer-events: none;
        opacity: 0.55;
        cursor: default;
    }

    .toggle-wrapper {
        position: relative;
        display: flex;
        width: 220px;
        background: #f1f1f1;
        border-radius: 50px;
        /* padding: 5px; */
    }

    .toggle-wrapper input {
        display: none;
    }

    .toggle-wrapper label {
        flex: 1;
        text-align: center;
        padding: 8px 0;
        cursor: pointer;
        z-index: 2;
        font-weight: 500;
        border-radius: 50px;
        transition: 0.3s;
    }

    .toggle-wrapper .slider {
        position: absolute;
        top: 5px;
        left: 5px;
        width: 50%;
        height: calc(100% - 10px);
        background: #cda85d;
        border-radius: 50px;
        transition: 0.3s;
    }

    /* Move slider when Bulk selected */
    #rad2:checked~.slider {
        left: 50%;
    }

    /* Active text color */
    #rad1:checked+label,
    #rad2:checked+label {
        color: white;
    }

    .cancelBtn {
        color: red !important;
    }

    .cancelBtn:hover {
        background-color: transparent !important;
        color: red !important;
    }
</style>


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Hearing Creation</h5>
                <!-- <div class="radio-btn mx-auto" style="display: flex; justify-content: center; gap: 60px;">
                    <div class="input-box" style="display: flex; align-items: center; gap: 10px;">
                        <input type="radio" id="rad1" name="loginType" value="otp" checked>
                        <h6 style="margin-bottom: unset;">Single</h6>
                    </div>
                    <div class="input-box" style="display: flex; align-items: center; gap: 10px;">
                        <input type="radio" id="rad2" name="loginType" value="uname">
                        <h6 style="margin-bottom: unset;">Bulk Upload</h6>
                    </div>
                </div> -->

                <div class="toggle-wrapper">
                    <input type="radio" name="uploadType" id="rad1" value="otp" checked>
                    <label for="rad1">Single</label>

                    <input type="radio" name="uploadType" id="rad2" value="uname">
                    <label for="rad2">Bulk Upload</label>

                    <span class="slider"></span>
                </div>


            </div>
            <div class="card-body">
                <div class="tab-content">
                    <!-- Single -->
                    <div id="otpTab" class="tab-pane active">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-3">
                                <label for="cnr" class="form-label">Case Type</label>
                                <select class="form-select" id="caseType_create">
                                    <option value="">Select</option>
                                    <option value="Case">Litigation By Case</option>
                                    <option value="Arbitration Case">Litigation Against Case</option>
                                    <option value="Sarfaesi Case">Litigation Case EP</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-3">
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
                            <div class="col-md-6 col-lg-3">
                                <label for="cnr" class="form-label">Loan Number</label>
                                <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                    <option value="">Select Loan No</option>
                                    <option value="Loan001">Loan001</option>
                                    <option value="Loan002">Loan002</option>
                                    <option value="Loan003">Loan003</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-lg-3 d-flex align-items-center mt-5">
                                <button class="btn btn-sm btn-primary me-2">
                                    <i class="ti ti-search me-1"></i> Search
                                </button>
                            </div>
                        </div>

                        <hr>

                        <div class="table-responsive">
                            <table class="table table-nowrap datatable table-bordered">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="chk_all"></th>
                                        <th>S.No</th>
                                        <th>Loan Number</th>
                                        <th>Customer Name</th>
                                        <th>Product</th>
                                        <th>Case No</th>
                                        <th>Court</th>
                                        <th>Last Hearing Date</th>
                                        <th>Last Hearing Status</th>
                                        <th>Next Hearing Date</th>
                                        <th>Next Hearing Status</th>
                                        <th>Remarks</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>1</td>
                                        <td>LN00012345</td>
                                        <td>Ravi Kumar</td>
                                        <td>Home Loan</td>
                                        <td>CN2025/001</td>
                                        <td>Chennai District Court</td>
                                        <td>18-12-2025</td>
                                        <td>Absence of Accused</td>
                                        <td>20-01-2026</td>
                                        <td>For Evidence</td>
                                        <td>Adjourned</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <hr>

                        <div class="row g-4 mt-3">
                            <div class="col-md-6 col-lg-4">
                                <label for="input-label" class="form-label">Purpose</label>
                                <select class="form-select">
                                    <option selected>Select Purpose</option>
                                    <option>Absence of Accused</option>
                                    <option>Absence of Complainant</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label for="input-date" class="form-label">Description</label>
                                <textarea name="" class="form-control" rows="2" placeholder="Description" id=""></textarea>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="input-label" class="form-label">Next Hearing Date</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <a href="" class="btn btn-sm btn-primary">Update</a>
                        </div>
                    </div>

                    <!-- Bulk-Upload -->
                    <div id="unameTab" class="tab-pane">
                        <div class="form-group">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <label for="cnr" class="form-label">Case Type</label>
                                    <select class="form-select" id="caseType_edit">
                                        <option value="">Select</option>
                                        <option value="Case">Litigation By Case</option>

                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <label class="form-label">Sub Case Type</label>

                                    <select class="form-select subcase-edit" data-type="default">
                                        <option value="">Select</option>
                                    </select>

                                    <select class="form-select subcase-edit d-none" data-type="Case">
                                        <option value="">Select</option>
                                        <option value="Arbitration Section 21">Section 138</option>
                                        <option value="Section 25">Section 25</option>
                                        <option value="Section 138">Arbitration Section 21</option>
                                    </select>

                                </div>
                                <div class="col-md-6 col-lg-3 insti-field d-none">
                                    <label class="form-label">Institution Name</label>
                                    <input type="text" class="form-control" placeholder="Institution Name">
                                </div>

                                <div class="col-md-6 col-lg-3 insti-field d-none">
                                    <label class="form-label">Arbitrator Name</label>
                                    <input type="text" class="form-control" placeholder="Arbitrator Name">
                                </div>

                                <div class="col-md-6 col-lg-3 court-field d-none">
                                    <label class="form-label">Court Name</label>
                                    <input type="text" class="form-control" placeholder="Court Name">
                                </div>
                                <div class="col-md-3 col-lg-3 mt-5" style="display: flex; align-items: center;">
                                    <button class="btn btn-sm btn-primary me-2">
                                        <i class="ti ti-search me-1"></i> Search
                                    </button>
                                </div>
                            </div>

                            <!-- <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label for="input-label" class="form-label">Product Name</label>
                                        <select class="form-select" multiple data-choices data-choices-removeItem>
                                            <option selected>Select</option>
                                            <option>Car</option>
                                            <option>Two Wheeler</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label for="input-label" class="form-label">Total No</label>
                                        <input type="text" class="form-control" placeholder="Total No" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label for="input-label" class="form-label">Court Name</label>
                                        <input type="text" class="form-control" placeholder="Court Name" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label for="input-label" class="form-label">Bank Name</label>
                                        <input type="text" class="form-control"
                                            placeholder="Bank Name" />
                                    </div>
                                </div>
                            </div> -->

                            <hr>
                            <div class="table-responsive">
                                <table class="table table-nowrap datatable table-bordered">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="chk_all"></th>
                                            <th>S.No</th>
                                            <th>Loan Number</th>
                                            <th>Customer Name</th>
                                            <th>Product</th>
                                            <th>Case No</th>
                                            <th>Court</th>
                                            <th>Last Hearing Date</th>
                                            <th>Last Hearing Status</th>
                                            <th>Next Hearing Date</th>
                                            <th>Next Hearing Status</th>
                                            <th>Remarks</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>1</td>
                                            <td>LN00012345</td>
                                            <td>Ravi Kumar</td>
                                            <td>Home Loan</td>
                                            <td>CN2025/001</td>
                                            <td>Chennai District Court</td>
                                            <td>18-12-2025</td>
                                            <td>Absence of Accused</td>
                                            <td>20-01-2026</td>
                                            <td>For Evidence</td>
                                            <td>Adjourned</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div class="row mt-3">
                                <div class="col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label for="input-date" class="form-label">Hearing Date</label>
                                        <input type="date" class="form-control" id="input-date">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label for="input-label" class="form-label">Status</label>
                                        <select class="form-select" id="case-type">
                                            <option value="">Select Case Status</option>
                                            <option value="Reference-Notice">Reference Notice</option>
                                            <option value="Sec-17-Order">Sec 17 Order</option>
                                            <option value="Award-Passed">Award Passed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label for="input-label" class="form-label">Remarks</label>
                                        <textarea name="" class="form-control" placeholder="Remarks" id=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-end">
                                    <a href="" class="btn btn-sm btn-primary">Update</a>
                                </div>
                            </div>
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

            function showSubcase(type) {
                subcaseBoxes.forEach(b => b.classList.add("d-none"));

                if (!type) {
                    defaultBox.classList.remove("d-none");
                    return;
                }

                const match = document.querySelector(`.${subcaseClass}[data-type="${type}"]`);
                if (match) match.classList.remove("d-none");
                else defaultBox.classList.remove("d-none");
            }

            caseTypeSelect.addEventListener("change", () => showSubcase(caseTypeSelect.value));
            showSubcase(caseTypeSelect.value);
        }

        // existing modal setup
        setupModal("caseType_create", "subcase-create");
        setupModal("caseType_edit", "subcase-edit");


        // ⭐ FIELD VISIBILITY BASED ON SUBCASE
        document.querySelectorAll(".subcase-edit").forEach(select => {

            select.addEventListener("change", function() {

                const value = this.value;

                const instiFields = document.querySelectorAll(".insti-field");
                const courtFields = document.querySelectorAll(".court-field");

                // hide all first
                instiFields.forEach(f => f.classList.add("d-none"));
                courtFields.forEach(f => f.classList.add("d-none"));

                if (value === "Section 138") {
                    instiFields.forEach(f => f.classList.remove("d-none"));
                } else if (value === "Section 25" || value === "Arbitration Section 21") {
                    courtFields.forEach(f => f.classList.remove("d-none"));
                }

            });

        });

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

<script>
    const caseNature = document.getElementById("example-select");
    const caseFields = document.querySelectorAll(".caseFields");

    caseNature.addEventListener("change", function() {
        if (this.value === "Appeal" || this.value === "Connect Case") {
            caseFields.forEach(field => field.classList.remove("d-none"));
        } else {
            caseFields.forEach(field => field.classList.add("d-none"));
        }
    });

    const caseType = document.getElementById("sub-case");
    const caseField = document.querySelectorAll(".caseField");

    caseType.addEventListener("change", function() {
        if (this.value === "ep") {
            caseField.forEach(field => field.classList.remove("d-none"));
        } else {
            caseField.forEach(field => field.classList.add("d-none"));
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const triggerTabList = [].slice.call(document.querySelectorAll('#caseTabs a'));

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

        if (caseField && !caseField.classList.contains('d-none')) {
            extraCol.classList.remove('d-none');
        } else {
            extraCol.classList.add('d-none');
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const caseTypeSelect = document.getElementById("case-type");
        const subCaseSelects = document.querySelectorAll("#sub-case");

        // Hide/show correct sub-case dropdown based on Case Type
        caseTypeSelect.addEventListener("change", function() {
            const selectedCase = this.value;

            subCaseSelects.forEach(select => {
                const caseValue = select.getAttribute("value");
                if (caseValue === selectedCase) {
                    select.classList.remove("d-none");
                } else {
                    select.classList.add("d-none");
                }
            });
        });

        // Hide all sub-case selects initially except the first one
        subCaseSelects.forEach((select, index) => {
            if (index !== 0) select.classList.add("d-none");
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        const caseTypeSelect = document.getElementById("case-types");
        const subCaseSelects = document.querySelectorAll("#sub-cases");

        // Hide/show correct sub-case dropdown based on Case Type
        caseTypeSelect.addEventListener("change", function() {
            const selectedCase = this.value;

            subCaseSelects.forEach(select => {
                const caseValue = select.getAttribute("value");
                if (caseValue === selectedCase) {
                    select.classList.remove("d-none");
                } else {
                    select.classList.add("d-none");
                }
            });
        });

        // Hide all sub-case selects initially except the first one
        subCaseSelects.forEach((select, index) => {
            if (index !== 0) select.classList.add("d-none");
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const subCaseSelects = document.querySelectorAll('#sub-case');

        subCaseSelects.forEach(select => {
            select.addEventListener('change', function() {
                const value = this.value;

                // Hide everything first
                document.querySelectorAll('.casebox').forEach(el => el.classList.add('d-none'));
                document.querySelectorAll('.caseField').forEach(el => el.classList.add('d-none'));

                const extraCol = document.querySelector('.extra-col');
                if (extraCol) extraCol.classList.add('d-none');

                // Show based on selected value
                if (value) {
                    // Show all elements matching selected value
                    document.querySelectorAll('.' + value).forEach(el => el.classList.remove('d-none'));

                    // If you only want to show .caseField when there are *no* .casebox for this value:
                    const hasCasebox = document.querySelectorAll('.casebox.' + value).length > 0;
                    if (!hasCasebox) {
                        document.querySelectorAll('.caseField.' + value).forEach(el => el.classList.remove('d-none'));
                    }

                    // Show extra column only if something is visible
                    const visibleBoxes = document.querySelectorAll('.' + value + ':not(.d-none)');
                    if (visibleBoxes.length > 0 && extraCol) {
                        extraCol.classList.remove('d-none');
                    }
                }
            });
        });
    });
</script>

<?php include 'footer.php'; ?>
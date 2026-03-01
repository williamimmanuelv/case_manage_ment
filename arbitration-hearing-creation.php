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
</style>


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Hearing Creation</h5>
                <div class="radio-btn mx-auto" style="display: flex; justify-content: center; gap: 60px;">
                    <div class="input-box" style="display: flex; align-items: center; gap: 10px;">
                        <input type="radio" id="rad1" name="loginType" value="otp" checked>
                        <h6 style="margin-bottom: unset;">Single</h6>
                    </div>
                    <div class="input-box" style="display: flex; align-items: center; gap: 10px;">
                        <input type="radio" id="rad2" name="loginType" value="uname">
                        <h6 style="margin-bottom: unset;">Bulk Upload</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <!-- Single -->
                    <div id="otpTab" class="tab-pane active">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4">
                                <label for="cnr" class="form-label">Loan Number</label>
                                <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                    <option value="">Select Loan No</option>
                                    <option value="Loan001">Loan001</option>
                                    <option value="Loan002">Loan002</option>
                                    <option value="Loan003">Loan003</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-4 mt-5">
                                <button class="btn btn-sm btn-primary me-2">
                                    <i class="ti ti-search"></i> Search
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
                                        <th>Last Hearing Date</th>
                                        <th>Purpose</th>
                                        <th>Next Hearing Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>1</td>
                                        <td>18-12-2025</td>
                                        <td>Absence of Accused</td>
                                        <td>18-12-2025</td>
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
                            <a href="" class="btn btn-primary">Update</a>
                        </div>

                    </div>

                    <!-- Bulk-Upload -->
                    <div id="unameTab" class="tab-pane">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Case Type</label>
                                        <select class="form-select" id="caseType_create">
                                            <option value="">Select</option>
                                            <option value="ArbitrationCase">Arbitration Case</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Sub Case Type</label>

                                        <select class="form-select subcase-create" data-type="default">
                                            <option value="">Select</option>
                                        </select>

                                        <select class="form-select subcase-create d-none" data-type="ArbitrationCase">
                                            <option value="">Select</option>
                                            <option value="Section21">Section 21</option>
                                            <option value="Section11">Section 11</option>
                                            <option value="Section17">Section 17</option>
                                            <option value="Section34">Section 34</option>
                                            <option value="EP">EP</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4" style="margin-top: 32px;">
                                    <button class="btn btn-sm btn-primary me-2">
                                        <i class="ti ti-search"></i> Search
                                    </button>
                                </div>

                            </div>
                            <div class="row">
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
                                <!-- <div class="col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label for="input-label" class="form-label">Manager Name</label>
                                        <input type="text" class="form-control"
                                            placeholder="Manager Name" />
                                    </div>
                                </div> -->
                            </div>

                            <hr>
                            <div class="table-responsive">
                                <table class="table table-nowrap datatable table-bordered">
                                    <thead>
                                        <tr>

                                            <th><input type="checkbox" class="form-check-input"></th>
                                            <th>S.No</th>
                                            <th>Loan No</th>
                                            <th>Filing Date</th>
                                            <th>SR Number</th>
                                            <th>Allocation Date</th>
                                            <th>Outstanding Amount</th>
                                            <th>Customer Name</th>
                                            <th>Case No</th>
                                            <th>Branch</th>
                                            <th>Claim Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td><input type="checkbox" class="form-check-input"></td>
                                            <td>1</td>
                                            <td>9876543210</td>
                                            <td>22-10-2025</td>
                                            <td>76543210</td>
                                            <td>26-10-2025</td>
                                            <td>6000</td>
                                            <td>Customer-one</td>
                                            <td>10</td>
                                            <td>Tamil Nadu</td>
                                            <td>6000</td>
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
                                    <a href="" class="btn btn-primary">Update</a>
                                    <a href="" class="btn btn-cancle">Close</a>
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
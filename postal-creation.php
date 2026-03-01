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

    #caseTabs a.nav-link.disabled-like {
        pointer-events: none;
        opacity: 0.55;
        cursor: default;
    }

    /* accordian for search */

    .toggle-icon::before {
        content: "+";
        font-size: 16px;
        transition: 0.2s ease;
    }

    button[aria-expanded="true"] .toggle-icon::before {
        content: "−";
    }
</style>


<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
    <div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Postal Details</a></li>
                <li class="breadcrumb-item active">
                    Postal Creation
                </li>
            </ol>
        </nav>
    </div>

</div> -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Postal Creation</h5>

                <!-- Accordion Trigger -->
                <button class="btn btn-primary btn-sm"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#postalAccordion"
                    aria-expanded="false"
                    aria-controls="postalAccordion">
                    <i class="ti ti-filter"></i> <span class="px-1">Filter </span>
                </button>




            </div>
            <!-- Accordion Content  -->
            <div class="collapse" id="postalAccordion">
                <div class="container" style="padding: 10px 20px 0px 20px;">

                    <div class="row align-items-center mb-3">

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

                        <div class="col-md-6 col-lg-4 mt-3">
                            <div class=" mt-3">
                                <button class="btn btn-sm btn-primary me-2">
                                    <i class="ti ti-search me-1"></i> Search
                                </button>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <div class="card-body">
                <div class="tab-content">
                    <!-- Single -->
                    <div id="otpTab" class="tab-pane active">
                        
                        <div class="table-responsive" style="height: 300px; border: 1px solid #e2e2e2;">
                            <table id="tbl_postal_create" class="display table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Sender</th>
                                        <th>Sender Name</th>
                                        <th>Address</th>

                                        <th>Dispatch Date</th>
                                        <th>case status Type</th>
                                        <th>Notice status Type</th>
                                        <th>Remark</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>

                            </table>
                        </div>

                        <div class="row align-items-center mt-3 g-4">

                            <div class="col-md-6 col-lg-4">
                                <label for="input-label" class="form-label">Sender</label>
                                <select class="form-select">
                                    <option value="">Select Sender</option>
                                    <option value="">Customer</option>
                                    <option value="">Co-Applicant</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label for="input-label" class="form-label">Sender Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Sender Name" />
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label for="input-label" class="form-label">Address</label>
                                <textarea name="" class="form-control" placeholder="Address" id=""></textarea>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label for="input-label" class="form-label">Postal Category</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    value="Speed Post" />
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label for="input-label" class="form-label">Dispatch Date</label>
                                <input type="date" class="form-control" />
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label for="input-label" class="form-label">Speed Post No</label>
                                <input type="text" class="form-control" placeholder="Speed Post No" />
                            </div>

                            <!-- Case Status -->
                            <div class="col-md-6 col-lg-4" id="caseStatusWrapper">
                                <label class="form-label">Case Status</label>
                                <select class="form-select ">
                                    <option>Select Case Status</option>
                                    <option>Sec 17 Order</option>
                                    <option>Second Hearing Notice</option>
                                </select>
                            </div>


                            <!-- <div class="col-md-6 col-lg-4" id="noticeTypeWrapper2">
                                <label class="form-label">Notice Type</label>
                                <select class="form-select ">
                                    <option>Select Notice Type</option>
                                    <option>ARB-LRN</option>
                                    <option>Asset Verification Notice</option>
                                </select>
                            </div> -->

                            <div class="col-md-6 col-lg-4">
                                <label for="input-label" class="form-label">Remarks</label>
                                <textarea name="" class="form-control" id="" placeholder="Remarks"></textarea>
                            </div>

                            <div class="col-md-6 col-lg-4 " style="margin-top: 2rem;">
                                <div class="mb">
                                    <a href="#" class="btn btn-primary"><i class="ti ti-plus"></i> </a>
                                </div>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-md-12 text-end">
                                <a href="" class="btn btn-sm btn-primary ">Create</a>
                                <a href="" class="btn btn-sm text-dark btn-outline-danger cancelBtn">Cancle</a>
                            </div>
                        </div>

                    </div>

                    <!-- Bulk-Upload -->
                    <div id="unameTab" class="tab-pane">
                        <div class="form-group">
                            <div class="text-end">
                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#creationModal">
                                    <i class="ti ti-plus"></i>
                                </button>
                                <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="ti ti-download"></i>
                                </button>
                            </div>


                            <div class="table-responsive">
                                <table class="table table-nowrap datatable table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Date</th>
                                            <th>Age</th>
                                            <th>Sender Type</th>
                                            <th>Sender Name</th>
                                            <th>Address</th>
                                            <th>Notice Type</th>
                                            <th>Speed Post No</th>
                                            <th>Delivered Status</th>
                                            <th>Delivered Date</th>
                                            <th>Delivered Attachment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>28-10-2025</td>
                                            <td>20 days</td>
                                            <td>Customer</td>
                                            <td>Sender 1</td>
                                            <td>Chennai</td>
                                            <td>Speed Post</td>
                                            <td>Post43221</td>
                                            <td>Delivered</td>
                                            <td>28-10-2025</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary me-2">
                                                    <i class="ti ti-download"></i>
                                                </button>
                                            </td>
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
</div>

<!-- Upload Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="creationModalLabel">Postal Upload</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Upload Postal</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary cancelBtn" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-sm btn-success"><i class="ti ti-upload me-1"></i> Upload</button>
            </div>
        </div>
    </div>
</div>

<!-- Download Modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="editModalLabel">Postal Download</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">

                        <div class="col-md-12 mt-3">

                            <div class="mb-3 d-flex align-items-center justify-content-center">
                                <p class="mb-0">Download Postal</p>
                                <button class="btn btn-primary btn-sm ms-3">
                                    <i class="ti ti-download"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <!-- <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Save File</button> -->
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

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const legalType = document.getElementById("legalType");

        // TOP
        const noticeType = document.getElementById("noticeTypeWrapper");
        const caseType = document.getElementById("caseTypeWrapper");
        const subCase = document.getElementById("subCaseWrapper");

        // BOTTOM
        const caseStatus = document.getElementById("caseStatusWrapper");
        const noticeType2 = document.getElementById("noticeTypeWrapper2");

        const caseTypeSelect = caseType.querySelector("select");
        const subcaseSelects = subCase.querySelectorAll(".subcase-create");

        function toggleFields() {
            const val = legalType.value;

            if (val === "Notice") {

                // show notice
                noticeType.style.display = "";
                noticeType2.style.display = "";

                // hide case
                caseType.style.display = "none";
                subCase.style.display = "none";
                caseStatus.style.display = "none";

            } else if (val === "Case") {

                // show case
                caseType.style.display = "";
                subCase.style.display = "";
                caseStatus.style.display = "";

                // hide notice
                noticeType.style.display = "none";
                noticeType2.style.display = "none";

                updateSubCase();
            } else {

                noticeType.style.display = "none";
                noticeType2.style.display = "none";
                caseType.style.display = "none";
                subCase.style.display = "none";
                caseStatus.style.display = "none";
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
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

    /* tab pagination  */
    .dataTables_length {
        padding-top: 0px !important;
        margin-bottom: 0px;
    }

    .dataTables_paginate {
        margin-top: 0% !important;
        padding-top: 0px !important;
    }


    .dataTables_filter {
        margin-bottom: 0px !important;
    }


    /* btn hover styles */

    /* button */
    .menu {

        background-color: transparent !important;
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
            color: #fff !important;
        }

        &:hover,
        &:focus {
            outline: 0;
            width: 100px;
            border: none;

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
        text-indent: 10px;
        width: 100%;
        color: black !important;

    }
</style>


<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
    <div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Postal Details</a></li>
                <li class="breadcrumb-item active">
                    Postal Bulk Upload
                </li>
            </ol>
        </nav>
    </div>

</div> -->


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Postal Bulk Upload </h5>
                <div class="radio-btn mx-auto" style="display: flex; justify-content: center; gap: 60px;">
                </div>

                <div class="menu">

                    <a href="#" class="link" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#postalBulkAccordion"
                        aria-expanded="false"
                        aria-controls="postalBulkAccordion">
                        <span class="link-icon">
                            <i class="ti ti-filter"></i>
                        </span>
                        <span class="link-title"> Filter </span>
                    </a>


                    <a href="#" class="link">
                        <span class="link-icon">
                            <i class="ti ti-download"></i>
                        </span>
                        <span class="link-title">Export</span>
                    </a>

                    <a href="#" class="link" data-bs-toggle="offcanvas" data-bs-target="#creationOffcanvas">
                        <span class="link-icon">
                            <i class="ti ti-plus"></i>
                        </span>
                        <span class="link-title">Add</span>
                    </a>


                </div>


            </div>

            <!-- accordion content search -->
            <div class="collapse" id="postalBulkAccordion">

                <div class="container" style="padding: 20px 20px 0px 20px;">

                    <div class="row align-items-center mb-3">

                        <div class="col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="txt_allotno" class="form-label">
                                    Allocation No <span style="color:red;">*</span>
                                </label>
                                <select class="form-select">
                                    <option value="">Select Allocation No</option>
                                    <option value="AID1001">AID1001</option>
                                    <option value="AID1003">AID1003</option>
                                    <option value="AID1004">AID1004</option>
                                    <option value="AID1005">AID1005</option>
                                </select>

                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mt-3">
                            <div>
                                <button class="btn btn-sm btn-primary me-2">
                                    <i class="ti ti-search me-1"></i> Search
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <!-- <div class="row align-items-center mb-3">

                    <div class="col-md-6 col-lg-4" data-select2-id="13">
                        <div class="mb-3" data-select2-id="12">
                            <label for="txt_allotno" class="form-label"> Allocation No<span style="color:red;">*</span> </label>
                            <select class="form-control select2 select2-hidden-accessible" id="txt_allotno" name="a_no" data-select2-id="txt_allotno" tabindex="-1" aria-hidden="true">
                                <option value="" data-select2-id="2">Select Allocation Id</option>
                                <option data-select2-id="22">AID1001</option>
                                <option data-select2-id="23">AID1003</option>
                                <option data-select2-id="24">AID1004</option>
                                <option data-select2-id="25">AID1005</option>
                                <option data-select2-id="26">AID1007</option>
                                <option data-select2-id="27">AID1008</option>
                                <option data-select2-id="28">AID1011</option>
                                <option data-select2-id="29">AID1013</option>
                                <option data-select2-id="30">AID1014</option>
                                <option data-select2-id="31">AID1015</option>
                            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 284.667px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-txt_allotno-container"><span class="select2-selection__rendered" id="select2-txt_allotno-container" role="textbox" aria-readonly="true" title="Select  Allocation Id">Select Allocation Id</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </div>



                    <div class="col-md-6 col-lg-4 mt-3">
                        <div>
                            <button class="btn btn-sm btn-primary me-2">
                                <i class="ti ti-search"></i> Search
                            </button>

                        </div>
                    </div>



                </div> -->

                <div class="form-group">


                    <div class="table-responsive">
                        <table class="table table-nowrap datatable table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Legal Notice</th>
                                    <th>Case Type</th>
                                    <th>Case Sub Type</th>
                                    <th>Batch</th>
                                    <th>Case Status</th>
                                    <th>Loan No</th>
                                    <th>Date of Dispatch</th>
                                    <th>Speed Post No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>28-10-2025</td>
                                    <td>Recovery</td>
                                    <td>Demand Notice</td>
                                    <td>Batch-01</td>
                                    <td>Await Reports</td>
                                    <td>LN00012345</td>
                                    <td>30-10-2025</td>
                                    <td>SP123456789IN</td>
                                </tr>
                            </tbody>
                        </table>
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success"><i class="ti ti-upload me-1"></i> Upload</button>
            </div>
        </div>
    </div>
</div>


<!-- offcanvas upload -->


<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="creationOffcanvas" data-bs-backdrop="static"
    data-bs-keyboard="false">
    <div class="offcanvas-header border-bottom">
        <h5 class="fw-semibold">Add</h5>


        <button type="button"
            class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
            data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ti ti-x"></i>
        </button>

    </div>
    <div class="offcanvas-body  py-0">
        <div class="row">
            <div class="col-md-12">
                <div class="my-3">
                    <label class="form-label">Upload Postal</label>
                    <input type="file" class="form-control">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 text-end">
                <button type="button" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</button>
                <button type="button" class="btn btn-sm btn-primary me-2"> <i class="ti ti-upload me-1"></i> Upload</button>
            </div>
        </div>

        <!-- <div class="d-flex flex-column gap-2">

            <button type="button" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
                <button type="button" class="btn btn-sm btn-primary me-2"> <i class="ti ti-upload me-1"></i> Upload</a>
        </div> -->
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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

<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>
<!-- Quill css -->
<link rel="stylesheet" href="assets/plugins/quill/quill.core.css">
<link rel="stylesheet" href="assets/plugins/quill/quill.snow.css">
<link rel="stylesheet" href="assets/plugins/quill/quill.bubble.css">

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

    .card-case {
        border-left: 3px solid #022b50;
    }

</style>

<style>
    .step-nav {
        display: flex;
        justify-content: space-between;
        border-bottom: none !important;
        position: relative;
        margin-bottom: 20px;
    }

    .step-nav::before {
        content: "";
        position: absolute;
        top: 15px;
        left: 20px;
        right: 30px;
        height: 2px;
        background: #e1e1e1;
        z-index: 0;
    }

    .step-nav .nav-link {
        border: none !important;
        background: none !important;
        position: relative;
        padding: 0;
        text-align: center;
        z-index: 1;
    }

    .step-circle {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #dfdfdf;
        color: #555;
        font-size: 13px;
        font-weight: 600;
        margin: 0 auto;
    }

    .step-circle i {
        font-size: 20px;
    }

    .step-days {
        margin: 0 8px;
        font-size: 11px;
        color: #888;
        display: flex;
        align-items: start;
        font-weight: 600;
    }

    @media(max-width: 767px) {
        .step-days {
            display: none;
        }
    }


    .step-label {
        display: block;
        margin-top: 6px;
        font-size: 11px;
        color: #777;
        white-space: nowrap;
    }

    .step-nav .nav-link.completed .step-circle {
        background: #22c55e !important;
        color: #fff !important;
    }

    .step-nav .nav-link.completed .step-label {
        color: #22c55e !important;
    }

    .step-nav .nav-link.active .step-circle {
        background: #7c3aed !important;
        color: #fff !important;
    }
</style>



<!-- <div class="d-flex align-items-center">
    <a href="sarfaesi-case-creation.php" class="mb-3 text-primary" style="font-weight: 600;"> <i class="ti ti-arrow-left mt-0" style="font-size: 16px;font-weight: 600;"></i> Go Back </a>
</div> -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Sale & Auction</h5>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <!-- Single -->
                    <div id="otpTab" class="tab-pane active">

                        <div class="card card-case">
                            <div class="card-body">

                                    <div id="auction">
                                        <h4>Sale & Auction</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-label">Loan No</label>
                                                <select class="form-select">
                                                    <option value="LN-789001" selected>LN-789001</option>
                                                    <option value="LN-789002">LN-789002</option>
                                                    <option value="LN-789003">LN-789003</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-lg-4 mt-auto mb-2">
                                                <button class="btn btn-sm btn-primary me-2">
                                                    <i class="ti ti-search"></i> Search
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <h4>Account Details</h4>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <p class="mb-0">
                                                            <strong>Branch :</strong> <span>Nungambakkam Branch</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="mb-0">
                                                            <strong>Product :</strong> <span>Housing Loan</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-success">Save</button>
                                        </div>

                                        <h4 class="mt-3 mb-3">Property Value</h4>

                                        <div class="row g-3 ">
                                            <div class="col-md-4">
                                                <label class="form-label">Valuation Amount</label>
                                                <input type="text" class="form-control" placeholder="Valuation Amount">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Market Value</label>
                                                <input type="text" class="form-control" placeholder="Market Value">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Distress Value</label>
                                                <input type="text" class="form-control" placeholder="Distress Value">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Reserve Price</label>
                                                <input type="text" class="form-control" placeholder="Reserve Price">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-primary">Save</button>
                                        </div>

                                        <h4 class="mt-3 mb-3">Notice & Publication </h4>

                                        <div class="row g-3 ">
                                            <div class="col-md-4">
                                                <label class="form-label">Sale Notice Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Sale Notice Receipt Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Sale – Publication 1 Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Name of Paper (Publication 1)</label>
                                                <input type="text" class="form-control" placeholder="Name of Paper (Publication 1)">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Sale – Publication 2 Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Name of Paper (Publication 2)</label>
                                                <input type="text" class="form-control" placeholder="Name of Paper (Publication 2)">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-primary">Save</button>
                                        </div>

                                        <h4 class="mt-3 mb-3">Auction Details</h4>

                                        <div class="row g-3 ">
                                            <div class="col-md-4">
                                                <label class="form-label">Date of Auction</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Auction Status</label>
                                                <input type="text" class="form-control" placeholder="Auction Status">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-primary">Save</button>
                                        </div>

                                        <h4 class="mt-3 mb-3">Payment Details </h4>

                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <label class="form-label">Mode of Balance Payment</label>
                                                <div class="mt-1">
                                                    <div class="form-check mb-1 form-check-inline">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio1">Single payment</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio2">Payment Schedule</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-primary">Save</button>
                                        </div>

                                        <h4 class="mt-3 mb-3">Property Transfer</h4>

                                        <div class="row g-3 ">
                                            <div class="col-md-4">
                                                <label class="form-label">Sale Certificate Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Registration Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-primary">Save</button>
                                        </div>

                                    </div> 


                            </div>
                        </div>

                        <!-- <div class="card card-case">
                            <div class="card-body">
                                <div class="mt-4 mb-3">
                                    <ul class="nav nav-tabs" id="sarfaesiTabs" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" data-bs-target="#recall">Loan Recall</a></li>
                                        <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" data-bs-target="#demand">Demand 13(2)</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#ack">Acknowledgement</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#possession">Possession 13(4)</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#section14">Section 14</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#physical">Physical Possession</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#auction">Auction</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#adjustment">Sale Adjustment</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content bg-white  ">

                                    <div class="tab-pane fade show active" id="recall">
                                            <h4>Loan Recall Notice </h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Loan Account No</label>
                                                <input type="text" class="form-control" placeholder="Enter Loan Account No">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Borrower Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Borrower Name">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Outstanding Amount</label>
                                                <input type="number" class="form-control" placeholder="Enter Amount">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">NPA Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Recall Reason</label>
                                                <textarea class="form-control" rows="1" placeholder="Enter Recall Reason"></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Recall Notice Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">Draft / Issued</div>
                                    </div>

                                    <div class="tab-pane fade " id="demand">
                                        <h4>Demand Notice – Section 13(2)</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Demand Amount</label>
                                                <input type="text" class="form-control" placeholder="Demand Amount">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Issue Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Due Date – Auto +60 Days</label>
                                                <input type="date" class="form-control" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Secured Asset Details</label>
                                                <textarea class="form-control" rows="1" placeholder="Secured Asset Details"></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Demand Notice Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">13(2) Issued</div>
                                    </div>

                                    <div class="tab-pane fade" id="ack">
                                        <h4>Acknowledgement Tracking</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Acknowledgement Received</label>
                                                <select class="form-select">
                                                    <option>Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Acknowledgement Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Delivery Proof Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">Pending / Received</div>
                                    </div>

                                    <div class="tab-pane fade" id="possession">
                                        <h4>Possession Notice – Section 13(4)</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Possession Type</label>
                                                <select class="form-select">
                                                    <option>Symbolic</option>
                                                    <option>Physical</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Issue Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Authorized Officer</label>
                                                <input type="text" class="form-control" placeholder="Authorized Officer">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Possession Notice Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">Issued</div>
                                    </div>

                                    <div class="tab-pane fade" id="section14">
                                        <h4>Section 14 Application</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Authority Type</label>
                                                <select class="form-select">
                                                    <option>District Magistrate</option>
                                                    <option>Chief Judicial Magistrate</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">District</label>
                                                <input type="text" class="form-control" placeholder="District">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Application Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Application Copy Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">Filed</div>
                                    </div>

                                    <div class="tab-pane fade" id="physical">
                                        <h4>Physical Possession</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Order Issued</label>
                                                <select class="form-select">
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Order Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Possession Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Possession Documents</label>
                                                <input type="file" class="form-control" multiple>
                                            </div>
                                        </div>
                                        <div class="status">Completed / Pending</div>
                                    </div>

                                    <div class="tab-pane fade" id="auction">
                                        <h4>Auction</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Valuation Amount</label>
                                                <input type="text" class="form-control" placeholder="Valuation Amount">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Auction Notice Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Auction Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Auction Notice Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">Scheduled</div>
                                    </div>

                                    <div class="tab-pane fade" id="adjustment">
                                        <h4>Sale Proceeds Adjustment</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Sale Amount</label>
                                                <input type="text" class="form-control" placeholder="Sale Amount">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Outstanding Loan</label>
                                                <input type="text" class="form-control" placeholder="Outstanding Loan">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Adjustment Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Adjustment Report Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">Loan Closed / Balance Due</div>
                                    </div>

                                </div>

                            </div>
                        </div> -->

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        const tabs = [...document.querySelectorAll('#sarfaesiTabs .nav-link')];

        function updateUI(activeIndex) {
            tabs.forEach((tab, idx) => {
                const circle = tab.querySelector(".step-circle");

                if (idx < activeIndex) {
                    tab.classList.add("completed");
                    circle.innerHTML = `<i class="ti ti-check"></i>`;
                } else if (idx === activeIndex) {
                    tab.classList.remove("completed");
                    circle.innerHTML = `<i class="ti ti-lock-open"></i>`;
                } else {
                    tab.classList.remove("completed");
                    circle.innerHTML = `<i class="ti ti-lock"></i>`;
                }
            });
        }

        function showTab(index) {
            new bootstrap.Tab(tabs[index]).show();
            updateUI(index);
        }

        document.addEventListener("click", function(e) {
            if (e.target.classList.contains("next-tabs")) {
                const currentIndex = tabs.findIndex(t => t.classList.contains("active"));
                if (currentIndex < tabs.length - 1) {
                    showTab(currentIndex + 1);
                }
            }

            if (e.target.classList.contains("prev-tabs")) {
                const currentIndex = tabs.findIndex(t => t.classList.contains("active"));
                if (currentIndex > 0) {
                    showTab(currentIndex - 1);
                }
            }
        });

        tabs.forEach((tab, idx) => {
            tab.addEventListener("click", () => showTab(idx));
        });

        updateUI(0);
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

    const caseNatures = document.getElementById("example-selects");
    const casenatureFields = document.querySelectorAll(".casenatureFields");

    caseNatures.addEventListener("change", function() {
        if (this.value === "Appeal" || this.value === "Connect Case") {
            casenatureFields.forEach(field => field.classList.remove("d-none"));
        } else {
            casenatureFields.forEach(field => field.classList.add("d-none"));
        }
    });
    const caseFresh = document.getElementById("fresh");
    const casenFreshFields = document.querySelectorAll(".casefreshFields");

    caseFresh.addEventListener("change", function() {
        if (this.value === "Appeal" || this.value === "Connect Case") {
            casenFreshFields.forEach(field => field.classList.remove("d-none"));
        } else {
            casenFreshFields.forEach(field => field.classList.add("d-none"));
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
        const caseTypeSelect = document.getElementById("case-type");
        const subCaseSelects = document.querySelectorAll("#sub-case");

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

        subCaseSelects.forEach((select, index) => {
            if (index !== 0) select.classList.add("d-none");
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        const caseTypeSelect = document.getElementById("case-types");
        const subCaseSelects = document.querySelectorAll("#sub-cases");

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

                document.querySelectorAll('.casebox').forEach(el => el.classList.add('d-none'));
                document.querySelectorAll('.caseField').forEach(el => el.classList.add('d-none'));

                const extraCol = document.querySelector('.extra-col');
                if (extraCol) extraCol.classList.add('d-none');

                if (value) {

                    document.querySelectorAll('.' + value).forEach(el => el.classList.remove('d-none'));

                    const hasCasebox = document.querySelectorAll('.casebox.' + value).length > 0;
                    if (!hasCasebox) {
                        document.querySelectorAll('.caseField.' + value).forEach(el => el.classList.remove('d-none'));
                    }

                    const visibleBoxes = document.querySelectorAll('.' + value + ':not(.d-none)');
                    if (visibleBoxes.length > 0 && extraCol) {
                        extraCol.classList.remove('d-none');
                    }
                }
            });
        });
    });
</script>

<!-- Quill Editor JS -->
<script src="assets/plugins/quill/quill.min.js" type="text/javascript"></script>

<!-- Quill JS -->
<script src="assets/js/form-quill.js" type="text/javascript"></script>

<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>


<style>
    .nav-tabs {
        border-bottom: 0px !important;
    }

    .choices__inner {
        scrollbar-width: none !important;
    }

    .card {
        box-shadow: none;
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

    /* search sec */

    .dataTables_filter {
        margin-bottom: 0px !important;
    }

    .dataTables_wrapper div {
        /* margin-bottom: 4px !important; */
    }

    .scrollBarThin {
        scrollbar-width: thin !important;
    }
</style>


<!-- start row -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Caveat Report</h5>

                <div class="d-flex align-items-center">
                    <a href="caveat-creation.php" class=" btn btn-sm btn-primary">
                        <i class="ti ti-plus me-2"></i> Add
                    </a>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive scrollBarThin">
                    <table class="table table-nowrap datatable table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Create Date</th>
                                <th>Loan Number</th>
                                <th>Case Type</th>
                                <th>Case Sub Type</th>
                                <th>Customer Id</th>
                                <th>Customer Name</th>
                                <th>Caveator Name</th>
                                <th>Caveator Filing Date</th>
                                <th>Caveator Expire Date</th>
                                <th>Caveator Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>05-01-2025</td>
                                <td>LN-100234</td>
                                <td>Against Case</td>
                                <td>Section 17 of DRT (SA)</td>
                                <td>CUST-001</td>
                                <td>Ramesh Kumar</td>
                                <td>Suresh Kumar</td>
                                <td>10-01-2025</td>
                                <td>09-01-2026</td>
                                <td>CAV-2025-001</td>
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

<!-- Creation Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="creationModalLabel">Caveat Creation</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body ">

                <div class="row g-3">
                    <!-- Case Type -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Case Type</label>
                            <select class="form-select" id="caseType_create">
                                <option value="">Select</option>
                                <option value="Arbitration Case">Litigation Against Case</option>
                            </select>
                        </div>
                    </div>

                    <!-- Sub Case -->
                    <div class="col-md-4">
                        <div class="mb-3">
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
                                <option value="Sec 41 of Appeal to Consumer Court">Sec 41 of Appeal to Consumer Court
                                </option>
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
                    <div class="col-md-6 col-lg-4">
                        <label class="form-label">Loan No</label>
                        <select class="form-select">
                            <option value="">Select Loan No</option>
                            <option value="LNAB5A57">LNAB5A57</option>
                            <option value="LNAB5A58">LNAB5A58</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Customer ID</label>
                        <input type="text" class="form-control" value="Customer Id">
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" value="Customer Name">
                    </div>
                    <div class="col-md-6 col-lg-4 mt-5">
                        <button class="btn btn-sm btn-primary me-2">
                            <i class="ti ti-search"></i> Search
                        </button>
                    </div>
                </div>



                <hr>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Speed Post Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Speed Post Number</label>
                        <input type="text" class="form-control" value="Speed Post Number">
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Caveator Name</label>
                        <input type="text" class="form-control" value="Caveator Name">
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Caveator Filing Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Expire Date(90 days)</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Caveator Number</label>
                        <input type="text" class="form-control" value="Caveator Number">
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Create</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {

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

    });
</script>

<?php include 'footer.php'; ?>
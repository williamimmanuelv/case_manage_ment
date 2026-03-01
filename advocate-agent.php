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

    .scrollBarThin {
        scrollbar-width: thin !important;
    }
</style>

<!-- Creation Modal -->

<!-- start row -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Agent Report</h5>
                <div>

                    <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#creationModal">
                        <i class="ti ti-plus me-1"></i> Add
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive scrollBarThin">
                    <table class="table table-nowrap datatable table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Case Type</th>
                                <th>Sub Case Type</th>
                                <th>Loan No</th>
                                <th>Court Name</th>
                                <th>Case No</th>
                                <th>Current Advocate</th>
                                <th>New Advocate</th>
                                <th>Reason</th>
                                <th>NOC</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Litigation By Case</td>
                                <td>Section 138</td>
                                <td>LNAB5A57</td>
                                <td>Egmore Court</td>
                                <td>CC/458/2026</td>
                                <td>Adv. Ramesh</td>
                                <td>Adv. Karthik</td>
                                <td>Client requested change of advocate</td>

                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary" style="font-size: 12px; padding: 3px 8px;">
                                        <i class="ti ti-file"></i> View
                                    </a>
                                </td>

                                <td>
                                    <div class="d-flex flex-row gap-2">

                                        <button class="btn btn-sm btn-success"
                                            style="color: #cda85d; background: white;border: 1px solid #cda85d;">
                                            <i class="ti ti-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="ti ti-trash"></i>
                                        </button>

                                    </div>
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


<!-- offcanvas advocate creation -->



<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="creationModal" data-bs-backdrop="static"
    data-bs-keyboard="false">

    <div class="offcanvas-header border-bottom">
        <h5 class="fw-semibold">Advocate Agent Creation</h5>
        <button type="button"
            class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
            data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ti ti-x"></i>
        </button>
    </div>
    <div class="offcanvas-body" style="padding: 20px 30px 20px 30px;">


        <div class="row g-4 ">
            <div class="col-md-6 ">
                <label class="form-label">Case Type</label>
                <select class="form-select" id="caseType_create">
                    <option value="">Select</option>
                    <option value="Case">Litigation By Case</option>
                    <option value="Arbitration Case">Litigation Against Case</option>
                    <option value="Sarfaesi Case">Litigation Case EP</option>
                </select>
            </div>
            <div class="col-md-6 ">
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
            <div class="col-md-6">
                <label class="form-label">Loan No</label>
                <select class="form-select">
                    <option value="">Select Loan No</option>
                    <option value="LNAB5A57">LNAB5A57</option>
                    <option value="LNAB5A58">LNAB5A58</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="input-label" class="form-label">Court Name</label>
                <input type="text" class="form-control" placeholder="Court Name">
            </div>
            <div class="col-md-6">
                <label for="input-label" class="form-label">Case No</label>
                <input type="text" class="form-control" placeholder="Case No">
            </div>
            <div class="col-md-6">
                <label for="input-label" class="form-label">Current Advocate</label>
                <input type="text" class="form-control" value="Current Advocate">
            </div>
            <div class="col-md-6">
                <label for="input-label" class="form-label">Description(Reason For Change)</label>
                <textarea name="" class="form-control" rows="2" placeholder="Description" id=""></textarea>
            </div>
            <div class="col-md-6">
                <label for="input-label" class="form-label">NOC Upload</label>
                <input type="file" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="input-label" class="form-label">Lawyer Allocation</label>
                <select class="form-select">
                    <option value="">Select Loan No</option>
                    <option value="Advocate">Advocate 1</option>
                    <option value="Advocate">Advocate 2</option>
                </select>
            </div>
            <div class="col-lg-12 text-end">
                <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
                <a href="#" class="btn btn-sm btn-primary me-2">Create</a>
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
        setupModal("caseType_edit", "subcase-edit");

    });
</script>
<?php include 'footer.php'; ?>
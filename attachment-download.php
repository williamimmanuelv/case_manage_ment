<?php include 'header.php'; ?>


<div class="card border-0 rounded-0">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Attachment</h5>
        <button id="filterBtn" class="btn btn-sm btn-primary me-2">
            <i class="ti ti-filter"></i> <span class="px-1">Filter </span>
        </button>
    </div>
    <div class="card-body">
        <div id="filterSection" class="d-none">
            <div class="row g-4">
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


                <div class="col-md-6 col-lg-4 mt-4">
                    <div class=" mt-3">
                        <button class="btn btn-sm btn-primary me-2">
                            <i class="ti ti-search"></i> Search
                        </button>
                    </div>
                </div>
            </div>
            <hr>
        </div>


        <div class="table-responsive " style="margin-bottom: 20px;">
            <table class="table table-nowrap datatable table-bordered" id="leads_reports">
                <thead class="table-light">
                    <tr>
                        <th>S.No</th>
                        <th>Case Type</th>
                        <th>Sub Case Type</th>
                        <th>Loan No</th>
                        <th>Attachment Name</th>
                        <th>Attachment</th>
                        <th>Attachment Download</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Litigation By Case</td>
                        <td>Section 138</td>
                        <td>1234/7</td>
                        <td>Petition Copy</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-success">
                                <i class="ti ti-paperclip"></i>
                            </a>
                        </td>
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
</div>

<!-- Creation Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="creationModalLabel">Attachment Creation</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-4">
                        <div class="col-md-12">
                            <label class="form-label">Case Type</label>
                            <select class="form-select" id="caseType_create">
                                <option value="">Select</option>
                                <option value="Case">Litigation By Case</option>
                                <option value="Arbitration Case">Litigation Against Case</option>
                                <option value="Sarfaesi Case">Litigation Case EP</option>
                            </select>
                        </div>
                        <div class="col-md-12">
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
                        <div class="col-md-12 mt-3">
                            <label for="input-label" class="form-label">Loan No</label>
                            <select class="form-select">
                                <option>Select Loan Number</option>
                                <option value="1234/7">1234/7</option>
                                <option value="1234/8">1234/8</option>
                                <option value="1234/9">1234/9</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Attachment Name</label>
                            <input type="text" class="form-control" placeholder="Attachment Name">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success"><i class="ti ti-upload me-1"></i> Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const legalType = document.getElementById("legalType");

        const noticeType = document.getElementById("noticeTypeWrapper");
        const caseType = document.getElementById("caseTypeWrapper");
        const subCase = document.getElementById("subCaseWrapper");

        const caseTypeSelect = caseType.querySelector("select");
        const subcaseSelects = subCase.querySelectorAll(".subcase-create");

        function toggleFields() {
            const val = legalType.value;

            if (val === "Notice") {

                // show only notice
                noticeType.style.display = "";
                caseType.style.display = "none";
                subCase.style.display = "none";

            } else if (val === "Case") {

                // show case + subcase
                noticeType.style.display = "none";
                caseType.style.display = "";
                subCase.style.display = "";

                updateSubCase();

            } else {
                // hide all
                noticeType.style.display = "none";
                caseType.style.display = "none";
                subCase.style.display = "none";
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

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const filterBtn = document.getElementById("filterBtn");
        const filterSection = document.getElementById("filterSection");

        filterBtn.addEventListener("click", function() {

            if (filterSection.classList.contains("d-none")) {
                filterSection.classList.remove("d-none");
            } else {
                filterSection.classList.add("d-none");
            }

        });

    });
</script>


<?php include 'footer.php'; ?>
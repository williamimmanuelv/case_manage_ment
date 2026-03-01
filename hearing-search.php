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
</style>


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Hearing Search </h5>
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
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <!-- Single -->
                    <div id="otpTab" class="tab-pane active">
                        <div class="row align-items-center mb-3">

                            <div class="col-md-6 col-lg-4">
                                <label for="input-label" class="form-label">Legal Notice</label>
                                <select class="form-select">
                                    <option>Select Legal Type</option>
                                    <option value="Notice">Notice</option>
                                    <option value="Case">Case</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Case Type</label>
                                <select class="form-select" id="caseType_create">
                                    <option value="">Select</option>
                                    <option value="Case">Litigation By Case</option>
                                    <option value="Arbitration Case">Litigation Against Case</option>
                                    <option value="Sarfaesi Case">Litigation Case EP</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-4">
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
                            <div class="col-md-6 col-lg-4">
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
                                        <i class="ti ti-search"></i> Search
                                    </button>

                                </div>
                            </div>



                        </div>

                        <hr>

                        <div class="table-responsive">
                            <table class="table table-nowrap datatable table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Case Type</th>
                                        <th>Case Sub Type</th>
                                        <th>Loan No</th>
                                        <th>Customer Name</th>
                                        <th>Product</th>
                                        <th>Case No / SR No</th>
                                        <th>Court Name</th>
                                        <th>Unnumbered Cases</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>EP Cases</td>
                                        <td>Arbitration Award-EP</td>
                                        <td>LNAB5A57</td>
                                        <td>Ramesh Kumar</td>
                                        <td>Car Loan</td>
                                        <td>SR4589/2026</td>
                                        <td>Egmore Court</td>
                                        <td>100</td>
                                    </tr>
                                </tbody>

                            </table>
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success"><i class="ti ti-upload me-1"></i> Upload</button>
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
        setupModal("caseType_edit", "subcase-edit");

    });
</script>

<?php include 'footer.php'; ?>
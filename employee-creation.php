<?php include 'header.php'; ?>


<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Employee Creation</h5>
                <div>
                <a href="employee-report.php" class="btn btn-primary btn-sm">
                    <i class="ti ti-arrow-left"></i>
                </a>
                </div>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="row mb-3">
                        <div class="col-lg-4 ">
                            <label class=" col-form-label">Employee Photo <span style="color:red;">*</span></label>
                        </div>

                        <div class="col-lg-8">
                            <input type="file" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Employee Name <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Position</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Position">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Employee ID <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Employee ID">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Email ID <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-lg-8">
                            <input type="email" class="form-control" placeholder="Email ID">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Phone No <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-lg-8">
                            <input type="number" class="form-control" placeholder="Phone No">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Case Allocation Zone</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-control" multiple data-choices data-choices-removeItem>
                                <option selected>North</option>
                                <option>All</option>
                                <option>East</option>
                                <option>West</option>
                                <option>South</option>
                                <option>None</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Case Allocation State</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-control" multiple data-choices data-choices-removeItem>
                                <option selected>Tamil Nadu</option>
                                <option>All</option>
                                <option>Kerala</option>
                                <option>Karnataka</option>
                                <option>Gujarat</option>
                                <option>None</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Case Allocation District</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-control" multiple data-choices data-choices-removeItem>
                                <option selected>Chennai</option>
                                <option>All</option>
                                <option>All</option>
                                <option>Madurai</option>
                                <option>None</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Report Zone</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-control" multiple data-choices data-choices-removeItem>
                                <option selected>North</option>
                                <option>All</option>
                                <option>East</option>
                                <option>West</option>
                                <option>South</option>
                                <option>None</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Report State</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-control" multiple data-choices data-choices-removeItem>
                                <option selected>Tamil Nadu</option>
                                <option>All</option>
                                <option>Kerala</option>
                                <option>Karnataka</option>
                                <option>Gujarat</option>
                                <option>None</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Report District</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-control" multiple data-choices data-choices-removeItem>
                                <option selected>Tamil Nadu</option>
                                <option>All</option>
                                <option>Kerala</option>
                                <option>Karnataka</option>
                                <option>Gujarat</option>
                                <option>None</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Case Type <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-select" id="caseType_create" multiple data-choices data-choices-removeItem>
                                <option value="">Select</option>
                                <option selected value="Case">Litigation By Case</option>
                                <option value="Arbitration Case">Litigation Against Case</option>
                                <option value="Sarfaesi Case">Litigation Case EP</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Sub Case Type <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-lg-8">

                            <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                            <option value="All" selected>All</option>
                            <option value="Writ Petition u/s 226">Writ Petition u/s 226</option>
                            <option value="Sec 19 of DRT">Sec 19 of DRT</option>
                            <option value="Lok adalt-Order">Lok adalt-Order</option>
                            </select>

                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Remarks</label>
                        </div>
                        <div class="col-lg-8">
                            <textarea class="form-control" placeholder="Remarks"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label class="col-form-label">Employee Status</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-select" id="example-select">
                                <option>Enable</option>
                                <option>Disable</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 text-end">
                            <a href="#" class="btn btn-primary me-2">Create</a>
                            <a href="#" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>


                </form>

            </div> <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
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


<?php include 'footer.php'; ?>
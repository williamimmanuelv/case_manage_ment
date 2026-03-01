<?php include 'header.php'; ?>


<!-- start row -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Act Description</h5>
                <div>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#creationModal">
                        <i class="ti ti-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-nowrap datatable table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Act</th>
                                <th>Act Sub Section</th>
                                <th>Act Description</th>
                                <th>Create Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Section-13</td>
                                <td>Act Sub Section 1</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                                <td>18-12-2025</td>
                                <td>
                                    <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="ti ti-edit"></i>
                                    </button>
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
<!-- end row -->


<!-- Creation Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="creationModalLabel">Act Description Creation</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>


                    <div class="mb-3">
                        <label class="form-label">Act</label>
                        <select class="form-select" id="example-select">
                            <option>Act-one</option>
                            <option>Act-two</option>
                            <option>Act-three</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Act Sub Section</label>
                        <select class="form-select" id="example-select" multiple data-choices data-choices-removeItem>
                            <option value="">Select</option>
                            <option value="All">All</option>
                            <option value="Act-Sub-Section-one">Act-Sub-Section-one</option>
                            <option value="Act-Sub-Section-two">Act-Sub-Section-two</option>
                            <option value="Act-Sub-Section-three">Act-Sub-Section-three</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Act Description</label>
                        <textarea  class="form-control" placeholder="Act-Description" autocomplete="off"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- edit Modal -->

<!-- Edit Case Type Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="editModalLabel">Edit Act Description</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="mb-3">
                        <label class="form-label">Act</label>
                        <select class="form-select" id="example-select">
                            <option>Act-one</option>
                            <option>Act-two</option>
                            <option>Act-three</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Act Sub Section</label>
                        <select class="form-select" id="example-select" multiple data-choices data-choices-removeItem>
                            <option value="">Select</option>
                            <option value="All">All</option>
                            <option value="Act-Sub-Section-one">Act-Sub-Section-one</option>
                            <option value="Act-Sub-Section-two">Act-Sub-Section-two</option>
                            <option value="Act-Sub-Section-three">Act-Sub-Section-three</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Act Description</label>
                        <textarea  class="form-control" placeholder="Act-Description" autocomplete="off"></textarea>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Save</button>
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

            // When dropdown changes
            caseTypeSelect.addEventListener("change", () => show(caseTypeSelect.value));

            // Run once on page load (default)
            show(caseTypeSelect.value);
        }

        setupModal("caseType_create", "subcase-create");
        setupModal("caseType_edit", "subcase-edit");

    });
</script>







<?php include 'footer.php'; ?>
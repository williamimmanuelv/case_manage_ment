<?php include 'header.php'; ?>


<!-- start row -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Attachment</h5>
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
                                <th>Case Type</th>
                                <th>Sub Case Type</th>
                                <th>Act</th>
                                <th>Attachment Title</th>
                                <th>Attachment File</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Civil Case</td>
                                <td>Civil Suit</td>
                                <td>Section-13</td>
                                <td>Case Document</td>
                                <td>Case File</td>
                                <td>Enable</td>
                                <td>
                                    <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="ti ti-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="ti ti-trash"></i>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="creationModalLabel">Attachment Creation</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <!-- Case Type -->
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Case Type</label>
                                <select class="form-select" id="caseType_create">
                                    <option value="">Select</option>
                                    <option value="CivilCase">Civil Case</option>
                                    <option value="CriminalCase">Criminal Case</option>
                                    <option value="ArbitrationCase">Arbitration Case</option>
                                    <option value="SarfaesiCase">Sarfaesi Case</option>
                                    <option value="DRTCase">DRT Case</option>
                                    <option value="NACLTCase">NACLT Case</option>
                                    <option value="ConsumerCase">Consumer Case</option>
                                </select>
                            </div>
                            <!-- Sub Case -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Sub Case Type</label>

                        <select class="form-select subcase-create" data-type="default">
                            <option value="">Select</option>
                        </select>

                        <select class="form-select subcase-create d-none" data-type="CivilCase">
                            <option value="">Select</option>
                            <option value="civil-suit">Civil Suit</option>
                            <option value="summary-suit">Summary Suit</option>
                            <option value="against-case">Against Case</option>
                            <option value="ep">EP</option>
                            <option value="insolvency-petition">Insolvency Petition</option>
                        </select>

                        <select class="form-select subcase-create d-none" data-type="CriminalCase">
                            <option value="">Select</option>
                            <option value="section-138">Section 138</option>
                            <option value="section-25">Section 25</option>
                            <option value="section-406">Section 406,420</option>
                            <option value="return-of-property">Return Of Property</option>
                            <option value="bail">Bail</option>
                            <option value="anticipatory-bail">Anticipatory Bail</option>
                            <option value="sec-156">Sec 156 (3)</option>
                            <option value="quash-petition">Quash Petition</option>
                        </select>

                        <select class="form-select subcase-create d-none" data-type="ArbitrationCase">
                            <option value="">Select</option>
                            <option value="Section21">Section 21</option>
                            <option value="Section11">Section 11</option>
                            <option value="Section17">Section 17</option>
                            <option value="Section34">Section 34</option>
                            <option value="EP">EP</option>
                        </select>

                        <select class="form-select subcase-create d-none" data-type="SarfaesiCase">
                            <option value="">Select</option>
                            <option value="Section13-2">Section 13 (2)</option>
                            <option value="Section13-4">Section 13 (4)</option>
                            <option value="Section14">Section 14</option>
                        </select>

                        <select class="form-select subcase-create d-none" data-type="DRTCase">
                            <option value="">Select</option>
                            <option value="Section18">Section 18</option>
                            <option value="Section19">Section 19</option>
                            <option value="Writ">Writ</option>
                        </select>

                        <select class="form-select subcase-create d-none" data-type="NACLTCase">
                            <option value="">Select</option>
                        </select>

                        <select class="form-select subcase-create d-none" data-type="ConsumerCase">
                            <option value="">Select</option>
                            <option value="DistrictCase">District Case</option>
                            <option value="StateCase">State Case</option>
                            <option value="EP">EP</option>
                            <option value="NationalCase">National Case</option>
                        </select>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Act</label>
                        <select class="form-select" id="example-select">
                            <option>Act 101</option>
                            <option>Act 102</option>
                        </select>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Attachment Title</label>
                        <input type="text" class="form-control" placeholder="Attachment Title" autocomplete="off">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Attachment File</label>
                        <input type="file" class="form-control" autocomplete="off">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Status</label>
                        <select class="form-select" id="example-select">
                            <option>Enable</option>
                            <option>Disable</option>
                        </select>
                    </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Save File</button>
            </div>
        </div>
    </div>
</div>


<!-- edit Modal -->

<!-- Edit Case Type Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="editModalLabel">Edit Attachment</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <!-- Case Type -->
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Case Type</label>
                                <select class="form-select" id="caseType_edit">
                                    <option value="">Select</option>
                                    <option value="CivilCase">Civil Case</option>
                                    <option value="CriminalCase">Criminal Case</option>
                                    <option value="ArbitrationCase">Arbitration Case</option>
                                    <option value="SarfaesiCase">Sarfaesi Case</option>
                                    <option value="DRTCase">DRT Case</option>
                                    <option value="NACLTCase">NACLT Case</option>
                                    <option value="ConsumerCase">Consumer Case</option>
                                </select>
                            </div>
                            <!-- Sub Case -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Sub Case Type</label>

                        <select class="form-select subcase-edit" data-type="default">
                            <option value="">Select</option>
                        </select>

                        <select class="form-select subcase-edit d-none" data-type="CivilCase">
                            <option value="">Select</option>
                            <option value="civil-suit">Civil Suit</option>
                            <option value="summary-suit">Summary Suit</option>
                            <option value="against-case">Against Case</option>
                            <option value="ep">EP</option>
                            <option value="insolvency-petition">Insolvency Petition</option>
                        </select>

                        <select class="form-select subcase-edit d-none" data-type="CriminalCase">
                            <option value="">Select</option>
                            <option value="section-138">Section 138</option>
                            <option value="section-25">Section 25</option>
                            <option value="section-406">Section 406,420</option>
                            <option value="return-of-property">Return Of Property</option>
                            <option value="bail">Bail</option>
                            <option value="anticipatory-bail">Anticipatory Bail</option>
                            <option value="sec-156">Sec 156 (3)</option>
                            <option value="quash-petition">Quash Petition</option>
                        </select>

                        <select class="form-select subcase-edit d-none" data-type="ArbitrationCase">
                            <option value="">Select</option>
                            <option value="Section21">Section 21</option>
                            <option value="Section11">Section 11</option>
                            <option value="Section17">Section 17</option>
                            <option value="Section34">Section 34</option>
                            <option value="EP">EP</option>
                        </select>

                        <select class="form-select subcase-edit d-none" data-type="SarfaesiCase">
                            <option value="">Select</option>
                            <option value="Section13-2">Section 13 (2)</option>
                            <option value="Section13-4">Section 13 (4)</option>
                            <option value="Section14">Section 14</option>
                        </select>

                        <select class="form-select subcase-edit d-none" data-type="DRTCase">
                            <option value="">Select</option>
                            <option value="Section18">Section 18</option>
                            <option value="Section19">Section 19</option>
                            <option value="Writ">Writ</option>
                        </select>

                        <select class="form-select subcase-edit d-none" data-type="NACLTCase">
                            <option value="">Select</option>
                        </select>

                        <select class="form-select subcase-edit d-none" data-type="ConsumerCase">
                            <option value="">Select</option>
                            <option value="DistrictCase">District Case</option>
                            <option value="StateCase">State Case</option>
                            <option value="EP">EP</option>
                            <option value="NationalCase">National Case</option>
                        </select>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Act</label>
                        <select class="form-select" id="example-select">
                            <option>Act 101</option>
                            <option>Act 102</option>
                        </select>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Attachment Title</label>
                        <input type="text" class="form-control" placeholder="Attachment Title" autocomplete="off">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Attachment File</label>
                        <input type="file" class="form-control" autocomplete="off">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Status</label>
                        <select class="form-select" id="example-select">
                            <option>Enable</option>
                            <option>Disable</option>
                        </select>
                    </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Save File</button>
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

            show(caseTypeSelect.value);
        }

        setupModal("caseType_create", "subcase-create");
        setupModal("caseType_edit", "subcase-edit");

    });
</script>







<?php include 'footer.php'; ?>
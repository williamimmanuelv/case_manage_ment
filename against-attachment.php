<?php include 'header.php'; ?>


<div class="card border-0 rounded-0">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Attachment Report</h5>
        <div>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#creationModal">
                <i class="ti ti-plus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive " style="margin-bottom: 20px;">
            <table class="table table-nowrap datatable table-bordered" id="leads_reports">
                <thead class="table-light">
                    <tr>
                        <th>S.No</th>
                        <th>Date</th>
                        <th>Loan No</th>
                        <th>Case Type</th> 
                        <th>Case Sub Type</th>
                        <th>Attachment Status</th>
                        <th>Upload File</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>12-01-2025</td>
                        <td>LNAB5A57</td>
                        <td>Civil Case</td>
                        <td>EP</td>
                        <td>Aadhaar Card</td>
                        <td><button class="btn btn-sm btn-primary" class="btn btn-success">
                                <i class="ti ti-download"></i>
                            </button>
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
                            <label class="form-label">Loan No</label>
                            <select class="form-select">
                                <option value="">Select Loan No</option>
                                <option value="LNAB5A57">LNAB5A57</option>
                                <option value="LNAB5A58">LNAB5A58</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Case Type</label>
                                <input type="text" class="form-control" placeholder="Case Type">
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Case Sub Type</label>
                                <select class="form-select" id="example-select">
                                    <option>Section 138</option>
                                    <option>Section 25</option>
                                    <option>Bail</option>
                                </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Attachment Status</label>
                                <select class="form-select">
                                    <option>Check</option>
                                    <option>Loan Agreement</option>
                                </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Attachment</label>
                                <input type="file" class="form-control">
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




<?php include 'footer.php'; ?>
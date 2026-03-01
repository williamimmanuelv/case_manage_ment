<?php include 'header.php'; ?>


<div class="row">
    <div class="col-xl-12">
        <div class="card border-0 rounded-0">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Invoice Report</h5>
                <div>
                    <a href="invoice-creation.php" class="btn btn-primary btn-sm" >
                        <i class="ti ti-plus me-1"></i> Add
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-nowrap datatable table-bordered">
                            <thead>
                                <tr>

                                    <th>S.No</th>
                                    <th>Invoice ID</th>
                                    <th>Loan Number</th>
                                    <th>Customer ID</th>
                                    <th>Customer Name</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>1</td>
                                    <td>543210</td>
                                    <td>Loa001</td>
                                    <td>Cus001</td>
                                    <td>customer-one</td>
                                    <td>Category-one</td>
                                    <td>Sub-Category-one</td>
                                    <td>5000</td>
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
            </div>
        </div>
    </div>
</div>

<!-- edit Modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="editModalLabel">Edit Invoice Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="text" class="form-control" placeholder="Amount" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">UTR Number</label>
                        <input type="text" class="form-control" placeholder="UTR Number" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Remarks</label>
                        <input type="text" class="form-control" placeholder="Remarks" autocomplete="off">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Update</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
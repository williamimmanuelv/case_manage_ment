<?php include 'header.php'; ?>


<div class="row">
    <div class="col-xl-12">
        <div class="card border-0 rounded-0">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Invoice Success Report</h5>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-nowrap datatable table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Date</th>
                                    <th>Invoice ID</th>
                                    <th>Loan num</th>
                                    <th>customer ID</th>
                                    <th>customer Name</th>
                                    <th>Allocation Manager</th>
                                    <th>Category </th>
                                    <th>Sub Category</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>05-02-2025</td>
                                    <td>INV-2025-001</td>
                                    <td>LN-450012</td>
                                    <td>CUST-101</td>
                                    <td>Ramesh Kumar</td>
                                    <td>Arun Raj</td>
                                    <td>Legal</td>
                                    <td>Notice</td>
                                    <td>₹ 25,000</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-primary me-1" title="Edit">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" title="Delete">
                                            <i class="ti ti-trash"></i>
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
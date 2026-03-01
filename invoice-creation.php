<?php include 'header.php'; ?>

<style>
    .card-case {
        border-top: 3px solid #022b50;
        border-left: 0px;
    }

    .invoice-code {
        background: #6a1ed9;
        color: #fff;
        padding: 8px 22px;
        border-radius: 4px;
        font-weight: 600;
        display: inline-block;
        min-width: 200px;
        text-align: center;
    }

    .summary-box {
        background: #e9edff;
        border: 1px solid #7c8cff;
        border-radius: 6px;
    }

    .summary-box .input-group-text {
        background: #fff3e0;
        color: #ff6f00;
        font-weight: 700;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Invoice Creation</h5>
                <div>
                    <a href="invoice-report.php" class="btn btn-primary btn-sm">
                        <i class="ti ti-arrow-left"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="card card-case">
                    <div class="card-body">
                        <h5>Invoice Details :</h5>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <span class="invoice-code">OOD-GHU-001</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label class=" col-form-label">Invoice Date :</label>
                                    </div>

                                    <div class="col-md-7">
                                        <input type="date" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-case">
                    <div class="card-body">
                        <h5>Basic Details :</h5>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label class=" col-form-label">Legal Type :</label>
                                    </div>

                                    <div class="col-md-7">
                                        <input type="text" class="form-control" placeholder="Notice" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label class=" col-form-label">Allocation No :</label>
                                    </div>

                                    <div class="col-md-7">
                                        <input type="text" class="form-control" placeholder="All01140" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label class=" col-form-label">Loan Number :</label>
                                    </div>

                                    <div class="col-md-7">
                                        <input type="text" class="form-control" placeholder="Loan001" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label class=" col-form-label">Customer ID :</label>
                                    </div>

                                    <div class="col-md-7">
                                        <input type="text" class="form-control" placeholder="CUd002242" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-case">
                    <div class="card-body">
                        <h5>Billing Information :</h5>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label class=" col-form-label">Billing Type :</label>
                                    </div>

                                    <div class="col-md-7">
                                        <input type="text" class="form-control" placeholder="professional" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label class=" col-form-label">Tax :</label>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="form-check mb-1">
                                            <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                            <label class="form-check-label" for="customRadio1">With GST Amount</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                            <label class="form-check-label" for="customRadio2">Without GST Amount</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label class=" col-form-label">Billing No :</label>
                                    </div>

                                    <div class="col-md-7">
                                        <input type="text" class="form-control" placeholder="02215501" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-case mb-4">
                    <div class="card-body">
                        <h5>Invoice Items :</h5>
                        <div class="table-responsive mt-3">
                            <table id="invoiceTable" class="table table-nowrap  table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Sno</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Sub-Category</th>
                                        <th>Amount</th>
                                        <th>GST%</th>
                                        <th>TDS%</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="fw-semibold">Legal Charges</td>
                                        <td>Billing</td>
                                        <td>Lawyer Fee</td>
                                        <td>1000</td>
                                        <td>180</td>
                                        <td>100</td>
                                        <td class="row-total">1280</td>
                                        <td class="text-danger"><i class="ti ti-trash"></i></td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td class="fw-semibold">Legal Charges</td>
                                        <td>Billing</td>
                                        <td>Lawyer Fee</td>
                                        <td>2500</td>
                                        <td>360</td>
                                        <td>250</td>
                                        <td class="row-total">3010</td>
                                        <td class="text-danger"><i class="ti ti-trash"></i></td>
                                    </tr>
                                </tbody>
                                <tfoot class="table-light fw-semibold">
                                    <tr>
                                        <td colspan="7" class="text-end">Sub Total Amount :</td>
                                        <td>
                                            <input type="text" id="subTotal" class="form-control form-control-sm text-end" readonly>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="row g-4 mt-3">
                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" placeholder="Title" autocomplete="off">
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Invoice Category</label>
                                <select class="form-select" id="example-select">
                                    <option>Invoice Category 1</option>
                                    <option>Invoice Category 2</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Invoice Sub Category</label>
                                <select class="form-select" id="example-select">
                                    <option>Invoice Sub Category 1</option>
                                    <option>Invoice Sub Category 2</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Amount</label>
                                <input type="text" class="form-control" placeholder="Amount" autocomplete="off">
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">GST</label>
                                <input type="text" class="form-control" placeholder="GST" autocomplete="off">
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">TDS</label>
                                <input type="text" class="form-control" placeholder="TDS" autocomplete="off">
                            </div>
                        </div>
                        <div class="text-end mt-3">
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="ti ti-plus"></i>
                                </a>
                        </div>

                    </div>
                </div>

                <div class="row g-4">

                    <!-- Bank Details -->
                    <div class="col-md-6">
                        <div class="card card-case">
                            <div class="card-body">
                                <h5>Bank Details :</h5>
                                <input type="text" class="form-control" value="1200-0200-0000-1235" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card summary-box">
                            <div class="card-body">

                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <div class="row d-flex">
                                            <div class="col-md-5">
                                                <label class="col-form-label fw-bold">Sub Total :</label>
                                            </div>

                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" autocomplete="off" value="4290" readonly>
                                                    <span class="input-group-text">₹</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row d-flex">
                                            <div class="col-md-5">
                                                <label class="col-form-label fw-bold">Tax :</label>
                                            </div>

                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" autocomplete="off" value="150">
                                                    <span class="input-group-text">₹</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row d-flex">
                                            <div class="col-md-5">
                                                <label class="col-form-label fw-bold">TDS :</label>
                                            </div>

                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" autocomplete="off" value="100">
                                                    <span class="input-group-text">₹</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row d-flex">
                                            <div class="col-md-5">
                                                <label class="col-form-label fw-bold">Total :</label>
                                            </div>

                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" autocomplete="off" value="5000">
                                                    <span class="input-group-text">₹</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="card card-case mb-4">
                    <div class="card-body">
                        <h5>Particular :</h5>
                        <textarea name="" class="form-control" placeholder="Particular" rows="4" autocomplete="off" id=""></textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-center gap-4 mt-5">
                    <button class="btn btn-outline-secondary px-5">
                        <i class="ti ti-x me-1"></i> Clear
                    </button>

                    <button class="btn btn-primary px-5">
                        <i class="ti ti-file-description me-1"></i> Create
                    </button>
                </div>

            </div> <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>



<?php include 'footer.php'; ?>
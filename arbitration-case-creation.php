<?php include 'header.php'; ?>

<!-- Quill css -->
<link rel="stylesheet" href="assets/plugins/quill/quill.core.css">
<link rel="stylesheet" href="assets/plugins/quill/quill.snow.css">
<link rel="stylesheet" href="assets/plugins/quill/quill.bubble.css">

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

    .card-case {
        border-left: 3px solid #022b50;
    }
</style>

<div class="d-flex align-items-center">
    <a href="arbitration-case.php" class="mb-3 text-primary" style="font-weight: 600;"> <i class="ti ti-arrow-left mt-0"
            style="font-size: 16px;font-weight: 600;"></i> Go Back </a>
</div>

<div class="row">
    <div class="col-xl-12">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Arbitration Section 21 Case Creation</h5>
                <div class="radio-btn mx-auto" style="display: flex; justify-content: center; gap: 60px;">
                    <div class="input-box" style="display: flex; align-items: center; gap: 10px;">
                        <input type="radio" id="rad1" name="loginType" value="otp" checked>
                        <h6 style="margin-bottom: unset;">Single</h6>
                    </div>
                    <div class="input-box" style="display: flex; align-items: center; gap: 10px;">
                        <input type="radio" id="rad2" name="loginType" value="uname">
                        <h6 style="margin-bottom: unset;">Bulk Upload</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <div class="tab-content">
                    <!-- Single -->
                    <div id="otpTab" class="tab-pane active">

                        <div class="card card-case">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="cnr" class="form-label">Allocation No <span
                                                    style="color:red;">*</span></label>
                                            <select class="form-control" data-choices name="choices-single-default"
                                                id="choices-single-default">
                                                <option value="">Select Allocation No</option>
                                                <option value="Allot001">Allot001</option>
                                                <option value="Allot002">Allot002</option>
                                                <option value="Allot003">Allot003</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-4" style="margin-top: 30px;">
                                        <button class="btn btn-sm btn-primary me-2">
                                            <i class="ti ti-search"></i> Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-case">
                            <div class="card-body">
                                <h5>Basic Details</h5>
                                <div class="row">

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Case Type <span
                                                    style="color:red;">*</span></label>
                                            <input type="text" class="form-control" value="Arbitration Case">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Sub Case Type <span
                                                    style="color:red;">*</span></label>
                                            <input type="text" class="form-control" value="Section 21">
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Case Type <span style="color:red;">*</span></label>
                                            <select class="form-select" id="case-type">
                                                <option value="Arbitration-Case">Arbitration Case</option>
                                            </select>
                                        </div>
                                    </div> -->

                                    <!-- <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Sub Case Type <span style="color:red;">*</span></label>

                                            <select class="form-select" id="sub-case" value="Arbitration-Case">
                                                <option value="">Select</option>
                                                <option value="Section 21">Section 21</option>
                                                <option value="Section 11">Section 11</option>
                                                <option value="Section 17">Section 17</option>
                                                <option value="Section 34">Section 34</option>
                                                <option value="EP">EP</option>
                                            </select>

                                        </div>
                                    </div> -->

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Act</label>
                                            <input type="text" class="form-control" placeholder="Enter Act">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Act Subtype</label>
                                            <input type="text" class="form-control" placeholder="Enter Act Subtype">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Zone</label>
                                            <input type="text" class="form-control" placeholder="Enter Zone">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control" placeholder="Enter State">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">District</label>
                                            <input type="text" class="form-control" placeholder="Enter District">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Branch</label>
                                            <input type="text" class="form-control" placeholder="Branch">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="card card-case">
                            <div class="card-body">
                                <h5>Product Details</h5>
                                <div class="table-responsive" style="height: 300px; border: 1px solid #8080803b;">
                                    <table id="tbl_postal_create" class="table dataTable table-nowrap table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Loan Number</th>
                                                <th>Product</th>
                                                <th>Amount Financed</th>
                                                <th>Disbursal Date</th>
                                                <th>Amount Disposed</th>
                                                <th>Tenure</th>
                                                <th>Principal Outstanding</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>LN-789001</td>
                                                <td>Car</td>
                                                <td>₹ 5,00,000</td>
                                                <td>10-03-2025</td>
                                                <td>₹ 5,50,000</td>
                                                <td>48 Months</td>
                                                <td>₹ 4,20,000</td>
                                                <td><button class="btn btn-sm btn-danger">
                                                        <i class="ti ti-trash"></i>
                                                    </button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row mt-3 g-4">
                                    <div class="col-md-6 col-lg-4">
                                        <label for="input-label" class="form-label">Loan Number</label>
                                        <input type="text" class="form-control" placeholder="Loan No" />
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label for="input-label" class="form-label">Product <span style="color:red;">*</span></label>
                                        <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                            <option value="All" selected>All</option>
                                            <option value="Car Loan">Car Loan</option>
                                            <option value="Business Loan">Business Loan</option>
                                            <option value="two wheeler">Two Wheeler Loan</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label for="input-label" class="form-label">Amount Finaced</label>
                                        <input type="text" class="form-control" placeholder="Amount Finaced" />
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label for="input-label" class="form-label">Disbursal Date</label>
                                        <input type="date" class="form-control" />
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label for="input-label" class="form-label">Amount Disposed</label>
                                        <input type="text" class="form-control" placeholder="Amount Disposed" />
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label for="input-label" class="form-label">Tenure</label>
                                        <input type="text" class="form-control" placeholder="Tenure" />
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label for="input-label" class="form-label">Principal Outstanding</label>
                                        <input type="text" class="form-control" placeholder="Principal Outstanding" />
                                    </div>

                                    <div class="col-md-6 col-lg-4 mt-auto">
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="ti ti-plus"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div> -->

                        <div class="card card-case">
                            <div class="card-body">
                                <h5>Case Details</h5>
                                <ul class="nav nav-tabs mb-3" id="caseTabs" role="tablist">
                                    <li class="nav-item">
                                        <a href="#home" data-bs-toggle="tab" class="nav-link active" role="tab">Notice
                                            Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#Product" data-bs-toggle="tab" class="nav-link" role="tab">Product
                                            Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#vehicle" data-bs-toggle="tab" class="nav-link" role="tab">Vehicle
                                            Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#Applicant" data-bs-toggle="tab" class="nav-link" role="tab">Sender
                                            Details</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="#profile" data-bs-toggle="tab" class="nav-link" role="tab">Co Applicant</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#Guarantor" data-bs-toggle="tab" class="nav-link" role="tab">Guarantor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#Co-Guarantor" data-bs-toggle="tab" class="nav-link" role="tab">Co - Guarantor</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="#loan" data-bs-toggle="tab" class="nav-link" role="tab">Loss On Sale
                                            Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#schedule" data-bs-toggle="tab" class="nav-link"
                                            role="tab">Schedule</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#Freeze" data-bs-toggle="tab" class="nav-link" role="tab">Bank Freeze
                                            Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#extra-coloumn" data-bs-toggle="tab" class="nav-link" role="tab">Extra
                                            Column</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="caseTabsContent">

                                    <div class="tab-pane fade" id="Product" role="tabpanel">
                                        <div class="table-responsive"
                                            style="height: 300px; border: 1px solid #8080803b;">
                                            <table id="tbl_postal_create"
                                                class="table dataTable table-nowrap table-bordered"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Loan Number</th>
                                                        <th>Product</th>
                                                        <th>Amount Financed</th>
                                                        <th>Disbursal Date</th>
                                                        <th>Amount Sanctioned</th>
                                                        <th>Amount Disposed</th>
                                                        <th>EMI Amount</th>
                                                        <th>Tenure</th>
                                                        <th>No of EMI Due</th>
                                                        <th>Principal Outstanding</th>
                                                        <th>Remove</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>LN-789001</td>
                                                        <td>Car</td>
                                                        <td>₹ 5,00,000</td>
                                                        <td>10-03-2025</td>
                                                        <td>₹ 6,00,000</td>
                                                        <td>₹ 5,50,000</td>
                                                        <td>₹ 12,500</td>
                                                        <td>48 Months</td>
                                                        <td>3</td>
                                                        <td>₹ 4,20,000</td>
                                                        <td><button class="btn btn-sm btn-danger"><i
                                                                    class="ti ti-trash"></i></button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="row mt-3 g-4">
                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Loan Number</label>
                                                <input type="text" class="form-control" placeholder="Loan No" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Product <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-control" data-choices data-choices-removeItem
                                                    multiple>
                                                    <option value="All" selected>All</option>
                                                    <option value="Car Loan">Car Loan</option>
                                                    <option value="Business Loan">Business Loan</option>
                                                    <option value="two wheeler">Two Wheeler Loan</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Amount Financed</label>
                                                <input type="text" class="form-control" placeholder="Amount Financed" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Disbursal Date</label>
                                                <input type="date" class="form-control" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Amount Disposed</label>
                                                <input type="text" class="form-control" placeholder="Amount Disposed" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Amount Sanctioned</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Amount Sanctioned" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">EMI Amount</label>
                                                <input type="text" class="form-control" placeholder="EMI Amount" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">No of EMI due</label>
                                                <input type="text" class="form-control" placeholder="No of EMI due" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Tenure</label>
                                                <input type="text" class="form-control" placeholder="Tenure" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Principal Outstanding</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Principal Outstanding" />
                                            </div>

                                            <div class="col-md-6 col-lg-4 mt-auto">
                                                <a href="#" class="btn btn-primary btn-sm">
                                                    <i class="ti ti-plus"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="text-end mt-3">
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade show active" id="home" role="tabpanel">
                                        <div class="row g-4">

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Customer ID <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Customer Id" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="cnr" class="form-label">Case Nature <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" id="Fresh" value="Fresh" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Institution Name</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Institution Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Lead ID Number</label>
                                                <input type="text" class="form-control" placeholder="Lead ID No" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">AAN Number</label>
                                                <input type="text" class="form-control" placeholder="AAN No" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Frequency of EMI</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Frequency of EMI" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">No of EMI Paid</label>
                                                <input type="text" class="form-control" placeholder="No of EMI paid" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">EMI Start Date</label>
                                                <input type="date" class="form-control" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">EMI End Date</label>
                                                <input type="date" class="form-control" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Rate of Interest</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Rate of Interest" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Principal Paid</label>
                                                <input type="text" class="form-control" placeholder="Principal Paid" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Interest Paid</label>
                                                <input type="text" class="form-control" placeholder="Interest Paid" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">CBC</label>
                                                <input type="text" class="form-control" placeholder="CBC" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">LPP</label>
                                                <input type="text" class="form-control" placeholder="LPP" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">EMI Overdue</label>
                                                <input type="text" class="form-control" placeholder="EMI Overdue" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">AFC Charges</label>
                                                <input type="text" class="form-control" placeholder="AFC Charges" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Future Receivable</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Future Receivable" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">FC Amount <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="FC Amount" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">FC amount in words</label>
                                                <input type="text" class="form-control"
                                                    placeholder="FC amount in words" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Agreement Date</label>
                                                <input type="date" class="form-control" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Agreement Clause</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Agreement Clause" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">CGTMSE</label>
                                                <select class="form-select" id="example-select">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">ECLGS</label>
                                                <select class="form-select" id="example-select">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">NCGTC</label>
                                                <select class="form-select" id="example-select">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">MSME</label>
                                                <select class="form-select" id="example-select">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="vehicle" role="tabpanel">
                                        <div class="row g-4">

                                            <div class="col-md-4">
                                                <label class="form-label">Make</label>
                                                <input type="text" class="form-control" placeholder="Make">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Model</label>
                                                <input type="text" class="form-control" placeholder="Model">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Chassis Number</label>
                                                <input type="text" class="form-control" placeholder="Chassis No">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Engine Number</label>
                                                <input type="text" class="form-control" placeholder="Engine No">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Register Number</label>
                                                <input type="text" class="form-control" placeholder="Register No">
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="Applicant" role="tabpanel">
                                        <div class="table-responsive"
                                            style="height: 300px; border: 1px solid #8080803b;">
                                            <table class="table dataTable table-nowrap table-bordered"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Sender Type</th>
                                                        <th>Sub Sender</th>
                                                        <th>Sender Name</th>
                                                        <th>Age</th>
                                                        <th>Father Name</th>
                                                        <th>Address</th>
                                                        <th>Mobile Number</th>
                                                        <th>E-mail Id</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Applicant</td>
                                                        <td>Co Applicant</td>
                                                        <td>Ramesh Kumar</td>
                                                        <td>35</td>
                                                        <td>Suresh Kumar</td>
                                                        <td>Chennai, TN</td>
                                                        <td>9876543210</td>
                                                        <td>ramesh@example.com</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-danger">
                                                                <i class="ti ti-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="row g-4 mt-2">

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Sender Type</label>
                                                <select class="form-select" id="example-select">
                                                    <option>Applicant</option>
                                                    <option>Co Applicant</option>
                                                    <option>Guarantor</option>
                                                    <option>Co Guarantor</option>
                                                    <option>Additional Guarantor</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Sub Sender</label>
                                                <select class="form-select" id="example-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Sender Name <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Age</label>
                                                <input type="text" class="form-control" placeholder="Age" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Father Name</label>
                                                <input type="text" class="form-control" placeholder="Father Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Address</label>
                                                <input type="text" class="form-control" placeholder="Address" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="Mobile No " />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">E-mail Id </label>
                                                <input type="text" class="form-control" placeholder="E-mail Id" />
                                            </div>

                                            <div class="col-md-6 col-lg-4 mt-auto">
                                                <a href="#" class="btn btn-primary btn-sm">
                                                    <i class="ti ti-plus"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>
                                    </div>

                                    <!-- <div class="tab-pane fade" id="profile" role="tabpanel">
                                        <div class="row">

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Co Applicant Name</label>
                                                    <input type="text" class="form-control" placeholder="Co Applicant Name" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Co Applicant Address</label>
                                                    <input type="text" class="form-control" placeholder="Co Applicant Address" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Co Applicant Mobile Number</label>
                                                    <input type="text" class="form-control" placeholder="Co Applicant Mobile No" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Co Applicant E-mail Id</label>
                                                    <input type="text" class="form-control" placeholder="Co Applicant E-mail Id" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="message" role="tabpanel">
                                        <div class="row">

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Guarantor Name</label>
                                                    <input type="text" class="form-control" placeholder="Guarantor Name" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Guarantor Address</label>
                                                    <input type="text" class="form-control" placeholder="Guarantor Address" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Guarantor Mobile Number</label>
                                                    <input type="text" class="form-control" placeholder="Guarantor Mobile No" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Guarantor E-mail Id</label>
                                                    <input type="text" class="form-control" placeholder="Guarantor E-mail Id" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="Guarantor" role="tabpanel">
                                        <h5>Guarantor Details</h5>
                                        <div class="row g-4">

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor Name</label>
                                                <input type="text" class="form-control" placeholder="Guarantor Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor Age</label>
                                                <input type="text" class="form-control" placeholder="Age" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor Father Name</label>
                                                <input type="text" class="form-control" placeholder="Father Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor Address</label>
                                                <input type="text" class="form-control" placeholder="Guarantor Address" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="Guarantor Mobile No" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor E-mail Id</label>
                                                <input type="text" class="form-control" placeholder="Guarantor E-mail Id" />
                                            </div>
                                        </div>

                                        <h5 class="mt-3">Guarantor1 Details</h5>

                                        <div class="row g-4">

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor1 Name</label>
                                                <input type="text" class="form-control" placeholder="Guarantor1 Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor1 Age</label>
                                                <input type="text" class="form-control" placeholder="Age" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor1 Father Name</label>
                                                <input type="text" class="form-control" placeholder="Father Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor1 Address</label>
                                                <input type="text" class="form-control" placeholder="Guarantor1 Address" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor1 Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="Guarantor1 Mobile No" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor1 E-mail Id</label>
                                                <input type="text" class="form-control" placeholder="Guarantor1 E-mail Id" />
                                            </div>
                                        </div>

                                        <h5 class="mt-3">Guarantor2 Details</h5>

                                        <div class="row g-4">

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor2 Name</label>
                                                <input type="text" class="form-control" placeholder="Guarantor2 Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor2 Age</label>
                                                <input type="text" class="form-control" placeholder="Age" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor2 Father Name</label>
                                                <input type="text" class="form-control" placeholder="Father Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor2 Address</label>
                                                <input type="text" class="form-control" placeholder="Guarantor2 Address" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor2 Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="Guarantor2 Mobile No" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor2 E-mail Id</label>
                                                <input type="text" class="form-control" placeholder="Guarantor2 E-mail Id" />
                                            </div>
                                        </div>

                                        <h5 class="mt-3">Guarantor3 Details</h5>

                                        <div class="row g-4">

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor3 Name</label>
                                                <input type="text" class="form-control" placeholder="Guarantor3 Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor3 Age</label>
                                                <input type="text" class="form-control" placeholder="Age" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor3 Father Name</label>
                                                <input type="text" class="form-control" placeholder="Father Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor3 Address</label>
                                                <input type="text" class="form-control" placeholder="Guarantor3 Address" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor3 Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="Guarantor3 Mobile No" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor3 E-mail Id</label>
                                                <input type="text" class="form-control" placeholder="Guarantor3 E-mail Id" />
                                            </div>
                                        </div>

                                        <h5 class="mt-3">Guarantor4 Details</h5>

                                        <div class="row g-4">

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor4 Name</label>
                                                <input type="text" class="form-control" placeholder="Guarantor4 Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor4 Age</label>
                                                <input type="text" class="form-control" placeholder="Age" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor4 Father Name</label>
                                                <input type="text" class="form-control" placeholder="Father Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor4 Address</label>
                                                <input type="text" class="form-control" placeholder="Guarantor4 Address" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor4 Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="Guarantor4 Mobile No" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Guarantor4 E-mail Id</label>
                                                <input type="text" class="form-control" placeholder="Guarantor4 E-mail Id" />
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="Co-Guarantor" role="tabpanel">
                                        <div class="row g-4">

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Co - Guarantor Name</label>
                                                <input type="text" class="form-control" placeholder="Co - Guarantor Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Co - Guarantor Age</label>
                                                <input type="text" class="form-control" placeholder="Age" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Co - Guarantor Father Name</label>
                                                <input type="text" class="form-control" placeholder="Father Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Co - Guarantor Address</label>
                                                <input type="text" class="form-control" placeholder="Co - Guarantor Address" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Co - Guarantor Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="Co - Guarantor Mobile No" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Co - Guarantor E-mail Id</label>
                                                <input type="text" class="form-control" placeholder="Co - Guarantor E-mail Id" />
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-center gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>
                                    </div> -->

                                    <div class="tab-pane fade" id="loan" role="tabpanel">

                                        <div class="row g-4">

                                            <div class="col-md-4">
                                                <label class="form-label">Arbitrator Name</label>
                                                <input type="text" class="form-control" placeholder="Arbitrator Name">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Arbitrator No</label>
                                                <input type="text" class="form-control" placeholder="Arbitrator No">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Vehicle Seizure Date</label>
                                                <input type="date" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Presale Notice Date</label>
                                                <input type="date" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Presale Amount</label>
                                                <input type="text" class="form-control" placeholder="Presale Amount">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Post Sale Notice Date</label>
                                                <input type="date" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Post Sale Amount</label>
                                                <input type="text" class="form-control" placeholder="Post sale amount">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Claim Amount</label>
                                                <input type="text" class="form-control" placeholder="Claim Amount">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Cost of Award</label>
                                                <input type="text" class="form-control" placeholder="Cost of award">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Award Amount</label>
                                                <input type="text" class="form-control" placeholder="Award amount">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Award Date</label>
                                                <input type="date" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Receiver Name</label>
                                                <input type="text" class="form-control" placeholder="Receiver name">
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-end gap-2 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="schedule" role="tabpanel">

                                        <div class="table-responsive"
                                            style="height: 300px; border: 1px solid #8080803b;">
                                            <table class="table dataTable table-nowrap table-bordered"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Property Schedule</th>
                                                        <th>Title</th>
                                                        <th>Schedule</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Schedule A</td>
                                                        <td>Title A</td>
                                                        <td>Schedule Text</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-danger">
                                                                <i class="ti ti-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="row g-4 mt-2">

                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Property Schedule</label>
                                                <select class="form-select">
                                                    <option value="Schedule A">Schedule A</option>
                                                    <option value="Schedule B">Schedule B</option>
                                                    <option value="Schedule C">Schedule C</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Title</label>
                                                <input type="text" class="form-control" placeholder="Title" />
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <div id="snow-editor" style="height: 200px;">
                                            </div>
                                        </div>
                                        <div class="text-end mt-3">
                                            <a href="#" class="btn btn-success btn-sm">
                                                Add
                                            </a>
                                        </div>

                                        <div class="d-flex justify-content-end gap-2 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="Freeze" role="tabpanel">

                                        <div class="table-responsive"
                                            style="height: 300px; border: 1px solid #8080803b;">
                                            <table class="table dataTable table-nowrap table-bordered"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Account No</th>
                                                        <th>Bank Name</th>
                                                        <th>IFSC Code</th>
                                                        <th>PAN Number</th>
                                                        <th>Remarks</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>123456789012</td>
                                                        <td>State Bank of India</td>
                                                        <td>SBIN0000456</td>
                                                        <td>ABCDE1234F</td>
                                                        <td>Primary settlement account</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-danger">
                                                                <i class="ti ti-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="row mt-3 g-4">
                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Account No</label>
                                                <input type="text" class="form-control" placeholder="Account No" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Bank Name</label>
                                                <input type="text" class="form-control" placeholder="Bank Name" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">IFSC Code</label>
                                                <input type="text" class="form-control" placeholder="IFSC Code" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">PAN Number</label>
                                                <input type="text" class="form-control" placeholder="PAN Number" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Remarks</label>
                                                <textarea name="" class="form-control" placeholder="Remarks"
                                                    id=""></textarea>
                                            </div>

                                            <div class="col-md-6 col-lg-4 mt-auto">
                                                <a href="#" class="btn btn-primary btn-sm">
                                                    <i class="ti ti-plus"></i>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-end gap-2 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="extra-coloumn" role="tabpanel">
                                        <div class="row g-4">
                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Data 1</label>
                                                <input type="text" class="form-control" placeholder="Data 1" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Data 2</label>
                                                <input type="text" class="form-control" placeholder="Data 2" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Data 3</label>
                                                <input type="text" class="form-control" placeholder="Data 3" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Data 4</label>
                                                <input type="text" class="form-control" placeholder="Data 4" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Data 5</label>
                                                <input type="text" class="form-control" placeholder="Data 5" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Data 6</label>
                                                <input type="text" class="form-control" placeholder="Data 6" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Data 7</label>
                                                <input type="text" class="form-control" placeholder="Data 7" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Data 8</label>
                                                <input type="text" class="form-control" placeholder="Data 8" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Data 9</label>
                                                <input type="text" class="form-control" placeholder="Data 9" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Data 10</label>
                                                <input type="text" class="form-control" placeholder="Data 10" />
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bulk-Upload -->
                    <div id="unameTab" class="tab-pane">
                        <div class="form-group">
                            <div class="text-end">
                                <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#creationModal">
                                    <i class="ti ti-plus"></i>
                                </button>
                                <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                                    data-bs-target="#editModal">
                                    <i class="ti ti-download"></i>
                                </button>
                            </div>

                            <!-- Report List -->
                            <div class="table-responsive mt-3">
                                <table class="table table-nowrap datatable table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Allocation No</th>
                                            <th>Case Type</th>
                                            <th>Sub Case Type</th>
                                            <th>Case ID</th>
                                            <th>Case Nature</th>

                                            <th>CNR No</th>
                                            <th>Case No</th>
                                            <th>Court Name</th>
                                            <th>Filing Date</th>
                                            <th>Zone</th>

                                            <th>State</th>
                                            <th>Dist</th>
                                            <th>Product</th>
                                            <th>Loan No</th>
                                            <th>AAN Number</th>

                                            <th>Lead ID Number</th>
                                            <th>Customer Name</th>
                                            <th>Father Name</th>
                                            <th>Address 1</th>
                                            <th>Address 2</th>

                                            <th>Address 3</th>
                                            <th>Customer Mobile No</th>
                                            <th>Customer E-mail Id</th>
                                            <th>Case Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Allo001</td>
                                            <td>Civil Case</td>
                                            <td>Civil Suit</td>
                                            <td>CA001</td>
                                            <td>Fresh</td>

                                            <td>CNR001</td>
                                            <td>CASE-2025</td>
                                            <td>High Court</td>
                                            <td>2025-11-04</td>
                                            <td>South</td>

                                            <td>Chennai</td>
                                            <td>Chennai</td>
                                            <td>Car</td>
                                            <td>LOA0001</td>
                                            <td>AAA001</td>

                                            <td>LE0001</td>
                                            <td>Customer 1</td>
                                            <td>Father</td>
                                            <td>Address 1</td>
                                            <td>Address 2</td>

                                            <td>Address 3</td>
                                            <td>9876543210</td>
                                            <td>demo@gmail.com</td>
                                            <td>CA001</td>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="creationModalLabel">Case Bulk Upload</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="cnr" class="form-label">Allocation No</label>
                                <select class="form-control" data-choices name="choices-single-default"
                                    id="choices-single-default">
                                    <option value="">Select Allocation No</option>
                                    <option value="Allot001">Allot001</option>
                                    <option value="Allot002">Allot002</option>
                                    <option value="Allot003">Allot003</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="example-select" class="form-label">Case Nature</label>
                                <select class="form-select" id="example-selects">
                                    <option value="">Select</option>
                                    <option value="Fresh">Fresh</option>
                                    <option value="Appeal">Appeal</option>
                                    <option value="Connect Case">Connect Case</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 casenatureFields d-none">
                            <div class="mb-3">
                                <label for="cnr" class="form-label">CNR NO</label>
                                <input type="text" class="form-control" id="cnr" placeholder="CNR" />
                            </div>
                        </div>

                        <div class="col-md-6 casenatureFields d-none">
                            <div class="mb-3">
                                <label for="caseNo" class="form-label">Case NO</label>
                                <input type="text" class="form-control" id="caseNo" placeholder="No" />
                            </div>
                        </div>

                        <div class="col-md-6 casenatureFields d-none">
                            <div class="mb-3">
                                <label for="court" class="form-label">Court Name</label>
                                <input type="text" class="form-control" id="court" placeholder="Court" />
                            </div>
                        </div>

                        <div class="col-md-6 casenatureFields d-none">
                            <div class="mb-3">
                                <label for="date" class="form-label">Filing Date</label>
                                <input type="date" class="form-control" id="date" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Case Type</label>
                                <select class="form-select" id="caseType_edit">
                                    <option value="">Select</option>
                                    <option value="CivilCase">Civil Case</option>
                                    <option value="CriminalCase">Criminal Case</option>
                                    <option value="ArbitrationCase">Arbitration Case</option>
                                    <option value="SarfaesiCase">Sarfaesi Case</option>
                                    <option value="DRTCase">DRT Case</option>
                                    <option value="NACLTCase">NACLT Case</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Sub Case Type</label>

                                <select class="form-select subcase-edit" data-type="default">
                                    <option value="">Select</option>
                                </select>

                                <select class="form-select subcase-edit d-none" data-type="CivilCase">
                                    <option value="">Select</option>
                                    <option value="summary-suit">Summary Suit</option>
                                </select>

                                <select class="form-select subcase-edit d-none" data-type="CriminalCase">
                                    <option value="">Select</option>
                                    <option value="section-138">Section 138</option>
                                    <option value="section-25">Section 25</option>
                                </select>

                                <select class="form-select subcase-edit d-none" data-type="ArbitrationCase">
                                    <option value="">Select</option>
                                    <option value="Section21">Section 21</option>
                                </select>

                                <select class="form-select subcase-edit d-none" data-type="DRTCase">
                                    <option value="">Select</option>
                                    <option value="Section18">Section 18</option>
                                </select>

                                <select class="form-select subcase-edit d-none" data-type="NACLTCase">
                                    <option value="">Select</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label class="form-label">Upload Notice</label>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="editModalLabel">Case Bulk Download</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="cnr" class="form-label">Allocation No</label>
                                <select class="form-control" data-choices name="choices-single-default"
                                    id="choices-single-default">
                                    <option value="">Select Allocation No</option>
                                    <option value="Allot001">Allot001</option>
                                    <option value="Allot002">Allot002</option>
                                    <option value="Allot003">Allot003</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="example-select" class="form-label">Case Nature</label>
                                <select class="form-select" id="fresh">
                                    <option value="">Select</option>
                                    <option value="Fresh">Fresh</option>
                                    <option value="Appeal">Appeal</option>
                                    <option value="Connect Case">Connect Case</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 casefreshFields d-none">
                            <div class="mb-3">
                                <label for="cnr" class="form-label">CNR NO</label>
                                <input type="text" class="form-control" id="cnr" placeholder="CNR" />
                            </div>
                        </div>

                        <div class="col-md-6 casefreshFields d-none">
                            <div class="mb-3">
                                <label for="caseNo" class="form-label">Case NO</label>
                                <input type="text" class="form-control" id="caseNo" placeholder="No" />
                            </div>
                        </div>

                        <div class="col-md-6 casefreshFields d-none">
                            <div class="mb-3">
                                <label for="court" class="form-label">Court Name</label>
                                <input type="text" class="form-control" id="court" placeholder="Court" />
                            </div>
                        </div>

                        <div class="col-md-6 casefreshFields d-none">
                            <div class="mb-3">
                                <label for="date" class="form-label">Filing Date</label>
                                <input type="date" class="form-control" id="date" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Case Type</label>
                                <select class="form-select" id="caseType_download">
                                    <option value="">Select</option>
                                    <option value="CivilCase">Civil Case</option>
                                    <option value="CriminalCase">Criminal Case</option>
                                    <option value="ArbitrationCase">Arbitration Case</option>
                                    <option value="DRTCase">DRT Case</option>
                                    <option value="NACLTCase">NACLT Case</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <!-- Sub Case -->
                            <div class="mb-3">
                                <label class="form-label">Sub Case Type</label>

                                <select class="form-select subcase-download" data-type="default">
                                    <option value="">Select</option>
                                </select>

                                <select class="form-select subcase-download d-none" data-type="CivilCase">
                                    <option value="">Select</option>
                                    <option value="summary-suit">Summary Suit</option>
                                </select>

                                <select class="form-select subcase-download d-none" data-type="CriminalCase">
                                    <option value="">Select</option>
                                    <option value="section-138">Section 138</option>
                                    <option value="section-25">Section 25</option>
                                </select>

                                <select class="form-select subcase-download d-none" data-type="ArbitrationCase">
                                    <option value="">Select</option>
                                    <option value="Section21">Section 21</option>
                                </select>

                                <select class="form-select subcase-download d-none" data-type="DRTCase">
                                    <option value="">Select</option>
                                    <option value="Section18">Section 18</option>
                                </select>

                                <select class="form-select subcase-download d-none" data-type="NACLTCase">
                                    <option value="">Select</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6 mt-3">

                            <div class="mb-3 d-flex align-items-center justify-content-center">
                                <p class="mb-0">Download Notice</p>
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
    document.addEventListener("DOMContentLoaded", function () {

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

        setupModal("caseType_edit", "subcase-edit");
        setupModal("caseType_download", "subcase-download");

    });
</script>

<script>
    const otpRadio = document.getElementById("rad1");
    const unameRadio = document.getElementById("rad2");
    const otpTab = document.getElementById("otpTab");
    const unameTab = document.getElementById("unameTab");

    function updateTabs() {
        if (otpRadio.checked) {
            otpTab.classList.add("active");
            unameTab.classList.remove("active");
        } else if (unameRadio.checked) {
            unameTab.classList.add("active");
            otpTab.classList.remove("active");
        }
    }

    otpRadio.addEventListener("change", updateTabs);
    unameRadio.addEventListener("change", updateTabs);

    updateTabs();
</script>

<script>
    const caseNature = document.getElementById("example-select");
    const caseFields = document.querySelectorAll(".caseFields");

    caseNature.addEventListener("change", function () {
        if (this.value === "Appeal" || this.value === "Connect Case") {
            caseFields.forEach(field => field.classList.remove("d-none"));
        } else {
            caseFields.forEach(field => field.classList.add("d-none"));
        }
    });

    const caseNatures = document.getElementById("example-selects");
    const casenatureFields = document.querySelectorAll(".casenatureFields");

    caseNatures.addEventListener("change", function () {
        if (this.value === "Appeal" || this.value === "Connect Case") {
            casenatureFields.forEach(field => field.classList.remove("d-none"));
        } else {
            casenatureFields.forEach(field => field.classList.add("d-none"));
        }
    });
    const caseFresh = document.getElementById("fresh");
    const casenFreshFields = document.querySelectorAll(".casefreshFields");

    caseFresh.addEventListener("change", function () {
        if (this.value === "Appeal" || this.value === "Connect Case") {
            casenFreshFields.forEach(field => field.classList.remove("d-none"));
        } else {
            casenFreshFields.forEach(field => field.classList.add("d-none"));
        }
    });

    const caseType = document.getElementById("sub-case");
    const caseField = document.querySelectorAll(".caseField");

    caseType.addEventListener("change", function () {
        if (this.value === "ep") {
            caseField.forEach(field => field.classList.remove("d-none"));
        } else {
            caseField.forEach(field => field.classList.add("d-none"));
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {

        const triggerTabList = [].slice.call(document.querySelectorAll('#caseTabs a'));

        function getActiveTabIndex() {
            return triggerTabList.findIndex(tab => tab.classList.contains('active'));
        }

        document.querySelectorAll('.next-tab').forEach(btn => {
            btn.addEventListener('click', () => {
                let activeIndex = getActiveTabIndex();
                if (activeIndex < triggerTabList.length - 1) {
                    new bootstrap.Tab(triggerTabList[activeIndex + 1]).show();
                }
            });
        });

        document.querySelectorAll('.prev-tab').forEach(btn => {
            btn.addEventListener('click', () => {
                let activeIndex = getActiveTabIndex();
                if (activeIndex > 0) {
                    new bootstrap.Tab(triggerTabList[activeIndex - 1]).show();
                }
            });
        });

    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const caseTypeSelect = document.getElementById("case-type");
        const subCaseSelects = document.querySelectorAll("#sub-case");

        caseTypeSelect.addEventListener("change", function () {
            const selectedCase = this.value;

            subCaseSelects.forEach(select => {
                const caseValue = select.getAttribute("value");
                if (caseValue === selectedCase) {
                    select.classList.remove("d-none");
                } else {
                    select.classList.add("d-none");
                }
            });
        });

        subCaseSelects.forEach((select, index) => {
            if (index !== 0) select.classList.add("d-none");
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        const caseTypeSelect = document.getElementById("case-types");
        const subCaseSelects = document.querySelectorAll("#sub-cases");

        caseTypeSelect.addEventListener("change", function () {
            const selectedCase = this.value;

            subCaseSelects.forEach(select => {
                const caseValue = select.getAttribute("value");
                if (caseValue === selectedCase) {
                    select.classList.remove("d-none");
                } else {
                    select.classList.add("d-none");
                }
            });
        });

        subCaseSelects.forEach((select, index) => {
            if (index !== 0) select.classList.add("d-none");
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const subCaseSelects = document.querySelectorAll('#sub-case');

        subCaseSelects.forEach(select => {
            select.addEventListener('change', function () {
                const value = this.value;

                document.querySelectorAll('.casebox').forEach(el => el.classList.add('d-none'));
                document.querySelectorAll('.caseField').forEach(el => el.classList.add('d-none'));

                const extraCol = document.querySelector('.extra-col');
                if (extraCol) extraCol.classList.add('d-none');

                if (value) {

                    document.querySelectorAll('.' + value).forEach(el => el.classList.remove('d-none'));

                    const hasCasebox = document.querySelectorAll('.casebox.' + value).length > 0;
                    if (!hasCasebox) {
                        document.querySelectorAll('.caseField.' + value).forEach(el => el.classList.remove('d-none'));
                    }

                    const visibleBoxes = document.querySelectorAll('.' + value + ':not(.d-none)');
                    if (visibleBoxes.length > 0 && extraCol) {
                        extraCol.classList.remove('d-none');
                    }
                }
            });
        });
    });
</script>

<!-- Quill Editor JS -->
<script src="assets/plugins/quill/quill.min.js" type="text/javascript"></script>

<!-- Quill JS -->
<script src="assets/js/form-quill.js" type="text/javascript"></script>

<?php include 'footer.php'; ?>
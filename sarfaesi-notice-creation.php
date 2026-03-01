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

<style>
    .step-nav {
        display: flex;
        justify-content: space-between;
        border-bottom: none !important;
        position: relative;
        margin-bottom: 20px;
    }

    .step-nav::before {
        content: "";
        position: absolute;
        top: 15px;
        left: 20px;
        right: 30px;
        height: 2px;
        background: #e1e1e1;
        z-index: 0;
    }

    .step-nav .nav-link {
        border: none !important;
        background: none !important;
        position: relative;
        padding: 0;
        text-align: center;
        z-index: 1;
    }

    .step-circle {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #dfdfdf;
        color: #555;
        font-size: 13px;
        font-weight: 600;
        margin: 0 auto;
    }

    .step-label {
        display: block;
        margin-top: 6px;
        font-size: 11px;
        color: #777;
        white-space: nowrap;
    }

    .step-nav .nav-link.completed .step-circle {
        background: #22c55e !important;
        color: #fff !important;
    }

    .step-nav .nav-link.completed .step-label {
        color: #22c55e !important;
    }

    .step-nav .nav-link.active .step-circle {
        background: #7c3aed !important;
        color: #fff !important;
    }
</style>



<!--<div class="d-flex align-items-center">-->
<!--    <a href="sarfaesi-case.php" class="mb-3 text-primary" style="font-weight: 600;"> <i class="ti ti-arrow-left mt-0" style="font-size: 16px;font-weight: 600;"></i> Go Back </a>-->
<!--</div>-->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Sarfaesi Notice</h5>
                <!--<div class="radio-btn mx-auto" style="display: flex; justify-content: center; gap: 60px;">-->
                <!--    <div class="input-box" style="display: flex; align-items: center; gap: 10px;">-->
                <!--        <input type="radio" id="rad1" name="loginType" value="otp" checked>-->
                <!--        <h6 style="margin-bottom: unset;">Single</h6>-->
                <!--    </div>-->
                <!--    <div class="input-box" style="display: flex; align-items: center; gap: 10px;">-->
                <!--        <input type="radio" id="rad2" name="loginType" value="uname">-->
                <!--        <h6 style="margin-bottom: unset;">Bulk Upload</h6>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <div class="card-body">
                <div id="otpTab" class="tab-pane active">
                    <div class="card card-case">
                        <div class="card-body">

                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4">
                                    <label for="cnr" class="form-label">Allocation No</label>
                                    <select class="form-control" data-choices name="choices-single-default"
                                        id="choices-single-default">
                                        <option value="">Select Allocation No</option>
                                        <option value="">Allot001</option>
                                        <option value="">Allot002</option>
                                        <option value="">Allot003</option>
                                    </select>
                                </div>
                                <!--<div class="col-md-6 col-lg-4">-->
                                <!--    <label class="form-label">Loan Number <span style="color:red;">*</span></label>-->
                                <!--    <select class="form-control" data-choices data-choices-removeItem multiple>-->
                                <!--        <option value="LN-789001" selected>LN-789001</option>-->
                                <!--        <option value="LN-789002">LN-789002</option>-->
                                <!--        <option value="LN-789003">LN-789003</option>-->
                                <!--    </select>-->
                                <!--</div>-->
                                <div class="col-md-3 col-lg-4 mt-auto mb-2">
                                    <button class="btn btn-sm btn-primary me-2">
                                        <i class="ti ti-search"></i> Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-case">
                        <div class="card-body">
                            <h5>Notice Details</h5>
                            <ul class="nav nav-tabs mb-3" id="caseTabs" role="tablist">
                                <li class="nav-item">
                                    <a href="#Basic" data-bs-toggle="tab" class="nav-link active" role="tab">Basic
                                        Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Product" data-bs-toggle="tab" class="nav-link" role="tab">Product
                                        Details</a>
                                </li>
                                <!-- <li class="nav-item">
                                        <a href="#home" data-bs-toggle="tab" class="nav-link" role="tab"> Case Creation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#vehicle" data-bs-toggle="tab" class="nav-link" role="tab">Vehicle Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#media" data-bs-toggle="tab" class="nav-link" role="tab">MED/LOK/CON</a>
                                    </li> -->
                                <li class="nav-item">
                                    <a href="#Applicant" data-bs-toggle="tab" class="nav-link" role="tab">Sender
                                        Details</a>
                                </li>
                                <!-- <li class="nav-item">
                                        <a href="#loan" data-bs-toggle="tab" class="nav-link" role="tab">Loss On Sale Details</a>
                                    </li> -->
                                <li class="nav-item">
                                    <a href="#schedule" data-bs-toggle="tab" class="nav-link" role="tab">Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Notice" data-bs-toggle="tab" class="nav-link" role="tab">Notice
                                        Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#advocate" data-bs-toggle="tab" class="nav-link" role="tab">Advocate
                                        Commission</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Property" data-bs-toggle="tab" class="nav-link" role="tab">Property
                                        Attachment</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Attachment" data-bs-toggle="tab" class="nav-link" role="tab">KYC</a>
                                </li>
                                <!-- <li class="nav-item">
                                        <a href="#extra-coloumn" data-bs-toggle="tab" class="nav-link" role="tab">Extra Column</a>
                                    </li> -->
                            </ul>

                            <div class="tab-content" id="caseTabsContent">

                                <div class="tab-pane fade show active" id="Basic" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">
                                            <label for="input-label" class="form-label">Customer ID <span
                                                    style="color:red;">*</span></label>
                                            <input type="text" class="form-control" placeholder="Customer Id" />
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label for="input-label" class="form-label">Case Type</label>
                                                <input type="text" class="form-control" value="Case Type">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label for="input-label" class="form-label">Sub Case Type</label>
                                                <input type="text" class="form-control" value="Section 14">
                                            </div>
                                        </div>

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
                                    <div class="d-flex justify-content-end gap-1 mt-3">
                                        <button class="btn btn-secondary prev-tab">Previous</button>
                                        <button class="btn btn-primary next-tab">Next</button>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="Product" role="tabpanel">
                                    <div class="table-responsive" style="height: 300px; border: 1px solid #8080803b;">
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
                                                    <th>Amount Disbursed</th>
                                                    <th>Amount Sanctioned</th>
                                                    <th>EMI Amount</th>
                                                    <th>No. of EMI Due</th>
                                                    <th>Tenure</th>
                                                    <th>Principal Outstanding</th>
                                                    <th>FC Amount</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>LNAB5A57</td>
                                                    <td>Car Loan, Business Loan</td>
                                                    <td>₹ 5,00,000</td>
                                                    <td>2025-06-10</td>
                                                    <td>₹ 4,80,000</td>
                                                    <td>₹ 5,00,000</td>
                                                    <td>₹ 12,500</td>
                                                    <td>8</td>
                                                    <td>48 Months</td>
                                                    <td>₹ 1,20,000</td>
                                                    <td>₹ 20,000</td>
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
                                            <label class="form-label">Product <span style="color:red;">*</span></label>
                                            <select class="form-control" data-choices data-choices-removeItem multiple>
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
                                            <input type="text" class="form-control" placeholder="Amount Sanctioned" />
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

                                        <div class="col-md-6 col-lg-4">
                                            <label class="form-label">FC Amount <span
                                                    style="color:red;">*</span></label>
                                            <input type="text" class="form-control" placeholder="FC Amount" />
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

                                <!-- <div class="tab-pane fade" id="home" role="tabpanel">
                                        <div class="row g-4">

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Customer ID <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Customer Id" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="example-select" class="form-label">Case Nature <span style="color:red;">*</span></label>
                                                <select class="form-select" id="example-select">
                                                    <option value="">Select</option>
                                                    <option value="Fresh">Fresh</option>
                                                    <option value="Appeal">Appeal</option>
                                                    <option value="Connect Case">Connect Case</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 col-lg-4 caseFields d-none">
                                                <label for="cnr" class="form-label">CNR NO</label>
                                                <input type="text" class="form-control" id="cnr" placeholder="CNR" />
                                            </div>

                                            <div class="col-md-6 col-lg-4 caseFields d-none">
                                                <label for="caseNo" class="form-label">Case NO</label>
                                                <input type="text" class="form-control" id="caseNo" placeholder="No" />
                                            </div>

                                            <div class="col-md-6 col-lg-4 caseFields d-none">
                                                <label for="court" class="form-label">Court Name</label>
                                                <input type="text" class="form-control" id="court" placeholder="Court" />
                                            </div>

                                            <div class="col-md-6 col-lg-4 caseFields d-none">
                                                <label for="date" class="form-label">Filing Date</label>
                                                <input type="date" class="form-control" id="date" />
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
                                                <input type="text" class="form-control" placeholder="Frequency of EMI" />
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
                                                <input type="text" class="form-control" placeholder="Rate of Interest" />
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
                                                <input type="text" class="form-control" placeholder="Future Receivable" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">FC Amount <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="FC Amount" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">FC amount in words</label>
                                                <input type="text" class="form-control" placeholder="FC amount in words" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Agreement Date</label>
                                                <input type="date" class="form-control" />
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="input-label" class="form-label">Agreement Clause</label>
                                                <input type="text" class="form-control" placeholder="Agreement Clause" />
                                            </div>
                                        </div>

                                        <h5 class="mt-4">Collection Manager Details</h5>

                                        <div class="row g-4 mt-1">

                                            <div class="col-md-6 col-lg-4">
                                                <label for="txt_collec_mang_name" class="form-label">Collection Manager Name</label>
                                                <input type="text" class="form-control" placeholder="Collection Manager Name" autocomplete="off" id="txt_collec_mang_name">
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="txt_collec_mang_number" class="form-label">Collection Manager Number</label>
                                                <input type="text" class="form-control" placeholder="Collection Manager Number" autocomplete="off" id="txt_collec_mang_number">
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="txt_collec_mang_mail" class="form-label">Collection Manager Mail id</label>
                                                <input type="text" class="form-control" placeholder="Collection Manager Mail" autocomplete="off" id="txt_collec_mang_mail">
                                            </div>

                                        </div>

                                        <hr>

                                        <div class="row">
                                            <h5 class="extra-col d-none">Extra Column</h5>


                                            <div class="col-md-6 col-lg-4 casebox Section-13-1 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Santioned amount</label>
                                                    <input type="text" class="form-control" placeholder="Santioned amount" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 casebox Section-13-1 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Santioned date</label>
                                                    <input type="text" class="form-control" placeholder="Santioned date" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 casebox Section-13-1 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Nature of facility</label>
                                                    <input type="text" class="form-control" placeholder="Nature of facility" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 casebox Section-13-1 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Property details</label>
                                                    <input type="text" class="form-control" placeholder="Property details" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 casebox Section-13-1 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Authorized officer name</label>
                                                    <input type="text" class="form-control" placeholder="Authorized officer name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 casebox Section-13-1 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Authorized officer designation</label>
                                                    <input type="text" class="form-control" placeholder="Authorized officer name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 casebox Section-13-2 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">13(2) Notice date</label>
                                                    <input type="text" class="form-control" placeholder="Notice date" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 casebox Section-13-2 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Possession notice under Rule 8 (1)</label>
                                                    <input type="text" class="form-control" placeholder="Possession notice under Rule" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 casebox Section-13-2 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Paper publication(within 7 days)</label>
                                                    <input type="text" class="form-control" placeholder="Paper publication" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 casebox Section-13-2 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Inventory</label>
                                                    <input type="text" class="form-control" placeholder="Inventory" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 casebox Section-13-2 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Panchanana</label>
                                                    <input type="text" class="form-control" placeholder="Panchanana" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 casebox Section-13-2 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Valuation report</label>
                                                    <input type="text" class="form-control" placeholder="Valuation report" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 casebox Section-13-2 d-none">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Sales notice under Rule 8(6)</label>
                                                    <input type="text" class="form-control" placeholder="Sales notice under Rule " />
                                                </div>
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>
                                    </div> -->

                                <!-- <div class="tab-pane fade" id="vehicle" role="tabpanel">
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
                                    </div> -->

                                <!-- <div class="tab-pane fade" id="media" role="tabpanel">
                                        <div class="row g-4">

                                            <div class="col-md-4">
                                                <label class="form-label">Mediator Name</label>
                                                <input type="text" class="form-control" placeholder="Mediator Name">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Mediation Venue</label>
                                                <input type="text" class="form-control" placeholder="Mediation Venue">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Mediation Time</label>
                                                <input type="time" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label">Mediation Date</label>
                                                <input type="date" class="form-control">
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-primary next-tab">Next</button>
                                        </div>
                                    </div> -->

                                <div class="tab-pane fade" id="Applicant" role="tabpanel">
                                    <div class="table-responsive" style="height: 300px; border: 1px solid #8080803b;">
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
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
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

                                <!-- <div class="tab-pane fade" id="loan" role="tabpanel">

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

                                    </div> -->

                                <div class="tab-pane fade" id="schedule" role="tabpanel">

                                    <div class="table-responsive" style="height: 300px; border: 1px solid #8080803b;">
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

                                <!-- <div class="tab-pane fade" id="extra-coloumn" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Data 1</label>
                                                    <input type="text" class="form-control" placeholder="Data 1" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Data 2</label>
                                                    <input type="text" class="form-control" placeholder="Data 2" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Data 3</label>
                                                    <input type="text" class="form-control" placeholder="Data 3" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Data 4</label>
                                                    <input type="text" class="form-control" placeholder="Data 4" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Data 5</label>
                                                    <input type="text" class="form-control" placeholder="Data 5" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Data 6</label>
                                                    <input type="text" class="form-control" placeholder="Data 6" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Data 7</label>
                                                    <input type="text" class="form-control" placeholder="Data 7" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Data 8</label>
                                                    <input type="text" class="form-control" placeholder="Data 8" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Data 9</label>
                                                    <input type="text" class="form-control" placeholder="Data 9" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="input-label" class="form-label">Data 10</label>
                                                    <input type="text" class="form-control" placeholder="Data 10" />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-success">Save</button>
                                        </div>
                                    </div> -->

                                <div class="tab-pane fade" id="Notice" role="tabpanel">

                                    <div class="table-responsive" style="height: 300px; border: 1px solid #8080803b;">
                                        <table class="table dataTable table-nowrap table-bordered"
                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Notice Type</th>
                                                    <th>Notice Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Pre Sarfaesi</td>
                                                    <td>02-02-2026</td>
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
                                            <label class="form-label">Notice Type</label>
                                            <select class="form-select">
                                                <option value="Pre Sarfaesi">Pre Sarfaesi</option>
                                                <option value="Sec 13(2)">Sec 13(2)</option>
                                                <option value="Sec 13(3)">Sec 13(3)</option>
                                                <option value="Sec 13(3A)">Sec 13(3A)</option>
                                                <option value="Sec 13(14)">Sec 13(4)</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <label class="form-label">Notice Date</label>
                                            <input type="date" class="form-control" />
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

                                <div class="tab-pane fade" id="advocate" role="tabpanel">
                                    <div class="row g-4">

                                        <div class="col-md-4">
                                            <label class="form-label">Advocate Commission Name</label>
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label">Advocate Commission Mobile No</label>
                                            <input type="text" class="form-control" placeholder="Mobile No">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label">Advocate Commission Address</label>
                                            <textarea class="form-control" placeholder="Address"></textarea>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-end gap-1 mt-3">
                                        <button class="btn btn-secondary prev-tab">Previous</button>
                                        <button class="btn btn-primary next-tab">Next</button>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="Property" role="tabpanel">

                                    <div class="table-responsive" style="height: 300px; border: 1px solid #8080803b;">
                                        <table class="table dataTable table-nowrap table-bordered"
                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Property Schedule</th>
                                                    <th>Document Type</th>
                                                    <th>Attachment</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Schedule A</td>
                                                    <td>Patta</td>
                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                                            <i class="ti ti-paperclip me-1"></i> Download
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary me-2">
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

                                    <div class="row mt-3 g-4">
                                        <div class="col-md-6 col-lg-4">
                                            <label class="form-label">Property Schedule</label>
                                            <select class="form-select">
                                                <option value="Schedule A">Schedule A</option>
                                                <option value="Schedule B">Schedule B</option>
                                                <option value="Schedule C">Schedule C</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <label class="form-label">Document Type</label>
                                            <select class="form-select">
                                                <option value="Patta">Patta</option>
                                                <option value="chitta">Chitta</option>
                                                <option value="Parent Document">Parent Document</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <label class="form-label">Attachment</label>
                                            <input type="file" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="text-end mt-3">
                                        <a href="#" class="btn btn-success btn-sm">
                                            <i class="ti ti-plus"></i>
                                        </a>
                                    </div>

                                    <div class="d-flex justify-content-end gap-2 mt-3">
                                        <button class="btn btn-secondary prev-tab">Previous</button>
                                        <button class="btn btn-primary next-tab">Next</button>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="Attachment" role="tabpanel">

                                    <div class="table-responsive" style="height: 300px; border: 1px solid #8080803b;">
                                        <table class="table dataTable table-nowrap table-bordered"
                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Sender Type</th>
                                                    <th>Sender Name</th>
                                                    <th>Address</th>
                                                    <th>KYC Document</th>
                                                    <th>Attachment</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Applicant</td>
                                                    <td>Rahul</td>
                                                    <td>North Street Chennai - 600034</td>
                                                    <td>PAN Card</td>
                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                                            <i class="ti ti-paperclip me-1"></i> Download
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary me-2">
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

                                    <div class="row mt-3 g-4">
                                        <div class="col-md-6 col-lg-4">
                                            <label for="input-label" class="form-label">Sender Type</label>
                                            <select class="form-select" id="example-select">
                                                <option>Applicant</option>
                                                <option>Co Applicant</option>
                                                <option>Guarantor</option>
                                                <option>Co Guarantor</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <label class="form-label">Sender Name</label>
                                            <select class="form-select">
                                                <option value="Rahul">Rahul</option>
                                                <option value="Suresh">Suresh</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <label class="form-label">Address</label>
                                            <textarea name="" class="form-control" placeholder="Address"
                                                id=""></textarea>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <label class="form-label">KYC Document</label>
                                            <select class="form-control" data-choices name="choices-single-default"
                                                id="choices-single-default">
                                                <option value="">Select Document</option>
                                                <option value="PAN Card">PAN Card</option>
                                                <option value="Aadhar">Aadhar</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <label class="form-label">Attachment</label>
                                            <input type="file" class="form-control" />
                                        </div>

                                        <div class="col-md-6 col-lg-4 mt-auto">
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="ti ti-plus"></i>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="d-flex justify-content-end gap-2 mt-3">
                                        <button class="btn btn-secondary prev-tab">Previous</button>
                                        <button class="btn btn-success">Save</button>
                                    </div>

                                </div>

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
                <h5 class="modal-title" id="creationModalLabel">Sarfaesi Case Upload</h5>
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
                                    <!-- <option value="">Select</option>
                                    <option value="CivilCase">Civil Case</option>
                                    <option value="CriminalCase">Criminal Case</option>
                                    <option value="ArbitrationCase">Arbitration Case</option> -->
                                    <option value="SarfaesiCase">Sarfaesi Case</option>
                                    <!-- <option value="DRTCase">DRT Case</option>
                                    <option value="NACLTCase">NACLT Case</option>
                                    <option value="ConsumerCase">Consumer Case</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Sub Case Type</label>

                                <select class="form-select subcase-edit" data-type="default">
                                    <option value="">Select</option>
                                </select>

                                <!-- <select class="form-select subcase-edit d-none" data-type="CivilCase">
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
                                </select> -->

                                <select class="form-select subcase-edit d-none" data-type="SarfaesiCase">
                                    <option value="">Select</option>
                                    <option value="Section13-2">Section 13 (2)</option>
                                    <!-- <option value="Section13-4">Section 13 (4)</option> -->
                                    <option value="Section14">Section 14</option>
                                </select>

                                <!-- <select class="form-select subcase-edit d-none" data-type="DRTCase">
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
                                </select> -->
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
                <h5 class="modal-title" id="editModalLabel">Sarfaesi Case Download</h5>
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
                                    <!-- <option value="">Select</option>
                                    <option value="CivilCase">Civil Case</option>
                                    <option value="CriminalCase">Criminal Case</option>
                                    <option value="ArbitrationCase">Arbitration Case</option> -->
                                    <option value="SarfaesiCase">Sarfaesi Case</option>
                                    <!-- <option value="DRTCase">DRT Case</option>
                                    <option value="NACLTCase">NACLT Case</option>
                                    <option value="ConsumerCase">Consumer Case</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <!-- Sub Case -->
                            <div class="mb-3">
                                <label class="form-label">Sub Case Type</label>

                                <!-- <select class="form-select subcase-download" data-type="default">
                                    <option value="">Select</option>
                                </select>

                                <select class="form-select subcase-download d-none" data-type="CivilCase">
                                    <option value="">Select</option>
                                    <option value="civil-suit">Civil Suit</option>
                                    <option value="summary-suit">Summary Suit</option>
                                    <option value="against-case">Against Case</option>
                                    <option value="ep">EP</option>
                                    <option value="insolvency-petition">Insolvency Petition</option>
                                </select>

                                <select class="form-select subcase-download d-none" data-type="CriminalCase">
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

                                <select class="form-select subcase-download d-none" data-type="ArbitrationCase">
                                    <option value="">Select</option>
                                    <option value="Section21">Section 21</option>
                                    <option value="Section11">Section 11</option>
                                    <option value="Section17">Section 17</option>
                                    <option value="Section34">Section 34</option>
                                    <option value="EP">EP</option>
                                </select> -->

                                <select class="form-select subcase-download d-none" data-type="SarfaesiCase">
                                    <option value="">Select</option>
                                    <option value="Section13-2">Section 13 (2)</option>
                                    <!-- <option value="Section13-4">Section 13 (4)</option> -->
                                    <option value="Section14">Section 14</option>
                                </select>

                                <!-- <select class="form-select subcase-download d-none" data-type="DRTCase">
                                    <option value="">Select</option>
                                    <option value="Section18">Section 18</option>
                                    <option value="Section19">Section 19</option>
                                    <option value="Writ">Writ</option>
                                </select>

                                <select class="form-select subcase-download d-none" data-type="NACLTCase">
                                    <option value="">Select</option>
                                </select>

                                <select class="form-select subcase-download d-none" data-type="ConsumerCase">
                                    <option value="">Select</option>
                                    <option value="DistrictCase">District Case</option>
                                    <option value="StateCase">State Case</option>
                                    <option value="EP">EP</option>
                                    <option value="NationalCase">National Case</option>
                                </select> -->
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

        const tabs = [...document.querySelectorAll('#sarfaesiTabs .nav-link')];

        function updateUI(activeIndex) {
            tabs.forEach((tab, idx) => {
                const circle = tab.querySelector(".step-circle");

                if (idx < activeIndex) {
                    tab.classList.add("completed");
                    circle.textContent = "✓";
                } else {
                    tab.classList.remove("completed");
                    circle.textContent = (idx + 1).toString().padStart(2, '0');
                }
            });
        }

        function showTab(index) {
            new bootstrap.Tab(tabs[index]).show();
            updateUI(index);
        }

        document.addEventListener("click", function (e) {
            if (e.target.classList.contains("next-tabs")) {
                const currentIndex = tabs.findIndex(t => t.classList.contains("active"));
                if (currentIndex < tabs.length - 1) {
                    showTab(currentIndex + 1);
                }
            }

            if (e.target.classList.contains("prev-tabs")) {
                const currentIndex = tabs.findIndex(t => t.classList.contains("active"));
                if (currentIndex > 0) {
                    showTab(currentIndex - 1);
                }
            }
        });

        tabs.forEach((tab, idx) => {
            tab.addEventListener("click", () => showTab(idx));
        });

        updateUI(0);
    });
</script>







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

    // Listen for radio button changes
    otpRadio.addEventListener("change", updateTabs);
    unameRadio.addEventListener("change", updateTabs);

    // Initialize correct tab on load
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
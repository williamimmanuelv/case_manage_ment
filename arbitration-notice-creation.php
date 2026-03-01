<?php include 'header.php'; ?>

<!-- Quill css -->
<link rel="stylesheet" href="assets/plugins/quill/quill.core.css">
<link rel="stylesheet" href="assets/plugins/quill/quill.snow.css">
<link rel="stylesheet" href="assets/plugins/quill/quill.bubble.css">




<style>
    .toggle-wrapper {
        position: relative;
        display: flex;
        width: 220px;
        background: #f1f1f1;
        border-radius: 50px;
        /* padding: 5px; */
    }

    .toggle-wrapper input {
        display: none;
    }

    .toggle-wrapper label {
        flex: 1;
        text-align: center;
        padding: 8px 0;
        cursor: pointer;
        z-index: 2;
        font-weight: 500;
        border-radius: 50px;
        transition: 0.3s;
    }

    .toggle-wrapper .slider {
        position: absolute;
        top: 5px;
        left: 5px;
        width: 48%;
        height: calc(100% - 10px);
        background: #cda85d;
        border-radius: 50px;
        transition: 0.3s;
    }

    /* Move slider when Bulk selected */
    #rad2:checked~.slider {
        left: 50%;
    }

    /* Active text color */
    #rad1:checked+label,
    #rad2:checked+label {
        color: white;
    }

    .btn-secondary {
        background: transparent !important;
        color: #cda85d !important;
    }
</style>

<div class="d-flex align-items-center">
    <a href="arbitration-notice-report.php" class="mb-3 text-primary" style="font-weight: 600;"> <i
            class="ti ti-arrow-left mt-0" style="font-size: 16px;font-weight: 600;"></i> Go Back </a>
</div>

<div class="row">
    <div class="col-xl-12">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Arbitration Section 21 Notice</h5>
                <div class="toggle-wrapper">
                    <input type="radio" name="uploadType" id="rad1" value="otp" checked>
                    <label for="rad1">Single</label>

                    <input type="radio" name="uploadType" id="rad2" value="uname">
                    <label for="rad2">Bulk Upload</label>

                    <span class="slider"></span>
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
                                            <i class="ti ti-search me-2"></i> Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-case">
                            <div class="card-body">
                                <h5>Basic Details</h5>
                                <hr>
                                <!-- <div class="row g-3">
                                <div class="col-md-4">
                                    <p class="mb-0">
                                    <strong>Case Type :</strong> <span>Civil Case</span>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="mb-0">
                                    <strong>Sub Case Type :</strong> <span>Civil Suit</span>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="mb-0"><strong>Act :</strong> <span>Act Section</span></p>
                                </div>
                                <div class="col-md-4">
                                    <p class="mb-0"><strong>Act Subtype :</strong> <span>Act Subtype Section</span></p>
                                </div>
                                <div class="col-md-4">
                                    <p class="mb-0"><strong>Zone :</strong> <span>South Zone</span></p>
                                </div>
                                <div class="col-md-4">
                                    <p class="mb-0"><strong>State :</strong> <span>Tamil Nadu</span></p>
                                </div>
                                <div class="col-md-4">
                                    <p class="mb-0"><strong>District :</strong> <span>Chennai</span></p>
                                </div>
                                <div class="col-md-4">
                                    <p class="mb-0"><strong>Branch :</strong> <span>Egmore</span></p>
                                </div>
                                </div> -->
                                <div class="row g-4 ">

                                    <div class="col-md-6 col-lg-4">
                                        <label for="input-label" class="form-label">Case Type <span
                                                style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Case type">
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label for="input-label" class="form-label">Sub Case Type <span
                                                style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Sub Case Type">
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label class="form-label">Zone</label>
                                        <input type="text" class="form-control" placeholder="Enter Zone">
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label class="form-label">State</label>
                                        <input type="text" class="form-control" placeholder="Enter State">
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label class="form-label">District</label>
                                        <input type="text" class="form-control" placeholder="Enter District">
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label class="form-label">Branch</label>
                                        <input type="text" class="form-control" placeholder="Branch">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-case">
                            <div class="card-body">
                                <h5>Notice Details</h5>
                                <hr>

                                <ul class="nav nav-tabs nav-bordered mb-3" id="caseTabs" role="tablist">
                                    <li class="nav-item">
                                        <a href="#home" data-bs-toggle="tab" class="nav-link active" role="tab">
                                            <span class="d-md-inline-block">Notice </span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#Product" data-bs-toggle="tab" class="nav-link" role="tab">
                                            <span class="d-md-inline-block">Product </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#vehicle" data-bs-toggle="tab" class="nav-link" role="tab">
                                            <span class="d-md-inline-block">Vehicle </span>
                                        </a>
                                    </li>
                                    <!--<li class="nav-item">-->
                                    <!--    <a href="#media" data-bs-toggle="tab" class="nav-link" role="tab">MED/LOK/CON</a>-->
                                    <!--</li>-->
                                    <li class="nav-item">
                                        <a href="#Applicant" data-bs-toggle="tab" class="nav-link" role="tab">
                                            <span class="d-md-inline-block">Sender </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#loan" data-bs-toggle="tab" class="nav-link" role="tab">
                                            <span class="d-md-inline-block">Loss On Sale </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#schedule" data-bs-toggle="tab" class="nav-link" role="tab">
                                            <span class="d-md-inline-block">Schedule</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#extra-coloumn" data-bs-toggle="tab" class="nav-link" role="tab">
                                            <span class="d-md-inline-block">Extra Column</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#Freeze" data-bs-toggle="tab" class="nav-link" role="tab">
                                            <span class="d-md-inline-block">Bank Freeze </span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="caseTabsContent">

                                    <div class="tab-pane fade" id="Product" role="tabpanel">
                                        <div class="table-responsive" style="height: 300px; border: 1px solid #f7f9fb;">
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
                                            <button class="btn btn-sm btn-primary next-tab">Next</button>
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


                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Act</label>
                                                <input type="text" class="form-control" placeholder="Enter Act">
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-label">Act Subtype</label>
                                                <input type="text" class="form-control" placeholder="Enter Act Subtype">
                                            </div>
                                            

                                        </div>

                                        <h5 class="mt-4">Collection Manager Details</h5>
                                        <hr>

                                        <div class="row g-4 mt-1">

                                            <div class="col-md-6 col-lg-4">
                                                <label for="txt_collec_mang_name" class="form-label">Collection Manager
                                                    Name</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Collection Manager Name" autocomplete="off"
                                                    id="txt_collec_mang_name">
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="txt_collec_mang_number" class="form-label">Collection
                                                    Manager Number</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Collection Manager Number" autocomplete="off"
                                                    id="txt_collec_mang_number">
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <label for="txt_collec_mang_mail" class="form-label">Collection Manager
                                                    Mail id</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Collection Manager Mail" autocomplete="off"
                                                    id="txt_collec_mang_mail">
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-sm btn-primary next-tab">Next</button>
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
                                            <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-sm btn-primary next-tab">Next</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="media" role="tabpanel">
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
                                            <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-sm btn-primary next-tab">Next</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="Applicant" role="tabpanel">
                                        <div class="table-responsive" style="height: 300px; border: 1px solid #f7f9fb;">
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
                                            <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-sm btn-primary next-tab">Next</button>
                                        </div>
                                    </div>

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
                                            <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-sm btn-primary next-tab">Next</button>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="schedule" role="tabpanel">

                                        <div class="table-responsive" style="height: 300px; border: 1px solid #f7f9fb;">
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
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class=" ti ti-plus me-2"></i> Add
                                            </a>
                                        </div>

                                        <div class="d-flex justify-content-end gap-2 mt-3">
                                            <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-sm btn-primary next-tab">Next</button>
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
                                            <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-sm btn-primary next-tab">Next</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="Freeze" role="tabpanel">

                                        <div class="table-responsive" style="height: 300px; border: 1px solid #f7f9fb;">
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
                                            <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                            <button class="btn btn-sm btn-primary">Save</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bulk-Upload -->
                    <div id="unameTab" class="tab-pane">
                        <div class="form-group">

                            <div class="card card-case">
                                <div class="card-body">

                                    <div class="text-end">
                                        <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                                            data-bs-target="#editModal">
                                            <i class="ti ti-download"></i>
                                        </button>
                                    </div>

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
                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label for="cnr" class="form-label">Case Type <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" value="By Case">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label for="cnr" class="form-label">SubCase Type <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" value="Arbitration Section 21">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label for="cnr" class="form-label">Upload File <span
                                                        style="color:red;">*</span></label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-4" style="margin-top: 30px;">
                                            <button class="btn btn-sm btn-primary me-2">
                                                <i class="ti ti-device-floppy me-1"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Report List -->
                            <div class="table-responsive mt-3">
                                <table class="table table-nowrap datatable table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Date</th>
                                            <th>Age</th>
                                            <th>Allocation No</th>
                                            <th>Case Type</th>
                                            <th>Sub Case Type</th>
                                            <th>Act</th>
                                            <th>Act Subtype</th>
                                            <th>Zone</th>
                                            <th>State</th>
                                            <th>State</th>
                                            <th>District</th>
                                            <th>Branch</th>
                                            <th>Customer ID</th>
                                            <th>Case Nature</th>
                                            <th>Institution Name</th>
                                            <th>Lead ID Number</th>
                                            <th>AAN Number</th>
                                            <th>Frequency of EMI</th>
                                            <th>No of EMI Paid</th>
                                            <th>EMI Start Date</th>
                                            <th>EMI End Date</th>
                                            <th>Rate of Interest</th>
                                            <th>Principal Paid</th>
                                            <th>Interest Paid</th>
                                            <th>CBC</th>
                                            <th>LPP</th>
                                            <th>EMI Overdue</th>
                                            <th>AFC Charges</th>
                                            <th>Future Receivable</th>
                                            <th>FC Amount</th>
                                            <th>FC amount in words</th>
                                            <th>Agreement Date</th>
                                            <th>Agreement Clause</th>
                                            <th>CGTMSE</th>
                                            <th>ECLGS</th>
                                            <th>NCGTC</th>
                                            <th>MSME</th>
                                            <th>Collection Manager Name</th>
                                            <th>Collection Manager Number</th>
                                            <th>Collection Manager Mail id</th>
                                            <th>Loan No</th>
                                            <th>Product</th>
                                            <th>Amount Financed</th>
                                            <th>Disbursal Date</th>
                                            <th>Amount Disposed</th>
                                            <th>Amount Disposed</th>
                                            <th>Amount Sanctioned</th>
                                            <th>EMI Amount</th>
                                            <th>No of EMI due</th>
                                            <th>Tenure</th>
                                            <th>Principal Outstanding</th>
                                            <th>Make</th>
                                            <th>Model</th>
                                            <th>Chassis Number</th>
                                            <th>Engine Number</th>
                                            <th>Register Number</th>
                                            <th>Sender Type</th>
                                            <th>Sub Sender</th>
                                            <th>Sender Name</th>
                                            <th>Age</th>
                                            <th>Father Name</th>
                                            <th>Address</th>
                                            <th>Mobile Number</th>
                                            <th>E-mail Id</th>
                                            <th>Arbitrator Name</th>
                                            <th>Arbitrator No</th>
                                            <th>Vehicle Seizure Date</th>
                                            <th>Presale Notice Date</th>
                                            <th>Presale Amount</th>
                                            <th>Post Sale Notice Date</th>
                                            <th>Post Sale Amount</th>
                                            <th>Claim Amount</th>
                                            <th>Cost of Award</th>
                                            <th>Award Amount</th>
                                            <th>Award Date</th>
                                            <th>Receiver Name</th>
                                            <th>Property Schedule</th>
                                            <th>Title</th>
                                            <th>Schedule</th>
                                            <th>Account No</th>
                                            <th>Bank Name</th>
                                            <th>IFSC Code</th>
                                            <th>PAN Number</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>15-02-2026</td>
                                            <td>45</td>
                                            <td>Allot001</td>
                                            <td>By Case</td>
                                            <td>Arbitration Section 21</td>
                                            <td>CPC Section 9</td>
                                            <td>Money Recovery</td>
                                            <td>South Zone</td>
                                            <td>Tamil Nadu</td>
                                            <td>Tamil Nadu</td>
                                            <td>Chennai</td>
                                            <td>Egmore</td>
                                            <td>CUST001</td>
                                            <td>Fresh</td>
                                            <td>ABC Finance Ltd</td>
                                            <td>LEAD4587</td>
                                            <td>AAN78945</td>
                                            <td>Monthly</td>
                                            <td>12</td>
                                            <td>01-01-2024</td>
                                            <td>01-01-2028</td>
                                            <td>12%</td>
                                            <td>₹1,20,000</td>
                                            <td>₹35,000</td>
                                            <td>₹5,000</td>
                                            <td>₹2,000</td>
                                            <td>₹15,000</td>
                                            <td>₹1,500</td>
                                            <td>₹80,000</td>
                                            <td>₹4,20,000</td>
                                            <td>Four Lakh Twenty Thousand Only</td>
                                            <td>10-03-2025</td>
                                            <td>Clause 8(A)</td>
                                            <td>Yes</td>
                                            <td>No</td>
                                            <td>No</td>
                                            <td>Yes</td>
                                            <td>Prakash</td>
                                            <td>9876543210</td>
                                            <td>prakash@company.com</td>
                                            <td>LN-789001</td>
                                            <td>Car Loan</td>
                                            <td>₹5,00,000</td>
                                            <td>10-03-2025</td>
                                            <td>₹5,50,000</td>
                                            <td>₹5,50,000</td>
                                            <td>₹6,00,000</td>
                                            <td>₹12,500</td>
                                            <td>3</td>
                                            <td>48 Months</td>
                                            <td>₹4,20,000</td>
                                            <td>Hyundai</td>
                                            <td>i20 Sportz</td>
                                            <td>MA3EJKD81ABC12345</td>
                                            <td>ENGI987654321</td>
                                            <td>TN09AB1234</td>
                                            <td>Applicant</td>
                                            <td>1</td>
                                            <td>Ramesh Kumar</td>
                                            <td>35</td>
                                            <td>Suresh Kumar</td>
                                            <td>Chennai, Tamil Nadu</td>
                                            <td>9876543210</td>
                                            <td>ramesh@gmail.com</td>
                                            <td>Mr. Karthik</td>
                                            <td>9123456789</td>
                                            <td>05-01-2026</td>
                                            <td>10-01-2026</td>
                                            <td>₹50,000</td>
                                            <td>20-01-2026</td>
                                            <td>₹1,20,000</td>
                                            <td>₹4,20,000</td>
                                            <td>₹10,000</td>
                                            <td>₹3,80,000</td>
                                            <td>15-02-2026</td>
                                            <td>Ganesh</td>
                                            <td>Schedule A</td>
                                            <td>Property Title</td>
                                            <td>Residential Land at Chennai</td>
                                            <td>123456789012</td>
                                            <td>State Bank of India</td>
                                            <td>SBIN0000456</td>
                                            <td>ABCDE1234F</td>
                                            <td>Primary Recovery Account</td>
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
                <h5 class="modal-title" id="creationModalLabel">Excel Upload</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="mb-3">
                        <label class="form-label">Upload Excel</label>
                        <input type="file" class="form-control">
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
                <h5 class="modal-title" id="editModalLabel">Excel Download</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="mb-3 d-flex align-items-center justify-content-center">
                        <p class="mb-0">Download Excel</p>
                        <button class="btn btn-primary btn-sm ms-3">
                            <i class="ti ti-download"></i>
                        </button>
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

    caseNature.addEventListener("change", function() {
        if (this.value === "Appeal" || this.value === "Connect Case") {
            caseFields.forEach(field => field.classList.remove("d-none"));
        } else {
            caseFields.forEach(field => field.classList.add("d-none"));
        }
    });

    const caseNatures = document.getElementById("example-selects");
    const casenatureFields = document.querySelectorAll(".casenatureFields");

    caseNatures.addEventListener("change", function() {
        if (this.value === "Appeal" || this.value === "Connect Case") {
            casenatureFields.forEach(field => field.classList.remove("d-none"));
        } else {
            casenatureFields.forEach(field => field.classList.add("d-none"));
        }
    });
    const caseFresh = document.getElementById("fresh");
    const casenFreshFields = document.querySelectorAll(".casefreshFields");

    caseFresh.addEventListener("change", function() {
        if (this.value === "Appeal" || this.value === "Connect Case") {
            casenFreshFields.forEach(field => field.classList.remove("d-none"));
        } else {
            casenFreshFields.forEach(field => field.classList.add("d-none"));
        }
    });

    const caseType = document.getElementById("sub-case");
    const caseField = document.querySelectorAll(".caseField");

    caseType.addEventListener("change", function() {
        if (this.value === "ep") {
            caseField.forEach(field => field.classList.remove("d-none"));
        } else {
            caseField.forEach(field => field.classList.add("d-none"));
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

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
    document.addEventListener("DOMContentLoaded", function() {
        const caseTypeSelect = document.getElementById("case-type");
        const subCaseSelects = document.querySelectorAll("#sub-case");

        caseTypeSelect.addEventListener("change", function() {
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
    document.addEventListener("DOMContentLoaded", function() {
        const caseTypeSelect = document.getElementById("case-types");
        const subCaseSelects = document.querySelectorAll("#sub-cases");

        caseTypeSelect.addEventListener("change", function() {
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
    document.addEventListener('DOMContentLoaded', function() {
        const subCaseSelects = document.querySelectorAll('#sub-case');

        subCaseSelects.forEach(select => {
            select.addEventListener('change', function() {
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
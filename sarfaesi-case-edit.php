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

    .nav-tabs>li>a {
        background-color: #eeeeee;
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

    .step-circle i {
        font-size: 20px;
    }

    .step-days {
        margin: 0 8px;
        font-size: 11px;
        color: #888;
        display: flex;
        align-items: start;
        font-weight: 600;
    }

    @media(max-width: 767px) {
        .step-days {
            display: none;
        }
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



<!-- <div class="d-flex align-items-center">
    <a href="sarfaesi-case-creation.php" class="mb-3 text-primary" style="font-weight: 600;"> <i class="ti ti-arrow-left mt-0" style="font-size: 16px;font-weight: 600;"></i> Go Back </a>
</div> -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Sarfaesi Case</h5>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <!-- Single -->
                    <div id="otpTab" class="tab-pane active">

                        <div class="card card-case">
                            <div class="card-body">
                                <ul class="nav nav-tabs step-nav" id="sarfaesiTabs" role="tablist">

                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#recall">
                                            <span class="step-circle"><i class="ti ti-lock-open"></i></span>
                                            <span class="step-label">Pre-NPA</span>
                                        </button>
                                    </li>

                                    <span class="step-days">15 days</span>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#demand">
                                            <span class="step-circle"><i class="ti ti-lock"></i></span>
                                            <span class="step-label">Demand 13(2)</span>
                                        </button>
                                    </li>

                                    <!-- <span class="step-days">10 days</span>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#ack">
                                            <span class="step-circle"><i class="ti ti-lock"></i></span>
                                            <span class="step-label">Acknowledgement</span>
                                        </button>
                                    </li> -->

                                    <span class="step-days">60 days</span>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#possession">
                                            <span class="step-circle"><i class="ti ti-lock"></i></span>
                                            <span class="step-label">Possession 13(4)</span>
                                        </button>
                                    </li>

                                    <span class="step-days">30 days To</span>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#section14">
                                            <span class="step-circle"><i class="ti ti-lock"></i></span>
                                            <span class="step-label">Section 14</span>
                                        </button>
                                    </li>

                                    <span class="step-days">60 days</span>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#physical">
                                            <span class="step-circle"><i class="ti ti-lock"></i></span>
                                            <span class="step-label">Physical Possession</span>
                                        </button>
                                    </li>

                                    <span class="step-days">30 days</span>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#auction">
                                            <span class="step-circle"><i class="ti ti-lock"></i></span>
                                            <span class="step-label">Sale & Auction</span>
                                        </button>
                                    </li>

                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane fade show active" id="recall">

                                        <ul class="nav nav-tabs nav-solid-primary mb-3">
                                            <li class="nav-item"><a class="nav-link active" href="#solid-tab1"
                                                    data-bs-toggle="tab">Create</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab2"
                                                    data-bs-toggle="tab">Manage</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab3"
                                                    data-bs-toggle="tab">Report</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab4"
                                                    data-bs-toggle="tab">Attachment</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="solid-tab1">
                                                <h4>Pre-NPA </h4>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Loan No</label>
                                                        <select class="form-select">
                                                            <option value="LN-789001" selected>LN-789001</option>
                                                            <option value="LN-789002">LN-789002</option>
                                                            <option value="LN-789003">LN-789003</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-lg-4 mt-auto mb-2">
                                                        <button class="btn btn-sm btn-primary me-2">
                                                            <i class="ti ti-search"></i> Search
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="card mt-3">
                                                    <div class="card-body">
                                                        <div class="row g-3">
                                                            <div class="col-md-4">
                                                                <p class="mb-0">
                                                                    <strong>Branch :</strong> <span>Nungambakkam
                                                                        Branch</span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p class="mb-0">
                                                                    <strong>Product :</strong> <span>Housing Loan</span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p class="mb-0"><strong>Customer Name :</strong>
                                                                    <span>Salman</span></p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p class="mb-0"><strong>Loan Amount :</strong>
                                                                    <span>10000</span></p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p class="mb-0"><strong>Loan Sanction Date :</strong>
                                                                    <span>19-01-2026</span></p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p class="mb-0"><strong>NPA Date :</strong>
                                                                    <span>19-01-2026</span></p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p class="mb-0"><strong>Total Overdue Amount :</strong>
                                                                    <span>5000</span></p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p class="mb-0"><strong>Address :</strong>
                                                                    <span>Egmore</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Notice Sent Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Notice Amount</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Notice Amount">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Remarks</label>
                                                        <textarea class="form-control" placeholder="Remarks"></textarea>
                                                    </div>
                                                </div>

                                                <!-- <div class="table-responsive mb-3" style="height: 300px; border: 1px solid #8080803b;">
                                                    <table id="tbl_postal_create" class="display table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Legal Type</th>
                                                                <th>Customer Id</th>
                                                                <th>Sender</th>
                                                                <th>Sender Name</th>
                                                                <th>Address</th>

                                                                <th>Dispatch Date</th>
                                                                <th>Speed Post Num</th>
                                                                <th>case status Type</th>
                                                                <th>Notice status Type</th>
                                                                <th>Remark</th>
                                                                <th>Remove</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>

                                                    </table>
                                                </div>

                                                <div class="row align-items-center g-4">

                                                    <div class="col-md-6 col-lg-4">
                                                        <label for="input-label" class="form-label">Sender</label>
                                                        <select class="form-select">
                                                            <option value="">Select Sender</option>
                                                            <option value="">Customer</option>
                                                            <option value="">Co-Applicant</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 col-lg-4">
                                                        <label for="input-label" class="form-label">Sender Name</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Sender Name" />
                                                    </div>

                                                    <div class="col-md-6 col-lg-4">
                                                        <label for="input-label" class="form-label">Address</label>
                                                        <textarea name="" class="form-control" placeholder="Address" id=""></textarea>
                                                    </div>

                                                    <div class="col-md-6 col-lg-4">
                                                        <label for="input-label" class="form-label">Dispatch Date</label>
                                                        <input type="date" class="form-control" />
                                                    </div>

                                                    <div class="col-md-6 col-lg-4">
                                                        <label for="input-label" class="form-label">Speed Post No</label>
                                                        <input type="text" class="form-control" placeholder="Speed Post No" />
                                                    </div>

                                                    <div class="col-md-6 col-lg-4">
                                                        <label for="input-label" class="form-label">Speed Post Tracking Link</label>
                                                        <input type="text" class="form-control" placeholder="Speed Post Tracking Link" />
                                                    </div>

                                                    <div class="col-md-6 col-lg-4">
                                                        <label for="input-label" class="form-label">Remarks</label>
                                                        <textarea name="" class="form-control" id="" placeholder="Remarks"></textarea>
                                                    </div>

                                                    <div class="col-md-6 col-lg-4 " style="margin-top: 2rem;">
                                                        <div class="mb">
                                                            <a href="#" class="btn btn-primary"><i class="ti ti-plus"></i> </a>
                                                        </div>
                                                    </div>

                                                </div> -->

                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab2">
                                                <h4>Status Updation</h4>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="input-label" class="form-label">Sender</label>
                                                        <select class="form-select">
                                                            <option value="">Select Sender</option>
                                                            <option value="">Customer</option>
                                                            <option value="">Co-Applicant</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Status</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Select Status</option>
                                                            <option>Delivered</option>
                                                            <option>Send</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Remarks</label>
                                                        <textarea class="form-control" placeholder="Remarks"></textarea>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab3">
                                                <h4>Report</h4>

                                                <div class="table-responsive">
                                                    <table id="noticeTable"
                                                        class="table table-nowrap datatable table-bordered">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Loan No</th>
                                                                <th>Notice Sent Date</th>
                                                                <th>Notice Amount</th>
                                                                <th>Notice Remarks</th>
                                                                <th>Notice Attachment</th>

                                                                <th>Sender</th>
                                                                <th>Sender Name</th>
                                                                <th>Address</th>

                                                                <th>Dispatch Date</th>
                                                                <th>Speed Post No</th>
                                                                <th>Speed Post Tracking Link</th>
                                                                <th>Dispatch Remarks</th>

                                                                <th>Status</th>
                                                                <th>Status Remarks</th>
                                                                <th>Status Attachment</th>

                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>LN-789001</td>
                                                                <td>2026-01-20</td>
                                                                <td>₹ 50,000</td>
                                                                <td>Initial Notice</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                                                        <i class="ti ti-paperclip"></i> View
                                                                    </a>
                                                                </td>

                                                                <td>Customer</td>
                                                                <td>Ramesh Kumar</td>
                                                                <td>Chennai, Tamil Nadu</td>

                                                                <td>2026-01-22</td>
                                                                <td>SP123456789</td>
                                                                <td><a href="#"
                                                                        class="btn btn-sm btn-outline-primary"><i
                                                                            class="ti ti-link me-1"></i>
                                                                        speedposttrackinglink</a></td>
                                                                <td>Dispatched Successfully</td>

                                                                <td>
                                                                    <span class="badge bg-success">Delivered</span>
                                                                </td>
                                                                <td>Received by customer</td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-outline-secondary">
                                                                        <i class="ti ti-file"></i>
                                                                    </a>
                                                                </td>

                                                                <td>
                                                                    <button class="btn btn-sm btn-primary">
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
                                            <div class="tab-pane" id="solid-tab4">
                                                <h4>Attachment</h4>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment Title</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Attachment Title">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="demand">
                                        <ul class="nav nav-tabs nav-solid-primary mb-3">
                                            <li class="nav-item"><a class="nav-link active" href="#solid-tab5"
                                                    data-bs-toggle="tab">Create</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab6"
                                                    data-bs-toggle="tab">Manage</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab7"
                                                    data-bs-toggle="tab">Report</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab8"
                                                    data-bs-toggle="tab">Reply</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab20"
                                                    data-bs-toggle="tab">Rejoinder</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="solid-tab5">
                                                <h4>Demand Notice – Section 13(2)</h4>

                                                <div class="row g-3 mt-2 mb-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Loan No</label>
                                                        <select class="form-select">
                                                            <option value="LN-789001" selected>LN-789001</option>
                                                            <option value="LN-789002">LN-789002</option>
                                                            <option value="LN-789003">LN-789003</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Notice Amount</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Notice Amount">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Notice Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                    <div class="col-md-6 col-lg-4">
                                                        <label for="input-label" class="form-label">Address</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Applicant</option>
                                                            <option>Co Applicant</option>
                                                            <option>Guarantor</option>
                                                            <option>Co Guarantor</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab6">
                                                <h4>Status Updation</h4>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <label for="input-label" class="form-label">Sender</label>
                                                        <select class="form-select">
                                                            <option value="">Select Sender</option>
                                                            <option value="">Customer</option>
                                                            <option value="">Co-Applicant</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Status</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Select Status</option>
                                                            <option>Delivered</option>
                                                            <option>Send</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Remarks</label>
                                                        <textarea class="form-control" placeholder="Remarks"></textarea>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Notice Return <span>(15
                                                                days)</span></label>
                                                        <div class="mt-1">
                                                            <div class="form-check mb-1 form-check-inline">
                                                                <input type="radio" id="customRadio1" name="customRadio"
                                                                    class="form-check-input">
                                                                <label class="form-check-label"
                                                                    for="customRadio1">NO</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="customRadio2" name="customRadio"
                                                                    class="form-check-input">
                                                                <label class="form-check-label"
                                                                    for="customRadio2">YES</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Return Notice Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Return Notice Reason</label>
                                                        <textarea name="" class="form-control"
                                                            placeholder="Return Notice Reason" id=""></textarea>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab7">
                                                <h4>Report</h4>
                                                <div class="table-responsive mt-4">
                                                    <table id="noticeDetailsTable"
                                                        class="table table-nowrap datatable table-bordered">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Loan No</th>
                                                                <th>Notice Amount</th>
                                                                <th>Notice Date</th>
                                                                <th>Attachment</th>
                                                                <th>Address Type</th>

                                                                <th>Sender</th>
                                                                <th>Sender Name</th>
                                                                <th>Address</th>

                                                                <th>Dispatch Date</th>
                                                                <th>Speed Post No</th>
                                                                <th>Speed Post Tracking Link</th>
                                                                <th>Remarks</th>

                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>LN-789001</td>
                                                                <td>₹ 75,000</td>
                                                                <td>2026-01-21</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                                                        <i class="ti ti-paperclip"></i>
                                                                    </a>
                                                                </td>
                                                                <td>Applicant</td>

                                                                <td>Customer</td>
                                                                <td>Suresh Kumar</td>
                                                                <td>Madurai, Tamil Nadu</td>

                                                                <td>2026-01-23</td>
                                                                <td>SP987654321</td>
                                                                <td><a href="#"
                                                                        class="btn btn-sm btn-outline-primary"><i
                                                                            class="ti ti-link me-1"></i>
                                                                        speedposttrackinglink</a></td>
                                                                <td>Notice sent via speed post</td>

                                                                <td>
                                                                    <button class="btn btn-sm btn-primary">
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
                                            <div class="tab-pane" id="solid-tab8">
                                                <h4>Reply</h4>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Date of Receipt of Representation
                                                            13(3)</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Representation Sent By</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Representation">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Date of Reply to
                                                            Representation</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Reply Sent To</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Applicant</option>
                                                            <option>Co Applicant</option>
                                                            <option>Guarantor</option>
                                                            <option>Co Guarantor</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Remarks</label>
                                                        <textarea class="form-control"
                                                            placeholder="Enter Notice Amount"></textarea>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab20">
                                                <h4>Rejoinder</h4>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Date of Receipt of Representation
                                                            13(3A)</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Representation Sent By</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Representation">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Date of Reply to
                                                            Representation</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Reply Sent To</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Applicant</option>
                                                            <option>Co Applicant</option>
                                                            <option>Guarantor</option>
                                                            <option>Co Guarantor</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Remarks</label>
                                                        <textarea class="form-control"
                                                            placeholder="Enter Notice Amount"></textarea>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="tab-pane fade" id="ack">
                                        <h4>Acknowledgement Tracking</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Acknowledgement Received</label>
                                                <select class="form-select">
                                                    <option>Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Acknowledgement Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Delivery Proof Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tabs">Previous</button>
                                            <button class="btn btn-primary next-tabs">Next</button>
                                        </div>
                                    </div> -->

                                    <div class="tab-pane fade" id="possession">
                                        <ul class="nav nav-tabs nav-solid-primary mb-3">
                                            <li class="nav-item"><a class="nav-link active" href="#solid-tab9"
                                                    data-bs-toggle="tab">Paper Publication 1</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab21"
                                                    data-bs-toggle="tab">Reply 13(3)</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab22"
                                                    data-bs-toggle="tab">Rejoinder 13(3A)</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab11"
                                                    data-bs-toggle="tab">Manage</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab12"
                                                    data-bs-toggle="tab">Report</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab13"
                                                    data-bs-toggle="tab">Symbolic Possession</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab10"
                                                    data-bs-toggle="tab">Paper Publication 2</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="solid-tab9">
                                                <h4>Paper Publication 1 </h4>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Paper Publication 1 – Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Vernacular Language Paper</label>
                                                        <input type="text" class="form-control" placeholder="Language">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Paper Publication 2 – Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">English Language Paper</label>
                                                        <input type="text" class="form-control" placeholder="Language">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab21">
                                                <h4>Reply 13(3)</h4>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Date of Receipt of Representation
                                                            13(3)</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Representation Sent By</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Representation">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Date of Reply to
                                                            Representation</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Reply Sent To</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Applicant</option>
                                                            <option>Co Applicant</option>
                                                            <option>Guarantor</option>
                                                            <option>Co Guarantor</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Remarks</label>
                                                        <textarea class="form-control"
                                                            placeholder="Enter Notice Amount"></textarea>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab22">
                                                <h4>Rejoinder 13(3A)</h4>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Date of Receipt of Representation
                                                            13(3A)</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Representation Sent By</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Representation">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Date of Reply to
                                                            Representation</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Reply Sent To</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Applicant</option>
                                                            <option>Co Applicant</option>
                                                            <option>Guarantor</option>
                                                            <option>Co Guarantor</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Remarks</label>
                                                        <textarea class="form-control"
                                                            placeholder="Enter Notice Amount"></textarea>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab11">
                                                <h4>Status Updation</h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="input-label" class="form-label">Sender</label>
                                                        <select class="form-select">
                                                            <option value="">Select Sender</option>
                                                            <option value="">Customer</option>
                                                            <option value="">Co-Applicant</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Status</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Select Status</option>
                                                            <option>Delivered</option>
                                                            <option>Send</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Remarks</label>
                                                        <textarea class="form-control" placeholder="Remarks"></textarea>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab12">
                                                <h4>Report</h4>
                                                <div class="table-responsive mt-4">
                                                    <table id="noticeDetailsTable"
                                                        class="table table-nowrap datatable table-bordered">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Loan No</th>
                                                                <th>Notice Amount</th>
                                                                <th>Notice Date</th>
                                                                <th>Attachment</th>
                                                                <th>Address Type</th>

                                                                <th>Sender</th>
                                                                <th>Sender Name</th>
                                                                <th>Address</th>

                                                                <th>Dispatch Date</th>
                                                                <th>Speed Post No</th>
                                                                <th>Speed Post Tracking Link</th>
                                                                <th>Remarks</th>

                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>LN-789001</td>
                                                                <td>₹ 75,000</td>
                                                                <td>2026-01-21</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                                                        <i class="ti ti-paperclip"></i>
                                                                    </a>
                                                                </td>
                                                                <td>Applicant</td>

                                                                <td>Customer</td>
                                                                <td>Suresh Kumar</td>
                                                                <td>Madurai, Tamil Nadu</td>

                                                                <td>2026-01-23</td>
                                                                <td>SP987654321</td>
                                                                <td><a href="#"
                                                                        class="btn btn-sm btn-outline-primary"><i
                                                                            class="ti ti-link me-1"></i>
                                                                        speedposttrackinglink</a></td>
                                                                <td>Notice sent via speed post</td>

                                                                <td>
                                                                    <button class="btn btn-sm btn-primary">
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
                                            <div class="tab-pane" id="solid-tab13">
                                                <h4>Symbolic Possession</h4>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Symbolic Possession Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Possession Notice Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab10">
                                                <h4>Paper Publication 2</h4>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Paper Publication 1 – Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Vernacular Language Paper</label>
                                                        <input type="text" class="form-control" placeholder="Language">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Paper Publication 2 – Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">English Language Paper</label>
                                                        <input type="text" class="form-control" placeholder="Language">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="section14">
                                        <ul class="nav nav-tabs nav-solid-primary mb-3">
                                            <li class="nav-item"><a class="nav-link active" href="#solid-tab14"
                                                    data-bs-toggle="tab">Create</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab15"
                                                    data-bs-toggle="tab">Manage</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab16"
                                                    data-bs-toggle="tab">Report</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="solid-tab14">
                                                <h4>Section 14</h4>
                                                <div class="row g-3 mt-2">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Loan No</label>
                                                        <select class="form-select">
                                                            <option value="LN-789001" selected>LN-789001</option>
                                                            <option value="LN-789002">LN-789002</option>
                                                            <option value="LN-789003">LN-789003</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="example-select" class="form-label">Case
                                                            Nature</label>
                                                        <select class="form-select" id="example-select">
                                                            <option value="">Select</option>
                                                            <option value="Fresh">Fresh</option>
                                                            <option value="Appeal">Appeal</option>
                                                            <option value="Connect Case">Connect Case</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Filing Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">SR No</label>
                                                        <input type="text" class="form-control" placeholder="SR No">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Case No</label>
                                                        <input type="text" class="form-control" placeholder="Case No">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">CNR No</label>
                                                        <input type="text" class="form-control" placeholder="CNR No">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Court</label>
                                                        <select class="form-select">
                                                            <option>Egmore Court</option>
                                                            <option>Nungambakkam Court</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Advocate</label>
                                                        <select class="form-select">
                                                            <option>Salman</option>
                                                            <option>Sanjay</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Petitioner</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Petitioner">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Respondent</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Respondent">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Hearing Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Hearing Status</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Hearing Status">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Hearing Status Description</label>
                                                        <textarea class="form-control"
                                                            placeholder="Hearing Status Description"></textarea>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab15">
                                                <h4>Status Updation</h4>
                                                <div class="row g-3 ">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Next Hearing Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Next Hearing Status</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Hearing Status">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Hearing Status Description</label>
                                                        <textarea class="form-control"
                                                            placeholder="Hearing Status Description"></textarea>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Order Attachment</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab16">
                                                <h4>Report</h4>
                                                <div class="table-responsive mt-4">
                                                    <table id="caseHearingTable"
                                                        class="table table-nowrap datatable table-bordered">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Loan No</th>
                                                                <th>Case Nature</th>
                                                                <th>Filing Date</th>
                                                                <th>SR No</th>
                                                                <th>Case No</th>
                                                                <th>CNR No</th>
                                                                <th>Court</th>
                                                                <th>Advocate</th>
                                                                <th>Petitioner</th>
                                                                <th>Respondent</th>

                                                                <th>Hearing Date</th>
                                                                <th>Hearing Status</th>
                                                                <th>Hearing Status Description</th>

                                                                <th>Next Hearing Date</th>
                                                                <th>Next Hearing Status</th>
                                                                <th>Next Hearing Status Description</th>

                                                                <th>Order Attachment</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>LN-789001</td>
                                                                <td>Fresh</td>
                                                                <td>2026-01-15</td>
                                                                <td>SR-1025</td>
                                                                <td>CASE-4587</td>
                                                                <td>CNR-TN-2026-001</td>
                                                                <td>Egmore Court</td>
                                                                <td>Salman</td>
                                                                <td>ABC Bank</td>
                                                                <td>Ramesh Kumar</td>

                                                                <td>2026-01-22</td>
                                                                <td>Arguments</td>
                                                                <td>Arguments heard partially</td>

                                                                <td>2026-02-05</td>
                                                                <td>For Orders</td>
                                                                <td>Awaiting final order</td>

                                                                <td>
                                                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                                                        <i class="ti ti-paperclip"></i>
                                                                    </a>
                                                                </td>

                                                                <td>
                                                                    <button class="btn btn-sm btn-primary">
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
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="physical">
                                        <ul class="nav nav-tabs nav-solid-primary mb-3">
                                            <li class="nav-item"><a class="nav-link active" href="#solid-tab17"
                                                    data-bs-toggle="tab">Physical</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab18"
                                                    data-bs-toggle="tab">Advocate Commission</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab19"
                                                    data-bs-toggle="tab">Report</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="solid-tab17">
                                                <h4>Physical Possession</h4>
                                                <div class="row g-3 mt-2">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Order Issued</label>
                                                        <select class="form-select">
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Order Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Possession Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Possession Documents</label>
                                                        <input type="file" class="form-control" multiple>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-secondary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab18">
                                                <h4>Advocate Commission</h4>
                                                <div class="row g-3 mt-2">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Advocate Name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Advocate Name">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Advocate Mobile Number</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Advocate Mobile Number">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Advocate Email ID</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="Advocate Email ID">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Police Station</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Police Station">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end gap-1 mt-3">
                                                    <button class="btn btn-secondary">Save</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="solid-tab19">
                                                <h4>Report</h4>
                                                <div class="table-responsive mt-4">
                                                    <table id="possessionTable"
                                                        class="table table-nowrap datatable table-bordered">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Order Issued</th>
                                                                <th>Order Date</th>
                                                                <th>Possession Date</th>
                                                                <th>Possession Documents</th>

                                                                <th>Advocate Name</th>
                                                                <th>Advocate Mobile</th>
                                                                <th>Advocate Email</th>
                                                                <th>Police Station</th>

                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <span class="badge bg-success">Yes</span>
                                                                </td>
                                                                <td>2026-01-18</td>
                                                                <td>2026-01-30</td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-outline-primary me-1">
                                                                        <i class="ti ti-file"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                                                        <i class="ti ti-file"></i>
                                                                    </a>
                                                                </td>

                                                                <td>Adv. Rajesh Kumar</td>
                                                                <td>9876543210</td>
                                                                <td>rajesh@gmail.com</td>
                                                                <td>T. Nagar Police Station</td>

                                                                <td>
                                                                    <button class="btn btn-sm btn-primary">
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
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="auction">
                                        <h4>Sale & Auction</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-label">Loan No</label>
                                                <select class="form-select">
                                                    <option value="LN-789001" selected>LN-789001</option>
                                                    <option value="LN-789002">LN-789002</option>
                                                    <option value="LN-789003">LN-789003</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-lg-4 mt-auto mb-2">
                                                <button class="btn btn-sm btn-primary me-2">
                                                    <i class="ti ti-search"></i> Search
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <h4>Account Details</h4>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <p class="mb-0">
                                                            <strong>Branch :</strong> <span>Nungambakkam Branch</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="mb-0">
                                                            <strong>Product :</strong> <span>Housing Loan</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-secondary prev-tabs">Previous</button>
                                            <button class="btn btn-success">Save</button>
                                        </div>

                                        <h4 class="mt-3 mb-3">Property Value</h4>

                                        <div class="row g-3 ">
                                            <div class="col-md-4">
                                                <label class="form-label">Valuation Amount</label>
                                                <input type="text" class="form-control" placeholder="Valuation Amount">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Market Value</label>
                                                <input type="text" class="form-control" placeholder="Market Value">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Distress Value</label>
                                                <input type="text" class="form-control" placeholder="Distress Value">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Reserve Price</label>
                                                <input type="text" class="form-control" placeholder="Reserve Price">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-primary">Save</button>
                                        </div>

                                        <h4 class="mt-3 mb-3">Notice & Publication </h4>

                                        <div class="row g-3 ">
                                            <div class="col-md-4">
                                                <label class="form-label">Sale Notice Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Sale Notice Receipt Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Sale – Publication 1 Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Name of Paper (Publication 1)</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Name of Paper (Publication 1)">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Sale – Publication 2 Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Name of Paper (Publication 2)</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Name of Paper (Publication 2)">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-primary">Save</button>
                                        </div>

                                        <h4 class="mt-3 mb-3">Auction Details</h4>

                                        <div class="row g-3 ">
                                            <div class="col-md-4">
                                                <label class="form-label">Date of Auction</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Auction Status</label>
                                                <input type="text" class="form-control" placeholder="Auction Status">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-primary">Save</button>
                                        </div>

                                        <h4 class="mt-3 mb-3">Payment Details </h4>

                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <label class="form-label">Mode of Balance Payment</label>
                                                <div class="mt-1">
                                                    <div class="form-check mb-1 form-check-inline">
                                                        <input type="radio" id="customRadio1" name="customRadio"
                                                            class="form-check-input">
                                                        <label class="form-check-label" for="customRadio1">Single
                                                            payment</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio2" name="customRadio"
                                                            class="form-check-input">
                                                        <label class="form-check-label" for="customRadio2">Payment
                                                            Schedule</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-primary">Save</button>
                                        </div>

                                        <h4 class="mt-3 mb-3">Property Transfer</h4>

                                        <div class="row g-3 ">
                                            <div class="col-md-4">
                                                <label class="form-label">Sale Certificate Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Registration Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-1 mt-3">
                                            <button class="btn btn-primary">Save</button>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- <div class="card card-case">
                            <div class="card-body">
                                <div class="mt-4 mb-3">
                                    <ul class="nav nav-tabs" id="sarfaesiTabs" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" data-bs-target="#recall">Loan Recall</a></li>
                                        <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" data-bs-target="#demand">Demand 13(2)</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#ack">Acknowledgement</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#possession">Possession 13(4)</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#section14">Section 14</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#physical">Physical Possession</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#auction">Auction</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#adjustment">Sale Adjustment</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content bg-white  ">

                                    <div class="tab-pane fade show active" id="recall">
                                            <h4>Loan Recall Notice </h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Loan Account No</label>
                                                <input type="text" class="form-control" placeholder="Enter Loan Account No">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Borrower Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Borrower Name">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Outstanding Amount</label>
                                                <input type="number" class="form-control" placeholder="Enter Amount">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">NPA Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Recall Reason</label>
                                                <textarea class="form-control" rows="1" placeholder="Enter Recall Reason"></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Recall Notice Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">Draft / Issued</div>
                                    </div>

                                    <div class="tab-pane fade " id="demand">
                                        <h4>Demand Notice – Section 13(2)</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Demand Amount</label>
                                                <input type="text" class="form-control" placeholder="Demand Amount">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Issue Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Due Date – Auto +60 Days</label>
                                                <input type="date" class="form-control" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Secured Asset Details</label>
                                                <textarea class="form-control" rows="1" placeholder="Secured Asset Details"></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Demand Notice Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">13(2) Issued</div>
                                    </div>

                                    <div class="tab-pane fade" id="ack">
                                        <h4>Acknowledgement Tracking</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Acknowledgement Received</label>
                                                <select class="form-select">
                                                    <option>Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Acknowledgement Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Delivery Proof Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">Pending / Received</div>
                                    </div>

                                    <div class="tab-pane fade" id="possession">
                                        <h4>Possession Notice – Section 13(4)</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Possession Type</label>
                                                <select class="form-select">
                                                    <option>Symbolic</option>
                                                    <option>Physical</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Issue Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Authorized Officer</label>
                                                <input type="text" class="form-control" placeholder="Authorized Officer">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Possession Notice Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">Issued</div>
                                    </div>

                                    <div class="tab-pane fade" id="section14">
                                        <h4>Section 14 Application</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Authority Type</label>
                                                <select class="form-select">
                                                    <option>District Magistrate</option>
                                                    <option>Chief Judicial Magistrate</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">District</label>
                                                <input type="text" class="form-control" placeholder="District">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Application Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Application Copy Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">Filed</div>
                                    </div>

                                    <div class="tab-pane fade" id="physical">
                                        <h4>Physical Possession</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Order Issued</label>
                                                <select class="form-select">
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Order Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Possession Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Possession Documents</label>
                                                <input type="file" class="form-control" multiple>
                                            </div>
                                        </div>
                                        <div class="status">Completed / Pending</div>
                                    </div>

                                    <div class="tab-pane fade" id="auction">
                                        <h4>Auction</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Valuation Amount</label>
                                                <input type="text" class="form-control" placeholder="Valuation Amount">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Auction Notice Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Auction Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Auction Notice Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">Scheduled</div>
                                    </div>

                                    <div class="tab-pane fade" id="adjustment">
                                        <h4>Sale Proceeds Adjustment</h4>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-4">
                                                <label class="form-label">Sale Amount</label>
                                                <input type="text" class="form-control" placeholder="Sale Amount">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Outstanding Loan</label>
                                                <input type="text" class="form-control" placeholder="Outstanding Loan">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Adjustment Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Adjustment Report Upload</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="status">Loan Closed / Balance Due</div>
                                    </div>

                                </div>

                            </div>
                        </div> -->

                    </div>

                </div>

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
                    circle.innerHTML = `<i class="ti ti-check"></i>`;
                } else if (idx === activeIndex) {
                    tab.classList.remove("completed");
                    circle.innerHTML = `<i class="ti ti-lock-open"></i>`;
                } else {
                    tab.classList.remove("completed");
                    circle.innerHTML = `<i class="ti ti-lock"></i>`;
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
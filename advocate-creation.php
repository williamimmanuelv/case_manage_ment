<?php include 'header.php'; ?>

<style>
    .choices__inner {
        scrollbar-width: none !important;
    }

    .card {
        box-shadow: none;
    }

    /* tab pagination  */
    .dataTables_length {
        padding-top: 0px !important;
        margin-bottom: 0px;
    }

    .dataTables_paginate {
        margin-top: 0% !important;
        padding-top: 0px !important;
    }

    /* search sec */

    .dataTables_filter {
        margin-bottom: 0px !important;
    }

    .dataTables_wrapper div {
        /* margin-bottom: 4px !important; */
    }

    .toggle-wrapper {
        position: relative;
        display: flex;
        max-width: 220px;
        width: 100%;
        max-height: 50px;
        height: 100%;
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
        font-size: 12px;
        padding: 8px 0;
        cursor: pointer;
        z-index: 2;
        font-weight: 500;
        border-radius: 50px;
        transition: 0.3s;
    }

    @media (max-width:400px) {

        .toggle-wrapper label {
            flex: 1;
            text-align: center;
            font-size: 10px;
            padding: 8px 0;
            cursor: pointer;
            z-index: 2;
            font-weight: 500;
            border-radius: 50px;
            transition: 0.3s;
        }
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
    <a href="advocate-report.php" class="mb-3 text-primary" style="font-weight: 600;"> <i class="ti ti-arrow-left mt-0"
            style="font-size: 16px;font-weight: 600;"></i> Go Back </a>
</div>

<div class="row">
    <div class="col-md-12 mx-auto">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Advocate Creation</h5>

                <div class="toggle-wrapper">
                    <input type="radio" name="uploadType" id="rad1" value="otp" checked>
                    <label for="rad1">Individual</label>

                    <input type="radio" name="uploadType" id="rad2" value="uname">
                    <label for="rad2">Advocate Firm</label>

                    <span class="slider"></span>
                </div>

            </div>
            <div class="card-body">
                <div class="tab-content">
                    <!-- Single -->
                    <div id="otpTab" class="tab-pane active">
                        <ul class="nav nav-tabs nav-bordered mb-3" id="caseTabs" role="tablist">
                            <li class="nav-item">
                                <a href="#basic" data-bs-toggle="tab" class="nav-link active" role="tab"> Basic
                                    Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="#bank" data-bs-toggle="tab" class="nav-link" role="tab">Bank Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="#attachment" data-bs-toggle="tab" class="nav-link" role="tab">Attachment</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="caseTabsContent">

                            <div class="tab-pane fade show active" id="basic" role="tabpanel">
                                <form action="#">
                                    <div class="row">

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Advocate ID </label>
                                                <input type="text" id="txt_adv_subid" class="form-control"
                                                    value="ADV1012" readonly="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Advocate Name <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label"> Photo</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Advocate Email ID <span
                                                        style="color:red;">*</span></label>
                                                <input type="email" class="form-control" placeholder="Advocate Email">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Advocate Phone No <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Advocate Phone No">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Advocate Address</label>
                                                <textarea class="form-control"
                                                    placeholder="Advocate Address"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Type <span style="color:red;">*</span></label>
                                                <select class="form-select" id="type_create">
                                                    <option value="">Select Type</option>
                                                    <option value="Notice">Notice</option>
                                                    <option value="Case">Case</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4" id="NoticeTypeDiv">
                                            <div class="mb-3">
                                                <label class="form-label">Notice Type <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-select" id="" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option value="">Select Type</option>
                                                    <option value="All">All</option>
                                                    <option value="Normal Notice">Normal Notice</option>
                                                    <option value="Conciliation Notice">Conciliation Notice</option>
                                                    <option value="Lok-adalat Notice">Lok-adalat Notice</option>
                                                    <option value="Mediation Notice">Mediation Notice</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4" id="caseTypeDiv">
                                            <div class="mb-3">
                                                <label class="form-label">Case Type <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-select" id="caseType_create" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option value="Litigation By Case">Litigation By Case</option>
                                                    <option value="Litigation Against Case">Litigation Against Case
                                                    </option>
                                                    <option value="Litigation Case EP">Litigation Case EP</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4" id="subCaseTypeDiv">
                                            <div class="mb-3">
                                                <label class="form-label">Sub Case Type <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-select" id="subCaseType_create" multiple
                                                    data-choices data-choices-removeItem>
                                                    <option value="All">All</option>
                                                    <option value="Writ Petition u/s 226">Writ Petition u/s 226</option>
                                                    <option value="Sec 19 of DRT">Sec 19 of DRT</option>
                                                    <option value="Lok adalat-Order">Lok adalat-Order</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4" id="ProductTypeDiv">
                                            <div class="mb-3">
                                                <label class="form-label">Product <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-control" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option selected>Car</option>
                                                    <option>Personal Loan</option>
                                                    <option>Business Loan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Vendor Code <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Vendor Code">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Belong to which Bar Council</label>
                                                <select class="form-control" id="example-select">
                                                    <option selected>Tamil Nadu</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Bar Council Roll No</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Bar Council Roll No">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Country <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-control" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option selected>UAE</option>
                                                    <option>All</option>
                                                    <option>India</option>
                                                    <option>China</option>
                                                    <option>USA</option>
                                                    <option>None</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">State <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-control" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option selected>Tamil Nadu</option>
                                                    <option>All</option>
                                                    <option>Kerala</option>
                                                    <option>Karnataka</option>
                                                    <option>Gujarat</option>
                                                    <option>None</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">District <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-control" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option selected>Tamil Nadu</option>
                                                    <option>All</option>
                                                    <option>Kerala</option>
                                                    <option>Karnataka</option>
                                                    <option>Gujarat</option>
                                                    <option>None</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Branch <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-control" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option selected>Nungambakkam</option>
                                                    <option>All</option>
                                                    <option>Egmore</option>
                                                    <option>Central</option>
                                                    <option>None</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">PAN Number <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="PAN Card No">
                                            </div>
                                        </div>



                                    </div>
                                </form>

                                <div class="text-center mt-3">
                                    <button class="btn btn-sm btn-primary next-tab">Next</button>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="bank" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-nowrap datatable table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Account No</th>
                                                <th>Account Type</th>
                                                <th>Account Name</th>
                                                <th>IFSC Code</th>
                                                <th>Bank Name</th>
                                                <th>Attachment</th>
                                                <th>Account</th>
                                                <!-- <th>Edit</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>87587473689</td>
                                                <td>Current Account</td>
                                                <td>Account Name</td>
                                                <td>SBI0016543</td>
                                                <td>SBI</td>
                                                <td><a href="#">File.pdf</a></td>
                                                <td>Primary Account</td>
                                                <td>



                                                    <button class="btn btn-sm btn-primary me-2"
                                                        style="color: #cda85d !important; background-color: transparent;"
                                                        data-bs-toggle="offcanvas" data-bs-target="#editAdvocate">
                                                        <i class="ti ti-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger"
                                                        style="color: red; background-color: transparent;">
                                                        <i class="ti ti-trash"></i>
                                                    </button>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <hr>

                                <div class="row">

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Account No</label>
                                            <input type="text" class="form-control" placeholder="Account No" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Account Type</label>
                                            <select class="form-select" id="example-select">
                                                <option>Savings Account</option>
                                                <option>Current Account</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Account Name</label>
                                            <input type="text" class="form-control" placeholder="Account Name" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">IFSC Code</label>
                                            <input type="text" class="form-control" placeholder="IFSC Code" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Bank Name</label>
                                            <input type="text" class="form-control" placeholder="Bank Name" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Attachment</label>
                                            <input type="file" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Account </label>
                                            <select class="form-select" id="example-select">
                                                <option>Primary Account</option>
                                                <option>Secondary Account</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4 my-auto">
                                        <div class="">
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="ti ti-plus"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="d-flex justify-content-center gap-1 mt-3">
                                    <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                    <button class="btn btn-sm btn-primary next-tab">Next</button>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="attachment" role="tabpanel">

                                <div class="table-responsive">
                                    <table class="table table-nowrap datatable table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Title</th>
                                                <th>Attachment</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Pan Card</td>
                                                <td><a href="#">Attachment.</a></td>
                                                <td>


                                                    <button class="btn btn-sm btn-primary me-2"
                                                        style="color: #cda85d !important; background-color: transparent;"
                                                        data-bs-toggle="offcanvas" data-bs-target="#editAdvocate">
                                                        <i class="ti ti-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger"
                                                        style="color: red; background-color: transparent;">
                                                        <i class="ti ti-trash"></i>
                                                    </button>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <hr>
                                <div id="formContainer">

                                    <div class="row form-row mt-2">

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control" placeholder="Title">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Attachment</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 my-auto ">


                                            <a href="#" class="btn btn-sm btn-danger deleteBtn"
                                                style="color: red; background-color: transparent;">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                            <!-- <a href="#" class="btn btn-danger btn-sm me-2 deleteBtn">
                                                <i class="ti ti-trash"></i>
                                            </a> -->
                                            <a href="#" class="btn btn-sm btn-primary btn-sm addBtn">
                                                <i class="ti ti-plus"></i>
                                            </a>
                                        </div>

                                    </div>

                                </div>

                                <div class="d-flex justify-content-center gap-1 mt-3">
                                    <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                    <button class="btn btn-sm btn-primary next-tab">Save</button>
                                </div>
                            </div>

                        </div>


                    </div>

                    <!-- Bulk-Upload -->
                    <div id="unameTab" class="tab-pane">
                        <ul class="nav nav-tabs nav-bordered mb-3" id="caseTab" role="tablist">
                            <li class="nav-item">
                                <a href="#home" data-bs-toggle="tab" class="nav-link active" role="tab"> Basic
                                    Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="#Applicant" data-bs-toggle="tab" class="nav-link" role="tab">Bank Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="#profile" data-bs-toggle="tab" class="nav-link" role="tab">Attachment</a>
                            </li>
                            <li class="nav-item">
                                <a href="#message" data-bs-toggle="tab" class="nav-link" role="tab">Contact Details</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="caseTabContent">

                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <form action="#">
                                    <div class="row">

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Advocate ID </label>
                                                <input type="text" id="txt_adv_subid" class="form-control"
                                                    value="ADV1012" readonly="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Firm Name <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">GST Number <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="GST No">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Photo</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Email ID <span
                                                        style="color:red;">*</span></label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Phone No <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Phone No">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <textarea class="form-control" placeholder="Address"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Type <span style="color:red;">*</span></label>
                                                <select class="form-select" id="typeSelect">
                                                    <option value="">Select Type</option>
                                                    <option value="Notice">Notice</option>
                                                    <option value="Case">Case</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4" id="NoticeTypeContainer">
                                            <div class="mb-3">
                                                <label class="form-label">Notice Type <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-select" id="" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option value="">Select Type</option>
                                                    <option value="All">All</option>
                                                    <option value="Normal Notice">Normal Notice</option>
                                                    <option value="Conciliation Notice">Conciliation Notice</option>
                                                    <option value="Lok-adalat Notice">Lok-adalat Notice</option>
                                                    <option value="Mediation Notice">Mediation Notice</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4" id="caseTypeContainer">
                                            <div class="mb-3">
                                                <label class="form-label">Case Type <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-select" id="caseTypeSelect" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option value="Litigation By Case">Litigation By Case</option>
                                                    <option value="Litigation Against Case">Litigation Against Case
                                                    </option>
                                                    <option value="Litigation Case EP">Litigation Case EP</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4" id="subCaseTypeContainer">
                                            <div class="mb-3">
                                                <label class="form-label">Sub Case Type <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-select" id="subCaseTypeSelect" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option value="All">All</option>
                                                    <option value="Writ Petition u/s 226">Writ Petition u/s 226</option>
                                                    <option value="Sec 19 of DRT">Sec 19 of DRT</option>
                                                    <option value="Lok adalat-Order">Lok adalat-Order</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4" id="ProductTypeContainer">
                                            <div class="mb-3">
                                                <label class="form-label">Product <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-control" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option selected>Car</option>
                                                    <option>Personal Loan</option>
                                                    <option>Business Loan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Vendor Code <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Vendor Code">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Country <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-control" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option selected>UAE</option>
                                                    <option>All</option>
                                                    <option>India</option>
                                                    <option>China</option>
                                                    <option>USA</option>
                                                    <option>None</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">State <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-control" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option selected>Tamil Nadu</option>
                                                    <option>All</option>
                                                    <option>Kerala</option>
                                                    <option>Karnataka</option>
                                                    <option>Gujarat</option>
                                                    <option>None</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">District <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-control" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option selected>Tamil Nadu</option>
                                                    <option>All</option>
                                                    <option>Kerala</option>
                                                    <option>Karnataka</option>
                                                    <option>Gujarat</option>
                                                    <option>None</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Branch <span
                                                        style="color:red;">*</span></label>
                                                <select class="form-control" multiple data-choices
                                                    data-choices-removeItem>
                                                    <option selected>Nungambakkam</option>
                                                    <option>All</option>
                                                    <option>Egmore</option>
                                                    <option>Central</option>
                                                    <option>None</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">PAN Number</label>
                                                <input type="text" class="form-control" placeholder="PAN Card No">
                                            </div>
                                        </div>




                                    </div>
                                </form>



                                <div class="text-center mt-3">
                                    <button class="btn btn-sm btn-primary next-tab">Next</button>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Applicant" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-nowrap datatable table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Account No</th>
                                                <th>Account Type</th>
                                                <th>Account Name</th>
                                                <th>IFSC Code</th>
                                                <th>Bank Name</th>
                                                <th>Attachment</th>
                                                <th>Account</th>
                                                <!-- <th>Edit</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>87587473689</td>
                                                <td>Current Account</td>
                                                <td>Account Name</td>
                                                <td>SBI0016543</td>
                                                <td>SBI</td>
                                                <td><a href="#">File.pdf</a></td>
                                                <td>Primary Account</td>
                                                <td>


                                                    <button class="btn btn-sm btn-primary me-2"
                                                        style="color: #cda85d !important; background-color: transparent;"
                                                        data-bs-toggle="offcanvas" data-bs-target="#editAdvocate">
                                                        <i class="ti ti-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger"
                                                        style="color: red; background-color: transparent;">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <hr>

                                <div class="row">

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Account No</label>
                                            <input type="text" class="form-control" placeholder="Account No" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Account Type</label>
                                            <select class="form-select" id="example-select">
                                                <option>Savings Account</option>
                                                <option>Current Account</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Account Name</label>
                                            <input type="text" class="form-control" placeholder="Account Name" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">IFSC Code</label>
                                            <input type="text" class="form-control" placeholder="IFSC Code" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Bank Name</label>
                                            <input type="text" class="form-control" placeholder="Bank Name" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Attachment</label>
                                            <input type="file" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Account </label>
                                            <select class="form-select" id="example-select">
                                                <option>Primary Account</option>
                                                <option>Secondary Account</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4 my-auto">
                                        <div class="">
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="ti ti-plus"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="d-flex justify-content-center gap-1 mt-3">
                                    <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                    <button class="btn btn-sm btn-primary next-tab">Next</button>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel">

                                <div class="table-responsive">
                                    <table class="table table-nowrap datatable table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Title</th>
                                                <th>Attachment</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Pan Card</td>
                                                <td><a href="#">Attachment.</a></td>
                                                <td>


                                                    <button class="btn btn-sm btn-primary me-2"
                                                        style="color: #cda85d !important; background-color: transparent;"
                                                        data-bs-toggle="offcanvas" data-bs-target="#editAdvocate">
                                                        <i class="ti ti-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger"
                                                        style="color: red; background-color: transparent;">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <hr>
                                <div id="formContainer">

                                    <div class="row form-row mt-2">

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control" placeholder="Title">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Attachment</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4 my-auto ">
                                            <a href="#" class="btn btn-sm btn-danger deleteBtn"
                                                style="color: red; background-color: transparent;">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                            <!-- <a href="#" class="btn btn-danger btn-sm me-2 deleteBtn">
                                                <i class="ti ti-trash"></i>
                                            </a> -->
                                            <a href="#" class="btn btn-sm btn-primary btn-sm addBtn">
                                                <i class="ti ti-plus"></i>
                                            </a>
                                        </div>

                                    </div>

                                </div>

                                <div class="d-flex justify-content-center gap-1 mt-3">
                                    <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                    <button class="btn btn-sm btn-primary next-tab">Next</button>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="message" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-nowrap datatable table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Phone No</th>
                                                <th>Email ID</th>
                                                <th>Reference No</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Name 1</td>
                                                <td>9876543210</td>
                                                <td>demo@gmail.com</td>
                                                <td>9876543210</td>
                                                <td>


                                                    <button class="btn btn-sm btn-primary me-2"
                                                        style="color: #cda85d !important; background-color: transparent;"
                                                        data-bs-toggle="offcanvas" data-bs-target="#editAdvocate">
                                                        <i class="ti ti-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger"
                                                        style="color: red; background-color: transparent;">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <hr>

                                <div class="row">

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label"> Name</label>
                                            <input type="text" class="form-control" placeholder="Name" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Phone No</label>
                                            <input type="text" class="form-control" placeholder="Phone No" />
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">E-mail Id</label>
                                            <input type="text" class="form-control" placeholder="E-mail Id" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="input-label" class="form-label">Reference Number</label>
                                            <input type="text" class="form-control" placeholder="Reference No" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 my-auto">
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="ti ti-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center gap-1 mt-3">
                                    <button class="btn btn-sm btn-secondary prev-tab">Previous</button>
                                    <button class="btn btn-sm btn-primary">Save</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div> <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

<!-- edit Modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="editModalLabel">Edit Account</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3 text-center">
                        <h6 class="fs-15 ">Account Set US</h6>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                            <label class="form-check-label" for="customRadio1">Primary Account</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                            <label class="form-check-label" for="customRadio2">Secondary Account</label>
                        </div>
                    </div>
                    <!-- <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" id="example-select">
                            <option>Enable</option>
                            <option>Disable</option>
                        </select>
                    </div> -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-sm btn-primary"> Save</button>
            </div>
        </div>
    </div>
</div>


<!-- edit offcanvas -->

<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="editAdvocate" data-bs-backdrop="static"
    data-bs-keyboard="false">
    <div class="offcanvas-header border-bottom">
        <h5 class="fw-semibold">Edit Account</h5>
        <button type="button"
            class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
            data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ti ti-x"></i>
        </button>
    </div>
    <div class="offcanvas-body" style="padding: 20px 30px 20px 30px;">

        <form>
            <div class="mb-3 text-center">
                <h6 class="fs-15 mb-3">Account Set US</h6>
                <div class="form-check form-check-inline">
                    <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                    <label class="form-check-label" for="customRadio1">Primary Account</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                    <label class="form-check-label" for="customRadio2">Secondary Account</label>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12 text-end">
                    <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn"
                        data-bs-dismiss="offcanvas">Cancel</a>
                    <a href="#" class="btn btn-sm btn-primary me-2">Save</a>
                </div>
            </div>

        </form>
    </div>

</div>



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

    document.addEventListener("DOMContentLoaded", function () {

        const triggerTabList = [].slice.call(document.querySelectorAll('#caseTab a'));

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

        setupModal("caseType_create", "subcase-create");

    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {

        const typeSelect = document.getElementById("type_create");
        const caseTypeDiv = document.getElementById("caseTypeDiv");
        const subCaseTypeDiv = document.getElementById("subCaseTypeDiv");
        const ProductTypeDiv = document.getElementById("ProductTypeDiv");
        const NoticeTypeDiv = document.getElementById("NoticeTypeDiv");

        function toggleCaseFields() {
            const selectedType = typeSelect.value;

            if (selectedType === "Notice") {
                NoticeTypeDiv.style.display = "block";
                ProductTypeDiv.style.display = "none";
                caseTypeDiv.style.display = "none";
                subCaseTypeDiv.style.display = "none";
            } else if (selectedType === "Case") {
                NoticeTypeDiv.style.display = "none";
                ProductTypeDiv.style.display = "block";
                caseTypeDiv.style.display = "block";
                subCaseTypeDiv.style.display = "block";
            } else {
                caseTypeDiv.style.display = "none";
                subCaseTypeDiv.style.display = "none";
                ProductTypeDiv.style.display = "none";
                NoticeTypeDiv.style.display = "none";
            }
        }

        // Trigger when dropdown changes
        typeSelect.addEventListener("change", toggleCaseFields);

        // Run on page load
        toggleCaseFields();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {

        const typeSelect = document.getElementById("typeSelect");
        const caseTypeDiv = document.getElementById("caseTypeContainer");
        const subCaseTypeDiv = document.getElementById("subCaseTypeContainer");
        const ProductTypeDiv = document.getElementById("ProductTypeContainer");
        const NoticeTypeDiv = document.getElementById("NoticeTypeContainer");

        function toggleCaseFields() {
            const selectedType = typeSelect.value;

            if (selectedType === "Notice") {
                NoticeTypeDiv.style.display = "block";
                caseTypeDiv.style.display = "none";
                subCaseTypeDiv.style.display = "none";
                ProductTypeDiv.style.display = "none";
            } else if (selectedType === "Case") {
                NoticeTypeDiv.style.display = "none";
                caseTypeDiv.style.display = "block";
                subCaseTypeDiv.style.display = "block";
                ProductTypeDiv.style.display = "block";
            } else {
                caseTypeDiv.style.display = "none";
                subCaseTypeDiv.style.display = "none";
                ProductTypeDiv.style.display = "none";
                NoticeTypeDiv.style.display = "none";
            }
        }

        typeSelect.addEventListener("change", toggleCaseFields);
        toggleCaseFields();
    });
</script>


<?php include 'footer.php'; ?>
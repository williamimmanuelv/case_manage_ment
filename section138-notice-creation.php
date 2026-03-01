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
  <a href="section138-notice-report.php" class="mb-3 text-primary" style="font-weight: 600;"> <i
      class="ti ti-arrow-left mt-0" style="font-size: 16px;font-weight: 600;"></i> Go Back </a>
</div>

<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center  justify-content-between">
        <h5 class="card-title">Section 138 Notice</h5>
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
                      <label for="cnr" class="form-label">Allocation No <span style="color:red;">*</span></label>
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
                    <label for="input-label" class="form-label">Case Type <span style="color:red;">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter Case type">
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <label for="input-label" class="form-label">Sub Case Type <span style="color:red;">*</span></label>
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
                <div class="d-flex justify-content-between align-items-center">
                  <h5 class="m-0">Notice Details</h5>
                  <button class="btn btn-sm btn-primary me-2">
                    Draft
                  </button>
                </div>
                <hr>
                <ul class="nav nav-tabs nav-bordered mb-3" id="caseTabs" role="tablist">
                  <li class="nav-item">
                    <a href="#home" data-bs-toggle="tab" class="nav-link active" role="tab">Notice Details</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="#Product" data-bs-toggle="tab" class="nav-link " role="tab">Product Details</a>
                  </li> -->
                  <li class="nav-item">
                    <a href="#Applicant" data-bs-toggle="tab" class="nav-link" role="tab">Sender Details</a>
                  </li>
                  <li class="nav-item">
                    <a href="#extra-coloumn" data-bs-toggle="tab" class="nav-link" role="tab">Extra Coloumn</a>
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
                </ul>

                <div class="tab-content" id="caseTabsContent">

                  <!-- <div class="tab-pane fade " id="Product" role="tabpanel">
                    <div class="table-responsive" style="height: 300px; border: 1px solid #8080803b;">
                      <table id="tbl_postal_create" class="table dataTable table-nowrap table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Loan Number</th>
                            <th>Product</th>
                            <th>Remove</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>LN-789001</td>
                            <td>Car</td>
                            <td><button class="btn btn-sm btn-danger"><i class="ti ti-trash"></i></button></td>
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
                        <select class="form-control">
                          <option value="Car Loan">Car Loan</option>
                          <option value="Business Loan">Business Loan</option>
                          <option value="two wheeler">Two Wheeler Loan</option>
                        </select>
                      </div>


                      <div class="col-md-6 col-lg-4 mt-auto">
                        <a href="#" class="btn btn-primary btn-sm">
                          <i class="ti ti-plus"></i>
                        </a>
                      </div>

                    </div>
                    <div class="text-end mt-3">
                      <button class="btn btn-secondary prev-tab">Previous</button>
                      <button class="btn btn-primary next-tab">Next</button>
                    </div>
                  </div> -->

                  <div class="tab-pane fade show active" id="home" role="tabpanel">
                    <div class="row g-4">

                      <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Customer ID <span
                            style="color:red;">*</span></label>
                        <input type="text" class="form-control" placeholder="Customer Id" />
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="cnr" class="form-label">Case Nature <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="Fresh" value="Fresh" />
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label class="form-label">Loan Number</label>
                        <input type="text" class="form-control" placeholder="Loan No" />
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label class="form-label">Product <span style="color:red;">*</span></label>
                        <select class="form-control">
                          <option value="Car Loan">Car Loan</option>
                          <option value="Business Loan">Business Loan</option>
                          <option value="two wheeler">Two Wheeler Loan</option>
                        </select>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Cheque Number </label>
                        <input type="text" class="form-control" placeholder="Cheque Number" />
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Cheque Amount </label>
                        <input type="text" class="form-control" placeholder="Cheque Amount" />
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Cheque Date </label>
                        <input type="date" class="form-control" />
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Cheque Present Date </label>
                        <input type="date" class="form-control" />
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Cheque Presented Bank and Address</label>
                        <input type="text" class="form-control" placeholder="Bank and Address" />
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Reason for Return</label>
                        <input type="text" class="form-control" placeholder="Reason for return " />
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Legal Notice Date</label>
                        <input type="date" class="form-control" />
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Legal Notice Status</label>
                        <input type="text" class="form-control" placeholder="Legal notice status " />
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Legal Notice Return Date</label>
                        <input type="date" class="form-control" />
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Notice Return Status</label>
                        <input type="text" class="form-control" placeholder="Notice return status" />
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

                    <div class="row g-4 mt-1">

                      <div class="col-md-6 col-lg-4">
                        <label for="txt_collec_mang_name" class="form-label">Collection Manager Name</label>
                        <input type="text" class="form-control" placeholder="Collection Manager Name" autocomplete="off"
                          id="txt_collec_mang_name">
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="txt_collec_mang_number" class="form-label">Collection Manager Number</label>
                        <input type="text" class="form-control" placeholder="Collection Manager Number"
                          autocomplete="off" id="txt_collec_mang_number">
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <label for="txt_collec_mang_mail" class="form-label">Collection Manager Mail id</label>
                        <input type="text" class="form-control" placeholder="Collection Manager Mail" autocomplete="off"
                          id="txt_collec_mang_mail">
                      </div>

                    </div>

                    <hr>

                    <div class="d-flex justify-content-end gap-1 mt-3">
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
                      <button class="btn btn-secondary btn-sm prev-tab">Previous</button>
                      <button class="btn btn-sm btn-primary next-tab">Save</button>
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
                      <button class="btn btn-secondary btn-sm prev-tab">Previous</button>
                      <button class="btn btn-primary btn-sm next-tab">Next</button>
                    </div>
                  </div>

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
                      <button class="btn btn-secondary btn-sm prev-tab">Previous</button>
                      <button class="btn btn-primary btn-sm next-tab">Next</button>
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
                      <button class="btn btn-secondary btn-sm prev-tab">Previous</button>
                      <button class="btn btn-primary btn-sm next-tab">Next</button>
                    </div>

                  </div>

                  <div class="tab-pane fade" id="schedule" role="tabpanel">

                    <div class="table-responsive" style="height: 300px; border: 1px solid #8080803b;">
                      <table class="table dataTable table-nowrap table-bordered"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Schedule</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
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
                      <button class="btn btn-secondary btn-sm prev-tab">Previous</button>
                      <button class="btn btn-primary btn-sm next-tab">Next</button>
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
                      <button class="btn btn-secondary btn-sm prev-tab">Previous</button>
                      <button class="btn btn-primary btn-sm">Save</button>
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
                    <button class="btn btn-sm btn-success me-2">
                      <i class="ti ti-download"></i>
                    </button>
                  </div>

                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <div class="mb-3">
                        <label for="cnr" class="form-label">Allocation No <span style="color:red;">*</span></label>
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
                        <label for="cnr" class="form-label">Case Type <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" value="By Case">
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="mb-3">
                        <label for="cnr" class="form-label">SubCase Type <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" value="Section 138">
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="mb-3">
                        <label for="cnr" class="form-label">Product <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" value="Car">
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="mb-3">
                        <label for="cnr" class="form-label">Upload File <span style="color:red;">*</span></label>
                        <input type="file" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3 col-lg-4" style="margin-top: 30px;">
                      <button class="btn btn-sm btn-primary me-2">
                        <i class="ti ti-device-floppy me-2"></i> Save
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
                      <th>Allocation No</th>
                      <th>Case Type</th>
                      <th>Sub Case Type</th>
                      <th>Act</th>
                      <th>Act Subtype</th>
                      <th>Zone</th>
                      <th>State</th>
                      <th>District</th>
                      <th>Branch</th>
                      <th>Customer ID</th>
                      <th>Case Nature</th>
                      <th>Loan No</th>
                      <th>Product</th>
                      <th>Cheque Number</th>
                      <th>Cheque Amount</th>
                      <th>Cheque Date</th>
                      <th>Cheque Present Date</th>
                      <th>Bank & Address</th>
                      <th>Return Reason</th>
                      <th>Legal Notice Date</th>
                      <th>Legal Notice Status</th>
                      <th>Notice Return Date</th>
                      <th>Notice Return Status</th>
                      <th>CGTMSE</th>
                      <th>ECLGS</th>
                      <th>NCGTC</th>
                      <th>MSME</th>
                      <th>Collection Manager</th>
                      <th>Manager Mobile</th>
                      <th>Manager Mail</th>
                      <th>Sender Name</th>
                      <th>Sender Mobile</th>
                      <th>Address</th>
                      <th>Remarks</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Allot001</td>
                      <td>By Case</td>
                      <td>Section 138 NI Act</td>
                      <td>Negotiable Instruments Act</td>
                      <td>138</td>
                      <td>South Zone</td>
                      <td>Tamil Nadu</td>
                      <td>Chennai</td>
                      <td>Anna Nagar</td>
                      <td>CUST4587</td>
                      <td>Fresh</td>
                      <td>LN-789001</td>
                      <td>Car Loan</td>
                      <td>458965</td>
                      <td>₹1,25,000</td>
                      <td>10-01-2026</td>
                      <td>12-01-2026</td>
                      <td>State Bank of India, T Nagar Branch</td>
                      <td>Insufficient Funds</td>
                      <td>20-01-2026</td>
                      <td>Sent</td>
                      <td>28-01-2026</td>
                      <td>Delivered</td>
                      <td>Yes</td>
                      <td>No</td>
                      <td>No</td>
                      <td>Yes</td>
                      <td>Prakash</td>
                      <td>9876543210</td>
                      <td>prakash@finance.com</td>
                      <td>Ramesh Kumar</td>
                      <td>9876543210</td>
                      <td>12/4 North Street, Chennai</td>
                      <td>Customer promised payment within 15 days</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>

      </div>
      <!-- end card-body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>
<!-- end row -->

<!-- Upload Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="creationModalLabel">Excel Upload</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
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
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>

          <div class="mb-3 d-flex align-items-center justify-content-center">
            <p class="mb-0">Download Excel</p>
            <button class="btn btn-success btn-sm ms-3">
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
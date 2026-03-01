<?php include 'header.php'; ?>

<div class="d-flex align-items-center">
  <a href="conciliation-notice.php" class="mb-3 text-primary" style="font-weight: 600;"> <i class="ti ti-arrow-left mt-0" style="font-size: 16px;font-weight: 600;"></i> Go Back </a>
</div>

<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center ">
        <h5 class="card-title">Conciliation Notice</h5>
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
                      <label for="cnr" class="form-label">Allocation No</label>
                      <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
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
                      <label class="form-label">Case Type</label>
                      <select class="form-select" id="caseType_create">
                        <option value="">Select</option>
                        <option value="CivilCase">Civil Case</option>
                        <option value="CriminalCase">Criminal Case</option>
                        <option value="ArbitrationCase">Arbitration Case</option>
                        <option value="SarfaesiCase">Sarfaesi Case</option>
                        <option value="DRTCase">DRT Case</option>
                        <option value="NACLTCase">NACLT Case</option>
                        <option value="ConsumerCase">Consumer Case</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="mb-3">
                      <label class="form-label">Sub Case Type</label>

                      <select class="form-select subcase-create" data-type="default">
                        <option value="">Select</option>
                      </select>

                      <select class="form-select subcase-create d-none" data-type="CivilCase">
                        <option value="">Select</option>
                        <option value="civil-suit">Civil Suit</option>
                        <option value="summary-suit">Summary Suit</option>
                        <option value="against-case">Against Case</option>
                        <option value="ep">EP</option>
                        <option value="insolvency-petition">Insolvency Petition</option>
                      </select>

                      <select class="form-select subcase-create d-none" data-type="CriminalCase">
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

                      <select class="form-select subcase-create d-none" data-type="ArbitrationCase">
                        <option value="">Select</option>
                        <option value="Section21">Section 21</option>
                        <option value="Section11">Section 11</option>
                        <option value="Section17">Section 17</option>
                        <option value="Section34">Section 34</option>
                        <option value="EP">EP</option>
                      </select>

                      <select class="form-select subcase-create d-none" data-type="SarfaesiCase">
                        <option value="">Select</option>
                        <option value="Section13-2">Section 13 (2)</option>
                        <option value="Section13-4">Section 13 (4)</option>
                        <option value="Section14">Section 14</option>
                      </select>

                      <select class="form-select subcase-create d-none" data-type="DRTCase">
                        <option value="">Select</option>
                        <option value="Section18">Section 18</option>
                        <option value="Section19">Section 19</option>
                        <option value="Writ">Writ</option>
                      </select>

                      <select class="form-select subcase-create d-none" data-type="NACLTCase">
                        <option value="">Select</option>
                      </select>

                      <select class="form-select subcase-create d-none" data-type="ConsumerCase">
                        <option value="">Select</option>
                        <option value="DistrictCase">District Case</option>
                        <option value="StateCase">State Case</option>
                        <option value="EP">EP</option>
                        <option value="NationalCase">National Case</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card card-case">
              <div class="card-body">
                <h5>Notice Details</h5>
                <ul class="nav nav-tabs mb-3" id="concTabs" role="tablist">
                  <li class="nav-item">
                    <a href="#notice" data-bs-toggle="tab" class="nav-link active" role="tab">
                      Notice Details
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="#Applicant" data-bs-toggle="tab" class="nav-link" role="tab">Applicant</a>
                  </li>

                  <li class="nav-item">
                    <a href="#profile" data-bs-toggle="tab" class="nav-link" role="tab">Co Applicant</a>
                  </li>
                  <li class="nav-item">
                    <a href="#message" data-bs-toggle="tab" class="nav-link" role="tab">Guarantor</a>
                  </li>
                  <li class="nav-item">
                    <a href="#Co-Guarantor" data-bs-toggle="tab" class="nav-link" role="tab">Co - Guarantor</a>
                  </li>

                  <li class="nav-item">
                    <a href="#loan" data-bs-toggle="tab" class="nav-link" role="tab">
                      Loan Details
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="#extra-coloumn" data-bs-toggle="tab" class="nav-link" role="tab">Extra Column</a>
                  </li>
                </ul>

                <div class="tab-content" id="concTabsContent">

                  <div class="tab-pane fade show active" id="notice" role="tabpanel">


                    <div class="row g-4">

                      <div class="col-md-4">
                        <label class="form-label">Reference Number</label>
                        <input type="text" class="form-control" placeholder="Reference Number">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Name">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Venue</label>
                        <input type="text" class="form-control" placeholder="Venue">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Time</label>
                        <input type="time" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Product</label>
                        <select class="form-select" multiple data-choices data-choices-removeItem>
                          <option selected>Select</option>  
                          <option>Car</option>
                          <option>Two Wheeler</option>
                        </select>
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Outstanding Amount</label>
                        <input type="text" class="form-control" placeholder="Outstanding Amount">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Zone</label>
                        <select class="form-select">
                          <option>North</option>
                          <option>West</option>
                        </select>
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">State</label>
                        <select class="form-select">
                          <option>Tamil Nadu</option>
                          <option>Kerala</option>
                        </select>
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">District</label>
                        <select class="form-select">
                          <option>Chennai</option>
                          <option>Madurai</option>
                        </select>
                      </div>

                    </div>

                    <div class="text-center mt-3">
                      <button class="btn btn-primary next-tab">Next</button>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="Applicant" role="tabpanel">
                    <div class="row">

                      <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Customer Name</label>
                          <input type="text" class="form-control" placeholder="Name" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Father Name</label>
                          <input type="text" class="form-control" placeholder="Father Name" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Address 1</label>
                          <input type="text" class="form-control" placeholder="Address 1" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Address 2</label>
                          <input type="text" class="form-control" placeholder="Address 2" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Address 3</label>
                          <input type="text" class="form-control" placeholder="Address 3" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Customer Mobile Number</label>
                          <input type="text" class="form-control" placeholder="Customer Mobile No " />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Customer E-mail Id </label>
                          <input type="text" class="form-control" placeholder="E-mail Id" />
                        </div>
                      </div>

                    </div>
                    <div class="d-flex justify-content-center gap-1 mt-3">
                      <button class="btn btn-secondary prev-tab">Previous</button>
                      <button class="btn btn-primary next-tab">Next</button>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="profile" role="tabpanel">
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

                  <div class="tab-pane fade" id="Co-Guarantor" role="tabpanel">
                    <div class="row">


                      <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Co - Guarantor Name</label>
                          <input type="text" class="form-control" placeholder="Co - Guarantor Name" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Co - Guarantor Address</label>
                          <input type="text" class="form-control" placeholder="Co - Guarantor Address" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Co - Guarantor Mobile Number</label>
                          <input type="text" class="form-control" placeholder="Co - Guarantor Mobile No" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Co - Guarantor E-mail Id</label>
                          <input type="text" class="form-control" placeholder="Co - Guarantor E-mail Id" />

                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-center gap-1 mt-3">
                      <button class="btn btn-secondary prev-tab">Previous</button>
                      <button class="btn btn-primary next-tab">Next</button>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="loan" role="tabpanel">

                    <div class="row g-4">

                      <div class="col-md-4">
                        <label class="form-label">Loan No / Maskcard No</label>
                        <input type="text" class="form-control" placeholder="Loan No">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Applicant Status</label>
                        <input type="text" class="form-control" placeholder="Applicant Status">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">AAN No</label>
                        <input type="text" class="form-control" placeholder="AAN No">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Amount Financed</label>
                        <input type="text" class="form-control" placeholder="Amount Financed">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Disbursal Date</label>
                        <input type="date" class="form-control">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">EMI Amount</label>
                        <input type="text" class="form-control" placeholder="EMI Amount">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">No Of EMI</label>
                        <input type="text" class="form-control" placeholder="No Of EMI">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Rate Of Interest</label>
                        <input type="text" class="form-control" placeholder="Rate Of Interest">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Register Number</label>
                        <input type="text" class="form-control" placeholder="Register No">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Engine Number</label>
                        <input type="text" class="form-control" placeholder="Engine No">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Chassis Number</label>
                        <input type="text" class="form-control" placeholder="Chassis No">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Notice Balance</label>
                        <input type="text" class="form-control" placeholder="Notice Balance">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Balance As On Date</label>
                        <input type="date" class="form-control">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Vehicle Model</label>
                        <input type="text" class="form-control" placeholder="Vehicle Model">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Date 1</label>
                        <input type="date" class="form-control">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Date 2</label>
                        <input type="date" class="form-control">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Date 3</label>
                        <input type="date" class="form-control">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Date 4</label>
                        <input type="date" class="form-control">
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">RL Number</label>
                        <input type="text" class="form-control" placeholder="RL No">
                      </div>


                    </div>

                    <div class="d-flex justify-content-center gap-2 mt-3">
                      <button class="btn btn-secondary prev-tab">Previous</button>
                      <button class="btn btn-primary next-tab">Next</button>
                    </div>

                  </div>

                  <div class="tab-pane fade" id="extra-coloumn" role="tabpanel">
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
                    <div class="d-flex justify-content-center gap-1 mt-3">
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
            <div class="form-group" style="padding: 20px;">
              <div class="text-end">
                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#creationModal">
                  <i class="ti ti-plus"></i>
                </button>
                <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editModal">
                  <i class="ti ti-download"></i>
                </button>
              </div>

              <!-- Report List -->
              <div class="table-responsive mt-3">
                <table class="table table-nowrap datatable table-bordered">
                  <thead>
                    <tr>
                      <th>1</th>
                      <th>Reference Number</th>
                      <th>Conciliation Name</th>
                      <th>Conciliation Vendor</th>
                      <th>Conciliation Date</th>
                      <th>Customer Name</th>
                      <th>Address 1</th>
                      <th>Address 2</th>
                      <th>Address 3</th>
                      <th>Address 4</th>
                      <th>City</th>
                      <th>Location</th>
                      <th>Region</th>
                      <th>Branch</th>
                      <th>Pincode</th>
                      <th>Loan No</th>
                      <th>Applicant Status</th>
                      <th>Product</th>
                      <th>AAN No</th>
                      <th>Notice Balance</th>
                      <th>Balance As On Date</th>
                      <th>Manager Name</th>
                      <th>Manager Mobile No</th>
                      <th>Customer Mobile No</th>
                      <th>Customer Email ID</th>
                      <th>Amount Financed</th>
                      <th>Disbursal Date</th>
                      <th>EMI Amount</th>
                      <th>No Of EMI</th>
                      <th>Rate Of Interest</th>
                      <th>Register Number</th>
                      <th>Engine Number</th>
                      <th>Chassis Number</th>
                      <th>Dispatch Date</th>
                      <th>Customer RPAD Number</th>
                      <th>Conciliator Name</th>
                      <th>Conciliation Date</th>
                      <th>Conciliation Location</th>
                      <th>Conciliation Time</th>
                      <th>Branch Address</th>
                      <th>Cheque Bounce Date</th>
                      <th>Cheque Bounce Reason</th>
                      <th>Cheque Number</th>
                      <th>Settlement Letter Number</th>
                      <th>Vehicle Model</th>
                      <th>Others 1</th>
                      <th>Others 2</th>
                      <th>Others 3</th>
                      <th>Others 4</th>
                      <th>Date 1</th>
                      <th>Date 2</th>
                      <th>Date 3</th>
                      <th>Date 4</th>
                      <th>Password</th>
                      <th>RL Number</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>REF12234</td>
                      <td>Conciliation Name 1</td>
                      <td>Conciliation Vendor 1</td>
                      <td>25-11-2025</td>
                      <td>Rahul Kumar</td>
                      <td>12, Gandhi Street</td>
                      <td>Near Bus Stand</td>
                      <td>West Block</td>
                      <td>Apartment 4B</td>
                      <td>Chennai</td>
                      <td>Tambaram</td>
                      <td>South</td>
                      <td>Tambaram Branch</td>
                      <td>600045</td>
                      <td>LN8945332</td>
                      <td>Active</td>
                      <td>Car</td>
                      <td>AAN77889</td>
                      <td>25000</td>
                      <td>2025-02-15</td>
                      <td>Senthil Kumar</td>
                      <td>9876543210</td>
                      <td>9898989898</td>
                      <td>rahul@example.com</td>
                      <td>450000</td>
                      <td>2024-11-01</td>
                      <td>8500</td>
                      <td>60</td>
                      <td>12.5</td>
                      <td>TN22AB1234</td>
                      <td>ENG556677</td>
                      <td>CHS998877</td>
                      <td>2024-12-10</td>
                      <td>RPAD55221</td>
                      <td>Mohan Raj</td>
                      <td>2025-01-20</td>
                      <td>Tambaram Office</td>
                      <td>10:30 AM</td>
                      <td>45, East Main Road, Chennai</td>
                      <td>2025-01-05</td>
                      <td>Insufficient Funds</td>
                      <td>CHQ990088</td>
                      <td>STL554433</td>
                      <td>Hyundai i20</td>
                      <td>Remark 1</td>
                      <td>Remark 2</td>
                      <td>Remark 3</td>
                      <td>Remark 4</td>
                      <td>2025-03-01</td>
                      <td>2025-03-15</td>
                      <td>2025-04-01</td>
                      <td>2025-04-15</td>
                      <td>pass123</td>
                      <td>RL5566</td>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="creationModalLabel">Notice Upload</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="cnr" class="form-label">Allocation No</label>
                <input type="text" class="form-control" value="Allo001" />
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
                  <option value="ConsumerCase">Consumer Case</option>
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
                </select>

                <select class="form-select subcase-edit d-none" data-type="SarfaesiCase">
                  <option value="">Select</option>
                  <option value="Section13-2">Section 13 (2)</option>
                  <option value="Section13-4">Section 13 (4)</option>
                  <option value="Section14">Section 14</option>
                </select>

                <select class="form-select subcase-edit d-none" data-type="DRTCase">
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
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Conciliation Name</label>
                <input type="text" class="form-control" placeholder="Conciliation Name">
              </div>
            </div>

            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Conciliation Vendor</label>
                <input type="text" class="form-control" placeholder="Conciliation Vendor">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Conciliation Date</label>
                <input type="date" class="form-control">
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
        <h5 class="modal-title" id="editModalLabel">Notice Download</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-6 ">
              <div class="mb-3">
                <label for="cnr" class="form-label">Allocation No</label>
                <input type="text" class="form-control" value="Allo001" />
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
                  <option value="SarfaesiCase">Sarfaesi Case</option>
                  <option value="DRTCase">DRT Case</option>
                  <option value="NACLTCase">NACLT Case</option>
                  <option value="ConsumerCase">Consumer Case</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">

              <div class="mb-3">
                <label class="form-label">Sub Case Type</label>

                <select class="form-select subcase-download" data-type="default">
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
                </select>

                <select class="form-select subcase-download d-none" data-type="SarfaesiCase">
                  <option value="">Select</option>
                  <option value="Section13-2">Section 13 (2)</option>
                  <option value="Section13-4">Section 13 (4)</option>
                  <option value="Section14">Section 14</option>
                </select>

                <select class="form-select subcase-download d-none" data-type="DRTCase">
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
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Conciliation Name</label>
                <input type="text" class="form-control" placeholder="Conciliation Name">
              </div>
            </div>

            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Conciliation Vendor</label>
                <input type="text" class="form-control" placeholder="Conciliation Vendor">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Conciliation Date</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="col-md-6 mt-4">

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
  document.addEventListener("DOMContentLoaded", function() {

    const triggerTabList = [].slice.call(document.querySelectorAll('#concTabs a')); // FIXED

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


<?php include 'footer.php'; ?>
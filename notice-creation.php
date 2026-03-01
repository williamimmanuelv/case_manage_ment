<?php include 'header.php'; ?>

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
    width: 50%;
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

  .nav-tabs.nav-bordered .nav-item .nav-link {
    font-size: 12px !important;
  }
</style>
<!-- Quill css -->
<link rel="stylesheet" href="assets/plugins/quill/quill.core.css">
<link rel="stylesheet" href="assets/plugins/quill/quill.snow.css">
<link rel="stylesheet" href="assets/plugins/quill/quill.bubble.css">

<div class="d-flex align-items-center">
  <a href="notice-creation-report.php" class="mb-3 text-primary" style="font-weight: 600;"> <i
      class="ti ti-arrow-left mt-0" style="font-size: 16px;font-weight: 600;"></i> Go Back </a>
</div>

<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center ">
        <h5 class="card-title">Notice Creation</h5>

        <!-- <div class="radio-btn mx-auto" style="display: flex; justify-content: center; gap: 60px;">
          <div class="input-box" style="display: flex; align-items: center; gap: 10px;">
            <input type="radio" id="rad1" name="loginType" value="otp" checked>
            <h6 style="margin-bottom: unset;">Single</h6>
          </div>
          <div class="input-box" style="display: flex; align-items: center; gap: 10px;">
            <input type="radio" id="rad2" name="loginType" value="uname">
            <h6 style="margin-bottom: unset;">Bulk Upload</h6>
          </div>
        </div> -->
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
                  <div class="col-md-6 col-lg-4">
                    <div class="mb-3">
                      <label for="cnr" class="form-label">Notice Type <span style="color:red;">*</span></label>
                      <select class="form-control" data-choices name="choices-single-default"
                        id="choices-single-default">
                        <option value="">Select Notice Type</option>
                        <option value="Normal Notice">Normal Notice</option>
                        <option value="Conciliation Notice">Conciliation Notice</option>
                        <option value="Lok Adalat Notice">Lok Adalat Notice</option>
                        <option value="Mediation Notice">Mediation Notice</option>
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
                <h5>Notice Details</h5>
                <ul class="nav nav-tabs nav-justified nav-bordered nav-bordered-danger mb-3" id="caseTabs"
                  role="tablist">
                  <li class="nav-item">
                    <a href="#notice" data-bs-toggle="tab" class="nav-link active" role="tab">Notice </a>
                  </li>

                  <li class="nav-item">
                    <a href="#Product" data-bs-toggle="tab" class="nav-link" role="tab">Product </a>
                  </li>

                  <li class="nav-item">
                    <a href="#vehicle" data-bs-toggle="tab" class="nav-link" role="tab">Vehicle </a>
                  </li>

                  <li class="nav-item">
                    <a href="#media" data-bs-toggle="tab" class="nav-link" role="tab">MED/LOK/CON</a>
                  </li>

                  <li class="nav-item">
                    <a href="#Applicant" data-bs-toggle="tab" class="nav-link" role="tab">Sender </a>
                  </li>

                  <li class="nav-item">
                    <a href="#loan" data-bs-toggle="tab" class="nav-link" role="tab">Loss On Sale</a>
                  </li>

                  <li class="nav-item">
                    <a href="#schedule" data-bs-toggle="tab" class="nav-link" role="tab">Schedule</a>
                  </li>

                  <li class="nav-item">
                    <a href="#extra-coloumn" data-bs-toggle="tab" class="nav-link" role="tab">Extra Column</a>
                  </li>
                </ul>

                <div class="tab-content" id="concTabsContent">

                  <div class="tab-pane fade" id="Product" role="tabpanel">
                    <div class="table-responsive" style="height: 300px; border: 1px solid #e2e8f0;">
                      <table id="tbl_postal_create" class="table dataTable table-nowrap table-bordered"
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
                        <select class="form-select">
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
                        <input type="text" class="form-control" placeholder="Principal Outstanding" />
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

                  <div class="tab-pane fade show active" id="notice" role="tabpanel">

                    <div class="row g-4">

                      <div class="col-md-6 col-lg-4">
                        <label for="input-label" class="form-label">Customer ID <span
                            style="color:red;">*</span></label>
                        <input type="text" class="form-control" placeholder="Customer Id" />
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

                    <div class="row">
                      <h5 class="extra-col d-none">Extra Column</h5>

                      <div class="col-md-6 col-lg-4 caseField ep d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Case Number </label>
                          <input type="text" class="form-control" placeholder="Case number" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 caseField ep d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Decree Amount </label>
                          <input type="text" class="form-control" placeholder="Decree Amount" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 caseField ep d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Date of Decree </label>
                          <input type="date" class="form-control" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-138 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Cheque Number </label>
                          <input type="text" class="form-control" placeholder="Cheque Number" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-138 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Cheque Amount </label>
                          <input type="text" class="form-control" placeholder="Cheque Amount" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-138 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Cheque Date </label>
                          <input type="date" class="form-control" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-138 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Cheque Present Date </label>
                          <input type="date" class="form-control" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-138 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Cheque Presented Bank and Address</label>
                          <input type="text" class="form-control" placeholder="Bank and Address" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-138 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Reason for Return</label>
                          <input type="text" class="form-control" placeholder="Reason for return " />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-138 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Legal Notice Date</label>
                          <input type="date" class="form-control" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-138 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Legal Notice Status</label>
                          <input type="text" class="form-control" placeholder="Legal notice status " />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-138 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Legal Notice Return Date</label>
                          <input type="date" class="form-control" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-138 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Notice Return Status</label>
                          <input type="text" class="form-control" placeholder="Notice return status" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-25 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Mandate Number</label>
                          <input type="text" class="form-control" placeholder="Mandate number" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-25 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Mandate Date</label>
                          <input type="date" class="form-control" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-25 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Mandate Amount</label>
                          <input type="text" class="form-control" placeholder="Mandate amount" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-25 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Mandate Present Date</label>
                          <input type="date" class="form-control" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-25 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Mandate Presented Bank and Address</label>
                          <input type="text" class="form-control" placeholder="Mandate presented bank and address" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-25 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Reason for Return</label>
                          <input type="text" class="form-control" placeholder="Reason for return " />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-25 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Legal Notice Date</label>
                          <input type="text" class="form-control" placeholder="Legal notice date" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-25 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Legal Notice Status</label>
                          <input type="text" class="form-control" placeholder="Legal notice status" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-25 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Legal Notice Return Date</label>
                          <input type="date" class="form-control" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox section-25 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Notice Return Status</label>
                          <input type="text" class="form-control" placeholder="Notice Return Status" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox return-of-property d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Complainant Name</label>
                          <input type="text" class="form-control" placeholder="Complainant name" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox return-of-property d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">FIR Number</label>
                          <input type="text" class="form-control" placeholder="FIR Number" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox return-of-property d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">FIR Date</label>
                          <input type="date" class="form-control" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox return-of-property d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Police Station Name</label>
                          <input type="text" class="form-control" placeholder="Police station name" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox return-of-property d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Offenses Under Section</label>
                          <input type="text" class="form-control" placeholder="Offenses under section" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox return-of-property d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Property Details</label>
                          <input type="text" class="form-control" placeholder="Property details" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox bail d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">FIR Number</label>
                          <input type="text" class="form-control" placeholder="FIR Number" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox bail d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">FIR Date</label>
                          <input type="date" class="form-control" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox bail d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Police Station Name</label>
                          <input type="text" class="form-control" placeholder="Police station name" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox bail d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Offenses Under Section</label>
                          <input type="text" class="form-control" placeholder="Offenses under section" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox bail d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Arrest On</label>
                          <input type="text" class="form-control" placeholder="Arrest on" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox anticipatory-bail d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">FIR Number</label>
                          <input type="text" class="form-control" placeholder="FIR Number" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox anticipatory-bail d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">FIR Date</label>
                          <input type="date" class="form-control" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox anticipatory-bail d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Police Station Name</label>
                          <input type="text" class="form-control" placeholder="Police station name" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox anticipatory-bail d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Offenses Under Section</label>
                          <input type="text" class="form-control" placeholder="Offenses under section" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox sec-156 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Police Station Name</label>
                          <input type="text" class="form-control" placeholder="Police station name" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox sec-156 d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Offenses Under Section</label>
                          <input type="text" class="form-control" placeholder="Offenses under section" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox quash-petition d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">FIR Number</label>
                          <input type="text" class="form-control" placeholder="FIR Number" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox quash-petition d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">FIR Date</label>
                          <input type="date" class="form-control" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox quash-petition d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Police Station Name</label>
                          <input type="text" class="form-control" placeholder="Police station name" />
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 casebox quash-petition d-none">
                        <div class="mb-3">
                          <label for="input-label" class="form-label">Offenses Under Section</label>
                          <input type="text" class="form-control" placeholder="Offenses under section" />
                        </div>
                      </div>

                    </div>

                    <div class="d-flex justify-content-end gap-1 mt-3">
                      <button class="btn btn-sm btn-outline-secondary prev-tab">Previous</button>
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
                      <button class="btn btn-sm btn-outline-secondary prev-tab">Previous</button>
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
                      <button class="btn btn-sm btn-outline-secondary prev-tab">Previous</button>
                      <button class="btn btn-sm btn-primary next-tab">Next</button>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="Applicant" role="tabpanel">
                    <div class="table-responsive" style="height: 300px; border: 1px solid #e2e8f0;">
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
                      <button class="btn btn-sm btn-outline-secondary prev-tab">Previous</button>
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
                      <button class="btn btn-sm btn-outline-secondary prev-tab">Previous</button>
                      <button class="btn btn-sm btn-primary next-tab">Next</button>
                    </div>

                  </div>

                  <div class="tab-pane fade" id="schedule" role="tabpanel">

                    <div class="table-responsive" style="height: 300px; border: 1px solid #e2e8f0;">
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
                        Add
                      </a>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-3">
                      <button class="btn btn-sm btn-outline-secondary prev-tab">Previous</button>
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
                      <button class="btn btn-sm btn-outline-secondary prev-tab">Previous</button>
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
                    <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editModal">
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
                        <label for="cnr" class="form-label">Notice Type <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" value="Lok Adalt Notice">
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="mb-3">
                        <label for="cnr" class="form-label">Notice Process Type <span
                            style="color:red;">*</span></label>
                        <input type="text" class="form-control" value="Only Notice">
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
                      <th>Reference Number</th>
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


<!-- Quill Editor JS -->
<script src="assets/plugins/quill/quill.min.js" type="text/javascript"></script>

<!-- Quill JS -->
<script src="assets/js/form-quill.js" type="text/javascript"></script>

<?php include 'footer.php'; ?>
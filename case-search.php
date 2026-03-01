<?php include 'header.php'; ?>



<!-- start row -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Case Search</h5>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Loan No</label>
                            <select class="form-select" id="case-type">
                                <option value="">Select Loan Number</option>
                                <option>34567890</option>
                                <option>86585788</option>
                                <option>85658578</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Bank Name</label>
                            <select class="form-select" id="case-type">
                                <option value="">Select Bank Name</option>
                                <option value="Civil-Case">HDFC-CHE-DRT-5-B-Apr-2021</option>
                                <option value="Criminal-Case">TVS-CV-ARB-25-B1-Sep-2022</option>
                                <option value="Arbitration-Case">Axis-Tn-Arb-70-B-Jul-2021</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Court Name</label>
                            <select class="form-select" id="case-type">
                                <option value="">Select Court Name</option>
                                <option value="Civil-Case">XI Asst City Civil Court, Chennai</option>
                                <option value="Criminal-Case">District Consumer Chikkaraballipur, Karnataka</option>
                                <option value="Arbitration-Case">Sub Court, Tiruvottiyur</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-3 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Product</label>
                            <select class="form-select" id="case-type">
                                <option value="">Select Product</option>
                                <option >Insurance Policy</option>
                                <option >Rural Two Wheeler Loan</option>
                                <option >Two Wheeler Loan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Case No</label>
                            <select class="form-select" id="case-type">
                                <option>Select Case No</option>
                                <option>678844</option>
                                <option>7873673</option>
                                <option>66482967</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Branch</label>
                            <select class="form-select" id="case-type">
                                <option value="">Select Branch</option>
                                <option value="Civil-Case">Civil Case</option>
                                <option value="Criminal-Case">Criminal Case</option>
                                <option value="Arbitration-Case">Arbitration Case</option>
                                <option value="Sarfaesi-Case">Sarfaesi Case</option>
                                <option value="DRT-Case">DRT Case</option>
                                <option value="NACLT-Case">NACLT Case</option>
                                <option value="Cousumer-Case">Cousumer Case</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Select Date</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Select End Date</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 my-auto">
                        <button class="btn btn-sm btn-primary me-2">
                            <i class="ti ti-search"></i> Search
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-nowrap datatable table-bordered">
                            <thead>
                                <tr>
                                    
                                    <th>S.No</th>
                                    <th>Loan NO</th>
                                    <th>Bank</th>
                                    <th>Product</th>
                                    <th>Section</th>
                                    <th>Total</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>1</td>
                                    <td>20 days</td>
                                    <td>22-10-2025</td>
                                    <td>00984</td>
                                    <td>000/898</td>
                                    <td>Axis</td>
                                    <td>
                      <a href="case-search-list.php" class="btn btn-sm btn-primary me-2" >
                        <i class="ti ti-eye"></i>
                      </a>
                    </td>
                                </tr>
                            </tbody>
                        </table>
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


<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Hearing Bulk</h5>
            </div>
            <div class="card-body">
                <div class="form-group" >
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="input-label" class="form-label">Case</label>
                                <select class="form-select" id="case-type">
                                    <option value="">Select</option>
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
                        <div class="col-md-6 col-lg-4" style="margin-top: 32px;">
                            <button class="btn btn-sm btn-primary me-2">
                                <i class="ti ti-search"></i> Search
                            </button>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="input-label" class="form-label">Choose Product</label>
                                <select class="form-select" id="case-type">
                                    <option value="">Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="input-label" class="form-label">Total No</label>
                                <input type="text" class="form-control" placeholder="Total No" />
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="input-label" class="form-label">Court Name</label>
                                <input type="text" class="form-control" placeholder="Court Name" />
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="input-label" class="form-label">Bank Name</label>
                                <input type="text" class="form-control"
                                    placeholder="Customer name" />
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="input-label" class="form-label">Manager Name</label>
                                <input type="text" class="form-control"
                                    placeholder="Customer name" />
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="table-responsive">
                        <table class="table table-nowrap datatable table-bordered">
                            <thead>
                                <tr>

                                    <th>S.No</th>
                                    <th>Loan No</th>
                                    <th>Filing Date</th>
                                    <th>SR Number</th>
                                    <th>Allocation Date</th>
                                    <th>Outstanding Amount</th>
                                    <th>Customer Name</th>
                                    <th>Case No</th>
                                    <th>Branch</th>
                                    <th>Claim Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>1</td>
                                    <td>9876543210</td>
                                    <td>22-10-2025</td>
                                    <td>76543210</td>
                                    <td>26-10-2025</td>
                                    <td>6000</td>
                                    <td>Customer-one</td>
                                    <td>10</td>
                                    <td>Tamil Nadu</td>
                                    <td>6000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="input-date" class="form-label">Hearing Date</label>
                                <input type="date" class="form-control" id="input-date">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="input-label" class="form-label">Status</label>
                                <select class="form-select" id="case-type">
                                    <option value="">Select Case Status</option>
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
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="input-label" class="form-label">Remarks</label>
                                <textarea name="" class="form-control" placeholder="Remarks" id=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-end">
                            <a href="" class="btn btn-primary">Update</a>
                            <a href="" class="btn btn-cancle">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>
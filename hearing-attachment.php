<?php include 'header.php'; ?>


<div class="row">
    <div class="col-xl-12">
        <div class="card border-0 rounded-0">
            <div class="card-header">
                <h5 class="card-title">Attachment</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Type</label>
                            <select class="form-select" id="case-type">
                                <option value="">Select Type</option>
                                <option value="Case-Close">Case Close</option>
                                <option value="Case-Re-Open">Case Re-Open</option>
                                <option value="Case-Hold">Case Hold</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Loan No</label>
                            <select class="form-select" id="case-type">
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Batch Number</label>
                            <input type="text" class="form-control" placeholder="batch number" />
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label"> Product</label>
                            <select class="form-select" id="case-type">
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Total</label>
                            <input type="text" class="form-control" placeholder="Total" />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                            <label for="input-label" class="form-label">Case No</label>
                            <input type="text" class="form-control" placeholder="Case No" />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="col-lg-4  form-label">Attachment</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 " style="margin-top: 2rem;">
                        <div class="mb">
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal"> <i
                                    class="ti ti-plus"></i> </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table table-nowrap datatable table-bordered">
                        <thead>
                            <tr>

                                <th>S.No</th>
                                <th>Case ID</th>
                                <th>Type</th>
                                <th>Loan No</th>
                                <th>Batch Number</th>
                                <th>Product</th>
                                <th>Section</th>
                                <th>Total</th>
                                <th>Attachment</th>
                                <th>value</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>1</td>
                                <td>6543210</td>
                                <td>Case Close</td>
                                <td>76543210</td>
                                <td>26</td>
                                <td>Car</td>
                                <td>one</td>
                                <td>10</td>
                                <td><a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal"> <i
                                            class="ti ti-download"></i>
                                    </a>
                                </td>
                                <td>6000</td>
                                <td><button class="btn btn-sm btn-danger">
                                        <i class="ti ti-trash"></i>
                                    </button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12 text-end">
                        <a href="" class="btn btn-primary">Create</a>
                        <a href="" class="btn btn-cancle">Clear</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>
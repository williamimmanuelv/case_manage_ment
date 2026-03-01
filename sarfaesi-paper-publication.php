<?php include 'header.php'; ?>

<style>
    .nav-tabs>li>a {
        background-color: #eeeeee;
    }
</style>

<div class="card border-0 rounded-0">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Sarfaesi Paper Publication</h5>
    </div>
    <div class="card-body">

        <div class="row align-items-center mb-3">

            <div class="col-md-6 col-lg-4">
                <label for="input-label" class="form-label">Loan Number</label>
                <select class="form-control select2" data-toggle="select2">
                    <option>Select</option>
                    <optgroup>
                        <option value="Loan">Loan 001</option>
                        <option value="Loan">Loan 002</option>
                    </optgroup>
                </select>
            </div>
            <div class="col-md-6 col-lg-4">
                <label for="input-label" class="form-label">Notice Type</label>
                <select class="form-select" id="notice-case">
                    <option>Select</option>
                    <option value="Sec 13(2)">Sec 13(2)</option>
                    <option value="Sec 13(4)">Sec 13(4)</option>
                </select>
            </div>
            <div class="col-md-6 mt-4 col-lg-4">
                <button class="btn btn-sm btn-primary me-2">
                    <i class="ti ti-search"></i> Search
                </button>
            </div>

        </div>

        <div class="table-responsive" style="height: 300px; border: 1px solid #8080803b;">
            <table id="tbl_postal_create" class="display table table-bordered"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name of News Paper</th>
                        <th>Vernacular Language Paper</th>
                        <th>Publication Date</th>
                        <th>Name of News Paper</th>
                        <th>English Language Paper</th>
                        <th>Publication Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>

            </table>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-4">
                <label class="form-label">Name of News Paper</label>
                <input type="text" class="form-control" placeholder="News Paper">
            </div>
            <div class="col-md-4">
                <label class="form-label">Vernacular Language Paper</label>
                <input type="text" class="form-control" placeholder="Language">
            </div>
            <div class="col-md-4">
                <label class="form-label">Publication Date</label>
                <input type="date" class="form-control">
            </div>
            <div class="col-md-4">
                <label class="form-label">Name of News Paper</label>
                <input type="text" class="form-control" placeholder="News Paper">
            </div>
            <div class="col-md-4">
                <label class="form-label">English Language Paper</label>
                <input type="text" class="form-control" placeholder="Language">
            </div>
            <div class="col-md-4">
                <label class="form-label">Publication Date</label>
                <input type="date" class="form-control">
            </div>
        </div>

        <div class="text-end mb-3 mt-3">
            <a href="#" class="btn btn-success"><i class="ti ti-plus"></i> </a>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 text-end">
                <a href="" class="btn btn-primary">Create</a>
                <a href="" class="btn btn-cancle">Cancle</a>
            </div>
        </div>

    </div>
</div>


<?php include 'footer.php'; ?>
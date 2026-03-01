<?php include 'header.php'; ?>

<style>
  .nav-tabs>li>a {
        background-color: #eeeeee;
    }
</style>

<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Reply & Rejoinder Notice</h5>
      </div>
      <div class="card-body">

        <ul class="nav nav-tabs nav-solid-primary mb-3">
          <li class="nav-item"><a class="nav-link active" href="#solid-tab5" data-bs-toggle="tab">reply</a></li>
          <li class="nav-item"><a class="nav-link" href="#solid-tab6" data-bs-toggle="tab">Rejoinder</a></li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane show active" id="solid-tab5">

            <div class="row g-3">
              <div class="col-md-4 mb-3 sub-case">
                <label class="form-label">Loan No</label>
                <select class="form-select" id="case-type">
                  <option value="">Select Loan No</option>
                  <option value="LNAB5A57">LNAB5A57</option>
                  <option value="LNAB5A58">LNAB5A58</option>
                </select>
              </div>
              <div class="col-md-4 mt-5">
                <button class="btn btn-sm btn-primary me-2">
                  <i class="ti ti-search"></i> Search
                </button>
              </div>
            </div>


            <div class="row g-3">
              <div class="col-md-6 col-lg-4">
                <label class="form-label">Date of Receipt of Representation 13(3)</label>
                <input type="date" class="form-control">
              </div>
              <div class="col-md-6 col-lg-4">
                <label class="form-label">Representation Sent By</label>
                <input type="text" class="form-control" placeholder="Representation">
              </div>
              <div class="col-md-6 col-lg-4">
                <label class="form-label">Date of Reply to Representation</label>
                <input type="date" class="form-control">
              </div>
              <div class="col-md-6 col-lg-4">
                <label class="form-label">Reply Sent To</label>
                <select class="form-select" id="example-select">
                  <option>Applicant</option>
                  <option>Co Applicant</option>
                  <option>Guarantor</option>
                  <option>Co Guarantor</option>
                </select>
              </div>
              <div class="col-md-6 col-lg-4">
                <label class="form-label">Remarks</label>
                <textarea class="form-control" placeholder="Enter Notice Amount"></textarea>
              </div>
            </div>

            <div class="d-flex justify-content-end gap-1 mt-3">
              <button class="btn btn-primary">Save</button>
            </div>
          </div>
          <div class="tab-pane" id="solid-tab6">
            <div class="row g-3">
              <div class="col-md-4 mb-3 sub-case">
                <label class="form-label">Loan No</label>
                <select class="form-select" id="case-type">
                  <option value="">Select Loan No</option>
                  <option value="LNAB5A57">LNAB5A57</option>
                  <option value="LNAB5A58">LNAB5A58</option>
                </select>
              </div>
              <div class="col-md-4 mt-5">
                <button class="btn btn-sm btn-primary me-2">
                  <i class="ti ti-search"></i> Search
                </button>
              </div>
            </div>


            <div class="row g-3">
              <div class="col-md-6 col-lg-4">
                <label class="form-label">Date of Receipt of Representation 13(3A)</label>
                <input type="date" class="form-control">
              </div>
              <div class="col-md-6 col-lg-4">
                <label class="form-label">Representation Sent By</label>
                <input type="text" class="form-control" placeholder="Representation">
              </div>
              <div class="col-md-6 col-lg-4">
                <label class="form-label">Date of Reply to Representation</label>
                <input type="date" class="form-control">
              </div>
              <div class="col-md-6 col-lg-4">
                <label class="form-label">Reply Sent To</label>
                <select class="form-select" id="example-select">
                  <option>Applicant</option>
                  <option>Co Applicant</option>
                  <option>Guarantor</option>
                  <option>Co Guarantor</option>
                </select>
              </div>
              <div class="col-md-6 col-lg-4">
                <label class="form-label">Remarks</label>
                <textarea class="form-control" placeholder="Enter Notice Amount"></textarea>
              </div>
            </div>
            <div class="d-flex justify-content-end gap-1 mt-3">
              <button class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>

        <!-- <div class="table-responsive">
          <table class="table table-nowrap datatable table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Loan No</th>
                <th>Receipt Date (13(3A))</th>
                <th>Representation Sent By</th>
                <th>Reply Date</th>
                <th>Reply Sent To</th>
                <th>Remarks</th>
                <th>Attachment</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>LNAB5A57</td>
                <td>2026-01-10</td>
                <td>Borrower</td>
                <td>2026-01-15</td>
                <td>Applicant</td>
                <td>
                  Reply sent within statutory period.
                </td>
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
        </div> -->
      </div>

      <!-- end card-body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>
<!-- end row -->





<?php include 'footer.php'; ?>
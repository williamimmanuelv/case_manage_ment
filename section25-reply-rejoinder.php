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
          <li class="nav-item"><a class="nav-link active" href="#solid-tab5" data-bs-toggle="tab">Reply</a></li>
          <li class="nav-item"><a class="nav-link" href="#solid-tab6" data-bs-toggle="tab">Rejoinder</a></li>
          <li class="nav-item"><a class="nav-link" href="#solid-tab7" data-bs-toggle="tab">Defreeze</a></li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane show active" id="solid-tab5">

            <div class="row">
              <div class="col-md-4">
                <div class="mb-3">
                  <label class="form-label">Legal Type</label>
                  <select class="form-select" id="case-type">
                    <option value="">Select</option>
                    <option value="Notice">Notice</option>
                    <option value="Case">Case</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4 mb-3 sub-case">
                <label class="form-label">Loan No</label>
                <select class="form-select" id="case-type">
                  <option value="">Select Loan No</option>
                  <option value="LNAB5A57">LNAB5A57</option>
                  <option value="LNAB5A58">LNAB5A58</option>
                </select>
              </div>
              <div class="col-md-4 my-auto">
                <button class="btn btn-sm btn-primary me-2">
                  <i class="ti ti-search"></i> Search
                </button>
              </div>
            </div>

            <div class="row ">
              <div class="col-md-6 col-lg-4">
                <div class="mb-3">
                  <label for="input-label" class="form-label">Customer Name</label>
                  <input type="text" class="form-control" value="Customer Name">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="mb-3">
                  <label for="input-label" class="form-label">Case Type</label>
                  <input type="text" class="form-control" placeholder="Case Type" value="Case Type">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="mb-3">
                  <label for="input-label" class="form-label">Sub Case Type</label>
                  <input type="text" class="form-control" placeholder="Sub Case Type" value="Sub Case Type">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="mb-3">
                  <label for="formFileMultiple" class="form-label">Attachment</label>
                  <input class="form-control" type="file" id="formFileMultiple" multiple="">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="mb-3">
                  <label for="input-label" class="form-label">Description</label>
                  <textarea name="" class="form-control" placeholder="Description" id=""></textarea>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-end gap-1 mt-3">
              <button class="btn btn-primary">Save</button>
            </div>
          </div>

          <div class="tab-pane" id="solid-tab6">
            <div class="row">
              <div class="col-md-4">
                <div class="mb-3">
                  <label class="form-label">Legal Type</label>
                  <select class="form-select" id="case-type">
                    <option value="">Select</option>
                    <option value="Notice">Notice</option>
                    <option value="Case">Case</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4 mb-3 sub-case">
                <label class="form-label">Loan No</label>
                <select class="form-select" id="case-type">
                  <option value="">Select Loan No</option>
                  <option value="LNAB5A57">LNAB5A57</option>
                  <option value="LNAB5A58">LNAB5A58</option>
                </select>
              </div>
              <div class="col-md-4 my-auto">
                <button class="btn btn-sm btn-primary me-2">
                  <i class="ti ti-search"></i> Search
                </button>
              </div>
            </div>

            <div class="row ">
              <div class="col-md-6 col-lg-4">
                <div class="mb-3">
                  <label for="input-label" class="form-label">Customer Name</label>
                  <input type="text" class="form-control" value="Customer Name">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="mb-3">
                  <label for="input-label" class="form-label">Case Type</label>
                  <input type="text" class="form-control" placeholder="Case Type" value="Case Type">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="mb-3">
                  <label for="input-label" class="form-label">Sub Case Type</label>
                  <input type="text" class="form-control" placeholder="Sub Case Type" value="Sub Case Type">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="mb-3">
                  <label for="formFileMultiple" class="form-label">Attachment</label>
                  <input class="form-control" type="file" id="formFileMultiple" multiple="">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="mb-3">
                  <label for="input-label" class="form-label">Description</label>
                  <textarea name="" class="form-control" placeholder="Description" id=""></textarea>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-end gap-1 mt-3">
              <button class="btn btn-primary">Save</button>
            </div>
          </div>

          <div class="tab-pane" id="solid-tab7">
            <div class="row">
              <div class="col-md-4">
                <div class="mb-3">
                  <label class="form-label">Legal Type</label>
                  <select class="form-select" id="case-type">
                    <option value="">Select</option>
                    <option value="Notice">Notice</option>
                    <option value="Case">Case</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4 mb-3 sub-case">
                <label class="form-label">Loan No</label>
                <select class="form-select" id="case-type">
                  <option value="">Select Loan No</option>
                  <option value="LNAB5A57">LNAB5A57</option>
                  <option value="LNAB5A58">LNAB5A58</option>
                </select>
              </div>
              <div class="col-md-4 my-auto">
                <button class="btn btn-sm btn-primary me-2">
                  <i class="ti ti-search"></i> Search
                </button>
              </div>
            </div>

            <div class="row ">
              <div class="col-md-6 col-lg-4">
                <label class="form-label">Defreeze</label>
                <div class="mt-1">
                  <div class="form-check form-check-inline">
                    <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                    <label class="form-check-label" for="customRadio2">YES</label>
                  </div>
                  <div class="form-check mb-1 form-check-inline">
                    <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                    <label class="form-check-label" for="customRadio1">NO</label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="mb-3">
                  <label class="form-label">Defreeze Date</label>
                  <input class="form-control" type="date" >
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="mb-3">
                  <label for="input-label" class="form-label">Description</label>
                  <textarea name="" class="form-control" placeholder="Description" id=""></textarea>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-end gap-1 mt-3">
              <button class="btn btn-primary">Save</button>
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





<?php include 'footer.php'; ?>
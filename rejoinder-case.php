<?php include 'header.php'; ?>


<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Rejoinder Case</h5>
        <div>
          <a class="btn btn-primary btn-sm" href="rejoinder-notice-creation.php">
            <i class="ti ti-plus"></i>
          </a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-nowrap datatable table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Case Type</th>
                <th>SubCase Type</th>
                <th>Loan No</th>
                <th>Customer Name</th>

                <th>Reply Description</th>
                <th>Speed Post Date</th>
                <th>Speed Post Number</th>
                <th>Description</th>
                <th>Attachment</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>By Case</td>
                <td>Section 138 of NI Act</td>
                <td>LNAB5A57</td>
                <td>Ramesh Kumar</td>

                <td>Reply Description 1</td>
                <td>2026-02-10</td>
                <td>SP457896321IN</td>
                <td>Borrower submitted objection regarding outstanding amount.</td>

                <td>
                    <a href="#" class="btn btn-sm btn-outline-primary">
                        <i class="ti ti-paperclip"></i>
                    </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- end card-body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>
<!-- end row -->

<!-- Creation Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="creationModalLabel">Rejoinder Notice Creation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">

        <div class="row">
          <div class="col-md-4">
                <label class="form-label">Case Type</label>
                <select class="form-select" id="caseType_create">
                    <option value="">Select</option>
                    <option value="Case">Litigation By Case</option>
                    <option value="Arbitration Case">Litigation Against Case</option>
                    <option value="Sarfaesi Case">Litigation Case EP</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Sub Case Type</label>

                <select class="form-select subcase-create" data-type="default">
                    <option value="">Select</option>
                </select>

                <select class="form-select subcase-create d-none" data-type="Case">
                    <option value="">Select</option>
                    <option value="Section 138">Section 138</option>
                    <option value="Section 25">Section 25</option>
                    <option value="Arbitration Section 21">Arbitration Section 21</option>
                    <option value="Arbitration Section 9">Arbitration Section 9</option>
                    <option value="Civil Suit">Civil Suit</option>
                    <option value="Summary Suit">Summary Suit</option>
                    <option value="Sarfaesi Case">Sarfaesi Case</option>
                    <option value="Sec 19 of DRT">Sec 19 of DRT</option>
                    <option value="Writ Petition u/s 226">Writ Petition u/s 226</option>
                    <option value="Sarfasei Act">Sarfasei Act</option>
                    <option value="Criminal Case-200CrPc">Criminal Case-200CrPc</option>
                    <option value="Cr-Return Of Property">Cr-Return Of Property</option>
                    <option value="Cr- Bail/Anticipartory bail">Cr- Bail/Anticipartory bail</option>
                    <option value="Cr-Se 156(3) Order">Cr-Se 156(3) Order</option>
                </select>

                <select class="form-select subcase-create d-none" data-type="Arbitration Case">
                    <option value="">Select</option>
                    <option value="Civil case u/s O 7 R1">Civil case u/s O 7 R1</option>
                    <option value="Sec 11 of Arbitration Act">Sec 11 of Arbitration Act</option>
                    <option value="Sec 34 of Arbitration Act">Sec 34 of Arbitration Act</option>
                    <option value="Insolvency Petition">Insolvency Petition</option>
                    <option value="Sec 35 of Consumer Act">Sec 35 of Consumer Act</option>
                    <option value="Sec 41 of Appeal to Consumer Court">Sec 41 of Appeal to Consumer Court</option>
                    <option value="Sec 17 of DRT (SA)">Sec 17 of DRT (SA)</option>
                    <option value="Sec 20 of DRT ( Appeal)">Sec 20 of DRT ( Appeal)</option>
                    <option value="Writ Petition-Respondent">Writ Petition-Respondent</option>
                </select>

                <select class="form-select subcase-create d-none" data-type="Sarfaesi Case">
                    <option value="">Select</option>
                    <option value="Arbitration Award-EP">Arbitration Award-EP</option>
                    <option value="Civil Suit- Decree">Civil Suit- Decree</option>
                    <option value="Lok adalt-Order">Lok adalt-Order</option>
                    <option value="DRT-Recovery">DRT-Recovery</option>
                </select>
            </div>
          <div class="col-md-4 mb-3 sub-case" >
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

        <hr>

        <div class="row ">
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Customer Name</label>
              <input type="text" class="form-control" value="Customer Name">
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Reply Description</label>
              <select class="form-select" id="case-type">
                <option value="">Select Reply Description</option>
                <option value="Reply Description 1">Reply Description 1</option>
                <option value="Reply Description 2">Reply Description 2</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Speed Post Date</label>
              <input class="form-control" type="date">
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Speed Post Number</label>
              <input class="form-control" type="text" placeholder="Speed Post No">
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Description</label>
              <textarea name="" class="form-control" placeholder="Description" id=""></textarea>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Attachment</label>
              <input class="form-control" type="file" multiple="">
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>




<?php include 'footer.php'; ?>
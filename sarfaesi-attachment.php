<?php include 'header.php'; ?>

<style>
    #tbl_postal_create td {
        background-color: #ef1e1e !important;
        color: #fff;
    }

    #noticeTable tbody tr.row-red,
    #noticeTable tbody tr.row-red td {
        background-color: #ef1e1e !important;
        color: #ffffff !important;
    }
</style>

<div class="card border-0 rounded-0">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Sarfaesi Attachment</h5>
    </div>
    <div class="card-body">
        <div class="row align-items-center mb-3 g-3">
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
            <div class="col-md-6 mt-4 col-lg-4">
                <button class="btn btn-sm btn-primary me-2">
                    <i class="ti ti-search"></i> Search
                </button>
            </div>

        </div>

        <div class="row align-items-center mb-3 g-3">
            <div class="col-md-6 col-lg-4">
                <label class="form-label">Legal Type</label>
                <select id="legalType" class="form-select">
                    <option value="">Select</option>
                    <option value="Notice">Notice</option>
                    <option value="Postal">Postal</option>
                </select>
            </div>
            <div class="col-md-6 col-lg-4">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="col-md-6 col-lg-4">
                <label class="form-label">Notice Type</label>
                <select id="noticeType" class="form-select">
                    <option value="">Select</option>
                    <option value="Pre Sarfaesi">Pre Sarfaesi</option>
                    <option value="Sec 13(2)">Sec 13(2)</option>
                    <option value="Sec 13(3)">Sec 13(3)</option>
                    <option value="Sec 13(3A)">Sec 13(3A)</option>
                    <option value="Sec 13(4)">Sec 13(4)</option>
                </select>
            </div>
            
            <div class="col-md-6 col-lg-4">
                    <label class="form-label">Address</label>
                    <textarea name="" class="form-control" placeholder="Address" id=""></textarea>
            </div>

            <div class="col-md-6 col-lg-4">
                <label class="form-label">Attachment Type</label>
                <select id="attachmentType" class="form-select">
                    <option value="">Select</option>
                    <option value="Scanner Copy">Scanner Copy</option>
                    <option value="Notice Acknowledgment">Notice Acknowledgment</option>
                    <option value="Paper Publication">Paper Publication</option>
                </select>
            </div>

        </div>

        <div class="table-responsive">
            <table id="noticeTable" class="table table-nowrap datatable table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead class="table-light">
                    <tr>
                        <th>S.No</th>
                        <th>Legal Type</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Notice Type</th>
                        <th>Attachment Type</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="tbl_postal_create">
                        <td>1</td>
                        <td>Notice</td>
                        <td>Salman</td>
                        <td>Nungambakkam</td>
                        <td>Pre Sarfaesi</td>
                        <td>Scanner Copy</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="ti ti-paperclip"></i>
                            </a>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Notice</td>
                        <td>Salman</td>
                        <td>Nungambakkam</td>
                        <td>Sec (2)</td>
                        <td>Paper Publication</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="ti ti-download"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-success">
                                <i class="ti ti-eye"></i>
                            </a>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary">
                                <i class="ti ti-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-warning">
                                <i class="ti ti-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Notice</td>
                        <td>Salman</td>
                        <td>Nungambakkam</td>
                        <td>Sec 13(3)</td>
                        <td>Notice Acknowledgment</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="ti ti-download"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-success">
                                <i class="ti ti-eye"></i>
                            </a>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary">
                                <i class="ti ti-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-warning">
                                <i class="ti ti-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

        <!-- <div class="row g-3 mt-3">
            <div class="col-md-6 col-lg-4">
                <label class="form-label">Type</label>
                <select class="form-control select2" data-toggle="select2">
                    <option>Select</option>
                    <optgroup>
                        <option value="Applicant">Applicant</option>
                        <option value="Co-Applicant">CO-Applicant</option>
                    </optgroup>
                </select>
            </div>
            <div class="col-md-6 col-lg-4">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="col-md-6 col-lg-4">
                <label class="form-label">Address</label>
                <textarea name="" class="form-control" placeholder="Description" id=""></textarea>
            </div>
            <div class="col-md-6 col-lg-4">
                <label class="form-label">Upload</label>
                <input type="file" class="form-control">
            </div>
            <div class="col-md-6 col-lg-4 mt-5">
               <a href="#" class="btn btn-primary"><i class="ti ti-plus"></i> </a>
            </div>
        </div> -->

    </div>
</div>

<script src="assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>

<!-- <script>
$(document).ready(function () {

    var table = $('#noticeTable').DataTable();

    $('#addRow').on('click', function () {

        var noticeType = $('#noticeType').val();
        var attachmentType = $('#attachmentType').val();
        var fileInput = document.getElementById('attachmentFile');

        if (noticeType === '' || attachmentType === '') {
            alert("Please select Notice Type and Attachment Type");
            return;
        }

        if (fileInput.files.length === 0) {
            alert("Please upload attachment");
            return;
        }

        var file = fileInput.files[0];
        var fileURL = URL.createObjectURL(file); // temporary URL

        table.row.add([
            table.rows().count() + 1,
            noticeType,
            attachmentType,
            '<a href="' + fileURL + '" target="_blank" class="btn btn-sm btn-outline-primary">' +
            '<i class="ti ti-paperclip"></i> '+
            '</a>',
            '<button class="btn btn-sm btn-primary"><i class="ti ti-edit"></i></button> ' +
            '<button class="btn btn-sm btn-warning deleteRow"><i class="ti ti-trash"></i></button>'
        ]).draw(false);

        // Clear fields after add
        $('#noticeType').val('').trigger('change');
        $('#attachmentType').val('').trigger('change');
        $('#attachmentFile').val('');

    });

    // Delete row
    $('#noticeTable tbody').on('click', '.deleteRow', function () {
        table.row($(this).parents('tr')).remove().draw();
    });

});
</script> -->

<script>
    $(document).ready(function () {

    var table = $('#noticeTable').DataTable();
    var serialNo = table.rows().count() + 1;

    function addRow() {

        var legalType = $('#legalType').val();
        var name = $('input[placeholder="Name"]').val();
        var address = $('textarea').val();
        var noticeType = $('#noticeType').val();
        var attachmentType = $('#attachmentType').val();

        // CONDITIONS
        if (
            (noticeType === "Pre Sarfaesi" && attachmentType === "Scanner Copy") ||
            (noticeType === "Sec 13(2)" && attachmentType === "Paper Publication") ||
            (noticeType === "Sec 13(3)" && attachmentType === "Notice Acknowledgment")
        ) {

            var newRow = table.row.add([
                serialNo,
                legalType,
                name,
                address,
                noticeType,
                attachmentType,
                '<a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal"><i class="ti ti-paperclip"></i></a>',
                ''
            ]).draw(false).node();

            $(newRow).addClass('row-red');

            serialNo++;

            // Reset fields
            $('#legalType').val('').trigger('change');
            $('#noticeType').val('').trigger('change');
            $('#attachmentType').val('').trigger('change');
            $('input[placeholder="Name"]').val('');
            $('textarea').val('');
        }
    }

    // Trigger on dropdown change
    $('#noticeType, #attachmentType').on('change', function () {
        addRow();
    });

    // Delete row
    $('#noticeTable tbody').on('click', '.btn-delete', function () {
        table.row($(this).parents('tr')).remove().draw();
    });

});

</script>


<!-- edit Modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="editModalLabel">Document</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Upload Document</label>
            <input type="file" class="form-control" autocomplete="off">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>
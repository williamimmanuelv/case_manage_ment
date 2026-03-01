<?php include 'header.php'; ?>
<style>
    .nav-tabs .nav-link:hover {
        color: #022b50;
    }

    .btn-secondary {
        background-color: #022b50;
        color: #fff;
        border-color: unset;
    }

    #caseTabs a.nav-link.disabled-like {
        pointer-events: none;
        opacity: 0.55;
        cursor: default;
    }

    .nav-tabs>li>a {
        background-color: #eeeeee;
    }
</style>


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Sarfaesi Postal Creation</h5>
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
                        <div id="solid-tab14">
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
                                    <select class="form-select">
                                        <option value="Pre Sarfaesi">Pre Sarfaesi</option>
                                        <option value="Sec 13(2)">Sec 13(2)</option>
                                        <option value="Sec 13(3)">Sec 13(3)</option>
                                        <option value="Sec 13(3A)">Sec 13(3A)</option>
                                        <option value="Sec 13(14)">Sec 13(4)</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mt-4 col-lg-4">
                                    <button class="btn btn-sm btn-primary me-2">
                                        <i class="ti ti-search"></i> Search
                                    </button>
                                </div>

                            </div>

                            <hr>

                            <div class="table-responsive" style="height: 300px; border: 1px solid #8080803b;">
                                <table id="tbl_postal_create" class="display table table-bordered"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Sender</th>
                                            <th>Sender Name</th>
                                            <th>Address</th>
                                            <th>Dispatch Date</th>
                                            <th>Speed Post No</th>
                                            <th>Remarks</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>

                                </table>
                            </div>

                            <div class="row align-items-center mt-3 g-4">

                                <div class="col-md-6 col-lg-4">
                                    <label for="input-label" class="form-label">Sender</label>
                                    <select class="form-select">
                                        <option value="">Select Sender</option>
                                        <option value="">Customer</option>
                                        <option value="">Co-Applicant</option>
                                    </select>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <label class="form-label">Sender Name</label>
                                    <select class="form-select">
                                        <option value="Rahul">Rahul</option>
                                        <option value="Suresh">Suresh</option>
                                    </select>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <label for="input-label" class="form-label">Address</label>
                                    <textarea name="" class="form-control" placeholder="Address" id=""></textarea>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <label for="input-label" class="form-label">Dispatch Date</label>
                                    <input type="date" class="form-control" />
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <label for="input-label" class="form-label">Speed Post No</label>
                                    <input type="text" class="form-control" placeholder="Speed Post No" />
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <label for="input-label" class="form-label">Remarks</label>
                                    <textarea name="" class="form-control" id="" placeholder="Remarks"></textarea>
                                </div>

                                <div class="text-end mb-3">
                                    <a href="#" class="btn btn-success"><i class="ti ti-plus"></i> </a>
                                </div>

                            </div>
                            <!-- <div class="row g-4">

                                        <div class="col-md-6 col-lg-4 casebox Demand-13 d-none">
                                            <label class="form-label">Notice Amount</label>
                                            <input type="text" class="form-control" placeholder="Enter Notice Amount">
                                        </div>
                                        <div class="col-md-6 col-lg-4 casebox Demand-13 d-none">
                                            <label class="form-label">Notice Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-lg-4 casebox Demand-13 d-none">
                                            <label class="form-label">Attachment</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-lg-4 casebox Demand-13 d-none">
                                            <label for="input-label" class="form-label">Address</label>
                                            <select class="form-select" id="example-select">
                                                <option>Applicant</option>
                                                <option>Co Applicant</option>
                                                <option>Guarantor</option>
                                                <option>Co Guarantor</option>
                                            </select>
                                        </div>

                                        <h5 class="casebox Possession-13 d-none">Paper Publication 1</h5>

                                        <div class="col-md-6 col-lg-4 casebox Possession-13 d-none">
                                            <label class="form-label">Paper Publication 1 – Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-lg-4 casebox Possession-13 d-none">
                                            <label class="form-label">Vernacular Language Paper</label>
                                            <input type="text" class="form-control" placeholder="Language">
                                        </div>
                                        <div class="col-md-6 col-lg-4 casebox Possession-13 d-none">
                                            <label class="form-label">Paper Publication 2 – Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-lg-4 casebox Possession-13 d-none">
                                            <label class="form-label">English Language Paper</label>
                                            <input type="text" class="form-control" placeholder="Language">
                                        </div>
                                        <h5 class="casebox Possession-13 d-none">Symbolic Possession</h5>

                                        <div class="col-md-6 col-lg-4 casebox Possession-13 d-none">
                                            <label class="form-label">Symbolic Possession Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-lg-4 casebox Possession-13 d-none">
                                            <label class="form-label">Possession Notice Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-lg-4 casebox Possession-13 d-none">
                                            <label class="form-label">Attachment</label>
                                            <input type="file" class="form-control">
                                        </div>

                                        <h5 class="casebox Possession-13 d-none">Paper Publication 2</h5>

                                        <div class="col-md-6 col-lg-4 casebox Possession-13 d-none">
                                            <label class="form-label">Paper Publication 1 – Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-lg-4 casebox Possession-13 d-none">
                                            <label class="form-label">Vernacular Language Paper</label>
                                            <input type="text" class="form-control" placeholder="Language">
                                        </div>
                                        <div class="col-md-6 col-lg-4 casebox Possession-13 d-none">
                                            <label class="form-label">Paper Publication 2 – Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-lg-4 casebox Possession-13 d-none">
                                            <label class="form-label">English Language Paper</label>
                                            <input type="text" class="form-control" placeholder="Language">
                                        </div>

                                    </div> -->
                            <div class="row mt-3">
                                <div class="col-md-12 text-end">
                                    <a href="" class="btn btn-primary">Create</a>
                                    <a href="" class="btn btn-cancle">Cancle</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Bulk-Upload -->
                    <div id="unameTab" class="tab-pane">
                        <div class="form-group">
                            <div class="text-end">
                                <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#creationModal">
                                    <i class="ti ti-plus"></i>
                                </button>
                                <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                                    data-bs-target="#editModal">
                                    <i class="ti ti-download"></i>
                                </button>
                            </div>


                            <div class="table-responsive">
                                <table class="table table-nowrap datatable table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Date</th>
                                            <th>Age</th>
                                            <th>Sender Type</th>
                                            <th>Sender Name</th>
                                            <th>Address</th>
                                            <th>Notice Type</th>
                                            <th>Speed Post No</th>
                                            <th>Delivered Status</th>
                                            <th>Delivered Date</th>
                                            <th>Delivered Attachment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>28-10-2025</td>
                                            <td>20 days</td>
                                            <td>Customer</td>
                                            <td>Sender 1</td>
                                            <td>Chennai</td>
                                            <td>Speed Post</td>
                                            <td>Post43221</td>
                                            <td>Delivered</td>
                                            <td>28-10-2025</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary me-2">
                                                    <i class="ti ti-download"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Upload Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="creationModalLabel">Postal Upload</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Upload Postal</label>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="editModalLabel">Postal Download</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">

                        <div class="col-md-12 mt-3">

                            <div class="mb-3 d-flex align-items-center justify-content-center">
                                <p class="mb-0">Download Postal</p>
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




<script>
    document.addEventListener('DOMContentLoaded', function () {
        const subCaseSelects = document.querySelectorAll('#notice-case');

        subCaseSelects.forEach(select => {
            select.addEventListener('change', function () {
                const value = this.value;

                document.querySelectorAll('.casebox').forEach(el => el.classList.add('d-none'));
                document.querySelectorAll('.caseField').forEach(el => el.classList.add('d-none'));

                const extraCol = document.querySelector('.extra-col');
                if (extraCol) extraCol.classList.add('d-none');

                if (value) {

                    document.querySelectorAll('.' + value).forEach(el => el.classList.remove('d-none'));

                    const hasCasebox = document.querySelectorAll('.casebox.' + value).length > 0;
                    if (!hasCasebox) {
                        document.querySelectorAll('.caseField.' + value).forEach(el => el.classList.remove('d-none'));
                    }

                    const visibleBoxes = document.querySelectorAll('.' + value + ':not(.d-none)');
                    if (visibleBoxes.length > 0 && extraCol) {
                        extraCol.classList.remove('d-none');
                    }
                }
            });
        });
    });
</script>

<?php include 'footer.php'; ?>
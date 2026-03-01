<?php include 'header.php'; ?>

<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
    <div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Master</a></li>
                <li class="breadcrumb-item active">
                    Act d
                </li>
            </ol>
        </nav>
    </div>

</div> -->


<!-- start row -->
<div class="row">
<!-- s -->
    <div class="tab-content ps-2" id="v-pills-tabContent">
        <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title">Act Report</h5>

                        <div>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas"
                                data-bs-target="#addProduct">
                                <i class="ti ti-plus me-1"></i> Add
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-bordered mb-4" id="actTabs" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                                    type="button">
                                    All
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="enable-tab" data-bs-toggle="tab" data-bs-target="#enable"
                                    type="button">
                                    Enable
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="disable-tab" data-bs-toggle="tab" data-bs-target="#disable"
                                    type="button">
                                    Disable
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <!-- All -->
                            <div class="tab-pane fade show active" id="all">
                                <div class="table-responsive">
                                    <table class="table table-nowrap datatable table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Act Name</th>
                                                <th>Act File</th>
                                                <th>Create Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Civil act</td>
                                                <td>3_Aadharcard.docx</td>
                                                <td>18-12-2025</td>
                                                <td>Enable</td>
                                                <td>

                                                    <div class="d-flex gap-2 justify-content-center">
                                                        <button class="btn btn-sm btn-primary "
                                                            style="color: #cda85d !important; background-color: transparent;"
                                                            data-bs-toggle="offcanvas" data-bs-target="#editProduct">
                                                            <i class="ti ti-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-danger"
                                                            style="color: red; background-color: transparent;">
                                                            <i class="ti ti-trash"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Enable -->
                            <div class="tab-pane fade" id="enable">
                                <div class="table-responsive">
                                    <table class="table table-nowrap datatable table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Act Name</th>
                                                <th>Act File</th>
                                                <th>Create Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Civil act</td>
                                                <td>3_Aadharcard.docx</td>
                                                <td>18-12-2025</td>
                                                <td>Enable</td>
                                                <td>

                                                    <div class="d-flex gap-2 justify-content-center">
                                                        <button class="btn btn-sm btn-primary "
                                                            style="color: #cda85d !important; background-color: transparent;"
                                                            data-bs-toggle="offcanvas" data-bs-target="#editProduct">
                                                            <i class="ti ti-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-danger"
                                                            style="color: red; background-color: transparent;">
                                                            <i class="ti ti-trash"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Disable -->
                            <div class="tab-pane fade" id="disable">
                                <div class="table-responsive">
                                    <table class="table table-nowrap datatable table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Act Name</th>
                                                <th>Act File</th>
                                                <th>Create Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Civil act</td>
                                                <td>3_Aadharcard.docx</td>
                                                <td>18-12-2025</td>
                                                <td>disable</td>
                                                <td>

                                                    <div class="d-flex gap-2 justify-content-center">
                                                        <button class="btn btn-sm btn-primary "
                                                            style="color: #cda85d !important; background-color: transparent;"
                                                            data-bs-toggle="offcanvas" data-bs-target="#editProduct">
                                                            <i class="ti ti-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-danger"
                                                            style="color: red; background-color: transparent;">
                                                            <i class="ti ti-trash"></i>
                                                        </button>
                                                    </div>
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
            </div>

            <!-- end card -->
        </div>
    </div>





    <!-- end col -->
</div>
<!-- end row -->



<!-- Edit Product -->
<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="editProduct" data-bs-backdrop="static"
    data-bs-keyboard="false">
    <div class="offcanvas-header border-bottom">
        <h5 class="fw-semibold">Edit Act</h5>
        <button type="button"
            class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
            data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ti ti-x"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <form>

            <div class="mb-3">
                <label class="form-label">Act Name</label>
                <input type="text" class="form-control" placeholder="Act" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Act File</label>
                <input type="file" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select" id="example-select">
                    <option>Enable</option>
                    <option>Disable</option>
                </select>
            </div>
        </form>
        <div class="d-flex gap-2 align-items-center justify-content-end">
            <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Save</a>
        </div>
    </div>
</div>
<!-- /Edit Product -->
<!-- Add Product -->
<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="addProduct" data-bs-backdrop="static"
    data-bs-keyboard="false">
    <div class="offcanvas-header border-bottom">
        <h5 class="fw-semibold">Add Act</h5>
        <button type="button"
            class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
            data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ti ti-x"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <form>

            <div class="mb-3">
                <label class="form-label">Act Name</label>
                <input type="text" class="form-control" placeholder="Act" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Act File</label>
                <input type="file" class="form-control">
            </div>


        </form>
        <div class="d-flex gap-2 align-items-center justify-content-end">
            <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Save</a>
        </div>
    </div>
</div>
<!-- /Add Product -->


<!-- Creation Modal -->

<div class="modal fade" id="creationModal" tabindex="-1" aria-labelledby="creationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="creationModalLabel">Act Creation</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="mb-3">
                        <label class="form-label">Act Name</label>
                        <input type="text" class="form-control" placeholder="Act" autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Act File</label>
                        <input type="file" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" id="example-select">
                            <option>Enable</option>
                            <option>Disable</option>
                        </select>
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
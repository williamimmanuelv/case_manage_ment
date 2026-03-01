<?php include 'header.php'; ?>

<!-- <div class="tts-content">
    <h4>Notice Details</h4>
    <p>This is the legal notice issued under section 138...</p>
</div> -->

<!-- start row -->
<!-- <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
  <div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Master</a></li>
        <li class="breadcrumb-item active">
          Country
        </li>
      </ol>
    </nav>
  </div>

</div> -->
<div class="row">



    <!-- All  Table  start-->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">Bank</h5>

                <div>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#addProduct">
                        <i class="ti ti-plus me-1"></i> Add
                    </button>
                </div>
            </div>


            <div class="card-body">
                <ul class="nav nav-tabs nav-bordered mb-4">
                    <li class="nav-item">
                        <a href="#v-pills-home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            <span class="d-md-inline-block">All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#v-pills-profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link ">
                            <span class="d-md-inline-block">Enable</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#v-pills-messages" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-md-inline-block">Disable</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content " id="v-pills-tabContent">
                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">

                        <div class="table-responsive">
                            <table class="table table-nowrap datatable table-bordered">
                                <thead>
                                    <tr>

                                        <th>S.No</th>
                                        <th>Bank Name </th>
                                        <th>Logo</th>
                                        <th>Bank Address</th>
                                        <th>Status</th>
                                        <th>Manager Name</th>
                                        <th>Create Date</th>
                                        <th class="no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>1</td>
                                        <td>Indian bank</td>
                                        <td><span class="avatar ">
                                                <img src="assets/img/profiles/avatar-01.jpg" alt="img">
                                            </span></td>
                                        <td>Chennai</td>
                                        <td>Mark</td>
                                        <td>Enable</td>
                                        <td>18-12-2025</td>
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
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">


                        <div class="table-responsive">
                            <table class="table table-nowrap datatable table-bordered">
                                <thead>
                                    <tr>

                                        <th>S.No</th>
                                        <th>Bank Name </th>
                                        <th>Logo</th>
                                        <th>Bank Address</th>
                                        <th>Status</th>
                                        <th>Manager Name</th>
                                        <th>Create Date</th>
                                        <th class="no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>1</td>
                                        <td>Indian bank</td>
                                        <td><span class="avatar ">
                                                <img src="assets/img/profiles/avatar-01.jpg" alt="img">
                                            </span></td>
                                        <td>Chennai</td>
                                        <td>Enable</td>
                                        <td>Mark</td>
                                        <td>18-12-2025</td>
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
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <div class="table-responsive">
                            <table class="table table-nowrap datatable table-bordered">
                                <thead>
                                    <tr>

                                        <th>S.No</th>
                                        <th>Bank Name </th>
                                        <th>Logo</th>
                                        <th>Bank Address</th>
                                        <th>Status</th>
                                        <th>Manager Name</th>
                                        <th>Create Date</th>
                                        <th class="no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>1</td>
                                        <td>Indian bank</td>
                                        <td><span class="avatar ">
                                                <img src="assets/img/profiles/avatar-01.jpg" alt="img">
                                            </span></td>
                                        <td>Chennai</td>
                                        <td>Enable</td>
                                        <td>Mark</td>
                                        <td>18-12-2025</td>
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
            </div>
        </div>
    </div>




    <!-- All  Table end -->

    <!-- Enable Table Start -->

    <!-- end row -->


    <!-- Creation Modal -->

    <!-- Edit Product -->
    <div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="editProduct" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="offcanvas-header border-bottom">
            <h5 class="fw-semibold">Edit Bank</h5>
            <button type="button"
                class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
                data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="ti ti-x"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <form action="">
                <div>
                    <!-- Basic Info -->
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Bank Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Manager Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class=" col-form-label">Logo <span style="color:red;">*</span></label>
                                    <input type="file" class="form-control" accept="image/*">
                                </div>
                            </div>
                            <div class=" col-md-12">
                                <div class="mb-3">
                                    <label class="col-form-label">Bank Address</label>
                                    <textarea class="form-control" placeholder="Remarks"></textarea>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Status <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Enable</option>
                                        <option>Disable</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Basic Info -->

            </form>
            <div class="d-flex  gap-2 align-items-center justify-content-end">
                <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn"
                    data-bs-dismiss="offcanvas">Cancel</a>
                <a class="btn btn-primary btn-sm">Save</a>
            </div>
        </div>

    </div>
</div>
<!-- /Edit Product -->
<!-- Add Product -->
<div class="offcanvas custom-offcanvas offcanvas-end " tabindex="-1" id="addProduct" data-bs-backdrop="static"
    data-bs-keyboard="false">
    <div class="offcanvas-header border-bottom">
        <h5 class="fw-semibold">Add Bank</h5>
        <button type="button"
            class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
            data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ti ti-x"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <form action="">
            <div>
                <!-- Basic Info -->
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Bank Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Manager Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class=" col-form-label">Logo <span style="color:red;">*</span></label>
                                <input type="file" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <div class=" col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Bank Address</label>
                                <textarea class="form-control" placeholder="Remarks"></textarea>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- /Basic Info -->

        </form>
        <div class="d-flex gap-2 align-items-center justify-content-end">
            <a href="#" class="btn btn-sm text-dark btn-outline-danger cancelBtn" data-bs-dismiss="offcanvas">Cancel</a>
            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Save</a>
        </div>
    </div>
</div>
<!-- /Add Product -->

<!-- edit Modal -->



<!-- <script>
if(window.location.pathname !== "/login.php"){
    var s = document.createElement("script");
    s.src="https://unpkg.com/ttsreader-plugin/main.js";
    s.defer=true;
    document.body.appendChild(s);
}
</script>

<script src="https://unpkg.com/ttsreader-plugin/main.js" defer></script> -->


<?php include 'footer.php'; ?>
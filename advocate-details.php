<?php include 'header.php'; ?>

<style>
    /* body {
        background-color: #f5f7fb;
    } */

    .profile-pic {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        object-fit: cover;
    }

    .card-section {
        background: #fff;
        border-radius: 12px;
        padding: 22px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.07);
        margin-bottom: 20px;
    }

    .label-title {
        font-size: 12px;
        font-weight: 600;
        color: #6c87a3;
    }

    .value-text {
        font-size: 16px;
        font-weight: 600;
        color: #0d1c2b;
    }

    .btn-danger {
        background-color: #ff4d4d !important;
        border: none;
    }

    .btn-primary {
        background-color: #002a5c !important;
        border: none;
    }

    a.file-link {
        text-decoration: none;
        color: #0d6efd;
        font-size: 15px;
    }
</style>

<!-- start row -->
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h4 class="fw-bold">Advocate Details</h4>
    </div>

    <div class="row g-4">
        <!-- Left profile -->
        <div class="col-md-3">
            <div class="card-section text-center">
                <img src="assets/img/dummy-man.png" class="profile-pic mb-3" />
                <h6>Role & Type</h6>
                <p>ROLE</p>
                <h3 class="value-text mb-2">Advocate</h3>
                <h6 class="label-title">TYPE</h6>
                <h3 class="value-text">Individual</h3>
            </div>
        </div>

        <!-- Right sections -->
        <div class="col-md-9">
            <!-- Contact Profile -->
            <div class="card-section">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="label-title">NAME</h6>
                        <h3 class="value-text mb-3">Rokith</h3>
                        <h6 class="label-title">MOBILE</h6>
                        <h3 class="value-text">+91 7335423210</h3>
                    </div>
                    <div class="col-md-6">
                        <h6 class="label-title">TYPE</h6>
                        <h3 class="value-text mb-3">Individual</h3>
                        <h6 class="label-title">GENDER</h6>
                        <h3 class="value-text">Male</h3>
                    </div>
                </div>
            </div>

            <!-- Professional Details -->
            <div class="card-section">
                <div class="row">
                    <div class="col-md-3">
                        <h6 class="label-title">BAR COUNCIL NO</h6>
                        <h3 class="value-text">MAH123456</h3>
                    </div>
                    <div class="col-md-3">
                        <h6 class="label-title">EXPERIENCE</h6>
                        <h3 class="value-text">5 Years</h3>
                    </div>
                    <div class="col-md-3">
                        <h6 class="label-title">PRACTICING COURT</h6>
                        <h3 class="value-text">Chennai High Court</h3>
                    </div>
                    <div class="col-md-3">
                        <h6 class="label-title">SPECIALIZATION</h6>
                        <h3 class="value-text">Criminal Law</h3>
                    </div>
                </div>
            </div>

            <!-- Account Details + Documents -->
            <div class="card-section">
                <div class="row">
                    <!-- Account -->
                    <div class="col-md-6">
                        <h5>Account Details</h5>
                        <h6 class="label-title">USERNAME</h6>
                        <h3 class="value-text mb-3">rokith</h3>
                        <h6 class="label-title">LAST LOGIN</h6>
                        <h3 class="value-text mb-3">Apr 15, 2024 10.30 AM</h3>
                        <h6 class="label-title">CREATED ON</h6>
                        <h3 class="value-text">Jan 20, 2020</h3>
                    </div>

                    <!-- Docs -->
                    <div class="col-md-6">
                        <h5>Documents Optional</h5>
                        <h6 class="label-title">ID PROOF</h6>
                        <a class="file-link mb-2 d-block">aadhar.pdf</a>
                        <h6 class="label-title">DECREE PROOF</h6>
                        <a class="file-link mb-2 d-block">law_decree.pdf</a>
                        <h6 class="label-title">OTHER DOCS</h6>
                        <a class="file-link">document.pdf</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- end row -->





<?php include 'footer.php'; ?>
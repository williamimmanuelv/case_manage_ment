<?php include 'header.php'; ?>


<style>
 .lawyer-card {
    background: #ffffff;
    border-radius: 26px;
    padding: 20px 15px;
    box-shadow: 0px 8px 40px rgba(0,0,0,0.08);
}

.lawyer-card-header{
    border-bottom: 1px solid #e2e8f0;
    padding-bottom: 15px;
}

/* Profile Image */
.profile-img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    padding: 5px;
    border: 1px solid var(--theme-color);
    object-fit: cover;
}

/* Icon Bubble */
.icon-bg {
    width: 38px;
    height: 38px;
    background: linear-gradient(135deg, #e8f0ff, #ffffff);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 2px 6px rgba(0,0,0,0.08);
    color: #5b6cff;
    font-size: 22px;
}
.whatsapp-icon {
    width: 38px;
    height: 38px;
    background: linear-gradient(135deg, #e8f0ff, #ffffff);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 2px 6px rgba(0,0,0,0.08);
    color: #25d366;
    font-size: 22px;
}
.mail-icon {
    width: 38px;
    height: 38px;
    background: linear-gradient(135deg, #e8f0ff, #ffffff);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 2px 6px rgba(0,0,0,0.08);
    color: #c10606ff;
    font-size: 22px;
}
.icon-bg:hover {
    background: linear-gradient(135deg, #e8f0ff, #ffffff);
    color: #5b6cff !important;
}
.whatsapp-icon {
    background: linear-gradient(135deg, #e8f0ff, #ffffff);
    color: #25d366 !important;
}
.mail-icon {
    background: linear-gradient(135deg, #e8f0ff, #ffffff);
    color: #c10606ff !important;
}

/* Stats Cards */
.info-box {
    background: #f3f6ff;
    border-radius: 20px;
    padding: 15px;
    text-align: left;
    box-shadow: inset 0px 0px 10px rgba(0,0,0,0.05);
}

.info-title {
    font-size: 14px;
    font-weight: 500;
    color: #6b6b6b;
    margin-bottom: 0px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.info-title i {
    font-size: 22px;
    padding: 8px;
    border-radius: 12px;
    background: #ffffff;
    box-shadow: 0px 4px 15px rgba(0,0,0,0.07);
    color: var(--theme-color);
}

.info-value {
    font-size: 16px;
    font-weight: 700;
    color: #2c2c2c;
}

/* Visit Button */
.visit-btn {
    border-radius: 14px;
    padding: 8px 16px;
    font-weight: 600;
    display: flex;
    align-items: center;
    /* gap: 6px;  */
}

/* Header Right Buttons */
.header-icon {
    width: 40px;
    height: 40px;
    background: #e6ecff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 12px;
    font-size: 20px;
    color: #4154f1;
    cursor: pointer;
}

</style>

<div class="row gy-4">

    <div class="col-md-6">
        <div class="lawyer-card">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center lawyer-card-header" >
                <h4 class="fw-bold m-0">Advocate Firm</h4>

                <div class="d-flex align-items-center gap-2">
                    <div class="header-icon">
                        <i class="ti ti-download"></i>
                    </div>

                    <a href="#" class="btn btn-primary visit-btn">
                        <i class="ti ti-eye me-1"></i> Profile
                    </a>
                </div>
            </div>

            <!-- Profile -->
            <div class="row d-flex align-items-center justify-content-between mt-3 mb-3">
                
                <div class="col-12 col-md-8 d-flex align-items-center">
                    <img src="assets/img/dummy-man.png" class="profile-img me-3">
                    <div>
                        <h5 class="fw-semibold mb-1">Advocate One</h5>
                        <p class="text-muted small m-0">
                            <i class="ti ti-map-pin"></i> Chennai, TN
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 text-end d-flex gap-2">
                    <!-- WhatsApp -->
                        <button type="button" 
                                class="btn whatsapp-icon" 
                                data-bs-toggle="tooltip" 
                                data-bs-placement="top" 
                                title="9876543210">
                            <i class="ti ti-brand-whatsapp"></i>
                        </button>

                        <!-- Phone -->
                        <button type="button" 
                                class="btn icon-bg" 
                                data-bs-toggle="tooltip" 
                                data-bs-placement="bottom" 
                                title="Call : 9876543210">
                            <i class="ti ti-phone"></i>
                        </button>

                        <!-- Email -->
                        <button type="button"
                                class="btn mail-icon" 
                                data-bs-toggle="tooltip" 
                                data-bs-placement="bottom" 
                                title="Email : demo@gmail.com">
                            <i class="ti ti-mail"></i>
                        </button>
                </div>
            </div>

            <!-- Stats -->
            <div class="row g-3 ">

                <div class="col-md-12 col-lg-6">
                    <div class="info-box d-flex align-items-center justify-content-between">
                        <div class="info-title">
                            <i class="ti ti-folder"></i>
                        </div>
                        <div class="text-end">
                            <p class="mb-0">Total Cases</p>
                            <div class="info-value">874</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="info-box d-flex align-items-center justify-content-between">
                        <div class="info-title">
                            <i class="ti ti-clipboard-data"></i>
                        </div>
                        <div class="text-end">
                            <p class="mb-0">Active Cases</p>
                           <div class="info-value">200</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="info-box d-flex align-items-center justify-content-between">
                        <div class="info-title">
                            <i class="ti ti-checklist"></i>
                        </div>
                        <div class="text-end">
                            <p class="mb-0">Closed Cases</p>
                            <div class="info-value">600</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="info-box d-flex align-items-center justify-content-between">
                        <div class="info-title">
                            <i class="ti ti-percentage-75"></i>
                        </div>
                        <div class="text-end">
                            <p class="mb-0">Success Rate</p>
                            <div class="info-value">75 %</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    
    <div class="col-md-6">
        <div class="lawyer-card">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center lawyer-card-header" >
                <h4 class="fw-bold m-0">Advocate Firm</h4>

                <div class="d-flex align-items-center gap-2">
                    <div class="header-icon">
                        <i class="ti ti-download"></i>
                    </div>

                    <a href="#" class="btn btn-primary visit-btn">
                        <i class="ti ti-eye me-1"></i> Profile
                    </a>
                </div>
            </div>

            <!-- Profile -->
            <div class="row d-flex align-items-center justify-content-between mt-3 mb-3">
                
                <div class="col-12 col-md-8 d-flex align-items-center">
                    <img src="assets/img/dummy-man.png" class="profile-img me-3">
                    <div>
                        <h5 class="fw-semibold mb-1">Advocate One</h5>
                        <p class="text-muted small m-0">
                            <i class="ti ti-map-pin"></i> Chennai, TN
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 text-end d-flex gap-2">
                    <!-- WhatsApp -->
                        <button type="button" 
                                class="btn whatsapp-icon" 
                                data-bs-toggle="tooltip" 
                                data-bs-placement="top" 
                                title="9876543210">
                            <i class="ti ti-brand-whatsapp"></i>
                        </button>

                        <!-- Phone -->
                        <button type="button" 
                                class="btn icon-bg" 
                                data-bs-toggle="tooltip" 
                                data-bs-placement="bottom" 
                                title="Call : 9876543210">
                            <i class="ti ti-phone"></i>
                        </button>

                        <!-- Email -->
                        <button type="button"
                                class="btn mail-icon" 
                                data-bs-toggle="tooltip" 
                                data-bs-placement="bottom" 
                                title="Email : demo@gmail.com">
                            <i class="ti ti-mail"></i>
                        </button>
                </div>
            </div>

            <!-- Stats -->
            <div class="row g-3 ">

                <div class="col-md-12 col-lg-6">
                    <div class="info-box d-flex align-items-center justify-content-between">
                        <div class="info-title">
                            <i class="ti ti-folder"></i>
                        </div>
                        <div class="text-end">
                            <p class="mb-0">Total Cases</p>
                            <div class="info-value">874</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="info-box d-flex align-items-center justify-content-between">
                        <div class="info-title">
                            <i class="ti ti-clipboard-data"></i>
                        </div>
                        <div class="text-end">
                            <p class="mb-0">Active Cases</p>
                           <div class="info-value">200</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="info-box d-flex align-items-center justify-content-between">
                        <div class="info-title">
                            <i class="ti ti-checklist"></i>
                        </div>
                        <div class="text-end">
                            <p class="mb-0">Closed Cases</p>
                            <div class="info-value">600</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="info-box d-flex align-items-center justify-content-between">
                        <div class="info-title">
                            <i class="ti ti-percentage-75"></i>
                        </div>
                        <div class="text-end">
                            <p class="mb-0">Success Rate</p>
                            <div class="info-value">75 %</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


</div>



<?php include 'footer.php'; ?>
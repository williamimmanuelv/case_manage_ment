<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>LexCorp 360</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.png" />

  <!-- Apple Icon -->
  <link rel="apple-touch-icon" href="assets/img/favicon.png" />

  <!-- Theme Config Js -->
  <script src="assets/js/theme-script.js" type="text/javascript"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!-- Tabler Icon CSS -->
  <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.min.css" />

  <!-- Simplebar CSS -->
  <link rel="stylesheet" href="assets/plugins/simplebar/simplebar.min.css" />

  <!-- Select2 CSS -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

  <!-- Choices CSS -->
  <link rel="stylesheet" href="assets/plugins/choices.js/public/assets/styles/choices.min.css">

  <!-- Datatable CSS -->
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css" />


  <!-- Daterangepicker CSS -->
  <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css" id="app-style" />
  <link rel="stylesheet" href="assets/css/case-search.css" id="app-style" />
  <!-- FullCalendar CSS -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
  <style>
    /* Header layout adjustments: full-width, padded, centered, 3 zones */
    .navbar-header .page-container.header-container {
      padding: 0 20px;
      height: 75px;
      background: #f3f4f6;
      display: flex;
      align-items: center;
      width: 100%;
    }

    .navbar-header .header-flex {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      gap: 20px;
    }

    .left-area .header-logo {
      height: 45px;
      object-fit: contain;
      margin-right: 20px
    }

    .left-area .mobile-btn,
    .left-area .sidenav-toggle-btn {
      margin-left: 8px
    }

    .center-area {
      flex: 1;
      display: flex;
      justify-content: center
    }

    .bank-card {
      background: #ffffff;
      padding: 8px 18px;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(22, 28, 37, 0.06);
      display: flex;
      align-items: center;
      gap: 10px
    }

    .bank-icon {
      width: 36px;
      height: 36px;
      border-radius: 6px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #eef2ff;
      color: #2b4dff
    }

    .bank-name {
      font-size: 12px;
      font-weight: 600
    }

    .bank-city {
      font-size: 10px;
      color: #888
    }

    .right-area {
      display: flex;
      align-items: center;
      gap: 18px
    }

    .welcome-badge {
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 6px 14px;
      background: #ffffff;
      font-size: 13px
    }

    .profile-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover
    }

    .profile-text .role-text {
      color: #888;
      font-size: 12px
    }

    .profile-click {
      display: flex;
      align-items: center;
      gap: 10px
    }

    .profile-wrapper .profile-hover {
      cursor: pointer;
      border-radius: 10px;
      padding: 4px 8px
    }

    .profile-wrapper .profile-hover:hover {
      background: #f8f9fa
    }

    /* keep original small header elements hidden on very small screens if needed */
    @media (max-width:576px) {
      .bank-card {
        display: none
      }

      .profile-text {
        display: none
      }
    }

    .nav-tabs.nav-bordered .nav-item .nav-link {
      justify-content: center !important;
    }
  </style>
</head>

<body>


  <!-- Begin Wrapper -->
  <div class="main-wrapper">
    <!-- Topbar Start (3-zone header: left / center / right) -->
    <header class="navbar-header">
      <div class="page-container topbar-menu header-container bg-white " style="width: 100%;
          margin-top: 15px;
          border-radius: 10px;
          border:1px solid;">
        <div class="header-flex">

          <!-- LEFT: Logo + mobile/toggle -->
          <div class="left-area d-flex align-items-center">
            <div class="bank-logo d-flex gap-3 align-items-center">
              <img src="assets/img/axis-logo.png" class="img-fluid" alt="bank-logo">
              <div class="bank-element">
                <h6 class="mb-0">Axis Bank Limited,</h6>
                <p class="mb-0">Chennai</p>
              </div>
            </div>
            <a id="mobile_btn" class="mobile-btn" href="#sidebar">
              <i class="ti ti-menu-deep fs-24"></i>
            </a>
            <button class="sidenav-toggle-btn btn border-0 p-0" id="toggle_btn2">
              <i class="ti ti-arrow-bar-to-right"></i>
            </button>
          </div>

          <!-- CENTER: Bank / company card (keeps visually centered) -->
          <!-- <div class="center-area">
            <div class="bank-card">
              <div class="bank-icon"><i class="ti ti-building"></i></div>
              <div class="bank-text">
                <div class="bank-name">Jails Court Case Management</div>
                <div class="bank-city">City Name</div>
              </div>
            </div>
          </div> -->

          <!-- RIGHT: Notifications + Profile -->
          <div class="right-area">
            <div class="header-item">
              <div class="dropdown me-2">
                <!-- <button
                  class="topbar-link btn topbar-link dropdown-toggle drop-arrow-none"
                  data-bs-toggle="dropdown"
                  data-bs-offset="0,24"
                  type="button"
                  aria-haspopup="false"
                  aria-expanded="false">
                  <i class="ti ti-bell-check fs-16 animate-ring"></i>
                  <span class="badge rounded-pill">10</span>
                </button> -->
              </div>
            </div>

            <div class="profile-wrapper d-flex align-items-center gap-3 profile-hover">
              <div class="d-flex box-line  align-items-center"
                style="border-right: 2px solid #a2a2a2; padding-right:20px;  height:39px;">
                <span class="welcome-badge" style="font-weight: 700; color:#000;">! Welcome Back,</span>
              </div>

              <a href="javascript:void(0);"
                class="topbar-link dropdown-toggle drop-arrow-none position-relative profile-click"
                data-bs-toggle="dropdown" data-bs-offset="0,22" aria-haspopup="false" aria-expanded="false">
                <img src="assets/img/person.jpg" class="profile-avatar" alt="user-image" />
                <div class="profile-text ms-2 d-none d-md-block"
                  style="border-right: 2px solid #a2a2a2; padding-right:20px;">
                  <div class="fw-bold">Admin User</div>
                  <div class="role-text">Admin</div>
                </div>
                <i class="ti ti-dots-vertical ms-2"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                <div class="d-flex align-items-center bg-light rounded-3 p-2 mb-2">
                  <img src="assets/img/person.jpg" class="rounded-circle" width="42" height="42" alt="Img" />
                  <div class="ms-2">
                    <p class="fw-medium text-dark mb-0">Jails Court Case Management</p>
                    <span class="d-block fs-13">Admin</span>
                  </div>
                </div>

                <div class="pt-2 mt-2 border-top">
                  <a href="index.html" class="dropdown-item text-danger">
                    <i class="ti ti-logout me-1 fs-17 align-middle"></i>
                    <span class="align-middle">Sign Out</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </header>
    <!-- Topbar End -->

    <!-- Sidenav Menu Start -->
    <div class="sidebar" id="sidebar">
      <!-- Start Logo -->
      <div class="sidebar-logo">
        <div>
          <!-- Logo Normal -->
          <a href="index.html" class="logo logo-normal">
            <img src="assets/img/lexcorp360.png" style="width: 120px;" alt="Logo" />
          </a>

          <!-- Logo Small -->
          <a href="index.html" class="logo-small">
            <img src="assets/img/favicon.png" style="width: 45px;" alt="Logo" />
          </a>

          <!-- Logo Dark -->
          <a href="index.html" class="dark-logo">
            <img src="assets/img/lexcorp360.png" style="width: 120px;" alt="Logo" />
          </a>

        </div>

        <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn">
          <i class="ti ti-arrow-bar-to-left"></i>
        </button>

        <!-- Sidebar Menu Close -->
        <button class="sidebar-close">
          <i class="ti ti-x align-middle"></i>
        </button>

        <div class="input-group mt-2">
          <input type="text" placeholder="Search" class="form-control">
          <button class="btn btn-primary"><i class="ti ti-search"></i></button>
        </div>
      </div>


      <!-- End Logo -->

      <!-- Sidenav Menu -->
      <div class="sidebar-inner" data-simplebar>
        <div id="sidebar-menu" class="sidebar-menu">
          <ul>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-brand-airtable"></i><span>Master</span><span
                      class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="country.php">Country Creation</a></li>
                    <li><a href="zone.php">Zone Creation</a></li>
                    <li><a href="state.php">State Creation</a></li>
                    <li><a href="district.php">District Creation</a></li>
                    <li><a href="branch-creation.php">Branch Creation</a></li>
                    <li><a href="year-creation.php">Year Creation</a></li>
                    <li><a href="financial-year.php">Financial Year</a></li>
                    <li><a href="case-stage-creation.php">Case Stage Creation</a></li>
                    <li><a href="case-type.php">Case Type</a></li>
                    <li><a href="sub-case-type.php">Sub Case Type</a></li>
                    <li><a href="act.php">Act</a></li>
                    <li><a href="act-creation.php">Act Creation</a></li>
                    <li><a href="product.php">Product Creation</a></li>
                    <li><a href="product-creation.php">Product Case Creation</a></li>
                    <li><a href="postal-notice-type.php"> Notice Type</a></li>
                    <li><a href="postal-status.php">Postal Status Creation</a></li>
                    <li><a href="postal-mode-creation.php">Postal Mode Creation</a></li>
                    <li><a href="case-status.php">Postal Case Status</a></li>
                    <li><a href="hearing-status.php">Hearing Status Creation</a></li>
                    <li><a href="court-category.php">Court Category</a></li>
                    <li><a href="court-creation.php">Court Creation</a></li>
                    <li><a href="attachment-name.php">Attachment Name</a></li>
                    <li><a href="attachment-status.php">Attachment Status</a></li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sarfaesi<span class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="attachment-category.php">Attachment Category</a></li>
                        <li><a href="attachment-subcategory.php">Attachment SubCategory</a></li>
                      </ul>
                    </li>
                    <li><a href="arbitrator-creation.php">Arbitrator Creation</a></li>
                    <li><a href="institution-creation.php">Institution Creation</a></li>
                    <li><a href="rate-annexure-notice.php">Rate Annexure Notice</a></li>
                    <li><a href="rate-annexure-case.php">Rate Annexure Case</a></li>
                    <li><a href="mode-of-notice.php">Mode Of Digital Notice Creation</a></li>
                    <li><a href="invoice-category.php">Invoice Category</a></li>
                    <li><a href="invoice-sub-category.php">Invoice Sub Category</a></li>
                    <li><a href="employee_position.php">Employee Position</a></li>
                    <li><a href="bank.php">Bank</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="employee-report.php"><i class="ti ti-users-plus"></i>
                    <span>Employee Creation</span></a>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="advocate-report.php"><i class="ti ti-user-shield"></i>
                    <span>Advocate Creation</span></a>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="agency-report.php"><i class="ti ti-user-search"></i>
                    <span>Agency Creation</span></a>
                </li>
              </ul>
            </li>
            <li>

              <ul>
                <li class="">
                  <a href="allocation.php"><i class="ti ti-list-check"></i><span>Allocation</span></a>
                </li>
              </ul>

            </li>
            <li>
              <ul>
                <li class="">
                  <a href="notice-creation-report.php"><i class="ti ti-message-2-share"></i><span>Pre-Litigation
                      Notice</span></a>
                  <!-- <ul>
                    <li><a href="notice-creation-report.php">Notice Creation</a></li>
                  </ul> -->
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-scale"></i><span>Litigation - By Case</span><span
                      class="menu-arrow"></span></a>
                  <ul>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sec 138 of NI Act<span class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="section138-notice-report.php">Notice Creation</a></li>
                        <li><a href="section138-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sec 25 of PAS Act<span class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="section25-notice-report.php">Notice Creation</a></li>
                        <li><a href="section25-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sec 21 of Arbitration Act <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="arbitration-notice-report.php">Notice Creation</a></li>
                        <li><a href="arbitration-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sec 9 of Arbitration Act <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="arbitration-sec9-notice-report.php">Notice Creation</a></li>
                        <li><a href="arbitration-sec9-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Civil Suit <span class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="cvil-suit-notice-report.php">Notice Creation</a></li>
                        <li><a href="cvil-suit-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Summary Suit <span class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="summary-suit-notice-report.php">Notice Creation</a></li>
                        <li><a href="summary-suit-case.php">Case Creation</a></li>
                      </ul>
                    </li>

                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sec 19 of DRT <span class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="section19-notice-report.php">Notice Creation</a></li>
                        <li><a href="section19-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Writ Petition u/s 226 <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="writ-petition-notice-report.php">Notice Creation</a></li>
                        <li><a href="writ-petition-case.php">Case Creation</a></li>
                      </ul>
                    </li>

                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Criminal Case-200CrPc <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="criminal-notice-report.php">Notice Creation</a></li>
                        <li><a href="criminal-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Cr-Return Of Property <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="return-property-notice-report.php">Notice Creation</a></li>
                        <li><a href="return-property-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Cr- Bail/Anticipartory bail <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="anticipartory-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Cr-Se 156(3) Order <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="section156-notice-report.php">Notice Creation</a></li>
                        <li><a href="section156-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-vs"></i><span>Litigation - Against <br> Case</span><span
                      class="menu-arrow"></span></a>
                  <ul>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Civil case u/s O 7 R1<span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="civilcaser1-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sec 11 of Arbitration Act<span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="section11-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sec 34 of Arbitration Act <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="section34-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Insolvency Petition <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="insolvency-petition-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sec 35 of Consumer Act <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="section35-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sec 41 of Appeal to Consumer Court <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="section41-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sec 20 of DRT ( Appeal) <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="section20-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Writ Petition-Respondent <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="petition-respondent-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-vocabulary"></i><span>Litigation Cases - EP</span><span
                      class="menu-arrow"></span></a>
                  <ul>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Arbitration Award-EP <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="arbitration-award-notice-report.php">Notice Creation</a></li>
                        <li><a href="arbitration-award-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Civil Suit- Decree <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="civil-suit-decree-notice-report.php">Notice Creation</a></li>
                        <li><a href="civil-suit-case-decree.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Lok adalt-Order <span class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="lok-adalt-notice-report.php">Notice Creation</a></li>
                        <li><a href="lok-adalt-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">DRT-Recovery <span class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="drt-recovery-notice-report.php">Notice Creation</a></li>
                        <li><a href="drt-recovery-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-file-description"></i><span>Sarfaesi</span><span
                      class="menu-arrow"></span></a>
                  <ul>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sarfasei Act <span class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="sarfaesi-notice-creation.php">Pre sarfasei Notice Creation</a></li>
                        <li><a href="sarfaesi-postal-creation.php">Postal Creation</a></li>
                        <li><a href="sarfaesi-paper-publication.php">Paper Publication</a></li>
                        <li><a href="sarfaesi-attachment.php">Attachment</a></li>
                        <li><a href="physical-possession.php">Execution Details</a></li>
                        <li><a href="oneliner-report.php">Oneliner Report</a></li>
                      </ul>
                    </li>
                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sec 14 of Sarfaesi <span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="sarfaesi-case.php">Case Creation</a></li>
                      </ul>
                    </li>

                    <li class="submenu submenu-two">
                      <a href="javascript:void(0);">Sec 17 of DRT (SA)<span
                          class="menu-arrow inside-submenu"></span></a>
                      <ul>
                        <li><a href="section17-case.php">Case Creation</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-mailbox"></i><span>Postal Detail</span><span
                      class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="postal-creation.php">Postal Creation</a></li>
                    <li><a href="postal-bulk-upload-speed.php">Postal Bulk Upload</a></li>
                    <li><a href="postal-bulk-status-upload.php">Postal Bulk Status Upload</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="hearing-creation.php"><i class="ti ti-brand-databricks"></i><span>Hearing</span></a>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="attachment.php"><i class="ti ti-paperclip"></i><span>Attachment Details</span><span
                      class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="attachment-download.php">Attachment Download</a></li>
                    <li><a href="attachment-upload.php">Attachment Upload</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="replay-notice.php"><i class="ti ti-message-report"></i><span>Reply</span></a>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="rejoinder-notice.php"><i class="ti ti-message-reply"></i><span>Rejoinder</span></a>
                </li>
              </ul>
            </li>

            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-table"></i><span>Report</span><span
                      class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="mis-report.php">MIS Report</a></li>
                    <li><a href="hearing-report.php">Hearing Report</a></li>
                    <li><a href="report_postal.php">Postal Report</a></li>
                    <li><a href="attachment-report.php">Attachment Report</a></li>
                    <li><a href="case-reopen-report.php">Case Reopen Report</a></li>
                    <li><a href="holding-case-report.php">Holding Case Report</a></li>
                    <li><a href="report_advocate.php">Advocate Report</a></li>
                    <li><a href="report_employee.php">Employee Report</a></li>
                    <li><a href="agent-report.php">Agent Report</a></li>
                    <li><a href="overall-report.php">Overall Report</a></li>
                    <li>
                      <a href="case-close-report.php">
                        Case Close</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="caveat-report.php"><i class="ti ti-no-derivatives"></i><span>Caveat Application</span></a>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="advocate-transfer.php"><i class="ti ti-transfer"></i><span>Transfer Of Advocate</span></a>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="advocate-agent.php"><i class="ti ti-user"></i><span>Transfer Of Agent</span></a>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="ia-apllication.php"><i class="ti ti-clipboard"></i><span>I.A/M.P Application <br>
                      Creation</span></a>
                </li>
              </ul>
            </li>
            <!--<li>-->
            <!--  <ul>-->
            <!--    <li class="">-->
            <!--      <a href="mp-apllication.php"><i class="ti ti-clipboard-text"></i><span>M P Application</span></a>-->
            <!--    </li>-->
            <!--  </ul>-->
            <!--</li>-->
            <li>
              <ul>
                <li class="">
                  <a href="invoice-report.php"><i class="ti ti-file-dollar"></i><span>Invoice</span></a>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="inventory-inward.php"><i class="ti ti-basket-down"></i><span>Inventory - Inward</span></a>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="inventory-outward.php"><i class="ti ti-basket-up"></i><span>Inventory - Outward</span></a>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="">
                  <a href="calendar.php"><i class="ti ti-calendar"></i><span>Calendar</span></a>
                </li>
              </ul>
            </li>
            <li class="pb-5">
              <ul>
                <li class="">
                  <a href="notification.php"><i class="ti ti-bell-ringing"></i><span>Notification</span></a>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <!-- Sidenav Menu End -->

    <!-- ========================
      Start Page Content
    ========================= -->

    <div class="page-wrapper">
      <!-- Start Content -->
      <div class="content pb-0">
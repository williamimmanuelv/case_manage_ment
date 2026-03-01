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
  <link
    rel="stylesheet"
    href="assets/plugins/tabler-icons/tabler-icons.min.css" />

  <!-- Simplebar CSS -->
  <link rel="stylesheet" href="assets/plugins/simplebar/simplebar.min.css" />

  <!-- Select2 CSS -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

  <!-- Choices CSS -->
  <link rel="stylesheet" href="assets/plugins/choices.js/public/assets/styles/choices.min.css">

  <!-- Datatable CSS -->
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css" />


  <!-- Daterangepicker CSS -->
  <link
    rel="stylesheet"
    href="assets/plugins/daterangepicker/daterangepicker.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css" id="app-style" />
  <!-- FullCalendar CSS -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
</head>

<body>


  <!-- Begin Wrapper -->
  <div class="main-wrapper">
    <!-- Topbar Start -->
    <header class="navbar-header">
      <div class="page-container topbar-menu">
        <div class="d-flex align-items-center gap-2">
          <!-- Logo -->
          <a href="index.html" class="logo">
            <!-- Logo Normal -->
            <span class="logo-light">
              <span class="logo-lg"><img src="assets/img/lexcorp360.png" alt="logo" /></span>
              <span class="logo-sm"><img src="assets/img/favicon.png" alt="small logo" /></span>
            </span>

            <!-- Logo Dark -->
            <span class="logo-dark">
              <span class="logo-lg"><img src="assets/img/lexcorp360.png" alt="dark logo" /></span>
            </span>
          </a>

          <!-- Sidebar Mobile Button -->
          <a id="mobile_btn" class="mobile-btn" href="#sidebar">
            <i class="ti ti-menu-deep fs-24"></i>
          </a>

          <button
            class="sidenav-toggle-btn btn border-0 p-0"
            id="toggle_btn2">
            <i class="ti ti-arrow-bar-to-right"></i>
          </button>
        </div>

        <div class="d-flex align-items-center">
          <div class="header-line"></div>

          <!-- Notification Dropdown -->
          <div class="header-item">
            <div class="dropdown me-2">
              <button
                class="topbar-link btn topbar-link dropdown-toggle drop-arrow-none"
                data-bs-toggle="dropdown"
                data-bs-offset="0,24"
                type="button"
                aria-haspopup="false"
                aria-expanded="false">
                <i class="ti ti-bell-check fs-16 animate-ring"></i>
                <span class="badge rounded-pill">10</span>
              </button>


            </div>
          </div>

          <!-- User Dropdown -->
          <div
            class="dropdown profile-dropdown d-flex align-items-center justify-content-center">
            <a
              href="javascript:void(0);"
              class="topbar-link dropdown-toggle drop-arrow-none position-relative"
              data-bs-toggle="dropdown"
              data-bs-offset="0,22"
              aria-haspopup="false"
              aria-expanded="false">
              <img
                src="assets/img/person.jpg"
                width="38"
                class="rounded-1 d-flex"
                alt="user-image" />
              <span class="online text-success"><i
                  class="ti ti-circle-filled d-flex bg-white rounded-circle border border-1 border-white"></i></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
              <div
                class="d-flex align-items-center bg-light rounded-3 p-2 mb-2">
                <img
                  src="assets/img/person.jpg"
                  class="rounded-circle"
                  width="42"
                  height="42"
                  alt="Img" />
                <div class="ms-2">
                  <p class="fw-medium text-dark mb-0">
                    Jails Court Case Management
                  </p>
                  <span class="d-block fs-13">Admin</span>
                </div>
              </div>

              <!-- Item-->
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
    </header>
    <!-- Topbar End -->

    <!-- Sidenav Menu Start -->
    <div class="sidebar" id="sidebar">
      <!-- Start Logo -->
      <div class="sidebar-logo">
        <div>
          <!-- Logo Normal -->
          <a href="index.html" class="logo logo-normal">
            <img src="assets/img/lexcorp360.png" style="width: 180px;" alt="Logo" />
          </a>

          <!-- Logo Small -->
          <a href="index.html" class="logo-small">
            <img src="assets/img/favicon.png" style="width: 45px;" alt="Logo" />
          </a>

          <!-- Logo Dark -->
          <a href="index.html" class="dark-logo">
            <img src="assets/img/lexcorp360.png" style="width: 180px;" alt="Logo" />
          </a>
        </div>
        <button
          class="sidenav-toggle-btn btn border-0 p-0 active"
          id="toggle_btn">
          <i class="ti ti-arrow-bar-to-left"></i>
        </button>

        <!-- Sidebar Menu Close -->
        <button class="sidebar-close">
          <i class="ti ti-x align-middle"></i>
        </button>
      </div>
      <!-- End Logo -->

      <!-- Sidenav Menu -->
      <div class="sidebar-inner" data-simplebar>
        <div id="sidebar-menu" class="sidebar-menu">
          <ul>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-brand-airtable"></i><span>Master</span><span class="menu-arrow"></span></a>
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
                    <li><a href="act-sub-sec.php">Act Sub Sec Creation</a></li>
                    <li><a href="product.php">Product Creation</a></li>
                    <li><a href="product-creation.php">Product Case Creation</a></li>
                    <li><a href="notice-type.php">Notice Type Creation</a></li>
                    <li><a href="postal-notice-type.php">Postal Notice Type</a></li>
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
                    <li><a href="mode-of-notice.php">Mode Of Digital Notice Creation</a></li>
                    <li><a href="invoice-category.php">Invoice Category</a></li>
                    <li><a href="invoice-sub-category.php">Invoice Sub Category</a></li>
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
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-list-check"></i><span>Allocation</span><span class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="allocation.php">New Allocation</a></li>
                    <li><a href="wait-approval.php">Waiting for Approval</a></li>
                    <li><a href="pending-allocation.php">Pending Allocation</a></li>
                    <li><a href="close-allocation.php">Closed Allocation</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-message-2-share"></i><span>Litigation Notice</span><span class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="notice-creation-report.php">Notice Creation</a></li>
                    <li><a href="notice-convert-case.php">Convert to Case</a></li>
                    <li><a href="reply-notice.php">Reply Notice</a></li>
                    <li><a href="rejoinder-notice.php">Rejoinder Notice</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-file-plus"></i><span>Case</span><span class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="case.php">Case Creation</a></li>
                    <li><a href="hearing-creation.php">Hearing Creation</a></li>
                    <li><a href="postal-creation.php">Postal Creation</a></li>
                    <li><a href="ia-apllication.php">I.A.Application</a></li>
                    <li><a href="caveat-creation.php">Caveat Creation</a></li>
                    <li><a href="attachment.php">Attachment Creation</a></li>
                    <li><a href="advocate-transfer.php">Advocate Transfer</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-scale"></i><span>Section 138</span><span class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="section138-case.php">Case Creation</a></li>
                    <li><a href="section138-hearing-creation.php">Hearing Creation</a></li>
                    <li><a href="section138-postal-creation.php">Postal Creation</a></li>
                    <li><a href="section138-attachment.php">Attachment Creation</a></li>
                     <li><a href="section138-mp-apllication.php">MP Application</a></li>
                    <li><a href="section138-reply-rejoinder.php">Reply & Rejoinder</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-file-description"></i><span>Section 25</span><span class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="section25-case.php">Case Creation</a></li>
                    <li><a href="section25-hearing-creation.php">Hearing Creation</a></li>
                    <li><a href="section25-postal-creation.php">Postal Creation</a></li>
                    <li><a href="section25-attachment.php">Attachment Creation</a></li>
                     <li><a href="section25-mp-apllication.php">MP Application</a></li>
                    <li><a href="section25-reply-rejoinder.php">Reply & Rejoinder</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-vs"></i><span>Against Case</span><span class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="against-case.php">Case Creation</a></li>
                    <li><a href="against-postal-creation.php">Postal Creation</a></li>
                    <li><a href="against-attachment.php">Attachment Creation</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-gavel"></i><span>Sarfaesi</span><span class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="sarfaesi-case.php">Sarfaesi Case</a></li>
                    <li><a href="sarfaesi-postal-creation.php">Postal Creation</a></li>
                    <li><a href="sarfaesi-paper-publication.php">Paper Publication</a></li>
                    <li><a href="sarfaesi-attachment.php"> Attachment</a></li>
                    <li><a href="section-14.php">Section 14</a></li>
                    <li><a href="physical-possession.php">Execution Details</a></li>
                    <li><a href="oneliner-report.php">Oneliner Report</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-file-invoice"></i><span>Arbitration Case</span><span class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="arbitration-notice-report.php">Notice Creation</a></li>
                    <li><a href="arbitration-convert-case.php">Convert to Case</a></li>
                    <li><a href="arbitration-case.php">Case Creation</a></li>
                    <li><a href="arbitration-hearing-creation.php">Hearing Creation</a></li>
                    <li><a href="arbitration-postal-creation.php">Postal Creation</a></li>
                    <li><a href="mp-apllication.php">MP Application</a></li>
                    <li><a href="arbitration-reply-rejoinder.php">Reply & Rejoinder</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-file-dollar"></i><span>Invoice</span><span class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="invoice-report.php">Invoice Creation</a></li>
                    <li><a href="invoice-success-report.php">Invoice Success Report</a></li>
                    <li><a href="inventory-inward.php">Inventory Inward Creation</a></li>
                    <li><a href="inventory-outward.php">Inventory Outward Creation</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <!-- <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-world-code"></i><span>Digital</span><span class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="digital-creation.php">Digital Creation</a></li>
                    <li><a href="template-creation.php">Template Creation</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-logs"></i><span>Reports</span><span class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="mis-report.php">MIS Report</a></li>
                    <li><a href="hearing-report.php">Hearing Report</a></li>
                    <li><a href="postal-report.php">Postal Report</a></li>
                    <li><a href="case-search.php">Case Search</a></li>
                    <li><a href="invoice-report.php">Invoice Report</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <ul>
                <li class="submenu">
                  <a href="javascript:void(0);"><i class="ti ti-tools"></i><span>Tools</span><span class="menu-arrow"></span></a>
                  <ul>
                    <li><a href="calendar.php">Calendar</a></li>
                  </ul>
                </li>
              </ul>
            </li> -->
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
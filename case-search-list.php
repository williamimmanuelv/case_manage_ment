<?php include 'header.php'; ?>




<div class="d-flex align-items-center">
  <a href="case-search.php" class="mb-3 text-primary" style="font-weight: 600;"> <i class="ti ti-arrow-left mt-0" style="font-size: 16px;font-weight: 600;"></i> Go Back </a>
</div>

<!-- Top Filter Box -->

<div class="search-box">
  <div class="row align-items-end ">
    <div class="col-md-3">
      <label class="form-label">Name :</label>
      <input type="text" class="form-control" placeholder="Enter The Name">
    </div>
    <div class="col-md-3">
      <label class="form-label">Mobile Number :</label>
      <input type="text" class="form-control" placeholder="Enter The Mobile Number">
    </div>
    <div class="col-md-3">
      <label class="form-label">Email ID :</label>
      <input type="email" class="form-control" placeholder="Enter The Email ID">
    </div>
    <div class="col-md-3 ">
      <button class="btn btn-md btn-send mt-3">Send</button>
      <button class="btn btn-md btn-primary mt-3">Export</button>
    </div>
  </div>
</div>

<!-- Case Details -->

<div class="section-box">
  <h5 class="section-title case-title">Case Details</h5>
  <div class="table-responsive">
    <table class="custom-table green-table mb-4">
      <tr>
        <td>Case Type</td>
        <td class="empty-cell">Civil Case</td>
        <td>Case Related To</td>
        <td class="empty-cell">Bank</td>
      </tr>
      <tr>
        <td>Loan No</td>
        <td class="empty-cell">TPR000807008764</td>
        <td>Allocation Date</td>
        <td class="empty-cell">17-11-2025</td>
      </tr>
      <tr>
        <td>Product</td>
        <td class="empty-cell">Personal Loan</td>
        <td>Out Standing Amount (Rs)</td>
        <td class="empty-cell">15,000</td>
      </tr>
      <tr>
        <td>Location</td>
        <td colspan="3" class="empty-cell">
          <div class="row g-2">
            <div class="col-md-4"><input type="text" class="form-control" value="Zone"></div>
            <div class="col-md-4"><input type="text" class="form-control" value="State"></div>
            <div class="col-md-4"><input type="text" class="form-control" value="District"></div>
          </div>
        </td>
      </tr>
    </table>
  </div>

  <hr>

  <!-- Court Details -->

  <div class="section-content">
    <h5 class="section-title court-title">Court Details</h5>
    <div class="table-responsive">
      <table class="custom-table purple-table">
        <tr>
          <td>Filing Date</td>
          <td class="empty-cell">17-11-2025</td>
          <td>SR No</td>
          <td class="empty-cell">SR001</td>
        </tr>
        <tr>
          <td>Numbering Date</td>
          <td class="empty-cell">17-11-2025</td>
          <td>Case No</td>
          <td class="empty-cell">CA001</td>
        </tr>
        <tr>
          <td>CNR No</td>
          <td class="empty-cell">CN001</td>
          <td>Case Sub Type</td>
          <td class="empty-cell">Sec 138</td>
        </tr>
        <tr>
          <td>Court Name</td>
          <td class="empty-cell">High Court</td>
          <td>Act</td>
          <td class="empty-cell">175(3)</td>
        </tr>
      </table>

    </div>
  </div>

  <hr>

  <!-- red Section -->

  <div class="section-content">
    <div class="section-header">
      <span class="side-gradient red me-2"></span>
      <h4>Acts</h4>
    </div>

    <div class="table-responsive">
      <table class="custom-table red-table">
        <tr>
          <td>Under Act(s)</td>
          <td>Under Section(s)</td>
        </tr>
        <tr>
          <td class="empty">Bharatiya Nagarik Suraksha Sanhita</td>
          <td class="empty"><a style="color:var(--theme-color);text-decoration:underline;" href="https://demo.jailsllp.com/" target="_blank">175(3)</a></td>
        </tr>
      </table>
    </div>
  </div>

  <hr>

  <div class="section-content">
    <!-- Blue Section -->
    <div class="section-header d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center justify-content-between">
        <span class="side-gradient blue me-2"></span>
        <h4>Petitioner / Complainant / Applicant</h4>
      </div>
      <div class="d-flex align-items-center justify-content-between">
        <h4>Advocate</h4>
        <span class="side-gradient blue ms-2"></span>
      </div>

    </div>

    <div class="table-responsive">
      <table class="custom-table blue-table">
        <tr>
          <td>Bank Name</td>
          <td>Manger Name</td>
          <td>Advocate Name</td>
        </tr>
        <tr>
          <td class="empty">HDFC</td>
          <td class="empty">Manager 1</td>
          <td class="empty">Advocate</td>
        </tr>
      </table>
    </div>
  </div>

  <hr>

  <!-- Yellow Section -->

  <div class="section-content">
    <div class="section-header">
      <div class="d-flex align-items-center justify-content-between">
        <span class="side-gradient yellow me-2"></span>
        <h4>Respondent / Defendant / Accused</h4>
      </div>
      <div class="d-flex align-items-center justify-content-between">
        <h4>Advocate</h4>
        <span class="side-gradient yellow ms-2"></span>
      </div>
    </div>

    <div class="table-responsive">
      <table class="custom-table yellow-table">
        <tr>
          <td>Customer Name</td>
          <td>Co-Applicant Name</td>
          <td>Guarantor Name</td>
          <td>Co-Guarantor Name</td>
          <td>Advocate Name</td>
        </tr>
        <tr>
          <td class="empty">Customer 1</td>
          <td class="empty">Co-Applicant 1</td>
          <td class="empty">Guarantor 1</td>
          <td class="empty">Co-Guarantor 1</td>
          <td class="empty">Advocate 1</td>
        </tr>
      </table>
    </div>
  </div>

  <hr>

  <!-- pink Section -->

  <div class="section-content">
    <div class="section-header">
      <span class="side-gradient pink me-2"></span>
      <h4>Status Of Case</h4>
    </div>

    <div class="table-responsive">
      <table class="custom-table pink-table">
        <tr>
          <td>Stage</td>
          <td>Last Stage</td>
          <td>Date Of Last Stage</td>
        </tr>
        <tr>
          <td class="empty">Live/Close/Contest/Hold</td>
          <td class="empty">Case Hold</td>
          <td class="empty">17-11-2025</td>
        </tr>
      </table>
    </div>
  </div>

  <hr>

  <!-- Maroon Section -->

  <div class="section-content">
    <div class="section-header">
      <span class="side-gradient maroon me-2"></span>
      <h4>History of Hearing</h4>
    </div>

    <div class="table-responsive">
      <table class="custom-table maroon-table">
        <tr>
          <td>S.No</td>
          <td>Last Hearing Date</td>
          <td>Last Hearing Statge</td>
          <td>Next Hearing Date</td>
          <td>Next Hearing Stage</td>
          <td>Hearing Video</td>
        </tr>
        <tr>
          <td class="empty">1</td>
          <td class="empty">17-11-2025</td>
          <td class="empty">Case Hold</td>
          <td class="empty">17-11-2025</td>
          <td class="empty"><a href="case-search-view.php">Hearing</a></td>
          <td class="empty"><button class="btn btn-sm video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" onclick="playVideo('hearingvideo.mp4')"><i class="ti ti-video me-2"></i> Video</button></td>
        </tr>
      </table>
    </div>
  </div>

  <hr>

  <!-- Sky blue Section -->

  <div class="section-content">
    <div class="section-header">
      <span class="side-gradient sky-blue me-2"></span>
      <h4>History of Postal</h4>
    </div>

    <div class="table-responsive">
      <table class="custom-table sky-blue-table">
        <tr>
          <td>S.No</td>
          <td>Nature of Customer</td>
          <td>Name of Customer</td>
          <td>Type of Notices / Petition</td>
          <td>Speed Post No</td>
          <td>Booking On</td>
          <td>Delivery On</td>
          <td>Status of Notice</td>
          <td>Speed Tracking Link</td>
        </tr>
        <tr>
          <td class="empty">1</td>
          <td class="empty">Fresh</td>
          <td class="empty">Customer 1</td>
          <td class="empty">Post</td>
          <td class="empty">SP0001</td>
          <td class="empty">17-11-2025</td>
          <td class="empty">Delivered</td>
          <td class="empty">Unclaimed</td>
          <td class="empty"><a href="">Tracking</a></td>
        </tr>
      </table>
    </div>
  </div>

  <hr>

  <!-- brown Section -->

  <div class="section-content">
    <div class="section-header">
      <span class="side-gradient brown me-2"></span>
      <h4>reply Notice</h4>
    </div>

    <div class="table-responsive">
      <table class="custom-table brown-table">
        <tr>
          <td>S.No</td>
          <td>Case Type</td>
          <td>Sub Case Type</td>
          <td>Attachment</td>
          <td>Description</td>
        </tr>
        <tr>
          <td class="empty">1</td>
          <td class="empty">Civil Case</td>
          <td class="empty">Civil Suit</td>
          <td class="empty"><a href="">File</a></td>
          <td class="empty">Description Content</td>
        </tr>
      </table>
    </div>
  </div>

  <hr>
  
  <!-- olive green Section -->

  <div class="section-content">
    <div class="section-header">
      <span class="side-gradient olive-green me-2"></span>
      <h4>Rejoinder Notice</h4>
    </div>

    <div class="table-responsive">
      <table class="custom-table olive-green-table">
        <tr>
          <td>S.No</td>
          <td>Case Type</td>
          <td>Sub Case Type</td>
          <td>Attachment</td>
          <td>Description</td>
        </tr>
        <tr>
          <td class="empty">1</td>
          <td class="empty">Civil Case</td>
          <td class="empty">Civil Suit</td>
          <td class="empty"><a href="">File</a></td>
          <td class="empty">Description Content</td>
        </tr>
      </table>
    </div>
  </div>

  <hr>

  <!-- MAIL TABLE -->

  <div class="msg-section mb-5">
    <div class="section-header">
      <span class="side-gradient digital me-2"></span>
      <h4>Digital Tracking</h4>
    </div>

    <div class="d-flex align-items-center justify-content-end">
      <div class="msg-header mail">Mail</div>
    </div>


    <div class="table-responsive">
      <table class="custom-table digital-table">
        <thead>
          <tr>
            <td>S.No</td>
            <td>Send Via</td>
            <td>Receiver Type</td>
            <td>Name Of The Customer</td>
            <td>Type Of Doc</td>
            <td>Send To</td>
            <td>Attempt</td>
            <td>Date Of Dispatch</td>
            <td>Status</td>
            <td>Delivery Date</td>
            <td>Documents</td>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="empty">1</td>
            <td class="empty">E-Mail</td>
            <td class="empty">Guarantor</td>
            <td class="empty">Guarantor Name</td>
            <td class="empty">Notice</td>
            <td class="empty">demo@gmail.com</td>
            <td class="empty">Attempt 1</td>
            <td class="empty">17-11-2025</td>
            <td class="empty">Seen</td>
            <td class="empty">17-11-2025</td>
            <td class="empty"><button class="btn btn-primary"><i class="ti ti-download"></i></button></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>


  <!-- WHATSAPP TABLE -->

  <div class="msg-section mb-5">
    <div class="d-flex align-items-center justify-content-end">
      <div class="msg-header whatsapp">Whatsapp</div>
    </div>

    <div class="table-responsive">
      <table class="custom-table whatsapp-table">
        <tr>
          <td>S.No</td>
          <td>Send Via</td>
          <td>Receiver Type</td>
          <td>Name Of The Customer</td>
          <td>Type Of Doc</td>
          <td>Send To</td>
          <td>Attempt</td>
          <td>Date Of Dispatch</td>
          <td>Status</td>
          <td>Delivery Date</td>
          <td>Documents</td>

        </tr>
        <tr>
          <td class="empty">1</td>
          <td class="empty">Whatsapp</td>
          <td class="empty">Guarantor</td>
          <td class="empty">Guarantor Name</td>
          <td class="empty">Notice</td>
          <td class="empty">demo@gmail.com</td>
          <td class="empty">Attempt 1</td>
          <td class="empty">17-11-2025</td>
          <td class="empty">Seen</td>
          <td class="empty">17-11-2025</td>
          <td class="empty"><button class="btn btn-primary"><i class="ti ti-download"></i></button></td>
        </tr>
      </table>
    </div>

  </div>



  <!-- SMS TABLE -->

  <div class="msg-section mb-5">

    <div class="d-flex align-items-center justify-content-end">
      <div class="msg-header sms">SMS</div>
    </div>

    <div class="table-responsive">
      <table class="custom-table sms-table">
        <tr>
          <td>S.No</td>
          <td>Send Via</td>
          <td>Receiver Type</td>
          <td>Name Of The Customer</td>
          <td>Type Of Doc</td>
          <td>Send To</td>
          <td>Attempt</td>
          <td>Date Of Dispatch</td>
          <td>Status</td>
          <td>Delivery Date</td>
          <td>Documents</td>

        </tr>
        <tr>
          <td class="empty">1</td>
          <td class="empty">SMS</td>
          <td class="empty">Guarantor</td>
          <td class="empty">Guarantor Name</td>
          <td class="empty">Notice</td>
          <td class="empty">demo@gmail.com</td>
          <td class="empty">Attempt 1</td>
          <td class="empty">17-11-2025</td>
          <td class="empty">Seen</td>
          <td class="empty">17-11-2025</td>
          <td class="empty"><button class="btn btn-primary"><i class="ti ti-download"></i></button></td>
        </tr>
      </table>
    </div>
  </div>

  <hr>

  <!-- I.A Application -->

  <div class="section-content">
    <div class="section-header">
      <span class="side-gradient application me-2"></span>
      <h4>I.A. Application</h4>
    </div>
    <div class="table-responsive">
      <table class="custom-table application-table">
        <tr>
          <td>Application No</td>
          <td class="empty-cell">IA0001</td>
          <td>Nature of Application</td>
          <td class="empty-cell">Fresh</td>
        </tr>
        <tr>
          <td>Nature, Filing Date</td>
          <td class="empty-cell">17-11-2025</td>
          <td>Stage of Application</td>
          <td class="empty-cell">Case Hold</td>
        </tr>
      </table>

    </div>
  </div>

  <hr>

  <!-- Transfer court Section -->

  <div class="section-content">
    <div class="section-header">
      <span class="side-gradient trans-court me-2"></span>
      <h4>Transfer of Courts</h4>
    </div>

    <div class="table-responsive">
      <table class="custom-table trans-court-table">
        <tr>
          <td>S.No</td>
          <td>Transfer Date</td>
          <td>Transfer Courts</td>
          <td>Remarks</td>
        </tr>
        <tr>
          <td class="empty">1</td>
          <td class="empty">17-11-2025</td>
          <td class="empty">High Court</td>
          <td class="empty">Remarks</td>
        </tr>
      </table>
    </div>
  </div>

  <hr>

  <!-- Transfer Advocate Section -->

  <div class="section-content">
    <div class="section-header">
      <span class="side-gradient trans-advocate me-2"></span>
      <h4>Transfer of Advocate</h4>
    </div>

    <div class="table-responsive">
      <table class="custom-table trans-advocate-table">
        <tr>
          <td>S.No</td>
          <td>Transfer Date</td>
          <td>Transfer Advocate</td>
          <td>Remarks</td>
        </tr>
        <tr>
          <td class="empty">1</td>
          <td class="empty">17-11-2025</td>
          <td class="empty">Advocate 1</td>
          <td class="empty">Remarks</td>
        </tr>
      </table>
    </div>
  </div>

  <hr>

  <!-- Attachment -->

  <div class="section-content">
    <div class="section-header">
      <span class="side-gradient attachment me-2"></span>
      <h4>Attachment</h4>
    </div>


    <!-- BOX -->
    <div class="attachment-container mt-3">

      <!-- CLIP-PATH TAB -->
      <div class="attachment-tab">
        <!-- <button class="btn btn-primary mt-3"><i class="ti ti-plus me-2"></i> Attachment</button> -->
      </div>

      <div class="attachment-inner ">
        <div class="row g-4 mt-2">

          <div class="col-md-4">
            <div class="file-box">
              <input type="text" value="Name.Pdf">
              <button class="btn btn-primary"><i class="ti ti-eye"></i></button>
              <button class="btn btn-danger"><i class="ti ti-trash"></i></button>
            </div>
          </div>

          <div class="col-md-4">
            <div class="file-box">
              <input type="text" value="Name.Pdf">
              <button class="btn btn-primary"><i class="ti ti-eye"></i></button>
              <button class="btn btn-danger"><i class="ti ti-trash"></i></button>
            </div>
          </div>

          <div class="col-md-4">
            <div class="file-box">
              <input type="text" value="Name.Pdf">
              <button class="btn btn-primary"><i class="ti ti-eye"></i></button>
              <button class="btn btn-danger"><i class="ti ti-trash"></i></button>
            </div>
          </div>

        </div>
        <div class="row g-4 mt-2">
          <h6>Other Documents</h6>

          <div class="col-md-4">
            <div class="file-box">
              <input type="text" value="Name.Pdf">
              <button class="btn btn-primary"><i class="ti ti-eye"></i></button>
              <button class="btn btn-danger"><i class="ti ti-trash"></i></button>
            </div>
          </div>

          <div class="col-md-4">
            <div class="file-box">
              <input type="text" value="Name.Pdf">
              <button class="btn btn-primary"><i class="ti ti-eye"></i></button>
              <button class="btn btn-danger"><i class="ti ti-trash"></i></button>
            </div>
          </div>

          <div class="col-md-4">
            <div class="file-box">
              <input type="text" value="Name.Pdf">
              <button class="btn btn-primary"><i class="ti ti-eye"></i></button>
              <button class="btn btn-danger"><i class="ti ti-trash"></i></button>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>

  <hr>

  <!-- Orange Section -->

  <div class="section-content">
    <div class="section-header">
      <span class="side-gradient orange me-2"></span>
      <h4>Final Orders / Judgements</h4>
    </div>

    <div class="table-responsive">
      <table class="custom-table orange-table">
        <tr>
          <td>Order Number</td>
          <td>Order Date</td>
          <td>Order Details</td>
        </tr>
        <tr>
          <td class="empty">1</td>
          <td class="empty">17-11-2025</td>
          <td class="empty"><a style="color:var(--theme-color);text-decoration:underline;" href="assets/img/dummy.pdf" target="_blank">Decree</a></td>
        </tr>
      </table>
    </div>
  </div>


  <!-- Video Modal -->
  <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="videoModalLabel">Hearing Video</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="stopVideo()"></button>
        </div>
        <div class="modal-body text-center">
          <video id="modalVideo" width="100%" height="auto" controls>
            <source id="videoSource" src="" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>

</div>


<script>
  document.addEventListener("DOMContentLoaded", function(e) {

    let themesetting = `
	<div class="sidebar-contact">

      <div class="theme-content">
                                <div class="row g-3">

                                    <div class="col-4">
                                        <div class="theme-layout">
                                            <input type="radio" name="data-layout" id="miniLayout" value="mini" checked>
                                            <label for="miniLayout">
                                                <span class="d-block mb-2 layout-img">
                                                    <span class="theme-check rounded-circle"><i class="ti ti-check"></i></span>
                                                    <img src="assets/img/theme/mini.svg" alt="img">
                                                </span>
                                                <span class="layout-type">Mini</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
  </div>`;


    let wrapper = document.createElement("div");
    wrapper.innerHTML = themesetting;

    while (wrapper.firstChild) {
      document.body.appendChild(wrapper.firstChild);
    }



    if (window.config) {
      window.config.sidenav.size = "mini";
    }
    if (window.defaultConfig) {
      window.defaultConfig.sidenav.size = "mini";
    }

    sessionStorage.setItem("__THEME_CONFIG__", JSON.stringify(window.config));

    document.documentElement.setAttribute("data-layout", "mini");

    document.body.classList.add("mini-sidebar");

    const mini = document.getElementById("miniLayout");
    if (mini) mini.checked = true;

    (new ThemeCustomizer).init();

  });
</script>



<?php include 'footer.php'; ?>
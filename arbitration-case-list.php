<?php include 'header.php'; ?>



<div class="d-flex align-items-center">
  <a href="arbitration-case.php" class="mb-3 text-primary" style="font-weight: 600;"> <i class="ti ti-arrow-left mt-0" style="font-size: 16px;font-weight: 600;"></i> Go Back </a>
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
      <button class="btn btn-md btn-export mt-3">Export</button>
    </div>
  </div>
</div>

<div class="card ">
  <div class="card-body">

    <!-- Case Details -->

    <div class="case-wrapper-green mb-4">

      <div class="case-header">
        Case Details
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table green-table case-table">
              <tr>
                <td>Case Type</td>
                <td class="empty-cell">By Case</td>
                <td>SubCase Type</td>
                <td class="empty-cell">Sec 21 of Arbitration Act</td>
              </tr>
              <tr>
                <td>Loan Number</td>
                <td class="empty-cell">Loa001</td>
                <td>Customer ID</td>
                <td class="empty-cell">Cus001</td>
              </tr>
             
              <tr>
                
                <td>Product</td>
                <td class="empty-cell">Car Loan</td>
                <td>FC Amount</td>
                <td class="empty-cell">15,00,000</td>
              </tr>
              
              <tr>
                
                <td>Allocation Date</td>
                <td class="empty-cell">14-02-2026</td>
                <td>Location</td>
                <td class="empty-cell">Chennai</td>
              </tr>
              
              <tr>
                <td>Nature of Case</td>
                <td class="empty-cell">Fresh Case</td>
                <td>Act (Under Section)</td>
                <td class="empty-cell">
                  Act 138 - 2026
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Case Status -->

    <div class="case-wrapper-indigo mb-4">
      <div class="case-header">
        Case Status
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table indigo-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>First Hearing Date</th>
                  <th>Last Hearing Date</th>
                  <th>Case Stage</th>
                  <th>Court Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">10-02-2026</td>
                  <td class="empty">14-02-2026</td>
                  <td class="empty">Case Pending</td>
                  <td class="empty">High Court</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Petitioner & Advocate Details -->

    <div class="case-wrapper-tangerine mb-4">
      <div class="case-header">
        Petitioner & Advocate Details
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table tangerine-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Bank Name</th>
                  <th>Manger Name</th>
                  <th>Advocate Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">HDFC</td>
                  <td class="empty">Arun</td>
                  <td class="empty">Salman</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Respondent and advocate -->

    <div class="case-wrapper-blue mb-4">
      <div class="case-header">
        Respondent and Advocate
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table blue-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Customer Name</th>
                  <th>Co-Applicant Name</th>
                  <th>Guarantor Name</th>
                  <!--<th>Co-Guarantor Name</th>-->
                  <!--<th>Additional Guarantor Name</th>-->
                  <th>Respondent Advocate</th>
                  <th>Advocate Mobile No</th>
                  <th>Advocate Address</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">Rahul</td>
                  <td class="empty">Arun</td>
                  <td class="empty">Salman</td>
                  <!--<td class="empty">Ramesh</td>-->
                  <!--<td class="empty">Suresh</td>-->
                  <td class="empty">Ram</td>
                  <td class="empty">9876543210</td>
                  <td class="empty">Chennai</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
    
    <!-- Case Stage -->

    <div class="case-wrapper-blue-gray mb-4">
      <div class="case-header">
        Case Stage
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table blue-gray-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Stage</th>
                  <th>Last Stage</th>
                  <th>Date Of Last Stage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">Live/Close/Contest/Hold</td>
                  <td class="empty">Case Hold</td>
                  <td class="empty">17-02-2026</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- History of Hearing -->

    <div class="case-wrapper-raspberry mb-4">
      <div class="case-header">
        History of Hearing
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table raspberry-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Last Hearing Date</th>
                  <th>Last Hearing Status</th>
                  <th>Next Hearing Date</th>
                  <th>Next Hearing Status</th>
                  <th>Video</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">10-02-2026</td>
                  <td class="empty">Next Hearing Come</td>
                  <td class="empty">14-02-2026</td>
                  <td class="empty">Case Pending</td>
                  <td class="empty">
                    <div class="text-center">
                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal" onclick="playVideo('hearingvideo.mp4')"><i class="ti ti-video"></i></button>
                      
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- History of Postal -->

    <div class="case-wrapper-forest-green mb-4">
      <div class="case-header">
        History of Postal
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table forest-green-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Receiver Type</th>
                  <th>Name of Customer</th>
                  <th>Case Status Type</th>
                  <th>Speed Post Number</th>
                  <th>Dispatch Date</th>
                  <th>Dispatch Status</th>
                  <th>Date of Delivery</th>
                  <th>Postal Link</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">Applicant</td>
                  <td class="empty">Rahul</td>
                  <td class="empty">Section</td>
                  <td class="empty">Spe0001</td>
                  <td class="empty">10-02-2026</td>
                  <td class="empty">Delivered</td>
                  <td class="empty">14-02-2026</td>
                  <td class="empty"><a href="#" style="color:var(--theme-color);text-decoration:underline;">Link</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Attachment -->

    <div class="case-wrapper-raspberry mb-4">
      <div class="case-header">
        Attachment
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table raspberry-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Attachment</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">
                    <div class="file-box">
                      <input type="text" value="Name.Pdf">
                    </div>
                  </td>
                  <td class="empty">
                    <div class="text-center">
                      <button class="btn btn-primary"><i class="ti ti-eye"></i></button>
                      
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Reply Notice -->

    <div class="case-wrapper-navy-blue mb-4">
      <div class="case-header">
        Reply Notice
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table navy-blue-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Date of Notice</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">10-02-2026</td>
                  <td class="empty">Description Text</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Rejoinder Notice -->

    <div class="case-wrapper-violet mb-4">
      <div class="case-header">
        Rejoinder Notice
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table violet-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Date of Notice</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">10-02-2026</td>
                  <td class="empty">Description Text</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Transfer Court -->

    <div class="case-wrapper-crimson mb-4">
      <div class="case-header">
         Transfer of Court
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table crimson-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Transfer of Date</th> 
                  <th>Transfer of Court</th> 
                  <th>Remarks</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">14-02-26</td>
                  <td class="empty">High Court</td>
                  <td class="empty">Court Transfer</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Transfer of Advocate -->

    <div class="case-wrapper-burnt-orange mb-4">
      <div class="case-header">
        Transfer of Advocate
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table burnt-orange-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Existing Advocate</th>
                  <th>From Date</th>
                  <th>To Date</th>
                  <th>New Advocate</th>
                  <th>Change Reason</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">Salman</td>
                  <td class="empty">10-02-2026</td>
                  <td class="empty">14-02-2026</td>
                  <td class="empty">Arun</td>
                  <td class="empty">Advocate Change</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- MP Application -->

    <div class="case-wrapper-teal-green mb-4">
      <div class="case-header">
        MP Application
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table teal-green-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Nature of Application</th>
                  <th>Filing Date</th>
                  <th>MP Number</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">Application</td>
                  <td class="empty">10-02-2026</td>
                  <td class="empty">MP0001</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Invoice Details -->

    <div class="case-wrapper-red mb-4">
      <div class="case-header">
        Invoice Details
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table red-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Loan Number</th>
                  <th>Bill No</th>
                  <th>Bill Date</th>
                  <th>Bill Amount</th>
                  <th>Status</th>
                  <th>Payment Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">Loan0001</td>
                  <td class="empty">Invo0001</td>
                  <td class="empty">10-02-2026</td>
                  <td class="empty">1,500</td>
                  <td class="empty">Yes</td>
                  <td class="empty">10-02-2026</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Inventory Details Inward -->

    <div class="case-wrapper-yellow mb-4">
      <div class="case-header">
        Inventory Details Inward
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table yellow-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Date of Handing Over</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Handover Manager</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">14-02-26</td>
                  <td class="empty">Handing Over</td>
                  <td class="empty">Handing Over Done</td>
                  <td class="empty">Salman</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Inventory Details Outward -->

    <div class="case-wrapper-coral mb-4">
      <div class="case-header">
        Inventory Details Outward
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table coral-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Date of Handing Over</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Handover Manager</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">14-02-26</td>
                  <td class="empty">Handing Over</td>
                  <td class="empty">Handing Over Done</td>
                  <td class="empty">Salman</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Institution Name -->

    <div class="case-wrapper-gray mb-4">
      <div class="case-header">
        Institution Name
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table gray-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Institution Name</th>
                  <th>Arbitrator Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">Jailsllp</td>
                  <td class="empty">Salman</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Video -->

    <!-- <div class="case-wrapper-purple mb-4">
      <div class="case-header">
        Video
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table purple-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Video</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">
                    <div class="file-box">
                      <input type="text" value="Name.mp4">
                    </div>
                  </td>
                  <td class="empty">
                    <div class="text-center">
                      <button class="btn btn-primary"><i class="ti ti-video"></i></button>
                      <button class="btn btn-danger"><i class="ti ti-trash"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div> -->

    <!-- Defreeze Order Status -->

    <div class="case-wrapper-beige mb-4">
      <div class="case-header">
        Defreeze Order Status
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="custom-table beige-table case-table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Date</th>
                  <th>Defreeze Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="empty">1</td>
                  <td class="empty">14-02-2026</td>
                  <td class="empty">Done</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- Digital -->

    <div class="case-wrapper-golden mb-4">
      <div class="case-header">
        Digital
      </div>

      <div class="card mb-0" style="border-radius: 8px;">
        <div class="card-body">
          <div class="msg-section mb-5">

            <div class="d-flex align-items-center justify-content-start">
              <div class="msg-header mail">Mail</div>
            </div>


            <div class="table-responsive">
              <table class="custom-table digital-table">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Send Via</th>
                    <th>Receiver Type</th>
                    <th>Name Of The Customer</th>
                    <th>Type Of Doc</th>
                    <th>Send To</th>
                    <th>Attempt</th>
                    <th>Date Of Dispatch</th>
                    <th>Status</th>
                    <th>Delivery Date</th>
                    <th>Documents</th>

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
                    <td class="empty">
                      <button class="btn btn-primary" ><i class="ti ti-download"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>


          <!-- WHATSAPP TABLE -->

          <div class="msg-section mb-5">
            <div class="d-flex align-items-center justify-content-start">
              <div class="msg-header whatsapp">Whatsapp</div>
            </div>

            <div class="table-responsive">
              <table class="custom-table whatsapp-table">
                <tr>
                  <th>S.No</th>
                  <th>Send Via</th>
                  <th>Receiver Type</th>
                  <th>Name Of The Customer</th>
                  <th>Type Of Doc</th>
                  <th>Send To</th>
                  <th>Attempt</th>
                  <th>Date Of Dispatch</th>
                  <th>Status</th>
                  <th>Delivery Date</th>
                  <th>Documents</th>

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

          <div class="msg-section ">

            <div class="d-flex align-items-center justify-content-start">
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
        </div>
      </div>

    </div>

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
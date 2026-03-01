<?php include 'header.php'; ?>

<style>
  .progress {
    height: 8px;
    background-color: #e9ecef;
  }

  .progress-bar {
    background-color: #42c29b;
    border-radius: 6px;
    transition: width 0.4s ease;
  }

  .status-badge {
    border-radius: 10px;
    font-size: 14px;
    padding: 6px 14px;
    display: inline-flex;
    cursor: pointer;
    align-items: center;
    gap: 6px;
    font-weight: 500;
  }

  .live {
    background: #e8fbf5;
    color: #1aa179;
  }

  .dropped {
    background: #ffecec;
    color: #e03131;
  }

  .status-icon {
    font-size: 14px;
    line-height: 1;
  }
</style>

<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title">Sarfaesi Report</h5>
      </div>
      <div class="card-body">

        <div class="row row-gap-3 mb-4">

          <div class="col-xl-3 col-sm-6 d-flex">
            <div class="card flex-fill mb-0 position-relative overflow-hidden">
              <div class="card-body position-relative z-1">
                <div class="d-flex align-items-start justify-content-between">
                  <div class="d-flex align-items-start justify-content-between">
                    <div>
                      <p class="fs-14 mb-1">Pre-NPA</p>
                      <h2 class="mb-1 fs-16">5468</h2>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <span class="avatar avatar-md rounded-circle bg-soft-primary border border-primary">
                      <i class="ti ti-clipboard-text fs-16 text-primary"></i>
                    </span>
                  </div>
                </div>
              </div>
              <img src="assets/img/icons/elemnt-01.svg" alt="elemnt-04" class="img-fluid position-absolute top-0 Start-0">
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 d-flex">
            <div class="card flex-fill mb-0 position-relative overflow-hidden">
              <div class="card-body position-relative z-1">
                <div class="d-flex align-items-start justify-content-between">
                  <div class="d-flex align-items-start justify-content-between">
                    <div>
                      <p class="fs-14 mb-1">Demand 13(2) Notice</p>
                      <h2 class="mb-1 fs-16">4598</h2>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <span class="avatar avatar-md rounded-circle bg-soft-success border border-success">
                      <i class="ti ti-clipboard-typography fs-16 text-success"></i>
                    </span>
                  </div>
                </div>
              </div>
              <img src="assets/img/icons/elemnt-02.svg" alt="elemnt-04" class="img-fluid position-absolute top-0 Start-0">
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 d-flex">
            <div class="card flex-fill mb-0 position-relative overflow-hidden">
              <div class="card-body position-relative z-1">
                <div class="d-flex align-items-start justify-content-between">
                  <div class="d-flex align-items-start justify-content-between">
                    <div>
                      <p class="fs-14 mb-1">Possession 13(4)</p>
                      <h2 class="mb-1 fs-16">5468</h2>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <span class="avatar avatar-md rounded-circle bg-soft-warning border border-warning">
                      <i class="ti ti-clipboard-data fs-16 text-warning"></i>
                    </span>
                  </div>
                </div>
              </div>
              <img src="assets/img/icons/elemnt-03.svg" alt="elemnt-04" class="img-fluid position-absolute top-0 Start-0">
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 d-flex">
            <div class="card flex-fill mb-0 position-relative overflow-hidden">
              <div class="card-body position-relative z-1">
                <div class="d-flex align-items-start justify-content-between">
                  <div class="d-flex align-items-start justify-content-between">
                    <div>
                      <p class="fs-14 mb-1">Section 14</p>
                      <h2 class="mb-1 fs-16">8988</h2>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <span class="avatar avatar-md rounded-circle bg-soft-danger border border-danger mb-3">
                      <i class="ti ti-checklist fs-16 text-primary"></i>
                    </span>
                  </div>
                </div>
              </div>
              <img src="assets/img/icons/elemnt-04.svg" alt="elemnt-04" class="img-fluid position-absolute top-0 Start-0">
            </div>
          </div>

        </div>

        <div class="row g-4 mb-4">
          <div class="col-md-4">
            <label class="form-label">Loan No</label>
            <select class="form-control select2" data-toggle="select2">
              <option>Select</option>
              <optgroup>
                <option value="Loan">Loan 001</option>
                <option value="Loan">Loan 002</option>
              </optgroup>
            </select>
          </div>
          <div class="col-md-3 col-lg-4 mt-auto mb-2">
            <button class="btn btn-sm btn-primary me-2">
              <i class="ti ti-search"></i> Search
            </button>
          </div>
        </div>

        <!-- <div id="last-chart"></div> -->

        <div class="d-flex justify-content-between mb-2">
          <span class="fw-semibold">Overall Progress</span>
          <span class="fw-semibold text-muted">75%</span>
        </div>

        <!-- Progress bar -->
        <div class="progress mb-4">
          <div class="progress-bar"
            id="overallProgress"
            data-default="85"
            style="width:85%">
          </div>
        </div>

        <!-- Status pills -->
        <div class="d-flex flex-wrap gap-3">

          <div class="status-badge live progress-hover" data-progress="20">
            <i class="ti ti-check status-icon"></i> Pre-NPA
          </div>

          <div class="status-badge live progress-hover" data-progress="35">
            <i class="ti ti-check status-icon"></i> Demand 13(2)
          </div>

          <div class="status-badge dropped progress-hover" data-progress="50">
            <i class="ti ti-x status-icon"></i> Possession 13(4)
          </div>

          <div class="status-badge dropped progress-hover" data-progress="70">
            <i class="ti ti-x status-icon"></i> Section 14
          </div>

          <div class="status-badge dropped progress-hover" data-progress="85">
            <i class="ti ti-x status-icon"></i> Physical Possession
          </div>

          <div class="status-badge dropped progress-hover" data-progress="100">
            <i class="ti ti-x status-icon"></i> Sale & Auction
          </div>


        </div>


      </div>
      <!-- end card-body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>
<!-- end row -->


<script>
  const progressBar = document.getElementById('overallProgress');
  const items = document.querySelectorAll('.progress-hover');

  items.forEach(item => {
    item.addEventListener('mouseenter', () => {
      const value = item.getAttribute('data-progress');
      progressBar.style.width = value + '%';
    });

    item.addEventListener('mouseleave', () => {
      progressBar.style.width = '75%'; 
    });
  });
</script>

<!-- Apexchart JS -->
	<script src="assets/plugins/apexchart/apexcharts.min.js" type="text/javascript"></script>
	<script src="assets/plugins/apexchart/chart-data.js" type="text/javascript"></script>


<?php include 'footer.php'; ?>
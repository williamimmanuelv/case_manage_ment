<?php include 'header.php'; ?>

<style>
  table {
    table-layout: fixed;
    width: 100%;
  }

  th:nth-child(1),
  td:nth-child(1) {
    width: 80px;
  }

  th:nth-child(2),
  td:nth-child(2) {
    width: 45%;
  }

  th:nth-child(3),
  td:nth-child(3) {
    width: 45%;
  }

  .drop-cell {
    height: 60px;
    border: 2px dashed #ced4da;
    vertical-align: middle;
    text-align: center;
    overflow: hidden;
    white-space: nowrap;
  }

  .drag-item {
    cursor: grab;
  }

  .sticky-notice {
    position: sticky;
    height: 500px;
    overflow-y: auto !important;
    top: 100px;
  }

  .dropdown-menu {
    max-height: 300px;
    overflow-y: auto;
  }

  .btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    color: #fff;
  }

  .btn-secondary:hover {
    background-color: #6c757d;
    border-color: #6c757d;
    color: #fff;
  }
</style>

<!-- start row -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h5 class="card-title">Product Drag</h5>
      </div>

      <div class="card-body">
        <div class="row mb-3">

          <div class="col-md-6 col-lg-4">
            <div class="mb-3">
              <label for="input-label" class="form-label">Product</label>
              <select class="form-select">
                <option value="">Select</option>
                <option value="Product 1">Product 1</option>
                <option value="Product 2">Product 2</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 my-auto mt-md-4 mt-0">
            <button class="btn btn-sm btn-primary me-2">
              <i class="ti ti-search"></i> Search
            </button>
          </div>
        </div>

        <div class="row g-4 d-flex ">

          <div class="col-md-8">
            <div class="table-responsive">
              <table class="table table-bordered ">
                <thead class="table-light">
                  <tr>
                    <th>S.No</th>
                    <th>Digital</th>
                    <th>Print</th>
                  </tr>
                </thead>
                <tbody id="tableBody"></tbody>

              </table>
            </div>

          </div>

          <div class="col-md-4">
            <div class="sticky-notice">

              <h5>Notice Type</h5>

              <div class="border rounded p-3 mb-3">
                <h6 class="mb-2">Filter</h6>

                <input type="text"
                  class="form-control mb-3"
                  placeholder="Search notice..."
                  id="searchInput"
                  onkeyup="applyFilter()">

              </div>

              <div id="dragSource"
                class="border p-3 rounded"
                ondragover="allowDrop(event)"
                ondrop="drop(event)">

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="overdue"
                  draggable="true"
                  ondragstart="drag(event)">
                  Overdue Reminder
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="dunning"
                  draggable="true"
                  ondragstart="drag(event)">
                  Dunning
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="vehicleProduction"
                  draggable="true"
                  ondragstart="drag(event)">
                  Vehicle Production Notice
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="conciliation"
                  draggable="true"
                  ondragstart="drag(event)">
                  Conciliation Notice
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="lokAdalat"
                  draggable="true"
                  ondragstart="drag(event)">
                  Lok Adalat
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="mediation"
                  draggable="true"
                  ondragstart="drag(event)">
                  Mediation Notices
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="pasa"
                  draggable="true"
                  ondragstart="drag(event)">
                  PASA
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="demand"
                  draggable="true"
                  ondragstart="drag(event)">
                  Demand Notice
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="loanRecall"
                  draggable="true"
                  ondragstart="drag(event)">
                  Loan Recall Notice
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="sarfaesi"
                  draggable="true"
                  ondragstart="drag(event)">
                  SARFAESI Notice
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="vehicleSurrender"
                  draggable="true"
                  ondragstart="drag(event)">
                  Vehicle Surrender Notice
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="repossession"
                  draggable="true"
                  ondragstart="drag(event)">
                  Repossession Notice
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="lipsMargin"
                  draggable="true"
                  ondragstart="drag(event)">
                  LIPS Margin Notice
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="publicComplaint"
                  draggable="true"
                  ondragstart="drag(event)">
                  Public Complaint
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="sellCrop"
                  draggable="true"
                  ondragstart="drag(event)">
                  To Sell the Crop Hypothecated
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="restrainingCrop"
                  draggable="true"
                  ondragstart="drag(event)">
                  Restraining to Harvest the Crop
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="crossHolding"
                  draggable="true"
                  ondragstart="drag(event)">
                  Cross Holding – NPA Classification Notice
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="addressIntimation"
                  draggable="true"
                  ondragstart="drag(event)">
                  Intimation Notice to Permanent Address
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="preEP"
                  draggable="true"
                  ondragstart="drag(event)">
                  Pre-EP Notice (Salary Attachment / Arrest)
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="attachment"
                  draggable="true"
                  ondragstart="drag(event)">
                  Attachment of Movables & Immovables
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="garnishee"
                  draggable="true"
                  ondragstart="drag(event)">
                  Garnishee Notice
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="insolvency"
                  draggable="true"
                  ondragstart="drag(event)">
                  Insolvency Notice / IBC
                </button>

                <button class="btn btn-secondary drag-item mb-2 w-100"
                  data-type="rti"
                  draggable="true"
                  ondragstart="drag(event)">
                  RTI Notices
                </button>

              </div>


            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>


<script>
  const tbody = document.getElementById("tableBody");

  for (let i = 1; i <= 90; i++) {
    tbody.innerHTML += `
    <tr>
      <td>${i}</td>
      <td class="drop-cell" ondragover="allowDrop(event)" ondrop="drop(event)"></td>
      <td class="drop-cell" ondragover="allowDrop(event)" ondrop="drop(event)"></td>
    </tr>
  `;
  }

  function applyFilter() {
    const search = document.getElementById('searchInput').value.toLowerCase();


    document.querySelectorAll('#dragSource .drag-item').forEach(item => {
      const textMatch = item.innerText.toLowerCase().includes(search);
      const typeMatch = filters[item.dataset.type];

      item.style.display = (textMatch && typeMatch) ? 'block' : 'none';
    });
  }

  let draggedItemHTML = null;

  function allowDrop(e) {
    e.preventDefault();
  }

  function drag(e) {
    draggedItemHTML = e.target.outerHTML;
  }

  function drop(e) {
    e.preventDefault();

    if (e.target.classList.contains('drop-cell') && e.target.children.length > 0) {
      return;
    }

    if (draggedItemHTML && e.target.classList.contains('drop-cell')) {
      const wrapper = document.createElement('div');
      wrapper.innerHTML = draggedItemHTML;

      const clone = wrapper.firstElementChild;

      clone.removeAttribute('ondragstart');
      clone.removeAttribute('draggable');

      e.target.appendChild(clone);
      draggedItemHTML = null;
    }
  }
</script>



<?php include 'footer.php'; ?>
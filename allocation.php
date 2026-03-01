<?php include 'header.php'; ?>

<style>
    .plus-icon-wrapper {
        background-color: #cda85d;
        width: 27px;
        height: 27px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .plus-icon-wrapper i {
        color: black;
        font-size: 18px;
    }

    .btn-edit {
        border: 1px solid rgb(204, 167, 92);
        color: rgb(204, 167, 92);
        background-color: white;
    }

    .btn-edit:hover {
        border: 1px solid rgb(204, 167, 92) !important;
        color: rgb(204, 167, 92);
        background-color: white;
    }

    .btn-cancel:hover {
        background-color: white;
        color: red;
    }
</style>

<div class="row">
    <div class="">
        <div class="card">

            <!-- .... -->
            <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
                <div class="offcanvas-header border-bottom">
                    <h5 class="mb-0">Add New Allocation</h5>
                    <button type="button"
                        class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
                        data-bs-dismiss="offcanvas" aria-label="Close">
                    </button>
                </div>
                <div class="offcanvas-body">
                    <form action="https://crms.dreamstechnologies.com/html/template/projects-list.html">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label for="input-label" class="form-label">Allocation ID</label>
                                <input type="text" class="form-control" value="AID1001" readonly />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Legal Type <span style="color:red;">*</span></label>
                                <select class="form-select" id="legal-type">
                                    <option>Select</option>
                                    <option value="Notice">Notice</option>
                                    <option value="CivilCase">Litigation By Case</option>
                                    <option value="CriminalCase">Litigation Against Case</option>
                                    <option value="ArbitrationCase">Litigation Case EP</option>
                                    <option value="SarfaesiCase">Sarfaesi Case</option>
                                </select>
                            </div>

                            <div class="col-md-6 casebox Notice d-none">
                                <label class="form-label">Notice Type <span style="color:red;">*</span></label>
                                <select class="form-select">
                                    <option value="">Select</option>
                                    <option value="normal-notice">Normal Notice</option>
                                    <option value="conciliation-notice">Conciliation Notice</option>
                                    <option value="lok-adalat-notice">Lok Adalat Notice</option>
                                    <option value="mediation-notice">Mediation Notice</option>
                                </select>
                            </div>

                            <div class="col-md-6 casebox Notice d-none">
                                <label class="form-label">Mode Of Notice</label>
                                <select class="form-control" multiple data-choices data-choices-removeItem>
                                    <option selected>Select</option>
                                    <option value="Speed Post">Speed Post</option>
                                    <option value="Normal Post">Normal Post</option>
                                </select>
                            </div>

                            <div class="col-md-6 casebox Notice d-none">
                                <label class="form-label">Advocate Name <span style="color:red;">*</span></label>
                                <select class="form-select">
                                    <option selected>Select</option>
                                    <option value="Advocate Name 1">Advocate Name 1</option>
                                    <option value="Advocate Name 2">Advocate Name 2</option>
                                </select>
                            </div>

                            <div class="col-md-6 case-section d-none" id="caseCard">
                                <label class="form-label">Sub Case Type <span style="color:red;">*</span></label>
                                <select class="form-select subcase-create" data-type="default">
                                    <option value="">Select</option>
                                </select>

                                <select class="form-select subcase-create d-none" data-type="CivilCase">
                                    <option value="">Select</option>
                                    <option value="Section 138">Section 138</option>
                                    <option value="Section 25">Section 25</option>
                                    <option value="Arbitration Section 21">Arbitration Section 21</option>
                                    <option value="Arbitration Section 9">Arbitration Section 9</option>
                                    <option value="Civil Suit">Civil Suit</option>
                                    <option value="Summary Suit">Summary Suit</option>
                                    <option value="Sec 19 of DRT">Sec 19 of DRT</option>
                                    <option value="Writ Petition u/s 226">Writ Petition u/s 226</option>
                                    <option value="Criminal Case-200CrPc">Criminal Case-200CrPc</option>
                                    <option value="Cr-Return Of Property">Cr-Return Of Property</option>
                                    <option value="Cr- Bail/Anticipartory bail">Cr- Bail/Anticipartory bail</option>
                                    <option value="Cr-Se 156(3) Order">Cr-Se 156(3) Order</option>
                                </select>

                                <select class="form-select subcase-create d-none" data-type="CriminalCase">
                                    <option value="">Select</option>
                                    <option value="Civil case u/s O 7 R1">Civil case u/s O 7 R1</option>
                                    <option value="Sec 11 of Arbitration Act">Sec 11 of Arbitration Act</option>
                                    <option value="Sec 34 of Arbitration Act">Sec 34 of Arbitration Act</option>
                                    <option value="Insolvency Petition">Insolvency Petition</option>
                                    <option value="Sec 35 of Consumer Act">Sec 35 of Consumer Act</option>
                                    <option value="Sec 41 of Appeal to Consumer Court">Sec 41 of Appeal to Consumer Court</option>
                                    <option value="Sec 20 of DRT ( Appeal)">Sec 20 of DRT ( Appeal)</option>
                                    <option value="Writ Petition-Respondent">Writ Petition-Respondent</option>
                                </select>

                                <select class="form-select subcase-create d-none" data-type="ArbitrationCase">
                                    <option value="">Select</option>
                                    <option value="Arbitration Award-EP">Arbitration Award-EP</option>
                                    <option value="Civil Suit- Decree">Civil Suit- Decree</option>
                                    <option value="Lok adalt-Order">Lok adalt-Order</option>
                                    <option value="DRT-Recovery">DRT-Recovery</option>
                                </select>

                                <select class="form-select subcase-create d-none" data-type="SarfaesiCase">
                                    <option value="">Select</option>
                                    <option value="Sarfaesi Case">Sarfaesi Act</option>
                                    <option value="Sec 14 of Sarfaesi">Sec 14 of Sarfaesi</option>
                                    <option value="Sec 17 of DRT (SA)">Sec 17 of DRT (SA)</option>
                                    <option value="Execution">Execution</option>
                                </select>

                            </div>

                            <div class="col-md-6 case-section d-none" id="litigationBox">
                                <label class="form-label">Litigation Type <span style="color:red;">*</span></label>
                                <select class="form-select" id="litigation-type">
                                    <option>Select</option>
                                    <option value="Notice">Notice</option>
                                    <option value="case">Case</option>
                                    <option value="sarfaesi">Sarfaesi Case</option>
                                    <option value="Section14">Section 14</option>
                                    <option value="SA">SA</option>
                                    <option value="Auction">Auction</option>
                                </select>

                            </div>

                            <div class="col-md-6 d-none" id="convertCaseBox">
                                <label class="form-label">Convert to Case <span style="color:red;">*</span></label>
                                <select class="form-select" multiple data-choices data-choices-removeItem>
                                    <option>Select</option>
                                    <option selected value="Allo001">Allo001</option>
                                    <option value="Allo002">Allo002</option>
                                </select>
                            </div>

                            <div class="col-md-6 d-none" id="downloadBox">
                                <label class="form-label">Loan Number Attachment Download</label> <br>
                                <button href="#" class="btn btn-sm btn-primary"><i class="ti ti-download"></i> <span class="px-1">Download</span> </button>
                            </div>

                            <div class="col-md-6 d-none" id="uploadBox">
                                <label class="form-label">Loan Number Attachment Upload</label>
                                <input type="file" class="form-control">
                            </div>

                            <div class="col-md-6 d-none" id="advocateAgentBox">
                                <label class="form-label">Advocate or Agent</label>

                                <div class="mt-1">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="advocateAgent" value="advocate" checked>
                                        <label class="form-check-label">Advocate</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="advocateAgent" value="agent">
                                        <label class="form-check-label">Agent</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 d-none" id="ProductBox">
                                <label class="form-label">Product <span style="color:red;">*</span></label>
                                <select class="form-select">
                                    <option>Select</option>
                                    <option value="Car">Car</option>
                                    <option value="Personal Loan">Personal Loan</option>
                                </select>
                            </div>

                            <div class="col-md-6 d-none" id="AdvocateBox">
                                <label class="form-label">Advocate Name <span style="color:red;">*</span></label>
                                <select class="form-select">
                                    <option selected>Select</option>
                                    <option value="Advocate Name 1">Advocate Name 1</option>
                                    <option value="Advocate Name 2">Advocate Name 2</option>
                                </select>
                            </div>

                            <div class="col-md-6 d-none" id="AdvocateSarfaesi">
                                <label class="form-label">Advocate Name <span style="color:red;">*</span></label>
                                <select class="form-select">
                                    <option selected>Select</option>
                                    <option value="Advocate Name 1">Advocate Name 1</option>
                                    <option value="Advocate Name 2">Advocate Name 2</option>
                                </select>
                            </div>

                            <div class="col-md-6 d-none" id="AgentSarfaesi">
                                <label class="form-label">Agent Name <span style="color:red;">*</span></label>
                                <select class="form-select">
                                    <option selected>Select</option>
                                    <option value="Agent Name 1">Agent Name 1</option>
                                    <option value="Agent Name 2">Agent Name 2</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" placeholder="Title">
                            </div>

                            <!-- <div class="col-md-6">
                                        <label class="form-label">Number Of Case <span class="text-danger">*</span></label>
                                        <input type="number" id="numCase" class="form-control" placeholder="Number Of Case">
                                    </div> -->

                            <!-- Count -->
                            <div class="col-md-6">
                                <label class="form-label" id="lblCount">
                                    Number Of Notice <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="numCase" class="form-control" placeholder="Number Of Notice">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Fee</label>
                                <div class="mt-1">

                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="feeStandard" name="feeType" class="form-check-input" value="standard" checked>
                                        <label class="form-check-label" for="feeStandard">Standard</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="feeOptional" name="feeType" class="form-check-input" value="optional">
                                        <label class="form-check-label" for="feeOptional">Optional</label>
                                    </div>

                                </div>
                            </div>

                            <!-- <div class="col-md-6">
                                        <label class="form-label">Cost Per Notice <span class="text-danger">*</span></label>
                                        <input type="number" id="costPerNotice" class="form-control" placeholder="Cost Per Notice">
                                    </div> -->

                            <!-- Cost -->
                            <div class="col-md-6">
                                <label class="form-label" id="lblCost">
                                    Cost Per Notice <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="costPerNotice" class="form-control" placeholder="Cost Per Notice">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Total <span class="text-danger">*</span></label>
                                <input type="number" id="totalAmount" class="form-control" placeholder="Total" readonly>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Priority </label>
                                <select class="form-select">
                                    <option>Select</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Allocation Date</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Description</label>
                                <textarea rows="2" class="form-control" placeholder="Enter Description"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Attachment</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="#" class="btn btn-sm btn-outline-danger">Cancel</a>
                            <a href="#" class="btn btn-sm btn-primary">Create</a>
                        </div>
                    </form>
                </div>
            </div>


            <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
                <div class="offcanvas-header border-bottom">
                    <h5 class="mb-0">Update Allocation</h5>
                    <button type="button"
                        class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
                        data-bs-dismiss="offcanvas" aria-label="Close">
                    </button>
                </div>
                <div class="offcanvas-body">
                    <form action="https://crms.dreamstechnologies.com/html/template/projects-list.html">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label for="input-label" class="form-label">Allocation ID</label>
                                <input type="text" class="form-control" value="AID1001" readonly />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Legal Type <span style="color:red;">*</span></label>
                                <select class="form-select" id="legal-type">
                                    <option>Select</option>
                                    <option value="Notice">Notice</option>
                                    <option value="CivilCase">Litigation By Case</option>
                                    <option value="CriminalCase">Litigation Against Case</option>
                                    <option value="ArbitrationCase">Litigation Case EP</option>
                                    <option value="SarfaesiCase">Sarfaesi Case</option>
                                </select>
                            </div>

                            <div class="col-md-6 casebox Notice d-none">
                                <label class="form-label">Notice Type <span style="color:red;">*</span></label>
                                <select class="form-select">
                                    <option value="">Select</option>
                                    <option value="normal-notice">Normal Notice</option>
                                    <option value="conciliation-notice">Conciliation Notice</option>
                                    <option value="lok-adalat-notice">Lok Adalat Notice</option>
                                    <option value="mediation-notice">Mediation Notice</option>
                                </select>
                            </div>

                            <div class="col-md-6 casebox Notice d-none">
                                <label class="form-label">Mode Of Notice</label>
                                <select class="form-control" multiple data-choices data-choices-removeItem>
                                    <option selected>Select</option>
                                    <option value="Speed Post">Speed Post</option>
                                    <option value="Normal Post">Normal Post</option>
                                </select>
                            </div>

                            <div class="col-md-6 casebox Notice d-none">
                                <label class="form-label">Advocate Name <span style="color:red;">*</span></label>
                                <select class="form-select">
                                    <option selected>Select</option>
                                    <option value="Advocate Name 1">Advocate Name 1</option>
                                    <option value="Advocate Name 2">Advocate Name 2</option>
                                </select>
                            </div>

                            <div class="col-md-6 case-section d-none" id="caseCard">
                                <label class="form-label">Sub Case Type <span style="color:red;">*</span></label>
                                <select class="form-select subcase-create" data-type="default">
                                    <option value="">Select</option>
                                </select>

                                <select class="form-select subcase-create d-none" data-type="CivilCase">
                                    <option value="">Select</option>
                                    <option value="Section 138">Section 138</option>
                                    <option value="Section 25">Section 25</option>
                                    <option value="Arbitration Section 21">Arbitration Section 21</option>
                                    <option value="Arbitration Section 9">Arbitration Section 9</option>
                                    <option value="Civil Suit">Civil Suit</option>
                                    <option value="Summary Suit">Summary Suit</option>
                                    <option value="Sec 19 of DRT">Sec 19 of DRT</option>
                                    <option value="Writ Petition u/s 226">Writ Petition u/s 226</option>
                                    <option value="Criminal Case-200CrPc">Criminal Case-200CrPc</option>
                                    <option value="Cr-Return Of Property">Cr-Return Of Property</option>
                                    <option value="Cr- Bail/Anticipartory bail">Cr- Bail/Anticipartory bail</option>
                                    <option value="Cr-Se 156(3) Order">Cr-Se 156(3) Order</option>
                                </select>

                                <select class="form-select subcase-create d-none" data-type="CriminalCase">
                                    <option value="">Select</option>
                                    <option value="Civil case u/s O 7 R1">Civil case u/s O 7 R1</option>
                                    <option value="Sec 11 of Arbitration Act">Sec 11 of Arbitration Act</option>
                                    <option value="Sec 34 of Arbitration Act">Sec 34 of Arbitration Act</option>
                                    <option value="Insolvency Petition">Insolvency Petition</option>
                                    <option value="Sec 35 of Consumer Act">Sec 35 of Consumer Act</option>
                                    <option value="Sec 41 of Appeal to Consumer Court">Sec 41 of Appeal to Consumer Court</option>
                                    <option value="Sec 20 of DRT ( Appeal)">Sec 20 of DRT ( Appeal)</option>
                                    <option value="Writ Petition-Respondent">Writ Petition-Respondent</option>
                                </select>

                                <select class="form-select subcase-create d-none" data-type="ArbitrationCase">
                                    <option value="">Select</option>
                                    <option value="Arbitration Award-EP">Arbitration Award-EP</option>
                                    <option value="Civil Suit- Decree">Civil Suit- Decree</option>
                                    <option value="Lok adalt-Order">Lok adalt-Order</option>
                                    <option value="DRT-Recovery">DRT-Recovery</option>
                                </select>

                                <select class="form-select subcase-create d-none" data-type="SarfaesiCase">
                                    <option value="">Select</option>
                                    <option value="Sarfaesi Case">Sarfaesi Act</option>
                                    <option value="Sec 14 of Sarfaesi">Sec 14 of Sarfaesi</option>
                                    <option value="Sec 17 of DRT (SA)">Sec 17 of DRT (SA)</option>
                                    <option value="Execution">Execution</option>
                                </select>

                            </div>

                            <div class="col-md-6 case-section d-none" id="litigationBox">
                                <label class="form-label">Litigation Type <span style="color:red;">*</span></label>
                                <select class="form-select" id="litigation-type">
                                    <option>Select</option>
                                    <option value="Notice">Notice</option>
                                    <option value="case">Case</option>
                                    <option value="sarfaesi">Sarfaesi Case</option>
                                    <option value="Section14">Section 14</option>
                                    <option value="SA">SA</option>
                                    <option value="Auction">Auction</option>
                                </select>

                            </div>

                            <div class="col-md-6 d-none" id="convertCaseBox">
                                <label class="form-label">Convert to Case <span style="color:red;">*</span></label>
                                <select class="form-select" multiple data-choices data-choices-removeItem>
                                    <option>Select</option>
                                    <option selected value="Allo001">Allo001</option>
                                    <option value="Allo002">Allo002</option>
                                </select>
                            </div>

                            <div class="col-md-6 d-none" id="downloadBox">
                                <label class="form-label">Loan Number Attachment Download</label> <br>
                                <button href="#" class="btn btn-primary"><i class="ti ti-download"></i> Download</button>
                            </div>

                            <div class="col-md-6 d-none" id="uploadBox">
                                <label class="form-label">Loan Number Attachment Upload</label>
                                <input type="file" class="form-control">
                            </div>

                            <div class="col-md-6 d-none" id="advocateAgentBox">
                                <label class="form-label">Advocate or Agent</label>

                                <div class="mt-1">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="advocateAgent" value="advocate" checked>
                                        <label class="form-check-label">Advocate</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="advocateAgent" value="agent">
                                        <label class="form-check-label">Agent</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 d-none" id="ProductBox">
                                <label class="form-label">Product <span style="color:red;">*</span></label>
                                <select class="form-select">
                                    <option>Select</option>
                                    <option value="Car">Car</option>
                                    <option value="Personal Loan">Personal Loan</option>
                                </select>
                            </div>

                            <div class="col-md-6 d-none" id="AdvocateBox">
                                <label class="form-label">Advocate Name <span style="color:red;">*</span></label>
                                <select class="form-select">
                                    <option selected>Select</option>
                                    <option value="Advocate Name 1">Advocate Name 1</option>
                                    <option value="Advocate Name 2">Advocate Name 2</option>
                                </select>
                            </div>

                            <div class="col-md-6 d-none" id="AdvocateSarfaesi">
                                <label class="form-label">Advocate Name <span style="color:red;">*</span></label>
                                <select class="form-select">
                                    <option selected>Select</option>
                                    <option value="Advocate Name 1">Advocate Name 1</option>
                                    <option value="Advocate Name 2">Advocate Name 2</option>
                                </select>
                            </div>

                            <div class="col-md-6 d-none" id="AgentSarfaesi">
                                <label class="form-label">Agent Name <span style="color:red;">*</span></label>
                                <select class="form-select">
                                    <option selected>Select</option>
                                    <option value="Agent Name 1">Agent Name 1</option>
                                    <option value="Agent Name 2">Agent Name 2</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" placeholder="Title">
                            </div>

                            <!-- <div class="col-md-6">
                                        <label class="form-label">Number Of Case <span class="text-danger">*</span></label>
                                        <input type="number" id="numCase" class="form-control" placeholder="Number Of Case">
                                    </div> -->

                            <!-- Count -->
                            <div class="col-md-6">
                                <label class="form-label" id="lblCount">
                                    Number Of Notice <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="numCase" class="form-control" placeholder="Number Of Notice">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Fee</label>
                                <div class="mt-1">

                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="feeStandard" name="feeType" class="form-check-input" value="standard" checked>
                                        <label class="form-check-label" for="feeStandard">Standard</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="feeOptional" name="feeType" class="form-check-input" value="optional">
                                        <label class="form-check-label" for="feeOptional">Optional</label>
                                    </div>

                                </div>
                            </div>

                            <!-- <div class="col-md-6">
                                        <label class="form-label">Cost Per Notice <span class="text-danger">*</span></label>
                                        <input type="number" id="costPerNotice" class="form-control" placeholder="Cost Per Notice">
                                    </div> -->

                            <!-- Cost -->
                            <div class="col-md-6">
                                <label class="form-label" id="lblCost">
                                    Cost Per Notice <span class="text-danger">*</span>
                                </label>
                                <input type="number" id="costPerNotice" class="form-control" placeholder="Cost Per Notice">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Total <span class="text-danger">*</span></label>
                                <input type="number" id="totalAmount" class="form-control" placeholder="Total" readonly>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Priority </label>
                                <select class="form-select">
                                    <option>Select</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Allocation Date</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Description</label>
                                <textarea rows="2" class="form-control" placeholder="Enter Description"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Attachment</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="#" class="btn btn-sm btn-outline-danger">Cancel</a>
                            <a href="#" class="btn btn-sm btn-primary">Update</a>
                        </div>
                    </form>
                </div>
            </div>


        </div>
        <!-- <div class="mb-3 nav flex-row  gap-2 nav-pills" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab"
                aria-controls="v-pills-home" aria-selected="true">
                Waiting for Approval
            </a>
            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab"
                aria-controls="v-pills-profile" aria-selected="false">
                Pending Allocation
            </a>
        </div> -->

        <!-- All  Table  start-->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">New Allocation</h5>
                <div>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add">
                        <i class="ti ti-plus me-1"></i> <span> Add </span>
                    </button>
                    <!-- <i class="ti ti-plus" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"></i> -->
                </div>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs nav-justified nav-bordered nav-bordered-success mb-3">
                    <li class="nav-item">
                        <a href="#home-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            <span class="d-md-inline-block">Waiting for Approval</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#profile-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link ">
                            <span class="d-md-inline-block">Pending Allocation</span>
                        </a>
                    </li>

                </ul>
                <div class="tab-content">
                    <!-- Waiting-->
                    <div class="tab-pane show active" id="home-b2">
                        <div class="col-xl-12">

                            <div class="table-responsive">
                                <table class="table table-nowrap datatable table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Type</th>
                                            <th>ID</th>
                                            <th>Legal Type</th>
                                            <th>Title</th>
                                            <th>No. of Case</th>
                                            <th>Cost/Notice</th>
                                            <th>Priority</th>
                                            <th>No. of Days</th>
                                            <th>Allocation Date</th>
                                            <th>Closing Date</th>
                                            <th>Fee Type</th>

                                            <th>Notice Type</th>
                                            <th>Mode</th>
                                            <th>Process Type</th>

                                            <th>Case Type</th>
                                            <th>Sub Case</th>
                                            <th>Product</th>
                                            <th>Advocate</th>
                                            <th>Act</th>
                                            <th>Act Sub Type</th>

                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Advocate</td>
                                            <td>AL-001</td>
                                            <td><span class="badge badge-outline-info">Notice</span></td>
                                            <td>Recovery Notice Batch</td>
                                            <td>25</td>
                                            <td>₹ 500</td>
                                            <td><span class="badge badge-outline-danger">High</span></td>
                                            <td>15</td>
                                            <td>05-02-2026</td>
                                            <td>20-02-2026</td>
                                            <td>Standard</td>

                                            <td>Normal Notice</td>
                                            <td>E-mail, SMS</td>
                                            <td>Only Notice</td>

                                            <td>Civil Case</td>
                                            <td>Civil Suit</td>
                                            <td>Car</td>
                                            <td>Salman</td>
                                            <td>Act 2002</td>
                                            <td>Act 2002/3</td>

                                            <td><span class="badge badge-outline-warning">In Progress</span></td>

                                            <td>
                                                <button class="btn btn-sm btn-edit" data-bs-toggle="modal" data-bs-target="#editModal">
                                                    <i class="ti ti-edit " data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-cancel btn-outline-danger">
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Pending-->
                    <div class="tab-pane " id="profile-b2">
                        <div class="col-xl-12">
                            <!-- Report List -->
                            <div class="table-responsive">
                                <table class="table table-nowrap datatable table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Priority</th>
                                            <th>Date</th>
                                            <th>Allocation ID</th>
                                            <th>Title</th>
                                            <th>Legal Type</th>
                                            <th>Case</th>
                                            <th>Sub Case</th>
                                            <th>Advocate Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="red"></div>
                                            </td>
                                            <td>28-10-2025</td>
                                            <td>
                                                <a href="pending-Allocation-view.php" class="badge badge-outline-info">
                                                    TID002
                                                </a>
                                            </td>
                                            <td>Legal Notice</td>
                                            <td>Case</td>
                                            <td>Civil Case</td>
                                            <td>Summary Suit</td>
                                            <td>Salman</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-xs" data-bs-toggle="modal" data-bs-target="#editModal">
                                                    Open
                                                </a>
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
    </div>
    <!-- All  Table end -->
    <!-- end card -->
</div>
<!-- end col -->
</div>



<script>
    const numCase = document.getElementById("numCase");
    const costPerNotice = document.getElementById("costPerNotice");
    const totalAmount = document.getElementById("totalAmount");

    const feeStandard = document.getElementById("feeStandard");
    const feeOptional = document.getElementById("feeOptional");


    // ---- Default load (Standard) ----
    window.onload = function() {
        setStandardFee();
    };


    // When Fee type changes
    feeStandard.addEventListener("change", setStandardFee);
    feeOptional.addEventListener("change", setOptionalFee);


    // When values entered
    numCase.addEventListener("input", calculateTotal);
    costPerNotice.addEventListener("input", calculateTotal);


    // -------- FUNCTIONS --------

    function setStandardFee() {
        costPerNotice.value = 3000;
        costPerNotice.readOnly = true;
        calculateTotal();
    }

    function setOptionalFee() {
        costPerNotice.value = "";
        costPerNotice.readOnly = false;
        totalAmount.value = "";
    }

    function calculateTotal() {

        let cases = parseFloat(numCase.value);
        let cost = parseFloat(costPerNotice.value);

        if (!isNaN(cases) && !isNaN(cost)) {
            totalAmount.value = cases * cost;
        } else {
            totalAmount.value = "";
        }
    }
</script>

<script>
    function initCalculator(id) {

        const numCase = document.getElementById("numCase" + id);
        const costPerNotice = document.getElementById("costPerNotice" + id);
        const totalAmount = document.getElementById("totalAmount" + id);
        const feeStandard = document.getElementById("feeStandard" + id);
        const feeOptional = document.getElementById("feeOptional" + id);

        // default
        setStandard();

        feeStandard.addEventListener("change", setStandard);
        feeOptional.addEventListener("change", setOptional);

        numCase.addEventListener("input", calculate);
        costPerNotice.addEventListener("input", calculate);

        function setStandard() {
            costPerNotice.value = 3000;
            costPerNotice.readOnly = true;
            calculate();
        }

        function setOptional() {
            costPerNotice.value = "";
            costPerNotice.readOnly = false;
            totalAmount.value = "";
        }

        function calculate() {
            let cases = parseFloat(numCase.value);
            let cost = parseFloat(costPerNotice.value);

            if (!isNaN(cases) && !isNaN(cost)) {
                totalAmount.value = cases * cost;
            } else {
                totalAmount.value = "";
            }
        }
    }


    // initialize both sections
    initCalculator(1);
    initCalculator(2);
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        /* ================= ELEMENTS ================= */

        const legalType = document.getElementById("legal-type");
        const caseCard = document.getElementById("caseCard");
        const litigationBox = document.getElementById("litigationBox");
        const litigationType = document.getElementById("litigation-type");

        const noticeFields = document.querySelectorAll(".Notice");
        const subcaseSelects = document.querySelectorAll(".subcase-create");

        const AdvocateBox = document.getElementById("AdvocateBox");
        const ProductBox = document.getElementById("ProductBox");

        const convertCaseBox = document.getElementById("convertCaseBox");
        const downloadBox = document.getElementById("downloadBox");
        const uploadBox = document.getElementById("uploadBox");

        const advocateAgentBox = document.getElementById("advocateAgentBox");
        const AdvocateSarfaesi = document.getElementById("AdvocateSarfaesi");
        const AgentSarfaesi = document.getElementById("AgentSarfaesi");

        const advocateRadios = document.querySelectorAll('input[name="advocateAgent"]');

        let sarfaesiSubcase = "";

        /* ================= RESET ================= */

        function resetAll() {

            noticeFields.forEach(el => el.classList.add("d-none"));

            caseCard.classList.add("d-none");
            litigationBox.classList.add("d-none");

            AdvocateBox.classList.add("d-none");
            ProductBox.classList.add("d-none");

            convertCaseBox.classList.add("d-none");
            downloadBox.classList.add("d-none");
            uploadBox.classList.add("d-none");

            advocateAgentBox.classList.add("d-none");
            AdvocateSarfaesi.classList.add("d-none");
            AgentSarfaesi.classList.add("d-none");

            subcaseSelects.forEach(el => el.classList.add("d-none"));
        }

        /* ================= SHOW SUBCASE ================= */

        function showSubcase(type) {
            subcaseSelects.forEach(el => el.classList.add("d-none"));
            const target = document.querySelector('.subcase-create[data-type="' + type + '"]');
            if (target) target.classList.remove("d-none");
        }

        /* ================= SET LITIGATION OPTIONS ================= */

        function setLitigationOptions(options) {
            litigationType.innerHTML = '<option value="">Select</option>';
            options.forEach(opt => {
                const o = document.createElement("option");
                o.value = opt.value;
                o.textContent = opt.text;
                litigationType.appendChild(o);
            });
        }

        /* ================= LEGAL TYPE CHANGE ================= */

        legalType.addEventListener("change", function() {

            resetAll();
            const value = this.value;

            if (value === "Notice") {
                noticeFields.forEach(el => el.classList.remove("d-none"));
                return;
            }

            if (value === "CivilCase" || value === "ArbitrationCase") {
                caseCard.classList.remove("d-none");
                litigationBox.classList.remove("d-none");
                ProductBox.classList.remove("d-none");

                showSubcase(value);

                setLitigationOptions([{
                        value: "Notice",
                        text: "Notice"
                    },
                    {
                        value: "case",
                        text: "Case"
                    }
                ]);
                return;
            }

            /* ===== CRIMINAL CASE (AGAINST CASE) ===== */
            if (value === "CriminalCase") {
                caseCard.classList.remove("d-none");
                litigationBox.classList.remove("d-none");
                ProductBox.classList.remove("d-none");

                showSubcase(value);

                setLitigationOptions([{
                    value: "case",
                    text: "Case"
                }]);
                return;
            }

            /* ===== SARFAESI ===== */
            if (value === "SarfaesiCase") {
                caseCard.classList.remove("d-none");
                litigationBox.classList.remove("d-none");
                ProductBox.classList.remove("d-none");

                showSubcase(value);

                setLitigationOptions([{
                        value: "Notice",
                        text: "Notice"
                    },
                    {
                        value: "case",
                        text: "Case"
                    }
                ]);
            }

        });

        /* ================= SUBCASE CHANGE ================= */

        subcaseSelects.forEach(select => {
            select.addEventListener("change", function() {

                const value = this.value.trim();
                const type = this.dataset.type;

                advocateAgentBox.classList.add("d-none");
                AdvocateSarfaesi.classList.add("d-none");
                AgentSarfaesi.classList.add("d-none");

                /* ===== CRIMINAL CASE ALWAYS CASE ===== */
                if (legalType.value === "CriminalCase") {
                    setLitigationOptions([{
                        value: "case",
                        text: "Case"
                    }]);
                    return;
                }

                /* ===== SARFAESI SPECIAL ===== */
                if (type === "SarfaesiCase") {

                    sarfaesiSubcase = value;

                    if (value === "Sarfaesi Case") {
                        setLitigationOptions([{
                            value: "Notice",
                            text: "Notice"
                        }]);
                        return;
                    }

                    if (
                        value === "Execution" ||
                        value === "Sec 14 of Sarfaesi" ||
                        value === "Sec 17 of DRT (SA)"
                    ) {
                        setLitigationOptions([{
                            value: "case",
                            text: "Case"
                        }]);
                        return;
                    }
                }

                sarfaesiSubcase = "";
                setLitigationOptions([{
                        value: "Notice",
                        text: "Notice"
                    },
                    {
                        value: "case",
                        text: "Case"
                    }
                ]);

            });
        });

        /* ================= LITIGATION TYPE CHANGE ================= */

        // litigationType.addEventListener("change", function() {

        //     const value = this.value;
        //     const currentLegal = legalType.value;

        //     AdvocateBox.classList.add("d-none");
        //     convertCaseBox.classList.add("d-none");
        //     downloadBox.classList.add("d-none");
        //     uploadBox.classList.add("d-none");
        //     advocateAgentBox.classList.add("d-none");
        //     AdvocateSarfaesi.classList.add("d-none");
        //     AgentSarfaesi.classList.add("d-none");

        //     if (currentLegal === "SarfaesiCase") {

        //         if (sarfaesiSubcase === "Sarfaesi Case" && value === "Notice") {
        //             advocateAgentBox.classList.remove("d-none");
        //             AdvocateSarfaesi.classList.remove("d-none");
        //             return;
        //         }

        //         if (sarfaesiSubcase === "Execution" && value === "case") {
        //             advocateAgentBox.classList.remove("d-none");
        //             AdvocateSarfaesi.classList.remove("d-none");
        //             return;
        //         }

        //         if (
        //             sarfaesiSubcase === "Sec 14 of Sarfaesi" ||
        //             sarfaesiSubcase === "Sec 17 of DRT (SA)"
        //         ) {
        //             AdvocateBox.classList.remove("d-none");
        //             convertCaseBox.classList.remove("d-none");
        //             downloadBox.classList.remove("d-none");
        //             uploadBox.classList.remove("d-none");
        //             return;
        //         }

        //         return;
        //     }


        //     if (value === "Notice") {
        //         AdvocateBox.classList.remove("d-none");

        //         if (currentLegal === "CivilCase") {
        //             noticeFields.forEach(el => el.classList.remove("d-none"));
        //         }

        //         return;
        //     }

        //     if (value === "case") {

        //         AdvocateBox.classList.remove("d-none");

        //         if (currentLegal === "CivilCase") {
        //             convertCaseBox.classList.remove("d-none");
        //             downloadBox.classList.remove("d-none");
        //             uploadBox.classList.remove("d-none");
        //         }


        //         if (currentLegal === "CriminalCase") {
        //             downloadBox.classList.remove("d-none");
        //             uploadBox.classList.remove("d-none");
        //         }

        //         if (currentLegal === "ArbitrationCase") {
        //             downloadBox.classList.remove("d-none");
        //             uploadBox.classList.remove("d-none");
        //         }
        //     }

        // });
        litigationType.addEventListener("change", function() {

            const value = this.value;
            const currentLegal = legalType.value;

            /* 🔥 ALWAYS HIDE NOTICE FIELDS FIRST */
            noticeFields.forEach(el => el.classList.add("d-none"));

            AdvocateBox.classList.add("d-none");
            convertCaseBox.classList.add("d-none");
            downloadBox.classList.add("d-none");
            uploadBox.classList.add("d-none");
            advocateAgentBox.classList.add("d-none");
            AdvocateSarfaesi.classList.add("d-none");
            AgentSarfaesi.classList.add("d-none");

            /* ===== SARFAESI ===== */
            if (currentLegal === "SarfaesiCase") {

                if (sarfaesiSubcase === "Sarfaesi Case" && value === "Notice") {
                    advocateAgentBox.classList.remove("d-none");
                    AdvocateSarfaesi.classList.remove("d-none");
                    return;
                }

                if (sarfaesiSubcase === "Execution" && value === "case") {
                    advocateAgentBox.classList.remove("d-none");
                    AdvocateSarfaesi.classList.remove("d-none");
                    return;
                }

                if (
                    sarfaesiSubcase === "Sec 14 of Sarfaesi" ||
                    sarfaesiSubcase === "Sec 17 of DRT (SA)"
                ) {
                    AdvocateBox.classList.remove("d-none");
                    convertCaseBox.classList.remove("d-none");
                    downloadBox.classList.remove("d-none");
                    uploadBox.classList.remove("d-none");
                    return;
                }

                return;
            }

            /* ===== NORMAL TYPES ===== */

            if (value === "Notice") {

                AdvocateBox.classList.remove("d-none");

                if (currentLegal === "CivilCase") {
                    noticeFields.forEach(el => el.classList.remove("d-none"));
                }

                return;
            }

            if (value === "case") {

                AdvocateBox.classList.remove("d-none");

                if (currentLegal === "CivilCase") {
                    convertCaseBox.classList.remove("d-none");
                    downloadBox.classList.remove("d-none");
                    uploadBox.classList.remove("d-none");
                }

                if (currentLegal === "CriminalCase" || currentLegal === "ArbitrationCase") {
                    downloadBox.classList.remove("d-none");
                    uploadBox.classList.remove("d-none");
                }
            }

        });

        /* ================= RADIO CHANGE ================= */

        advocateRadios.forEach(radio => {
            radio.addEventListener("change", function() {
                AdvocateSarfaesi.classList.add("d-none");
                AgentSarfaesi.classList.add("d-none");

                if (this.value === "advocate") {
                    AdvocateSarfaesi.classList.remove("d-none");
                } else {
                    AgentSarfaesi.classList.remove("d-none");
                }
            });
        });

        /* INITIAL */
        resetAll();

    });
</script>


<script>
    const noticeProcessType = document.getElementById('noticeProcessType');

    if (noticeProcessType) {
        noticeProcessType.addEventListener('change', function() {

            const value = this.value;
            const caseSections = document.querySelectorAll('.case-section');

            if (value === "Only Notice") {
                caseSections.forEach(el => el.classList.add('d-none'));
            } else if (value === "Convert to Case") {
                caseSections.forEach(el => el.classList.remove('d-none'));
            }
        });
    }
</script>


<script>
    const litigationType = document.getElementById("litigation-type");

    const lblCost = document.getElementById("lblCost");
    const lblCount = document.getElementById("lblCount");

    const costInput = document.getElementById("costPerNotice");
    const numInput = document.getElementById("numCase");

    function setNoticeLabels() {
        lblCost.innerHTML = 'Cost Per Notice <span class="text-danger">*</span>';
        lblCount.innerHTML = 'Number Of Notice <span class="text-danger">*</span>';

        costInput.placeholder = "Cost Per Notice";
        numInput.placeholder = "Number Of Notice";
    }

    function setCaseLabels() {
        lblCost.innerHTML = 'Cost Per Case <span class="text-danger">*</span>';
        lblCount.innerHTML = 'Number Of Case <span class="text-danger">*</span>';

        costInput.placeholder = "Cost Per Case";
        numInput.placeholder = "Number Of Case";
    }

    /* Litigation Type decides label */
    function updateLabels() {

        const value = litigationType.value;

        // Notice group
        if (value === "Notice" || value === "sarfaesi") {
            setNoticeLabels();
        }

        // Case group
        else if (
            value === "case" ||
            value === "Section14" ||
            value === "SA" ||
            value === "Auction"
        ) {
            setCaseLabels();
        }
    }

    litigationType.addEventListener("change", updateLabels);

    window.addEventListener("load", updateLabels);
</script>


<?php include 'footer.php'; ?>
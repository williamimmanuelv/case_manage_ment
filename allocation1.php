<?php include 'header.php'; ?>



<div class="row">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title">New Allocation</h5>
                <div class="radio-btn mx-auto" style="display: flex; justify-content: center; gap: 60px;">
                    <div class="input-box" style="display: flex; align-items: center; gap: 10px;">
                        <input type="radio" id="rad1" name="loginType" value="otp" checked>
                        <h6 style="margin-bottom: unset;">Advocate</h6>
                    </div>
                    <div class="input-box" style="display: flex; align-items: center; gap: 10px;">
                        <input type="radio" id="rad2" name="loginType" value="uname">
                        <h6 style="margin-bottom: unset;">Agent</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <div class="tab-content">
                    <div id="otpTab" class="tab-pane active">
                        <div class="card card-case">
                            <div class="card-body">
                                <h5>Allocation Details</h5>

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label for="input-label" class="form-label">ID</label>
                                        <input type="text" class="form-control" placeholder="ID" />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Legal Type <span style="color:red;">*</span></label>
                                        <select class="form-select" id="legal-type">
                                            <option>Select</option>
                                            <option value="Notice">Notice</option>
                                            <option value="Case">Litigation By Case</option>
                                            <option value="Arbitration Case">Litigation Against Case</option>
                                            <option value="Sarfaesi Case">Litigation Case EP</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" placeholder="Title">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Number Of Case <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Number Of Case">
                                    </div>

                                     <div class="col-md-6">
                                        <label class="form-label">Fee</label>
                                        <div class="mt-1">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="customRadio2" name="customRadio" class="form-check-input" checked>
                                                <label class="form-check-label" for="customRadio2">Standard</label>
                                            </div>
                                            <div class="form-check mb-1 form-check-inline">
                                                <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                                <label class="form-check-label" for="customRadio1">Optional</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Cost Per Notice <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Cost Per Notice">
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
                                        <label class="form-label">Number Of Days <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Number Of Days">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Allocation Date</label>
                                        <input type="date" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Closing Date</label>
                                        <input type="date" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Attachment</label>
                                        <input type="file" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Description</label>
                                        <textarea rows="2" class="form-control" placeholder="Enter Description"></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-case casebox Notice d-none">
                            <div class="card-body">
                                <h5>Notice Details</h5>

                                <div class="row g-3 ">

                                    <div class="col-md-6">
                                        <label class="form-label">Notice Type <span style="color:red;">*</span></label>
                                        <select class="form-select">
                                            <option value="">Select</option>
                                            <option value="normal-notice">Normal Notice</option>
                                            <option value="conciliation-notice">Conciliation Notice</option>
                                            <option value="lok-adalat-notice">Lok Adalat Notice</option>
                                            <option value="mediation-notice">Mediation Notice</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Mode Of Notice</label>
                                        <select class="form-control" multiple data-choices data-choices-removeItem>
                                            <option selected>Select</option>
                                            <option value="E-mail">E-mail</option>
                                            <option value="SMS">SMS</option>
                                            <option value="Whatsapp">Whatsapp</option>
                                            <option value="Speed Post">Speed Post</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Notice Process Type </label>
                                        <select class="form-select" id="noticeProcessType">
                                            <option>Select</option>
                                            <option value="Only Notice">Only Notice</option>
                                            <option value="Convert to Case">Convert to Case</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-case d-none" id="caseCard">
                            <div class="card-body">
                                <h5>Case Details</h5>

                                <div class="row g-3">

                                    <div class="col-md-6 case-section">
                                        <label class="form-label">Case Type <span style="color:red;">*</span></label>
                                        <select class="form-select" id="caseType_create">
                                            <option value="">Select</option>
                                            <option value="CivilCase">Civil Case</option>
                                            <option value="CriminalCase">Criminal Case</option>
                                            <option value="ArbitrationCase">Arbitration Case</option>
                                            <option value="DRTCase">DRT Case</option>
                                            <option value="NACLTCase">NACLT Case</option>
                                            <option value="ConsumerCase">Consumer Case</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 case-section">
                                        <label class="form-label">Sub Case Type <span style="color:red;">*</span></label>
                                        <select class="form-select subcase-create" data-type="default">
                                            <option value="">Select</option>
                                        </select>

                                        <select class="form-select subcase-create d-none" data-type="CivilCase">
                                            <option value="">Select</option>
                                            <option value="civil-suit">Civil Suit</option>
                                            <option value="summary-suit">Summary Suit</option>
                                            <option value="against-case">Against Case</option>
                                            <option value="ep">EP</option>
                                            <option value="insolvency-petition">Insolvency Petition</option>
                                        </select>

                                        <select class="form-select subcase-create d-none" data-type="CriminalCase">
                                            <option value="">Select</option>
                                            <option value="section-138">Section 138</option>
                                            <option value="section-25">Section 25</option>
                                            <option value="section-406">Section 406,420</option>
                                            <option value="return-of-property">Return Of Property</option>
                                            <option value="bail">Bail</option>
                                            <option value="anticipatory-bail">Anticipatory Bail</option>
                                            <option value="sec-156">Sec 156 (3)</option>
                                            <option value="quash-petition">Quash Petition</option>
                                        </select>

                                        <select class="form-select subcase-create d-none" data-type="ArbitrationCase">
                                            <option value="">Select</option>
                                            <option value="Section21">Section 21</option>
                                            <option value="Section11">Section 11</option>
                                            <option value="Section17">Section 17</option>
                                            <option value="Section34">Section 34</option>
                                            <option value="EP">EP</option>
                                        </select>

                                        <select class="form-select subcase-create d-none" data-type="DRTCase">
                                            <option value="">Select</option>
                                            <option value="Section18">Section 18</option>
                                            <option value="Section19">Section 19</option>
                                            <option value="Writ">Writ</option>
                                        </select>

                                        <select class="form-select subcase-create d-none" data-type="NACLTCase">
                                            <option value="">Select</option>
                                        </select>

                                        <select class="form-select subcase-create d-none" data-type="ConsumerCase">
                                            <option value="">Select</option>
                                            <option value="DistrictCase">District Case</option>
                                            <option value="StateCase">State Case</option>
                                            <option value="EP">EP</option>
                                            <option value="NationalCase">National Case</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Product <span style="color:red;">*</span></label>
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option value="Car">Car</option>
                                            <option value="Personal Loan">Personal Loan</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Advocate Name <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Advocate Name">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Advocate Stage <span style="color:red;">*</span></label>
                                        <select class="form-select">
                                            <option value="Pre Sarfaesi">Pre Sarfaesi</option>
                                            <option value="Sec 13(3)">Sec 13(3)</option>
                                            <option value="Sec 13(3A)">Sec 13(3A)</option>
                                            <option value="Sec 14">Sec 14</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 case-section">
                                        <label class="form-label">Act <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Act">
                                    </div>

                                    <div class="col-md-6 case-section">
                                        <label class="form-label">Act Sub Type <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Act Sub Type">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <a href="#" class="btn btn-primary">Create</a>
                            <a href="#" class="btn btn-cancle">Cancel</a>
                        </div>

                    </div>

                    <div id="unameTab" class="tab-pane">
                        <div class="card card-case">
                            <div class="card-body">
                                <h5>Allocation Details</h5>

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label for="input-label" class="form-label">ID</label>
                                        <input type="text" class="form-control" placeholder="ID" />
                                    </div>

                                    <div class="col-md-6">
                                        <label for="input-label" class="form-label">Legal Type <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Sarfaesi Case" />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" placeholder="Title">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Number Of Case <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Number Of Case">
                                    </div>

                                     <div class="col-md-6">
                                        <label class="form-label">Fee</label>
                                        <div class="mt-1">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="customRadio3" name="customRadio1" class="form-check-input" checked>
                                                <label class="form-check-label" for="customRadio3">Standard</label>
                                            </div>
                                            <div class="form-check mb-1 form-check-inline">
                                                <input type="radio" id="customRadio4" name="customRadio1" class="form-check-input">
                                                <label class="form-check-label" for="customRadio4">Optional</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Cost Per Notice <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Cost Per Notice">
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
                                        <label class="form-label">Number Of Days <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Number Of Days">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Allocation Date</label>
                                        <input type="date" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Closing Date</label>
                                        <input type="date" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Attachment</label>
                                        <input type="file" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Description</label>
                                        <textarea rows="2" class="form-control" placeholder="Enter Description"></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-case casebox Notice d-none">
                            <div class="card-body">
                                <h5>Notice Details</h5>

                                <div class="row g-3 ">

                                    <div class="col-md-6">
                                        <label class="form-label">Notice Type <span style="color:red;">*</span></label>
                                        <select class="form-select">
                                            <option value="">Select</option>
                                            <option value="normal-notice">Normal Notice</option>
                                            <option value="conciliation-notice">Conciliation Notice</option>
                                            <option value="lok-adalat-notice">Lok Adalat Notice</option>
                                            <option value="mediation-notice">Mediation Notice</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Mode Of Notice</label>
                                        <select class="form-control" multiple data-choices data-choices-removeItem>
                                            <option selected>Select</option>
                                            <option value="E-mail">E-mail</option>
                                            <option value="SMS">SMS</option>
                                            <option value="Whatsapp">Whatsapp</option>
                                            <option value="Speed Post">Speed Post</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Notice Process Type </label>
                                        <select class="form-select" id="noticeProcessType">
                                            <option>Select</option>
                                            <option value="Only Notice">Only Notice</option>
                                            <option value="Convert to Case">Convert to Case</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card card-case">
                            <div class="card-body">
                                <h5>Case Details</h5>

                                <div class="row g-3">

                                    <div class="col-md-6 case-section">
                                        <label class="form-label">Case Type <span style="color:red;">*</span></label>
                                        <select class="form-select" id="caseType_edit">
                                            <option value="">Select</option>
                                            <option value="SarfaesiCase">Sarfaesi Case</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 case-section">
                                        <label class="form-label">Sub Case Type <span style="color:red;">*</span></label>
                                        <select class="form-select subcase-edit" data-type="default">
                                            <option value="">Select</option>
                                        </select>

                                        <select class="form-select subcase-edit d-none" data-type="SarfaesiCase">
                                            <option value="">Select</option>
                                            <option value="Section13-2">Section 13 (2)</option>
                                            <!-- <option value="Section13-4">Section 13 (4)</option>
                                            <option value="Section14">Section 14</option> -->
                                        </select>

                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Product <span style="color:red;">*</span></label>
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option value="Car">Car</option>
                                            <option value="Personal Loan">Personal Loan</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Agent Name <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Agent Name">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Agent Stage<span style="color:red;">*</span></label>
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option value="Section 13(2)">Section 13(2)</option>
                                            <option value="Section 13(4)">Section 13(4)</option>
                                            <option value="Execution Details">Execution Details</option>
                                            <option value="Action">Action</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 case-section">
                                        <label class="form-label">Act <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Act">
                                    </div>

                                    <div class="col-md-6 case-section">
                                        <label class="form-label">Act Sub Type <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Act Sub Type">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <a href="#" class="btn btn-primary">Create</a>
                            <a href="#" class="btn btn-cancle">Cancel</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        function setupModal(caseTypeId, subcaseClass) {

            const caseTypeSelect = document.getElementById(caseTypeId);
            const subcaseBoxes = document.querySelectorAll("." + subcaseClass);
            const defaultBox = document.querySelector(`.${subcaseClass}[data-type="default"]`);

            function show(type) {
                subcaseBoxes.forEach(b => b.classList.add("d-none"));

                if (!type) {
                    defaultBox.classList.remove("d-none");
                    return;
                }

                const match = document.querySelector(`.${subcaseClass}[data-type="${type}"]`);
                if (match) match.classList.remove("d-none");
                else defaultBox.classList.remove("d-none");
            }

            caseTypeSelect.addEventListener("change", () => show(caseTypeSelect.value));

            show(caseTypeSelect.value);
        }

        setupModal("caseType_create", "subcase-create");
        setupModal("caseType_edit", "subcase-edit");

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const subCaseSelects = document.querySelectorAll('#legal-type');

        subCaseSelects.forEach(select => {
            select.addEventListener('change', function() {
                const value = this.value;

                document.querySelectorAll('.casebox').forEach(el => el.classList.add('d-none'));
                document.querySelectorAll('.caseField').forEach(el => el.classList.add('d-none'));

                const extraCol = document.querySelector('.extra-col');
                if (extraCol) extraCol.classList.add('d-none');

                if (value) {

                    document.querySelectorAll('.' + value).forEach(el => el.classList.remove('d-none'));

                    const hasCasebox = document.querySelectorAll('.casebox.' + value).length > 0;
                    if (!hasCasebox) {
                        document.querySelectorAll('.caseField.' + value).forEach(el => el.classList.remove('d-none'));
                    }

                    const visibleBoxes = document.querySelectorAll('.' + value + ':not(.d-none)');
                    if (visibleBoxes.length > 0 && extraCol) {
                        extraCol.classList.remove('d-none');
                    }
                }
            });
        });
    });
    document.addEventListener('DOMContentLoaded', function() {

        const legalType = document.getElementById('legal-type');
        const noticeProcessType = document.getElementById('noticeProcessType');
        const caseCard = document.getElementById('caseCard');

        function toggleCaseCard() {

            const legalValue = legalType.value;
            const noticeValue = noticeProcessType ? noticeProcessType.value : "";

            caseCard.classList.add('d-none');
            if (
                legalValue === "Case" ||
                legalValue === "Arbitration Case" ||
                legalValue === "Sarfaesi Case" ||
                (legalValue === "Notice" && noticeValue === "Convert to Case")
            ) {
                caseCard.classList.remove('d-none');
            }
        }

        if (legalType) {
            legalType.addEventListener('change', toggleCaseCard);
        }

        if (noticeProcessType) {
            noticeProcessType.addEventListener('change', toggleCaseCard);
        }

    });
</script>

<script>
    const otpRadio = document.getElementById("rad1");
    const unameRadio = document.getElementById("rad2");
    const otpTab = document.getElementById("otpTab");
    const unameTab = document.getElementById("unameTab");

    function updateTabs() {
        if (otpRadio.checked) {
            otpTab.classList.add("active");
            unameTab.classList.remove("active");
        } else if (unameRadio.checked) {
            unameTab.classList.add("active");
            otpTab.classList.remove("active");
        }
    }

    otpRadio.addEventListener("change", updateTabs);
    unameRadio.addEventListener("change", updateTabs);

    updateTabs();
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

<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>

<div class="d-flex align-items-center">
    <a href="invoice-report.php" class="mb-3 text-primary" style="font-weight: 600;"> <i class="ti ti-arrow-left mt-0" style="font-size: 16px;font-weight: 600;"></i> Go Back </a>
</div>

<div class="row">
    <div class="col-xl-12">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title mb-0"> Invoice Creation</h5>

            </div>
            <div class="card-body">
                <div class="card card-case">
                    <div class="card-body">

                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4">
                                <label for="cnr" class="form-label">Invoice ID</label>
                                <input type="text" class="form-control" value="Invoice ID" autocomplete="off">
                            </div>
                        </div>

                        <div class="row g-4 mt-2">

                            <div class="col-md-6 col-lg-4">
                                <label for="cnr" class="form-label">Legal Type</label>
                                <select class="form-select" id="example-select">
                                    <option>Invoice (0 to 90)</option>
                                    <option>Litigation</option>
                                    <option>Pre Litigation</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <label for="cnr" class="form-label">Type Of Case</label>
                                <select class="form-select" id="example-select">
                                    <option value="">Select Loan No</option>
                                    <option value="Civil Case">Civil Case</option>
                                    <option value="Criminal Case">Criminal Case</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <label for="cnr" class="form-label">Allocation No</label>
                                <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                    <option value="">Select Allocation No</option>
                                    <option value="Allot001">Allot001</option>
                                    <option value="Allot002">Allot002</option>
                                    <option value="Allot003">Allot003</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <label for="cnr" class="form-label">Loan No</label>
                                <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                    <option value="">Select Loan No</option>
                                    <option value="Loa001">Loa001</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-lg-4 mt-5">
                                <button class="btn btn-sm btn-primary me-2">
                                    <i class="ti ti-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-case">
                    <div class="card-body">
                        <h5>Basic Details</h5>
                        <div class="row g-4">

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Customer ID</label>
                                <input type="text" class="form-control" value="Customer ID" autocomplete="off">
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Customer Name</label>
                                <input type="text" class="form-control" value="Salman" autocomplete="off">
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label for="cnr" class="form-label">Invoice Category</label>
                                <select class="form-select" id="example-select">
                                    <option value="">Select Loan No</option>
                                    <option value="Inidial">Inidial</option>
                                    <option value="Billing">Billing</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label for="cnr" class="form-label">Invoice Sub Category</label>
                                <select class="form-select">
                                    <option value="">Invoice Sub 1</option>
                                    <option value="">Invoice Sub 2</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Bill Amount</label>
                                <input type="text" class="form-control" id="billAmount" value="1000" readonly>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Nature</label>
                                <select class="form-select" id="caseNature">
                                    <option selected value="Fresh">Actual</option>
                                    <option value="Appeal">Professional</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4 caseFields d-none">
                                <label class="form-label">TDS (10%)</label>
                                <input type="text" class="form-control" id="tdsAmount" readonly>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Bill To</label>
                                <select class="form-select" id="billTo">
                                    <option value="DSR">DSR</option>
                                    <option value="SS">SS</option>
                                    <option value="Jails">Jails</option>
                                    <option value="JailsLLP">JailsLLP</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">GST Amount (18%)</label>
                                <input type="text" class="form-control" id="gstAmount" readonly>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Total Amount</label>
                                <input type="text" class="form-control" id="totalAmount" readonly>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Castegory Cost</label>
                                <input type="text" class="form-control" placeholder="Castegory Cost" autocomplete="off">
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Notice or Case Cost</label>
                                <input type="text" class="form-control" placeholder="Notice or case cost" autocomplete="off">
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Bill No</label>
                                <input type="text" class="form-control" placeholder="Bill No" autocomplete="off">
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Bill Date</label>
                                <input type="date" class="form-control" autocomplete="off">
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label for="cnr" class="form-label">Bank Details </label>
                                <input type="text" class="form-control" value="SBI-87587473689-SBI0016543" autocomplete="off">
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Remarks</label>
                                <textarea class="form-control" placeholder="Remarks" rows="2" autocomplete="off"></textarea>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <label class="form-label">Attachment</label>
                                <input type="file" class="form-control" autocomplete="off">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12 text-end">
                                <a href="#" class="btn btn-primary me-2">Create</a>
                                <a href="#" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end card-body -->
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        const billAmountEl = document.getElementById("billAmount");
        const caseNatureEl = document.getElementById("caseNature");
        const billToEl = document.getElementById("billTo");

        const tdsField = document.querySelector(".caseFields");
        const tdsAmountEl = document.getElementById("tdsAmount");
        const gstAmountEl = document.getElementById("gstAmount");
        const totalAmountEl = document.getElementById("totalAmount");

        function calculate() {
            const billAmount = parseFloat(billAmountEl.value) || 0;
            let tds = 0;
            let gst = 0;

            if (caseNatureEl.value === "Appeal") {
                tds = billAmount * 0.10;
                tdsField.classList.remove("d-none");
            } else {
                tdsField.classList.add("d-none");
            }

            if (billToEl.value === "Jails" || billToEl.value === "JailsLLP") {
                gst = billAmount * 0.18;
            }

            const total = billAmount - tds + gst;

            tdsAmountEl.value = tds.toFixed(2);
            gstAmountEl.value = gst.toFixed(2);
            totalAmountEl.value = total.toFixed(2);
        }

        caseNatureEl.addEventListener("change", calculate);
        billToEl.addEventListener("change", calculate);

        calculate();
    });
</script>

<?php include 'footer.php'; ?>
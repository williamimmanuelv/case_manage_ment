<?php include 'header.php'; ?>



<!-- start row -->
<div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Invoice Receipt</h5>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="row ">
                                        <label class="col-lg-4 mb-3 form-label">Invoice ID
                                        </label>
                                        <div class="col-lg-8 mb-3">
                                            <input type="text" class="form-control" placeholder="Inv001">
                                        </div>
                                        <label class="col-lg-4 mb-3 form-label">Invoice Category</label>
                                        <div class="col-lg-8 mb-3">
                                            <select id="caseType" class="form-select">
                                                <option value="">Invoice </option>
                                                <option value="Category 1">Category 1</option>
                                                <option value="Category 2">Category 2</option>
                                            </select>
                                        </div>
                                        <label class="col-lg-4 mb-3 form-label">Invoice Sub Category</label>
                                        <div class="col-lg-8 mb-3">
                                            <select id="caseType" class="form-select">
                                                <option value="">Invoice </option>
                                                <option value="SubCategory 1">Sub Category 1</option>
                                                <option value="SubCategory 2">Sub Category 2</option>
                                            </select>
                                        </div>
                                        <label class="col-lg-4 mb-3 form-label">Payment Type</label>
                                        <div class="col-lg-8 mb-3">
                                            <select id="caseType" class="form-select">
                                                <option value="">Payment </option>
                                                <option value="Case">Case</option>
                                                <option value="UPI">UPI</option>
                                                <option value="Net Banking">Net Banking</option>
                                            </select>
                                        </div>
                                        
                                        <label class="col-lg-4 mb-3 form-label">Particular</label>
                                        <div class="col-lg-8 mb-3">
                                            <textarea rows="4" cols="5" class="form-control"
                                                placeholder="Enter Particular"></textarea>
                                        </div>
                                        <label for="formFileMultiple"
                                            class="col-lg-4 mb-3 form-label">Attachment</label>
                                        <div class="col-lg-8 mb-3">
                                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                                        </div>

                                    </div>
                                    <div class="text-end">
                                        <a href="" class="btn btn-primary">Create</a>
                                        <a href="" class="btn btn-cancle">Cancel</a>
                                    </div>
                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
<!-- end row -->


<script>
 document.querySelectorAll(".dropdown-check-list").forEach(function (list) {
  var anchor = list.querySelector(".anchor");
  anchor.addEventListener("click", function () {
    list.classList.toggle("visible");
  });
});
</script>


<?php include 'footer.php'; ?>
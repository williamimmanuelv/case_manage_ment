<?php include 'header.php'; ?>


<div class=" border-0 rounded-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>TID002</h4>
                </div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <p>
                                <strong>Allocation ID #</strong><span>TID002</span>
                            </p>
                            <p>
                                <strong>Create Date:</strong> <span> 06-10-2025</span>
                            </p>
                            <p><strong>Priority :</strong><span> High</span></p>
                            <p><strong>Title:</strong><span> Title 1</span></p>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <span class="ticket-label">Case Type :</span>
                                <span id="txt_tic_project">Civil Case</span>
                            </p>
                            <p>
                                <span class="ticket-label">Sub Case Type :</span>
                                <span id="txt_tic_name">Summary Suit</span>
                            </p>
                            <p>
                                <span class="ticket-label">Advocate Name :</span>
                                <span id="txt_tic_mob">Advocate One</span>
                            </p>
                            <p>
                                <span class="ticket-label">Allocation Status :</span>
                                <span id="txt_tic_priority">Open</span>
                            </p>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <span class="ticket-label">Age :</span>
                                <span>06-10-2025</span>
                            </p>
                            <p>
                                <span class="ticket-label">Close Reason :</span>
                                <span>Case Closed</span>
                            </p>
                            <p>
                                <span class="ticket-label">Close Date :</span>
                                <span> 06-10-2025</span>
                            </p>
                        </div>
                    </div>

                    <div id="message_container" class="mb-3">
                        <div class="mb-3">
                            <div class="client p-2">
                                Monday, October 28, 2025 at 5:24 PM
                            </div>
                            <div class="message-box">
                                <p class="Attachments">
                                    <a href="#" target="_blank">1_TID002_DocScanner Sep 30</a>
                                </p>
                                <p class="Attachments">
                                    <a href="#" target="_blank">2025 12-28 PM (1).pdf</a>
                                </p>
                                <p>sdsadasd dfsdfsdfsdf</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="support">
                                Wednesday, October 28, 2025 at 2:46 PM
                            </div>
                            <div class="message-box">
                                <p class="Attachments">No attachments</p>
                                <p>sd</p>
                            </div>
                        </div>
                        <div class="row " id="txt_message_enter">
                            <div class="col-md-6 mx-auto card">
                                <div class="card-body">
                                    <h5> Reply Message</h5>
                                    <form>
                                        <div class="mb-3">
                                            <label for="txt_message" class="form-label">Your Message</label>
                                            <textarea class="form-control" id="txt_message" rows="4" placeholder="Type your reply here..."></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="txt_upload" class="form-label">Attach a File</label>
                                            <input class="form-control" type="file" id="txt_upload">
                                        </div>
                                        <div class="text-end">
                                            <button type="button" id="btn_send" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>



<style>
  .calendar-container {
    background: #fff;
    border-radius: 10px;
  }

  .fc-toolbar-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #343a40;
  }

  .fc .fc-daygrid-day-number {
    color: #0d6efd;
    font-weight: 500;
  }

  .fc .fc-daygrid-day.fc-day-today {
    background-color: #fff3cd;
  }

  .fc .fc-col-header-cell-cushion {
    color: black;
    /* background-color: #0d6efd; */
    padding: 8px;
    border-radius: 4px;
  }

  .fc-event {
    background-color: #0d6efd;
    border: none;
    font-size: 0.85rem;
    padding: 2px 4px;
  }

  .offcanvas-small {
    max-width: 400px !important;
    width: 100% !important;
    background-color: var(--white);
    border-left: var(--border-color) !important;
  }
</style>


<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Calendar</h5>
      </div>
      <div class="card-body">
        <div class="calendar-container">
          <div id="calendar"></div>
        </div>
      </div>
      <!-- end card-body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>

<!-- Modal -->


<div class="offcanvas offcanvas-small offcanvas-end " tabindex="-1" id="eventModal" style="width: 400px;">
  <div class="offcanvas-header border-bottom">
    <h5 class="mb-0">Save Event</h5>
    <button type="button"
      class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
      data-bs-dismiss="offcanvas" aria-label="Close">
    </button>
  </div>
  <div class="offcanvas-body">

    <form id="eventForm">
      <div class="mb-3">
        <label for="eventTitle" class="form-label">Subject</label>
        <input type="text" class="form-control" id="eventTitle" required>
      </div>

      <div class="mb-3">
        <label for="eventStart" class="form-label">Start</label>
        <input type="date" class="form-control" id="eventStart" required>
      </div>

      <div class="mb-3">
        <label for="remainderType" class="form-label">Reminder Type</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="remainderType" id="none" value="None" checked>
          <label class="form-check-label" for="none">None</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="remainderType" id="yearly" value="Yearly">
          <label class="form-check-label" for="yearly">Yearly</label>
        </div>
      </div>

      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="fullDay">
        <label class="form-check-label" for="fullDay">Is Full Day Event</label>
      </div>

      <div class="mb-3">
        <label for="eventEnd" class="form-label">End</label>
        <input type="date" class="form-control" id="eventEnd" required>
      </div>

      <div class="mb-3">
        <label for="eventDescription" class="form-label">Description</label>
        <textarea class="form-control" id="eventDescription" rows="3"></textarea>
      </div>
    </form>
    <div class="d-flex gap-2 mt-3 justify-content-end">
      <button type="button" class="btn btn-sm btn-outline-danger" data-bs-dismiss="offcanvas">Close</button>
      <button type="button" class="btn btn-sm btn-primary" id="saveEvent">Save</button>

    </div>
  </div>
</div>

<!-- jQuery -->
<script src="assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>


<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var modal = new bootstrap.Offcanvas(document.getElementById('eventModal'));
    var eventForm = document.getElementById('eventForm');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      height: 'auto',
      selectable: true,
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      dateClick: function(info) {
        document.getElementById('eventStart').value = info.dateStr;
        document.getElementById('eventEnd').value = info.dateStr;
        modal.show();
      }
    });

    calendar.render();

    // Save Event
    document.getElementById('saveEvent').addEventListener('click', function() {
      var title = document.getElementById('eventTitle').value;
      var start = document.getElementById('eventStart').value;
      var end = document.getElementById('eventEnd').value;
      var description = document.getElementById('eventDescription').value;

      if (title && start && end) {
        calendar.addEvent({
          title: title,
          start: start,
          end: end,
          description: description
        });
        modal.hide();
        eventForm.reset();
      } else {
        alert('Please fill in all required fields!');
      }
    });
  });
</script>





<?php include 'footer.php'; ?>
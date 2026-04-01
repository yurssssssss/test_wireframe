<?php $pageTitle = 'Student Portal – DPNHS'; ?>
<?php include 'header.php'; ?>


<div class="bg-white border-bottom d-flex align-items-center justify-content-between px-4 py-2 sticky-top" style="z-index:100">
  <div class="d-flex align-items-center gap-2">
    <!-- Sidebar toggle button (visible on mobile only) -->
    <button class="btn btn-sm d-lg-none me-1 p-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#studentSidebar" aria-controls="studentSidebar">
      <i class="bi bi-list fs-5"></i>
    </button>
    <img src="logo.png" class="brand-logo" alt="DPNHS Logo" style="width: 55px; height: 55px;" >
    <div>
      <div class="fw-bold text-navy" style="font-size:15px;line-height:1.2">DPNHS</div>
      <div class="text-muted" style="font-size:11px">Student Portal</div>
    </div>
  </div>
  <div class="d-flex align-items-center gap-2">
    <div class="brand-logo" style="background:#64748b">JS</div>
    <div class="d-none d-md-block">
      <div class="fw-semibold" style="font-size:14px;color:#1e293b">John Smith</div>
      <div class="text-muted" style="font-size:12px">STU2024001</div>
    </div>
    <a href="index.php" class="topbar-icon text-decoration-none" title="Logout"><i class="bi bi-box-arrow-right"></i></a>
  </div>
</div>


<div class="d-flex" style="min-height:calc(100vh - 62px)">

  <!-- Offcanvas sidebar for mobile (hidden on lg+) -->
  <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="studentSidebar" aria-labelledby="studentSidebarLabel" style="width:260px">
    <div class="offcanvas-header border-bottom">
      <div class="fw-bold" style="font-size:14px;color:#1e293b" id="studentSidebarLabel">Student Information</div>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-3">
      <div class="stu-profile-avatar mx-auto mb-1" title="Click to upload photo">JS</div>
      <p class="text-center text-muted mb-4" style="font-size:11px">Click to upload photo</p>
      <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:12.5px"><span class="text-muted">Name:</span><span class="fw-semibold text-end">John Smith</span></div>
      <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:12.5px"><span class="text-muted">Student ID:</span><span class="fw-semibold">STU2024001</span></div>
      <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:12.5px"><span class="text-muted">Grade:</span><span class="fw-semibold">Grade 10</span></div>
      <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:12.5px"><span class="text-muted">Section:</span><span class="fw-semibold">Section A</span></div>
      <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:12.5px"><span class="text-muted">School Year:</span><span class="fw-semibold">2026-2027</span></div>
      <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:12.5px"><span class="text-muted">Semester:</span><span class="fw-semibold">1st Semester</span></div>
      <div class="d-flex justify-content-between py-2" style="font-size:12.5px"><span class="text-muted">Adviser:</span><span class="fw-semibold">Prof. Anderson</span></div>
    </div>
  </div>

  <!-- Static sidebar for desktop (visible on lg+) -->
  <div class="bg-white border-end p-3 flex-shrink-0 student d-none d-lg-block" style="width:260px">
    <div class="fw-bold mb-3" style="font-size:14px;color:#1e293b">Student Information</div>
      <button class="student-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#studentSupportedContent" aria-controls="studentSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="student-toggler-icon"></span>
    </button>

    <div class="stu-profile-avatar mx-auto mb-1" title="Click to upload photo">JS</div>
    <p class="text-center text-muted mb-4" style="font-size:11px">Click to upload photo</p>
    <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:12.5px"><span class="text-muted">Name:</span><span class="fw-semibold text-end">John Smith</span></div>
    <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:12.5px"><span class="text-muted">Student ID:</span><span class="fw-semibold">STU2024001</span></div>
    <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:12.5px"><span class="text-muted">Grade:</span><span class="fw-semibold">Grade 10</span></div>
    <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:12.5px"><span class="text-muted">Section:</span><span class="fw-semibold">Section A</span></div>
    <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:12.5px"><span class="text-muted">School Year:</span><span class="fw-semibold">2026-2027</span></div>
    <div class="d-flex justify-content-between py-2 border-bottom" style="font-size:12.5px"><span class="text-muted">Semester:</span><span class="fw-semibold">1st Semester</span></div>
    <div class="d-flex justify-content-between py-2" style="font-size:12.5px"><span class="text-muted">Adviser:</span><span class="fw-semibold">Prof. Anderson</span></div>
  </div>


  <div class="flex-grow-1 p-3 p-md-4 overflow-y-auto" style="background:#f1f5f9">
    <div class="fw-bold mb-1" style="font-size:24px;color:#1e293b">Welcome back, John Smith!</div>
    <div class="text-muted mb-4" style="font-size:14px">Here's your enrollment status and schedule</div>


    <div class="card border rounded-3 p-3 p-md-4 mb-4">
      <div class="fw-bold mb-1" style="font-size:15px;color:#1e293b">Enrollment Status</div>
      <div class="text-muted mb-3" style="font-size:13px">Your current enrollment progress</div>
      <div class="d-flex justify-content-between align-items-start mb-3">
        <div>
          <div class="fw-bold text-success mb-1" style="font-size:22px">Enrolled</div>
          <div style="font-size:13.5px;color:#374151">Grade 10 – Section A</div>
        </div>
        <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill" style="font-size:12px">Active</span>
      </div>
      <div class="d-flex justify-content-between mb-1" style="font-size:13px;font-weight:500">
        <span>Enrollment Progress</span><span>100%</span>
      </div>
      <div class="progress" style="height:10px">
        <div class="progress-bar bg-navy" style="width:100%"></div>
      </div>
    </div>

    <div class="card border rounded-3 p-3 p-md-4 mb-4">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <div class="fw-bold mb-1" style="font-size:15px;color:#1e293b">Class Schedule</div>
          <div class="text-muted" style="font-size:13px">Your weekly schedule</div>
        </div>
        <i class="bi bi-calendar3 text-muted fs-5"></i>
      </div>

      <?php
        $schedule = [
          ['Mathematics', '8:00 AM – 9:30 AM', 'Room 101', 'Monday'],
          ['English', '9:45 AM – 11:15 AM', 'Room 205', 'Monday'],
          ['Science', '12:00 PM – 1:30 PM', 'Lab 1', 'Monday'],
          ['Filipino', '8:00 AM – 9:30 AM', 'Room 103', 'Tuesday'],
          ['PE/Health', '9:45 AM – 11:15 AM', 'Gym', 'Tuesday'],
        ];
        foreach ($schedule as $item):
      ?>
      <div class="d-flex align-items-center gap-3 py-3 border-bottom">
        <div class="sched-icon flex-shrink-0"><i class="bi bi-book-half"></i></div>
        <div class="flex-grow-1 overflow-hidden">
          <div class="fw-semibold mb-1 text-truncate" style="font-size:14px;color:#1e293b"><?= $item[0] ?></div>
          <div class="text-muted text-truncate" style="font-size:12.5px"><?= $item[1] ?> &nbsp;·&nbsp; <?= $item[2] ?></div>
        </div>
        <div class="text-muted flex-shrink-0" style="font-size:13px"><?= $item[3] ?></div>
      </div>
      <?php endforeach; ?>

      <a href="#" class="btn btn-outline-secondary w-100 mt-3 py-2 fw-semibold" style="font-size:14px">View Full Schedule</a>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
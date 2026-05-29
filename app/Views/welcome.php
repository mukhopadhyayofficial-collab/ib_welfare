<main class="main">
    <!-- Flash messages — controller uses setFlashdata() so getFlashdata() is correct -->
    <?php $session = session(); ?>
    <?php if ($session->getFlashdata('successMsg')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> <?= esc($session->getFlashdata('successMsg')) ?>
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
    <?php endif; ?>
    <?php if ($session->getFlashdata('errorMsg')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> <?= esc($session->getFlashdata('errorMsg')) ?>
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
    <?php endif; ?>
    <div class="topbar mb-4">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-primary mobile-menu-btn" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>
            <div>
                <h3 class="mb-0 gradient-title">Dashboard</h3>
                <small class="text-muted">Employee welfare, medical check-up and health reporting</small>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2">
            <!--<span class="badge rounded-pill text-bg-light p-2"><i class="bi bi-bell"></i> 5 Alerts</span>-->
            <span class="badge rounded-pill text-bg-primary p-2"><?= ($userDetails['full_name'] ?? 'Admin'); ?></span>
        </div>
    </div>
    
<div class="row g-4 mb-4">
    <div class="col-xl-3 col-md-6">
        <div class="card card-glass p-4">
            <div class="d-flex justify-content-between align-items-center">
                <div><small class="text-muted">Total Employees</small><h2 class="counter mb-0" data-target="1250">0</h2></div>
                <div class="stat-icon bg-purple"><i class="bi bi-people"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-glass p-4">
            <div class="d-flex justify-content-between align-items-center">
                <div><small class="text-muted">Active Staff</small><h2 class="counter mb-0" data-target="1120">0</h2></div>
                <div class="stat-icon bg-green"><i class="bi bi-person-check"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-glass p-4">
            <div class="d-flex justify-content-between align-items-center">
                <div><small class="text-muted">Medical Records</small><h2 class="counter mb-0" data-target="875">0</h2></div>
                <div class="stat-icon bg-pink"><i class="bi bi-heart-pulse"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-glass p-4">
            <div class="d-flex justify-content-between align-items-center">
                <div><small class="text-muted">Check-ups Due</small><h2 class="counter mb-0" data-target="214">0</h2></div>
                <div class="stat-icon bg-orange"><i class="bi bi-calendar-heart"></i></div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-lg-4 col-6"><a href="pages/add-employee.html" class="btn quick-btn bg-purple w-100"><i class="bi bi-person-plus"></i> Add Employee</a></div>
    <div class="col-lg-4 col-6"><a href="pages/search-employee.html" class="btn quick-btn bg-sky w-100"><i class="bi bi-search"></i> Search</a></div>
    <div class="col-lg-4 col-6"><a href="pages/reports.html" class="btn quick-btn bg-green w-100"><i class="bi bi-file-earmark-text"></i> Reports</a></div>
</div>

<div class="card card-glass">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-3">
            <h5 class="mb-0">Recent Employee Records</h5>
            <input id="tableSearch" class="form-control w-25" placeholder="Quick search">
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead><tr><th>ID</th><th>Name</th><th>Designation</th><th>Department</th><th>Last Check-up</th><th>Status</th></tr></thead>
                <tbody>
                    <tr><td>EMP001</td><td>Rahul Sen</td><td>Inspector</td><td>HQ</td><td>12.05.2026</td><td><span class="badge bg-primary badge-soft">Serving</span></td></tr>
                    <tr><td>EMP002</td><td>Amit Das</td><td>SI</td><td>District Unit</td><td>08.05.2026</td><td><span class="badge bg-primary badge-soft">Serving</span></td></tr>
                    <tr><td>EMP003</td><td>Priya Roy</td><td>ASI</td><td>Medical Cell</td><td>Due</td><td><span class="badge bg-secondary badge-soft">Transferred</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
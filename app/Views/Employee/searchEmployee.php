<main class="main">
    <div class="topbar mb-4">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-primary mobile-menu-btn" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>
            <div>
                <h3 class="mb-0 gradient-title">Search Employee</h3>
                <small class="text-muted">Employee welfare, medical check-up and health reporting</small>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2">
            <span class="badge rounded-pill text-bg-primary p-2"><?= ($userDetails['full_name'] ?? 'Admin'); ?></span>
        </div>
    </div>
    
<div class="card card-glass mb-4">
    <div class="card-body p-4">
        <h5 class="mb-3"><i class="bi bi-search text-primary"></i> Search Employee</h5>
        <form class="row g-3">
            <div class="col-md-3"><input class="form-control" placeholder="Employee ID"></div>
            <div class="col-md-3"><input class="form-control" placeholder="Name"></div>
            <div class="col-md-3"><input class="form-control" placeholder="Department"></div>
            <div class="col-md-3"><button class="btn quick-btn bg-purple w-100"><i class="bi bi-search"></i> Search</button></div>
        </form>
    </div>
</div>

<div class="card card-glass">
    <div class="card-body p-4">
        <div class="d-flex flex-wrap align-items-center gap-4">
            <div class="profile-circle"><i class="bi bi-person"></i></div>
            <div>
                <h4 class="mb-1">Rahul Sen</h4>
                <p class="mb-1">Employee ID: EMP001 | Designation: Inspector | Department: HQ</p>
                <p class="mb-1">Blood Group: O+ | Last Check-up: 12.05.2026 | Status: Active</p>
                <button class="btn btn-sm btn-primary rounded-pill">View Full Profile</button>
                <button class="btn btn-sm btn-outline-secondary rounded-pill">Print</button>
            </div>
        </div>
    </div>
</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>
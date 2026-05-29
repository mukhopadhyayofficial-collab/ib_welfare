<main class="main">
    <div class="topbar mb-4">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-primary mobile-menu-btn" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>
            <div>
                <h3 class="mb-0 gradient-title">Reports</h3>
                <small class="text-muted">Employee welfare, medical check-up and health reporting</small>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2">
            <span class="badge rounded-pill text-bg-primary p-2"><?= ($userDetails['full_name'] ?? 'Admin'); ?></span>
        </div>
    </div>
    
<div class="row g-4">
    <div class="col-md-6 col-xl-4"><button class="btn quick-btn bg-purple w-100"><i class="bi bi-file-earmark-person"></i> Employee Master</button></div>
    <div class="col-md-6 col-xl-4"><button class="btn quick-btn bg-pink w-100"><i class="bi bi-heart-pulse"></i> Medical Report</button></div>
        <div class="col-md-6 col-xl-4"><button class="btn quick-btn bg-green w-100"><i class="bi bi-printer"></i> Print Summary</button></div>
</div>

<div class="card card-glass mt-4">
    <div class="card-body">
        <h5>Report Filters</h5>
        <div class="row g-3 mt-1">
            <div class="col-md-3"><label class="form-label">Unit</label><select class="form-select" id="unitSelect"><option value="">All Units</option><option>IB HQ, WB</option><option value="LIU">LIU</option><option>Other</option></select></div>
            <div class="col-md-3 d-none" id="liuUnitBox"><label class="form-label">Specific LIU</label><select class="form-select"><option value="">All LIU of IB</option><option>LIU Alipurduar</option><option>LIU Bankura</option><option>LIU Birbhum</option><option>LIU Cooch Behar</option><option>LIU Dakshin Dinajpur</option><option>LIU Darjeeling</option><option>LIU Hooghly</option><option>LIU Howrah</option><option>LIU Jalpaiguri</option><option>LIU Jhargram</option><option>LIU Kalimpong</option><option>LIU Kolkata</option><option>LIU Malda</option><option>LIU Murshidabad</option><option>LIU Nadia</option><option>LIU North 24 Parganas</option><option>LIU Paschim Bardhaman</option><option>LIU Paschim Medinipur</option><option>LIU Purba Bardhaman</option><option>LIU Purba Medinipur</option><option>LIU Purulia</option><option>LIU South 24 Parganas</option><option>LIU Uttar Dinajpur</option></select></div>
            <div class="col-md-3"><label class="form-label">Status</label><select class="form-select"><option>All Status</option><option>Active</option><option>Retired</option><option>Transferred</option></select></div>
            <div class="col-md-3 d-flex align-items-end"><button class="btn btn-primary rounded-pill px-4 w-100"><i class="bi bi-funnel"></i> Generate Report</button></div>
        </div>
    </div>
</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>
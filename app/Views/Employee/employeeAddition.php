<main class="main">
    <div class="topbar mb-4">
        <div class="d-flex align-items-center gap-3"><button class="btn btn-primary mobile-menu-btn"
                onclick="toggleSidebar()"><i class="bi bi-list"></i></button>
            <div>
                <h3 class="mb-0 gradient-title">Employee Details</h3><small class="text-muted">Registration of personnel
                    with address, family and health profile</small>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2"><span
                class="badge rounded-pill text-bg-primary p-2"><?= ($userDetails['full_name'] ?? 'Admin'); ?></span>
        </div>
    </div>

    <div class="card card-glass">
        <div class="card-body p-4">
            <h5 class="mb-4"><i class="bi bi-person-vcard text-primary"></i> Add / Update Employee Details</h5>
            <form>
                <div class="section-title"><i class="bi bi-person-badge"></i> Service & Personal Details</div>
                <div class="row g-3 mb-4">
                    <div class="col-md-3">
                        <label class="form-label required">Employee ID </label>
                            <input class="form-control" name="user_type" placeholder="EMP001">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label required">Full Name</label>
                        <input type="text" class="form-control" name="full_name" placeholder="Name of personnel">
                    </div>
                    <div class="col-md-3"><label class="form-label">Rank / Designation</label>
                        <select class="form-select">
                            <option value="">Select Rank</option>
                             <?php foreach($rankDetails as $rank) { ?>

                                <option value="<?= $rank['id']; ?>">
                                    <?= $rank['rank_name']; ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3"><label class="form-label">Unit </label>
                        <select class="form-select"
                            id="unitSelect">
                            <option value="">Select Unit</option>
                            <?php foreach($unitDetails as $unit) { ?>

                                <option value="<?= $unit['id']; ?>">
                                    <?= $unit['unit_name']; ?>
                                </option>   

                            <?php } ?> 
                        </select></div>
                    <div class="col-md-3 d-none" id="liuUnitBox"><label class="form-label required">Select
                            LIU</label><select class="form-select">
                            <option value="">Select LIU of IB</option>
                            <?php foreach($liuDetails as $item) { ?>

                                <option value="<?= $item['id']; ?>">
                                    <?= $item['liu_name']; ?>
                                </option>   

                            <?php } ?>
                        </select></div>
                    <div class="col-md-3"><label class="form-label">Gender</label><select class="form-select">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select></div>
                    <div class="col-md-3"><label class="form-label">Date of Birth</label><input type="date" id="dob"
                            class="form-control"></div>
                    <div class="col-md-3"><label class="form-label">Age</label><input id="age" class="form-control" readonly>
                    </div>
                    <div class="col-md-3"><label class="form-label">Date of Joining</label><input type="date"
                            class="form-control"></div>
                    <div class="col-md-3"><label class="form-label">Service Status</label><select class="form-select">
                            <option>Active</option>
                            <option>Retired</option>
                            <option>Transferred</option>
                            <option>On Leave</option>
                        </select></div>
                    <div class="col-md-3"><label class="form-label">Basic Pay Allowance</label>
                    <input
                            type="text"
                            name="basic_pay"
                            class="form-control"
                            placeholder="e.g. 45000.50"
                            pattern="^\d+(\.\d{1,2})?$"
                            oninput="this.value=this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g,'$1');">
                    </div>
                    <div class="col-md-3"><label class="form-label">Photo</label><input type="file" class="form-control" accept="image/*"></div>

                </div>

                <div class="section-title"><i class="bi bi-telephone"></i> Contact & Address Details</div>
                <div class="row g-3 mb-4">
                    <!--<div class="col-md-3"><label class="form-label required">Mobile Number</label><input
                            class="form-control" type="number" max="10" placeholder="10 digit mobile"></div>-->

                    <div class="col-md-3">
                    <label class="form-label required">Mobile Number</label>
                    <input
                        type="tel"
                        name="mobile"
                        class="form-control"
                        placeholder="Enter 10-digit mobile number"
                        maxlength="10"
                        pattern="[6-9][0-9]{9}"
                        required
                        oninput="this.value=this.value.replace(/\D/g,'').slice(0,10)">
                    </div>
                    <div class="col-md-3"><label class="form-label">Alternate Mobile</label>
                    <input
                        type="tel"
                        name="mobile"
                        class="form-control"
                        placeholder="Enter 10-digit mobile number"
                        maxlength="10"
                        pattern="[6-9][0-9]{9}"
                        required
                        oninput="this.value=this.value.replace(/\D/g,'').slice(0,10)">
                    </div>
                    <div class="col-md-3"><label class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter Email ID"
                        maxlength="100"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                        required>
                    </div>
                    <div class="col-md-3"><label class="form-label">Emergency Contact No.</label>
                    <input
                        type="tel"
                        name="mobile"
                        class="form-control"
                        placeholder="Enter 10-digit mobile number"
                        maxlength="10"
                        pattern="[6-9][0-9]{9}"
                        required
                        oninput="this.value=this.value.replace(/\D/g,'').slice(0,10)">
                    </div>
                <!--<div class="address-band"><strong><i class="bi bi-geo-alt"></i> Present Address</strong></div>-->

                <div class="col-12 mt-2">
                    <div class="d-flex align-items-center">

                        <div class="address-band">
                            <strong>
                                <i class="bi bi-geo-alt"></i> Present Address
                            </strong>
                        </div>

                        <hr class="flex-grow-1 mx-3 my-0">

                    </div>
                </div>

                <div class="col-md-3"><label class="form-label required">Address Line1/ Village</label><input
                        id="presentCity" class="form-control address-present" placeholder=""></div>
                <div class="col-md-3"><label class="form-label required">Address Line2/ Post Office</label><input id="presentPO"
                        class="form-control address-present" placeholder=""></div>

                <div class="col-md-3"><label class="form-label required">Address Line3/ City/Town</label><input id="presentPO"
                        class="form-control address-present" placeholder=""></div>

                <div class="col-md-3"><label class="form-label required">State</label><select
                        id="presentState" class="form-select address-present">
                        <option value="">Select State</option>
                        <?php foreach($stateDetails as $item) { ?>

                            <option value="<?= $item['id']; ?>">
                                <?= $item['state_name']; ?>
                            </option>   

                        <?php } ?>
                        
                    </select>
                </div>


                <div class="col-md-3"><label class="form-label required">District</label><select
                        id="presentDistrict" class="form-select address-present">                            
                    </select></div>

                <div class="col-md-3"><label class="form-label required">Police Station</label><select
                        id="presentPS" class="form-select address-present">                           
                    </select></div>
                
                <div class="col-md-3"><label class="form-label required">PIN Code</label>
                <input
                        type="text"
                        id="presentPin"
                        name="presentPin"
                        class="form-control address-present"
                        placeholder="PIN Code"
                        maxlength="6"
                        pattern="[0-9]{6}"
                        required
                        oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,6)">
                </div>

                <!---<div class="col-9 mt-2">
                    <div class="address-band"><strong><i class="bi bi-house-check"></i> Permanent Address</strong>
                    </div>
                </div>

                

                <div class="col-3">
                    
                        <div class="form-check form-switch mb-0"><input class="form-check-input" type="checkbox"
                                id="sameAddress"><label class="form-check-label" for="sameAddress">Permanent address
                                same as present</label></div>
                    
                </div> -->

                <div class="col-12 mt-2">
                <div class="d-flex align-items-center">
                    
                    <div class="address-band">
                        <strong>
                            <i class="bi bi-house-check"></i> Permanent Address
                        </strong>
                    </div>

                    <hr class="flex-grow-1 mx-3 my-0">

                    <div class="form-check form-switch mb-0">
                        <input class="form-check-input" type="checkbox" id="sameAddress">
                        <label class="form-check-label" for="sameAddress">
                            Permanent address same as present
                        </label>
                    </div>

                    </div>
                </div>




                    <div class="col-md-3"><label class="form-label required">Address Line1/ Village</label><input
                            id="permanentCity" class="form-control address-permanent" placeholder="">
                    </div>
                 
                    <div class="col-md-3"><label class="form-label required">Address Line2/ Post Office</label><input id="permanentPO"
                            class="form-control address-permanent" placeholder=""></div>
                    <div class="col-md-3"><label class="form-label required">Address Line3/ City/Town</label><input id="permanentPO"
                            class="form-control address-permanent" placeholder=""></div>

                    <div class="col-md-3"><label class="form-label required">State</label><select
                            id="permanentState" class="form-select address-permanent">
                            <option value="">Select State</option>
                            <?php foreach($stateDetails as $item) { ?>

                                <option value="<?= $item['id']; ?>">
                                    <?= $item['state_name']; ?>
                                </option>   

                            <?php } ?>
                            
                        </select>
                    </div>
                    
                    <div class="col-md-3"><label class="form-label required">District</label><select
                            id="permanentDistrict" class="form-select address-permanent">                            
                        </select></div>

                        <div class="col-md-3"><label class="form-label required">Police Station</label><select
                            id="permanentPS" class="form-select address-permanent">                            
                        </select></div>
                    <div class="col-md-3"><label class="form-label required">PIN Code</label>
                    <input
                            type="text"
                            id="presentPin"
                            name="presentPin"
                            class="form-control address-present"
                            placeholder="PIN Code"
                            maxlength="6"
                            pattern="[0-9]{6}"
                            required
                            oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,6)">
                    </div>
                </div>

                <div class="section-title"><i class="bi bi-heart-pulse"></i> Basic Health Profile</div>
                <div class="row g-3 mb-4">
                    <div class="col-md-3"><label class="form-label">Blood Group</label><select class="form-select">
                            <option value="">Select</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select></div>
                    
                    <div class="col-md-3">
                        <label class="form-label">Height (cm)</label>
                        <input
                            id="heightCm"
                            type="text"
                            class="form-control"
                            placeholder="e.g. 170"
                            maxlength="3"
                            oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,3)">
                    </div>
                    <div class="col-md-3"><label class="form-label">Weight (kg)</label>
                    <input
                            id="weightKg"
                            type="text"
                            class="form-control"
                            placeholder="e.g. 70"
                            maxlength="3"
                            oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,3)">
                    </div>
                </div>

                <div class="section-title d-flex justify-content-between align-items-center"><span><i
                            class="bi bi-people-fill"></i> Family Details </span><button type="button"
                        class="btn btn-sm btn-primary rounded-pill" onclick="addDependentRow()"><i
                            class="bi bi-plus-circle"></i> Add Family Member</button></div>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered align-middle" id="dependentTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th style="min-width:210px">Relationship</th>
                                <th>Date of Birth</th>
                                <th>Mobile</th>
                                <th>Blood Group</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-control" placeholder="Family member name"></td>
                                <td><select class="form-select relationship-dropdown">
                                        <option value="" selected disabled>-- Select Relationship --</option>
                                        <?php foreach($relationshipDetails as $item) { ?>

                                            <option value="<?= $item['id']; ?>">
                                                <?= $item['relationship_name']; ?>
                                            </option>   

                                        <?php } ?>
                                    </select></td>
                                <td><input type="date" id="dob" class="form-control"></td>
                                <td>
                                    <input
                                        type="tel"
                                        name="mobile"
                                        class="form-control"
                                        placeholder="Enter 10-digit mobile number"
                                        maxlength="10"
                                        pattern="[6-9][0-9]{9}"
                                        required
                                        oninput="this.value=this.value.replace(/\D/g,'').slice(0,10)">
                                
                                </td>
                                <td><select class="form-select">
                                        <option value="">Select Blood Group</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                    </select></td>
                                <td><button type="button" class="btn btn-sm btn-danger"
                                        onclick="removeDependentRow(this)"><i class="bi bi-trash"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="section-title"><i class="bi bi-journal-medical"></i> Remarks</div>
                <div class="row g-3">
                    <div class="col-md-4"><label class="form-label">Known Ailment</label><textarea class="form-control" rows="3">
                        </textarea></div>
                    <div class="col-md-4"><label class="form-label">Any Disability / Allergy</label><textarea class="form-control" rows="3"></textarea></div>

                    <div class="col-md-4"><label class="form-label">Corrective Action Taken /
                            Follow-up</label><textarea class="form-control" rows="3"></textarea></div>
                </div>
                <div class="mt-4">
                    <button class="btn quick-btn bg-purple requires-super"><i class="bi bi-save"></i> Save Employee
                        Details</button>
                    <button type="reset" class="btn reset-fancy rounded-pill px-4"><i
                            class="bi bi-arrow-counterclockwise"></i> Reset</button>
                </div>
            </form>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>

</html>
<script>
    document.getElementById('dob').addEventListener('change', function () {
        const dob = new Date(this.value);
        const today = new Date();

        let age = today.getFullYear() - dob.getFullYear();
        const monthDiff = today.getMonth() - dob.getMonth();

        if (
            monthDiff < 0 ||
            (monthDiff === 0 && today.getDate() < dob.getDate())
        ) {
            age--;
        }

        document.getElementById('age').value = age;
    });

    document.getElementById('presentState').addEventListener('change', function () {
        //alert();

        var state_id = $(this).val();

        $.ajax({
            url: '<?= base_url('getDistricts') ?>/' + state_id,
            type: 'GET',
            dataType: 'json',
            success : function(data)
            {
                console.log(data);
                $('#presentDistrict').html(
                    '<option value="0">Select District</option>'
                );

                $.each(data, function(key, value){

                    $('#presentDistrict').append(
                        '<option value="'+value.gb_district_id+'">'+
                        value.gb_district_name+
                        '</option>'
                    );
                });

            }
        });
    });

    document.getElementById('presentDistrict').addEventListener('change', function () {
        //alert();

        var district_id = $(this).val();

        $.ajax({
            url: '<?= base_url('getPoliceStation') ?>/' + district_id,
            type: 'GET',
            dataType: 'json',
            success : function(data)
            {
                console.log(data);
                $('#presentPS').html(
                    '<option value="0">Select Police Station</option>'
                );

                $.each(data, function(key, value){

                    $('#presentPS').append(
                        '<option value="'+value.gb_ps_id+'">'+
                        value.gb_ps_name+
                        '</option>'
                    );
                });

            }
        });
    });

    document.getElementById('permanentState').addEventListener('change', function () {
        //alert();

        var state_id = $(this).val();

        $.ajax({
            url: '<?= base_url('getDistricts') ?>/' + state_id,
            type: 'GET',
            dataType: 'json',
            success : function(data)
            {
                console.log(data);
                $('#permanentDistrict').html(
                    '<option value="0">Select District</option>'
                );

                $.each(data, function(key, value){

                    $('#permanentDistrict').append(
                        '<option value="'+value.gb_district_id+'">'+
                        value.gb_district_name+
                        '</option>'
                    );
                });

            }
        });
    });

    document.getElementById('permanentDistrict').addEventListener('change', function () {
        //alert();

        var district_id = $(this).val();

        $.ajax({
            url: '<?= base_url('getPoliceStation') ?>/' + district_id,
            type: 'GET',
            dataType: 'json',
            success : function(data)
            {
                console.log(data);
                $('#permanentPS').html(
                    '<option value="0">Select Police Station</option>'
                );

                $.each(data, function(key, value){

                    $('#permanentPS').append(
                        '<option value="'+value.gb_ps_id+'">'+
                        value.gb_ps_name+
                        '</option>'
                    );
                });

            }
        });
    });

</script>
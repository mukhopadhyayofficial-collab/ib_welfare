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
            
            <form  method="post" action="<?= base_url('insert-employee'); ?>" enctype="multipart/form-data">

                 <?= csrf_field() ?>
                <div class="section-title"><i class="bi bi-person-badge"></i>
                    Service & Personal Details
                </div>
                <div class="row g-3 mb-4">
                    <div class="col-md-3">
                        <label class="form-label required">Employee ID </label>
                        <input class="form-control" name="employee_id" placeholder="EMP001">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label required">Full Name</label>
                        <input type="text" class="form-control" name="full_name" placeholder="Name of personnel">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Rank / Designation</label>
                        <select class="form-select" name="designation_rank_id">
                            <option value="">Select Rank</option>
                            <?php foreach ($rankDetails as $rank) { ?>

                                <option value="<?= $rank['id']; ?>">
                                    <?= $rank['rank_name']; ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Unit </label>
                        <select class="form-select" id="unitSelect" name="department_unit_id">
                            <option value="">Select Unit</option>
                            <?php foreach ($unitDetails as $unit) { ?>

                                <option value="<?= $unit['id']; ?>">
                                    <?= $unit['unit_name']; ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3 d-none" id="liuUnitBox">
                        <label class="form-label required">Select LIU</label>
                        <select class="form-select" name="liu_id">
                            <option value="">Select LIU of IB</option>
                            <?php foreach ($liuDetails as $item) { ?>

                                <option value="<?= $item['id']; ?>">
                                    <?= $item['liu_name']; ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" id="dob" class="form-control" name="dob">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Age</label>
                        <input id="age" class="form-control" name="age" readonly>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Date of Joining</label>
                        <input type="date" class="form-control" name="joining_date">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Service Status</label>
                        <select class="form-select" name="service_status">
                            <option value="Active">Active</option>
                            <option value="Retired">Retired</option>
                            <option value="Transferred">Transferred</option>
                            <option value="On Leave">On Leave</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Basic Pay Allowance</label>
                        <input type="text" name="pay_allowance_basic_pay" class="form-control" placeholder="e.g. 45000.50"
                            pattern="^\d+(\.\d{1,2})?$"
                            oninput="this.value=this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g,'$1');">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Photo</label>
                        <input type="file" class="form-control" accept="image/*" name="user_photo_path">
                    </div>

                </div>

                <div class="section-title"><i class="bi bi-telephone"></i> Contact & Address Details</div>


                <div class="row g-3 mb-4">
                    <!--<div class="col-md-3"><label class="form-label required">Mobile Number</label><input
                            class="form-control" type="number" max="10" placeholder="10 digit mobile"></div>-->

                    <div class="col-md-3">
                        <label class="form-label required">Mobile Number</label>
                        <input type="tel" name="mobile_number" class="form-control" placeholder="Enter 10-digit mobile number"
                            maxlength="10" pattern="[6-9][0-9]{9}" 
                            oninput="this.value=this.value.replace(/\D/g,'').slice(0,10)">
                    </div>
                    <div class="col-md-3"><label class="form-label">Alternate Mobile</label>
                        <input type="tel" name="mobile_number_alternate" class="form-control" placeholder="Enter 10-digit mobile number"
                            maxlength="10" pattern="[6-9][0-9]{9}" 
                            oninput="this.value=this.value.replace(/\D/g,'').slice(0,10)">
                    </div>
                    <div class="col-md-3"><label class="form-label">Email</label>
                        <input type="email" name="email_id" class="form-control" placeholder="Enter Email ID"
                            maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" >
                    </div>
                    <div class="col-md-3"><label class="form-label">Emergency Contact No.</label>
                        <input type="tel" name="emergency_contact" class="form-control" placeholder="Enter 10-digit mobile number"
                            maxlength="10" pattern="[6-9][0-9]{9}" 
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

                    <!-- PRESENT ADDRESS -->
                    <div class="col-md-3">
                        <label class="form-label required">Address Line1/ Village</label>
                        <input id="presentLine1" name="present_address_line1" class="form-control address-present">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label required">Address Line2/ Post Office</label>
                        <input id="presentLine2" name="present_address_line2" class="form-control address-present">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label required">Address Line3/ City/Town</label>
                        <input id="presentLine3" name="present_address_line3" class="form-control address-present">
                    </div>

                    <div class="col-md-3"><label class="form-label required">State</label><select id="presentState" name="present_state_id" class="form-select address-present">
                            <option value="">Select State</option>
                            <?php foreach ($stateDetails as $item) { ?>

                                <option value="<?= $item['id']; ?>">
                                    <?= $item['state_name']; ?>
                                </option>

                            <?php } ?>

                        </select>
                    </div>


                    <div class="col-md-3"><label class="form-label required">District</label>
                        <select id="presentDistrict" class="form-select address-present" name="present_district_id">
                        </select></div>

                    <div class="col-md-3"><label class="form-label required">Police Station</label><select
                            id="presentPS" class="form-select address-present" name="present_ps">
                        </select></div>

                    <div class="col-md-3"><label class="form-label required">PIN Code</label>
                        <input type="text" id="presentPin" name="present_pincode" class="form-control address-present"
                            placeholder="PIN Code" maxlength="6" pattern="[0-9]{6}" 
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
                                <input class="form-check-input" type="checkbox" id="sameAddress" name="same_address">
                                <label class="form-check-label" for="sameAddress">
                                    Permanent address same as present
                                </label>
                            </div>

                        </div>
                    </div>




                    <div class="col-md-3">
                        <label class="form-label required">Address Line1/ Village</label>
                        <input id="permanentLine1" name="permanent_address_line1" class="form-control address-permanent">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label required">Address Line2/ Post Office</label>
                        <input id="permanentLine2" name="permanent_address_line2" class="form-control address-permanent">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label required">Address Line3/ City/Town</label>
                        <input id="permanentLine3" name="permanent_address_line3" class="form-control address-permanent">
                    </div>

                    <div class="col-md-3"><label class="form-label required">State</label><select id="permanentState" class="form-select address-permanent" name="permanent_state_id">
                            <option value="">Select State</option>
                            <?php foreach ($stateDetails as $item) { ?>

                                <option value="<?= $item['id']; ?>">
                                    <?= $item['state_name']; ?>
                                </option>

                            <?php } ?>

                        </select>
                    </div>

                    <div class="col-md-3"><label class="form-label required">District</label><select
                            id="permanentDistrict" class="form-select address-permanent" name="permanent_district_id">
                        </select></div>

                    <div class="col-md-3"><label class="form-label required">Police Station</label><select
                            id="permanentPS" class="form-select address-permanent" name="permanent_ps">
                        </select></div>
                    <div class="col-md-3">
                        <label class="form-label required">PIN Code</label>
                        <input type="text" id="permanentPin" name="permanent_pincode" class="form-control address-permanent"
                            placeholder="PIN Code" maxlength="6" pattern="[0-9]{6}" 
                            oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,6)">
                    </div>
                </div>

                <div class="section-title"><i class="bi bi-heart-pulse"></i> Basic Health Profile</div>
                <div class="row g-3 mb-4">
                    <div class="col-md-3"><label class="form-label">Blood Group</label><select class="form-select" name="blood_group">
                            <option value="0">Select</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select></div>

                    <div class="col-md-3">
                        <label class="form-label">Height (cm)</label>
                        <input id="heightCm" type="text" name="height" class="form-control" placeholder="e.g. 170" maxlength="3"
                            oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,3)">
                    </div>
                    <div class="col-md-3"><label class="form-label">Weight (kg)</label>
                        <input id="weightKg" type="text" class="form-control" name="weight" placeholder="e.g. 70" maxlength="3"
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
                                <td>
                                    <input name="family_member_name[]" class="form-control" placeholder="Family member name">
                                </td>

                                <td>
                                    <select name="relationship_id[]" class="form-select relationship-dropdown">
                                        <option value="" selected disabled>-- Select Relationship --</option>
                                        <?php foreach ($relationshipDetails as $item) { ?>
                                            <option value="<?= $item['id']; ?>">
                                                <?= $item['relationship_name']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </td>

                                <td>
                                    <input type="date" name="family_dob[]" class="form-control">
                                </td>

                                <td>
                                    <input type="tel" name="contact_number[]" class="form-control family-mobile"
                                        placeholder="Enter 10-digit mobile number" maxlength="10"
                                        pattern="[6-9][0-9]{9}"
                                        oninput="this.value=this.value.replace(/\D/g,'').slice(0,10)">
                                </td>

                                <td>
                                    <select name="family_blood_group[]" class="form-select">
                                        <option value="0">Select Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </td>

                                <td>
                                    <button type="button" class="btn btn-sm btn-danger"
                                        onclick="removeDependentRow(this)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="section-title"><i class="bi bi-journal-medical"></i> Remarks</div>
                <div class="row g-3">
                    <div class="col-md-4"><label class="form-label">Known Ailment</label><textarea class="form-control" name="known_ailment"
                            rows="3">
                        </textarea></div>
                    <div class="col-md-4"><label class="form-label">Any Disability / Allergy</label><textarea
                            class="form-control" rows="3" name="disability_allergy"></textarea></div>

                    <div class="col-md-4"><label class="form-label">Corrective Action Taken /
                            Follow-up</label><textarea class="form-control" rows="3" name="action_taken"></textarea></div>
                </div>
                <div class="mt-4">
                
                    <button type="button" class="btn btn-info rounded-pill px-4" onclick="previewEmployeeDetails()">
                        <i class="bi bi-eye"></i> Preview
                    </button>
                    
                    <button type="submit" class="btn quick-btn bg-purple requires-super">
                        <i class="bi bi-save"></i> Submit
                    </button>
                    
                    <button type="reset" class="btn reset-fancy rounded-pill px-4">
                        <i class="bi bi-arrow-counterclockwise"></i> Reset
                    </button>
                  
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
            success: function (data) {
                console.log(data);
                $('#presentDistrict').html(
                    '<option value="0">Select District</option>'
                );

                $.each(data, function (key, value) {

                    $('#presentDistrict').append(
                        '<option value="' + value.gb_district_id + '">' +
                        value.gb_district_name +
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
            success: function (data) {
                console.log(data);
                $('#presentPS').html(
                    '<option value="0">Select Police Station</option>'
                );

                $.each(data, function (key, value) {

                    $('#presentPS').append(
                        '<option value="' + value.gb_ps_id + '">' +
                        value.gb_ps_name +
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
            success: function (data) {
                console.log(data);
                $('#permanentDistrict').html(
                    '<option value="0">Select District</option>'
                );

                $.each(data, function (key, value) {

                    $('#permanentDistrict').append(
                        '<option value="' + value.gb_district_id + '">' +
                        value.gb_district_name +
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
            success: function (data) {
                console.log(data);
                $('#permanentPS').html(
                    '<option value="0">Select Police Station</option>'
                );

                $.each(data, function (key, value) {

                    $('#permanentPS').append(
                        '<option value="' + value.gb_ps_id + '">' +
                        value.gb_ps_name +
                        '</option>'
                    );
                });

            }
        });
    });

    document.getElementById('sameAddress').addEventListener('change', function () {

        if (this.checked) {

            permanentLine1.value = presentLine1.value;
            permanentLine2.value = presentLine2.value;
            permanentLine3.value = presentLine3.value;
            permanentPin.value = presentPin.value;

            permanentState.innerHTML = presentState.innerHTML;
            permanentState.value = presentState.value;

            permanentDistrict.innerHTML = presentDistrict.innerHTML;
            permanentDistrict.value = presentDistrict.value;

            permanentPS.innerHTML = presentPS.innerHTML;
            permanentPS.value = presentPS.value;

        } else {

            document.querySelectorAll('.address-permanent').forEach(function (field) {
                field.value = '';
            });

            permanentDistrict.innerHTML = '';
            permanentPS.innerHTML = '';
        }
    });

    function addDependentRow() {
        const tableBody = document.querySelector('#dependentTable tbody');
        const firstRow = tableBody.querySelector('tr');
        const newRow = firstRow.cloneNode(true);

        newRow.querySelectorAll('input, select').forEach(function (field) {
            field.value = '';

            if (field.tagName === 'SELECT') {
                field.selectedIndex = 0;
            }
        });

        tableBody.appendChild(newRow);
    }

    function removeDependentRow(button) {
        const tableBody = document.querySelector('#dependentTable tbody');

        if (tableBody.rows.length > 1) {
            button.closest('tr').remove();
        } else {
            alert('At least one family member row is required.');
        }
    }


    function previewEmployeeDetails() {
        let form = document.querySelector('form');
        let previewHTML = `
        <html>
        <head>
            <title>Employee Details Preview</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                body { padding: 25px; font-family: Arial, sans-serif; }
                h3 { color: #4b25b7; }
                table th { width: 30%; background: #f1edff; }
            </style>
        </head>
        <body>
            <h3>Employee Details Preview</h3>
            <table class="table table-bordered">
    `;

        form.querySelectorAll('input, select, textarea').forEach(function (field) {
            if (field.type === 'button' || field.type === 'submit' || field.type === 'reset' || field.type === 'file') return;

            let label = field.closest('.col-md-3, .col-md-4, td')?.querySelector('label')?.innerText || field.name || field.id || 'Field';
            let value = '';

            if (field.tagName === 'SELECT') {
                value = field.options[field.selectedIndex]?.text || '';
            } else {
                value = field.value || '';
            }

            if (value.trim() !== '') {
                previewHTML += `
                <tr>
                    <th>${label}</th>
                    <td>${value}</td>
                </tr>
            `;
            }
        });

        previewHTML += `
            </table>

            <button onclick="window.close()" class="btn btn-secondary">
                Back
            </button>
        </body>
        </html>
    `;

        let previewWindow = window.open('', '_blank', 'width=1000,height=700,scrollbars=yes');
        previewWindow.document.open();
        previewWindow.document.write(previewHTML);
        previewWindow.document.close();
    }


</script>
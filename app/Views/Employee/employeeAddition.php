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
                    <div class="col-md-3"><label class="form-label required">Employee ID </label><input
                            class="form-control" placeholder="EMP001"></div>
                    <div class="col-md-6"><label class="form-label required">Full Name</label><input
                            class="form-control" placeholder="Name of personnel"></div>
                    <div class="col-md-3"><label class="form-label">Rank / Designation</label>
                        <select class="form-select">
                            <option value="">Select Rank</option>
                            <option>Civic</option>
                            <option>Constable</option>
                            <option>Lady Constable</option>
                            <option>ASI</option>
                            <option>LASI</option>
                            <option>SI</option>
                            <option>LSI</option>
                            <option>Inspector</option>
                            <option>DySP</option>
                            <option>Additional SP</option>
                            <option>SP/SS</option>
                            <option>DIG</option>
                            <option>IGP</option>
                            <option>ADG & IGP</option>
                            <option>DGP & IGP</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="col-md-3"><label class="form-label">Unit </label><select class="form-select"
                            id="unitSelect">
                            <option value="">Select Unit</option>
                            <option>IB HQ, WB</option>
                            <option value="LIU">LIU</option>
                            <option>Other</option>
                        </select></div>
                    <div class="col-md-3 d-none" id="liuUnitBox"><label class="form-label required">Select
                            LIU</label><select class="form-select">
                            <option value="">Select LIU of IB</option>
                            <option>LIU Alipurduar</option>
                            <option>LIU Bankura</option>
                            <option>LIU Birbhum</option>
                            <option>LIU Cooch Behar</option>
                            <option>LIU Dakshin Dinajpur</option>
                            <option>LIU Darjeeling</option>
                            <option>LIU Hooghly</option>
                            <option>LIU Howrah</option>
                            <option>LIU Jalpaiguri</option>
                            <option>LIU Jhargram</option>
                            <option>LIU Kalimpong</option>
                            <option>LIU Kolkata</option>
                            <option>LIU Malda</option>
                            <option>LIU Murshidabad</option>
                            <option>LIU Nadia</option>
                            <option>LIU North 24 Parganas</option>
                            <option>LIU Paschim Bardhaman</option>
                            <option>LIU Paschim Medinipur</option>
                            <option>LIU Purba Bardhaman</option>
                            <option>LIU Purba Medinipur</option>
                            <option>LIU Purulia</option>
                            <option>LIU South 24 Parganas</option>
                            <option>LIU Uttar Dinajpur</option>
                        </select></div>
                    <div class="col-md-3"><label class="form-label">Gender</label><select class="form-select">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select></div>
                    <div class="col-md-3"><label class="form-label">Date of Birth</label><input type="date" id="dob"
                            class="form-control"></div>
                    <div class="col-md-3"><label class="form-label">Age</label><input id="age" class="form-control"
                            placeholder="Enter age"></div>
                    <div class="col-md-3"><label class="form-label">Date of Joining</label><input type="date"
                            class="form-control"></div>
                    <div class="col-md-3"><label class="form-label">Service Status</label><select class="form-select">
                            <option>Active</option>
                            <option>Retired</option>
                            <option>Transferred</option>
                            <option>On Leave</option>
                        </select></div>
                    <div class="col-md-3"><label class="form-label">Basic Pay Allowance</label><input
                            class="form-control" type="number"></div>
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
                    <div class="col-12">
                        <div class="address-band"><strong><i class="bi bi-geo-alt"></i> Present Address</strong>
                            <div class="form-check form-switch mb-0"><input class="form-check-input" type="checkbox"
                                    id="sameAddress"><label class="form-check-label" for="sameAddress">Permanent address
                                    same as present</label></div>
                        </div>
                    </div>
                    <div class="col-md-3"><label class="form-label required">Address Line1/ Village</label><input
                            id="presentCity" class="form-control address-present" placeholder="City / Village"></div>
                    <div class="col-md-3"><label class="form-label required">Address Line2/ Post Office</label><select id="presentPO"
                            class="form-select address-present">
                            <option value="">Select Post Office</option>
                            <option>Kolkata GPO</option>
                            <option>Bhowanipore</option>
                            <option>Alipore</option>
                            <option>Barasat</option>
                            <option>Krishnanagar</option>
                            <option>Berhampore</option>
                            <option>Asansol</option>
                            <option>Durgapur</option>
                            <option>Siliguri</option>
                            <option>Malda</option>
                            <option>Midnapore</option>
                            <option>Purulia</option>
                        </select></div>

                    <div class="col-md-3"><label class="form-label required">Address Line3/ City/Town</label><select id="presentPO"
                            class="form-select address-present">
                            <option value="">Select Post Office</option>
                            <option>Kolkata GPO</option>
                            <option>Bhowanipore</option>
                            <option>Alipore</option>
                            <option>Barasat</option>
                            <option>Krishnanagar</option>
                            <option>Berhampore</option>
                            <option>Asansol</option>
                            <option>Durgapur</option>
                            <option>Siliguri</option>
                            <option>Malda</option>
                            <option>Midnapore</option>
                            <option>Purulia</option>
                        </select></div>
                    <div class="col-md-3"><label class="form-label required">Police Station</label><select
                            id="presentPS" class="form-select address-present">
                            <option value="">Select Police Station</option>
                            <option>Hare Street PS</option>
                            <option>Bhowanipore PS</option>
                            <option>Alipore PS</option>
                            <option>Barasat PS</option>
                            <option>Krishnanagar PS</option>
                            <option>Berhampore PS</option>
                            <option>Asansol South PS</option>
                            <option>Durgapur PS</option>
                            <option>Siliguri PS</option>
                            <option>English Bazar PS</option>
                            <option>Kotwali PS</option>
                            <option>Purulia Sadar PS</option>
                        </select></div>
                    <div class="col-md-3"><label class="form-label required">District</label><select
                            id="presentDistrict" class="form-select address-present">
                            <option value="">Select District</option>
                            <option>Kolkata</option>
                            <option>Alipurduar</option>
                            <option>Bankura</option>
                            <option>Birbhum</option>
                            <option>Cooch Behar</option>
                            <option>Dakshin Dinajpur</option>
                            <option>Darjeeling</option>
                            <option>Hooghly</option>
                            <option>Howrah</option>
                            <option>Jalpaiguri</option>
                            <option>Jhargram</option>
                            <option>Kalimpong</option>
                            <option>Malda</option>
                            <option>Murshidabad</option>
                            <option>Nadia</option>
                            <option>North 24 Parganas</option>
                            <option>Paschim Bardhaman</option>
                            <option>Paschim Medinipur</option>
                            <option>Purba Bardhaman</option>
                            <option>Purba Medinipur</option>
                            <option>Purulia</option>
                            <option>South 24 Parganas</option>
                            <option>Uttar Dinajpur</option>
                        </select></div>
                    <div class="col-md-3"><label class="form-label required">PIN Code</label><input id="presentPin"
                            class="form-control address-present" placeholder="PIN Code" maxlength="6"></div>
                    <div class="col-12 mt-2">
                        <div class="address-band"><strong><i class="bi bi-house-check"></i> Permanent Address</strong>
                        </div>
                    </div>
                    <div class="col-md-3"><label class="form-label required">City / Village</label><input
                            id="permanentCity" class="form-control address-permanent" placeholder="City / Village">
                    </div>
                    <div class="col-md-3"><label class="form-label required">Post Office</label><select id="permanentPO"
                            class="form-select address-permanent">
                            <option value="">Select Post Office</option>
                            <option>Kolkata GPO</option>
                            <option>Bhowanipore</option>
                            <option>Alipore</option>
                            <option>Barasat</option>
                            <option>Krishnanagar</option>
                            <option>Berhampore</option>
                            <option>Asansol</option>
                            <option>Durgapur</option>
                            <option>Siliguri</option>
                            <option>Malda</option>
                            <option>Midnapore</option>
                            <option>Purulia</option>
                        </select></div>
                    <div class="col-md-3"><label class="form-label required">Police Station</label><select
                            id="permanentPS" class="form-select address-permanent">
                            <option value="">Select Police Station</option>
                            <option>Hare Street PS</option>
                            <option>Bhowanipore PS</option>
                            <option>Alipore PS</option>
                            <option>Barasat PS</option>
                            <option>Krishnanagar PS</option>
                            <option>Berhampore PS</option>
                            <option>Asansol South PS</option>
                            <option>Durgapur PS</option>
                            <option>Siliguri PS</option>
                            <option>English Bazar PS</option>
                            <option>Kotwali PS</option>
                            <option>Purulia Sadar PS</option>
                        </select></div>
                    <div class="col-md-3"><label class="form-label required">District</label><select
                            id="permanentDistrict" class="form-select address-permanent">
                            <option value="">Select District</option>
                            <option>Kolkata</option>
                            <option>Alipurduar</option>
                            <option>Bankura</option>
                            <option>Birbhum</option>
                            <option>Cooch Behar</option>
                            <option>Dakshin Dinajpur</option>
                            <option>Darjeeling</option>
                            <option>Hooghly</option>
                            <option>Howrah</option>
                            <option>Jalpaiguri</option>
                            <option>Jhargram</option>
                            <option>Kalimpong</option>
                            <option>Malda</option>
                            <option>Murshidabad</option>
                            <option>Nadia</option>
                            <option>North 24 Parganas</option>
                            <option>Paschim Bardhaman</option>
                            <option>Paschim Medinipur</option>
                            <option>Purba Bardhaman</option>
                            <option>Purba Medinipur</option>
                            <option>Purulia</option>
                            <option>South 24 Parganas</option>
                            <option>Uttar Dinajpur</option>
                        </select></div>
                    <div class="col-md-3"><label class="form-label required">PIN Code</label><input id="permanentPin"
                            class="form-control address-permanent" placeholder="PIN Code" maxlength="6"></div>
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
                    <div class="col-md-3"><label class="form-label">Height (cm)</label><input id="heightCm"
                            type="number" class="form-control" placeholder="e.g. 170"></div>
                    <div class="col-md-3"><label class="form-label">Weight (kg)</label><input id="weightKg"
                            type="number" class="form-control" placeholder="e.g. 70"></div>
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
                                <th>Age</th>
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
                                        <option>Father</option>
                                        <option>Mother</option>
                                        <option>Father in law</option>
                                        <option>Mother in Law</option>
                                        <option>Spouse</option>
                                        <option>Son</option>
                                        <option>Brother</option>
                                        <option>Sister</option>
                                    </select></td>
                                <td><input class="form-control" type="number"></td>
                                <td><input class="form-control"></td>
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

                    <div class="col-md-12"><label class="form-label">Corrective Action Taken /
                            Follow-up</label><textarea class="form-control" rows="2"></textarea></div>
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
</body>

</html>
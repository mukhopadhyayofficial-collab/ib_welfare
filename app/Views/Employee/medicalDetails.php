<main class="main">
            <div class="topbar mb-4">
                <div class="d-flex align-items-center gap-3">
                    <button class="btn btn-primary mobile-menu-btn" onclick="toggleSidebar()">
                        <i class="bi bi-list"></i>
                    </button>
                    <div>
                        <h3 class="mb-0 gradient-title">Medical Health Check-up Details</h3>
                        <small class="text-muted">Annual medical examination entry as per Annexure-A</small>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span class="badge rounded-pill text-bg-primary p-2"><?= ($userDetails['full_name'] ?? 'Admin'); ?></span>
                </div>
            </div>

            <div class="card card-glass">
                <div class="card-body p-4">
                    <h5 class="mb-4 medical-main-heading">
                        <i class="bi bi-heart-pulse"></i> Medical Health Check-up Details
                    </h5>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label required">Employee ID / Force No.</label
                                ><input class="form-control" placeholder="Enter ID / Force No." />
                            </div>
                            <div class="col-md-3">
                                <label class="form-label required">Name</label
                                ><input class="form-control" placeholder="Employee name" />
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Rank</label
                                ><select class="form-select">
                                    <option value="">Select Rank</option>
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
                                    <option>Others</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Date of Check-up</label
                                ><input type="date" class="form-control" />
                            </div>
                            <div class="col-12 mt-2">
                                <div class="medical-parameter-banner">
                                    <div class="banner-icon"><i class="bi bi-activity"></i></div>
                                    <div>
                                        <strong>Basic Medical Parameters</strong
                                        ><small>BMI, pulse, BP and physical observation summary</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">BMI</label
                                ><input id="bmi" class="form-control" placeholder="Auto / Enter BMI" />
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Pulse</label><input class="form-control" placeholder="/min" />
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Blood Pressure</label
                                ><input class="form-control" placeholder="120/80" />
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Any Disability / Allergy</label
                                ><input class="form-control" placeholder="Mention if any" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label required">1. General Clinical Examination</label
                                ><textarea
                                    class="form-control"
                                    rows="3"
                                    placeholder="Enter clinical observations"
                                ></textarea>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">2. ENT</label
                                ><textarea class="form-control" rows="3" placeholder="ENT findings"></textarea>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">3. Eye Check-up</label
                                ><textarea class="form-control" rows="3" placeholder="Eye check-up findings"></textarea>
                            </div>

                            <div class="col-12 mt-2">
                                <div class="blood-test-card">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                                        <div>
                                            <h6 class="mb-1 blood-heading">
                                                <i class="bi bi-droplet-half"></i> Blood Test Details
                                            </h6>
                                            <small class="text-muted"
                                                >Add only the tests conducted. Use + Add Blood Test for each additional
                                                test.</small
                                            >
                                        </div>
                                        <button
                                            type="button"
                                            class="btn btn-sm btn-primary rounded-pill"
                                            onclick="addBloodTestRow()"
                                        >
                                            <i class="bi bi-plus-circle"></i> Add Blood Test
                                        </button>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle mb-0" id="bloodTestTable">
                                            <thead>
                                                <tr>
                                                    <th style="width: 70px">Sl.</th>
                                                    <th>Test Type</th>
                                                    <th>Result / Value</th>
                                                    <th>Unit</th>
                                                    <th>Reference Range</th>
                                                    <th>Report</th>
                                                    <th style="width: 90px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="blood-sl text-center fw-bold">1</td>
                                                    <td>
                                                        <select class="form-select">
                                                            <option value="">Select Test</option>
                                                            <option>HB</option>
                                                            <option>TC</option>
                                                            <option>DC</option>
                                                            <option>ESR</option>
                                                            <option>Sugar-PP</option>
                                                            <option>Sugar-Fasting</option>
                                                            <option>Urea</option>
                                                            <option>Creatinine</option>
                                                            <option>TSH</option>
                                                            <option>LFT</option>
                                                            <option>Lipid Profile</option>
                                                            <option>Calcium</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </td>
                                                    <td><input class="form-control" placeholder="Enter result" /></td>
                                                    <td><input class="form-control" placeholder="Unit" /></td>
                                                    <td><input class="form-control" placeholder="Normal range" /></td>
                                                    <td><input type="file" class="form-control" /></td>
                                                    <td>
                                                        <button
                                                            type="button"
                                                            class="btn btn-sm btn-danger"
                                                            onclick="removeBloodTestRow(this)"
                                                        >
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">5. USG Abdomen Upper and Lower</label
                                ><textarea class="form-control" rows="3" placeholder="USG findings"></textarea>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">6. X-Ray (Chest)</label
                                ><textarea class="form-control" rows="3" placeholder="X-Ray findings"></textarea>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">7. ECG</label
                                ><textarea class="form-control" rows="3" placeholder="ECG findings"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">8. Any Other Examination Done</label
                                ><textarea
                                    class="form-control"
                                    rows="3"
                                    placeholder="Other examination details"
                                ></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">9. Significant Findings</label
                                ><textarea
                                    class="form-control"
                                    rows="3"
                                    placeholder="Important medical findings"
                                ></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">10.Corrective Action Taken</label
                                ><textarea
                                    class="form-control"
                                    rows="3"
                                    placeholder="Follow-up / referral / action taken"
                                ></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">11. Remarks</label
                                ><textarea class="form-control" rows="3" placeholder="Remarks / advice"></textarea>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Upload Medical Check-up Report</label
                                ><input type="file" class="form-control" />
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Medical Officer Name</label
                                ><input class="form-control" placeholder="Doctor / Medical Officer" />
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Status</label
                                ><select class="form-select">
                                    <option>Fit</option>
                                    <option>Follow-up Required</option>
                                    <option>Referred to Specialist</option>
                                    <option>Under Treatment</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4 d-flex gap-2 flex-wrap">
                            <button class="btn quick-btn bg-pink">
                                <i class="bi bi-save"></i> Save Check-up Details
                            </button>
                            <button type="reset" class="btn reset-fancy">
                                <i class="bi bi-arrow-counterclockwise"></i> Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>
</html>

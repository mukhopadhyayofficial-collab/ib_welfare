<main class="main">
            <div class="topbar mb-4">
                <div class="d-flex align-items-center gap-3">
                    <button class="btn btn-primary mobile-menu-btn" onclick="toggleSidebar()">
                        <i class="bi bi-list"></i>
                    </button>
                    <div>
                        <h3 class="mb-0 gradient-title">Employee List</h3>
                        <small class="text-muted">Basic service, address and health profile view</small>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <!--<span class="badge rounded-pill text-bg-light p-2"><i class="bi bi-bell"></i> 5 Alerts</span>-->
                    <span class="badge rounded-pill text-bg-primary p-2"><?= ($userDetails['full_name'] ?? 'Admin'); ?></span>
                </div>
            </div>
            <div class="card card-glass employee-list-card">
                <div class="card-body p-4">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                        <div>
                            <h5 class="mb-1"><i class="bi bi-people text-primary"></i> Employee List</h5>
                            <small class="text-muted"
                                >View personnel records and take permitted action as per login role</small
                            >
                        </div>
                        <input
                            id="tableSearch"
                            class="form-control"
                            style="max-width: 280px"
                            placeholder="Search employee..."
                        />
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <label for="rowsPerPage" class="text-muted small mb-0">Show</label>
                            <select id="rowsPerPage" class="form-select form-select-sm" style="width: 90px">
                                <option value="5">5</option>
                                <option value="10" selected>10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                            <span class="text-muted small">entries</span>
                        </div>
                        <small id="paginationInfo" class="text-muted">Showing 0 to 0 of 0 entries</small>
                    </div>
                    <div class="table-responsive">
                        <table id="employeeTable" class="table table-hover table-bordered align-middle employee-table">
                            <thead>
                                <tr>
                                    <th>ID/Force No.</th>
                                    <th>Name</th>
                                    <th>Rank</th>
                                    <th>Unit</th>
                                    <th>Mobile</th>
                                    <th>Age</th>
                                    <th>Blood Group</th>
                                    <th>Height</th>
                                    <th>Weight</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>EMP001</td>
                                    <td>Rahul Sen</td>
                                    <td>Inspector</td>
                                    <td>HQ</td>
                                    <td>98xxxxxx01</td>
                                    <td>42</td>
                                    <td>O+</td>
                                    <td>172 cm</td>
                                    <td>74 kg</td>
                                    <td><span class="badge bg-success badge-soft">Active</span></td>
                                    <td>
                                        <div class="action-btn-group">
                                            <button class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-eye"></i> View</button
                                            ><button class="btn btn-sm btn-outline-warning requires-super">
                                                <i class="bi bi-pencil-square"></i> Edit</button
                                            ><button
                                                onclick="return confirmDelete()"
                                                class="btn btn-sm btn-outline-danger requires-super"
                                            >
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>EMP002</td>
                                    <td>Amit Das</td>
                                    <td>SI</td>
                                    <td>LIU Malda</td>
                                    <td>98xxxxxx02</td>
                                    <td>38</td>
                                    <td>B+</td>
                                    <td>168 cm</td>
                                    <td>69 kg</td>
                                    <td><span class="badge bg-success badge-soft">Active</span></td>
                                    <td>
                                        <div class="action-btn-group">
                                            <button class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-eye"></i> View</button
                                            ><button class="btn btn-sm btn-outline-warning requires-super">
                                                <i class="bi bi-pencil-square"></i> Edit</button
                                            ><button
                                                onclick="return confirmDelete()"
                                                class="btn btn-sm btn-outline-danger requires-super"
                                            >
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>EMP003</td>
                                    <td>Priya Roy</td>
                                    <td>ASI</td>
                                    <td>Medical Cell</td>
                                    <td>98xxxxxx03</td>
                                    <td>35</td>
                                    <td>A+</td>
                                    <td>160 cm</td>
                                    <td>58 kg</td>
                                    <td><span class="badge bg-secondary badge-soft">Transferred</span></td>
                                    <td>
                                        <div class="action-btn-group">
                                            <button class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-eye"></i> View</button
                                            ><button class="btn btn-sm btn-outline-warning requires-super">
                                                <i class="bi bi-pencil-square"></i> Edit</button
                                            ><button
                                                onclick="return confirmDelete()"
                                                class="btn btn-sm btn-outline-danger requires-super"
                                            >
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div
                        id="noRecordsMessage"
                        class="alert alert-warning text-center py-2 d-none"
                        role="alert"
                    >
                        No matching employee record found.
                    </div>
                    <nav class="d-flex justify-content-end mt-3" aria-label="Employee table pagination">
                        <ul id="pagination" class="pagination pagination-sm mb-0"></ul>
                    </nav>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const searchInput = document.getElementById("tableSearch");
                const rowsPerPageSelect = document.getElementById("rowsPerPage");
                const table = document.getElementById("employeeTable");
                const tbody = table.querySelector("tbody");
                const rows = Array.from(tbody.querySelectorAll("tr"));
                const pagination = document.getElementById("pagination");
                const paginationInfo = document.getElementById("paginationInfo");
                const noRecordsMessage = document.getElementById("noRecordsMessage");

                let currentPage = 1;

                function getFilteredRows() {
                    const keyword = searchInput.value.trim().toLowerCase();
                    return rows.filter((row) => row.innerText.toLowerCase().includes(keyword));
                }

                function renderTable() {
                    const rowsPerPage = parseInt(rowsPerPageSelect.value, 10);
                    const filteredRows = getFilteredRows();
                    const totalRows = filteredRows.length;
                    const totalPages = Math.max(Math.ceil(totalRows / rowsPerPage), 1);

                    if (currentPage > totalPages) {
                        currentPage = totalPages;
                    }

                    const startIndex = (currentPage - 1) * rowsPerPage;
                    const endIndex = startIndex + rowsPerPage;

                    rows.forEach((row) => (row.style.display = "none"));
                    filteredRows.slice(startIndex, endIndex).forEach((row) => (row.style.display = ""));

                    noRecordsMessage.classList.toggle("d-none", totalRows !== 0);
                    table.classList.toggle("d-none", totalRows === 0);

                    const showingFrom = totalRows === 0 ? 0 : startIndex + 1;
                    const showingTo = Math.min(endIndex, totalRows);
                    paginationInfo.textContent = `Showing ${showingFrom} to ${showingTo} of ${totalRows} entries`;

                    renderPagination(totalPages);
                }

                function renderPagination(totalPages) {
                    pagination.innerHTML = "";

                    const createPageItem = (label, page, disabled = false, active = false) => {
                        const li = document.createElement("li");
                        li.className = `page-item${disabled ? " disabled" : ""}${active ? " active" : ""}`;

                        const button = document.createElement("button");
                        button.type = "button";
                        button.className = "page-link";
                        button.textContent = label;
                        button.disabled = disabled;
                        button.addEventListener("click", () => {
                            currentPage = page;
                            renderTable();
                        });

                        li.appendChild(button);
                        return li;
                    };

                    pagination.appendChild(createPageItem("Previous", currentPage - 1, currentPage === 1));

                    for (let page = 1; page <= totalPages; page++) {
                        pagination.appendChild(createPageItem(page, page, false, page === currentPage));
                    }

                    pagination.appendChild(createPageItem("Next", currentPage + 1, currentPage === totalPages));
                }

                searchInput.addEventListener("input", function () {
                    currentPage = 1;
                    renderTable();
                });

                rowsPerPageSelect.addEventListener("change", function () {
                    currentPage = 1;
                    renderTable();
                });

                renderTable();
            });
        </script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>
</html>

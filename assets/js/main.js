
function toggleSidebar(){
    document.getElementById("sidebar").classList.toggle("show");
}

function confirmDelete(){
    return confirm("Are you sure you want to delete this record?");
}

document.addEventListener("DOMContentLoaded", function(){
    const searchInput = document.getElementById("tableSearch");
    if(searchInput){
        searchInput.addEventListener("keyup", function(){
            const value = this.value.toLowerCase();
            document.querySelectorAll("tbody tr").forEach(row=>{
                row.style.display = row.innerText.toLowerCase().includes(value) ? "" : "none";
            });
        });
    }

    document.querySelectorAll(".counter").forEach(el=>{
        const target = parseInt(el.dataset.target || "0");
        let current = 0;
        const step = Math.max(1, Math.floor(target / 60));
        const timer = setInterval(()=>{
            current += step;
            if(current >= target){
                current = target;
                clearInterval(timer);
            }
            el.innerText = current.toLocaleString();
        },20);
    });
});

// Employee Details helpers

function bloodGroupSelect(){
    return `<select class="form-select"><option value="">Select Blood Group</option><option>A+</option><option>A-</option><option>B+</option><option>B-</option><option>AB+</option><option>AB-</option><option>O+</option><option>O-</option></select>`;
}

function relationshipSelect(){
    return `<select class="form-select relationship-dropdown"><option value="" selected disabled>-- Select Relationship --</option><option>Father</option><option>Mother</option><option>Father in law</option><option>Mother in Law</option><option>Spouse</option><option>Son</option><option>Brother</option><option>Sister</option></select>`;
}

function addDependentRow(){
    const tbody = document.querySelector('#dependentTable tbody');
    if(!tbody) return;
    const tr = document.createElement('tr');
    tr.innerHTML = `<td><input class="form-control" placeholder="Family member name"></td>
        <td>${relationshipSelect()}</td>
        <td><input class="form-control" type="number"></td>
        <td><input class="form-control"></td>
        <td>${bloodGroupSelect()}</td>
        <td><button type="button" class="btn btn-sm btn-danger" onclick="removeDependentRow(this)"><i class="bi bi-trash"></i></button></td>`;
    tbody.appendChild(tr);
}

function removeDependentRow(btn){
    const row = btn.closest('tr');
    const tbody = row?.parentElement;
    if(tbody && tbody.rows.length > 1){ row.remove(); }
}

document.addEventListener("DOMContentLoaded", function(){
    const height = document.getElementById('heightCm');
    const weight = document.getElementById('weightKg');
    const bmi = document.getElementById('bmi');
    function calcBMI(){
        if(!height || !weight || !bmi) return;
        const h = parseFloat(height.value) / 100;
        const w = parseFloat(weight.value);
        bmi.value = (h > 0 && w > 0) ? (w / (h*h)).toFixed(1) : '';
    }
    height?.addEventListener('input', calcBMI);
    weight?.addEventListener('input', calcBMI);
});


// Unit, address and medical test helpers
function toggleLiuBox(){
    const unitSelect = document.getElementById('unitSelect');
    const liuBox = document.getElementById('liuUnitBox');
    if(!unitSelect || !liuBox) return;
    liuBox.classList.toggle('d-none', unitSelect.value !== '2');
}

function copyPresentToPermanent(){
    const map = [
        ['presentCity','permanentCity'], ['presentPO','permanentPO'], ['presentPS','permanentPS'],
        ['presentDistrict','permanentDistrict'], ['presentPin','permanentPin']
    ];
    map.forEach(([from,to])=>{
        const f = document.getElementById(from); const t = document.getElementById(to);
        if(f && t) t.value = f.value;
    });
}

function toggleSameAddress(){
    const checkbox = document.getElementById('sameAddress');
    const permanentFields = document.querySelectorAll('.address-permanent');
    if(!checkbox) return;
    if(checkbox.checked){
        copyPresentToPermanent();
        permanentFields.forEach(el=>el.setAttribute('readonly','readonly'));
        permanentFields.forEach(el=>el.classList.add('same-address-locked'));
    }else{
        permanentFields.forEach(el=>el.removeAttribute('readonly'));
        permanentFields.forEach(el=>el.classList.remove('same-address-locked'));
    }
}

function bloodTestSelect(){
    return `<select class="form-select"><option value="">Select Test</option><option>HB</option><option>TC</option><option>DC</option><option>ESR</option><option>Sugar-PP</option><option>Sugar-Fasting</option><option>Urea</option><option>Creatinine</option><option>TSH</option><option>LFT</option><option>Lipid Profile</option><option>Calcium</option><option>Other</option></select>`;
}

function refreshBloodSerials(){
    document.querySelectorAll('#bloodTestTable tbody tr').forEach((row, index)=>{
        const sl = row.querySelector('.blood-sl');
        if(sl) sl.textContent = index + 1;
    });
}

function addBloodTestRow(){
    const tbody = document.querySelector('#bloodTestTable tbody');
    if(!tbody) return;
    const tr = document.createElement('tr');
    tr.innerHTML = `<td class="blood-sl text-center fw-bold"></td><td>${bloodTestSelect()}</td><td><input class="form-control" placeholder="Enter result"></td><td><input class="form-control" placeholder="Unit"></td><td><input class="form-control" placeholder="Normal range"></td><td><input type="file" class="form-control"></td><td><button type="button" class="btn btn-sm btn-danger" onclick="removeBloodTestRow(this)"><i class="bi bi-trash"></i></button></td>`;
    tbody.appendChild(tr);
    refreshBloodSerials();
}

function removeBloodTestRow(btn){
    const row = btn.closest('tr');
    const tbody = row?.parentElement;
    if(!tbody) return;
    if(tbody.rows.length > 1){ row.remove(); refreshBloodSerials(); }
    else { row.querySelectorAll('input').forEach(i=>i.value=''); row.querySelectorAll('select').forEach(s=>s.value=''); }
}

document.addEventListener('DOMContentLoaded', function(){
    document.getElementById('unitSelect')?.addEventListener('change', toggleLiuBox);
    toggleLiuBox();
    document.getElementById('sameAddress')?.addEventListener('change', toggleSameAddress);
    document.querySelectorAll('.address-present').forEach(el=>el.addEventListener('input', ()=>{
        if(document.getElementById('sameAddress')?.checked) copyPresentToPermanent();
    }));
    document.querySelectorAll('.address-present').forEach(el=>el.addEventListener('change', ()=>{
        if(document.getElementById('sameAddress')?.checked) copyPresentToPermanent();
    }));
});


// Simple demo login and role access control for static prototype
function getPortalRole(){
    return localStorage.getItem('portalRole') || 'super_admin';
}
function roleLabel(role){
    return role === 'super_admin' ? 'Super Admin' : (role === 'admin' ? 'Admin' : 'User');
}
function applyRoleAccess(){
    const role = getPortalRole();
    document.querySelectorAll('.role-badge, .topbar .text-bg-primary').forEach(el=>{
        if(el.textContent.trim()==='Admin' || el.classList.contains('role-badge')) el.textContent = roleLabel(role);
    });
    if(role !== 'super_admin'){
        document.querySelectorAll('.requires-super').forEach(el=>{
            el.classList.add('role-disabled');
            el.setAttribute('title','Only Super Admin can add, edit, delete or update');
            if(el.tagName === 'BUTTON') el.setAttribute('disabled','disabled');
        });
    }
}

document.addEventListener('DOMContentLoaded', function(){
    const loginForm = document.getElementById('loginForm');
    if(loginForm){
        loginForm.addEventListener('submit', function(e){
            e.preventDefault();
            const role = document.getElementById('loginRole')?.value || 'user';
            localStorage.setItem('portalRole', role);
            window.location.href = '../index.html';
        });
    }
    applyRoleAccess();
});

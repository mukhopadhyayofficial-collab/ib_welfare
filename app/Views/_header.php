<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= ($title ?? 'Dashboard | Employee Admin Panel'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="bg-animated">
    <div class="blob one"></div><div class="blob two"></div><div class="blob three"></div>
</div>

<aside class="sidebar" id="sidebar">
    <div class="brand">
        <div class="brand-icon"><i class="bi bi-person-vcard fs-4"></i></div>
        <div>
            <h5>Health Portal</h5>
            <small>Employee Welfare Panel</small>
        </div>
    </div>
    <nav class="menu">
        <a href="<?php echo base_url(); ?>" class="<?php echo ($active_menu == 'dashboard') ? 'active' : ''; ?>">
            <i class="bi bi-speedometer2"></i>
            <span>Dashboard</span>
        </a>
        <a href="<?php echo base_url('add-employee'); ?>" class="<?php echo ($active_menu == 'add-employee') ? 'active' : ''; ?>">
            <i class="bi bi-person-plus"></i>
            <span>Add Employee</span>
        </a>
        <a href="<?php echo base_url('employee-management'); ?>" class="<?php echo ($active_menu == 'employee-management') ? 'active' : ''; ?>">
            <i class="bi bi-people"></i>
            <span>Employee List</span>
        </a>
        <a href="<?php echo base_url('medical-details'); ?>" class="<?php echo ($active_menu == 'medical-details') ? 'active' : ''; ?>">
            <i class="bi bi-heart-pulse"></i>
            <span>Medical Health Check-up Details</span>
        </a>
        <a href="<?php echo base_url('search-employee'); ?>" class="<?php echo ($active_menu == 'search-employee') ? 'active' : ''; ?>">
            <i class="bi bi-search"></i>
            <span>Search Employee</span>
        </a>
        <a href="<?php echo base_url('reports'); ?>" class="<?php echo ($active_menu == 'reports') ? 'active' : ''; ?>">
            <i class="bi bi-bar-chart"></i>
            <span>Reports</span>
        </a>

        <a href="<?= base_url('logout'); ?>" class="sidebar-link">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </a>
    </nav>
</aside>
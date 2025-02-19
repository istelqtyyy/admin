<?php include 'header.php'; ?>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #e6e6fa;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .main-content {
        flex-grow: 1;
        padding: 40px;
    }

    .dashboard-folders {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .folder-item {
        text-align: center;
        background-color: #2a283c;
        border-radius: 10px;
        padding: 20px;
        width: 150px;
        transition: transform 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .folder-item:hover {
        transform: scale(1.05);
    }

    .folder-icon {
        font-size: 50px;
        color: gold;
    }

    .folder-item p {
        color: gold;
        margin-top: 10px;
        font-weight: bold;
    }

    h1 {
        color: #2a283c;
    }

    p {
        color: #2a283c;
    }
</style>

<div class="main-content">
    <center>
        <h1>Finance</h1>
        <p>Welcome to the Finance Dashboard!</p>
    </center>

    <!-- Dashboard Folder Icons -->
    <div class="dashboard-folders">
        <div class="folder-item">
            <a href="finance/finance1.php">
                <i class="folder-icon fas fa-file-alt"></i> <!-- Legal documents icon -->
                <p>LEGAL DOCUMENTS</p>
            </a>
        </div>
        <div class="folder-item">
            <a href="finance/finance2.php">
                <i class="folder-icon fas fa-check-circle"></i> <!-- Approval icon -->
                <p>APPROVAL</p>
            </a>
        </div>
        <div class="folder-item">
            <a href="finance/finance3.php">
                <i class="folder-icon fas fa-users"></i> <!-- Employee accounts icon -->
                <p>EMPLOYEE ACC.</p>
            </a>
        </div>
        <div class="folder-item">
            <a href="finance/finance4.php">
                <i class="folder-icon fas fa-chart-line"></i> <!-- Monitoring icon -->
                <p>EMPLOYEE ACC. MONITORING</p>
            </a>
        </div>
        <div class="folder-item">
            <a href="finance/finance5.php"> <!-- New Invoices link -->
                <i class="folder-icon fas fa-file-invoice"></i> <!-- Invoice icon -->
                <p>INVOICES/RECEIPT</p>
            </a>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>

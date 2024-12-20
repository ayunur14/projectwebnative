<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/admin.css" />

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li><a href="#"><span class="icon"><ion-icon name="school-outline"></ion-icon></span><span class="title">University</span></a></li>
                <li><a href="dashboard.php"><span class="icon"><ion-icon name="home-outline"></ion-icon></span><span class="title">Dashboard</span></a></li>
                <li><a href="form_2.php"><span class="icon"><ion-icon name="people-outline"></ion-icon></span><span class="title">Form</span></a></li>
                <li><a href="?page=pengguna"><span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span><span class="title">Pengguna</span></a></li>
                <li><a href="chart.php"><span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span><span class="title">Chart</span></a></li>
                <li><a href="#"><span class="icon"><ion-icon name="settings-outline"></ion-icon></span><span class="title">Setting</span></a></li>
                <li><a href="#"><span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span><span class="title">Password</span></a></li>
                <li><a href="logout.php"><span class="icon"><ion-icon name="log-out-outline"></ion-icon></span><span class="title">Sign Out</span></a></li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle"><ion-icon name="menu-outline"></ion-icon></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="search here" />
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="user"><img src="img/avatar.jpg" alt="User Avatar" /></div>
            </div>

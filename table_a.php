<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard 1</title>
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/admin.css" />
    <script src="js/main.js" defer></script>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="container">
        <!-- Navigation -->
        <!-- <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                        <span class="title">University</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Customer</span>
                    </a>
                </li>
                <li>
                    <a href="form.php">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">Form</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="browsers-outline"></ion-icon></span>
                        <span class="title">Table</span>
                    </a>
                </li>
                <li>
                    <a href="chart.php">
                        <span class="icon"><ion-icon name="bar-chart-outline"></ion-icon></span>
                        <span class="title">Chart</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div> -->
        <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <span class="icon"
                ><ion-icon name="school-outline"></ion-icon
              ></span>
              <span class="title">University</span>
            </a>
          </li>
          <li>
            <a href="dashboard.php">
              <span class="icon"
                ><ion-icon name="home-outline"></ion-icon
              ></span>
              <span class="title">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="form_2.php">
              <span class="icon"
                ><ion-icon name="people-outline"></ion-icon
              ></span>
              <span class="title">Form</span>
            </a>
          </li>
          <li>
            <!-- <a href="table_a.php"> -->
            <a href="?page=tabelbiasa">
              <span class="icon"
                ><ion-icon name="chatbubble-outline"></ion-icon
              ></span>
              <span class="title">Table</span>
            </a>
          </li>

          <li>
            <a href="chart.php">
              <span class="icon"
                ><ion-icon name="help-circle-outline"></ion-icon
              ></span>
              <span class="title">Chart</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"
                ><ion-icon name="settings-outline"></ion-icon
              ></span>
              <span class="title">Setting</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"
                ><ion-icon name="lock-closed-outline"></ion-icon
              ></span>
              <span class="title">Password</span>
            </a>
          </li>
          <li>
            <a href="logout.php">
              <span class="icon"
                ><ion-icon name="log-out-outline"></ion-icon
              ></span>
              <span class="title">Sign Out</span>
            </a>
          </li>
        </ul>
     </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="search here" />
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="user">
                    <img src="img/avatar.jpg" alt="User Avatar" />
                </div>
            </div>

            <!-- Table Section -->
            <div class="detailTable">
                <div class="recentTable">
                    <div class="titleTable">
                        <h2>Responsive Table</h2>
                        <a href="#" class="btn">Add New</a>
                    </div>
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "koneksi.php";
                            $no = 1;
                            $data = mysqli_query($conn, "SELECT * FROM accountt");
                            while ($show = mysqli_fetch_array($data)) {
                                echo "<tr>
                                    <td>".$no++."</td>
                                    <td>".$show["email"]."</td>
                                    <td>".$show["akses"]."</td>
                                    <td>
                                        <a href='#' class='btn-edit'>
                                            <ion-icon name='create-outline'></ion-icon>
                                        </a>
                                        |
                                        <a href='#' class='btn-delete'>
                                            <ion-icon name='trash-outline'></ion-icon>
                                        </a>
                                    </td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- DataTables Scripts -->
            <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
            <!-- <script src="jquery-3.7.5.js"></script> -->
            <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

            <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

            <script>
                $(document).ready(function () {
                    $('#myTable').DataTable();
                });
            </script>
        </div>
    </div>
</body>
</html>

<?php

if(isset($_GET['page']))
{
$page=$_GET['page'];
if ($page=='dashboard')
{
include "bebas.php";
}elseif($page=='form')
{
include 'form_2.php';
}elseif($page=='tabelbiasa'){
  include "tabel_a.php";
}
}
else{
include "bebas.php";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard 1</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/admin.css" />
  </head>
  <body>
    <!-- navigation -->
    <div class="container">
      <div class="navigation">
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
            <a href="form_2.php">
              <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
              <span class="title">Form</span>
            </a>
          </li>
          <li>
            <a href="table.php">
              <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
              <span class="title">Table</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
              <span class="title">Help</span>
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
            <a href="#">
              <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
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
            <img src="img/avatar.jpg" alt="" />
          </div>
        </div>

        <!-- ======== detail Table ========= -->
        <div class="cardBox">
          <div class="card">
            <div>
              <div class="number">1.504</div>
              <div class="cardName">Daily Views</div>
            </div>
            <div class="iconBox"><ion-icon name="eye-outline"></ion-icon></div>
          </div>
          <div class="card">
            <div>
              <div class="number">80</div>
              <div class="cardName">Sales</div>
            </div>
            <div class="iconBox"><ion-icon name="cart-outline"></ion-icon></div>
          </div>
          <div class="card">
            <div>
              <div class="number">284</div>
              <div class="cardName">Comments</div>
            </div>
            <div class="iconBox"><ion-icon name="chatbubble-outline"></ion-icon></div>
          </div>
          <div class="card">
            <div>
              <div class="number">$3.84</div>
              <div class="cardName">Earnings</div>
            </div>
            <div class="iconBox"><ion-icon name="cash-outline"></ion-icon></div>
          </div>
        </div>

        <!-- ======== Data Statistik Charts ========= -->
        <div class="details">
          <div class="recentOrders">
            <h2>Data Statistik - Gender</h2>
            <canvas id="barChart"></canvas>
          </div>
          <div class="recentCustomer">
            <h2>Data Statistik - Roles</h2>
            <canvas id="doughnutChart"></canvas>
          </div>
        </div>
      </div>
    </div>

    <!-- Ionicons -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
      // Bar Chart - Gender Statistics
      const ctx = document.getElementById("barChart");
      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["Laki-laki", "Perempuan"],
          datasets: [
            {
              label: "# of Votes",
              data: [
                <?php
                include "koneksi.php";
                $query = mysqli_query($conn, "SELECT * FROM tbl_users WHERE jk = 'L'");
                echo mysqli_num_rows($query);
                ?>,
                <?php
                $query2 = mysqli_query($conn, "SELECT * FROM tbl_users WHERE jk = 'P'");
                echo mysqli_num_rows($query2);
                ?>
              ],
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      });

      // Doughnut Chart - User Role Statistics
      const ctx2 = document.getElementById("doughnutChart");
      new Chart(ctx2, {
        type: "doughnut",
        data: {
          labels: ["Admin", "User"],
          datasets: [
            {
              label: "# of Votes",
              data: [
                <?php
                $data = mysqli_query($conn, "SELECT * FROM accountt WHERE akses = '1'");
                echo mysqli_num_rows($data);
                ?>,
                <?php
                $data2 = mysqli_query($conn, "SELECT * FROM accountt WHERE akses = '2'");
                echo mysqli_num_rows($data2);
                ?>
              ],
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      });
    </script>

    <!-- External JS Files (Optional) -->
    <script src="js/barChart.js"></script>
    <script src="js/doughnutChart.js"></script>
  </body>
</html>

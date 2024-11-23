<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatitble" content="IE=Edge" />
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
              <span class="icon"
                ><ion-icon name="school-outline"></ion-icon
              ></span>
              <span class="title">University</span>
            </a>
          </li>
          <li>
            <a href="dashboard.html">
              <span class="icon"
                ><ion-icon name="home-outline"></ion-icon
              ></span>
              <span class="title">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="form_2.html">
              <span class="icon"
                ><ion-icon name="people-outline"></ion-icon
              ></span>
              <span class="title">Form</span>
            </a>
          </li>
          <li>
            <a href="table.html">
              <span class="icon"
                ><ion-icon name="chatbubble-outline"></ion-icon
              ></span>
              <span class="title">Table</span>
            </a>
          </li>
          <li>
            <a href="chart.html">
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
            <div class="iconBox">
              <ion-icon name="chatbubble-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="number">$3.84</div>
              <div class="cardName">Earnings</div>
            </div>

            <div class="iconBox"><ion-icon name="cash-outline"></ion-icon></div>
          </div>
        </div>
        <div class="details">
          <div class="recentOrders">
            <div class="cardHeader">
              <h2>Recent Orders</h2>
              <a href="#" class="btn">View All</a>
            </div>
            <table>
              <thead>
                <tr>
                  <td>Name</td>
                  <td>Price</td>
                  <td>Payment</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Star Delivery</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status delivered">Delivered</span></td>
                </tr>
                <tr>
                  <td>Acer</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>Dell Laptop</td>
                  <td>$1200</td>
                  <td>Due</td>
                  <td><span class="status return">Return</span></td>
                </tr>
                <tr>
                  <td>Hp Laptop</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status inprogress">In Progress</span></td>
                </tr>
                <tr>
                  <td>Star Delivery</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status delivered">Delivered</span></td>
                </tr>
                <tr>
                  <td>Acer</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>Dell Laptop</td>
                  <td>$1200</td>
                  <td>Due</td>
                  <td><span class="status return">Return</span></td>
                </tr>
                <tr>
                  <td>Hp Laptop</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status inprogress">In Progress</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="recentCustomer">
            <div class="cardHeader">
              <h2>Recent Customer</h2>
            </div>
            <table>
              <tr>
                <td width="60px">
                  <div class="imgbx"><img src="img/avatar1.jpg" alt="" /></div>
                </td>
                <td>
                  <h4>
                    Dadang <br />
                    <span>Indonesia</span>
                  </h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <div class="imgbx"><img src="img/avatar2.jpg" alt="" /></div>
                </td>
                <td>
                  <h4>
                    John <br />
                    <span>England</span>
                  </h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <div class="imgbx"><img src="img/avatar3.jpg" alt="" /></div>
                </td>
                <td>
                  <h4>
                    Suny <br />
                    <span>US</span>
                  </h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <div class="imgbx"><img src="img/avatar1.jpg" alt="" /></div>
                </td>
                <td>
                  <h4>
                    Dany <br />
                    <span>Swiss</span>
                  </h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <div class="imgbx"><img src="img/avatar2.jpg" alt="" /></div>
                </td>
                <td>
                  <h4>
                    Andrew <br />
                    <span>US</span>
                  </h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <div class="imgbx"><img src="img/avatar3.jpg" alt="" /></div>
                </td>
                <td>
                  <h4>
                    Witney <br />
                    <span>Spain</span>
                  </h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <div class="imgbx"><img src="img/avatar1.jpg" alt="" /></div>
                </td>
                <td>
                  <h4>
                    Mark <br />
                    <span>Italy</span>
                  </h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <div class="imgbx"><img src="img/avatar2.jpg" alt="" /></div>
                </td>
                <td>
                  <h4>
                    Rian <br />
                    <span>France</span>
                  </h4>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      </div>
    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="main.js"></script>
  </body>
</html>

<?php
session_start();
include ("koneksi.php");
if(!isset($_SESSION['email'])){
header("location:index.php");
}
echo $_SESSION['email'];
 ?>

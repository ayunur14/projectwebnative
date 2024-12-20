<?php
session_start();
include("koneksi.php");
if (!isset($_SESSION['email'])) {
    header("location:index.php");
    exit();
}

include "header.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];

    if ($page == 'pengguna') {
        include "pengguna.php";
    } elseif ($page == 'form') {
        include "form_data.php";
    } elseif($page=='edit_data'){
      include "edit_data.php";
    }else {
        include "welcome.php";
    }
} else {
    include "welcome.php"; // Default konten
}

include "footer.php";
?>

<div class="detailTable">
    <div class="recentTable">
        <div class="titleTable">
            <h2>Responsive Table</h2>
            <a href="?page=form" class="btn">Add New</a>
        </div>
        <table id="myTable">
            <thead>
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">Name</th>
                    <th style="text-align:center;">Telepon</th>
                    <th style="text-align:center;">Alamat</th>
                    <th style="text-align:center;">Option</th>
                </tr>
            </thead>
            <tbody>
            <?php
include "koneksi.php";
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM tbl_users");
while ($show = mysqli_fetch_array($data)) {
?>
<tr>
    <td style="text-align:center;"><?php echo $no++; ?></td>
    <td style="text-align:center;"><?php echo $show['nama']; ?></td>
    <td style="text-align:center;"><?php echo $show['telepon']; ?></td>
    <td style="text-align:center;"><?php echo $show['alamat']; ?></td>
    <td style="text-align:center;">
        <a href="?page=edit_data&id=<?php echo $show['id_account']; ?>" class="btn-edit">
            <ion-icon name="create-outline"></ion-icon>
        </a>
        |
        <a href="hapus_data.php?id=<?php echo $show['id_account']; ?>" onclick="return confirm('Are you sure you want to delete this record?')" class="btn-delete">
            <ion-icon name="trash-outline"></ion-icon>
        </a>
    </td>
</tr>
<?php
}
?>

            </tbody>
        </table>
    </div>
</div>

<?php
require_once "app/Mhsw.php";

 $mhsw = new Mhsw();
 $rows = $mhsw->edit($_GET['id']);

?>

<form action="app/proses.php?aksi=update" method="post">
    <table>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <input type="hidden" name="id" value="<?php echo $row['mhsw_id']; ?>" >
            <td>Nim</td>
            <td><input type="text" name="nim" value="<?php echo $row['mhsw_nim']; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $row['mhsw_nama']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $row['mhsw_alamat']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update"></td>
	    </tr>
    <?php }?>
    </table>
</form>
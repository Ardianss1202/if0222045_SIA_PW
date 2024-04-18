<?php

 require_once "app/Mhsw.php";

 $mhsw = new Mhsw();
 $rows = $mhsw->tampil();

 ?>
<a href="input.php"><Button>Tambah Data</Button></a>
 <table border="1">
    <tr>
        <td>NO</td>
        <td>NIM</td>
        <td>NAMA</td>
        <td>ALAMAT</td>
        <td>Aksi</td>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['mhsw_id']; ?></td>
        <td><?php echo $row['mhsw_nim']; ?></td>
        <td><?php echo $row['mhsw_nama']; ?></td>
        <td><?php echo $row['mhsw_alamat']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['mhsw_id']; ?>"><Button>edit</Button></a>
            <a href="app/proses.php?id=<?php echo $row['mhsw_id']; ?>&aksi=hapus"><Button>Hapus</Button></a>
        </td>
    </tr>

 <?php } ?>
 </table>

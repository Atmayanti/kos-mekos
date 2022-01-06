<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi.php";
if (isset($_POST['submit'])) {
    $user    = isset($_POST['email']) ? $_POST['email'] : "";
    $pass    = isset($_POST['password']) ? $_POST['password'] : "";
    $qryPemilik    = mysqli_query($db, "SELECT * FROM pemilik_kos WHERE email_pemilik = '$user' AND password_pemilik = '$pass'");
    $sesiPemilik    = mysqli_num_rows($qryPemilik);
    $qryPencari    = mysqli_query($db, "SELECT * FROM pencari_kos WHERE email_pencari = '$user' AND password_pencari = '$pass'");
    $sesiPencari    = mysqli_num_rows($qryPencari);

    if ($sesiPemilik == 1) {
        $data_admin    = mysqli_fetch_array($qryPemilik);
        $_SESSION['id_pemilik'] = $data_admin['id_pemilik'];
        $_SESSION['sesi'] = $data_admin['nama_pemilik'];

        echo "<script>alert('Anda berhasil Log In');</script>";
        echo "<meta http-equiv='refresh' content='0; url=homePemilik.php?user=$sesi'>";
    } else if ($sesiPencari == 1) {
        $data_pencari    = mysqli_fetch_array($qryPencari);
        $_SESSION['id_pencari'] = $data_pencari['id_pencari'];
        $_SESSION['sesi'] = $data_pencari['nama_pencari'];

        echo "<script>alert('Anda berhasil Log In');</script>";
        echo "<meta http-equiv='refresh' content='0; url=homePencari.php?user=$sesi'>";
    } else {
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        echo "<script>alert('Anda Gagal Log In');</script>";
    }
} else  {
    include "index.php";
}
//EOF

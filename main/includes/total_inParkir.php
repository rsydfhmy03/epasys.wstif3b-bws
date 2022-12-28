<?php
    include 'koneksi.php';
  // query SQL
  $sql = "SELECT COUNT(*) as total FROM parkings WHERE status='IN' AND DATE(created_at) = CURDATE();";

  // eksekusi query
  $result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    // ambil data
    $row = mysqli_fetch_assoc($result);
    // tampilkan data
    echo '<script>document.getElementById("in-parkir").innerHTML = "' . $row['total'] . '";</script>';
  } else {
    echo '<script>document.getElementById("in-parkir").innerHTML = "0";</script>';
  }

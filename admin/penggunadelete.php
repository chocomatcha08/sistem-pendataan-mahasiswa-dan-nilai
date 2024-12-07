<?php

session_start();

// Function to redirect with an alert
function redirectWithAlert($message, $location)
{
  $safeMessage = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
  echo "<script>
    alert('$safeMessage');
    document.location.href = '$location';
    </script>";
  exit;
}

// Check if the user is logged in
if (!isset($_SESSION["login"])) {
  redirectWithAlert('Silahkan login terlebih dahulu!', '../login/login.php');
}

// Check if the user level is either 'Admin' or 'Operator'
if (!in_array($_SESSION["level"], ['admin'])) {
  redirectWithAlert('Anda harus login sebagai Admin!', '../admin/dashboard.php');
}



include '../config/controller.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM user WHERE id = '$id'";
  $result = mysqli_query($db, $query);
  if ($result) {
    header('Location: pengguna.php');
  } else {
    echo "Gagal menghapus data!";
  }
}
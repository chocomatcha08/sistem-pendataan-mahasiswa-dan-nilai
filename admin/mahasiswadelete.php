<?php 
include '../config/controller.php';
//menerima id barang yang dipilih untuk dihapus
$id_mahasiswa = (int)$_GET['id_mahasiswa'];

//kondisi ketika tombol hapus klik
if (delete_mahasiswa($id_mahasiswa) > 0) {
    echo "<script> alert('Data Mahasiswa Berhasil Dihapus');
    document.location.href='mahasiswa.php';
    </script>";
} else {
    echo "<script> alert('Data Mahasiswa Gagal Dihapus');
    document.location.href='mahasiswa.php';
    </script>";
}
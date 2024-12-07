<?php 
include '../config/controller.php';

// Memastikan `id_matkul` ada di URL dan valid
if (isset($_GET['id_matkul']) && is_numeric($_GET['id_matkul'])) {
    $id_matkul = (int)$_GET['id_matkul'];

    // Kondisi ketika tombol hapus diklik
    if (delete_matkul($id_matkul) > 0) {
        echo "<script>
            alert('Data Matkul Berhasil Dihapus');
            window.location.href = 'matkul.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Matkul Gagal Dihapus');
            window.location.href = 'matkul.php';
        </script>";
    }
} else {
    // Ketika parameter `id_matkul` tidak valid
    echo "<script>
        alert('ID Matkul tidak valid');
        window.location.href = 'matkul.php';
    </script>";
}
<?php
//ini untuk fungsi select tabel
include "koneksi.php";
function select($query)
{
  global $db;

  $result = mysqli_query($db, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// =========================================================================
// ================= TAMBAH - EDIT - HAPUS MAHASISWA START =================
// =========================================================================

// -----------------------------------------------------------------------
// ------------------ FUNGSI TAMBAH MAHASISWA START ----------------------
// ----------------------------------------------------------------------- 
function create_mahasiswa($post)
{
  global $db;
  $nama = strip_tags($post['nama']);
  $nim = strip_tags($post['nim']);
  $jurusan = strip_tags($post['jurusan']);
  $tanggal_lahir = strip_tags($post['tanggal_lahir']);

  //query tambah data siswa
  $query = "INSERT into mahasiswa
    VALUES(null,'$nama', '$nim', '$jurusan', '$tanggal_lahir')";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
// -----------------------------------------------------------------------
// --------------------- FUNGSI TAMBAH MAHASISWA END ---------------------
// -----------------------------------------------------------------------

// -----------------------------------------------------------------------
// --------------------- FUNGSI EDIT MAHASISWA START ---------------------
// -----------------------------------------------------------------------
function update_mahasiswa($post)
{
  global $db;
  $id_mahasiswa = $post['id_mahasiswa'];
  $nim = $post['nim'];
  $nama = strip_tags($post['nama']);
  $jurusan = strip_tags($post['jurusan']);
  $tanggal_lahir = strip_tags($post['tanggal_lahir']);

  //query edit data
  $query = "UPDATE mahasiswa SET id_mahasiswa='$id_mahasiswa', nim='$nim', nama='$nama', jurusan='$jurusan', tanggal_lahir='$tanggal_lahir'
  WHERE id_mahasiswa='$id_mahasiswa'";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
// -----------------------------------------------------------------------
// ---------------------- FUNGSI EDIT MAHASISWA END ----------------------
// -----------------------------------------------------------------------

// ----------------------------------------------------------------------
// -------------------- FUNGSI HAPUS MAHASISWA START --------------------
// ----------------------------------------------------------------------
function delete_mahasiswa($id_mahasiswa)
{
  global $db;

  //query delete data
  $query = "DELETE FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
// ----------------------------------------------------------------------
// --------------------- FUNGSI HAPUS MAHASISWA END ---------------------
// ----------------------------------------------------------------------

// =========================================================================
// ==================== TAMBAH - EDIT - HAPUS SISWA END ====================
// =========================================================================


// =========================================================================
// =================== TAMBAH - EDIT - HAPUS MATKUL START =================
// =========================================================================

// -----------------------------------------------------------------------
// ---------------------- FUNGSI TAMBAH MATKUL START --------------------
// -----------------------------------------------------------------------
function create_matkul($post)
{
  global $db;
  $matkul = strip_tags($post['matkul']);
  $sks = strip_tags($post['sks']);
  $semester = strip_tags($post['semester']);

  //query tambah data jurusan
  $query = "INSERT into matkul
    VALUES(null, '$matkul', '$sks', '$semester')";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
// -----------------------------------------------------------------------
// ----------------------- FUNGSI TAMBAH MATKUL END ---------------------
// -----------------------------------------------------------------------

// -----------------------------------------------------------------------
// ----------------------- FUNGSI EDIT MATKUL START ---------------------
// -----------------------------------------------------------------------
function update_matkul($post)
{
  global $db;
  $id_matkul = $post['id_matkul'];
  $matkul = $post['matkul'];
  $sks = $post['sks'];
  $semester = $post['semester'];

  //query edit data
  $query = "UPDATE matkul SET  matkul='$matkul', sks='$sks', semester='$semester' WHERE id_matkul='$id_matkul'";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
// -----------------------------------------------------------------------
// ------------------------ FUNGSI EDIT MATKUL END ----------------------
// -----------------------------------------------------------------------

// ----------------------------------------------------------------------
// ---------------------- FUNGSI HAPUS MATKUL START --------------------
// ----------------------------------------------------------------------
function delete_matkul($id_matkul)
{
  global $db;

  //query delete data
  $query = "DELETE FROM matkul WHERE id_matkul='$id_matkul'";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
// ----------------------------------------------------------------------
// ----------------------- FUNGSI HAPUS MATKUL END ---------------------
// ----------------------------------------------------------------------

// =========================================================================
// ==================== TAMBAH - EDIT - HAPUS MATKUL END ==================
// =========================================================================


//=========================================================================
// =================== TAMBAH - EDIT - HAPUS NILAI START ==================
// =========================================================================

// -----------------------------------------------------------------------
// ---------------------- FUNGSI TAMBAH NILAI START ----------------------
// -----------------------------------------------------------------------
function create_nilai($post)
{
  global $db;
  $id_mahasiswa = strip_tags($post['id_mahasiswa']);
  $id_matkul = strip_tags($post['id_matkul']);
  $nilai = strip_tags($post['nilai']);

  //query tambah data nilai
  $query = "INSERT into nilai
    VALUES(null, '$id_mahasiswa','$id_matkul, '$nilai')";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
// -----------------------------------------------------------------------
// ----------------------- FUNGSI TAMBAH NILAI END -----------------------
// -----------------------------------------------------------------------


// -----------------------------------------------------------------------
// ----------------------- FUNGSI EDIT NILAI START -----------------------
// -----------------------------------------------------------------------
function update_nilai($post)
{
  global $db;
  $id_nilai = $post['id_nilai'];
  $id_mahasiswa = $post['id_mahasiswa'];
  $id_matkul = strip_tags($post['id_matkul']);
  $nilai = strip_tags($post['nilai']);

  //query edit data
  $query = "UPDATE nilai SET id_nilai='$id_nilai', id_mahasiswa='$id_mahasiswa', id_matkul='$id_matkul' nilai-'$nilai'
  WHERE id_nilai='$id_nilai'";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
// -----------------------------------------------------------------------
// ------------------------ FUNGSI EDIT NILAI END ------------------------
// -----------------------------------------------------------------------

// ----------------------------------------------------------------------
// ---------------------- FUNGSI HAPUS NILAI START --------------------
// ----------------------------------------------------------------------
function delete_nilai($id_nilai)
{
  global $db;

  //query delete data
  $query = "DELETE FROM nilai WHERE id_nilai='$id_nilai'";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
// ----------------------------------------------------------------------
// ----------------------- FUNGSI HAPUS NILAI END ---------------------
// ----------------------------------------------------------------------

//=========================================================================
// =================== TAMBAH - EDIT - HAPUS NILAI START ==================
// ========================================================================















// =========================================================================
// =================== TAMBAH - EDIT - HAPUS PENGGUNA START ===================
// =========================================================================

// -----------------------------------------------------------------------
// ---------------------- FUNGSI TAMBAH PENGGUNA START ----------------------
// ----------------------------------------------------------------------- 
function create_pengguna($post)
{
  global $db;
  $nama_user = strip_tags($post['nama_user']);
  $password = strip_tags($post['password']);
  $nama = strip_tags($post['nama']);
  $level = strip_tags($post['level']);
  $status = strip_tags($post['status']);

  //query tambah data pengguna
  $query = "INSERT into user
    VALUES(null, '$nama_user','$password', '$nama', '$level', '$status')";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
// -----------------------------------------------------------------------
// ----------------------- FUNGSI TAMBAH PENGGUNA -----------------------
// -----------------------------------------------------------------------

// -----------------------------------------------------------------------
// ----------------------- FUNGSI EDIT PENGGUNA -----------------------
// -----------------------------------------------------------------------
function update_pengguna($post)
{
  global $db;
  $id = $post['id'];
  $nama_user = strip_tags($post['nama_user']);
  $password = strip_tags($post['password']);
  $nama = strip_tags($post['nama']);
  $level = strip_tags($post['level']);
  $status = strip_tags($post['status']);

  //query edit data
  $query = "UPDATE user SET id='$id', nama_user='$nama_user', password='$password', nama='$nama', level='$level', status='$status' WHERE id=$id";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
// -----------------------------------------------------------------------
// ------------------------ FUNGSI EDIT PENGGUNA ------------------------
// -----------------------------------------------------------------------

// ----------------------------------------------------------------------
// ---------------------- FUNGSI HAPUS PENGGUNA ----------------------
// ----------------------------------------------------------------------
function delete_pengguna($id)
{
  global $db;

  //query delete data
  $query = "DELETE FROM user WHERE id='$id'";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
// ----------------------------------------------------------------------
// ----------------------- FUNGSI HAPUS PENGGUNA END -----------------------
// ----------------------------------------------------------------------

// =========================================================================
// ==================== TAMBAH - EDIT - HAPUS PENGGUNA END ====================
// =========================================================================
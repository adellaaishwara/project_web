<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "INSERT INTO user (nama, email, username,pass)
            VALUES ('$nama', '$email', '$username', '$password')";

            $res = mysqli_query($koneksi, $sql);

            $count = mysqli_affected_rows($koneksi);

            if($count == 1)
            {
              header("Location: ../index.php");
            }
            else
            {
              header("Location: tambah.php");
            }


          }
          else
          {
            header("Location: tambah.php");
          }

?>
<?php
include "connect.php";


function registrasi($data) {
    global $conn;

//penginputan data x
    $username = strtolower(stripslashes($data['username']));
    $email = strtolower(stripslashes($data['email']));
    // stripslashes digunakan untuk menghapus tanda strip
    $password = mysqli_real_escape_string($conn, $data["password"]);
    // real_escape_string digunakan untuk menambahkan kutip di didalamnya
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


// cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    // pengecekan nilai yang sudah kita tampung di container
    if ( mysqli_fetch_assoc($result)) {
        // jika di dalamnya sudah ada user tersebut
        echo "<script>
            alert ('username sudah terdaftar')
        </script>";
        return false;
        // return false digunakan jika gagal maka sistem tidak dijalankan
    }
    
     //konfirmasi apakah password sama penginputan
    if ($password !== $password2) {
        echo "<script>
        alert ('Konfirmasi password tidak sesuai')
        </script>";
        return false;
    } 

     // enkripsi password
     $password = password_hash($password, PASSWORD_DEFAULT);
     // password_default adalah algoritma untuk mengaccak password
 
     // tambahkan userbaru ke database
     $result = mysqli_query($conn, "INSERT INTO users VALUES('','$username', '$email' , '$password')");
 
     return mysqli_affected_rows($conn);
}
?>
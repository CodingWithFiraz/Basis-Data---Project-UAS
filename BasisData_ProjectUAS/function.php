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












if(isset($_POST['create'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    
    $sql = "INSERT INTO book (title,author, type, description, image) VALUES('$title', '$author', '$type', '$description', '$image')";
    
    // upload gambar
    $image = upload();
    if(!$image) {
        return false;
    }


    if(mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION["create"] = "Book Added Successfully";
        header("Location: list_buku2.php");
    } else {
        die("something went wrong");
    }
}





function upload() {
    $imageName = $_FILES['image']['name'];
    $imageSpaces = $_FILES['image']['size'];
    $imageError = $_FILES['image']['error'];
    $imageTmp = $_FILES['image']['tmp_name'];

    // check image upload
    if($imageError === 4) {
        echo "<script>
        alert('select the image')
        </script>";
        header("Location: add_book.php");
        return false;
    }

    // check type image
    $extensionValid = ["jpg", "png", "jpeg"];
    $extension = explode('.' , $imageName);
    $extension = strtolower(end($extension));
    if(!in_array($extension, $extensionValid)){
        echo "<script>
        alert('Select the right image type')
        </script>";
        header("Location: list_buku.php");
        return false;
    }

    // generate unique name
    $newImageName = uniqid();
    $newImageName .= '.';
    $newImageName .= $extension;

    move_uploaded_file($imageTmp, 'img/' . $newImageName);

    return $newImageName;

}
?>
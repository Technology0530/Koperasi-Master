<?php
  session_start();

  require 'application/config/koneksi.php';

  // proses login
  if (isset($_POST["login"])) {

    $email        = $_POST['email'];
    $password     = $_POST['password'];

    $data         = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");

    if (mysqli_num_rows($data) > 0) {

      $row  = mysqli_fetch_assoc($data);

      if (password_verify($password, $row["password"])) {
        $_SESSION['login']        = true;
        $_SESSION['role-id']      = $row['role_id'];
        $_SESSION['fullname']     = $row['fullname'];
        $_SESSION['images']       = $row['images'];
        $_SESSION['date_created'] = $row['date_created'];
        header("Location: media.php?pages=dashboard");
        exit;
      }

    }

    header("Location: auth.php?page=login_error");

  }

  // proses registrasi
  if (isset($_POST["register"])) {

    $role_id      = 1;
    $fullname     = $_POST['fullname'];
    $email        = $_POST['email'];
    $password     = $_POST['password'];
    $confpassword = $_POST['confpassword'];
    $images       = 'default.jpg';
    $is_active    = 1;
    $date_created = time();

    $result       = mysqli_query($conn, "SELECT * FROM tb_user WHERE fullname = '$fullname' AND email = '$email'");

    if (mysqli_fetch_assoc($result)) {
      echo "
        <script>
          alert('Data yang anda masukkan sudah terdaftar. Silahkan login!!!')
        </script>
      ";
      header("Location: auth.php?page=login");

    }

    if ($password !== $confpassword) {
      echo "
        <script>
          alert('Konfirmasi password yang anda masukkan tidak sesuai!!!')
        </script>
      ";
      header("Location: auth.php?page=register");

    }

    $pwd          = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO tb_user VALUES (NULL, '$role_id', '', '$fullname', '$email', '$pwd', '$images', '', '', '', '$is_active', '$date_created')");


    header ("Location: auth.php?page=register_success");

  }

?>

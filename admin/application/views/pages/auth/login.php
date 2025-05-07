<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notnull - login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .login-page {
        margin-top: 7vw;
        margin-left: 7vw;
        margin-right: 7vw;
    }

    .form {
        position: relative;
        z-index: 1;
        max-width: 80%;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.6), 0 5px 5px 0 rgba(0, 0, 0, 0.2);
        border-radius: 20px;
        overflow: hidden;
    }

    .form h3 {
        text-align: center;
        font-size: 35px;
        font-weight: bold;
        margin-top: -20px;
        color: black;
    }

    .form input {
        font-family: "Roboto", sans-serif;
        background: black;
        width: 90%;
        border: 0;
        margin: 0 0 15px;
        padding: 18px;
        box-sizing: border-box;
        font-size: 14px;
        border-radius: 20px;
        color: whitesmoke;
    }

    .form input::placeholder {
        color: whitesmoke;
        opacity: 0.6;
    }

    .form button {
        position: relative;
        text-align: center;
        box-sizing: border-box;
        border-radius: 20px;
        width: 90%;
        padding: 19px;
        border: 0;
        font-weight: bold;
        font-size: 15px;
        background-color: grey;
    }

    .form button:hover {
        background-color: whitesmoke;
    }

    .form p {
        padding-top: 20px;
    }

    .form a {
        color: aqua;
        opacity: 0.9;
    }

    .form a:hover {
        opacity: 1;
    }
</style>

<body>
    <div class="login-page">
        <div class="form">
            <img src="<?= base_url("assets/login/notnull.png") ?>" width="190px" height="190px" style="margin: -60px 0px 20px">
            <h3>Login with notnull account</h3>
            <form method="post">
                <input type="text" placeholder="username" name="username" value="<?php echo set_value("username") ?>">
                <div class="text-danger" style="margin-top: -2vw;"><?php echo form_error("username") ?></div>
                <input class="mt-4" type="password" placeholder="password" name="password" value="<?php echo set_value("password") ?>">
                <div class="text-danger" style="margin-top: -2vw;"><?php echo form_error("password") ?></div>
                <button class="mt-4" type="submit">LOGIN</button>
            </form>
            <p><a style="text-align: center; text-decoration: none;" href="user_register.php"> Register notnull Account </a></p>
        </div>
    </div>
</body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php if ($this->session->flashdata("pesan_sukses")): ?>
    <script>
        swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success")
    </script>
<?php endif ?>
<?php if ($this->session->flashdata("pesan_gagal")): ?>
    <script>
        swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error")
    </script>
<?php endif ?>

</html>
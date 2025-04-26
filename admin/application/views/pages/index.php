<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="public/css/styles.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light vh-100" style="width: 280px;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <i class="bi bi-display" style="font-size: 1.5rem; margin-right: .5rem;"></i>
        <span class="fs-4">Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="#" class="nav-link text-dark">
                <i class="bi bi-car-front-fill me-2"></i> Home
            </a>
        </li>
        <li>
            <a href="kategori" class="nav-link text-dark">
                <i class="bi bi-globe-americas me-2"></i> Kategori
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-dark">
                <i class="bi bi-journal-text me-2"></i> Produk
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-dark">
                <i class="bi bi-people me-2"></i> Member
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-dark">
                <i class="bi bi-house me-2"></i> Transaksi
            </a>
        </li>
    </ul>
    <hr>
    <div>
        <!-- <span class="fw-bold"><?= htmlspecialchars($admin->admin_name); ?></span> -->
        <a href="#" class="btn btn-danger btn-sm float-end">Logout</a>
    </div>
</div>
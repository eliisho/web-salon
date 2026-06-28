<!DOCTYPE html>
<html>
<head>
    <title>Elisya's Hair and Spa Salon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f0eb;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #8b7355;
            border-color: #8b7355;
            color: white;
        }
        .btn-custom:hover {
            background-color: #a69081;
            border-color: #a69081;
            color: white;
        }
        .form-control:focus {
            border-color: #8b7355;
            box-shadow: 0 0 0 0.25rem rgba(139, 115, 85, 0.25);
        }
    </style>
</head>
<body>
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="login-container p-5 w-100" style="max-width: 450px;">
            <div class="text-center mb-4">
                <img src="<?= base_url('salon/gambar/apt.png') ?>" alt="">
                <h1 class="h3 mb-2" style="color: #8b7355;">Elisya's</h1>
                <p class="text-muted fst-italic">Hair and Spa Salon</p>
            </div>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/proses_login') ?>" method="post">
                <div class="mb-3">
                    <label class="form-label" style="color: #8b7355;">Username</label>
                    <input type="username" name="username" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label class="form-label" style="color: #8b7355;">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-custom w-100">
                    Sign In
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
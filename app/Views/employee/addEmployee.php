<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card shadow-sm border-0 rounded-lg">
                    <div class="card-header bg-gradient-primary pt-4 pb-3">
                        <h4 class="card-title text-white mb-0">
                            <i class="bi bi-person-fill me-2"></i>
                            <?= esc($page) ?>
                        </h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="/prosesAddEmployee" method="POST" class="needs-validation" novalidate>
                            <?= csrf_field() ?>
                            <div class="form-group mb-4">
                                <label for="name" class="form-label fw-bold">Full Name</label>
                                <input type="text" id="name" name="namaEmployee" class="form-control" placeholder="Enter full name" required>
                                <div class="invalid-feedback">
                                    Please enter a valid full name.
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="gender" class="form-label fw-bold">Gender</label>
                                <select id="gender" name="gender" class="form-control" required>
                                    <option value="">Select gender</option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a gender.
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="date_of_birth" class="form-label fw-bold">Date of Birth</label>
                                <input type="date" id="date_of_birth" name="birthDate" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please select a valid date of birth.
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="phone_number" class="form-label fw-bold">Phone Number</label>
                                <input type="text" id="phone_number" name="phoneNumber" class="form-control" placeholder="Enter phone number" required>
                                <div class="invalid-feedback">
                                    Please enter a valid phone number.
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" required>
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="hire_date" class="form-label fw-bold">Hire Date</label>
                                <input type="date" id="hire_date" name="hireDate" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please select a valid hire date.
                                </div>
                            </div>
                            <div class="form-group d-flex gap-2 mt-5">
                                <button type="submit" class="btn btn-primary btn-lg px-4">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-light btn-lg px-4">
                                    <i class="bi bi-arrow-counterclockwise me-2"></i>
                                    Reset
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.bg-gradient-primary {
    background: linear-gradient(45deg, #4e73df 0%, #224abe 100%);
}

.card {
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.form-control, .form-select {
    transition: all 0.2s ease;
}

.form-control:focus, .form-select:focus {
    box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
    background-color: #fff !important;
}

.btn {
    transition: all 0.2s ease;
}

.btn-primary {
    background-color: #4e73df;
    border-color: #4e73df;
}

.btn-primary:hover {
    background-color: #224abe;
    border-color: #224abe;
    transform: translateY(-2px);
}

.btn-light:hover {
    background-color: #f8f9fa;
    transform: translateY(-2px);
}
</style>

<script>
// Form validation
(function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
})()
</script>

<?= $this->endSection() ?>

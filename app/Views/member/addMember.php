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
                        <form action="/prosesAddMember" method="POST" class="needs-validation" novalidate>
                            <?= csrf_field() ?>

                            <!-- Full Name -->
                            <div class="form-group mb-4">
                                <label for="full_name" class="form-label fw-bold">Full Name</label>
                                <input type="text" id="full_name" name="namaMember" class="form-control" placeholder="Enter full name" required>
                                <div class="invalid-feedback">
                                    Please enter a valid full name.
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="form-group mb-4">
                                <label for="phone_number" class="form-label fw-bold">Phone Number</label>
                                <input type="text" id="phone_number" name="phoneNumber" class="form-control" placeholder="Enter phone number" required>
                                <div class="invalid-feedback">
                                    Please enter a valid phone number.
                                </div>
                            </div>

                            <!-- Join Date -->
                            <div class="form-group mb-4">
                                <label for="join_date" class="form-label fw-bold">Join Date</label>
                                <input type="date" id="join_date" name="joinDate" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please select a valid join date.
                                </div>
                            </div>

                    
                            <!-- Submit and Reset Buttons -->
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

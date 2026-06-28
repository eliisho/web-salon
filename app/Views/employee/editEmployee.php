<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-light pt-4 pb-3">
                    <h4 class="card-title text-primary mb-0"><?= esc($page) ?></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="/prosesEditEmployee/<?= $data['id'] ?>" method="post">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label fw-bold">Name</label>
                                        <input type="text" class="form-control form-control-lg shadow-sm" 
                                               id="name" name="namaEmployee" value="<?= old('name', $data['name']) ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender" class="form-label fw-bold">Gender</label>
                                        <input type="text" class="form-control form-control-lg shadow-sm" 
                                               id="gender" name="gender" value="<?= old('gender', $data['gender']) ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_birth" class="form-label fw-bold">Date of Birth</label>
                                        <input type="date" class="form-control form-control-lg shadow-sm" 
                                               id="date_of_birth" name="birthDate" value="<?= old('date_of_birth', $data['date_of_birth']) ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_number" class="form-label fw-bold">Phone Number</label>
                                        <input type="text" class="form-control form-control-lg shadow-sm" 
                                               id="phone_number" name="phoneNumber" value="<?= old('phone_number', $data['phone_number']) ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label fw-bold">Email</label>
                                        <input type="email" class="form-control form-control-lg shadow-sm" 
                                               id="email" name="email" value="<?= old('email', $data['email']) ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="hire_date" class="form-label fw-bold">Hire Date</label>
                                        <input type="date" class="form-control form-control-lg shadow-sm" 
                                               id="hire_date" name="hireDate" value="<?= old('hire_date', $data['hire_date']) ?>" required>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end gap-2 mt-4">
                                    <button type="reset" class="btn btn-light-secondary btn-lg px-4">
                                        <i class="bi bi-arrow-counterclockwise me-2"></i>Reset
                                    </button>
                                    <button type="submit" class="btn btn-primary btn-lg px-4">
                                        <i class="bi bi-check-lg me-2"></i>Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

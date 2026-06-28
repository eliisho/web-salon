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
                        <form action="/prosesEditMember/<?= $data['id'] ?>" method="post">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id" class="form-label fw-bold">ID</label>
                                        <input type="text" class="form-control form-control-lg shadow-sm" 
                                               id="id" name="id" value="<?= old('id', $data['id']) ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="full_name" class="form-label fw-bold">Full Name</label>
                                        <input type="text" class="form-control form-control-lg shadow-sm" 
                                               id="full_name" name="namaMember" value="<?= old('full_name', $data['full_name']) ?>" required>
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
                                        <label for="join_date" class="form-label fw-bold">Join Date</label>
                                        <input type="date" class="form-control form-control-lg shadow-sm" 
                                               id="join_date" name="joinDate" value="<?= old('join_date', $data['join_date']) ?>" required>
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

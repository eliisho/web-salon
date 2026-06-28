<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-light pt-4 pb-3">
                    <h4 class="card-title text-primary mb-0"> <?= esc($page) ?></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="/prosesEditType/<?= $data['id'] ?>" method="post">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label fw-bold">Type of Service</label>
                                        <input type="text" class="form-control form-control-lg shadow-sm" 
                                               id="name" name="name" value="<?= old('name', $data['name']) ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="flag_active" class="form-label fw-bold">Status</label>
                                        <select class="form-select form-select-lg shadow-sm" id="flag_active" name="flag_active">
                                            <option value="1" <?= old('flag_active', $data['flag_active']) == '1' ? 'selected' : '' ?>>Active</option>
                                            <option value="0" <?= old('flag_active', $data['flag_active']) == '0' ? 'selected' : '' ?>>Inactive</option>
                                        </select>
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
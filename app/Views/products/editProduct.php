<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-light pt-4 pb-3">
                    <h4 class="card-title text-primary mb-0">Edit Product</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="/prosesEditProduct/<?= esc($data['id']) ?>" method="post">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="product_name" class="form-label fw-bold">Product Name</label>
                                        <input type="text" class="form-control form-control-lg shadow-sm" 
                                               id="product_name" name="namaProduct" 
                                               value="<?= old('product_name', $data['product_name']) ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price" class="form-label fw-bold">Price</label>
                                        <input type="number" class="form-control form-control-lg shadow-sm" 
                                               id="price" name="harga" 
                                               value="<?= old('price', $data['price']) ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description" class="form-label fw-bold">Description</label>
                                        <textarea class="form-control form-control-lg shadow-sm" 
                                                  id="description" name="desc" rows="4"><?= old('description', $data['description']) ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stock_quantity" class="form-label fw-bold">Stock Quantity</label>
                                        <input type="number" class="form-control form-control-lg shadow-sm" 
                                               id="stock_quantity" name="qty" 
                                               value="<?= old('stock_quantity', $data['stock_quantity']) ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end gap-2 mt-4">
                                    <button type="reset" class="btn btn-light-secondary btn-lg px-4">
                                        <i class="bi bi-arrow-counterclockwise me-2"></i>Reset
                                    </button>
                                    <button type="submit" class="btn btn-primary btn-lg px-4">
                                        <i class="bi bi-check-lg me-2"></i>Update
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

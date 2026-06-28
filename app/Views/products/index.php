<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Master Data <?= esc($page) ?></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                        <a href="/addProduct" class="btn btn-primary">Add Product</a>
                            <button type="button" id="deleteSelected" class="btn btn-danger ms-3" disabled>Mass Delete</button>
                        </div>

                        <form id="massDeleteForm" action="<?= site_url('/massDeleteProduct') ?>" method="POST">
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input type="checkbox" id="selectAll" class="form-check-input">
                                            </th>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Qty</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $item) : ?>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="selected_items[]" value="<?= esc($item['id']) ?>" class="form-check-input item-checkbox">
                                                </td>
                                                <td><?= esc($noUrut++) ?></td>
                                                <td><?= esc($item['product_name']) ?></td>
                                                <td><?= esc($item['price']) ?></td>
                                                <td><?= esc($item['description']) ?></td>
                                                <td><?= esc($item['stock_quantity']) ?></td>
                                                <td>
                                                <a href="/editProduct/<?= esc($item['id']) ?>" class="btn btn-warning" style="margin-bottom: 8px;">Edit</a>
                                                <a href="<?= site_url('/deleteProduct/' . esc($item['id'])) ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>

                        <div class="d-flex justify-content-center mt-3">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg">
                                    <?= $pager->links('default', 'custom_pagination') ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const selectAll = document.getElementById('selectAll');
    const itemCheckboxes = document.getElementsByClassName('item-checkbox');
    const deleteSelectedBtn = document.getElementById('deleteSelected');
    const massDeleteForm = document.getElementById('massDeleteForm');

    // Handle "Select All" checkbox
    selectAll.addEventListener('change', function() {
        Array.from(itemCheckboxes).forEach(checkbox => {
            checkbox.checked = this.checked;
        });
        updateDeleteButton();
    });

    // Handle individual checkboxes
    Array.from(itemCheckboxes).forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            updateDeleteButton();
            // Update "Select All" checkbox
            selectAll.checked = Array.from(itemCheckboxes).every(cb => cb.checked);
        });
    });

    // Update delete button state
    function updateDeleteButton() {
        const checkedBoxes = Array.from(itemCheckboxes).filter(cb => cb.checked);
        deleteSelectedBtn.disabled = checkedBoxes.length === 0;
    }

    // Handle delete selected button
    deleteSelectedBtn.addEventListener('click', function() {
        if (confirm('Apakah Anda yakin ingin menghapus produk yang dipilih?')) {
            massDeleteForm.submit();
        }
    });
});
</script>
<?= $this->endSection() ?>
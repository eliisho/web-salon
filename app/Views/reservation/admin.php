<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Master Data  <?= esc($page) ?></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <!-- Table with outer spacing -->
                        <div class="table-responsive ">
                            <table class="table table-lg ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Transaksi</th>
                                        <th>Member</th>
                                        <th>Service</th>
                                        <th>PIC</th>
                                        <th>Price</th>
                                        <th>Duration</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    

                                    <?php foreach ($data as $item) : ?>
                                        <tr>
                                            <td><?= esc($noUrut++) ?></td>
                                            <td><?= esc($item['no_transaksi']) ?></td>
                                            <td><?= esc($item['member_name']) ?></td>
                                            <td><?= esc($item['service_name']) ?></td>
                                            <td><?= esc($item['employee_name']) ?></td>
                                            <td><?= 'Rp ' . number_format($item['price'], 0, ',', '.') ?></td>
                                            <td><?= esc($item['duration']) ?></td>
                                            <td><?= esc(date('d-M-Y', strtotime($item['tanggal']))); //echo esc($item['tanggal']) ?></td>

                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
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
<?= $this->endSection() ?>


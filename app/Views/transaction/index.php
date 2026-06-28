<?= $this->extend('layouts/master') ?>
<?php
/** @var string $page */
/** @var array $data */
/** @var int $noUrut */
?>
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
                        <?php if (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                        <?php endif; ?>

                        <div class="table-responsive">
                            <table class="table table-lg">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Transaksi</th>
                                        <th>Member</th>
                                        <th>Employee</th>
                                        <th>Service</th>
                                        <th>Price</th>
                                        <th>Duration</th>
                                        <th>Notes</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($data)) : ?>
                                        <?php foreach ($data as $item) : ?>
                                            <tr>
                                                <td><?= esc($noUrut++) ?></td>
                                                <td><?= esc($item['no_transaksi']) ?></td>
                                                <td><?= esc($item['member_name'] ?? '-') ?></td>
                                                <td><?= esc($item['employee_name'] ?? '-') ?></td>
                                                <td><?= esc($item['service_name'] ?? '-') ?></td>
                                                <td>Rp <?= number_format($item['price'], 0, ',', '.') ?></td>
                                                <td><?= esc($item['duration']) ?> Menit</td>
                                                <td><?= esc($item['notes'] ?? '-') ?></td>
                                                <td><?= (new DateTime($item['tanggal']))->format('d-M-Y') ?></td>
                                                <td>
                                                    <?php if ($item['flag_selesai']) : ?>
                                                        <span class="badge bg-success">Done</span>
                                                    <?php else : ?>
                                                        <span class="badge bg-warning">Pending</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if (!$item['flag_selesai']) : ?>
                                                    <a href="/transaction/done/<?= esc($item['id']) ?>" 
                                                    class="btn btn-success btn-sm"
                                                    onclick="return confirm('Mark this transaction as done?')">
                                                    Done
                                                    </a>
                                                    <?php else : ?>
                                                    <span class="text-muted">-</span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="10" class="text-center">No transaction data available.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
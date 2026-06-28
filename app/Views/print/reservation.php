<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Elisya Salon - Reservation Report</title>
    <style>
        @media print {
            @page {
                size: A4;
                margin: 1cm;
            }
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
            background-color: #f5f5f5;
        }

        .main-container {
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 21cm; /* A4 width */
        }

        .header {
            text-align: center;
            padding: 20px;
            margin-bottom: 30px;
            border-bottom: 2px solid #2c3e50;
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
        }

        .company-logo {
            margin-bottom: 15px;
        }

        .company-name {
            font-size: 28px;
            color: #2c3e50;
            margin: 0;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .report-title {
            font-size: 22px;
            color: #34495e;
            margin: 10px 0;
            text-transform: uppercase;
        }

        .report-details {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 4px;
        }

        .report-date {
            color: #566573;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #34495e;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        .footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            border-top: 2px solid #2c3e50;
            font-size: 12px;
            color: #566573;
        }

        .signature-section {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
            padding: 0 50px;
        }

        .signature-box {
            text-align: center;
        }

        .signature-line {
            border-top: 1px solid #000;
            width: 200px;
            margin-top: 70px;
        }

        .page-number {
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 12px;
            color: #566573;
        }

        @media print {
            body {
                background-color: white;
            }
            .main-container {
                box-shadow: none;
                margin: 0;
                padding: 0;
            }
        }
    </style>
    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <div class="company-logo">
                <!-- You can add your logo here -->
                <h1 class="company-name">ELISYA SALON</h1>
            </div>
            <h2 class="report-title">Reservation Report</h2>
        </div>

        <div class="report-details">
            <div class="report-date">Date: <?php echo date('d F Y'); ?></div>
            <div class="report-number">Report No: RSV-<?php echo date('Ymd'); ?></div>
        </div>

        <table>
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
                    <td><?= esc(date('d-M-Y', strtotime($item['tanggal']))); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="signature-section">
            <div class="signature-box">
                <div class="signature-line"></div>
                <p>Prepared by</p>
            </div>
            <div class="signature-box">
                <div class="signature-line"></div>
                <p>Approved by</p>
            </div>
        </div>

        <div class="footer">
            <p>Elisya Salon</p>
            <p>Address: [Your Address Here] | Phone: [Your Phone Number] | Email: [Your Email]</p>
        </div>

        <div class="page-number">
            Page 1
        </div>
    </div>
</body>
</html>
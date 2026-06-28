<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        body {
            background: linear-gradient(135deg, #fff6e6 0%, #ffecd2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }

        .container {
            background: rgba(255, 253, 250, 0.95);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 800px;
            box-shadow: 0 15px 30px rgba(185, 157, 107, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(212, 175, 115, 0.2);
        }

        .form-title {
            color: #9a7d45;
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 600;
            position: relative;
        }

        .form-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #d4af73, #e8d3a9);
            border-radius: 2px;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #9a7d45;
            font-weight: 500;
            font-size: 14px;
            transform: translateY(0);
            transition: 0.3s ease;
        }

        select, input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e8d3a9;
            border-radius: 10px;
            font-size: 14px;
            background-color: white;
            color: #806633;
            transition: all 0.3s ease;
        }

        select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23d4af73' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 20px;
            padding-right: 40px;
        }

        select:focus, input:focus {
            outline: none;
            border-color: #d4af73;
            box-shadow: 0 0 0 3px rgba(212, 175, 115, 0.1);
        }

        .form-group:hover label {
            color: #b38b4d;
        }

        .btn-submit {
            background: linear-gradient(45deg, #d4af73, #e8d3a9);
            color: #66512b;
            padding: 15px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: 600;
            margin-top: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 175, 115, 0.4);
            background: linear-gradient(45deg, #c9a269, #ddc59f);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        input::placeholder {
            color: #c4b08c;
        }

        select option {
            color: #806633;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin: 10px;
            }
            
            .form-title {
                font-size: 24px;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-group {
            animation: fadeIn 0.5s ease forwards;
            opacity: 0;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.4s; }
        .form-group:nth-child(5) { animation-delay: 0.5s; }
        .form-group:nth-child(6) { animation-delay: 0.6s; }
        .form-group:nth-child(7) { animation-delay: 0.7s; }
        .form-group:nth-child(8) { animation-delay: 0.8s; }

        /* Added luxury touches */
        .container::before {
            content: '';
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
            border-radius: 21px;
            background: linear-gradient(45deg, #d4af7380, #e8d3a980);
            z-index: -1;
        }

        select, input {
            background: rgba(255, 255, 255, 0.9);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="form-title">New Salon Reservation</h2>
        <form action="/prosesAddReservation" method="POST">
            <div class="form-row">
            <div class="form-group">
                <label for="no_transaksi">Transaction Number</label>
                <!-- Disabled input for display -->
                <input 
                    type="text" 
                    id="no_transaksi_display" 
                    class="form-control" 
                    value="<?php echo $noTransaksi; ?>" 
                    disabled>
                
                <!-- Hidden input for form submission -->
                <input 
                    type="hidden" 
                    id="no_transaksi" 
                    name="no_transaksi" 
                    value="<?php echo $noTransaksi; ?>">
            </div>


                <div class="form-group">
                    <label for="member_id">Member</label>
                    <input type="text" id="member_id" name="member" value="<?php echo $username; ?>"  required disabled>
                    <input type="text" id="member_id" name="member_id" value="<?php echo $userId; ?>" required hidden>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="employee_id">Employee</label>
                    <select id="employee_id" name="employee_id" required>

                        <option value="" hidden selected>Select Employee</option>
                        <?php foreach ($dataEmployee as $employee) : ?>
                            <option value="<?= $employee['id'] ?>"><?= $employee['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

            </div>

            <div class="form-row">

            <div class="form-group">
                    <label for="type_id">Type</label>
                    <select id="type_id" name="type_id" required>
                        <option value="" hidden selected>Select Type</option>
                        <?php foreach ($dataTypes as $type) : ?>
                            <option value="<?= $type['id'] ?>">
                                <?= $type['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="service_id">Service</label>
                    <select id="service_id" name="service_id" required>
                        <option value="">Select Service</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" required >
                </div>

                <div class="form-group">
                    <label for="duration">Duration (minutes)</label>
                    <input type="text" id="duration" name="duration" required >
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="tanggal">Date</label>
                    <input type="date" id="tanggal" name="tanggal" required>
                </div>
            </div>

            <button type="submit" class="btn-submit">Save Reservation</button>
        </form>
    </div>
    <script>
        document.getElementById('type_id').addEventListener('change', function() {
        const typeId = this.value;
        const serviceSelect = document.getElementById('service_id');
        const priceInput = document.getElementById('price');
        const durationInput = document.getElementById('duration');

        // Clear existing options
        serviceSelect.innerHTML = '<option value="">Select Service</option>';
        priceInput.value = '';
        durationInput.value = '';

        if (typeId) {
            fetch(`/reservation/getServices/${typeId}`, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                data.forEach(service => {
                    const option = document.createElement('option');
                    option.value = service.id;
                    option.textContent = service.name;
                    serviceSelect.appendChild(option);
                });
            });
        }
    });

        // Add event listener for service selection to populate price and duration
    document.getElementById('service_id').addEventListener('change', function() {
            const serviceId = this.value;
            
            if (serviceId) {
                fetch(`/reservation/getServiceDetails/${serviceId}`, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('price').value = data.price;
                    document.getElementById('duration').value = data.duration;
                });
            }
    });
</script>
</body>
</html>
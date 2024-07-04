<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatamorgana Coffee House Reservation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container-fluid {
            position: relative;
            color: rgb(0, 0, 0);
            background-size: cover;
            background-image: url('public/images/kopibg4.png');

        }

        .reservation-form {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .reservation-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .reservation-form .form-group label {
            font-weight: bold;
        }

        .reservation-form .btn {
            width: 100%;
            background: #6c757d;
            border: none;
        }

        .reservation-form .btn:hover {
            background: #5a6268;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="reservation-form">
                    <h2>Reservasi Tempat</h2>
                    <form action="admin/controller/reservasi.php" method="POST">
                        <div class="form-group">
                            <label for="customer_name">Nama Pemesan</label>
                            <input name="customer_name" type="text" class="form-control" id="customer_name" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="customer_contact">Nomor WA</label>
                            <input name="customer_contact" type="text" class="form-control" id="customer_contact" placeholder="Masukkan nomor WhatsApp Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="reservation_date">Tanggal Reservasi</label>
                            <input name="reservation_date" type="date" class="form-control" id="reservation_date" required>
                        </div>
                        <div class="form-group">
                            <label for="reservation_time">Jam Reservasi</label>
                            <input name="reservation_time" type="time" class="form-control" id="reservation_time" required>
                        </div>
                        <div class="form-group">
                            <label for="num_of_people">Jumlah Orang</label>
                            <input name="num_of_people" type="number" class="form-control" id="num_of_people" placeholder="Masukkan jumlah orang" required>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Reservasi Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
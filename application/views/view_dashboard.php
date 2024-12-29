    <style>
        body {
            background-color: #ffcce0;
            font-family: Arial, sans-serif;
        }

        .dashboard {
            margin-top: 80px;
        }

        .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .card-icon {
            font-size: 50px;
            color: #fff;
            padding: 20px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .modal-icon {
            background-color: #ff6f61;
        }

        .pelanggan-icon {
            background-color: #ffb74d;
        }

        .pesanan-icon {
            background-color: #64b5f6;
        }

        .produk-icon {
            background-color: #4db6ac;
        }

        .transaksi-icon {
            background-color: #9575cd;
        }
    </style>
    </head>

    <body>
        <div class="container dashboard">
            <div class="row text-center">
                <h1 class="mb-4">Dashboard</h1>
                <div class="col-md-4 mb-4">
                    <div class="card bg-light shadow text-center">
                        <div class="card-body">
                            <div class="card-icon modal-icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <h5 class="card-title">Data Modal</h5>
                            <p class="card-text">Kelola data modal usaha Anda di sini.</p>
                            <a href="modal" class="btn btn-outline-primary">Lihat Data</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card bg-light shadow text-center">
                        <div class="card-body">
                            <div class="card-icon pelanggan-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h5 class="card-title">Data Pelanggan</h5>
                            <p class="card-text">Lihat dan kelola informasi pelanggan.</p>
                            <a href="pelanggan" class="btn btn-outline-primary">Lihat Data</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card bg-light shadow text-center">
                        <div class="card-body">
                            <div class="card-icon pesanan-icon">
                                <i class="bi bi-cart"></i>
                            </div>
                            <h5 class="card-title">Data Pesanan</h5>
                            <p class="card-text">Kelola semua pesanan pelanggan di sini.</p>
                            <a href="pesanan" class="btn btn-outline-primary">Lihat Data</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card bg-light shadow text-center">
                        <div class="card-body">
                            <div class="card-icon produk-icon">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <h5 class="card-title">Data Produk</h5>
                            <p class="card-text">Kelola inventaris produk dengan mudah.</p>
                            <a href="produk" class="btn btn-outline-primary">Lihat Data</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card bg-light shadow text-center">
                        <div class="card-body">
                            <div class="card-icon transaksi-icon">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <h5 class="card-title">Data Transaksi</h5>
                            <p class="card-text">Pantau semua transaksi usaha Anda.</p>
                            <a href="transaksi" class="btn btn-outline-primary">Lihat Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Inline -->
    <style>
        body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f5;
        }

        .navbar {
        background-color: white;
        }

        .navbar-brand,
        .nav-link {
        color: #343a40 !important;
        }

        .hero-section {
        background: linear-gradient(135deg, #74ebd5 0%, #9face6 100%);
        color: white;
        height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        }

        .hero-section h1 {
        font-size: 4rem;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        .footer {
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 20px;
        margin-top: 50px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">ModernSite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div>
            <h1>Welcome to ModernSite</h1>
            <p class="lead">A modern web experience with Laravel & Bootstrap</p>
            <a href="#" class="btn btn-light btn-lg">Get Started</a>
        </div>
    </div>

    <!-- Book Section -->
    <div class="container mt-5">
        <h1>Book List</h1>

        <!-- Membuat tabel untuk menampilkan informasi buku dalam bentuk baris dan kolom -->
        <table>

            <!-- Bagian ini adalah kepala tabel (header), yang menjelaskan kolom-kolom apa saja yang ada -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                </tr>
            </thead>
            <tbody>
                <!-- Kode ini akan mengambil setiap buku dari daftar $books dan menampilkannya satu per satu -->
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book['id'] }}</td> <!-- Menampilkan ID dari buku yang diambil -->
                    <td>{{ $book['title'] }}</td> <!-- Menampilkan judul buku -->
                    <td>{{ $book['author'] }}</td> <!-- Menampilkan nama pengarang buku -->
                </tr>
                <!-- foreach yaitu perulangan (looping) yang terus berjalan sampai semua buku dalam daftar $books ditampilkan -->
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 ModernSite. All rights reserved.</p>
    </footer>

    <!-- Script JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

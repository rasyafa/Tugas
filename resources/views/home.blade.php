<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Modern Design</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for Modern Design -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand,
        .nav-link {
            color: #fff !important;
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

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card p-4">
                    <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto"
                        alt="Feature 1">
                    <div class="card-body">
                        <h5 class="card-title">Feature 1</h5>
                        <p class="card-text">Discover amazing features and design simplicity.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4">
                    <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto"
                        alt="Feature 2">
                    <div class="card-body">
                        <h5 class="card-title">Feature 2</h5>
                        <p class="card-text">Built for performance and scalability.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4">
                    <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto"
                        alt="Feature 3">
                    <div class="card-body">
                        <h5 class="card-title">Feature 3</h5>
                        <p class="card-text">Effortlessly customizable and extensible.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 ModernSite. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <!-- Chart.js and Datalabels Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <a class="navbar-brand" href="#">Analytics Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Main Content -->
<div class="container my-4">
    <h2 class="text-center text-primary mb-4">Project Analytics Dashboard</h2>
    
    <div class="row">
        <!-- Line Chart Card -->
        <div class="col-md-6 mb-4">
            <div class="card chart-card shadow">
                <div class="card-header bg-gradient-primary text-white">Scans Over Time</div>
                <div class="card-body">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Bar Chart Card -->
        <div class="col-md-6 mb-4">
            <div class="card chart-card shadow">
                <div class="card-header bg-gradient-success text-white">Scans by City</div>
                <div class="card-body">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
        
         <!-- Map Chart Card -->
        <div class="col-md-12 mb-4">
            <div class="card chart-card shadow">
                <div class="card-header bg-gradient-warning text-white">Scans by Location</div>
                <div class="card-body">
                    <div id="map" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
        
        <!-- Device Distribution Chart Card -->
        <div class="col-md-6 mb-4">
            <div class="card chart-card shadow">
                <div class="card-header bg-gradient-secondary text-white">Device Distribution</div>
                <div class="card-body">
                    <canvas id="deviceChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Browser Distribution Chart Card -->
        <div class="col-md-6 mb-4">
            <div class="card chart-card shadow">
                <div class="card-header bg-gradient-info text-white">Browser Distribution</div>
                <div class="card-body">
                    <canvas id="browserChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS, Leaflet, and Dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script src="assets/js/charts.js"></script>
</body> 
</html>

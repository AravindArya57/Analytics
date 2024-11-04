fetch('data.php')
    .then(response => response.json())
    .then(data => {
        // Line Chart for Scans Over Time
        const ctxLine = document.getElementById('lineChart').getContext('2d');
        new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: data.dates,
                datasets: [{
                    label: 'Scans Over Time',
                    data: data.scans,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: '#6610f2',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    datalabels: {
                        align: 'end',
                        anchor: 'end',
                        color: '#333',
                        formatter: function(value) {
                            return value;
                        }
                    }
                }
            }
        });

        // Bar Chart for Scans by City
        const ctxBar = document.getElementById('barChart').getContext('2d');
        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: data.cities.map(city => city.name),
                datasets: [{
                    label: 'Scans by City',
                    data: data.cities.map(city => city.scans),
                    backgroundColor: ['#6610f2', '#20c997', '#ff8a00', '#007bff'],
                    borderColor: ['#6610f2', '#20c997', '#ff8a00', '#007bff'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    datalabels: {
                        align: 'end',
                        anchor: 'end',
                        color: '#333',
                        formatter: function(value) {
                            return value;
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Map Initialization
        // const map = L.map('map').setView([20.5937, 78.9629], 5);  // Center on India

        // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     maxZoom: 18,
        //     attribution: '© OpenStreetMap contributors'
        // }).addTo(map);

        // // Adding markers for each city with popups
        // data.cities.forEach(city => {
        //     const marker = L.marker([city.lat, city.lon]).addTo(map);
        //     marker.bindPopup(`<b>${city.name}</b><br>Scans: ${city.scans}`);
        // });
        
        // Map Initialization
        const map = L.map('map', {
            center: [20.5937, 78.9629],
            zoom: 5,
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Adding markers for each city with popups
        data.cities.forEach(city => {
            const marker = L.marker([city.lat, city.lon]).addTo(map);
            marker.bindPopup(`<b>${city.name}</b><br>Scans: ${city.scans}`);
        });

        // Ensure map is properly rendered
        setTimeout(() => {
            map.invalidateSize();
        }, 300);

         // Device Distribution Chart
        const ctxDevice = document.getElementById('deviceChart').getContext('2d');
        new Chart(ctxDevice, {
            type: 'doughnut',
            data: {
                labels: Object.keys(data.devices),
                datasets: [{
                    data: Object.values(data.devices),
                    backgroundColor: ['#28a745', '#ffc107', '#6f42c1'],
                    borderColor: ['#28a745', '#ffc107', '#6f42c1'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    datalabels: {
                        align: 'end',
                        anchor: 'end',
                        color: '#333',
                        formatter: function(value) {
                            return value;
                        }
                    }
                }
            }
        });

        // Browser Distribution Chart
        const ctxBrowser = document.getElementById('browserChart').getContext('2d');
        new Chart(ctxBrowser, {
            type: 'pie',
            data: {
                labels: Object.keys(data.browsers),
                datasets: [{
                    data: Object.values(data.browsers),
                    backgroundColor: ['#007bff', '#ff6384', '#ffcd56', '#4bc0c0'],
                    borderColor: ['#007bff', '#ff6384', '#ffcd56', '#4bc0c0'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    datalabels: {
                        align: 'end',
                        anchor: 'end',
                        color: '#333',
                        formatter: function(value) {
                            return value;
                        }
                    }
                }
            }
        });
    })
    .catch(error => console.error('Error fetching data:', error));

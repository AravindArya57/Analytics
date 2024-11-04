<?php
header('Content-Type: application/json');

$data = [
    'dates' => ['2024-10-06','2024-10-09', '2024-10-12', '2024-11-14', '2024-10-18', '2024-11-04'],
    'scans' => [6, 12, 18,07,06,15],
    'cities' => [   
        ['name' => 'Chennai', 'scans' => 34, 'lat' => 13.0827, 'lon' => 80.2707],
        ['name' => 'Erode', 'scans' => 10, 'lat' => 11.3410, 'lon' => 77.7172],
        ['name' => 'Salem', 'scans' => 10, 'lat' => 11.6643, 'lon' => 78.1460],
        ['name' => 'Coimbatore', 'scans' => 3, 'lat' => 11.0168, 'lon' => 76.9558],
    ],
     'devices' => [
        'Android' => 13,
        'iOS' => 49,
        'Desktop' => 20,
    ],
    'browsers' => [
        'Chrome' => 50,
        'Safari' => 30,
        'Firefox' => 15,
        'Edge' => 5,
    ]
];

echo json_encode($data);
?>

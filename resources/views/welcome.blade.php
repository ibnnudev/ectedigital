@php
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Schema;

    function findBestEpsilon($X, $minPts)
    {
        $m = count($X);
        $distances = [];

        // Calculate pairwise distances between all points
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $m; $j++) {
                $distances[$i][$j] = calculateDistance($X[$i], $X[$j]);
            }
        }

        $bestEpsilon = null;
        $bestNumPoints = 0;

        // Find the best epsilon value
        for ($epsilon = 0.1; $epsilon <= 1.0; $epsilon += 0.1) {
            $numPoints = 0;

            // Count the number of points within epsilon distance
            for ($i = 0; $i < $m; $i++) {
                for ($j = 0; $j < $m; $j++) {
                    if ($distances[$i][$j] <= $epsilon) {
                        $numPoints++;
                    }
                }
            }

            // Update the best epsilon value if necessary
            if ($numPoints >= $minPts && $numPoints > $bestNumPoints) {
                $bestEpsilon = $epsilon;
                $bestNumPoints = $numPoints;
            }
        }

        return $bestEpsilon;
    }

    function calculateDistance($point1, $point2)
    {
        // Calculate the Euclidean distance between two points
        // Implement your distance calculation logic here
        // For example:
        // return sqrt(pow($point1['x'] - $point2['x'], 2) + pow($point1['y'] - $point2['y'], 2));
    }

    // Example usage
    $X = [
        ['x' => 1, 'y' => 2],
        ['x' => 3, 'y' => 4],
        ['x' => 5, 'y' => 6],
        // Add more data points here
    ];

    $minPts = 3;
    $bestEpsilon = findBestEpsilon($X, $minPts);

    echo 'Best epsilon value: ' . $bestEpsilon;
@endphp

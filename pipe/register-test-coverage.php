<?php
declare(strict_types=1);

require 'vendor/autoload.php';

if (file_exists('coverage.php') === false) {
    throw new Exception('Coverage file not found.');
}

$codeCoverageInstance = require 'coverage.php';

// GET COVERAGE FIGURE
$report = $codeCoverageInstance->getReport();

$totalExecuted = 0;
$totalExecutable = 0;

foreach($report->files() as $file) {
    $totalExecutable += $file->numberOfExecutableLines();
    $totalExecuted += $file->numberOfExecutedLines();
}

$totalCoveragePercentage = $totalExecuted / $totalExecutable * 100;

$coverageFigure = round($totalCoveragePercentage, 2);

// GET SCRIPT OPTIONS
$options = getopt(short_options: '', long_options: ['branch:', 'url:']);

if (isset($options['branch']) === false) {
    throw new Exception('Branch name not provided.');
}

if (isset($options['url']) === false) {
    throw new Exception('url not provided.');
}

$branch = (string) $options['branch'];
$url = (string) $options['url'];

// SEND COVERAGE FIGURE TO BITBUCKET APP
if (filter_var(value: $url, filter: FILTER_VALIDATE_URL) === false) {
    throw new Exception('Invalid url');
}

$options = [
    'http' => [
        'method' => 'POST',
        'header' => "Content-Type: application/json",
        'content' => json_encode([
            'coverage' => $coverageFigure,
            'branch' => $branch,
        ]),
    ]
];

$context = stream_context_create($options);

$response = file_get_contents($url, false, $context);

if ($response === false) {
    throw new Exception('file_get_contents failed');
}
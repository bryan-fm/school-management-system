<?php
$reportFile = 'phpstan-report.json';

if (!file_exists($reportFile)) {
    echo "Arquivo de relatório não encontrado.\n";
    exit(1);
}

$data = json_decode(file_get_contents($reportFile), true);

$totalFiles = count($data['files'] ?? []);
$totalErrors = 0;

foreach ($data['files'] as $file) {
    $totalErrors += count($file['messages']);
}

if ($totalFiles === 0) {
    echo "Nenhum arquivo analisado.\n";
    exit(1);
}

// Fórmula exponencial para suavizar a queda da qualidade
$quality = 100 * exp(-$totalErrors / 1000);
$quality = max(0, min(100, round($quality)));

echo "Arquivos analisados: $totalFiles\n";
echo "Erros encontrados: $totalErrors\n";
echo "Qualidade estimada: $quality%\n";
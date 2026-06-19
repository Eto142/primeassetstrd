<?php
$root = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'home';
$folders = ['learn', 'company', 'markets', 'trading'];
$updated = [];
foreach ($folders as $folder) {
    $dir = $root . DIRECTORY_SEPARATOR . $folder;
    if (!is_dir($dir)) {
        continue;
    }
    $files = glob($dir . DIRECTORY_SEPARATOR . '*.blade.php');
    foreach ($files as $file) {
        $text = file_get_contents($file);
        if ($text === false) {
            continue;
        }
        if (strpos($text, "@include('home.header')") === false || strpos($text, '<!DOCTYPE html>') === false) {
            continue;
        }
        $title = '';
        if (preg_match('/<title>(.*?)<\/title>/is', $text, $m)) {
            $title = trim($m[1]);
        }
        if ($title === '') {
            continue;
        }
        $head = '';
        if (preg_match('/<head>(.*?)<\/head>/is', $text, $m)) {
            $head = trim($m[1]);
            $head = preg_replace('/<title>.*?<\/title>/is', '', $head);
            $head = trim($head);
        }
        if (!preg_match('/<body[^>]*>(.*?)<\/body>/is', $text, $m)) {
            continue;
        }
        $body = trim($m[1]);
        $body = preg_replace('/@include\(\s*[\'\"]home\.footer[\'\"]\s*\)/', '', $body, 1);
        $body = preg_replace('/<\/body>\s*<\/html>\s*$/is', '', $body);
        $body = trim($body) . "\n";

        $pageTitle = str_replace("'", "\\'", $title);
        $normalized = "@php\n";
        $normalized .= "\$pageTitle = '$pageTitle';\n";
        if ($head !== '') {
            $normalized .= "\$pageHead = <<<'PAGEHEAD'\n" . $head . "\nPAGEHEAD;\n";
        }
        $normalized .= "@endphp\n\n@include('home.header')\n\n";
        $normalized .= $body;
        $normalized .= "\n@include('home.footer')\n";

        if ($normalized !== $text) {
            file_put_contents($file, $normalized);
            $updated[] = $file;
        }
    }
}
foreach ($updated as $path) {
    echo "Updated: $path\n";
}
if (empty($updated)) {
    echo "No files updated.\n";
}

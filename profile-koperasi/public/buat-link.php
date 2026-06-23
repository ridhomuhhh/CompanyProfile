<?php
$target = $_SERVER['DOCUMENT_ROOT'] . '/../storage/app/public';
$link = $_SERVER['DOCUMENT_ROOT'] . '/storage';

// Pastikan folder target ada
if (!is_dir($target)) {
    mkdir($target, 0755, true);
}

// Kalau folder link (palsu) masih ada, hapus dulu
if (file_exists($link) && !is_link($link)) {
    array_map('unlink', glob("$link/*.*"));
    rmdir($link);
}

if (symlink($target, $link)) {
    echo "Symlink Berhasil! Fitur upload otomatis akan langsung sinkron ke web.";
} else {
    echo "Gagal. Fungsi symlink() kemungkinan dimatikan oleh hosting.";
}

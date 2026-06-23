<?php

namespace App\Filament\Widgets;

use App\Models\Berita;
use App\Models\Kontak;
use App\Models\Galeri;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    // PERBAIKAN DI SINI: Hapus kata 'static'
    protected ?string $pollingInterval = '10s';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Berita', Berita::count())
                ->description('Berita yang sudah dipublish')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('success')
                ->chart([7, 3, 4, 5, 6, 3, 5, 8]),

            Stat::make('Galeri Foto', Galeri::count())
                ->description('Dokumentasi kegiatan')
                ->descriptionIcon('heroicon-m-photo')
                ->color('info'),

            // Pastikan logika ini aman (kalau tabel kontak tidak punya is_active, hapus where-nya)
            Stat::make('Pesan Masuk', Kontak::count())
                ->label('Total Pesan')
                ->description('Pesan dari pengunjung')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('warning'),
        ];
    }
}

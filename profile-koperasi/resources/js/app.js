import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const dots = document.querySelectorAll('.timeline-dot');
    const items = document.querySelectorAll('.timeline-item');

    // Cek apakah elemen timeline ada di halaman ini
    if (dots.length > 0 && items.length > 0) {
        
        dots.forEach(dot => {
            dot.addEventListener('click', function () {
                // 1. Hapus kelas 'active' dari semua dot dan item
                dots.forEach(d => d.classList.remove('active'));
                items.forEach(i => i.classList.remove('active'));

                // 2. Tambahkan kelas 'active' ke dot yang diklik
                this.classList.add('active');

                // 3. Tampilkan item yang sesuai
                const targetId = this.getAttribute('data-target');
                document.querySelector(targetId).classList.add('active');
            });
        });

    }
});
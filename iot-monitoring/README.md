# README - IoT Monitoring System Landing Page

## Deskripsi
Landing page untuk perusahaan System IoT Monitoring yang dibangun menggunakan framework Laravel 11.

## Fitur
- **Hero Section** - Tampilan utama dengan statistik dan dashboard preview
- **Features** - 6 fitur unggulan sistem monitoring IoT
- **Solutions** - Solusi untuk 4 industri berbeda (Manufaktur, Pertanian, Smart Building, Logistik)
- **Pricing** - 3 paket harga (Starter, Professional, Enterprise)
- **Contact Form** - Formulir kontak untuk lead generation
- **CTA Section** - Call-to-action untuk demo gratis
- **Responsive Design** - Optimized untuk desktop, tablet, dan mobile
- **Smooth Scrolling** - Navigasi smooth antar section
- **Animation on Scroll** - Animasi fade-in saat scrolling

## Struktur Folder
```
iot-monitoring/
├── app/
│   └── Http/
│       └── Controllers/
│           └── LandingController.php
├── bootstrap/
│   └── app.php
├── config/
├── database/
├── public/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── main.js
│   └── index.php
├── resources/
│   └── views/
│       ├── components/
│       │   ├── navbar.blade.php
│       │   └── footer.blade.php
│       ├── layouts/
│       │   └── app.blade.php
│       └── landing/
│           └── home.blade.php
├── routes/
│   └── web.php
├── storage/
└── .env
```

## Instalasi

### Prasyarat
- PHP >= 8.2
- Composer
- Node.js & NPM (opsional, untuk asset compilation)

### Langkah Instalasi

1. Clone atau download project ini
```bash
cd iot-monitoring
```

2. Install dependencies PHP
```bash
composer install
```

3. Copy file environment
```bash
cp .env.example .env
```

4. Generate application key
```bash
php artisan key:generate
```

5. Set permission untuk storage folder
```bash
chmod -R 775 storage/
chmod -R 775 bootstrap/cache/
```

6. Jalankan development server
```bash
php artisan serve
```

7. Akses aplikasi di browser
```
http://localhost:8000
```

## Teknologi yang Digunakan
- **Backend**: Laravel 11
- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Icons**: Font Awesome 6
- **Fonts**: Google Fonts (Inter)
- **Template Engine**: Blade

## Customization

### Mengubah Warna
Edit file `public/css/style.css` pada bagian `:root`:
```css
:root {
    --primary-color: #2563eb;
    --primary-dark: #1d4ed8;
    --secondary-color: #64748b;
    --accent-color: #0ea5e9;
    --success-color: #10b981;
}
```

### Mengubah Konten
Edit file `resources/views/landing/home.blade.php` untuk mengubah:
- Teks hero section
- Fitur-fitur
- Solusi industri
- Paket harga
- Informasi kontak

### Menambah Route Baru
Edit file `routes/web.php`:
```php
Route::get('/about', function() {
    return view('landing.about');
});
```

## API Integration (Opsional)
Untuk mengintegrasikan dengan backend IoT monitoring system:

1. Buat model untuk perangkat IoT
2. Buat controller untuk API endpoints
3. Gunakan AJAX/Fetch untuk mengambil data real-time
4. Implementasikan WebSocket untuk live updates

## License
MIT License

## Contact
Untuk pertanyaan atau dukungan, silakan hubungi tim development.

---
**IoT Monitor Solutions** - Sistem Monitoring IoT Profesional

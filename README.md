# Percobaan MVC PHP

Proyek ini merupakan implementasi sederhana arsitektur Model-View-Controller (MVC) menggunakan PHP. Tujuannya untuk memahami pemisahan logika aplikasi, tampilan, dan pengelolaan data secara terstruktur, serta mengujinya melalui deployment di **Railway**.

## Fitur Utama
- Struktur folder berbasis MVC (Model, View, Controller)
- Routing dinamis menggunakan PHP native
- Template view sederhana dengan HTML dan CSS
- Koneksi database menggunakan PDO
- Siap untuk deployment di Railway

## Struktur Direktori
```
project/
│
├── app/
│   ├── controllers/
│   ├── models/
│   └── views/
│
├── public/
│   └── index.php
│
├── config/
│   └── database.php
│
└── README.md
```

## Cara Menjalankan
1. Clone repositori:
   ```
   git clone https://github.com/username/nama-repo.git
   ```
2. Masuk ke folder proyek:
   ```
   cd nama-repo
   ```
3. Jalankan server lokal:
   ```
   php -S localhost:8000 -t public
   ```
4. Buka browser dan akses `http://localhost:8000`

## Deployment di Railway
1. Login ke [Railway](https://railway.app)
2. Hubungkan akun GitHub dan pilih repositori ini
3. Railway akan otomatis mendeteksi konfigurasi PHP dan melakukan deployment
4. Akses aplikasi melalui URL yang disediakan Railway

## Lisensi
Proyek ini bersifat open source dan dapat digunakan untuk tujuan pembelajaran.

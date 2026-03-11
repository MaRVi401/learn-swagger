<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# 🚀 My Laravel Learning Journey

Proyek ini adalah ruang eksplorasi saya dalam mendalami ekosistem **Laravel**.  
Sebagai mahasiswa **Teknik Informatika** yang fokus pada **Backend Development**, saya menggunakan repositori ini untuk mengimplementasikan berbagai fitur dan tools yang umum digunakan dalam standar industri.

---

# 🛠️ Apa yang Saya Pelajari & Implementasikan?

Baru-baru ini, saya fokus meningkatkan kualitas pengembangan backend dengan menambahkan beberapa tools penting.

## 📖 1. API Documentation (Swagger / OpenAPI)

Saya belajar membuat dokumentasi API yang **interaktif dan profesional** menggunakan **L5-Swagger**.

**Tujuan:**

- Memudahkan frontend developer memahami endpoint API
- Menguji endpoint langsung dari browser
- Menyediakan dokumentasi API yang jelas

**Akses dokumentasi:**

```
/api/documentation
```

---

## 🔍 2. Real-time Monitoring (Laravel Telescope)

Saya mengintegrasikan **Laravel Telescope** untuk membantu proses debugging dan monitoring aplikasi.

**Fitur yang digunakan:**

- Monitoring database queries
- Melihat exception secara detail
- Memantau mail yang dikirim
- Mengecek request dan response log

**Akses:**

```
/telescope
```

---

## 🏗️ 3. Backend Architecture

Beberapa konsep backend yang saya implementasikan dalam proyek ini:

- RESTful API development
- Database management menggunakan **Laravel Migrations**
- ORM menggunakan **Eloquent**
- Struktur kode backend yang lebih maintainable
- Dasar optimasi performa dan keamanan aplikasi

---

# 💻 Tech Stack

- **Framework:** Laravel 12  
- **API Documentation:** L5-Swagger  
- **Debugging Tool:** Laravel Telescope  
- **Database:** PostgreSQL / MySQL

---

# ⚙️ Cara Menjalankan Proyek

## 1️⃣ Clone Repository & Install Dependency

```bash
git clone https://github.com/username/repo-kamu.git
cd repo-kamu
composer install
```

---

## 2️⃣ Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

---

## 3️⃣ Setup Database & Generate Documentation

```bash
php artisan migrate
php artisan l5-swagger:generate
```

---

## 4️⃣ Jalankan Server

```bash
php artisan serve
```

Aplikasi dapat diakses di:

```
http://127.0.0.1:8000
```

---

# 👨‍💻 Author

**Ahmad Yassin Hasan Al-bana**  
Computer Science Student  
Politeknik Negeri Indramayu

> "Terus belajar, terus mengudara." 🚀

---

# 📄 License

Project ini menggunakan lisensi **MIT License**.

https://opensource.org/licenses/MIT
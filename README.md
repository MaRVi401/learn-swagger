```markdown
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## 🚀 My Laravel Learning Journey

Proyek ini adalah ruang eksplorasi saya dalam mendalami ekosistem Laravel. Sebagai mahasiswa Teknik Informatika yang fokus pada **Backend Development**, saya menggunakan repositori ini untuk mengimplementasikan berbagai fitur dan tools standar industri.

---

## 🛠️ Apa yang Saya Pelajari & Implementasikan?

Baru-baru ini, saya fokus meningkatkan kualitas pengembangan dengan menambahkan:

### 1. 📖 API Documentation (Swagger/OpenAPI)
Saya belajar cara membuat dokumentasi API yang profesional dan interaktif menggunakan **L5-Swagger**.
- **Kenapa?** Agar frontend developer atau user lain bisa mencoba endpoint API secara langsung tanpa perlu membaca kode manual.
- **Akses:** Jalankan server dan buka `/api/documentation`.

### 2. 🔍 Real-time Monitoring (Laravel Telescope)
Saya mengintegrasikan **Laravel Telescope** untuk mempermudah proses debugging.
- **Fitur yang digunakan:** Monitoring database queries, melihat exception secara detail, memantau mail, dan mengecek request log.
- **Akses:** Buka `/telescope` di browser Anda.

### 3. 🏗️ Backend Architecture
- Implementasi RESTful API.
- Manajemen database menggunakan Migrations dan Eloquent ORM.
- Optimasi performa dan keamanan dasar aplikasi web.

---

## 💻 Tech Stack

* **Framework:** [Laravel 11](https://laravel.com/docs)
* **Documentation:** [L5-Swagger](https://github.com/DarkaOnLine/L5-Swagger)
* **Debugging:** [Laravel Telescope](https://laravel.com/docs/telescope)
* **Database:** PostgreSQL / MySQL (sesuaikan dengan yang kamu pakai)

---

## ⚙️ Cara Menjalankan Proyek

1. **Clone & Install**
   ```bash
   git clone [https://github.com/username/repo-kamu.git](https://github.com/username/repo-kamu.git)
   composer install

```

2. **Environment Setup**
```bash
cp .env.example .env
php artisan key:generate

```


3. **Database & Documentation**
```bash
php artisan migrate
php artisan l5-swagger:generate

```


4. **Run Server**
```bash
php artisan serve

```



---

## 👨‍💻 Kontributor

**Ahmad Yassin Hasan Al-bana** *Computer Science Student at Politeknik Negeri Indramayu* "Terus belajar, terus mengudara." 🚀

---

License: [MIT](https://opensource.org/licenses/MIT).


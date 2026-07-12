# Pembagian Peran Tim WastePoint

## Project Manager — Eno

Tanggung jawab:

- Membuat dan mengatur repository GitHub.
- Menyiapkan branch `main` dan `develop`.
- Membuat GitHub Project, issue, milestone, dan pembagian tugas.
- Memeriksa integrasi frontend dan backend.
- Melakukan review Pull Request dan pengujian akhir.
- Menyiapkan dokumentasi instalasi dan laporan kontribusi.

Branch utama:

```text
pm/project-management
```

## Backend Developer — Rapid

Fokus modul: autentikasi, pengguna, profil, dashboard pengguna, dan blog.

File utama:

```text
app/Http/Controllers/Auth/
app/Http/Controllers/User/
app/Http/Controllers/HomeController.php
app/Http/Controllers/Blog/BlogController.php
app/Http/Controllers/Admin/PengelolaanBlogController.php
app/Http/Middleware/EnsureRole.php
app/Models/User.php
app/Models/Blog.php
database/migrations/2014_10_12_000000_create_users_table.php
database/migrations/2014_10_12_100000_create_password_resets_table.php
database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php
database/migrations/2022_06_17_151954_blog.php
database/migrations/2022_06_20_121025_create_rich_texts_table.php
database/seeders/
```

Branch:

```text
backend/rapid-auth-user-blog
```

## Backend Developer — Angel

Fokus modul: penukaran sampah, produk, konversi poin, admin, model bisnis, database, dan route.

File utama:

```text
app/Http/Controllers/Admin/AdminDashboardController.php
app/Http/Controllers/Admin/PengelolaanPenukaranProdukController.php
app/Http/Controllers/Admin/PengelolaanProdukPemilahController.php
app/Http/Controllers/Admin/PengelolaanSampahController.php
app/Http/Controllers/Penukaran/
app/Models/Waste.php
app/Models/Product.php
app/Models/ProductExchange.php
app/Models/PointConvert.php
database/migrations/2022_04_05_020835_create_wastes_table.php
database/migrations/2022_04_09_113635_create_products_table.php
database/migrations/2022_05_13_092727_create_product_exchanges_table.php
database/migrations/2022_05_28_164522_create_point_converts_table.php
database/migrations/2022_06_22_192442_add_rating_and_feedback_to_wastes.php
database/migrations/2022_06_22_192552_add_rating_and_feedback_to_product_exchanges.php
routes/
```

Branch:

```text
backend/angel-exchange-admin
```

## Frontend Developer — Diana

Fokus modul: halaman publik, autentikasi, blog, dan pengguna.

File utama:

```text
resources/views/layouts/app.blade.php
resources/views/layouts/auth.blade.php
resources/views/layouts/user.blade.php
resources/views/components/navbar.blade.php
resources/views/components/footer.blade.php
resources/views/components/bottombar.blade.php
resources/views/home.blade.php
resources/views/auth/
resources/views/blog/
resources/views/user/
resources/views/not-found.blade.php
resources/css/
resources/js/
public/css/app.css
public/css/style.css
public/js/ShadowOnScroll.js
public/js/TogglePassword.js
public/images/
```

Branch:

```text
frontend/diana-public-user
```

## Frontend Developer — Rifa

Fokus modul: halaman admin dan proses penukaran.

File utama:

```text
resources/views/layouts/admin.blade.php
resources/views/components/sidebar.blade.php
resources/views/components/topbar.blade.php
resources/views/components/trix-field.blade.php
resources/views/admin/
resources/views/penukaran/
resources/css/_trix.css
resources/js/libs/trix.js
public/css/trix.css
public/js/trix.js
public/sb-admin/
```

Branch:

```text
frontend/rifa-admin-exchange
```

## Catatan Teknologi Frontend

Project saat ini menggunakan Blade, CSS kustom, Bootstrap, dan template SB Admin. Tailwind CSS belum tercantum pada `package.json` dan belum digunakan di file CSS. Jangan menulis bahwa Tailwind sudah diterapkan sebelum dependency dan implementasinya benar-benar ditambahkan.

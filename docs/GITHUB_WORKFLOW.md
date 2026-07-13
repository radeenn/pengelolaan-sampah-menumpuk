# Alur Kerja GitHub Tim

## Struktur branch

```text
main
└── develop
    ├── pm/project-management
    ├── backend/rapid-auth-user-blog
    ├── backend/angel-exchange-admin
    ├── frontend/diana-public-user
    └── frontend/rifa-admin-exchange
```

## Aturan kerja

1. `main` hanya berisi versi stabil.
2. Semua anggota membuat branch dari `develop`.
3. Setiap commit harus berisi satu perubahan yang jelas.
4. Setiap anggota melakukan push menggunakan akun GitHub masing-masing.
5. Setiap branch dibuatkan Pull Request menuju `develop`.
6. Eno melakukan review dan merge setelah pengecekan.
7. Setelah seluruh fitur terintegrasi dan lulus pengujian, `develop` di-merge ke `main`.
8. Jangan mengubah nama atau email author commit untuk membuat kontribusi palsu.

## Perintah awal Project Manager

```bash
git init
git branch -M main
git add .
git commit -m "chore: import WastePoint project baseline"
git remote add origin https://github.com/USERNAME/NAMA-REPOSITORY.git
git push -u origin main

git checkout -b develop
git push -u origin develop
```

## Perintah awal anggota

```bash
git clone https://github.com/USERNAME/NAMA-REPOSITORY.git
cd NAMA-REPOSITORY
git checkout develop
git pull origin develop
git checkout -b NAMA-BRANCH
```

## Sebelum membuat Pull Request

```bash
git status
git add path/file-yang-diubah
git commit -m "tipe(scope): deskripsi perubahan"
git pull --rebase origin develop
git push -u origin NAMA-BRANCH
```

## Alur Pull Request

```text
branch anggota → develop → pengujian integrasi → main
```

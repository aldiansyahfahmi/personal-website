# Perbaikan Masalah Gambar Tidak Tampil di Hosting

## 🔴 Masalah
Gambar project tidak tampil ketika aplikasi di-deploy ke hosting, padahal di lokal berfungsi dengan baik.

## 🔍 Root Cause
Ada dua masalah utama yang menyebabkan gambar tidak tampil:

### 1. **Symlink Storage Tidak Dibuat di Server**
Laravel menggunakan symlink dari `public/storage` → `storage/app/public` untuk mengakses file storage melalui web. 
- Di lokal: Symlink dibuat dengan `php artisan storage:link`
- Di hosting: Symlink tidak ada karena deployment workflow tidak menjalankan perintah ini

### 2. **Image Storage Menggunakan Path yang Salah**
Controller sebelumnya menyimpan gambar langsung ke `public/storage/projects`, bukan menggunakan `Storage::disk('public')` yang merupakan best practice Laravel.

## ✅ Solusi yang Diterapkan

### 1. Update Deployment Workflow
**File**: `.github/workflows/deploy.yml`

Menambahkan perintah `php artisan storage:link` di workflow deployment:

```yaml
script: |
  cd ~/domains/aldiansyahfahmi.com/sites/personal_website
  git pull origin main
  composer install --no-dev --optimize-autoloader
  php artisan storage:link    # 👈 DITAMBAHKAN
  php artisan optimize:clear
  php artisan optimize
```

### 2. Update Controller untuk Menggunakan Storage Disk
**File**: `app/Http/Controllers/Admin/ProjectController.php`

**Sebelum:**
```php
$targetDir = public_path('storage/projects');
if (!File::exists($targetDir)) {
    File::makeDirectory($targetDir, 0755, true);
}
$image->move($targetDir, $imageName);
$validated['image'] = 'storage/projects/' . $imageName;
```

**Sesudah:**
```php
// Store image in storage/app/public/projects
$path = $image->storeAs('projects', $imageName, 'public');
$validated['image'] = $path;
```

### 3. Simplifikasi View untuk Display Gambar
**File**: `resources/views/home.blade.php`

**Sebelum:**
```blade
{{ Str::startsWith($project->image, 'http') ? 
   $project->image : 
   (file_exists(public_path($project->image)) ? 
    asset($project->image) : 
    asset('storage/' . $project->image)) 
}}
```

**Sesudah:**
```blade
{{ Str::startsWith($project->image, 'http') ? 
   $project->image : 
   asset('storage/' . $project->image) 
}}
```

## 📁 Struktur Penyimpanan

### Sebelum (❌ Salah):
```
public/
  storage/
    projects/
      image.jpg  # Disimpan langsung di sini
```

### Sesudah (✅ Benar):
```
storage/
  app/
    public/
      projects/
        image.jpg  # Disimpan di sini

public/
  storage/  # Symlink → storage/app/public
```

## 🚀 Cara Deploy

1. **Commit dan Push perubahan ke repository:**
   ```bash
   git add .
   git commit -m "Fix: Add storage:link to deployment workflow"
   git push origin main
   ```

2. **GitHub Actions akan otomatis menjalankan:**
   - Pull kode terbaru
   - Install dependencies
   - **Membuat symlink storage** ✨
   - Clear & optimize cache

## 🔧 Manual Fix (Jika Diperlukan)

Jika sudah ada gambar lama yang tersimpan di `public/storage/projects`, Anda perlu:

1. **Login ke server via SSH**
2. **Pindahkan gambar lama:**
   ```bash
   cd ~/domains/aldiansyahfahmi.com/sites/personal_website
   
   # Buat folder di storage/app/public jika belum ada
   mkdir -p storage/app/public/projects
   
   # Pindahkan gambar dari public/storage ke storage/app/public
   mv public/storage/projects/* storage/app/public/projects/
   
   # Hapus folder lama
   rm -rf public/storage/projects
   
   # Buat ulang symlink
   php artisan storage:link
   ```

3. **Update database untuk path gambar:**
   ```sql
   UPDATE projects 
   SET image = REPLACE(image, 'storage/projects/', 'projects/');
   ```

## ✅ Verifikasi

Setelah deployment, cek:
1. ✅ Symlink `public/storage` sudah ada di server
2. ✅ Gambar tersimpan di `storage/app/public/projects/`
3. ✅ Gambar dapat diakses via URL: `https://aldiansyahfahmi.com/storage/projects/namafile.jpg`
4. ✅ Upload gambar baru melalui admin panel berfungsi

## 📝 Catatan Penting

- **Storage symlink** harus dibuat setiap kali setup environment baru
- Gunakan `Storage::disk('public')` untuk file yang perlu diakses publik
- Path dalam database sekarang: `projects/image.jpg` (tanpa `storage/` prefix)
- View akan otomatis menambahkan `storage/` saat render: `asset('storage/' . $path)`

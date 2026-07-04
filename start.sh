#!/bin/bash

# Jalankan migrasi database otomatis ke Supabase (atau DB yang diset)
php artisan migrate --force

# Hapus cache
php artisan optimize:clear

# Jalankan server Apache
apache2-foreground

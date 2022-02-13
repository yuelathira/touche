<h1 align="center">Website Company Profile Touche Development Center</h1>

## Kebutuhan

Software yang diperlukan untuk menjalankan aplikasi ini adalah

1. [Xampp](https://www.apachefriends.org/)
2. Web Browser (Mozilla, Chrome, Opera, dll)
3. Composer

## Cara Instalasi

1. Pastikan kamu sudah mendownload repositori ini.
2. Ekstrak file yang sudah didownload.
3. Letakkan repositori di dalam folder htdocts xampp kamu atau bisa juga simpan di folder yang sudah didaftar kan ke valet
4. Buka aplikasi xampp dan klik start pada apache dan mysql.
5. cp .env.example .env
6. File env dan sesuaikan dengan sistem kita
7. Buka CMD dan arahkan ke direktori ini.
8. Ketik "composer install" dan tekan enter, atau bisa juga "composer update"
9. ketik "php artisan key:generate" dan tekan enter
10. ketik "php artisan migrate" dan tekan enter
11. ketik "php artisan db:seed" dan tekan enter
12. ketik "php artisan serve" dan tekan enter
13. Buka web browser dan tulis 'http://127.0.0.1:8000/' di form url lalu tekan enter.

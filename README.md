## Install

<ol>
    <li>Pastikan sudah ter-install PHP 7.2 keatas</li>
    <li>Install Composer (jika belum ada)</li>
    <li>Clone Repo -> <code>git clone https://gitlab.com/solopos-dev/solopos-desktop.git</code></li>
    <li>Masuk ke direktori project -> <code>cd solopos-desktop</code></li>
    <li>Jalankan <code>composer install</code></li>
    <li>copy .env.example menjadi .env -> <code>cp .env.example .env</code></li>
    <li>Jalankan <code>php artisan key:generate</code></li>
    <li>Test local dengan mengetikkan <code>php artisan serve</code></li>
</ol>

## Add, Edit, Delete Scripts

<ol>
    <li>Pastikan selalu update repository local sebelum melakukan perubahan/penambahan script -> <code>git pull origin master</code></li>
    <li>Tambah pembaruan script -> <code>git add [nama-file] atau git add .</code></li>
    <li>Commit kode -> <code>git commit -m "isi pesan/catatan"</code></li>
    <li>Push kode ke repo -> <code>git push -u origin master</code></li>
</ol>
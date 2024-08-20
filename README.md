<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## kelas.com front-end Test

Project ini dibuat untuk memenuhi tugas test untuk melamar pekerjaan web developer kelas.com. Di dalam project sudah dibuatkan data dummy untuk mempermudah review project

Untuk menjalankan project, harap lakukan langkah-langkah dibawah ini:

1. copy file .env.example dan ubah nama file menjadi .env

2. install composer dependency dan node modules dependency

```shell
composer install

npm install
```

3. generate key dan migrate database

```shell
php artisan key:generate

php artisan migrate -seed
```

4. build file js

```shell
npm run build
# atau
npm run dev
```

## Preview

### in browser

![alt text](https://github.com/andibachtiar/kelas-dot-com-fe-test/blob/preview1.png?raw=true)

### in mobile

![alt text](https://github.com/andibachtiar/kelas-dot-com-fe-test/blob/preview2.png?raw=true)

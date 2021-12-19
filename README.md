# Welcome to Beauty Daily Website!

Hai! di **Beauty Daily** kamu bisa melakukan review product kecantikan, membaca artikel seputar kecantikan dan kamu juga bisa loh trade/sell/donate beauty product yang kamu punya di **Beauty Daily**. 


# Instalasi

berikut adalah cara menjalankan web **Beauty Daily** di localhost kamu.

- **Pertama** persiapkan tools berikut:
	> PHP >= 7.3 & Composer

- **Kedua** clone repository webinfokecantikan ini dengan command berikut di GIT console:
	> git clone git@github.com:widyaanisa/webinfokecantikan.git webinfokecantikan

- **Ketiga** Sesuaikan file `.env` dari file `.env.example` dengan pengaturan database kamu.

- **Keempat** Instal dependencies yang diperlukan PHP dengan menggunakan [Composer](https://getcomposer.org/ "Composer"). Dengan menjalankan command berikut:
	 > composer install

- **Kelima** Membuat key baru dengan menjalankan command berikut:
	 > php artisan key:generate

- **Keenam** Mempersiapkan database yang akan digunakan dengan command berikut:
	 > php artisan migrate

- **Ketujuh** Menjalankan web menggunakan web server atau dengan command berikut:
	 > php artisan serve
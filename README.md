

# PRAKTIKUM PEMROGRAMAN WEB

## Praktikum Pertemuan 9

Praktikum dilakukan dengan modul praktikum yang sudah disediakan

## 1. Print

Berikut ada struktur dasar php yang digunakan di dalam html.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/1.jpg)

Bahasa PHP menggunakan syntax `<?php ... ?>` untuk membuka dan menutup kode php dalam file html. 

Syntax `echo` dibawah ini digunakan untuk menampilkan text sebagai output.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/1_code.jpg)

## 2. Variable PHP

Variabel dalam bahasa PHP ditulis dengan menggunakan karakter `$`.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/2_code.jpg)

### Output :

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/2.jpg)

## 3. Predefine Variable $_GET

Syntax `$_GET` adalah salah satu variabel super global dalam bahasa php. Syntax `$_GET` digunakan untuk menerima data yang dikirim melalui url pada browser.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/3_code.jpg)

Dapat dilihat output "Anton" diperoleh dari url yang dikimkan pada halaman tersebut.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/3.jpg)

## 4. Form Input

Form input digunakan untuk menerima masukan yang akan dikirimkan ke halaman saat ini maupun halaman lainnya.

Pada form dibawah ini menggunakan method `post` yang berarti data akan dikirim melalui server sehingga tidak dapat dibaca dari browser. Berbeda dengan method `get`, dimana input akan dikirim melalui dan terlihat pada url browser.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/4_code.jpg)

### Output :

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/4.jpg)

## 5. Operator

Operator dalam php digunakan untuk melakukan operasi aritmatika sebagai berikut :

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/5_code.jpg)

### Output

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/5.jpg)

## 6. Kondisi IF

Syntax `if` adalah salah satu syntax yang digunakan untuk melakukan pengkondisian :

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/6_code.jpg)

### Output :

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/6.jpg)

## 7. Kondisi Switch

Syntax `switch` digunakan untuk melakukan operasi yang berbeda dengan kondisi yang berbeda-beda.

Kondisi `switch` dibawah digunakan untuk memilih salah satu argumen berdasarkan variabel `$nama_hari`.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/7_code.jpg)

### Output :

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/7.jpg)

## 8. Perulangan For

Perulangan for digunakan untuk melakukan perulangan yang sudah ditentungan jumlah perulangannya. Perulangan `for` adalah masuk kedalam jenis *counted loop*.

Perulangan 1 sampai 10 dilakukan dengan menggunakan increment `++` untuk menambah 1 nilai setiap 1 pengulangan selesai.

Sedangkan untuk perulangan 10 sampai 1 dilakukan dengan menggunakan decrement `--` untuk mengurangi 1 nilai setiap 1 pengulangan selesai.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/8_code.jpg)

Sehingga hasilnya seperti berikut :

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/8.jpg)

## 8. Perulangan While

Perulangan while masuk ke dalam jenis *uncounted loop* dan biasa digunakan untuk melakukan pengulangan yang belum jelas berapa pengulangan yang akan dilakukan.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/9_code.jpg)

### Output :

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/9.jpg)

## 9. Perulangan do.. while

Perulangan `do.. while` akan melakukan perulangan kode yang ada di dalam syntax `do` dan akan terus melakukan perulangan pada `while` selama kondisinya bernilai true.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/10_code.jpg)

### Output :

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/10.jpg)

## Tugas

### Soal

Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.

Form dibuat menggunakan method `get` untuk mengetahui data yang terkirim. Form tidak menyertakan alamat halaman yang ditunjukan untuk mengirimkan data. Maka dari itu data akan dikirim ke halaman itu sendiri.

Data yang disimpan ke dalam variabel menggunakan syntax `$_GET[]` untuk mengambil data dari url browser.

Untuk mengetahui umur dari tanggal lahir yang diinput menggunakan syntax `date_diff()` yang digunakan untuk mengetahui selisih waktu yang di simpan pada variabel `$tanggalLahir` dan `$tanggalSekarang`.

Untuk menampilkan gaji sesuai pekerjaan yang di input dan disimpan didalam variabel `$pekerjaan`, disini menggunakan pengkondisian `switch`.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/11_code_1.jpg)

Kode berikut adalah hasil yang akan di cetak atau ditampilkan sebagai output yang akan muncul pada sisi kanan halaman.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/11_code_2.jpg)

### Output

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/11.jpg)

### CSS

Untuk membuat dua kotak yang berada di tengah dan bersebelahan menggunakan `display: flex;` dan `justify-content: center;`.

![enter image description here](https://github.com/antonmartinus72/Lab7Web/raw/main/Screenshoot/11_css.jpg)


## Sekian & Terimakasih.
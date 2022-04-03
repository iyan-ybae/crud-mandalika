## Read Database menggunakan PHP :

1. Koneksikan File PHP kedalam database :
   
   ```php
   $cn = mysqli_connect('localhost','root','','phpdasar');
   ```

Catatan :

- localhost : "database server yang dituju"

- root : username

- '' : Password, Default kosong

- phpdasar : Nama database

 `mysqli_connect` menerima empat parameter, dimana yang pertama adalah tempat dimana mysql diinstal, parameter kedua adalah username mysql, parameter ketiga adalah passwordnya, dan yang terakhir adalah nama database yang ingin kita koneksikan.

## Algortima **<mark>READ</mark>** PHP

1. Include / Buat file terpisah untuk file koneksi ke database
   
   ```php
   $cn = mysqli_connect('localhost','root','','nama_database');
   ```

2. Query / kita ambil semua data didalam database 
   
   ```php
   $query = mysqli_query($cn,"SELECT * FROM nama_table");
   ```

3. Lalu buat variabel untuk menampung data query / Ambil data dan ubah ke array asosiatif 
   
   ```php
   $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
   ```

4. Lalu kita lakukan perulangan untuk mengambil semua data
   
   ![](/home/iyan/.config/marktext/images/2022-04-02-06-10-52-image.png)

Catatan :

- terdapat fungsi php `mysqli_query` yang digunakan untuk mengquerikan data didalam database yang sudah kita pilih di `connection`. Terdapat dua parameter, dimana parameter pertama menerima variabel koneksinya, parameter kedua menerima sql sintaks yang ingin kita jalankan.

- Kemudian terdapat juga fungsi `mysqli_fetch_all` yang digunakan untuk mengambil data dari mysql query dimana parameter pertama adalah variabel `$query` yang ada diatasnya, parameter kedua diisi dengan konstanta `MYSQLI_ASSOC` yang sudah di *defind* oleh php dimana akan mengembalikan nilai asosiasi.

- Fungsi `foreach` diatas akan melakukan perulangan sebanyak array yang ada didalam variabel `$results`.

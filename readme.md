# Note
Setelah melakukan *export* Database `db_sngbr` dan menginstall *wordpress project* ini di *server*, pastikan melakukan beberapa perubahan ini agar saat digunakan tidak ada kesalahan *redirect* dan *file* `CSS` yang tidak terbaca

## Mengubah Site URL
Akseslah tabel `wp_options` pada `db_sngbr`. Ubahlah kolom `option_value` pada baris **Pertama** dan **Kedua** pada tabel tersebut sesuai dengan alamat URL *server* anda
![ubah wp_options 1](https://cdn4.wpbeginner.com/wp-content/uploads/2017/01/siteurl.png)

![ubah wp_options 2](https://cdn.wpbeginner.com/wp-content/uploads/2017/01/edit-siteurl.jpg)

> Alamat **URL** *server* misalnya: `www.alamatwebsite.com`

## Mengubah Broken Links dengan mengubah path
Supaya tidak ada masalah saat *load* gambar, `CSS` dan lainnya, anda harus pergi ke `phpMyAdmin` dan pilih *database* `db_sngbr` dan klik *tab* **SQL** dan mengetikkan sintaks di bawah:
```sql
UPDATE wp_posts SET post_content = REPLACE(post_content, 'localhost/sngbr-2020', '[ALAMAT URL SERVER ANDA]');
```

> Alamat **URL** *server* misalnya: `www.alamatwebsite.com`

Dengan begitu dapat dipastikan *assets* pada *website* bisa ter-*load* sebagai mestinya. **Semoga Membantu!**

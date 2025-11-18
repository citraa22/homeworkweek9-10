http://localhost/week9-10-homework/homeworkweek9-10/week910homework/FromGet.php (untuk get from)

http://localhost/week9-10-homework/homeworkweek9-10/week910homework/FromPost.php (untuk from post)

jawaban dari pertanyaan

**Apa perbedaan metode GET dan POST?**

Metode GET mengirimkan data melalui URL sehingga data bisa terlihat di address bar. GET cocok untuk permintaan yang tidak sensitif dan untuk pencarian.
Sementara POST mengirimkan data melalui body request sehingga tidak muncul di URL. POST lebih aman untuk data sensitif dan biasanya dipakai untuk form pendaftaran atau login.

**Kapan sebaiknya menggunakan GET?**

GET digunakan ketika:

Data tidak sensitif

Form hanya mengambil informasi, bukan mengubah data

URL perlu dibagikan atau di-bookmark
Contohnya: fitur pencarian di website.

**Kapan sebaiknya menggunakan POST?**

POST digunakan ketika:

Data bersifat pribadi atau sensitif

Ada proses penyimpanan/insert ke database

Data yang dikirim panjang (lebih banyak field)
Contohnya: login, register user, upload file, submit form pendaftaran mahasiswa.

**Mengapa data pada metode GET bisa terlihat di URL?**

Karena GET menempatkan data pada bagian query string di URL (?key=value).
Browser menambahkan data langsung setelah alamat file, sehingga semua informasi langsung terlihat dan dapat diakses kembali menggunakan history.

**Apa risiko jika menggunakan GET untuk data sensitif?**

Risikonya:

Data bisa tersimpan di browser history

Data bisa terlihat oleh orang lain yang melihat layar

Data mudah dicopy atau di-sniffing

Tidak cocok untuk password atau informasi pribadi

**Apa manfaat menggunakan htmlspecialchars() pada PHP?**

htmlspecialchars() mencegah serangan XSS (Cross-site Scripting) dengan mengubah karakter berbahaya seperti < > menjadi teks biasa.
Ini menjaga tampilan tetap aman ketika menampilkan input dari user.

**Apa yang terjadi jika form tidak memiliki metode (method="")?**

Browser secara otomatis menggunakan GET sebagai default.
Artinya, semua data form akan muncul di URL.

**Apa perbedaan cara PHP membaca data GET dan POST?**

Data GET dibaca menggunakan $_GET["nama_field"]

Data POST dibaca menggunakan $_POST["nama_field"]
Keduanya adalah superglobal array, tetapi sumber datanya berbeda.

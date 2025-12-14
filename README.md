# WhatsApp Auto Server
Konfigurasi WhatsApp menggunakan PHP API Class. Membutuhkan webserver untuk menjalankan script PHP ini. Beberapa fitur yang telah dikembangkan :
1. Login menggunakan scan barcode seperti whatsapp web, kemudian silahkan uninstall aplikasi WhatsApp pada android.
2. Tidak perlu menggunakan aplikasi WhatsApp dalam HP dikarenakan semua proses remote menggunakan Prompt.
3. Membuka group secara otomatis, membaca pesan dan memberikan reaksi berupa teks pada prompt (emoticon tidak berlaku).
4. Mengirim pesan yang telah terdaftar dalam kontak.
5. Membuat status menggunakan prompt.
6. Menerima panggilan yang telah terdaftar dalam kontak.
7. Notifikasi pesan pribadi dan panggilan masuk akan muncul pada prompt yang telah terinstal di perangkat android.
8. Mengirimkan lokasi terkini secara manual menggunakan koordinat.

Kelebihan :
1. Keamanan terjamin karena nomor WhatsApp yang belum disimpan dalam kontak, maka pesan atau panggilan tidak dapat diterima pada server sehingga meminimalisir adanya pesan spam, link dan penipuan.
2. Uptime 24 jam (tergantung dari server yang digunakan).

Kekurangan :
1. Hanya dapat menerima dan mengirim pesan kepada nomor WhatsApp yang terdaftar dikontak.
2. Hanya dapat menerima panggilan masuk dan membuat panggilan keluar kepada nomor WhatsApp yang terdaftar dikontak.
3. Untuk keaktifan dalam sebuah group harus hafal dengan nama groupnya.
4. Membuka group secara otomatis terkadang masih stuck.

Konfigurasi dalam tahap pengembangan ini dipergunakan secara pribadi. Bebas untuk digunakan kembali dan dikembangkan. Bekerja pada versi PHP 8.2

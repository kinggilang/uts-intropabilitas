Nama:Gilang Bagus Tri Pambudi
Nim: 362358302148
Kelas: 2A TRPL
-
-
Praktikum Interoperabilitas: Membuat API Toko Buku dengan Laravel 11 dan Testing Menggunakan Postman
-
A). GET Semua Kategori
    •	Method: GET
    •	URL: http://localhost:8000/api/kategoris
    •	Klik Send untuk melihat hasil.
    :![get kategoris](https://github.com/user-attachments/assets/b4db4388-2934-4ffc-96ba-e506717c75db)
-
B). POST Tambah Kategori Baru
    •	Method: POST
    •	URL: http://localhost:8000/api/kategoris
    •	Body :
    :![post kategoris](https://github.com/user-attachments/assets/4d02ab52-43c5-42fa-9010-0bdc695cd9ce)
-
C). GET Semua Buku
    •	Method: GET
    •	URL: http://localhost:8000/api/bukus
    •	Klik Send.
    :![get bukus](https://github.com/user-attachments/assets/acc25920-a456-4672-ba0f-bc0263aef07e)
-
D). POST Tambah Buku Baru
    •	Method: POST
    •	URL: http://localhost:8000/api/bukus
    •	Body:
    :![post bukus](https://github.com/user-attachments/assets/c620d77e-5d2e-4122-823d-868ebe556ba1)
-
E). GET Buku Berdasarkan ID
    •	Method: GET
    •	URL: http://localhost:8000/api/bukus/1
    •	Klik Send.
    :![get bukus id](https://github.com/user-attachments/assets/d46d288c-4fb1-4038-a13f-f0a4486a49df)
-
F). PUT Update Data Buku
    •	Method: PUT
    •	URL: http://localhost:8000/api/bukus/1
    •	BODY
    :![put bukus](https://github.com/user-attachments/assets/5c69be55-35a4-4ef5-92c5-6f8bbb93f48f)
-
G).	DELETE Hapus Buku
    •	Method: DELETE
    •	URL: http://localhost:8000/api/bukus/1
    •	Klik Send.
    :![delete bukus](https://github.com/user-attachments/assets/2796191f-f474-4b2a-b85d-4ef2f2482246)
-
-
Tugas Mahasiswa
-
1). Tambahkan Validasi:
    o	Nama buku tidak boleh kosong.
    o	Harga minimal Rp 1.000.
    :![public function store](https://github.com/user-attachments/assets/194c9b7a-07c4-4022-87d1-abf1d9034f30)
-
2). Rancang Endpoint Baru:
    Buatlah satu endpoint tambahan untuk sistem toko buku, misalnya, endpoint untuk mencari buku berdasarkan kategori atau judul.
    Tantangan: Apa pertimbangan yang harus Anda buat saat merancang endpoint ini? Pertimbangkan aspek performa, skalabilitas, dan pengalaman pengguna.
    :![public function search Buku](https://github.com/user-attachments/assets/01cef24c-d3a9-4f96-881c-3914b96fd1c6)
    -
    Source Code bagian api.php
    :![Route buku api php](https://github.com/user-attachments/assets/3c83bb0d-b1f4-40f6-9213-f3984a26b6be)
    -
    Postman
    o	Menambah data buku dengan metode post
    :![post tambah buku](https://github.com/user-attachments/assets/1eeb5c09-af02-48f0-abe4-4b6fdb776279)
    -
    Postman
    o	Mencari data buku dengan metode Get
    :![Get cari buku](https://github.com/user-attachments/assets/20288e2a-fb37-4c6b-a6c7-94485dbeebcb)
-
3). Uji API Secara Publik:
    o	Gunakan ngrok atau sejenisnya untuk membuka API ke internet.
    Installasi bagian ngrok
    :![install ngrok](https://github.com/user-attachments/assets/5b2453c5-25fb-4024-8bdb-e6410848feaf)
    -
    Tampilan hasil
    :![hasil ngrok](https://github.com/user-attachments/assets/e1472fec-6390-416a-b936-268f5a740e30)








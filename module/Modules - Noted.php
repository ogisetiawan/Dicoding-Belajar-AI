<?php
/*
 * @Author: ogi.setiawan 
 * @Date: 2024-10-30 11:00:14 
 * @Last Modified by: ogi.setiawan
 * @Last Modified time: 2024-10-30 13:00:26
 */

//@ Berkenalan dengan Artificial Intelligence (AI)
//~ Taksonomi AI
//? AI: Kecerdasan Buatan adalah teknologi yang memungkinkan komputer meniru perilaku manusia, seperti belajar, mengambil keputusan, dan menyelesaikan masalah.
//? Machine Learning (ML): Merupakan bagian dari AI yang memungkinkan komputer belajar dari data tanpa diprogram secara eksplisit. ML menggunakan algoritma untuk menemukan pola dalam data dan membuat prediksi.
//? Deep Learning: Adalah subbidang dari ML yang menggunakan jaringan saraf tiruan untuk mempelajari representasi data yang kompleks. Deep Learning sangat efektif dalam menangani data yang tidak terstruktur, seperti gambar dan teks.
//? Generative AI: Merupakan jenis Deep Learning yang dapat menghasilkan konten baru, seperti gambar, teks, atau musik, berdasarkan data yang telah dipelajarinya
/// Example
//? Sistem rekomendasi pada platform streaming, deteksi spam dalam email. yang dibuat oleh ML
//? Deep Learning: Pengenalan wajah, terjemahan bahasa, mobil self-driving.
//? Generative AI: Pembuatan gambar realistis dari teks deskriptif (DALL-E), pembuatan musik.
//~ AI workflow (alur kerja ai)
//? Alur pengembangan AI merupakan serangkaian langkah yang harus dilalui untuk menciptakan sebuah sistem kecerdasan buatan. Mari kita ringkas setiap tahapannya:
/// Digitalisasi dan Pengumpulan Data: (Digitalise & Collect)
//? Tujuan: Mengubah data dari format analog (misal, kertas) menjadi format digital yang bisa diolah komputer.
//? Langkah: Mengumpulkan data dari berbagai sumber, baik data terstruktur (tabel, database) maupun tidak terstruktur (teks, gambar, video).
/// Transformasi Data: 
//? Tujuan: Menyiapkan data agar siap diolah oleh model AI.
//? Langkah: Membersihkan data, mengubah format, dan mengekstrak fitur-fitur penting dari data.
/// Pelatihan Model:
//? Tujuan: Mengajarkan model AI untuk mengenali pola dan membuat prediksi berdasarkan data yang telah dilatih.
//? Langkah: Memilih algoritma yang sesuai, melatih model dengan data yang telah ditransformasi, dan mengevaluasi kinerja model.
/// Eksekusi Model:
//? Tujuan: Menggunakan model AI yang telah dilatih untuk menyelesaikan tugas-tugas tertentu.
//? Langkah: Menerapkan model pada data baru dan menganalisis hasil prediksi.
/// Analisis dan Pengambilan Keputusan:
//? Tujuan: Memahami hasil yang dihasilkan oleh model AI dan mengambil tindakan berdasarkan pemahaman tersebut.
//? Langkah: Mengekstrak informasi berharga dari model, membuat keputusan bisnis, dan meningkatkan model secara terus-menerus.

//@ Data untuk AI
//~ Pengenalan Data
/// Data, Dataset, dan Basis Data
//? Data: fakta, nyata, dan informasi yang tersimpan di dalamnya dapat berbentuk teks, angka, gambar, suara, dan banyak bentuk lainnya
//? Dataset: kumpulan data yang terorganisir dalam bentuk tabel (baris dan kolom). (Digunakan untuk tujuan tertentu, seperti analisis data, machine learning, atau visualisasi data.)
//? Basis Data: kumpulan data yang terstruktur dan terorganisir secara sistematis ( beberapa table )
//~ Kriteria Data untuk AI
/// Garbage in, Garbage out (GIGO)
//? Kualitas data sangat krusial dalam pengembangan AI. Konsep "garbage in, garbage out" (GIGO) menjelaskan bahwa kualitas output AI sangat bergantung pada kualitas input datanya
//? Masalah umum dalam data: 
//? Data tidak relevan: Data yang tidak sesuai dengan konteks masalah yang ingin diselesaikan.
//? Outlier: Data yang sangat berbeda dari data lainnya sehingga dapat mempengaruhi hasil analisis.
//? Data duplikat: Data yang sama tercatat lebih dari sekali.
//? Data kosong: Data yang tidak memiliki nilai.
//? Data tidak benar: Data yang mengandung kesalahan atau ketidakakuratan.
//~ Infrastruktur Data 
//? fondasi bagi pengelolaan data yang efektif dalam suatu organisasi. Sederhananya, ini adalah sistem yang terdiri dari perangkat keras, perangkat lunak, dan jaringan yang bekerja sama untuk menyimpan, mengelola, dan menganalisis data
//? Manajemen data yang terpusat: Memudahkan pengelolaan data, meningkatkan keamanan, dan mengurangi risiko kehilangan data.
//? Pemrosesan data yang efisien: Memungkinkan analisis data dalam skala besar, sehingga organisasi dapat mengambil keputusan yang lebih baik berdasarkan data.
//# Tujuan utama infrastruktur data:
//? Meningkatkan efisiensi: Mempercepat proses pengolahan data dan analisis data.
//? Meningkatkan akurasi: Menghasilkan hasil analisis yang lebih akurat dan

//@ Pengantar Machine Learning
//~ Pengenalan ML
//? suatu cabang ilmu yang memberi komputer kemampuan untuk belajar tanpa diprogram secara eksplisit
//? Dengan menggunakan machine learning kita hanya perlu menentukan algoritma sehingga machine learning dapat menentukan aturannya sendi
//~ Tipe2 Macine learning
//# Supervised Learning:
//? Data: Memiliki label atau jawaban yang sudah diketahui.
//? Tujuan: Memprediksi label atau output untuk data baru berdasarkan pola yang ditemukan dalam data berlabel.
//? Contoh: Klasifikasi (spam vs bukan spam), regresi (prediksi harga rumah), deteksi objek pada gambar.
//# Unsupervised Learning:
//? Data: Tidak memiliki label atau jawaban.
//? Tujuan: Menemukan pola, struktur, atau kelompok alami dalam data tanpa adanya pengawasan.
//? Contoh: Clustering (pengelompokan pelanggan), reduksi dimensi, deteksi anomali.
//# Unsupervised Learning:
//? Data: Tidak memiliki label atau jawaban.
//? Tujuan: Menemukan pola, struktur, atau kelompok alami dalam data tanpa adanya pengawasan.
//? Contoh: Clustering (pengelompokan pelanggan), reduksi dimensi, deteksi anomali.
//# Reinforcement Learning:
//? Data: Agent berinteraksi dengan lingkungan.
//? Tujuan: Melatih agent untuk mengambil tindakan yang memaksimalkan reward kumulatif dalam jangka panjang.
//? Contoh: Permainan (catur, Go), robot yang belajar berjalan, sistem rekomendasi.
//~ Alur kerja MAachine learning
//? Pengumpulan Data: Mengumpulkan data dari berbagai sumber (database, file, sensor, dll). Memilih dataset yang relevan dengan masalah yang ingin dipecahkan
//? Praproses Data: Membersihkan data (menghapus data yang hilang, duplikat, atau tidak konsisten) Mengubah data ke dalam format yang sesuai untuk model (misalnya, normalisasi, standarisasi).
//? Pengembangan Model: Memilih algoritma machine learning yang sesuai dengan jenis masalah 
//? Evaluasi Model: Menguji kinerja model pada data yang belum pernah dilihat sebelumnya
//? Deployment Model: Menyimpan model yang telah dilatih
//~ Model Maintenance
//? Model machine learning yang sudah di-deploy perlu dirawat secara berkala agar kinerjanya tetap baik. Seiring waktu, model bisa menjadi kurang akurat karena data dunia nyata terus berubah
//# Mengapa Model Perlu Dirawat?
//? Data baru: Model dilatih dengan data lama, namun dunia terus berubah dan menghasilkan data baru yang mungkin tidak terwakili dalam data awal.
//? Perubahan pola: Pola dalam data bisa berubah seiring waktu, misalnya perubahan kebiasaan konsumen, tren pasar, atau faktor eksternal seperti bencana alam
//~ Machine Learning di Industri
//# Bagaimana Sistem Rekomendasi Netflix Bekerja?
//? Pengumpulan Data: Netflix mengumpulkan berbagai data pengguna seperti riwayat tontonan, rating, waktu menonton, perangkat yang digunakan, dan lainnya.
//? Pemrosesan Data: Data-data ini kemudian diproses menggunakan berbagai algoritma seperti personalized video ranking, top-N Video ranker, dan lainnya.
//? Pemberian Rekomendasi: Hasil pemrosesan data akan menghasilkan daftar rekomendasi film yang disajikan dalam bentuk baris dan kolom untuk memudahkan pengguna memahami hubungan antar rekomendasi.
//? Pemeliharaan Model: Model terus dilatih ulang berdasarkan feedback pengguna untuk meningkatkan akurasi rekomendasi.

//~ Pengenalan Deep Learning
//# Apa itu Deep Learning?
//? Deep Learning adalah cabang dari kecerdasan buatan (AI) yang meniru cara kerja otak manusia dalam memproses informasi. 
//? Deep Learning mampu melakukan tugas-tugas kompleks seperti pengenalan gambar, suara, dan teks.
//# Perbedaan Deep Learning dan Machine Learning
//? Deep Learning menggunakan jaringan saraf buatan dengan banyak lapisan, sedangkan Machine Learning menggunakan algoritma yang lebih sederhana.
//? Deep Learning seringkali membutuhkan data dalam jumlah yang sangat besar.
//# Konsep Dasar Deep Learning
//? Jaringan saraf buatan (artificial neural networks) adalah komponen dasar dari Deep Learning.
//? Lapisan (layers) dalam jaringan saraf bertanggung jawab untuk mengekstrak fitur tertentu dari data.
//? Deep Learning belajar melalui proses pelatihan untuk
//~ Mengenal Artificial Neural Network (ANN)
//# Neuron Biologis
//? Neuron adalah unit dasar sistem saraf yang mengirimkan informasi.
//? Neuron terdiri dari akson, dendrit, dan badan sel.
//? Neuron berkomunikasi melalui sinyal listrik dan kimiawi.
//# Perceptron: Unit Dasar ANN
//? Perceptron terinspirasi dari neuron biologis.
//? Perceptron menerima input numerik, mengalikannya dengan bobot, lalu menjumlahkannya dengan bias.
//? Hasil penjumlahan kemudian diproses oleh fungsi aktivasi untuk menghasilkan output.
//# Jaringan Saraf Tiruan
//? Jaringan saraf tiruan terdiri dari beberapa lapisan (layer): input layer, hidden layer, dan output layer.
//? Hidden layer adalah lapisan tersembunyi yang memproses informasi antara input dan output.
//? Semakin banyak hidden layer, semakin kompleks masalah yang dapat dipecahkan.
//# Proses Kerja ANN
//? Input: Menerima data numerik.
//? Bobot: Setiap input memiliki bobot yang menunjukkan kekuatannya.
//? Penjumlahan: Input dikalikan dengan bobot lalu dijumlahkan dengan bias.
//? Fungsi aktivasi: Menerapkan fungsi non-linear pada hasil penjumlahan.
//? Output: Hasil akhir dari proses perhitungan.
//~ Gambaran Penerapan Deep Learning di Industri
//# Pengolahan Citra/Computer Vision
//? Computer Vision memungkinkan komputer memahami informasi dari gambar.
//? Deep Learning, khususnya Convolutional Neural Networks, digunakan untuk mengklasifikasi gambar secara akurat.
//? Penerapan di bidang kesehatan: Diagnosis penyakit berdasarkan citra medis.
//# Pengolahan Teks/Natural Language Processing (NLP)
//? NLP memungkinkan komputer memahami dan memproses bahasa manusia.
//? Penerapan di berbagai bidang: Analisis sentimen, mesin pencari, asisten virtual.
//? Contoh: Analisis kueri pada mesin pencari, koreksi ejaan.
//~ Teachable Machine
//? alat yang sangat berguna untuk pemula dalam machine learning. Dengan memahami perbedaan ekstensi model, Anda dapat memilih ekstensi yang paling sesuai dengan proyek Anda.
//? Teachable Machine: Alat mudah untuk membuat model AI.
//? Model: Bisa untuk gambar, suara, pose.
//? Ekstensi: TensorFlow.js (web), TensorFlow Lite (mobile/IoT).
//~ Proses di Balik Deep Learning
//? Deep learning melibatkan jaringan saraf tiruan yang terdiri dari input layer, hidden layer, dan output layer. Proses pembelajaran terjadi melalui forward propagation (menghitung output) dan backpropagation (memperbarui bobot)
//# Arsitektur Jaringan Saraf
//? Input Layer: Menerima data input.
//? Hidden Layer: Melakukan perhitungan kompleks.
//? Output Layer: Menghasilkan output (prediksi).
//# Proses Pembelajaran
//? Forward Propagation: Menghitung output berdasarkan input dan bobot.
//? Backpropagation: Memperbarui bobot untuk meminimalkan kesalahan.
//? Optimizer: Algoritma untuk memperbarui bobot (misal: Adam).
//? Loss Function: Mengukur kesalahan antara prediksi dan label sebenarnya.
//# Perangkat Keras
//? CPU: Unit pemrosesan pusat.
//? GPU: Unit pemrosesan grafis, cocok untuk komputasi paralel.
//? TPU: Tensor Processing Unit, khusus untuk deep learning.
//# Konsep-konsep yang Perlu Dipahami:
//? Tensor: Representasi data multidimensi dalam deep learning.
//? Overfitting: Model terlalu cocok dengan data latih, sehingga performanya buruk pada data uji.
//? Underfitting: Model terlalu sederhana, sehingga tidak dapat menangkap pola dalam data.
//? Regularisasi: Teknik untuk mencegah overfitting.
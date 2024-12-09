<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed default users
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'isAdmin' => true,
        ]);

        User::create([
            'name' => 'Abi',
            'email' => 'abi@gmail.com',
            'password' => Hash::make('12345678'),
            'isAdmin' => false,
        ]);

        User::create([
            'name' => 'Aji',
            'email' => 'aji@gmail.com',
            'password' => Hash::make('12345678'),
            'isAdmin' => false,
        ]);

        User::create([
            'name' => 'Yudha',
            'email' => 'yudha@gmail.com',
            'password' => Hash::make('12345678'),
            'isAdmin' => false,
        ]);

        User::create([
            'name' => 'Faris',
            'email' => 'faris@gmail.com',
            'password' => Hash::make('12345678'),
            'isAdmin' => false,
        ]);

        // Seed profiles
        Profile::create([
            'npm' => '19990020',
            'prodi' => 'Administrator',
            'alamat' => 'Dimana Bumi Dipijak',
            'noTelp' => '08123456789',
            'users_id' => 1,
        ]);

        Profile::create([
            'npm' => '17207024',
            'prodi' => 'Teknik Informatika',
            'alamat' => 'Jakarta Barat',
            'noTelp' => '085171502026',
            'users_id' => 2,

        ]);

        Profile::create([
            'npm' => '17215114',
            'prodi' => 'Teknik Informatika',
            'alamat' => 'Citayam',
            'noTelp' => '083819379569',
            'users_id' => 3,

        ]);

        Profile::create([
            'npm' => '17215012',
            'prodi' => 'Teknik Informatika',
            'alamat' => 'Jakarta Pusat',
            'noTelp' => '085697713966',
            'users_id' => 4,

        ]);

        Profile::create([
            'npm' => '17207025',
            'prodi' => 'Teknik Informatika',
            'alamat' => 'Jakarta Timur',
            'noTelp' => '085156166032',
            'users_id' => 5,

        ]);
        // Seed categories
        Kategori::create(['nama' => 'Novel', 'deskripsi' => 'Kumpulan Novel']);
        Kategori::create(['nama' => 'Pelajaran', 'deskripsi' => 'Kumpulan Buku materi pelajaran']);
        Kategori::create(['nama' => 'Rommance']);
        Kategori::create(['nama' => 'Drama']);
        Kategori::create(['nama' => 'Fiksi']);
        Kategori::create(['nama' => 'Pemrograman']);
        Kategori::create(['nama' => 'Science']);
        Kategori::create(['nama' => 'Horror']);

        // Seed books
        Buku::create([
            'kode_buku' => 'LSK-01',
            'Judul' => 'Laskar Pelangi',
            'Pengarang' => 'Andrea Hirata',
            'Penerbit' => 'Bentang Pustaka',
            'tahun_terbit' => '2005',
            'deskripsi' => 'Laskar Pelangi adalah novel pertama karya Andrea Hirata...'
        ]);

        Buku::create([
            'kode_buku' => 'HJN-01',
            'Judul' => 'Hujan',
            'Pengarang' => 'Tere Liye',
            'Penerbit' => 'Gramedia Pustaka',
            'tahun_terbit' => '2016',
            'deskripsi' => 'Pada 2042, dunia telah memasuki era di mana peran manusia telah digantikan...'
        ]);

        Buku::create([
            'kode_buku' => 'JNJ-01',
            'Judul' => 'Janji',
            'Pengarang' => 'Tere Liye',
            'Penerbit' => 'Tere Liye',
            'tahun_terbit' => '2021',
            'deskripsi' => 'Kisah ini tentang JANJI...'
        ]);

        Buku::create([
            'kode_buku' => 'AP-01',
            'Judul' => 'Algoritma dan Pemrograman',
            'Pengarang' => 'Lamhot Sitorus',
            'Penerbit' => 'Andi',
            'tahun_terbit' => '2015',
            'deskripsi' => 'Buku ini dirancang untuk mahasiswa Program Studi Ilmu Komputer...'
        ]);

        Buku::create([
            'kode_buku' => 'PBO-01',
            'Judul' => 'Pemrograman Berorientasi Objek',
            'Pengarang' => 'Syafei Karim',
            'Penerbit' => 'Tanesa',
            'tahun_terbit' => '2021',
            'deskripsi' => 'Pemrograman Berorientasi Objek (PBO) adalah salah satu konsep pemrograman...'
        ]);

        Buku::create([
            'kode_buku' => 'PYT-01',
            'Judul' => 'Python Crash Course',
            'Pengarang' => 'Eric Matthes',
            'Penerbit' => 'No Starch Press',
            'tahun_terbit' => '2019',
            'deskripsi' => 'Buku ini memberikan pengantar cepat dan praktis untuk pemrograman Python...'
        ]);

        Buku::create([
            'kode_buku' => 'JAV-01',
            'Judul' => 'Java: The Complete Reference',
            'Pengarang' => 'Herbert Schildt',
            'Penerbit' => 'McGraw-Hill Education',
            'tahun_terbit' => '2018',
            'deskripsi' => 'Panduan lengkap untuk bahasa pemrograman Java, mencakup semua fitur terbaru...'
        ]);

        Buku::create([
            'kode_buku' => 'JS-01',
            'Judul' => 'Eloquent JavaScript',
            'Pengarang' => 'Marijn Haverbeke',
            'Penerbit' => 'No Starch Press',
            'tahun_terbit' => '2018',
            'deskripsi' => 'Buku ini mengajarkan JavaScript dengan cara yang mendalam dan praktis...'
        ]);

        Buku::create([
            'kode_buku' => 'PHP-01',
            'Judul' => 'PHP & MySQL: Novice to Ninja',
            'Pengarang' => 'Kevin Yank',
            'Penerbit' => 'SitePoint',
            'tahun_terbit' => '2018',
            'deskripsi' => 'Panduan lengkap untuk memulai dengan PHP dan MySQL, dari dasar hingga tingkat lanjut...'
        ]);

        Buku::create([
            'kode_buku' => 'RUB-01',
            'Judul' => 'The Well-Grounded Rubyist',
            'Pengarang' => 'David A. Black',
            'Penerbit' => 'Manning Publications',
            'tahun_terbit' => '2019',
            'deskripsi' => 'Buku ini memberikan pemahaman mendalam tentang bahasa pemrograman Ruby...'
        ]);

        Buku::create([
            'kode_buku' => 'C-01',
            'Judul' => 'The C Programming Language',
            'Pengarang' => 'Brian W. Kernighan,',
            'Penerbit' => 'Prentice Hall',
            'tahun_terbit' => '1988',
            'deskripsi' => 'Buku klasik yang menjadi referensi utama untuk bahasa pemrograman C...'
        ]);

        Buku::create([
            'kode_buku' => 'CPP-01',
            'Judul' => 'C++ Primer',
            'Pengarang' => 'Stanley B. Lippman,',
            'Penerbit' => 'Addison-Wesley',
            'tahun_terbit' => '2012',
            'deskripsi' => 'Panduan komprehensif untuk pemrograman C++, mencakup konsep dasar hingga lanjutan...'
        ]);

        Buku::create([
            'kode_buku' => 'CS-01',
            'Judul' => 'C# in Depth',
            'Pengarang' => 'Jon Skeet',
            'Penerbit' => 'Manning Publications',
            'tahun_terbit' => '2019',
            'deskripsi' => 'Buku ini memberikan pemahaman mendalam tentang bahasa pemrograman C#...'
        ]);

        Buku::create([
            'kode_buku' => 'SQL-01',
            'Judul' => 'SQL for Data Scientists',
            'Pengarang' => 'Renee M. P. Teate',
            'Penerbit' => 'O\'Reilly Media',
            'tahun_terbit' => '2020',
            'deskripsi' => 'Panduan praktis untuk menggunakan SQL dalam analisis data...'
        ]);

        Buku::create([
            'kode_buku' => 'ML-01',
            'Judul' => 'Hands-On Machine Learning',
            'Pengarang' => 'Aurélien Géron',
            'Penerbit' => 'O\'Reilly Media',
            'tahun_terbit' => '2019',
            'deskripsi' => 'Panduan praktis untuk memulai dengan machine learning menggunakan Python...'
        ]);

        Buku::create([
            'kode_buku' => 'DS-01',
            'Judul' => 'Data Science from Scratch',
            'Pengarang' => 'Joel Grus',
            'Penerbit' => 'O\'Reilly Media',
            'tahun_terbit' => '2019',
            'deskripsi' => 'Buku ini mengajarkan dasar-dasar data science menggunakan Python...'
        ]);

        Buku::create([
            'kode_buku' => 'AI-01',
            'Judul' => 'Artificial Intelligence: A Modern Approach',
            'Pengarang' => 'Stuart Russell, Peter Norvig',
            'Penerbit' => 'Pearson',
            'tahun_terbit' => '2020',
            'deskripsi' => 'Buku ini adalah referensi utama untuk mempelajari kecerdasan buatan...'
        ]);

        Buku::create([
            'kode_buku' => 'DSA-01',
            'Judul' => 'Algorithms',
            'Pengarang' => 'Robert Sedgewick, Kevin Wayne',
            'Penerbit' => 'Addison-Wesley',
            'tahun_terbit' => '2011',
            'deskripsi' => 'Panduan komprehensif untuk mempelajari algoritma dan struktur data...'
        ]);

        Buku::create([
            'kode_buku' => 'WEB-01',
            'Judul' => 'HTML and CSS: Design and Build Websites',
            'Pengarang' => 'Jon Duckett',
            'Penerbit' => 'Wiley',
            'tahun_terbit' => '2011',
            'deskripsi' => 'Panduan visual untuk mempelajari HTML dan CSS...'
        ]);

        Buku::create([
            'kode_buku' => 'JS-02',
            'Judul' => 'JavaScript: The Good Parts',
            'Pengarang' => 'Douglas Crockford',
            'Penerbit' => 'O\'Reilly Media',
            'tahun_terbit' => '2008',
            'deskripsi' => 'Buku ini mengajarkan bagian-bagian terbaik dari bahasa pemrograman JavaScript...'
        ]);

        Buku::create([
            'kode_buku' => 'R-01',
            'Judul' => 'R for Data Science',
            'Pengarang' => 'Hadley Wickham',
            'Penerbit' => 'O\'Reilly Media',
            'tahun_terbit' => '2016',
            'deskripsi' => 'Panduan praktis untuk memulai dengan bahasa pemrograman R dalam data science...'
        ]);

        Buku::create([
            'kode_buku' => 'GO-01',
            'Judul' => 'The Go Programming Language',
            'Pengarang' => 'Alan A. ',
            'Penerbit' => 'Addison-Wesley',
            'tahun_terbit' => '2015',
            'deskripsi' => 'Panduan komprehensif untuk mempelajari bahasa pemrograman Go...'
        ]);

        Buku::create([
            'kode_buku' => 'SWF-01',
            'Judul' => 'Swift Programming',
            'Pengarang' => 'Matthew Mathias, John Gallagher',
            'Penerbit' => 'Big Nerd Ranch Guides',
            'tahun_terbit' => '2016',
            'deskripsi' => 'Panduan praktis untuk mempelajari bahasa pemrograman Swift...'
        ]);

        Buku::create([
            'kode_buku' => 'KOT-01',
            'Judul' => 'Kotlin in Action',
            'Pengarang' => 'Dmitry Jemerov, Svetlana Isakova',
            'Penerbit' => 'Manning Publications',
            'tahun_terbit' => '2017',
            'deskripsi' => 'Panduan komprehensif untuk mempelajari bahasa pemrograman Kotlin...'
        ]);

        Buku::create([
            'kode_buku' => 'TS-01',
            'Judul' => 'Programming TypeScript',
            'Pengarang' => 'Boris Cherny',
            'Penerbit' => 'O\'Reilly Media',
            'tahun_terbit' => '2019',
            'deskripsi' => 'Panduan praktis untuk mempelajari TypeScript, bahasa pemrograman yang dikembangkan oleh Microsoft...'
        ]);
    }
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Slideshow Otomatis</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/css/page.css">
</head>

<body>

    <div class="slideshow-container">
        <div class="mySlides">
            <div class="container">
                <nav>
                    <div class="nav__logo">
                        <img src="assets/img/wikrama.png" alt="logo" />
                    </div>
                    <ul class="nav__links">
                        <li class="link"><a href="#">Home</a></li>
                        <li class="link"><a href="#">Destinations</a></li>
                        <li class="link"><a href="#">Contact Us</a></li>
                        <li class="link"><a href="#">Blog</a></li>
                    </ul>
                    <div class="search">
                        <input type="text" placeholder="Search" />
                        <span><i class="ri-search-line"></i></span>
                    </div>
                    <div class="login">
                        <a href="/login"><i class=" ri-user-3-fill"></i></a>
                        Log In
                    </div>
                </nav>
                <div class=" destination__container">
                    <img class="bg__img__1" src="assets/img/bg-dots.png" alt="bg" />
                    <img class="bg__img__2" src="assets/img/bg-arrow.png" alt="bg" />
                    <div class="socials">
                        <span><i class="ri-twitter-fill"></i></span>
                        <span><i class="ri-facebook-fill"></i></span>
                        <span><i class="ri-instagram-line"></i></span>
                        <span><i class="ri-youtube-fill"></i></span>
                    </div>
                    <div class="content">
                        <h1>SMK<br />WIKRAMA<br /><span>BOGOR</span></h1>
                        <p>
                            SMK Wikrama Bogor merupakan sekolah pusat keunggulan
                            yang memiliki 7 kopetensi keahlian terbaik dibidangnya
                        </p>
                        <button class="btn">Tentang wikrama??</button>
                    </div>
                    <div class="destination__grid">
                        <div class="destination__card">
                            <img src="assets/img/kegiatan1.jpeg" alt="destination" />
                            <div class="card__content">
                                <h4>7 kopetensi kehalian</h4>
                                <p>
                                    SMK Wikrama Bogor mempunyai 7 kopetensi keahlian dasar
                                    yang sangat memumpuni di bidang nya sendiri mulai dari IT,
                                    Menejemen perkantoran, dan Pariwisata
                                </p>
                                <button class="btn">Read More</button>
                            </div>
                        </div>
                        <div class="destination__card">
                            <img src="assets/img/kegiatan.jpeg" alt="destination" />
                            <div class="card__content">
                                <h4>Pusat keunggulan</h4>
                                <p>
                                    SMK Wikrama Bogor merupakan sekolah pusat keunggulan
                                    yang telah menjadi contoh bagi sekolah yang lainya
                                    untuk menarapkan metode di SMK Wikrama
                                </p>
                                <button class="btn">Read More</button>
                            </div>
                        </div>
                        <div class="destination__card">
                            <img src="assets/img/kegiatan3.jpg" alt="destination" />
                            <div class="card__content">
                                <h4>Prestasi</h4>
                                <p>
                                    SMK Wikrama Bogor Merupakan sekolah yang memiliki
                                    segudang prestasi yang diaman setiap minggunya menolehkan
                                    prestasi dari berbagi bidang
                                </p>
                                <button class="btn">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mySlides">
            <div class="container">
                <img class="bg__img__1" src="assets/img/bg-dots.png" alt="bg" />
                <img class="bg__img__2" src="assets/img/bg-arrow.png" alt="bg" />
                <nav>
                    <div class="nav__logo">
                        <img src="assets/img/wikrama.png" alt="logo" />
                    </div>
                </nav>
                <div class="pl-20 mt-[-50px]">
                    <h1 class="text-2xl font-bold text-white">Tentang SMK Wikrama</h1>
                </div>

                <div class="text-left mt-24">
                    <div class="max-w-lg">
                        <h1 class="text-3xl font-semibold text-white mb-6">Visi dan Misi</h1>

                        <!-- Kotak untuk Visi -->
                        <div class="border border-gray-300 rounded-lg p-6 mb-6">
                            <h2 class="text-xl font-semibold text-white mb-3">Visi</h2>
                            <p class="text-white">Menjadi perusahaan terdepan dalam inovasi teknologi untuk
                                kesejahteraan masyarakat.</p>
                        </div>

                        <!-- Kotak untuk Misi -->
                        <div class="border border-gray-300 rounded-lg p-6">
                            <h2 class="text-xl font-semibold text-white mb-3">Misi</h2>
                            <ul class="list-disc list-inside">
                                <li class="text-white">Mengembangkan solusi teknologi yang inovatif untuk memecahkan
                                    masalah sosial dan lingkungan.</li>
                                <li class="text-white">Mendorong inklusi digital di seluruh lapisan masyarakat.</li>
                                <li class="text-white">Menjadi mitra terpercaya dalam pembangunan berkelanjutan.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pl-[700px] mt-[-400px]">
                        <div class="border border-gray-300 rounded-lg p-6">
                            <h2 class="text-xl font-semibold text-white mb-3">Moto</h2>
                            <ul class="list-disc list-inside">
                                <li class="text-white">Mengembangkan solusi teknologi yang inovatif untuk memecahkan
                                    masalah sosial dan lingkungan.</li>
                                <li class="text-white">Mendorong inklusi digital di seluruh lapisan masyarakat.</li>
                                <li class="text-white">Menjadi mitra terpercaya dalam pembangunan berkelanjutan.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pl-[700px] mt-5">
                        <div class="border border-gray-300 rounded-lg p-6">
                            <h2 class="text-xl font-semibold text-white mb-3">Pusat keunggulan</h2>
                            <ul class="list-disc list-inside">
                                <li class="text-white">SMK Wikrama Merupakan sekolah pusat keunggulan yang memiliki 7
                                    bidang program keahlian yang sangat kopeten di bidangnya</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mySlides">
            <div class="container">
                <nav>
                    <div class="nav__logo">
                        <img src="assets/img/wikrama.png" alt="logo" />
                    </div>
                </nav>
                <div class="pl-20 mt-[-50px]">
                    <h1 class="text-2xl font-bold text-white">Jurusan SMK Wikrama</h1>
                    <img class="bg__img__1" src="assets/img/bg-dots.png" alt="bg" />
                    <img class="bg__img__2" src="assets/img/bg-arrow.png" alt="bg" />
                </div>

                <div class="mt-24">
                    <div class="grid grid-cols-4 gap-4">
                        <div class="max-w-xs bg-white shadow-md rounded-lg overflow-hidden ">
                            <img class="w-full h-56 object-cover object-center" src="assets/img/PPLG1.JPG" alt="Gambar">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg text-gray-800 mb-2">Pengembangan Perangkat lunak dan
                                    gim</h2>
                                <p class="text-gray-700">Deskripsi singkat tentang informasi ini. Anda bisa menambahkan
                                    beberapa kalimat untuk menjelaskan lebih lanjut.</p>
                                <div class="flex justify-between items-center mt-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-600">Baca lebih lanjut</a>
                                    <span class="text-gray-600">24 April 2024</span>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-xs bg-white shadow-md rounded-lg overflow-hidden ">
                            <img class="w-full h-56 object-cover object-center" src="assets/img/TJKT.jpg" alt="Gambar">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg text-gray-800 mb-2">Teknkin jaringan komputer dan
                                    Telokom</h2>
                                <p class="text-gray-700">Deskripsi singkat tentang informasi ini. Anda bisa menambahkan
                                    beberapa kalimat untuk menjelaskan lebih lanjut.</p>
                                <div class="flex justify-between items-center mt-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-600">Baca lebih lanjut</a>
                                    <span class="text-gray-600">24 April 2024</span>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-xs bg-white shadow-md rounded-lg overflow-hidden ">
                            <img class="w-full h-56 object-cover object-center" src="assets/img/MPLB.jpeg" alt="Gambar">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg text-gray-800 mb-2">Menejemen Perkantoran dan layanan
                                    bisnis</h2>
                                <p class="text-gray-700">Deskripsi singkat tentang informasi ini. Anda bisa menambahkan
                                    beberapa kalimat untuk menjelaskan lebih lanjut.</p>
                                <div class="flex justify-between items-center mt-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-600">Baca lebih lanjut</a>
                                    <span class="text-gray-600">24 April 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-xs bg-white shadow-md rounded-lg overflow-hidden ">
                            <img class="w-full h-56 object-cover object-center" src="assets/img/DKVV.png" alt="Gambar">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg text-gray-800 mb-2">Desain Komunikasi Visual</h2>
                                <p class="text-gray-700">Deskripsi singkat tentang informasi ini. Anda bisa menambahkan
                                    beberapa kalimat untuk menjelaskan lebih lanjut.</p>
                                <div class="flex justify-between items-center mt-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-600">Baca lebih lanjut</a>
                                    <span class="text-gray-600">24 April 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides">
            <div class="container">
                <nav>
                    <div class="nav__logo">
                        <img src="assets/img/wikrama.png" alt="logo" />
                    </div>
                </nav>
                <div class="pl-20 mt-[-50px]">
                    <h1 class="text-2xl font-bold text-white">Jurusan SMK Wikrama</h1>
                    <img class="bg__img__1" src="assets/img/bg-dots.png" alt="bg" />
                    <img class="bg__img__2" src="assets/img/bg-arrow.png" alt="bg" />
                </div>

                <div class="mt-24">
                    <div class="grid grid-cols-4 gap-4">
                        <div class="max-w-xs bg-white shadow-md rounded-lg overflow-hidden ">
                            <img class="w-full h-56 object-cover object-center" src="assets/img/DKVV.png" alt="Gambar">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg text-gray-800 mb-2">Pemasaran</h2>
                                <p class="text-gray-700">Deskripsi singkat tentang informasi ini. Anda bisa menambahkan
                                    beberapa kalimat untuk menjelaskan lebih lanjut.</p>
                                <div class="flex justify-between items-center mt-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-600">Baca lebih lanjut</a>
                                    <span class="text-gray-600">24 April 2024</span>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-xs bg-white shadow-md rounded-lg overflow-hidden ">
                            <img class="w-full h-56 object-cover object-center" src="assets/img/KLN.jpg" alt="Gambar">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg text-gray-800 mb-2">Kuliner</h2>
                                <p class="text-gray-700">Deskripsi singkat tentang informasi ini. Anda bisa menambahkan
                                    beberapa kalimat untuk menjelaskan lebih lanjut.</p>
                                <div class="flex justify-between items-center mt-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-600">Baca lebih lanjut</a>
                                    <span class="text-gray-600">24 April 2024</span>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-xs bg-white shadow-md rounded-lg overflow-hidden ">
                            <img class="w-full h-56 object-cover object-center" src="assets/img/HTL.JPG" alt="Gambar">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg text-gray-800 mb-2">Perhotelan</h2>
                                <p class="text-gray-700">Deskripsi singkat tentang informasi ini. Anda bisa menambahkan
                                    beberapa kalimat untuk menjelaskan lebih lanjut.</p>
                                <div class="flex justify-between items-center mt-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-600">Baca lebih lanjut</a>
                                    <span class="text-gray-600">24 April 2024</span>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-xs bg-white shadow-md rounded-lg overflow-hidden ">
                            <img class="w-full h-56 object-cover object-center" src="assets/img/MPLB.jpeg" alt="Gambar">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg text-gray-800 mb-2">Menejemen Perkantoran dan layanan
                                    bisnis</h2>
                                <p class="text-gray-700">Deskripsi singkat tentang informasi ini. Anda bisa menambahkan
                                    beberapa kalimat untuk menjelaskan lebih lanjut.</p>
                                <div class="flex justify-between items-center mt-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-600">Baca lebih lanjut</a>
                                    <span class="text-gray-600">24 April 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mySlides">
            <div class="container">
                <nav>
                    <div class="nav__logo">
                        <img src="assets/img/wikrama.png" alt="logo" />
                    </div>
                </nav>
                <div class="pl-20 mt-[-50px]">
                    <h1 class="text-2xl font-bold text-white">Prestasi SMK Wikrama Bogor</h1>
                    <img class="bg__img__2" src="assets/img/bg-arrow.png" alt="bg" />
                </div>

                <div class="mt-20 pl-24">
                    @foreach ($informasis as $index => $item)
                    <div class="mySlide-{{ $index }} slides">
                        <div class="pl-[500px] mt-3">
                            <h1 class=" text-3xl font-bold text-white mb-6"> {{ $item->judul }}</h1>
                        </div>

                        <div class="mt-[-50px]">
                            <img src="{{asset('assets/image/'.$item->foto)}}" class="h-[500px] w-[400px] rounded-lg"
                                alt="">
                        </div>
                        <div class="pl-[500px] mt-[-400px]">
                            <div class="border border-gray-300 rounded-lg p-6">
                                <div class="text-white">
                                    <li>Nama :{{ $item->nama }}</li>
                                    <li>Jurusan :{{ $item->jurusan }}</li>
                                    <li>Rayon :{{ $item->rayon }}</li>
                                </div>
                                <h2 class="text-xl mt-10  text-white mb-3"> {{ $item->deskripsi }}</h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


        <div class="mySlides">
            <div class="container">
                <nav>
                    <div class="nav__logo">
                        <img src="assets/img/wikrama.png" alt="logo" />
                    </div>
                </nav>
                <div class="pl-20 mt-[-50px]">
                    <h1 class="text-2xl font-bold text-white">Kegiatan SMK Wikrama Bogor</h1>
                    <img class="bg__img__2" src="assets/img/bg-arrow.png" alt="bg" />
                </div>

                <div class="mt-20 pl-24">
                    @foreach ($kegiatan as $item)
                    <div class="pl-[500px] mt-3">
                        <h1 class=" text-3xl font-bold text-white mb-6"> {{ $item->nama_kegiatan }}</h1>
                    </div>
                    <div class="mt-[-50px]">
                        <img src="{{asset('assets/image/'.$item->foto)}}" class="h-[500px] w-[400px] rounded-lg" alt="">
                    </div>
                    <div class="pl-[500px] mt-[-400px]">
                        <div class="border border-gray-300 rounded-lg p-6">
                            <h2 class="text-xl  text-white mb-3"> {{ $item->date }}</h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src=" assets/js/page.js">
    var slideIndex1 = 1;
    var slideIndex2 = 1;

    showSlides(slideIndex1, 1);
    showSlides(slideIndex2, 2);

    function plusSlides(n, sliderIndex) {
        if (sliderIndex === 1) {
            showSlides(slideIndex1 += n, 1);
        } else if (sliderIndex === 2) {
            showSlides(slideIndex2 += n, 2);
        }
    }

    function showSlides(n, sliderIndex) {
        var i;
        var slides;
        if (sliderIndex === 1) {
            slides = document.querySelectorAll(".mySlides:nth-of-type(1)");
            if (n > slides.length) {
                slideIndex1 = 1;
            }
            if (n < 1) {
                slideIndex1 = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex1 - 1].style.display = "block";
        } else if (sliderIndex === 2) {
            slides = document.querySelectorAll(".mySlides:nth-of-type(2)");
            if (n > slides.length) {
                slideIndex2 = 1;
            }
            if (n < 1) {
                slideIndex2 = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex2 - 1].style.display = "block";
        }
    }

    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("slides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3000); // Ubah angka ini untuk mengatur interval perpindahan slide (dalam milidetik)
    }
    </script>

</body>

</html>
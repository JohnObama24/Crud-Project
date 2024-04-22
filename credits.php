<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kredit</title>
    <!-- Tambahkan link ke CDN Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d1f6c31734.js" crossorigin="anonymous"></script>
</head>

<!-- body -->

<body class="relative min-h-screen flex justify-center items-center bg-cover bg-no-repeat" style="background-image: url(img/bgr.png);">
    <!-- --- -->

    <!-- button kembali -->
    <a href="index.php">
        <button
            class="absolute left-6 top-4  hover:bg-purple-900 text-white font-bold py-2 px-4 rounded-lg flex items-center">
            <i class="fa-solid fa-person-walking-arrow-loop-left mr-2"></i>Beranda
        </button>
    </a>
   
    <!-- -------- -->

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        <!-- Kredit Profile Orang Pertama -->
        <div class="bg-gradient-to-t from-gray-900 to-gray-700 rounded-lg overflow-hidden shadow-md">
            <img class="m-auto mt-6 w-32 h-32 object-scale-down rounded-full overflow-auto" src="img/soldier.jpg" alt="kobo">
            <div class="p-4">
                <h2 class="font-semibold text-white">John Obama Ms</h2>
                <p class="text-white text-sm mt-2">buat struktur php crud</p>
                <p class="text-white text-sm mt-2">Deskripsi singkat tentang orang ini.</p>
            </div>
        </div>
        <!-- Kredit Profile Orang Kedua -->
        <div class="bg-gradient-to-t from-gray-900 to-gray-700 rounded-lg overflow-hidden shadow-md">
            <img class="m-auto mt-6 w-32 h-32 object-scale-down rounded-full" src="img/iya.jpg" alt="memory">
            <div class="p-4">
                <h2 class="font-semibold text-white">M Arridho</h2>
                <p class="text-white text-sm mt-2">Tampilan/Front-end</p>
                <p class="text-white text-sm mt-2">Deskripsi singkat tentang orang ini.</p>
            </div>
        </div>
        <!-- Kredit Profile Orang Ketiga -->
        <div class="bg-gradient-to-t from-gray-900 to-gray-700 rounded-lg overflow-hidden shadow-md">
            <img class="m-auto mt-6 w-32 h-32 object-scale-down rounded-full" src="img/Gawr.jpg" alt="Gawr">
            <div class="p-4">
                <h2 class="font-semibold text-white">Luna aulia Hadi</h2>
                <p class="text-white text-sm mt-2">Tampilan</p>
                <p class="text-white text-sm mt-2">Deskripsi singkat tentang orang ini.</p>
            </div>
        </div>
        <!-- Kredit Profile Orang Keempat -->
        <div class="bg-gradient-to-t from-gray-900 to-gray-700 rounded-lg overflow-hidden shadow-md">
            <img class="m-auto mt-6 w-32 h-32 object-scale-down rounded-full" src="img/download.jpeg" alt="zeta">
            <div class="p-4">
                <h2 class="font-semibold text-white">M fatan Ibrahim</h2>
                <p class="text-white text-sm mt-2">Prototype</p>
                <p class="text-white text-sm mt-2">Deskripsi singkat tentang orang ini.</p>
            </div>
        </div>
        <!-- Kredit Profile Orang Kelima -->
        <div class="bg-gradient-to-t from-gray-900 to-gray-700 rounded-lg overflow-hidden shadow-md">
            <img class="m-auto mt-6 w-32 h-32 object-scale-down rounded-full" src="img/ayaka.jpg" alt="ayaka">
            <div class="p-4">
                <h2 class="font-semibold text-white">M Fizri Ibrahim</h2>
                <p class="text-white text-sm mt-2">Ntah</p>
                <p class="text-white text-sm mt-2">Deskripsi singkat tentang orang ini.</p>
            </div>
        </div>
    </div>
</body>

</html>
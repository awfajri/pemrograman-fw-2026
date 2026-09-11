<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>403 - Akses Ditolak</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-lg shadow-sm max-w-md text-center border border-gray-200">
        <h1 class="text-6xl font-bold text-red-500 mb-2">403</h1>
        <h2 class="text-xl font-semibold text-gray-800 mb-2">Akses Ditolak!</h2>
        <p class="text-gray-600 mb-6 text-sm">
            Maaf, akun Anda tidak memiliki hak akses untuk membuka halaman ini.
        </p>
        <a href="{{ route('dashboard') }}" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-md text-sm hover:bg-indigo-700 transition">
            Kembali ke Dashboard
        </a>
    </div>
</body>
</html>
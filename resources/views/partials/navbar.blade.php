<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <nav class="bg-[#235384] px-2 w-full py-2.5 text-white fixed top-0">
        <div class="container flex flex-wrap items-center justify-between px-20">
            <a href="{{ route('mahasiswa.index') }}" class="flex items-center">
                <span class="self-center text-xl font-bold whitespace-nowrap">Simple Siakad</span>
            </a>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col p-2 mt-4 border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:border-0">
                    <li>
                        <a href="{{ route('mahasiswa.index') }}" class="block py-2 pl-3 pr-4">Data Mahasiswa</a>
                    </li>
                    <li>
                        <a href="{{ route('mahasiswa.create') }}" class="block py-2 pl-3 pr-4 active:bg-whie ">Input Data</a>
                    </li>
                    <li>
                        <a href="/about" class="block py-2 pl-3 pr-4 ">About Me</a>
                    </li>
            </div>
        </div>
    </nav>
</body>
</html>
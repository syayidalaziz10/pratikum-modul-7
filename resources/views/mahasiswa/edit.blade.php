<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('partials.navbar')
    <div class="w-full lg:w-8/12 px-4 my-40 mx-20">
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('patch')
            <h1 class="p-4 mb-6 font-bold text-4xl text-[#235384]">Input Data Mahasiswa</h1>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                        <label for="nrp" class="block font-bold mb-2">NRP</label>
                        <input type="text" name="nrp" id="nrp" value="{{ $mahasiswa->nrp }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-slate-100 rounded text-sm w-full">
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                        <label for="nama" class="block font-bold mb-2">Nama</label>
                        <input type="text" id="nama" name="nama" value="{{ $mahasiswa->nama }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-slate-100 rounded text-sm w-full">
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                        <label for="email" class="block font-bold mb-2">Email</label>
                        <input type="email" name="email" id="email" value="{{ $mahasiswa->email }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-slate-100 rounded text-sm w-full">
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                        <label for="alamat "class="block font-bold mb-2">Alamat</label>
                        <input type="text" id="alamat" name="alamat" value="{{ $mahasiswa->alamat }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-slate-100 rounded text-sm w-full">
                    </div>
                </div>
            </div>
            <button type="submit" class="m-4 bg-[#235384] px-3 py-3 rounded text-sm text-white font-medium">Submit Data</button>
        </form>
    </div>
    @include('partials.footer')
</body>
</html>
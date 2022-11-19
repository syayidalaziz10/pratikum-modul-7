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
    <div class="container">
        <div class="m-20 flex flex-wrap items-start my-32">
            @foreach ($mahasiswa as $item)
            <div class="lg:w-1/4 w-full lg:pr-3 mb-4">
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-md">
                    <h5 class="mb-2 text-md font-semibold tracking-tight text-red">{{$item ['nama'] }}</h5>
                    <ul>
                        <li>{{$item ['nrp'] }}</li>
                        <li>{{$item ['email'] }}</li>
                        <li>{{$item ['alamat'] }}</li>
                    </ul>
                    <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('mahasiswa.edit', $item->id) }}" class="my-2 bg-[#235384] px-3 py-3 rounded text-sm text-white font-medium">Edit</a>
                        <button class="my-2 bg-red-500 px-3 py-3 rounded text-sm text-white font-medium">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
            <a href="{{ route('mahasiswa.create') }}" class="m-4 bg-[#235384] px-3 py-3 rounded text-sm text-white font-medium">Tambah</a>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
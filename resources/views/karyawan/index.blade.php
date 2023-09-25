<x-app-layout>
    <div class="max-w-7xl px-4 sm:px-6 lg:px-8  container mx-auto mt-5">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Karyawan') }}
            </h2>
           
        </x-slot>
    {{-- alert --}}
    @if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded-md mb-6">
        {{session('success')}}
    </div>
    @endif

    <a href="{{route('karyawan.create')}}" class="py-2 px-3 bg-blue-500 rounded-md text-white ">Tambah Karyawan</a>
        <table class="min-w-full my-5">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">No.</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$item->nama}}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$item->alamat}}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$item->telepon}}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="flex gap-4">

                            <a href="{{route('karyawan.show',["id"=>$item->id])}}" class="py-1.5 px-3 bg-blue-500 rounded-md text-white hover:bg-blue-400">detail</a>
                            <form action="{{route('karyawan.destroy',["id"=>$item->id])}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="py-1.5 px-3 rounded-md bg-rose-500 text-white hover:bg-rose-400">hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
              
                <!-- Tambahkan baris-baris tabel sesuai dengan data Anda -->
            </tbody>
        </table>
    </div>
</x-app-layout>
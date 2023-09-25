<x-app-layout>
    <div class="max-w-7xl px-4 sm:px-6 lg:px-8  container mx-auto mt-5">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Absensi') }}
            </h2>
           
        </x-slot>
    {{-- alert --}}
    @if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded-md mb-6">
        {{session('success')}}
    </div>
    @endif

    <a href="{{route('absensi.create')}}" class="py-2 px-3 bg-blue-500 rounded-md my-3 text-white ">Absen Seakarang </a>
        <table class="min-w-full mt-4">
            <thead>
                <tr>

                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$item->karyawan->nama}}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$item->created_at}}</td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="flex gap-4">


                            <form action="{{route('absensi.destroy',["id"=>$item->id])}}" method="post">
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
<x-app-layout>
    <div>

        <div class="max-w-7xl px-4 sm:px-6 lg:px-8  container mx-auto mt-5">
            {{-- session alert --}}
            @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-md mb-6">
                {{session('success')}}
            </div>
        @endif
    <form action="{{route('absensi.store')}}" method="POST">
        @csrf
        @method('post')
        <div class="space-y-12">
        
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-white">Lakukan Absen</h2>
            
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-6">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Nama Karyawan</label>
                <div class="mt-2">
                  <select type="text" name="karyawan_id" id="karyawan_id" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @foreach ($data as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                
                  </select>
                </div>
              </div>
      
              
      
           
      
           
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="{{route('absensi')}}" class="text-sm font-semibold leading-6 text-gray-900">Kembali</a>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambahkan</button>
        </div>
      </form>
        </div>
    </div>
    </x-app-layout>
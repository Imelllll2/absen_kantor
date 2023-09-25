{{-- layout from layout blade --}}
@extends('layout')

{{-- content section --}}   

@section('content')
<div class="container py-5">
  
    <div class="row">
        <div class="col-md-12 py-5">
            <div class="card">
                <div class="card-body shadow-sm">
                    
                    <h3>Absensi terakhir</h3>
        
                    <table class="table table-striped py-3" id="myTable">
                        <thead>

                            <tr class="bg-dark py-2 fw-bold text-light text-center"> 
                                <td class="text-light">
                                    Nama
                                </td>
                                <td class="text-light">
                                    jam masuk
                                </td>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $item)
                            <tr class="text-center">
                                    
                                <td>
                                    {{$item->karyawan->nama}}
                                </td>
                                <td>
                                    {{$item->created_at}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
@extends('/layout/main')


@section('judul','Table')
  
@section('isi')

<div class="container">
	<table class="table mt-4">
		<thead class="table-dark">
            <tr>
               <th scope="col">#</th>
               <th scope="col">Nama</th>
               <th scope="col">NIS</th>
               <th scope="col">Kelas</th>
               <th scope="col">Kompetensi Keahlian</th>
               <th scope="col">Ubah/Hapus</th>
            </tr>
        </thead>
        <tbody>
            	@foreach($student as $pel)
            <tr>
    			<td>{{$pel->id}}</td>
                <td>{{$pel->nama}}</td>
                <td>{{$pel->nis}}</td>
                <td>{{$pel->kelas}}</td>
                <td>{{$pel->kompetensi}}</td>
                <td>
                 <a class="btn btn-success" href="#" role="button">Ubah</a>
                 <a class="btn btn-danger" href="#" role="button">Hapus</a>
                </td>
            </tr>
            	@endforeach
        </tbody>
    </table>

</div>

@endsection

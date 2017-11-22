@extends('layouts.master')

@section('content')

<div class="container">
	<center><h2>Gudang Beras</h2> </center>
	<div class="table-responsive">          
		<table class="table table-striped" style="width: 1060px"> {{-- ini table --}}
			<thead>
				<tr>
					<th>Id Beras</th>
					<th>Id Gabah</th>
					<th>Tanggal Masuk</th>
					<th>Tanggal keluar</th>
					<th>Jumlah Beras (Ton)</th>
					<th>Kualitas</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				@foreach($beras as $beras)
				<tr>
					<td>
						{{$beras->id}}
					</td>
					<td>
						{{$beras->idGabah}}
					</td>
					<td>
						{{$beras->tanggalMasuk}}
					</td>
					<td>
						{{$beras->tanggalKeluar}}
					</td>
					<td>
						{{$beras->jumlahBeras}}
					</td>
					<td>
						{{$beras->kualitas}}
					</td>
					<td>
						
						<button class="btn btn-info" onclick="location.href='/beras/{{$beras->id}}/edit';" >Edit
						</button>
					</td>
							{{csrf_field()}}
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection


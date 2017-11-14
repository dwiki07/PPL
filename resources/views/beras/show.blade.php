@extends('layouts.master')

@section('content')

<div class="container">
	 <a href="/beras/create" class="btn btn-info" role="button" > <i class="fa fa-plus"></i> Create</a>
	<div class="table-responsive">          
		<table class="table table-striped"> {{-- ini table --}}
			<thead>
				<tr>
					<th>Id Beras</th>
					<th>Tanggal Masuk</th>
					<th>Tanggal keluar</th>
					<th>Jumlah Beras (Ton)</th>
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
						{{$beras->tanggalMasuk}}
					</td>
					<td>
						{{$beras->tanggalKeluar}}
					</td>
					<td>
						{{$beras->jumlahBeras}}
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


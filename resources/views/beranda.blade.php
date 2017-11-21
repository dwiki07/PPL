@extends('layouts.master')

@section('content')
<div class="container">
	<center><h2>Quality History</h2></center><br>
	<div class="table-responsive">          
		<table class="table table-striped"> {{-- ini table --}}
			<thead>
				<tr>
					<th>Id Kualitas</th>
					<th>Tanggal</th>
					<th>Kualitas</th>
					<th>Nama Supplier</th>
				</tr>
			</thead>
			<tbody>

				@foreach($beranda as $beranda )
				
				<tr>
					<td>
						{{$beranda->id_kualitas}}
					</td>
					<td>
						{{$beranda->created_at}}
					</td>
					<td>
						{{$beranda->kualitas}}
					</td>
					<td>
						{{$beranda->namaSupplier}}
					</td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
</div>

@endsection


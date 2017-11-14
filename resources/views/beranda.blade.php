@extends('layouts.master')

@section('content')
<div class="container">
	<center><h2>Quality History</h2></center><br>
	<div class="table-responsive">          
		<table class="table table-striped"> {{-- ini table --}}
			<thead>
				<tr>
					<th>Id Supplier</th>
					<th>Id Kualitas</th>
					<th>Tanggal</th>
					<th>Kualitas</th>
				</tr>
			</thead>
			<tbody>

				@foreach($kualitas as $kualitas )
				<tr>
					<td>
						{{$kualitas->idSupplier}}
					</td>
					<td>
						{{$kualitas->id_kualitas}}
					</td>
					<td>
						{{$kualitas->created_at}}
					</td>
					<td>
						{{$kualitas->kualitas}}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection


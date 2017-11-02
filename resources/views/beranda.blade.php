@extends('layouts.master')

@section('content')
<div class="container">
	<div class="table-responsive">          
		<table class="table table-striped"> {{-- ini table --}}
			<thead>
				<tr>
					<th>Id Kualitas</th>
					<th>Kualitas</th>
					<th>Tanggal</th>
				</tr>
			</thead>
			<tbody>

				@foreach($kualitas as $kualitas)
				<tr>
					<td>
						{{$kualitas->id_kualitas}}
					</td>
					<td>
						{{$kualitas->kualitas}}
					</td>
					<td>
						{{$kualitas->created_at}}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection


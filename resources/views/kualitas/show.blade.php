@extends('layouts.master')

@section('content')
<div class="container">
	 <a href="/kualitas/create" class="btn btn-info" role="button" > <i class="fa fa-plus"></i> Create</a>
	<div class="table-responsive">          
		<table class="table table-striped"> {{-- ini table --}}
			<thead>
				<tr>
					<th>Id Kualitas</th>
					<th>Hama</th>
					<th>Bau</th>
					<th>Derajat Sosoh</th>
					<th>Kadar Air</th>
					<th>Butir Utuh</th>
					<th>Butir Patah</th>
					<th>Butir Menir</th>
					<th>Butir Hijau</th>
					<th>Butir Kuning Rusak</th>
					<th>Butir Gabah</th>
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
						{{$kualitas->cekHama}}
					</td>
					<td>
						{{$kualitas->cekBau}}
					</td>
					<td>
						{{$kualitas->cekDerajatSosoh}}
					</td>
					<td>
						{{$kualitas->cekKadarAir}}
					</td>
					<td>
						{{$kualitas->cekButirUtuh}}
					</td>
					<td>
						{{$kualitas->cekButirPatah}}
					</td>
					<td>
						{{$kualitas->cekButirMenir}}
					</td>
					<td>
						{{$kualitas->cekButirHijau}}
					</td>
					<td>
						{{$kualitas->cekButirKuningRusak}}
					</td>
					<td>
						{{$kualitas->cekButirGabah}}
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


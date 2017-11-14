@extends('layouts.master')

@section('content')
<div class="container">
	 <a href="/gudang/create" class="btn btn-info" role="button" > <i class="fa fa-plus"></i> Create</a>
	<div class="table-responsive">          
		<table class="table table-striped"> {{-- ini table --}}
			<thead>
				<tr>
					<th>Id Supplier</th>
					<th>Id Gabah</th>
					<th>Tanggal Penerimaan</th>
					<th>Tanggal Penggilingan</th>
					<th>Jumlah Gabah (Ton)</th>
					<th>Harga Gabah</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				@foreach($gudang as $gudang)
				<tr>
					<td>
						{{$gudang->idSupplier}}
					</td>
					<td>
						{{$gudang->id}}
					</td>
					<td>
						{{$gudang->tanggalPenerimaan}}
					</td>
					<td>
						{{$gudang->tanggalPenggilingan}}
					</td>
					<td>
						{{$gudang->jumlahGabah}}
					</td>
					<td>
						{{$gudang->hargaGabah}}
					</td>

					<td>
						
						<button class="btn btn-info" onclick="location.href='/gudang/{{$gudang->id}}/edit';" >Edit
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


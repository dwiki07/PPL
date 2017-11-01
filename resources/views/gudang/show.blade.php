@extends('layouts.master')

@section('content')
<div class="container">
	 <a href="/gudang/create" class="btn btn-info" role="button" > <i class="fa fa-plus"></i> Create</a>
	<div class="table-responsive">          
		<table class="table tabel-striped"> {{-- ini table --}}
			<thead>
				<tr>
					<th>Id Gabah</th>
					<th>Tanggal Penerimaan</th>
					<th>Tanggal Penggilingan</th>
					<th>Jumlah Gabah (Kw)</th>
					<th>Harga Gabah</th>
					<th>ID Supplier</th>
					<th>Tanggal Masuk </th>
					<th>Tanggal Keluar</th>
					<th>Jumlah Beras(Kw)</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				@foreach($gudang as $gudang)
				<tr>
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
						{{$gudang->IdSupplier}}
					</td>
					<td>
						{{$gudang->tanggalMasuk}}
					</td>
					<td>
						{{$gudang->tanggalKeluar}}
					</td>
					<td>
						{{$gudang->jumlahBeras}}
					</td>
					<td>
						<button class="btn btn-info" onclick="location.href='/gudang/{{$gudang->id}}/edit';" >Edit
						</button>
					</td>
					<td>
						<form action="/gudang/{{$gudang->id}}" method="post">
							<input class="btn btn-info" type="submit" name="submit" value="Delete"/>

							{{csrf_field()}}
							<input type="hidden" name="_method" value="delete"/>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection


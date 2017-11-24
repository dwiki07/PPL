@extends('layouts.master')

@section('content')
<div class="container">
	<center><h2>Gudang Gabah</h2> </center>
	 <a href="/gudang/create" class="btn btn-info" role="button" > <i class="fa fa-plus"></i> Create</a>

	<div class="table-responsive">          
		<table class="table table-striped" style="width: 1060px"> {{-- ini table --}}
			<thead>
				<tr>
					<th>Nama Supplier</th>
					<th>Id Gabah</th>
					<th>Tanggal Penerimaan</th>
					<th>Jumlah Gabah (Ton)</th>
					<th>Harga Gabah</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				@foreach($gudang as $gudang)
				<tr>
					<td>
						{{$gudang->namaSupplier}}
					</td>
					<td>
						{{$gudang->id}}
					</td>
					<td>
						{{$gudang->tanggalPenerimaan}}
					</td>
					<td>
						{{$gudang->jumlahGabah}}
					</td>
					<td>
						Rp.{{$gudang->hargaGabah}},00
					</td>

					<td>
						
						<button class="btn btn-info" onclick="location.href='/gudang/{{$gudang->id}}/edit';" >Edit
						</button>
						<button class="btn btn-info" onclick="location.href='/kualitas/{{$gudang->id}}/create';" >Check
						</button>
					</td>
							{{csrf_field()}}
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>
@endsection


@extends('layouts.master')

@section('content')
<div class="container">
	<center><h2>Gudang Gabah</h2> </center>
	 <a href="/gabah/create" class="btn btn-info" role="button" > <i class="fa fa-plus"></i> Create</a>

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

				@foreach($gabah as $gabah)
				<tr>
					<td>
						{{$gabah->namaSupplier}}
					</td>
					<td>
						{{$gabah->id}}
					</td>
					<td>
						{{$gabah->tanggalPenerimaan}}
					</td>
					<td>
						{{$gabah->jumlahGabah}}
					</td>
					<td>
						Rp.{{$gabah->hargaGabah}},00
					</td>

					<td>
						
						<button class="btn btn-info" onclick="location.href='/gabah/{{$gabah->id}}/edit';" >Edit
						</button>
						<button class="btn btn-info" onclick="location.href='/kualitas/{{$gabah->id}}/create';" >Check
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


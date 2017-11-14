@extends('layouts.master')

@section('content')
<div class="container">
	 <a href="/supplier/create" class="btn btn-info" role="button" > <i class="fa fa-plus"></i> Create</a>
	<div class="table-responsive">          
		<table class="table table-striped"> {{-- ini table --}}
			<thead>
				<tr>
					<th>Id Supplier</th>
					<th>Nama Supplier</th>
					<th>Alamat Supplier</th>
					<th>No Telepon Supplier</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				@foreach($supplier as $supplier)
				<tr>
					<td>
						{{$supplier->id}}
					</td>
					<td>
						{{$supplier->namaSupplier}}
					</td>
					<td>
						{{$supplier->alamatSupplier}}
					</td>
					<td>
						{{$supplier->nomorTelepon}}
					</td>

					<td>
						
						<button class="btn btn-info" onclick="location.href='/supplier/{{$supplier->id}}/edit';" >Edit
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


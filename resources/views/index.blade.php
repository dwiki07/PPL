@extends('layouts.app')

@section('content')
<div class="container">
	 <a href="/pemesanan/create" class="btn btn-info" role="button" > <i class="fa fa-plus"></i> Create</a>
	<div class="table-responsive">          
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nama Pemesan</th>
					<th>Alamat</th>
					<th>Tujuan</th>
					<th>Tanggal Pesan</th>
					<th>tanggal Berangkat</th>
					<th>total Hari</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<h1>percobaan</h1>

				@foreach($pemesanan as $pemesanan)
				<tr>
					<td>
						{{$pemesanan->id}}
					</td>
					<td>
						{{$pemesanan->namaPemesan}}
					</td>
					<td>
						{{$pemesanan->alamatPemesan}}
					</td>
					<td>
						{{$pemesanan->tujuan}}
					</td>
					<td>
						{{$pemesanan->tanggalPesan}}
					</td>
					<td>
						{{$pemesanan->tanggalberangkat}}
					</td>
					<td>
						{{$pemesanan->totalhari}}
					</td>
					<td>
						<button class="btn btn-info" onclick="location.href='/pemesanan/{{$pemesanan->id}}/edit';" >edit
						</button>
					</td>
					<td>
						<form action="/pemesanan/{{$pemesanan->id}}" method="post">
							<input class="btn btn-info" type="submit" name="submit" value="delete"/>

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


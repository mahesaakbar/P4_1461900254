<!DOCTYPE html>
<html>
<head>
	<title>Export Laporan Excel Pada Laravel</title>
	
</head>
<body>

	<div class="container">
		<center>
			<h4>Export Laporan Excel Pada Laravel</h4>
			
		
		<a href="/buku/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
		
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>judul</th>
					<th>tahun_terbit</th>
				
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($buku as $s)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->Buku}}</td>
					<td>{{$s->tahun_terbit}}</td>
				
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Data Peserta</title>
</head>
<body>
 
	<h2>Data Peserta Layanan BPTIK Dikbud</h2>
 
	<a href="/peserta/tambah"> + Tambah Peserta Layanan</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Instansi</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telpon</th>
            <th>email</th>
            <th>Jenis Layanan</th>
			<th>Opsi</th>
		</tr>
		@foreach($peserta as $p)
		<tr>
			<td>{{ $p->peserta_instansi }}</td>
			<td>{{ $p->peserta_nama }}</td>
			<td>{{ $p->peserta_alamat }}</td>
			<td>{{ $p->peserta_telpon }}</td>
            <td>{{ $p->peserta_email }}</td>
            <td>{{ $p->peserta_jenis_layanan }}</td>
			<td>
				<a href="/peserta/edit/{{ $p->peserta_id }}">Edit</a>
				|
				<a href="/peserta/hapus/{{ $p->peserta_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>


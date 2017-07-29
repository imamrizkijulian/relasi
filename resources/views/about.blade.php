<!DOCTYPE html>
<html>
<head>
	<title>Halaman About</title>
</head>
<body>
		<center><h3>Nama Saya Imam Rizki Julian</h3>
				<h3>Saya Tinggal Di Jl.Baru Raya Rt 02/03</h3>
				<h3>Status Saya Sebagai Pelajar Yang Disiplin</h3></center>

		@foreach($ortu as $data)<hr>
		Nama Ayah : {{$data->nama_ayah}}<br>
		Nama Ibu : {{$data->nama_ibu}}<br>
		Umur Ayah : {{$data->umur_ayah}}<br>
		Umur Ibu : {{$data->umur_ibu}}<br><br>
		Nama Anak : 

		<!--$data->anaks ngambil dari model orangtua method "anaks" -->
		@foreach($data->anaks as $key)
		<li>{{$key->nama}}</li><br>
		@endforeach
		@endforeach
		
		
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP|Satisfy&display=swap" rel="stylesheet">
	<style>
	html, body {
		background-color: #008B8B;
		font-family: Noto Serif JP;
	}
	.card {

		margin: auto;
		width: 700px;
		height: 400px;
		margin-top: 40px;
		box-shadow: 15px 15px 15px  #E6E6FA;
		border: 2px solid lightblue;
		position: relative;
		background-color: #FFF;

	}
	h1 {
		color: #008B8B;
		font-weight: bold;
		font-size: 36px;
		text-align: center;
		text-shadow: 5px 5px 5px #E6E6FA;
	}

	img {
		position: absolute;
		margin-left: 275px;
	}
	p {
		text-align: center;
	}

	.btn {
		display: inline-block;
		margin-bottom: 0;
		font-weight: 400;
		text-align: center;
		vertical-align: middle;
		cursor: pointer;
		background-image: none;
		border: 1px solid transparent;
		white-space: nowrap;
		padding: 6px 12px;
		font-size: 14px;
		line-height: 1.42857143;
		border-radius: 4px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		background-color: #008B8B;
		color: #FFF;
		width: 150px;
		margin-left: 262px;
	}



</style>
</head>
<body>
	<div class="card"> 
		<h1><span style="border-bottom: 3px solid #008B8B">REGISTRASI BEASISWA BERHASIL</span></h1>

		<p style="font-size: 16px">NO REGISTRASI : {{ $noreg }}</p>
		<p style="font-size: 16px">NAMA : {{ $nama }}</p>
		<p style="font-size: 16px">NIM : {{ $nim }}</p>
		<hr>
		<p>Untuk informasi lebih lanjut silahkan kunjungi website universitas bumigora dengan meng-klik button dibawah</p>
		<a style="color: #FFF" href="www.universitasbumigora.ac.id" class="btn" style="">CLICK</a>
	</div>
</body>
</html>
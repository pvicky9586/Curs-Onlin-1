<!DOCTYPE html>
<html>
<head>
	<title>Inscritos</title>
	 <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> 
   <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
</head>
<body>

<h1 align="center">Listado de Inscritos</h1>
<h2 class="text-primary">Cursos: {{$curso->title}}</h2>
<table>
	<head>
		<tr>
			<th>Nombre y Apellido</th>
		</tr>
	</head>
	<tbody>
		@foreach($inscs as $insc)
		<tr>
		@if ($insc->conf == 1)

		@foreach ($parts as $part)
			@if($part->id == $insc->part_id)
				<td>{{ $part->name }} {{ $part->last_name }} </td>
			@endif
		@endforeach
		@endif
		@endforeach

		</tr>
	</tbody>
</table>
</body>
</html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Prueba checkbox</title>
	<meta name="author" content="edtorm@outlook.com" />
</head>
<body>
	{{ Form::open(array('url' => 'foo/bar')) }}

		{{ Form::text('name', null, array('id' => 'name', 'placeholder' => 'Nombre')) }}

		<br /><br />

		{{ Form::checkbox('client', '1', null, ['id' => 'client']) }}
		{{ Form::label('email', 'Cliente') }}

		<br /><br />

		{{ Form::checkbox('ente_auditor', '2', null, ['id' => 'ente_auditor']) }}
		{{ Form::label('email', 'Ente Auditor') }}

		<br /><br />

		{{ Form::checkbox('auditor', '3', null, ['id' => 'auditor']) }}
		{{ Form::label('email', 'Auditor') }}

		<br /><br />
		{{ Form::submit('Enviar') }}
    
	{{ Form::close() }}

</body>
</html>
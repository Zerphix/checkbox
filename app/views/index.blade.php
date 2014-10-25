<html>
<head>
	<meta charset="utf-8" />
	<title>Prueba checkbox</title>
	<meta name="author" content="edtorm@outlook.com" />
</head>
<body>
	{{ Form::open(array('url' => 'save')) }}

		{{ Form::text('name', null, array('id' => 'name', 'placeholder' => 'Nombre')) }}

		<br /><br />

		{{ Form::checkbox('type[]', '1', null, ['id' => 'cliente']) }}
		{{ Form::label('email', 'Cliente') }}

		<br /><br />

		{{ Form::checkbox('type[]', '1', null, ['id' => 'ente']) }}
		{{ Form::label('email', 'Ente Auditor') }}

		<br /><br />

		{{ Form::checkbox('type[]', '1', null, ['id' => 'auditado']) }}
		{{ Form::label('email', 'Auditor') }}

		<br /><br />
		{{ Form::submit('Enviar') }}
    
	{{ Form::close() }}

</body>
</html>
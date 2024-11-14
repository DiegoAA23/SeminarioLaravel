<!DOCTYPE html>
<html>

<head>
    <title>Edit Alumno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="icon" href="logo.png" type="image/png">
</head>

<body class="container mt-5">
    <h1>Editar Alumnos</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif
    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Alumno</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $alumno->nombre }}" required>
            <label for="apellido" class="form-label">Apellido Alumno</label>
            <input type="text" name="apellido" class="form-control" id="apellido" value="{{ $alumno->apellido }}"
                required>
            <label for="email" class="form-label">Correo Alumno</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $alumno->email }}" required>
            <label for="edad" class="form-label">Edad Alumno</label>
            <input type="number" name="edad" class="form-control" id="edad" value="{{ $alumno->edad }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Regresar</a>
    </form>
</body>

</html>
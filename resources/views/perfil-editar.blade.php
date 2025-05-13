<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <div class="perfil-container">
        <form action="" method="POST">
            @csrf
            <h1><i class="fas fa-user-circle"></i> Editar Perfil</h1>
            <div class="perfil-info">
                <p><i class="fas fa-user"></i> Nombre: {{ $user->name }}</p>
                <p><i class="fas fa-envelope"></i> Correo electrónico: {{ $user->email }}</p>
                <p><i class="fas fa-user-tag"></i> Rol: {{ $user->rol->nombre }}</p>
            </div>

            <h2><i class="fas fa-edit"></i> Editar Información</h2>
            <div class="input-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="input-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <button type="submit"><i class="fas fa-save"></i> Guardar Cambios</button>
            <a href="{{ route('perfil') }}" class="cancel-btn"><i class="fas fa-times"></i> Cancelar</a>

        </form>
        <h1><i class="fas fa-user-circle"></i> Perfil de Usuario</h1>
        <div class="perfil-info">
            <p><i class="fas fa-user"></i> Nombre: {{ $user->name }}</p>
            <p><i class="fas fa-envelope"></i> Correo electrónico: {{ $user->email }}</p>
            <p><i class="fas fa-user-tag"></i> Rol: {{ $user->rol->nombre }}</p>
        </div>

        <h2><i class="fas fa-gamepad"></i> Mis Juegos</h2>
        <ul>
            <li>Juego 1</li>
            <li>Juego 2</li>
            <li>Juego 3</li>
        </ul>

        <a href="{{ route('logged') }}"><i class="fas fa-arrow-left"></i> Volver al inicio</a>
    </div>
</body>

</html>

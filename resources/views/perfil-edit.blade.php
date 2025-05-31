<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar perfil</title>
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <div class="perfil-container">
        <form action="{{ route('perfil-update', $user) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="perfil-header">
                <div class="header-title">
                    <div class="profile-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h1>Perfil de Usuario</h1>
                </div>
            </div>
            <h2><i class="fas fa-edit"></i> Editar Información</h2>
            <br>
            <div class="perfil-info">
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-user"></i>
                            <span>Nombre</span>
                        </div>
                        <input type="text" id="name" name="name" value="{{ $user->name }}">
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-envelope"></i>
                            <span>Correo electrónico</span>
                        </div>
                        <input type="email" id="email" name="email" value="{{ $user->email }}">
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-lock"></i>
                            <span>Contraseña</span>
                        </div>
                        <input type="password" id="password" name="password" placeholder="Nueva contraseña">
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-lock"></i>
                            <span>Confirmar contraseña</span>
                        </div>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña">
                    </div>
                </div>
                        <div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <h2>Errores:</h2>
                    <ul>

                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach

                    </ul>
                </div>
            @endif

        </div>
            </div>
            <div class="center-btn">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar Cambios</button>
            </div>
        </form>

        <div class="action-buttons">
            <a href="{{ route('perfil', ['user' => $user->id]) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Cancelar
            </a>
            <a href="{{ route('logged') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Volver al inicio
            </a>
        </div>

    </div>
</body>

</html>

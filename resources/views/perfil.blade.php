<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil de Usuario</title>
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Fuentes de Google -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
</head>

<body>
    <!-- Estrellas centelleantes -->
    <div class="star star-1"></div>
    <div class="star star-2"></div>
    <div class="star star-3"></div>
    <div class="star star-4"></div>
    <div class="star star-5"></div>
    <div class="star star-6"></div>
    <div class="star star-7"></div>
    <div class="star star-8"></div>
    <div class="star star-9"></div>
    <div class="star star-10"></div>
    <div class="star star-11"></div>
    <div class="star star-12"></div>

    <div class="perfil-container">
        <!-- Elementos decorativos -->
        <div class="glow glow-1"></div>
        <div class="glow glow-2"></div>

        <div class="perfil-header">
            <div class="header-title">
                <div class="profile-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <h1>Perfil de Usuario</h1>
            </div>
        </div>

        <div class="perfil-info">
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">
                        <i class="fas fa-user"></i>
                        <span>Nombre</span>
                    </div>
                    <div class="info-value">{{ $user->name }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">
                        <i class="fas fa-envelope"></i>
                        <span>Correo electrónico</span>
                    </div>
                    <div class="info-value">{{ $user->email }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">
                        <i class="fas fa-lock"></i>
                        <span>Contraseña</span>
                    </div>
                    <div class="info-value">••••••••••••</div>
                </div>

                <div class="info-item">
                    <div class="info-label">
                        <i class="fas fa-user-tag"></i>
                        <span>Rol</span>
                    </div>
                    <div class="info-value">{{ $user->rol->nombre }}</div>
                </div>
            </div>
        </div>

        <div class="action-buttons">
            <a href="{{ route('perfil-edit', ['user' => $user->id]) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Editar perfil
            </a>
            <a href="{{ route('logged') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Volver al inicio
            </a>
        </div>
    </div>
</body>

</html>

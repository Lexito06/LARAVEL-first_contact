<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar categoría</title>
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <div class="perfil-container">
        <form action="{{ route('updateCategoria', $categoria) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="perfil-header">
                <div class="header-title">
                    <div class="profile-avatar">
                        <i class="fas fa-tags"></i>
                    </div>
                    <h1>Editar Categoría</h1>
                </div>
            </div>
            <h2><i class="fas fa-edit"></i> Modificar Información</h2>
            <br>
            <div class="perfil-info">
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-tag"></i>
                            <span>Nombre de la categoría</span>
                        </div>
                        <input type="text" id="nombre" name="nombre" value="{{ $categoria->nombre }}" required>
                    </div>
                </div>
            </div>
            <div class="center-btn">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar Cambios</button>
            </div>
        </form>

        <div class="action-buttons">
            <a href="{{ route('admin') }}" class="btn btn-primary">
                <i class="fas fa-times"></i> Cancelar
            </a>
            <a href="{{ route('logged') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Volver al inicio
            </a>
        </div>

    </div>
</body>

</html>

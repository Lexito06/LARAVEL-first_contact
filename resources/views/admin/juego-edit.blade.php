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
        <form action="{{ route('updateJuego', $juego) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="perfil-header">
                <div class="header-title">
                    <div class="profile-avatar">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <h1>Editar Juego</h1>
                </div>
            </div>

            <h2><i class="fas fa-edit"></i> Información del Juego</h2>
            <br>

            <div class="perfil-info">
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-user"></i>
                            <span>Nombre del Juego</span>
                        </div>
                        <input type="text" id="nombre" name="nombre" value="{{ $juego->nombre }}">
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-align-left"></i>
                            <span>Descripción</span>
                        </div>
                        <textarea id="descripcion" name="descripcion" rows="4" placeholder="Descripción del juego">{{ $juego->descripcion }}</textarea>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-euro-sign"></i>
                            <span>Precio (€)</span>
                        </div>
                        <input type="number" id="precio" name="precio" value="{{ $juego->precio }}" step="0.01"
                            min="0" required>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-star"></i>
                            <span>nota (1-5 estrellas)</span>
                        </div>
                        <input type="number" id="nota" name="nota" value="{{ $juego->nota }}" min="1"
                            max="5" step="1" required>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-tags"></i>
                            <span>Categoría</span>
                        </div>
                        <select id="id_categoria" name="id_categoria" required>
                            @foreach ($categorias as $categoria)
                                @if ($juego->categoria->nombre === $categoria->nombre)
                                    <option value="{{ $categoria->id }}" selected>{{ $categoria->nombre }}</option>
                                @else
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="center-btn">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar Cambios</button>
            </div>
        </form>

        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </ul>
            </div>
        @endif

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

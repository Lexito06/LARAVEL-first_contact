<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Juego - GameDev Portal</title>
    <link rel="stylesheet" href="{{ asset('css/developer.css') }}">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="back-arrow">
        <a href="{{ route('juego.index') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> Volver al Inicio
        </a>
    </div>
    <div class="stars" id="stars"></div>

    <div class="container">
        <header>
            <div class="logo">
                <a href="{{ asset('juego') }}">
                    <img src="{{ asset('img/logoblanco.png') }}" alt="Logo de la web">
                </a>
            </div>
            <p class="subtitle">Publica tu juego en nuestra plataforma</p>
        </header>

        <div class="form-container">
            <form id="gameUploadForm" enctype="multipart/form-data" method="POST" action="{{ route('juego.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nombre">Título del Juego <span class="required">*</span></label>
                    <input type="text" id="nombre" name="nombre" required
                        placeholder="Ingresa el título de tu juego">
                </div>

                <div class="form-group">
                    <label for="imagen">Imagen Principal <span class="required">*</span></label>
                    <div class="file-upload" id="imageUpload">
                        <div class="upload-icon">📷</div>
                        <p>Arrastra una imagen o haz clic para seleccionar</p>
                        <p style="font-size: 0.8rem; opacity: 0.7; margin-top: 0.5rem;">Formatos aceptados: JPG, PNG</p>
                        <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png" required>
                        <img id="previewImg" class="preview-image" src="" alt="Vista previa">
                    </div>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción <span class="required">*</span></label>
                    <textarea id="descripcion" name="descripcion" required
                        placeholder="Describe tu juego, sus características, requisitos mínimos..."></textarea>
                </div>

                <div class="form-group">
                    <label for="id_categoria">Categoría <span class="required">*</span></label>
                    <select id="id_categoria" name="id_categoria" required>
                        <option value="" disabled selected>Selecciona una categoría</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="precio">Precio <span class="required">*</span></label>
                    <div class="price-group">
                        <span class="price-symbol">$</span>
                        <input type="number" id="precio" name="precio" min="0" step="0.01" required
                            placeholder="0.00" class="price-input">
                    </div>
                </div>

                <div class="button-group">
                    <a href="{{ route('juego.index') }}" class="back-link">
                        <button type="button" class="back-btn">
                            <span class="back-icon">←</span> Volver
                        </button>
                    </a>
                    <button type="submit" class="submit-btn">Publicar Juego</button>
                </div>
            </form>
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

    <script src="{{ asset('js/developer.js') }}"></script>
</body>

</html>
